<template>
    <v-card height="600px" elevation="4">
        <v-card-title>Top Selling Products</v-card-title>
        <v-card-text>
            <Pie
                id="my-chart-id"
                :options="chartOptions"
                :data="chartData"
                />
        </v-card-text>

    </v-card>
   
  </template>
  
  <script>
    import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
    import { Pie } from 'vue-chartjs'
        

    ChartJS.register(ArcElement, Tooltip, Legend)
  
  export default {
    name: 'PieChart',
    components: { Pie },
    data() {
      return {
        chartData: {
            labels: ['VueJs', 'EmberJs', 'ReactJs', 'AngularJs'],
            datasets: [
                {
                backgroundColor: ['#41B883', '#E46651', '#00D8FF', '#DD1B16'],
                data: [40, 20, 80, 10]
                }
            ]
        },
        chartOptions: {
          responsive: true,
          maintainAspectRatio: true
        }
      }
    }
  }
  </script>