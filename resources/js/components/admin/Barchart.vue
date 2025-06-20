<template>
    <div class="p-5">
        <h4 class="font-semibold text-xl">Grafik Penjualan 7 Hari</h4>
        <div ref="chartRef" style="height: 400px;"></div>
    </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';
import * as echarts from 'echarts';

const chartRef = ref(null);

onMounted(() => {
    const chart = echarts.init(chartRef.value);
    chart.setOption({
        tooltip: {},
        xAxis: {
            data: ['Martabak Telur', 'Biji Kopi', 'Kain Perca', 'Keranjang Bambu']
        },
        yAxis: {},
        series: [
            {
                name: 'Jumlah',
                type: 'bar',
                data: [5, 20, 36, 10]
            }
        ]
    });
});
</script>
