// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

console.log(dataKriteriaNama);
console.log(dataKriteriaBobot);
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: dataKriteriaNama,
    datasets: [{
      data: dataKriteriaBobot,
      backgroundColor: ['#3b6064', '#655357', '#42648d', '#768e7e', '#905a5b', '#d04131', '#4882b3'],
    }],
  },
});
