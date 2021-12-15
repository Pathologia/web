new window.Chart("myChart", {
    type: "bar",
    data: {
      labels: ['1','2','3'],
      datasets: [{
        backgroundColor: "green",
        data: [15,2,7]
      }]
    },
    options: {
      scales: {
        yAxes: [{
          display: true,
          ticks: {
              suggestedMin: 0,
              suggestedMax: 10,
          }
        }]
      },
      legend: {display: false},
      title: {
        display: true,
        text: "Nombres de personnes présentant un symptôme aujourd'hui"
      }
    }
  });
