{{ include('layouts/header.php', {title:'Article Edit'})}}
<div class="container">
    <form method="post">
        <h1>Edit Article</h1>
        <label>Title
            <input type="text" name="title" value="{{article.title}}">
        </label>
        {% if errors.title is defined %}
        <span class="error"> {{errors.title}}</span>
        {% endif %}
        <label>Content<br>
            <textarea id="content" name="content" rows="6" cols="75" value="{{article.content}}">{{article.content}}</textarea>
        </label>
        {% if errors.content is defined %}
        <span class="error"> {{errors.content}}</span>
        {% endif %}
        <label>User
            <select name="users_id">
                <option value="">Select user</option>
                {% for user in users %}
                <option value="{{ user.id}}" {% if privilege.id== articles.users_id %} selected {% endif %}>{{ user.name}}</option>
                {% endfor %}
            </select>
        </label>
        {% if errors.user is defined %}
        <span class="error"> {{errors.user}}</span>
        {% endif %}
        <label>Categorie
            <select name="categories_id">
                <option value="">Select categorie</option>
                {% for categorie in categories %}
                <option value="{{ categorie.id}}" {% if privilege.id== articles.categories_id %} selected {% endif %}>{{ categorie.name }}</option>
                {% endfor %}
            </select>
        </label>
        {% if errors.categorie is defined %}
        <span class="error"> {{errors.categorie}}</span>
        {% endif %}
        <label>Date
            <input type="date" id="date" name="date" value="{{article.date}}">
        </label>
        {% if errors.date is defined %}
        <span class="error"> {{errors.date}}</span>
        {% endif %}
        <label>Select image to upload: </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        {% if errors.fileToUpload is defined %}
        <span class="error">{{errors.fileToUpload}}</span>
        {% endif %}
        <input type="submit" value="Save" class="btn">
    </form>
</div>
{{ include('layouts/footer.php')}}