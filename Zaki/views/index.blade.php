<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KafkaMath</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>KafkaMath</title>
    <link href="{{ asset('/bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootstrap-icons/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
</head>
<body>
    @include('partials.navbar')
    <div class="hero">
        <div class="hero-logo brand">Kafka<span style="color: #c0d9d9">Math</span></div>
        <div id="animated-text" class="hero-slogan">
            <h1><span id="typed"></span></h1>
        </div>        
        <a href="/materi" class="btn btn-primary">Mulai Belajar</a>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow h-100">
                    <div class="card-img-container position-relative">
                        <img src="{{ asset('images/kalkulator.png') }}" class="card-img-top" alt="Kalkulator">
                        <div class="overlay">
                            <h5>Kalkulator</h5>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kalkulator</h5>
                        <p class="card-text">Gunakan kalkulator limit kami untuk memecahkan masalah limit fungsi dengan cepat dan akurat.</p>
                        <a href="/kalkulator" class="btn btn-primary btn-card">Akses Kalkulator</a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow h-100">
                    <div class="card-img-container position-relative">
                        <img src="{{ asset('images/latihan.png') }}" class="card-img-top" alt="Latihan">
                        <div class="overlay">
                            <h5>Latihan</h5>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Latihan</h5>
                        <p class="card-text">Berlatih soal matematika untuk mengasah kemampuan Anda.</p>
                        <a href="/latihan" class="btn btn-primary btn-card">Mulai Latihan</a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow h-100">
                    <div class="card-img-container position-relative">
                        <img src="{{ asset('images/profil.png') }}" class="card-img-top" alt="Profil Tim">
                        <div class="overlay">
                            <h5>Profil Tim</h5>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Profil Tim</h5>
                        <p class="card-text">Kenali lebih jauh tim di balik KafkaMath dan dedikasi mereka dalam membangun platform ini.</p>
                        <a href="/profil" class="btn btn-primary btn-card">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      

    <footer class="footer py-4" style="background-color: #333; color: #c0d9d9;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="brand mb-3"><span class="kafka">Kafka</span><span class="math">Math</span></h5>
                    <p>"Membuka Rahasia Angka, Menginspirasi Logika!"</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/materi" class="text-decoration-none text-light">Mulai Belajar</a></li>
                        <li><a href="/latihan" class="text-decoration-none text-light">Latihan</a></li>
                        <li><a href="/kalkulator" class="text-decoration-none text-light">Kalkulator</a></li>
                        <li><a href="/profil" class="text-decoration-none text-light">Profil Tim</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Ikuti Kami</h5>
                    <div>
                        <a href="https://web.facebook.com/kafkamath/" class="text-light me-3" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="https://x.com/kafkamath_" class="text-light me-3" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="https://www.instagram.com/kafkamath" class="text-light me-3" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="https://www.youtube.com/@KafkaMath" class="text-light" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube fs-4"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color: #c0d9d9;">
            <div class="text-center mt-3">
                <small>&copy; 2024 KafkaMath. All Rights Reserved.</small>
            </div>
        </div>
    </footer>    

    <script src="{{ asset('/bootstrap/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#typed', {
            strings: [
                "Membuka Rahasia Angka.",
                "Menginspirasi Logika.",
                "Matematika Lebih Mudah dengan KafkaMath!"
            ],
            typeSpeed: 50,
            backSpeed: 25,
            loop: true
        });
    </script>

</body>
</html>
