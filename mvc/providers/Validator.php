<?php

namespace App\Providers;

class Validator
{

    private $errors = array();
    private $key;
    private $value;
    private $name;

    public function field($key, $value, $name = null)
    {
        $this->key = $key;
        $this->value = $value;
        if ($name == null) {
            $this->name = ucfirst($key);
        } else {
            $this->name = ucfirst($name);
        }
        return $this;
    }

    public function required()
    {
        if (empty($this->value)) {
            $this->errors[$this->key] = "$this->name is required!";
        }
        return $this;
    }

    public function unique($model)
    {
        $model = 'App\\Models\\' . $model;
        $model = new $model;
        $unique = $model->unique($this->key, $this->value);
        if ($unique) {
            $this->errors[$this->key] = "$this->name must be unique.";
        }
        return $this;
    }

    public function max($length)
    {
        if (strlen($this->value) > $length) {
            $this->errors[$this->key] = "$this->name must be less than $length characters!";
        }
        return $this;
    }

    public function min($length)
    {
        if (strlen($this->value) < $length) {
            $this->errors[$this->key] = "$this->name must be more than $length characters!";
        }
        return $this;
    }

    public function number()
    {
        if (!empty($this->value) && !is_numeric($this->value)) {
            $this->errors[$this->key] = "$this->name must be a number!";
        }
        return $this;
    }

    public function email()
    {
        if (!empty($this->value) && !filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$this->key] = "$this->name invalid!";
        }
        return $this;
    }

    public function image()
    {

        if ($this->value["fileToUpload"]["error"] == 1) {
            $this->errors[$this->key] = "An error has occurred with the image.";
            return $this;
        };

        $target_file = $_SERVER["DOCUMENT_ROOT"] . UPLOAD . basename($this->value["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($this->value["fileToUpload"]["tmp_name"]);
        if ($check == false) {
            $this->errors[$this->key] = "Format $this->name not supported.";
        };

        // Check file size
        if ($this->value["fileToUpload"]["size"] > 250000) {
            $this->errors[$this->key] = "Image is too large.";
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $this->errors[$this->key] = "Only JPG, JPEG, PNG, and GIF formats are accepted.";
        }


        return $this;
    }

    public function isSuccess()
    {
        if (empty($this->errors)) return true;
    }

    public function getErrors()
    {
        if (!$this->isSuccess()) return $this->errors;
    }
}
