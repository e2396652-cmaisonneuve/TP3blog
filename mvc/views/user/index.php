{{ include('layouts/header.php', {title:'Users'})}}
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <!-- <th>Password</th> -->
            <th>Name</th>
            <th>Email</th>
            <th>Privilege</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        {% for user in users %}
        <tr>
            <td>{{user.username}}</td>
            <!-- <td>{{user.password}}</td> -->
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.privilege_id}}</td>
            <td> <a href="{{base}}/user/show?id={{user.id}}" class="btn">View</a></td>
            <td>
                <form action="{{base}}/user/delete" method="post">
                    <input type="hidden" name="id" value="{{user.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<br><br>
<a href="{{base}}/user/create" class="btn">New user</a>
{{ include('layouts/footer.php')}}