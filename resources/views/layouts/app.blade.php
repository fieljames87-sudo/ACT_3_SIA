<!DOCTYPE html>
<html>
<head>
    <title>Energy Booster System</title>

    <style>
        body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    background: linear-gradient(to right, #667eea, #a578d3);
    color: #333;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: auto;
    padding: 20px;
}

h2 {
    text-align: center;
    color: white;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    width: 250px;
    text-align: center;
    transition: 0.3s;
    cursor: pointer;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

a {
    text-decoration: none;
    color: inherit;
}

.btn {
    padding: 10px 15px;
    background: #ff7a18;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
}

.btn:hover {
    background: #ff5200;
}

.btn-danger {
    background: red;
}

footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    background: rgba(255,255,255,0.3);
    padding: 10px;
    color: white;
}
.input {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: none;
    margin-bottom: 10px;
}
.card .btn {
    display: inline-block;
    margin-top: 10px;
}
    </style>
</head>

<body>

<div class="container">
    @yield('content')
</div>

<footer>
    Energy Booster System © 2026
</footer>

</body>
</html>