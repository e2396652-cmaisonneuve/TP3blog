{{ include('layouts/header.php', {title:'Comment Create'})}}
<div class="container">
    <form method="post">
        <h1>New comment</h1><br>
        <label>Message<br>
            <textarea id="message" name="message" rows="4" cols="70" value="{{comment.message}}"></textarea>
        </label>
        {% if errors.message is defined %}
        <span class="error"> {{errors.message}}</span>
        {% endif %}
        <label>Date
            <input type="date" id="date" name="date">
        </label>
        {% if errors.date is defined %}
        <span class="error"> {{errors.date}}</span>
        {% endif %}
        <label>User
            <select name="users_id">
                <option value="">Select user</option>
                {% for user in users %}
                <option value="{{ user.id}}">{{ user.name}}</option>
                {% endfor %}
            </select>
        </label>
        {% if errors.user is defined %}
        <span class="error"> {{errors.user}}</span>
        {% endif %}
        <label>Article
            <select name="articles_id">
                <option value="">Select article</option>
                {% for article in articles %}
                <option value="{{ article.id}}">{{ article.title}}</option>
                {% endfor %}
            </select>
        </label>
        {% if errors.article is defined %}
        <span class="error"> {{errors.article}}</span>
        {% endif %}
        <input type="submit" value="Save" class="btn">

    </form>
</div>
{{ include('layouts/footer.php')}}