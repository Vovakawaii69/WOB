<?php
session_start();
$current_file_name = basename($_SERVER['PHP_SELF']);
if (!isset($_SESSION['lang']))
{
    $_SESSION['lang'] = "et";
}
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
    if ($_GET['lang'] == "en")
    {
        $_SESSION['lang'] = "en";
    }
    else if ($_GET['lang'] == "ru")
    {
        $_SESSION['lang'] = "ru";
    }
    else if ($_GET['lang'] == "et")
    {
    	$_SESSION['lang'] = "et";
    }
}
require "languages/" . $_SESSION['lang'] . ".php";
$lang = $_SESSION["lang"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
	<meta name="description" content="Киномонстр - это портал о кино" />
	<meta name="keywords" content="фильмы, фильмы онлайн, hd" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
				<div class="menubar">
				<div id="header_image"></div>
				<ul class="menu">  
					<?php
					require "languages/" .$lang . ".php";
				
					echo '<a href="'.$current_file_name.'?lang=ru">';
					echo '<img src="img/ru.jpeg" height="20px" width="30px">';
					echo '</a>';
					echo '<a href="'.$current_file_name.'?lang=et">';
					echo '<img src="img/et.jpeg" height="20px" width="30px">';
					echo '</a>';
					echo '<a href="'.$current_file_name.'?lang=en">';
					echo '<img src="img/en.jpeg" height="20px" width="30px">';
					echo '</a>';

					echo '<li class="selected"><a href="index.html">'.$language['main_page'].'</a></li>';
					echo '<li><a href="films.html">'.$language['news_page'].'</a></li>';
					echo '<li><a href="#">'.$language['reader_page'].'</a></li>';
					echo '<li><a href="rating.html">'.$language['aboutLib_page'].'</a></li>';
					echo '<li><a href="contact.html">'.$language['publication_page'].'</a></li>';
					?>
				</ul>
				
			</div>
			<div class="logo">
				<div class="logo_text">
					<h1><a href="index.html">World of Books</a></h1>
					<h2 id="font">Книги - наша страсть!</h2>
				</div>
			</div>
			
		

		</div>

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method="post" action="#" id="search_form" >
						<input type="search" name="search_field" placeholder="ваш запрос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>

				<div class="sidebar">
					<h2>Вход</h2>
					<form method="post" action="#" id="login">
						
						<input type="text" name="login_field" placeholder="логин" />
						<input type="password" name="password_field" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
							<span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>
						</div>

					</form>
				</div>

				<div class="sidebar">
					<h2>Новости</h2>

					<span>07.06.2021.</span>
					<p>Мы запустили расширенный поиск</p>
					<a href="#">читать</a>
				</div>

				<div class="sidebar">
					<h2>Рейтинг книг</h2>
					<ul>
						<li><a href="show.html">Интерстеллар</a><span class="rating_sidebar">8.1</span></li>
						<li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
						<li><a href="#">Безумный макс</a><span class="rating_sidebar">7.5</span></li>
						<li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.4</span></li>
					</ul>
				</div>

			</div>

			<div class="content">
									<div class="posts">
					
					<hr>
					<h2> <a href="#">Новости из мира книг и писателей</a> </h2>
					<div class="posts_content">
						<p>
							45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
						</p>
					</div>

					<p><a href="#">читать</a></p>

					<hr>
		            <h2><a href="#">Актер Том Хенкс поделился впечатлением о фестивале</a></h2>
		            <div class="posts_content">
		              <p>16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.</p>
		            </div>
		            <p><a href="#">читать</a></p>

				</div>


			</div>

		</div>

	</div>
	
</body>
</html>