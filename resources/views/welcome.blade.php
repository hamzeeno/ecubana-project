<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>
    <body>
		<header class="header">
			<div class="header__inner">
				<h4 class="logo">Welcome To e-cubana</h4>
				<p>Order Now</p>
			</div>
		</header>

		<main>
			<div class="container">
				<div class="food-category">
					<button class="active">All</button>
					<button>Foods</button>
					<button>Dinks</button>
					<button>Snacks</button>
					<button>Sauce</button>
				</div>

				<div class="menu-list">
					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Hennessy us</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,0000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Hennesy V Sop</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 130,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Best Cream Small</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 20,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Jameson Black</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 55,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>mantel vs</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 70,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>mantel v Sop</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 120,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>GiLoron</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 100,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Black Label</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 45,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Ballentines</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 250,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>American honey.</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 3,500.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>GlendFidish 12 yrs</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 90,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>M & G Gold</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Singleton 15yrs</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 9,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Eyics</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Gemo</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Christ marvin</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Four Cousins</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Gilovanı Rose</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 15,000.00 </span>
						</div>
					</div>

					<div class="item">
						<div class="image">
							<img src="{{ asset('img/chicken.png') }}" alt="" />
						</div>
						<div class="content">
							<h4>Smirnoff X1</h4>
							<p>Spicy with Garlic</p>
							<span>₦ 10,000.00 </span>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="footer__inner">
				<div class="content">
					<h3>e-cubana</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
						vel!
					</p>
				</div>
			</div>
		</footer>
	</body>
</html>
