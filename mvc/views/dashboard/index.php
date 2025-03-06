{{ include('layouts/header.php', {title: 'Dashboard '} )}}

<div class="wrapper">
    <h1>Journal de bord</h1>

    <div>
        {% for dashboard in dashboards %}
        <div>

            <p><small>Username:</small> <small>{{ dashboard.username }}</small></p>
            <p><small>IP address:</small> <small>{{ dashboard.adresseIP }}</small></p>
            <p><small>Page:</small> <small>{{ dashboard.page }}</small></p>
            <p><small>Date:</small> <small>{{ dashboard.dateTime }}</small></p>
        </div>
        {% endfor %}
    </div>
</div>
{{ include('layouts/footer.php')}}