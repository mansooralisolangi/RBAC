<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="hero">
        <h1>Welcome to My Laravel Site</h1>
        <p>Simple Landing Page</p>

                <button class="btn" {{ route("addform") }}>FORM</button>

    </div>

    <!-- External JS -->
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>