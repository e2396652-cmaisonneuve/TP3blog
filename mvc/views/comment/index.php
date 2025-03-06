{{ include('layouts/header.php', {title:'Comments'})}}
<h1>Comments</h1>
<table>
    <thead>
        <tr>
            <th>Message</th>
            <th>User</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        {% for comment in comments %}
        <tr>
            <td>{{comment.message}}</td>
            <td>{{comment.users_id}}</td>
            <td> <a href="{{base}}/comment/show?id={{comment.id}}" class="btn">View</a></td>
            <td>
                <form action="{{base}}/comment/delete" method="post">
                    <input type="hidden" name="id" value="{{comment.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<br><br>
<a href="{{base}}/comment/create" class="btn">New comment</a>
{{ include('layouts/footer.php')}}