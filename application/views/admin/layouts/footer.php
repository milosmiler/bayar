 <!-- Mainly scripts -->
    <script src="<?= base_url() ?>public/js/admin/jquery-3.1.1.min.js"></script>


    <script src="<?= base_url() ?>public/js/admin/popper.min.js"></script>
    <script src="<?= base_url() ?>public/js/admin/bootstrap.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?= base_url() ?>public/js/admin/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?= base_url() ?>public/js/admin/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url() ?>public/js/admin/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url() ?>public/js/admin/inspinia.js"></script>
    <script src="<?= base_url() ?>public/js/admin/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url() ?>public/js/admin/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?= base_url() ?>public/js/admin/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?= base_url() ?>public/js/admin/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?= base_url() ?>public/js/admin/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?= base_url() ?>public/js/admin/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?= base_url() ?>public/js/admin/plugins/toastr/toastr.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="<?= base_url() ?>public/js/admin/plugins/summernote/summernote-bs4.js"></script>



    <script type="text/javascript">
        
        $(".btn-sm").click(function(e) {
            var textarea = $("textarea[name='aviso1']").val();
            textarea_line = textarea.replace(new RegExp("\n","g"), "<br>");
            $("input[name='aviso_cueron']").val(textarea_line);
            $("form").submit();
        });


    </script>


    <script type="text/javascript">
        
        $(".eliminar_img").click(function(e) {
            e.preventDefault();

            if (confirm("¿Seguro que quieres eliminar la imagen?")) {

                var nombre_input = $(this).next().attr("name");
                var id = $("input[name='ddi']").val();
                var base_url = $("input[name='base_url']").val();
                var cat = $("input[name='cat']").val();
                var element = $(this);

                var dataSend = new FormData();
                dataSend.append('nombre_input', nombre_input);
                dataSend.append('nick', id);
                dataSend.append('cat', cat);

                let opciones = {
                    method: "POST",
                    credentials: "same-origin",
                    body: dataSend,
                };

                fetch(base_url+"deteleimg", opciones)
                    .then(response => response.json())
                    .then(res => {
                        if (res.message == 'ok') {
                           element.next().next().remove();
                        }
                    })
            }

        });


    </script>


     <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });

    </script>


    <script>
        $(document).ready(function() {

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>

</body>