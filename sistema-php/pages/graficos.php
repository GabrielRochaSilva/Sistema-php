<?php include 'cabecalho.php'?>
<?php include("../bd/conect.php")?>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="container-fluid">
        <h2>SISTEMA DE SATISFAÇÃO DE ATENDIMENTO</h2>
    </header>

    
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Opções', 'Votos'],
          ['Ótimo',  <?php consultar("otimo")?>],
          ['Regular',  <?php consultar("regular")?>],
          ['Ruin',  <?php consultar("ruin")?>],
        ]);

        var options = {
          title: 'Resultados',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>



<?php include 'rodape.php'?>