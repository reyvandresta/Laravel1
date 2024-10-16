<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Sansation";
    line-height: 1.6;
    background-color: F6F5F2;
    margin: 0;
    padding: 0;
}

header {
    background-color:#f4f4f4;   
    color: #fff;
    padding: 20px;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    padding: 0px 20px 0px 20px;
    color:#333;
}

nav ul li a:hover {
    text-decoration:underline;
}

.gambarlogomakanan {
    width: 50%;
    height: auto;

    
}

.depan img {
    width: 100%;
    height: auto;
    position: relative;
}

.balok {
    font-family: "Sansation";
    font-size: xx-large;
    position: absolute;
    top: 100%;
    left: 12%;
    transform: translate(-50%, -50%);
    padding: 10px 50px;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 0px;
}

.visit {
    font-family: "Sansation";
    font-size: large;
    text-decoration: underline;
    color: white;
}

.deskripsi {
    display: flex;
    align-items: center; 
    font-family: "Sansation";
}

.deskripsi img {
    margin-right: 10px; 
}

.Layanan {
    margin-left: 140px; 
    margin-top: 30px; 
    font-family: "Sansation";
    font-size: x-large;
    margin-right: 350px;
}

.kanan {
    display: flex;
    justify-content: flex-end; 
    align-items: center;
    font-family: "Sansation";
    margin-right: 300px; 
    margin-top: -200px;
    padding: auto;
}
.panah1 {
    margin-left: 500px;
    padding: left;
}

.kanan h2,
.kanan p {
    margin-left: 20px; 
}


.kanan img {
    max-width: 30%; 
}

.garis1 {
    border: none; 
    border-top: 4px solid black; 
    width: 1150px; 
    margin: 20px auto; 
    margin-left: 650px;
}

.garis4 {
    border: none; 
    border-top: 4px solid black; 
    width: 95%; 
    margin: 200px auto; 
}


footer {
    background-color: #333;
    display: flex;
    color: #fff;
    text-align: center;
    padding: 15px;
    position: relative; 
    bottom: 0;
    width: 100%;
    height: 20vh;
}

.bwh {
    display: flex;
    align-items: center; 
    margin-left: 350px;
}

.bwh img {
    max-width: 100px; 
    height: auto; 
}

.teks {
    display: flex;
    flex-direction: column;
    justify-content: center; 
    text-align: left;
    flex-grow: 1; 
    margin-left: 80px;
}

.teks p {
    margin-bottom: 10px;
}

.icon {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
    margin: 0 auto;
    margin-right: 250px;
}

.icon i {
    font-size: 18px;
    margin-bottom: 10px;
    margin-right: 10px;
}
.jarak {
    margin-left: 300px;
    margin-right: -300px;
}
.jarak2 {
    margin-left: 10px;
}
.jarakanjay {
    margin-top: 250px;
}
.jarakanjay1 {
    margin-left: 120px;
    margin-right: 90px;
}
.jarakanjay2 {
    margin-left: 100px;
    margin-right: 80px;
}
.jarakanjay3 {
    margin-left: 10px;
    margin-right: 10px;
}
.anjay {
    margin-right: 950px;
    margin-top: 250px;
    margin-bottom: 50px;
}
.container {
   margin-left: -1050px;
   display: inline-block;
   text-align: center;
  }
  .button-container {
    margin-bottom: -440px;
    display: inline-block;
  }
.arkeolog {
    margin-left: 1000px;
}
 .kanan2 {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-right: 50px;
    font-family: "Sansation";
    padding: auto;
}
.kiri {
    margin-right:10px;
    margin-bottom: 100px;
}
.gambar.logo.makanan {
    position: relative;
}

.teks-di-gambar {
    position: absolute;
    top: 150px;
    padding: 10px 20px;
    border-radius: 5px;
    color: #fff;
    text-align: left;
    left: 90px;
}

