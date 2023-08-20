<script setup>
import { Chart, registerables } from "chart.js";
import { BarChart } from "vue-chart-3";
import { reactive } from "vue"
Chart.register(...registerables);

const props = defineProps({
    'data': Object
})

const key = props.data.data.map(key => key);
const prices = props.data.data.map(item => item.price);
console.log(prices)

const barData = reactive({
    labels: key,
    datasets: [
        {
            label: 'ビットコイン',
            data: prices,
            backgroundColor: "rgb(75, 192, 192)",
            tension: 0.1,
        }
    ]
})
</script>

<template>
    <div>
        <BarChart :chartData="barData" />
    </div>
</template>
