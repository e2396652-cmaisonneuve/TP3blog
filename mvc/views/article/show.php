{{ include('layouts/header.php', {title:'Article'})}}
<div>
    <h1>Article</h1>
    <p><strong>Title: </strong><br>{{ article.title }}</p><br>
    <p><strong>Content: </strong><br>{{ article.content }}</p><br>
    <p><strong>Date: </strong><br>{{ article.date|date("d/m/Y") }}</p><br>
    <p><strong>Image: </strong><br>{% if article.fileToUpload %}
        <picture>
            <img src="{{upload}}{{article.fileToUpload}}" alt="Image" class="image-show">
        </picture>
        {% endif %}
    </p>
    <a href="{{base}}/article/edit?id={{ article.id }}" class="btn">Edit</a>
</div>
{{ include('layouts/footer.php')}}