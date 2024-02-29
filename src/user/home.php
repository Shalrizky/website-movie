<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../user/css/main.css">

  <title>MOVIEKUY</title>
</head>

<body>
  <div class="container">
    <label for="firstName" class="logo">NON<span class="spn">KUY</span></label>
    <div class="navbar">
      <nav>
        <ul>
          <li> <a href="index.html">Home</a></li>
          <li> <a href="movie.html">Movie</a></li>
          <li> <a href="#">Series</a></li>
          <li> <a href="#footer">About</a></li>
        </ul>
        <div class="input-wrapper">
          <button class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="25px" width="25px">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff"
                d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z">
              </path>
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M22 22L20 20">
              </path>
            </svg>
          </button>
          <input placeholder="search..." class="input" name="text" type="text">
        </div>
      </nav>
    </div>
  </div>

  <div class="newMovie">
    <div class="slide">
      <img src="../../assets/img/AVATAR.jpg" alt="Gambar 1">
      <div class="info">
        <h2>AVATAR: The Way Of Water</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit harum sint vitae quis? Id, maxime?
        </p>
        <div class="button-watch-info">
          <button class="watch-btn">Watch</button>
          <button class="info-btn">Info</button>
        </div>
        <div class="dot">
          <div class="active"></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <div class="slide">
      <img src="../assets/img/wednesday2ed.jpg" alt="Gambar 2">
      <div class="info">
        <h2>WEDNESDAY</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, natus quasi. Id nulla consequatur sit!</p>
        <div class="button-watch-info">
          <button class="watch-btn">Watch</button>
          <button class="info-btn">Info</button>
        </div>
        <div class="dot">
          <div></div>
          <div class="active"></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <div class="slide">
      <img src="../../assets/img/alice3ed.jpg" alt="Gambar 3">
      <div class="info">
        <h2>ALICE IN THE BORDERLAND: S2</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas repudiandae dicta ipsa fugit, at expedita.
        </p>
        <div class="button-watch-info">
          <button class="watch-btn">Watch</button>
          <button class="info-btn">Info</button>
        </div>
        <div class="dot">
          <div></div>
          <div></div>
          <div class="active"></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <div class="slide">
      <img src="../../assets/img/blackPanther.jpg" alt="Gambar 3">
      <div class="info">
        <h2>BLACK PANTHER: WAKANDA FOREVER</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore ratione, molestiae quo enim provident ab!
        </p>
        <div class="button-watch-info">
          <button class="watch-btn">Watch</button>
          <button class="info-btn">Info</button>
        </div>
        <div class="dot">
          <div></div>
          <div></div>
          <div></div>
          <div class="active"></div>
          <div></div>
        </div>
      </div>
    </div>
    <div class="slide">
      <img src="../../assets/img/puss-in-boots.jpg" alt="Gambar 3">
      <div class="info">
        <h2>PUSS IN BOOTS: The Last Wish</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat iusto dolore, nostrum eos dignissimos fuga!
        </p>
        <div class="button-watch-info">
          <button class="watch-btn">Watch</button>
          <button class="info-btn">Info</button>
        </div>
        <div class="dot">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div class="active"></div>
        </div>
      </div>
    </div>
  </div>

  <button class="prev-btn"><label for="" class="text-next-prev-button">&#10094;</label></button>
  <button class="next-btn"><label for="" class="text-next-prev-button">&#10095;</label></button>

  <!-- CARD -->
  <section>
    <div class="point"></div>
    <div class="main-header">
      <h1>Most Poupular</h1>
    </div>
    <div class="movie-slider">
      <div class="movie-list">
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMWM5YzhmNGMtZTI4Ny00MGM4LThkYjAtMDIyMTEwNTQyZmQ1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">I am not okay with this</h1>
              <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMjEzMjcxNjA2Nl5BMl5BanBnXkFtZTgwMjAxMDM2NzM@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Booksmart</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img src="../assets/img/blackPanther.jpg" alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Marriage Story</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMGUyM2ZiZmUtMWY0OC00NTQ4LThkOGUtNjY2NjkzMDJiMWMwXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UY268_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Irishman</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMTQxMTgyNDc5M15BMl5BanBnXkFtZTcwMzk4OTM5Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Company Men</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Joker</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img src="../assets/img/AVATAR.jpg" alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Avatar</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMGUwZjliMTAtNzAxZi00MWNiLWE2NzgtZGUxMGQxZjhhNDRiXkEyXkFqcGdeQXVyNjU1NzU3MzE@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Knives Out</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Parasite</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BOTg4ZTNkZmUtMzNlZi00YmFjLTk1MmUtNWQwNTM0YjcyNTNkXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Once Upon a Time... in Hollywood</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BY2QzYTQyYzItMzAwYi00YjZlLThjNTUtNzMyMDdkYzJiNWM4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Little Women</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Witcher</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMjA0YjYyZGMtN2U0Ni00YmY4LWJkZTItYTMyMjY3NGYyMTJkXkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Frozen II</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section>
    <div class="point"></div>
    <h1 class="main-header">You Migth Like This</h1>
    <div class="movie-slider">
      <div class="movie-list">
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMWM5YzhmNGMtZTI4Ny00MGM4LThkYjAtMDIyMTEwNTQyZmQ1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">I am not okay with this</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMjEzMjcxNjA2Nl5BMl5BanBnXkFtZTgwMjAxMDM2NzM@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Booksmart</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BZGVmY2RjNDgtMTc3Yy00YmY0LTgwODItYzBjNWJhNTRlYjdkXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Marriage Story</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMGUyM2ZiZmUtMWY0OC00NTQ4LThkOGUtNjY2NjkzMDJiMWMwXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UY268_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Irishman</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMTQxMTgyNDc5M15BMl5BanBnXkFtZTcwMzk4OTM5Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Company Men</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Joker</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img src="../assets/img/AVATAR.jpg" alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Avengers: Endgame</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMGUwZjliMTAtNzAxZi00MWNiLWE2NzgtZGUxMGQxZjhhNDRiXkEyXkFqcGdeQXVyNjU1NzU3MzE@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Knives Out</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Parasite</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BOTg4ZTNkZmUtMzNlZi00YmFjLTk1MmUtNWQwNTM0YjcyNTNkXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Once Upon a Time... in Hollywood</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BY2QzYTQyYzItMzAwYi00YjZlLThjNTUtNzMyMDdkYzJiNWM4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Little Women</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">The Witcher</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
        <div class="movie-card">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMjA0YjYyZGMtN2U0Ni00YmY4LWJkZTItYTMyMjY3NGYyMTJkXkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_UX182_CR0,0,182,268_AL_.jpg"
            alt="movie poster" class="movie-poster">
          <div class="movie-info">
            <h1 class="movie-title">Frozen II</h1>
            <button class="btn-watch">Watch Now</button>
          </div>
        </div>
      </div>
    </div>

  </section>


  <footer id="footer">
    <p>Copyright 2022 My Company. All Rights Reserved.</p>
    <p>Contact us: <a href="#">info@warkuy.com</a></p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
    <p>Follow us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
  </footer>

  <script src="../user/js/script.js"></script>
  <script>
    window.addEventListener('scroll', function () {
      var container = document.querySelector('.container');
      if (window.scrollY > 0) {
        container.classList.add('scrolled');
      } else {
        container.classList.remove('scrolled');
      }
    });
  </script>

</body>

</html>