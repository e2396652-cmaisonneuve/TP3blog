{{ include('layouts/header.php', {title:'404 not found'})}}
<div class="error-page">
        <h1>Error 404: Page not found!</h1>
        <h2>{{ msg }}</h2>
</div>
{{ include('layouts/footer.php')}}