{{ include('layouts/header.php', {title:'Categories'})}}
<h1>Categories</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            {% if session.privilege_id != 3 %}
            <th>View</th>
            <th>Delete</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% for categorie in categories %}
        <tr>
            <td>{{categorie.name}}</td>
            {% if session.privilege_id != 3 %}
            <td class="td__view"> <a href="{{base}}/categorie/show?id={{categorie.id}}" class="btn">View</a></td>
            <td class="td__view">
                <form action="{{base}}/categorie/delete" method="post">
                    <input type="hidden" name="id" value="{{categorie.id}}">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
            {% endif %}
        </tr>
        {% endfor %}
    </tbody>
</table>
{% if session.privilege_id != 3 %}
<br><br>
<a href="{{base}}/categorie/create" class="btn">New categorie</a>
{% endif %}
{{ include('layouts/footer.php')}}