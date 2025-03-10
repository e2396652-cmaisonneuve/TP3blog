{{ include('layouts/header.php', {title:'Homepage'})}}

{% for article in articles %}
<article>
  <div class="post-title">
    <h2>{{article.title}}</h2>
    <div class="categories"><small>Category: {{article.categorie}}</small></div>
  </div>
  <div>
    {% if article.fileToUpload %}
    <picture>
      <img src="{{upload}}{{article.fileToUpload}}" alt="Image" class="image-post">
    </picture>
    {% endif %}
  </div>
  <div class="post-content">
    <p>{{article.content}}</p>
  </div>
  <div class="post-footer">
    <div class="post-info">by {{article.user}} (<a href="mailto:{{article.email}}">{{article.email}}</a>)</strong> on {{article.date|date("d/m/Y")}}</div>
    <div class="post-edit"><a href="{{base}}/article/edit?id={{ article.id }}">Edit</a></div>
  </div>
  {% if article.comments|length > 0 %}
  <div class="post-comments">
    <h4>Comments</h4>
    {% for comment in article.comments %}
    <div class="comment">
      <div class="comment-text">{{comment.message}}</div>
      <div class="comment-info"><small>{{comment.name}} on {{comment.date|date("d/m/Y")}}</small></div>
    </div>
    {% endfor %}
    <div class="comment-text"><small>
        <h3><a href="{{base}}/comment/create">Join the conversation! Leave a comment.</a>
      </small></p>
    </div>

  </div>
  {% else %}
  <div class="post-comments">
    <div class="comment-text"><small>
        <h3>No comments yet, click <a href="{{base}}/comment/create">here to add one</a>.
      </small></p>
    </div>
  </div>
  {% endif %}
</article>{% endfor %}


{{ include('layouts/footer.php')}}