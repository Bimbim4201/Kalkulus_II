@extends('layouts.main')

@section('container')
<div class="container2 my-2">
    <div class="content-wrapper bg-white shadow rounded w-100" style="padding-bottom: 1.75rem">
        <img src="{{ asset('images/banner_limit.png') }}" alt="Kalkulus Limit" class="limit-banner w-100 mb-4">
        <div class="px-5">
    
            <h2 class="mb-4 limit-title" style="font-size: 50px">Kalkulus Limit Fungsi — Pengertian dan Sifat-Sifatnya</h2>
    
            <div class="section mb-5">
                <h3 class="section-title">Apa itu Limit?</h3>
                <p>Limit memiliki arti kata yaitu batas, membatasi, mempersempit, atau mendekatkan. Dalam kehidupan sehari-hari, orang sering dihadapkan pada masalah-masalah pendekatan suatu nilai/besaran.</p>
                
                <div>Limit dari suatu fungsi menggambarkan nilai yang didekati oleh fungsi tersebut saat variabelnya mendekati nilai tertentu. Dalam notasi matematika, limit dari fungsi  \(f(x)\) saat \(x\) mendekati \(a\) dapat dituliskan sebagai:</div>
                <div class="mx-3 p-2">
                    \(\lim_{x \to a} f(x) = L\)
                </div>
                <p>Artinya, ketika \(x\) mendekati \(a\), maka nilai fungsi \(f(x)\) akan mendekati nilai \(L\), jika \(L\) adalah nilai limitnya.</p>

                <p>Limit tidak mempermasalahkan nilai fungsi \(f(x)\) tepat di \(x = c\), melainkan hanya memperhatikan perilaku \(f(x)\) saat \(x\) berada sangat dekat dengan \(c\).</p>

                <b>Contoh:</b>
                <div>Diberikan \(f(x) = x + 1\)</div>
                <p class="mx-4">Berapa nilai \(f(x)\) saat \(x\), “sangat dekat” dengan \(0\)?</p>

                <p>Nilai eksak yang menjadi jawaban pertanyaan di atas sulit ditentukan, bahkan tidak mungkin. Mengapa demikian? Karena kita tidak dapat memberikan kepastian nilai \(x\) yang dimaksud. Meskipun demikian, nilai pendekatan untuk yang dimaksud bisa ditentukan.</p>

                <p>Perhatikan tabel berikut:</p>
                <div class="table-responsive">
                    <table class="table table-bordered border-dark w-100 text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th style="width: 25%;">\(x\)</th>
                                <th style="width: 25%;">\(f(x)\)</th>
                                <th style="width: 25%;">\(x\)</th>
                                <th style="width: 25%;">\(f(x)\)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-1</td>
                                <td>0</td>
                                <td>1,24</td>
                                <td>2,24</td>
                            </tr>
                            <tr>
                                <td>-0,55</td>
                                <td>0,45</td>
                                <td>0,997</td>
                                <td>1,997</td>
                            </tr>
                            <tr>
                                <td>-0,125</td>
                                <td>0,875</td>
                                <td>0,00195</td>
                                <td>1,00195</td>
                            </tr>
                            <tr>
                                <td>-0,001</td>
                                <td>0,999</td>
                                <td>0,0000015</td>
                                <td>1,0000015</td>
                            </tr>
                            <tr>
                                <td>-0,000001</td>
                                <td>0,999999</td>
                                <td>0,000000001</td>
                                <td>1,000000001</td>
                            </tr>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>Dari tabel di atas dapat dilihat, apabila nilai \(x\) semakin “dekat” dengan \(0\), maka \(f(x)\) akan semakin “dekat” dengan \(1\). Dengan catatan bahwa \(f(0) = 1\) adalah sebuah kebetulan. Dengan grafik, dapat digambarkan sebagai berikut.</p>

                <div class="d-flex justify-content-center my-4">
                    <img src="{{ asset('images/graphic.png') }}" alt="Grafik" class="img-fluid">
                </div>
                
                <p>Dari grafik dapat dilihat, apabila \(x\) sangat “dekat” dengan \(0\), baik untuk \(x < 0\) maupun untuk \(x > 0\), maka \(f(x)\) sangat “dekat” dengan \(1\).</p>
            </div>

            <div class="section mb-5">
                <h4 class="section-title">Sifat-Sifat Dasar Limit Fungsi</h4>
                <p>Berikut adalah beberapa sifat dasar limit fungsi yang sering digunakan dalam kalkulus:</p>
                <ol>
                    <li class="mb-3">
                        <div>Limit dari sebuah konstanta adalah konstanta itu sendiri.</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} k = k\)
                        </div>
                        <span>Contoh: </span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 2} 5 = 5\)                
                        </div>
                    </li>
                    <li class="mb-3">
                        <div>Limit dari variabel \(x\) saat mendekati \(c\) adalah \(c\).</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} x = c\)
                        </div>
                        <span>Contoh: </span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 3} x = 3\)
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="mt-3">Limit penjumlahan fungsi sama dengan jumlah dari limit masing-masing fungsi.</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} [f(x) + g(x)] = \lim_{x \to c} f(x) + \lim_{x \to c} g(x)\)
                        </div>
                        <span>Contoh: </span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 2} (x + 3) = \lim_{x \to 2} x + \lim_{x \to 2} 3\)
                        </div>
                    </li>  
                    <li class="mb-3">
                        <div>Limit dari sebuah fungsi yang dikalikan konstanta adalah konstanta tersebut dikalikan dengan limit fungsi.</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} [k \cdot f(x)] = k \cdot \lim_{x \to c} f(x)\)
                        </div>
                        <span>Contoh: </span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 1} 3x = 3 \cdot \lim_{x \to 1} x\)
                        </div>
                    </li>
                    <li class="mb-3">
                        <div>Limit perkalian fungsi sama dengan hasil kali dari limit masing-masing fungsi.</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} [f(x) \cdot g(x)] = \lim_{x \to c} f(x) \cdot \lim_{x \to c} g(x)\)
                        </div>
                        <span>Contoh:</span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 2} (x \cdot (x + 1)) = \lim_{x \to 2} x \cdot \lim_{x \to 2} (x + 1)\)
                        </div>
                    </li>
                    <li class="mb-3">
                        <div>Limit pembagian fungsi sama dengan hasil pembagian dari limit masing-masing fungsi.</div>
                        <div class="notation-container p-1">
                            \(\lim_{x \to c} \frac{f(x)}{g(x)} = \frac{\lim_{x \to c} f(x)}{\lim_{x \to c} g(x)}\)
                        </div>
                        <span>Contoh: </span>
                        <div class="notation-container p-1">
                            \(\lim_{x \to 2} \frac{x}{x + 1} = \frac{\lim_{x \to 2} x}{\lim_{x \to 2} (x + 1)}\)
                        </div>
                    </li>                     
                </ol>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth <= 768) {
            document.getElementById('unique-container').classList.remove('unique-container');
            document.getElementById('unique-container-2').classList.remove('p-2');
            document.getElementById('unique-container-2').classList.remove('content-wrapper');
            document.getElementById('unique-container-2').classList.remove('bg-white');
            document.getElementById('unique-container-2').classList.remove('shadow');
            document.getElementById('unique-container-2').classList.remove('rounded');
        }
    });

</script> --}}

@endsection