{{ include('layouts/header.php', {title:'Categories'})}}
<h1>Categories</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        {% for categorie in categories %}
        <tr>
            <td>{{categorie.name}}</td>
            <td> <a href="{{base}}/categorie/show?id={{categorie.id}}" class="btn">View</a></td>
            <td>
                <form action="{{base}}/categorie/delete" method="post">
                    <input type="hidden" name="id" value="{{categorie.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<br><br>
<a href="{{base}}/categorie/create" class="btn">New categorie</a>
{{ include('layouts/footer.php')}}