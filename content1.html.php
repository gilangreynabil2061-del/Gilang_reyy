body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f4f4;
}

header {
    background: url('images/header.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
    padding: 80px 0;
}

nav {
    background: #333;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline-block;
    margin: 0 15px;
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}

main {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
    padding: 20px;
}

article {
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

article img {
    width: 100%;
    border-radius: 10px;
}

article a {
    display: inline-block;
    margin-top: 10px;
    color: #0066cc;
}

aside {
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

aside h3 {
    border-bottom: 2px solid #ccc;
    padding-bottom: 5px;
}

aside ul {
    list-style: none;
    padding: 0;
}

aside ul li {
    margin: 8px 0;
}

aside img {
    width: 100%;
    margin-top: 10px;
    border-radius: 10px;
}

footer {
    background: #222;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 20px;
}