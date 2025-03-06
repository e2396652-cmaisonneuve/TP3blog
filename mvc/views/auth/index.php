{{ include('layouts/header.php', {title:'Login'})}}
<div class="container_login">

    <form method="post">
        <h2>Login</h2>
        <label>Username
            <input type="text" name="username" value="{{ users.username }}">
        </label>
        <label>Password
            <input type="password" name="password">
        </label>
        <input type="submit" class="btn" value="login">
    </form>
    {% if errors is defined %}
    <div class="error">
        <ul>
            {% for error in errors %}
            <li>{{ error }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
</div>
{{ include ('layouts/footer.php')}}