.Collection {
  margin-top: 60px;
  margin-bottom: 60px;
  margin-right: 120px;
}
.keatas1 {
    margin-top: -930px;
}
.keatas2 {
    margin-top: -150px;
}
.button-with-text:hover img {
    transform: scale(1.6);
}
.kaciw:hover img {
    transform: scale(1.1);
}
.icon a i {
    color: rgb(255, 255, 255); 
    text-decoration: none; 
    margin-right: 10px; 
}
@keyframes fadeIn {
    from {
      opacity: 0; 
    }
    to {
      opacity: 1; 
    }
  }
  
 
  .kanan,
  .jarakanjay,
  .anjay {
    animation: fadeIn 3s ease-in-out; 
  }
  
 
  .button-with-text:hover img,
  .kaciw:hover img {
    transform: scale(1.1);
  }
.garis1 {
    animation: fadeIn 3s ease-in-out;
  }
  
  /* Keyframe animasi */
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1; 
    }
  }

.logo {
    color: black;
    
}
</style>
</head>
<body>
    <header>
        <nav>
            <div class="menu">
                <center>
                    <div class="gambar logo makanan">
                        <img src="/assets/logo.png">
                        <h1>RUMAH RASA</h1>
                    </div>
                    <ul>
                    <li><a href="" class="tbl-hitam">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Resep Rasa</a></li>
                    <li><a href="">belanja Yuk</a></li>
                    <li><a href="">instagram</a>
                </ul>
            </div>
            </div></center>
        </nav>
    </header>
    <div class="depan">
        <img src="/assets/atas.jpg" alt="person">
    </div>

        <div class="balok">
            <p>Welcome To </br>Rumah Rasa </p>
            <a href="about.html" class="visit">Visit</a>
        </div>

    <hr class="garis4">
    <div class="anjay">
        <div class="kanan">
            <div class="jarakanjay3">
            <h2 style="font-size: 40px;">Resep</h2>
        </div>
            <p>Terbanyak diminati</p>
            <div class="jarak2">
                <div class="button-with-text">
                <a href="Collection.html"class="a-navbar"><img src="/assets/panah.png" width="150"></a>
                </div>
        </div>
        </div>
    </div>  
        <center>
            <div class="arkeolog">
            <div class="container">
            <div class="button-container">
              <button>
                <div class="kaciw">
                  <img src="/assets/resep.jpg" width="390">
                </a>
                </div>
                </div>
                <div class="kanan2">
                    <h2 style="font-size: 40px;">Donat kentang Bunga</h2>
                </div>
                <div class="kiri">
                    <h1 style="font-size: 30px;">
                        rasanya enak banget dan lembut.<br>
                        Resep ini untuk takaran adonan ini</h1>
                    </div>
                </div>
                </button>
            </button>
            <div class="container">
                <div class="button-container">
                  <button>
                    <div class="kaciw">
                      <img src="/assets/resep.jpg" width="390">
                    </a>
                    </div>
                    </div>
                    <div class="kanan2">
                        <h2 style="font-size: 40px;">Donat kentang Bunga</h2>
                    </div>
                    <div class="kiri">
                        <h1 style="font-size: 30px;">
                            rasanya enak banget dan lembut.<br>
                            Resep ini untuk takaran adonan ini</h1>
                        </div>
                    </div>
                    </button>
                </button>
                <div class="container">
                    <div class="button-container">
                      <button>
                        <div class="kaciw">
                          <img src="/assets/resep.jpg" width="390">
                        </a>
                        </div>
                        </div>
                        <div class="kanan2">
                            <h2 style="font-size: 40px;">Donat kentang Bunga</h2>
                        </div>
                        <div class="kiri">
                            <h1 style="font-size: 30px;">
                                rasanya enak banget dan lembut.<br>
                                Resep ini untuk takaran adonan ini</h1>
                            </div>
                        </div>
                        </button>
                    </button>
            </div>
            <div class="gambar logo makanan">
                <div class="depan">
                <img src="/assets/bawah.png" width="100">
            </div>
            <div class="teks-di-gambar">
                    <h1 style="font-size: 50px;">Website
                        <br>Rumah Rasa</h1>
                    <p style="font-size: 20px;">Rumah Rasa adalah situs web yang menawarkan berbagai resep masakan dari beragam budaya.</p>
                </div>
            </div>
<footer>
</footer>
</body>
</html>