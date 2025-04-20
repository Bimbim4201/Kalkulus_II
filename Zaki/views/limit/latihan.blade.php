@extends('layouts.main')

@section('container')
<div class="container2 my-2">
    <div class="content-wrapper bg-white shadow rounded">
        <img src="{{ asset('images/banner_limit.png') }}" alt="Kalkulus Limit" class="limit-banner w-100 mb-4">
        <div class="px-5">
            <h2 class="mb-4 limit-title" style="font-size: 55px">Kalkulus Limit Fungsi — Latihan Soal dan Jawaban</h2>

            <div class="d-flex justify-content-center mb-4 border-bottom pb-2">
                <button id="btn-soal-1" class="btn btn-link active-tab mx-3">Soal 1</button>
                <button id="btn-soal-2" class="btn btn-link mx-3">Soal 2</button>
                <button id="btn-soal-3" class="btn btn-link mx-3">Soal 3</button>
            </div>

            <div id="no1">
                <div class="section">
                    <h4 class="section-title">Latihan Soal 1</h4>
                    <div class="mb-2">Cari limit dari fungsi berikut:</div>
                    <div class="problem p-2 bg-light rounded">
                        <div class="mx-2 no-1">\(\lim_{x \to 1} \frac{x^2 - 1}{x - 1}\)</div>
                    </div>
                    <button class="btn btn-primary my-3" id="showSteps1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-1" aria-expanded="false" aria-controls="collapse-steps-1">
                        Tampilkan Langkah-langkah
                    </button>
                    <button class="btn btn-primary my-3 d-none" id="hideSteps1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-1" aria-expanded="false" aria-controls="collapse-steps-1">
                        Sembunyikan Langkah-langkah
                    </button>
                    <div class="collapse" id="collapse-steps-1">
                        <p class="mt-1">Pertama-tama, kita ubah \(x^2 - 1\) menjadi \(x^2 - 1^2\) agar dapat difaktorisasi:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 1} \frac{x^2 - 1^2}{x - 1}\)</div>
                        </div>
                        <p class="mt-4">Lakukan faktorisasi berdasarkan sifat \(a^2 - b^2 = (a - b)(a + b)\):</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 1} \frac{(x - 1)(x + 1)}{x - 1}\)</div>
                        </div>
                        <p class="mt-4">Karena pada pembilang dan penyebut ada yang sama yaitu \((x - 1)\), kita eliminasi keduanya:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 1} (x + 1)\)</div>
                        </div>
                        <p class="mt-4">Selanjutnya, kita substitusikan \(x\) dengan \(1\) berdasarkan \(x \to 1\):</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 1} (1 + 1) = 2\)</div>
                        </div>
                        <p class="mt-4 mb-5">Jadi, limitnya adalah \(2\).</p>
                    </div>
                </div>
            
                <div class="section mt-4">
                    <h4 class="section-title mb-3">Langkah-langkah Pengerjaan 1</h4>
                    <p>Jika Anda masih kesulitan dalam memahami langkah-langkah di atas, Anda dapat menonton video berikut untuk melihat penjelasan langkah demi langkah dalam pengerjaannya:</p>
                    <div class="d-flex justify-content-center">
                        <div class="video ratio ratio-16x9 mb-5">
                            <iframe src="https://www.youtube.com/embed/TZ-PTzlmlVg" 
                                    title="Langkah-langkah Pengerjaan Limit Fungsi Nomor 1"
                                    allowfullscreen 
                                    class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div id="no2" class="d-none">
                <div class="section">
                    <h4 class="section-title">Latihan Soal 2</h4>
                    <div class="mb-2">Cari limit dari fungsi berikut:</div>
                    <div class="problem p-2 bg-light rounded">
                        <div class="problem-2 mx-2">\(\lim_{x \to 2} \frac{x^2 - 7x + 10}{x^2 - 4}\)</div>
                    </div>
                    <button class="btn btn-primary my-3" id="showSteps2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-2" aria-expanded="false" aria-controls="collapse-steps-2">
                        Tampilkan Langkah-langkah
                    </button>
                    <button class="btn btn-primary my-3 d-none" id="hideSteps2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-2" aria-expanded="false" aria-controls="collapse-steps-2">
                        Sembunyikan Langkah-langkah
                    </button>
                    <div class="collapse" id="collapse-steps-2">
                        <p class="mt-1">Pertama-tama, kita faktorisasikan penyebut dan pembilangnya:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="solution-2 mx-2">\(\lim_{x \to 2} \frac{(x - 2)(x - 5)}{(x - 2)(x + 2)}\)</div>
                        </div>
                        <p class="mt-4">Karena pada pembilang dan penyebut ada yang sama yaitu \((x - 2)\), kita eliminasi keduanya:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="solution-2 mx-2">\(\lim_{x \to 2} \frac{x - 5}{x + 2}\)</div>
                        </div>
                        <p class="mt-4">Selanjutnya, kita substitusikan \(x\) dengan \(2\) berdasarkan \(x \to 2\):</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="solution-2 mx-2">\(\lim_{x \to 2} \frac{2 - 5}{2 + 2} = \frac{-3}{4}\)</div>
                        </div>
                        <p class="mt-4 mb-5">Jadi, limitnya adalah \(-\frac{3}{4}\).</p>
                    </div>
                </div>
            
                <div class="section mt-4">
                    <h4 class="section-title mb-3">Langkah-langkah Pengerjaan 2</h4>
                    <p>Jika Anda masih kesulitan dalam memahami langkah-langkah di atas, Anda dapat menonton video berikut untuk melihat penjelasan langkah demi langkah dalam pengerjaannya:</p>
                    <div class="d-flex justify-content-center">
                        <div class="video ratio ratio-16x9 mb-5">
                            <iframe src="https://www.youtube.com/embed/46Nu-Z_gyao" 
                                    title="Langkah-langkah Pengerjaan Limit Fungsi Nomor 2"
                                    allowfullscreen 
                                    class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div id="no3" class="d-none">
                <div class="section">
                    <h4 class="section-title">Latihan Soal 3</h4>
                    <div class="mb-2">Cari limit dari fungsi berikut:</div>
                    <div class="problem p-2 bg-light rounded">
                        <div class="problem-2 mx-2">\(\lim_{x \to 3} \frac{x^2 - 9}{x^2 - x - 6}\)</div>
                    </div>
                    <button class="btn btn-primary my-3" id="showSteps3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-3" aria-expanded="false" aria-controls="collapse-steps-3">
                        Tampilkan Langkah-langkah
                    </button>
                    <button class="btn btn-primary my-3 d-none" id="hideSteps3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-steps-3" aria-expanded="false" aria-controls="collapse-steps-3">
                        Sembunyikan Langkah-langkah
                    </button>
                    <div class="collapse" id="collapse-steps-3">
                        <p class="mt-1">Pertama-tama, kita faktorisasikan penyebut dan pembilangnya:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 3} \frac{(x - 3) (x + 3)}{(x + 2) (x - 3)}\)</div>
                        </div>
                        <p class="mt-4">Karena pada pembilang dan penyebut ada yang sama yaitu \((x - 3)\), kita eliminasi keduanya:</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 3} \frac{(x + 3)}{(x + 2)}\)</div>
                        </div>
                        <p class="mt-4">Selanjutnya, kita substitusikan \(x\) dengan \(3\) berdasarkan \(x \to 3\)</p>
                        <div class="solution bg-light p-2 my-3 rounded">
                            <div class="mx-2 solution-2">\(\lim_{x \to 3} \frac{(3 + 3)}{(3 + 2)} = \frac{6}{5}\)</div>
                        </div>
                        <p class="mt-4 mb-5">Jadi, limitnya adalah \(\frac{6}{5}\).</p>
                    </div>
                </div>
            
                <div class="section mt-4">
                    <h4 class="section-title mb-3">Langkah-langkah Pengerjaan 3</h4>
                    <p>Jika Anda masih kesulitan dalam memahami langkah-langkah di atas, Anda dapat menonton video berikut untuk melihat penjelasan langkah demi langkah dalam pengerjaannya:</p>
                    <div class="d-flex justify-content-center">
                        <div class="video ratio ratio-16x9 mb-5">
                            <iframe src="https://www.youtube.com/embed/TGLasyfitjs" 
                                    title="Langkah-langkah Pengerjaan Limit Fungsi Nomor 3"
                                    allowfullscreen 
                                    class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

