{{ include('layouts/header.php', {title:'Article'})}}
<div>
    <h1>Article</h1>
    <p><strong>Title: </strong><br>{{ article.title }}</p><br>
    <p><strong>Content: </strong><br>{{ article.content }}</p><br>
    <p><strong>Date: </strong><br>{{ article.date }}</p><br>
    {% if article.image_path %}
    <picture>
        <img src="{{upload}}/{{articles.image_path}}" alt="Image">
    </picture>
    {% endif %}
    <a href="{{base}}/article/edit?id={{ article.id }}" class="btn">Edit</a>
</div>
{{ include('layouts/footer.php')}}