{{ include('layouts/header.php', {title:'Articles'})}}
<h1>Articles</h1>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
            <th>Date</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        {% for article in articles %}
        <tr>
            <td>{{article.title}}</td>
            <td>{{article.content}}</td>
            <td>{{article.users_id}}</td>
            <td>{{article.date}}</td>
            <td> <a href="{{base}}/article/show?id={{article.id}}" class="btn">View</a></td>
            <td>
                <form action="{{base}}/article/delete" method="post">
                    <input type="hidden" name="id" value="{{article.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<br><br>
<a href="{{base}}/article/create" class="btn">New article</a>
{{ include('layouts/footer.php')}}