{{ include('layouts/header.php', {title:'User Create'})}}
<div class="container">
    <form method="post">
        <h1>New user</h1><br>
        <label>Username
            <input type="text" name="username" value="{{user.username}}">
        </label>
        {% if errors.username is defined %}
        <span class="error"> {{errors.username}}</span>
        {% endif %}
        <label>Password
            <input type="password" name="password" value="{{user.password}}">
        </label>
        {% if errors.password is defined %}
        <span class="error"> {{errors.password}}</span>
        {% endif %}
        <label>Name
            <input type="text" name="name" value="{{user.name}}">
        </label>
        {% if errors.name is defined %}
        <span class="error"> {{errors.name}}</span>
        {% endif %}
        <label>Email
            <input type="email" name="email" value="{{user.email}}">
        </label>
        {% if errors.email is defined %}
        <span class="error"> {{errors.email}}</span>
        {% endif %}
        <label>Privilege
            <select name="privilege_id">
                <option value="">Select privilege</option>
                {% for privilege in privileges %}
                <option value="{{ privilege.id }}" {% if privilege.id== users.privilege_id %} selected {% endif %}>{{ privilege.privilege }}</option>
                {% endfor %}
            </select>
        </label>
        <input type="submit" value="Save" class="btn">
    </form>
</div>
{{ include('layouts/footer.php')}}