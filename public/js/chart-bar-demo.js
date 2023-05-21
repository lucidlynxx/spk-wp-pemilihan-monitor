// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

let nilaiMaxY = 1 / dataNilaiV.length + 0.1;

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dataNamaAlternatif,
    datasets: [{
      label: "Nilai V ",
      backgroundColor: "rgba(174,174,174,1)",
      borderColor: "rgba(174,174,174,1)",
      data: dataNilaiV,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'monitor'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: dataNamaAlternatif.length
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: nilaiMaxY,
          maxTicksLimit: dataNilaiV.length + 1
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
