{{ include('layouts/header.php', {title: 'Dashboard '} )}}

<div class="wrapper">
    <h1>Dashboard</h1>

    <div>
        {% for dashboard in dashboards %}
        <div class="dashboard">

            <p><strong>Username:</strong> {{ dashboard.userName }}</p>
            <p><strong>IP address:</strong> {{ dashboard.adressIP }}</p>
            <p><strong>Page:</strong> {{ dashboard.page }}</p>
            <p><strong>Date:</strong> {{ dashboard.dateTime }}</p>
        </div>
        {% endfor %}
    </div>
</div>
{{ include('layouts/footer.php')}}