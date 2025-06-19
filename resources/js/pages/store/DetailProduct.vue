<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
</script>

<template>
    <AppStoreLayout>
        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-12 col-xl-12">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <a href="#">
                                        <img src="/images/products/martabak.jpg" class="img-fluid rounded" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Martabak Telur</h4>
                                <p class="mb-3">Category: Makanan Olahan</p>
                                <h5 class="fw-bold mb-3">Rp. 12.000</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4">Nikmati kelezatan Martabak Telur yang digoreng hingga renyah di luar,
                                    lembut di dalam. Dibuat dari kulit martabak tipis yang dibalut dengan isian telur
                                    segar, daging cincang pilihan, daun bawang, dan bumbu rempah khas yang menggugah
                                    selera.</p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="#"
                                        class="btn border border-primary rounded-pill px-4 py-2 mb-4 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                                    <a href="#"
                                        class="btn btn-primary rounded-pill px-4 py-2 mb-4 text-light">Checkout</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button"
                                            role="tab" id="nav-about-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-about" aria-controls="nav-about"
                                            aria-selected="true">Deskripsi produk</button>
                                        <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                            id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                            aria-controls="nav-mission" aria-selected="false">Komentar</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel"
                                        aria-labelledby="nav-about-tab">
                                        <h3>Bahan &amp; Komposisi:</h3>
                                        <ul>
                                            <li>Telur ayam segar</li>
                                            <li>Daging sapi/ayam cincang pilihan (bisa request)</li>
                                            <li>Daun bawang segar</li>
                                            <li>Bawang merah &amp; bawang putih</li>
                                            <li>Lada, garam, dan rempah pilihan</li>
                                            <li>Kulit martabak tipis homemade</li>
                                            <li>Minyak goreng berkualitas (sekali pakai, tidak digunakan berulang)</li>
                                        </ul>

                                        <h3>Ciri Khas &amp; Keunggulan:</h3>
                                        <ul>
                                            <li>✅ Kulit tipis &amp; super renyah</li>
                                            <li>✅ Isian melimpah, tidak pelit daging</li>
                                            <li>✅ Racikan bumbu khas, rasa autentik</li>
                                            <li>✅ Digoreng dadakan, fresh setiap hari</li>
                                            <li>✅ Tanpa pengawet &amp; tanpa MSG</li>
                                            <li>✅ Cocok untuk berbagai acara: arisan, kumpul keluarga, bekal kerja,
                                                hingga menu berbuka puasa</li>
                                        </ul>

                                        <h3>Porsi &amp; Kemasan:</h3>
                                        <ul>
                                            <li>Ukuran: 1 kotak isi 4 potong / sesuai pesanan</li>
                                            <li>Kemasan: Food grade, higienis &amp; aman saat pengiriman</li>
                                            <li>Tahan 1 hari suhu ruang, atau 2&ndash;3 hari jika disimpan di kulkas
                                                (dianjurkan dihangatkan kembali dengan oven/penggorengan agar tetap
                                                renyah)</li>
                                        </ul>

                                        <h3>Cara Penyajian:</h3>
                                        <ol>
                                            <li>Goreng ulang sebentar di wajan anti lengket tanpa minyak atau dengan
                                                sedikit minyak untuk hasil renyah maksimal</li>
                                            <li>Bisa juga dihangatkan di oven 5&ndash;10 menit</li>
                                            <li>Sajikan hangat dengan acar timun &amp; cabai rawit sesuai selera</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane" id="nav-mission" role="tabpanel"
                                        aria-labelledby="nav-mission-tab">
                                        <div class="d-flex">
                                            <img src="/assets/img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                                style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;">Juni 15, 2025</p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>Muhammad Ibnu</h5>
                                                    <div class="d-flex mb-3">
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Martabaknya enak banget! Kulitnya renyah, isian daging dan telurnya
                                                    terasa gurih dan bumbunya pas. Ukuran potongannya juga cukup besar.
                                                    Cuma kemarin pas sampai agak kurang hangat, jadi harus dipanasin
                                                    lagi biar makin mantap.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <img src="/assets/img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                                style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>Al Harits</h5>
                                                    <div class="d-flex mb-3">
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="text-dark">Rasanya enak banget, kulitnya kriuk dan isian
                                                    dagingnya terasa banget. Bumbunya juga mantap. Pengiriman oke, cuma
                                                    agak lama aja sampai rumah, jadi pas dimakan nggak terlalu panas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="#">
                                <h4 class="mb-5 fw-bold">Berikan komentar produk</h4>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex gap-3 align-items-center" style="font-size: 25px;">
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded">
                                            <textarea name="" id="" class="form-control border-1" cols="30" rows="8"
                                                placeholder="Tulis sebuah komentar" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn bg-primary text-light rounded-pill px-4 py-3">Berikan
                                                Komentar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
    </AppStoreLayout>
</template>