<script>
    document.getElementById('btn-soal-1').addEventListener('click', function() {
        document.getElementById('no1').classList.remove('d-none');
        document.getElementById('no2').classList.add('d-none');
        document.getElementById('no3').classList.add('d-none');
        this.classList.add('active-tab');
        document.getElementById('btn-soal-2').classList.remove('active-tab');
        document.getElementById('btn-soal-3').classList.remove('active-tab');
    });

    document.getElementById('btn-soal-2').addEventListener('click', function() {
        document.getElementById('no2').classList.remove('d-none');
        document.getElementById('no1').classList.add('d-none');
        document.getElementById('no3').classList.add('d-none');
        this.classList.add('active-tab');
        document.getElementById('btn-soal-1').classList.remove('active-tab');
        document.getElementById('btn-soal-3').classList.remove('active-tab');
    });

    document.getElementById('btn-soal-3').addEventListener('click', function() {
        document.getElementById('no3').classList.remove('d-none');
        document.getElementById('no1').classList.add('d-none');
        document.getElementById('no2').classList.add('d-none');
        this.classList.add('active-tab');
        document.getElementById('btn-soal-1').classList.remove('active-tab');
        document.getElementById('btn-soal-2').classList.remove('active-tab');
    });

    document.getElementById('showSteps1').addEventListener('click', function() {
        document.getElementById('hideSteps1').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('hideSteps1').addEventListener('click', function() {
        document.getElementById('showSteps1').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('showSteps2').addEventListener('click', function() {
        document.getElementById('hideSteps2').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('hideSteps2').addEventListener('click', function() {
        document.getElementById('showSteps2').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('showSteps3').addEventListener('click', function() {
        document.getElementById('hideSteps3').classList.remove('d-none');
        this.classList.add('d-none');
    });

    document.getElementById('hideSteps3').addEventListener('click', function() {
        document.getElementById('showSteps3').classList.remove('d-none');
        this.classList.add('d-none');
    });
</script>
@endsection