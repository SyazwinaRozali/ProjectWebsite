<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Who is Syazwina Rozali?</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
    background: url('image/bulan.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #1b1b1b;
    color: #ffffff;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

.content {
    display: flex;
    flex-direction: row;
    background-color: #262626;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.image-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-container img {
    border-radius: 10px;
    width: 230px; /* Adjust the width as needed */
    height: auto;
}
 header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.5);
}

header .logo {
    font-size: 24px;
    font-weight: bold;
}

header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

header nav ul li {
    margin-left: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

.text-container {
    flex: 2;
    margin-left: 20px;
}

.text-container h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.text-container p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #000000;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #cccccc;
}
    </style>
</head>
<body>
    <div class="login-page">
        <header>
            <div class="logo">SYAZWINA ROZALI</div>
            <nav>
                <ul>
                    <li><a href="home.jsp">About Me</a></li>
                    <li><a href="gallery.jsp">My Gallery</a></li>
                    <li><a href="interest.jsp">My Interest</a></li>
                    <li><a href="logout.jsp">LogOut</a></li>
                </ul>
            </nav>
        </header>
    <div class="container">
        <div class="content">
            <div class="image-container">
                <img src="image/bird.jpg" alt="Syaz's Image">
            </div>
            <div class="text-container">
                <h1>Who is Syazwina Rozali?</h1>
                <p> Nur Syazwina Binti Mohd Rozali is a fulltime student at University Technology Mara (UiTM), Shah Alam. She's furthering her studies in Bachelor of Computer Science (hons). Multimedia Computing. .</p>
                <p>Syazwina Rozali was born on 25th November 2002, and she is 22 years old this year.</p>
                <p>Syazwina Rozali or you guys can call just Syaz likes to listen to music while doing some work. She's also like to watch movie and tease friends.  </p>
                
            </div>
        </div>
    </div>
</body>
</html>