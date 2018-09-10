<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.hero-image {
  background-image: url("nature_introduction.jpeg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body background="index.jpeg">

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">NAMASKAR EVERYONE</h1>
    <p>Click on continue to move to the quiz</p>
    <button>GREETINGS OF THE DAY</button>
  </div>
</div>

<div>
<a href="./test.php" <button class="button" style="vertical-align:middle"><span>Continue </span></button></a>
<a href="./About_website.html" <button class="button" style="vertical-align:middle"><span>About_website </span></button></a>
<a href="./About_me.html" <button class="button" style="vertical-align:middle"><span>Contact </span></button></a>

</div>

<div>
<p></p>
</div>




<div class=padding>
<footer>&copy; Copyright 2018 aniket deroy</footer>
</div>


</body>
</html>

