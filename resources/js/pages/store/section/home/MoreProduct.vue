<script setup lang="ts">
import { onMounted } from 'vue'

onMounted(() => {
    $('.owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
    });
});
</script>

<template>
    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Produk 100% Organik</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Parsely</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$4.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Parsely</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$4.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-3.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Banana</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Bell Papper</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Potatoes</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Parsely</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Potatoes</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="/assets/img/vegetable-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom text-center">
                        <h4>Parsely</h4>
                        
                        <div class="d-flex justify-content-center flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-3">$7.99 / kg</p>
                            <a href="#" class="btn border border-primary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->
</template>
