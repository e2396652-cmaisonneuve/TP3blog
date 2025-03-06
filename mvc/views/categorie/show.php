{{ include('layouts/header.php', {title:'Categorie'})}}
<div>
    <h1>Categorie</h1>
    <p><strong>Name: </strong>{{ categorie.name }}</p><br>
    <a href="{{base}}/categorie/edit?id={{ categorie.id }}" class="btn">Edit</a>
</div>
{{ include('layouts/footer.php')}}