<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../admin/css/style.css">
   <title>Admin</title>
</head>

<body>
   <header>
      <nav class="top-nav">
         <div class="top-container">
            <div class="nav-brand">
               <h1>Admin Panel</h1>
            </div>
            <div class="nav-content">
               <ul>
                  <li><a href="#"><img src="../../assets/img/nophoto.jpg" width="40px" style="border-radius: 100%; background: transparent;"></a></li>
                  <li><a href="#">Hello Admin</a></li>
                  <li><a href="#">Logout</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </header>
   <main>
      <div class="container">
         <nav class="side-nav">
            <div class="search-bar">
               <input type="search" name="search" id="search" placeholder="Search...">
               <div class="button-search">
                  <button id="search">Cari</button>
               </div>
            </div>
            <ul>
               <li class="nav-item active"><a href="homeAdmin.php">Dashboard</a></li>
               <li class="nav-item"><a href="list.php">All</a></li>
               <li class="nav-item"><a href="#">Movies</a></li>
               <li class="nav-item"><a href="#">Series</a></li>
               <li class="nav-item"><a href="#">Trending</a></li>
               <li class="nav-item"><a href="#">Most Popular</a></li>
               <li class="nav-item"><a href="#">New Realese</a></li>
            </ul>
         </nav>
         <div class="card-container">
            <div class="card">
               <h3>Movie</h3>
               <p> </p>
               <button>View Movie</button>
            </div>
            <div class="card">
               <h3>Series</h3>
               <p> </p>
               <button>View Series</button>
            </div>
            <div class="card">
               <h3>New Realese</h3>
               <p> </p>
               <button>View New</button>
            </div>
            <div class="card">
               <h3>Most Popular</h3>
               <p> </p>
               <button>View Popular</button>
            </div>
            <div class="card">
               <h3>Trending</h3>
               <p> </p>
               <button>View Trending</button>
            </div>
            <div class="card">
               <h3>All</h3>
               <p> </p>
               <a href="list.php"><button>View All</button></a>
            </div>
         </div>
      </div>
   </main>

</body>

</html>