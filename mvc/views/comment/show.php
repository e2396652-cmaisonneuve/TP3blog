{{ include('layouts/header.php', {title:'Comment'})}}
<div>
    <h1>Comment</h1>
    <p><strong>Message: </strong><br>{{ comment.message }}</p><br>
    <p><strong>Date: </strong><br>{{ comment.date|date("d/m/Y") }}</p><br>
    <a href="{{base}}/comment/edit?id={{ comment.id }}" class="btn">Edit</a>
</div>
{{ include('layouts/footer.php')}}