<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
</script>

<template>
    <AppStoreLayout>
        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="row g-4 mt-5">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="Cari produk UMKM..."
                                        aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                    <label for="fruits">Kategori Produk:</label>
                                    <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                        form="fruitform">
                                        <option value="volvo">Tidak ada</option>
                                        <option value="saab">Popularity</option>
                                        <option value="opel">Organic</option>
                                        <option value="audi">Fantastic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/cimol.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Cimol Bulat Renyah</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp.3000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/es-lilin.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Es Lilin Aneka Rasa</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 3000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/keripik-pisang.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Keripik Pisang</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 10.000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/keripik-sale.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Keripik Sale Manis</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 20.000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/kripik-kentang-pedas.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Keripik Kentang Pedas</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 5000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/martabak.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Martabak Telur</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 12.000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/martabak-keju.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Martabak Keju</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 15.000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="/images/products/medoan.jpg"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="p-4 border border-primary border-top-0 rounded-bottom">
                                                <h4>Mendoan Tempe</h4>

                                                <div class="d-flex justify-content-center flex-lg-wrap">
                                                    <div>
                                                        <p class="text-dark fs-5 fw-bold mb-3">Rp. 5000</p>
                                                        <a href="#"
                                                            class="btn border border-primary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Beli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->
    </AppStoreLayout>
</template>