<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
</script>

<template>
    <AppStoreLayout>
        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/es-lilin.jpg"
                                            class="img-fluid me-5 rounded" style="height: 80px;"
                                            alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Es Lilin Aneka Rasa</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 3000</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
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
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 3000</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                        <button class="btn btn-md bg-primary border text-light mt-4">
                                            Checkout
                                        </button>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                         <img src="/images/products/martabak.jpg"
                                            class="img-fluid me-5 rounded" style="height: 80px;"
                                            alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Martabak Telur</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 12.000</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
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
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 12.000</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                        <button class="btn btn-md bg-primary border text-light mt-4">
                                            Checkout
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                         <img src="/images/products/kain-perca.jpg"
                                            class="img-fluid me-5 rounded" style="height: 80px;"
                                            alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">Kain Perca</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 30.000</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
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
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp. 30.000</p>
                                </td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                        <button class="btn btn-md bg-primary border text-light mt-4">
                                            Checkout
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row g-4 justify-content-end">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="bg-light rounded">
                            <div class="p-4">
                                <h1 class="display-6 mb-4">Total Keranjang</h1>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Subtotal:</h5>
                                    <p class="mb-0">Rp. 45.000</p>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Biaya admin:</h5>
                                    <p class="mb-0">Rp. 5.000</p>
                                </div>
                            </div>
                            <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Total</h5>
                                <p class="mb-0 pe-4">Rp. 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
    </AppStoreLayout>
</template>

<style scoped></style>