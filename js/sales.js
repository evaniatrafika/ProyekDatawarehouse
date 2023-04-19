$(document).ready(function () {
  $.ajax({
    url: "http://localhost/Datawarehouse/salesdataorder.php",
    method: "GET",
    success: function (data2) {
      console.log(data2);
      var nama = [];
      var total = [];

      for (var i in data2) {
        nama.push(data2[i].Nama);
        total.push(data2[i].total);
      }

      var ctx = document.getElementById("myBarChart2");

      var myBarChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: nama,
          datasets: [
            {
              label: "Total Penjualan",
              backgroundColor: "rgba(255, 99, 132, 0.2)",
              hoverBackgroundColor: "rgba(255, 99, 132, 0.2)",
              borderColor: "rgba(255, 99, 132, 0.2)",
              data: total,
            },
          ],
        },
        options: {
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 20,
              right: 35,
              top: 35,
              bottom: 0,
            },
          },
          scales: {
            xAxes: [
              {
                time: {},
                gridLines: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  maxTicksLimit: 10,
                },
                maxBarThickness: 25,
              },
            ],
            yAxes: [
              {
                ticks: {
                  min: 0,
                  maxTicksLimit: 6,
                  padding: 5,
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2],
                },
              },
            ],
          },
          legend: {
            display: false,
          },
          tooltips: {
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 15,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 5,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 15,
          },
        },
      });
    },
    error: function (data2) {
      console.log(data2);
    },
  });
});
