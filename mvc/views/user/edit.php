{{ include('layouts/header.php', {title:'User Edit'})}}
    <div class="container">
        <form method="post">
            <h1>Edit user</h1>
            <label>Username
                <input type="text" name="username" value="{{user.username}}">
            </label>
            {% if errors.username is defined %}
                <span class="error"> {{errors.username}}</span>
            {% endif %}
            <label>Password
                <input type="text" name="password" value="{{user.password}}">
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
                <input type="email" name="email"  value="{{user.email}}">
            </label>
            {% if errors.email is defined %}
                <span class="error"> {{errors.email}}</span>
            {% endif %}
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}