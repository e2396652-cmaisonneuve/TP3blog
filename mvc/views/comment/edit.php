{{ include('layouts/header.php', {title:'Comment Edit'})}}
    <div class="container">
        <form method="post">
            <h1>Edit comment</h1>
            <label>Message<br>
            <textarea id="message" name="message" rows="4" cols="50" value="{{comment.message}}">{{comment.message}}</textarea>
        </label>
        {% if errors.message is defined %}
        <span class="error"> {{errors.message}}</span>
        {% endif %}
        <label>User
               <select name="users_id">
                {% for user in users %}
                <option value="{{ user.id}}" {%if user.id == user.users_id %}selected {% endif %} >{{ user.name}}</option>
                {% endfor %}
                </select>
            </label>
            <label>Article
               <select name="articles_id">
                {% for article in articles %}
                <option value="{{ article.id}}" {%if article.id == article.articles_id %}selected {% endif %} >{{ article.title}}</option>
                {% endfor %}
                </select>
            </label>
            <label>Date
            <input type="date" id="date" name="date" value="{{comment.date}}">
        </label>
        {% if errors.date is defined %}
        <span class="error"> {{errors.date}}</span>
        {% endif %}
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}