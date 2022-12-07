<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Yearly patient record'],
          ['2021',  10],
          ['2022',  30],
          ['2023',  0],
          ['2024', 0],
          ['2025', 0],

        ]);

        var options = {
          title: 'Yearly patient record'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
       google.charts.load('current', {'packages':['bar']});
       google.charts.setOnLoadCallback(drawStuff);
 
       function drawStuff() {
         var data = new google.visualization.arrayToDataTable([
             ['', 'Visitors', 'Patients'],
           ['january', 100, 23.3],
           ['Feburary', 200, 4.5],
           ['March', 300, 14.3],
           ['April', 400, 0.9],
           ['May', 500, 13.1],
           ['June', 600, 13.1],
           ['july', 200, 4.5],
           ['August', 300, 14.3],
           ['September', 400, 0.9],
           ['October', 500, 13.1],
           ['November', 400, 0.9],
           ['December', 500, 13.1],
 
 
         ]);
 
         var options = {
           width:1000,
           chart: {
             title: 'New patients',
             subtitle: 'visitors'
           },
           bars: 'vertical', // Required for Material Bar Charts.
           series: {
             0: { axis: 'patient' }, // Bind series 0 to an axis named 'distance'.
            
           },
           axes: {
             x: {
               distance: {label: 'parsecs'}, // Bottom x-axis.
               brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
             }
           }
         };
 
       var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
       chart.draw(data, options);
     };
     </script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Days', 'Patient'],
            ['1',  100,],
            ['2',  70,],
            ['3',  66],
            ['5',  130],
            ['6',  13]
          ]);
  
          var options = {
            title: 'Opd ',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
  
          chart.draw(data, options);
        }
      </script>
 
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="piechart" style="width: 900px; height: 500px;"></div>
          </div>
          <div class="col-md-6">
            <div id="dual_x_div" style="width: 900px; height: 500px;"></div> 
          </div>
        
        </div>
      </div>
    
     
</body>
  </body>

</html>
