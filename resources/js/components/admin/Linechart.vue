<template>
  <div class="p-5">
    <h4 class="font-semibold text-xl">Grafik Produk Terjual</h4>
    <div ref="lineChartRef" style="height: 400px;"></div>
  </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';
import * as echarts from 'echarts';

const lineChartRef = ref(null);

onMounted(() => {
  const chart = echarts.init(lineChartRef.value);
  chart.setOption({
    tooltip: {
      trigger: 'axis'
    },
    xAxis: {
      type: 'category',
      data: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun']
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        name: 'Jumlah Penjualan',
        type: 'line',
        data: [120, 200, 150, 80, 70, 110]
      }
    ]
  });
});
</script>
