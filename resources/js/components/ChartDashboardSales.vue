<template>
   <canvas id="chart-dashboard-sales"></canvas>
</template>
<script>

export default {    
   data () {
      return {
         chartId : 'chart-dashboard-sales',
         type: 'line',
         data: {
            labels: ['MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'],
            datasets: [
                  {
                     label: 'This Week',
                     fill: true,
                     backgroundColor: 'rgba(220,220,220,.3)',
                     borderColor: 'rgba(220,220,220,1)',
                     pointBackgroundColor: 'rgba(220,220,220,1)',
                     pointBorderColor: '#fff',
                     pointHoverBackgroundColor: '#fff',
                     pointHoverBorderColor: 'rgba(220,220,220,1)',
                     data: [30, 32, 40, 45, 43, 38, 55]
                  },
                  {
                     label: 'Last Week',
                     fill: true,
                     backgroundColor: 'rgba(171, 227, 125, .3)',
                     borderColor: 'rgba(171, 227, 125, 1)',
                     pointBackgroundColor: 'rgba(171, 227, 125, 1)',
                     pointBorderColor: '#fff',
                     pointHoverBackgroundColor: '#fff',
                     pointHoverBorderColor: 'rgba(171, 227, 125, 1)',
                     data: [15, 16, 20, 25, 23, 25, 32]
                  }
            ]
         },
         options: {
            scales: {
                  yAxes: [{
                     ticks: {
                        beginAtZero: true
                     }
                  }]
            }
         }
      }
   },
   mounted () {
      this.createChart();
   },
   methods : {
      createChart() {
         const ctx = document.getElementById(this.chartId);
         const myChart = new Chart(ctx, {
            type: this.type,
            data: this.data,
            options: this.options,
      });
      }
   }

}
</script>