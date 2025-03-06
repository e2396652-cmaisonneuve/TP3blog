{{ include('layouts/header.php', {title:'User'})}}
<div>
    <h1>User</h1>
    <p><strong>Username: </strong>{{ user.name }}</p><br>
    <p><strong>Password: </strong>{{ user.address }}</p><br>
    <p><strong>Name: </strong>{{ user.name }}</p><br>
    <p><strong>Email: </strong>{{ user.email }}</p><br>
    <a href="{{base}}/user/edit?id={{ user.id }}" class="btn">Edit</a>
</div>
{{ include('layouts/footer.php')}}