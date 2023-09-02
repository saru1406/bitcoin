<script setup>
import { Chart, registerables } from "chart.js";
import { LineChart } from "vue-chart-3";
import { reactive, watchEffect } from "vue";
Chart.register(...registerables);

const props = defineProps({
  data: Object
});

const barData = reactive({
  labels: [],
  datasets: [
    {
      label: "ビットコイン",
      data: [],
      backgroundColor: "rgb(75, 192, 192)",
      tension: 0.1
    }
  ]
});

watchEffect(() => {
  if (props.data) {
    const dataArray = Object.values(props.data);
    const prices = dataArray.map((item) => item.price);
    const labels = Array.from({ length: prices.length }, (_, i) => i + 1);

    barData.labels = labels;
    barData.datasets[0].data = prices;
  }
});
</script>

<template>
  <div>
    <LineChart :chartData="barData" />
  </div>
</template>
