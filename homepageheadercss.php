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
display: flex;
align-items: center;
justify-content: flex-end;
}
.nav-links ul {
display: flex;
align-items: center;
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
.profile-details {
margin-left: 20px;
}



.profile-details img {
width: 40px;
height: 40px;
border-radius: 20px;
object-fit: cover;
background-color:#31424d;
}

.admin-name {
color: #333;
font-size: 15px;
font-weight: 500;
margin: 0 10px;
white-space: nowrap;
}
.profile-options.show{
display: block;
}
.profile-options {
display: none;
position: absolute;
z-index: 1000;
width: auto; /* Adjust width as needed */
border: 1px solid #ccc;
border-radius: 4px;
padding: 10px 0; /* Add padding to dropdown items */
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

.profile-link {
text-decoration: none;
display: block;
width: 100%;
padding: 8px 20px; /* Adjust padding for dropdown items */
font-weight: 400;
color: #212529;
white-space: nowrap;
transition: 0.2s;
}

.profile-link:hover {
background-color: #f2f2f2; /* Change background color on hover */
}