<style type="text/css">

/*CSS Reset*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* Custom Global */

body{
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #1D3557;
}

h1{
  font-family: 'Bangers', cursive;
  letter-spacing: .2rem;
  color: #F1FAEE;
  font-size: 3em;
  margin: 20px;
}

h2{
  font-family: 'Bangers', cursive;
  letter-spacing: .2rem;
  color: #457B9D;
  font-size: 2em;
  margin-top: 10px;
}

h3 {
  display: block;
  font-size: 1.17em;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: bold;
}

p{
color: #F1FAEE;
}

/* Navigation  */

#navbar {
  width: 100vw;
  background-color: #457B9D;
  font-weight: bold;
}

ul{
  list-style: none;
  margin: 0;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 1em 0;
}

li a {
  text-decoration: none;
  color: #F1FAEE;
  padding-right: 3em;
  position: relative;
  transition: all ease-in-out 250ms;
}

li a::after {
  content:'';
  position: absolute;
  display: block;
  height: 0.4em;
  width: 0%;
  background-color: #E63946;
  bottom: -1em;
  transition: all ease-in-out 250ms;
}

li a:hover::after{
  width: 60%;
}

li a:hover {
  color: #E63946;
}

li:first-child {
  margin-right: auto;
  margin-left: 3em;
}


/* Body */

.h1 {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.h1 h1 {
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
0%   {color: #1D3557}
50%  {color: #E63946}
100% {color: #F1FAEE}
}



.hero-container1 {
  display: flex;
  justify-content: center;
}

.hero-container2 {
  display: flex;
  justify-content: center;
  padding: 20px;
}

.hero-container2 img{
  width: 70%;
  height: auto;
}
/* icons */

.icons {
  display: flex;
  justify-content: center;
  padding-top: 50px;
  }

.box {
  width: 250px;
  height: 178px;
  background: url("images/actors-images/tm1.png") no-repeat;
  display: inline-block;
  margin: 10px;
}

.box:hover {
  background: url("images/actors-images/tm2.png") no-repeat;
  transition: all ease-in-out .5s;
}

.box-2 {
  width: 250px;
  height: 178px;
  background: url("images/actors-images/th1.png") no-repeat;
  display: inline-block;
  margin: 10px;
}
.box-2:hover {
  background: url("images/actors-images/th2.png") no-repeat;
  transition: all ease-in-out .5s;
}

.box-3 {
  width: 250px;
  height: 178px;
  background: url("images/actors-images/ag1.png") no-repeat;
  display: inline-block;
  margin: 10px;
}
.box-3:hover {
  background: url("images/actors-images/ag2.png") no-repeat;
  transition: all ease-in-out .5s;
}

.spidermen{
  width: 170px;
  margin: 5px 10px 5px;
}

.about{
  font-size: 1.25em;
  font-weight: 600;
  padding: 10px 0 10px 0;
  color:white;
  text-align:center;           
}
.friendly{
  font-size: 1.6em;
  font-weight: 600;
  padding-bottom: 10px;
  color: white;
  text-align: center;
}

/* Text */

.text {
width: 60%;
margin: auto;
}

/* Footer */

footer{
  text-align: center;
  color: white;
  background: black;
  padding: 20px 0;
  font-family: sans-serif;
  font-size: .8em;
  margin-top: 20px;
}

/* Contact Form */

.contact-form {
  background: #b11313; 
  padding: 20px;
  max-width: 600px;
  border-radius: 8px;
  color: white;
  font-family: sans-serif;
  margin: 0 auto;
  text-align: left;
  margin-bottom: 30px;
}

.label_input_wrap {
  display: inline;
}

.reset input,
.submit input {
  color: white;
  padding: 5px 20px;
}

.reset,
.submit{
  display: inline;
}

.input-section{
  margin-bottom: 8px;
}

.submit input{
  background: #000000;
}

.reset input{
  background: rgb(0, 0, 0);
}

input{
  padding: 5px 8px;
  border-radius: 3px;
}

textarea{
  font-family: sans-serif;
  padding: 6px 6px;
  border-radius: 4px;
}

select{
  width: 185px;
  padding: 8px 0;
  border-radius: 4px; 
}

.com{
  display: block;
}

.in{
  color: black;
  font-weight: bold;
}

.spid{
  position: absolute;
  max-width: 370px;
}

.img5{
  max-width: 50px;

}

.contact-form-er {
    background: #b11313; 
    padding: 10px 20px 10px;
    max-width: 500px;
    border-radius: 8px;
    color: white;
    font-family: sans-serif;
    margin: 50px auto;
    text-align: center;
}

ul.error{
    display: block;
    text-align:center;
    margin: 15px 0 15px;
    list-style-type: none;
    color: black;
    font-weight: bold;
}











@media (max-width: 844px) {

#navbar {
  font-size: .88em;
}

.h1 {
  margin-top: 3em;
}

h1 {
  font-size: 2em;
}

.hero-container img {
  width: 450px;
}

.icons {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.text {
  width: 80%;
  margin: auto;
}

.spid{
  max-width: 200px;
}
}


</style>

<head>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/396d298c48.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Over+the+Rainbow&display=swap" rel="stylesheet">
</head>


<header>
      <div id="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><img class="img5" src="images/logo5.png" alt=""></li>
          <li><a href="spiderman.html">Spider-Man</a></li>
          <li><a href="History.html">History</a></li>
          <li><a href="form.html">Contact Us</a></li>
        </ul>
    </div>
</header>

<div class=contact-form-er>

	<h1>Missing Fields</h1>
	<p class="missing">Sorry, you have not completed all the required fields, Mysterio.</p>
	<p class="missing">Please complete the following required fields:</p>

	<ul class="error">
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li><strong>" . $this->missing_required_fields[$i]['title'] . "</strong></li>\n";
		}
	?>
	</ul>

	<h2><a class="em" href="#" onClick="history.go(-1)">Complete Form</a></h2>
</div>

<footer> 
    <p>Website by Spidey Community &copy;</p>
</footer>
