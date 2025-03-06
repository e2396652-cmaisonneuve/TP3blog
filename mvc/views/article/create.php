{{ include('layouts/header.php', {title:'Article Create'})}}
<div class="container">
    <form method="post">
    <h1>New article</h1>
        <label>Title
            <input type="text" name="title" value="{{article.title}}">
        </label>
        {% if errors.title is defined %}
        <span class="error"> {{errors.title}}</span>
        {% endif %}
        <label>Content<br>
            <textarea id="content" name="content" rows="4" cols="50" value="{{article.content}}"></textarea>
        </label>
        {% if errors.content is defined %}
        <span class="error"> {{errors.content}}</span>
        {% endif %}
        <label>User
               <select name="users_id">
                {% for user in users %}
                <option value="{{ user.id}}">{{ user.name}}</option>
                {% endfor %}
                </select>
            </label>
            <label>Categorie
               <select name="categories_id">
                {% for categorie in categories %}
                <option value="{{ categorie.id}}">{{ categorie.name}}</option>
                {% endfor %}
                </select>
            </label>
        <label>Date
            <input type="date" id="date" name="date">
        </label>
        {% if errors.date is defined %}
        <span class="error"> {{errors.date}}</span>
        {% endif %}

        <input type="submit" value="Save" class="btn">
    </form>
</div>
{{ include('layouts/footer.php')}}