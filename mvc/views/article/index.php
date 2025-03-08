{{ include('layouts/header.php', {title:'Articles'})}}
<h1>Articles</h1>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th>Date</th>
            {% if session.privilege_id != 3 %}
            <th>View</th>
            <th>Delete</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% for article in articles %}
        <tr>
            <td>{{article.title}}</td>
            <td> {% if article.fileToUpload %}
                <picture>
                    <img src="{{upload}}{{article.fileToUpload}}" alt="Image" class="image-show">
                </picture>
                {% endif %}
            </td>
            <td>{{article.content}}</td>
            <td>{{article.date}}</td>
            {% if session.privilege_id != 3 %}
            <td> <a href="{{base}}/article/show?id={{article.id}}" class="btn">View</a></td>
            <td>
                <form action="{{base}}/article/delete" method="post">
                    <input type="hidden" name="id" value="{{article.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
            {% endif %}
        </tr>
        {% endfor %}
    </tbody>
</table>
<br><br>
<a href="{{base}}/article/create" class="btn">New article</a>
{{ include('layouts/footer.php')}}