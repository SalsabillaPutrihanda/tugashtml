<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsabilla Putrihanda</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="main-container">
            <!-- Navigation Menu -->
            <nav class="nav">
                <div class="Logo">
                    <a href="#"></a>
                </div>
                <ul>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <!-- Home Page -->
            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title">welcome to my homepage</h3>
                    <h1 class="hero-name">Salsabilla Putrihanda</h1>
                    <p>Haii My name is acabiya. call me aca. I was born in Jakarta, dec 6th 2003. Now, i'm twenty years old. I
                        live at Manado. I am a student at the faculty of informatics engineering at Sam Ratulangi University, I
                        am a friendly person, so i hope you can get to know me better from this Page.</p>
                </div>
                <div class="hero-right">
                    <img src="acabiya1.png" alt="Person standing" />

                    <!--javascript-->
                    <script src="script.js"></script>
                    
                </div>
            </section>
        </div>
    </header>

    <hr>

    <!-- Gallery -->
    <section id="gallery">
        <div class="Gallery main-container">
            <h3 class="pre-title">𝜗𝜚 ‧₊˚ ⊹</h3>
            <h1 class="section-title Gallery title">My Gallery</h1>
    
            <div class="slideshow">
                <div class="slide active bordered">
                    <img src="img1.jpg" alt="Slide 1" />
                    <p class="caption active">Diving is my newest favorite sport 𓆝 𓆟 𓆞 𓆝 𓆟</p>
                </div>
                <div class="slideshow">
                    <div class="slide active bordered">
                    <img src="img2.jpg" alt="Slide 2" />
                    <p class="caption active">The sea is my favorite place⋆⭒𓆟⋆｡˚𖦹𓆜✩⋆</p>
                </div>
                <div class="slide">
                    <img src="img3.jpg" alt="Slide 3" />
                    <p class="caption active">Here, love knows no end₊˚⊹ ᥫ᭡.</p>
                </div>
                <div class="slide">
                    <img src="img4.jpg" alt="Slide 4" />
                    <p class="caption active">my beloved sissy -`♡´-</p>
                </div>
                <div class="slide">
                    <img src="img5.jpg" alt="Slide 5" />
                    <p class="caption active">my bestfriend since 2016 ♡︎</p>
                </div>
                <div class="slide">
                    <img src="img6.jpg" alt="Slide 6" />
                    <p class="caption active">me and my girls ˖⁺‧₊˚ ♡ ˚₊‧⁺˖</p>
                </div>
                <!-- Tambahkan slide dan caption lainnya -->
            </div>
        </div>
    </section>

    <hr>

    <!-- Blog Page -->
    <section id="blog">
        <div class="Blog main-container">
            <h3 class="pre-title">𝜗𝜚 ‧₊˚ ⊹</h3>
            <h1 class="section-title Blog title">Welcome to My Blog</h1>
<?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
            <article>
                <h2><?= $row["judul"] ?></h2>
                <a href="https://www.cekaja.com/info/kesenian-tradisional-sulawesi-utara">
                    <img src="<?= $row["image"] ?>" alt="Foto Website" width="400">
                </a>
                <p><?= $row["deskripsi"] ?></p>
            </article>
              <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

            
        </div>
    </section>

    <hr>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <p>You can contact me via the following methods:</p>
        <ul>
            <div class="contact-item-detail">
                <h4>Email: salsabillaputrii481@gmail.com</h4>
                <!-- Buat tautan yang bisa diklik untuk Instagram -->
                <h4>Facebook: <a href="https://www.facebook.com/salsabilla.putri.9279?mibextid=LQQJ4d" target="_blank">salsabilla putri</a></h4>
                <h4>Instagram: <a href="https://www.instagram.com/slsabllaptrii" target="_blank">@slsabllaptrii</a></h4>

                                                </ul>
                                            </section>
</body>
</html>