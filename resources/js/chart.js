new window.Chart("donutChartJS", {
    type: "doughnut",
    data: {
        categories:['1','2'],
        datas:[12,25],
        title:"toto",
      datasets:
      [{
        backgroundColor:  [
            "#A93226",
            "#CB4335",
            "#884EA0",
            "#7D3C98",
            "#2471A3",
            "#17A589",
            "#138D75",
            "#229954",
            "#28B463",
            "#D4AC0D",
            "#D68910",
            "#CA6F1E",
            "#BA4A00",
            "#D0D3D4",
            "#839192",
            "#707B7C",
            "#2E4053",
            "#273746",
          ],
        data: this.datas
      }]
    },
    options: {
      title: {
        display: true,
        text: this.title
      }
    }
  });
