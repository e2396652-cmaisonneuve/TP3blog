    </main>
    <footer>
        <ul>
            {% if session.privilege_id == 1 %}
            <li><a href="{{base}}/users">Users</a></li>
            <li><a href="{{base}}/categories">Categories</a></li>
            {% endif %}
            {% if session.privilege_id == 2 %}
            <li><a href="{{base}}/categories">Categories</a></li>
            {% endif %}
            {% if guest %}
            <li>2025 All rights reserved</li>
            {% else %}
            <li><a href="{{base}}/articles">Articles</a></li>
            <li><a href="{{base}}/comments">Comments</a></li>
            {% endif %}
        </ul>
    </footer>
    </body>

    </html>