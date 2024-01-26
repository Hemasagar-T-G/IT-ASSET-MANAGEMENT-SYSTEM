$(document).ready(function(){
  $.ajax({
    url: "http://localhost/my_suit/barchart/chart.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var asset = [];
      var Quantity = [];

      for(var i in data) {
        asset.push("" + data[i].assetName);
        Quantity.push(data[i].assetQty);
      }

      var chartdata = {
        labels: asset,
        datasets : [
          {
            label: 'HARDWARE ASSET ',
            backgroundColor: 'rgb(0, 0, 255)',
            borderColor: 'black',
            hoverBackgroundColor: 'rgb(0, 142, 255)',
            hoverBorderColor: 'rgb(106, 90, 205)',
            data: Quantity
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});