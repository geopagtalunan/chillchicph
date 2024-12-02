<template>
    <v-card height="600px" elevation="4">
        <v-card-title>Weekly Sales</v-card-title>
        <v-card-text>
            <Bar
                id="my-chart-id"
                :options="chartOptions"
                :data="chartData"
                
                />
        </v-card-text>

    </v-card>
   
  </template>
  
  <script>
  import { Bar } from 'vue-chartjs'
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
  
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
  
  export default {
    name: 'BarChart',
    components: { Bar },
    data() {
      return {
        chartData: {
          labels: [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' ],
          datasets: [ { data: [40, 20, 12, 39, 21, 19, 22] } ],
          title: "test"
        },
        chartOptions: {
          responsive: true
        }
      }
    }
  }
  </script>