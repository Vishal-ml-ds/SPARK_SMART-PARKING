* {
margin: 0;
padding: 0;
font-family: Arial, sans-serif;
scroll-behavior: smooth;
}

nav {
background-color: #31424d;
display: flex;
padding: 2% 6%;
justify-content: space-between;
align-items: left;
}

nav img {
width: 150px;
}

.nav-links {
flex: 1;
text-align: right;
}

.nav-links ul li {
list-style: none;
display: inline-block;
padding: 8px 12px;
position: relative;
}

.nav-links ul li a {
color: white;
text-decoration: none;
font-size: 15px;
font-weight: bold;
}

.nav-links ul li::after {
content: "";
width: 0%;
height: 2px;
background: #b3ccc9;
display: block;
margin: auto;
transition: 0.5s;
}

.nav-links ul li:hover::after {
width: 100%;
}

.hero-btn {
display: inline-block;
text-decoration: none;
color: #fff;
border: 1px solid #fff;
padding: 12px 34px;
font-size: 13px;
background: transparent;
position: relative;
cursor: pointer;
}

.hero-btn:hover {
border: 1px solid #b3ccc9;
background: #b3ccc9;
transition: 1s;
}