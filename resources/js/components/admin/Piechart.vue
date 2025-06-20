<template>
  <div class="p-5">
    <div ref="pieChartRef" style="height: 400px;"></div>
  </div>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';
import * as echarts from 'echarts';

const pieChartRef = ref(null);

onMounted(() => {
  const chart = echarts.init(pieChartRef.value);
  chart.setOption({
    title: {
      text: 'Kategori Produk Terlaris',
      left: 'center'
    },
    tooltip: {
      trigger: 'item'
    },
    legend: {
      orient: 'vertical',
      left: 'left'
    },
    series: [
      {
        name: 'Penjualan',
        type: 'pie',
        radius: '50%',
        data: [
          { value: 1048, name: 'Tekstil' },
          { value: 735, name: 'Kerajinan' },
          { value: 580, name: 'Makanan olahan' },
          { value: 484, name: 'Sayur-sayuran' },
          { value: 300, name: 'Lainnya' }
        ],
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }
    ]
  });
});
</script>
