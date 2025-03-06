<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{asset}}css/style.css">
</head>

<body>
    <header>
        <div class="header-img container-top">
            <h1>Blog</h1>
        </div>
        <div class="container-top">
            <nav>
                <ul>
                    <li><a href="{{base}}/home">Home</a></li>
                    {% if session.privilege_id == 1 %}
                    <li><a href="{{base}}/dashboard">Dashboard</a></li>
                    <li><a href="{{base}}/users">View Users</a></li>
                    <li><a href="{{base}}/user/create">Create User</a></li>
                    {% endif %}
                    {% if session.privilege_id == 2 %}
                    <li><a href="{{base}}/categorie/create">Add Categorie</a></li>
                    {% endif %}
                    {% if guest %}
                    <li><a href="{{base}}/login">Login</a></li>
                    {% else %}
                    <li><a href="{{base}}/article/create">Add Article</a></li>
                    <li><a href="{{base}}/comment/create">Add Comment</a></li>
                    {% endif %}

                </ul>
            </nav>
        </div>
    </header>
    {% if guest is empty %}
    <div class="welcome">
        Hello {{ session.users_name }}!
        <li><a href="{{base}}/logout">Logout</a></li>
    </div>
    {% endif %}
    <main>