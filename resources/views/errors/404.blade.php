<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Page Not Found</title>
<style>
body {
margin: 0;
font-family: Arial, sans-serif;
background-color: #f3f4f6;
color: #333;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}
.container {
text-align: center;
}
.container h1 {
font-size: 6rem;
color: #ff6f61;
margin: 0;
}
.container h2 {
font-size: 2rem;
margin: 0.5em 0;
}
.container p {
margin: 1em 0;
font-size: 1.2rem;
}
.container a {
display: inline-block;
margin-top: 1em;
padding: 0.8em 2em;
font-size: 1rem;
color: #fff;
background-color: #ff6f61;
text-decoration: none;
border-radius: 5px;
transition: background-color 0.3s ease;
}
.container a:hover {
background-color: #ff3e2f;
}
</style>
</head>
<body>
<div class="container">
<h1>404</h1>
<h2>Oops! Page Not Found</h2>
<p>The page you're looking for doesn't exist or has been moved.</p>
<a href="{{ route('home') }}">Go Back to Home</a>
</div>
</body>
</html>