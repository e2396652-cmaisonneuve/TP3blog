{{ include('layouts/header.php', {title:'Categorie Create'})}}
<div class="container">
    <form method="post">
        <h1>New categorie</h1><br>
        <label>Name
            <input type="text" name="name" value="{{categorie.name}}">
        </label>
        {% if errors.name is defined %}
        <span class="error"> {{errors.name}}</span>
        {% endif %}

        <input type="submit" value="Save" class="btn">
    </form>
</div>
{{ include('layouts/footer.php')}}