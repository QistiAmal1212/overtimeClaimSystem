<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">

    {{-- .dataTables_wrapper th {
            color: #34b1aa;
            background-color: #383434;
        } --}}
    <style>
        .dataTables_wrapper th {
            color: #ffffff;
            background-color: #484541;
            font-size: 13px;
            font-weight: bold;
        }

        #example {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        #example th,
        #example td {

            border: 1px solid #ddd;
            font-size: 13px;
            line-height: 1.4;
        }

        #example th:not(.sorting):not(.sorting_asc):not(.sorting_desc) {
            background-color: #f2f2f2;
            color: #333333;
        }




        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #aaa;
            border-radius: 3px;
            padding: 5px;
            background-color: transparent;
            padding: 4px 20px 4px 10px;

        }

        .tablestyle table tr td {
            font-size: 17px;
        }



        table.dataTable thead>tr>th.sorting:after,
        table.dataTable thead>tr>th.sorting_asc:after,
        table.dataTable thead>tr>th.sorting_desc:after,
        table.dataTable thead>tr>th.sorting_asc_disabled:after,
        table.dataTable thead>tr>th.sorting_desc_disabled:after,
        table.dataTable thead>tr>td.sorting:after,
        table.dataTable thead>tr>td.sorting_asc:after,
        table.dataTable thead>tr>td.sorting_desc:after,
        table.dataTable thead>tr>td.sorting_asc_disabled:after,
        table.dataTable thead>tr>td.sorting_desc_disabled:after {
            top: 50%;
            content: "▼";
            content: "▼"/"";
        }

        table.dataTable thead>tr>th.sorting:before,
        table.dataTable thead>tr>th.sorting:after,
        table.dataTable thead>tr>th.sorting_asc:before,
        table.dataTable thead>tr>th.sorting_asc:after,
        table.dataTable thead>tr>th.sorting_desc:before,
        table.dataTable thead>tr>th.sorting_desc:after,
        table.dataTable thead>tr>th.sorting_asc_disabled:before,
        table.dataTable thead>tr>th.sorting_asc_disabled:after,
        table.dataTable thead>tr>th.sorting_desc_disabled:before,
        table.dataTable thead>tr>th.sorting_desc_disabled:after,
        table.dataTable thead>tr>td.sorting:before,
        table.dataTable thead>tr>td.sorting:after,
        table.dataTable thead>tr>td.sorting_asc:before,
        table.dataTable thead>tr>td.sorting_asc:after,
        table.dataTable thead>tr>td.sorting_desc:before,
        table.dataTable thead>tr>td.sorting_desc:after,
        table.dataTable thead>tr>td.sorting_asc_disabled:before,
        table.dataTable thead>tr>td.sorting_asc_disabled:after,
        table.dataTable thead>tr>td.sorting_desc_disabled:before,
        table.dataTable thead>tr>td.sorting_desc_disabled:after {
            position: absolute;
            display: block;
            opacity: .125;
            right: 10px;
            line-height: 10px;
            font-size: .8em;

        }



        .newInv {
            /* border-radius: 20px; */
            margin-right: 10px;
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2), 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 2px rgba(0, 0, 0, 0.1); */
            background-color: #3AA856;
            padding: 5px;
            width: 100px;
            height: 100px;
            text-align: center;
        }

        .totalQttn {
            /* border-radius: 20px; */
            margin-right: 10px;
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2), 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 2px rgba(0, 0, 0, 0.1); */
            background-color: #cbdf34;
            padding: 5px;
            width: 80px;
            height: 80px;
            text-align: center;

        }

        .acceptedQttn {

            margin-right: 10px;
            background-color: #2de1ab;
            padding: 5px;
            width: 80px;
            height: 80px;
            text-align: center;

        }

        .notacceptedQttn {
            margin-right: 10px;
            background-color: #f07466;
            padding: 5px;
            width: 80px;
            height: 80px;
            text-align: center;

        }

        .stats {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            font-size: 10px;
            float: left;


        }

        .circles {
            display: none;
        }

        .lable {
            color: whitesmoke;
            font-size: 10px;
            margin-top: -7px;
        }






        .wrapper {
            margin: 50px auto;
            overflow: hidden;
            padding: 20px;
            width: 55%;
        }

        .data-one,
        .data-two,
        .data-three {}

        .circliful {
            position: relative;
        }

        .circle-text,
        .circle-info,
        .circle-text-half,
        .circle-info-half {
            width: 100%;
            position: absolute;
            text-align: center;
            display: inline-block;
        }

        .circle-info {
            color: #999;
        }

        .circliful .fa {
            margin: -10px 3px 0 3px;
            position: relative;
            bottom: 4px;
        }


        .tb {
            width: 90%;
        }

        @media (min-width: 640px) {
            .dataTables_wrapper .dataTables_filter {
                float: right;
                text-align: right;
                margin-bottom: 20px;
            }



            .newInv {
                /* border-radius: 20px; */
                margin-right: 30px;
                /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2), 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 2px rgba(0, 0, 0, 0.1); */
                background-color: #3AA856;
                padding: 10px;
                width: 300px;
                height: 100px;
                text-align: center;
            }

            .totalQttn {
                /* border-radius: 20px; */
                margin-right: 30px;
                /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2), 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 2px rgba(0, 0, 0, 0.1); */
                background-color: #cbdf34;
                padding: 10px;
                width: 300px;
                height: 100px;
                text-align: center;

            }

            .acceptedQttn {

                margin-right: 30px;
                background-color: #2de1ab;
                padding: 10px;
                width: 300px;
                height: 100px;
                text-align: center;

            }

            .notacceptedQttn {
                margin-right: 25px;
                background-color: #f07466;
                padding: 10px;
                width: 300px;
                height: 100px;
                text-align: center;

            }

            .stats {
                margin-top: 10px;



            }

            .lable {
                color: whitesmoke;
                font-size: 20px;
                margin-top: -7px;
            }

            .wrapper {
                margin: 50px auto;
                overflow: hidden;
                padding: 20px;
                width: 55%;
            }

            .data-one,
            .data-two,
            .data-three {}

            .circliful {
                position: relative;
            }

            .circle-text,
            .circle-info,
            .circle-text-half,
            .circle-info-half {
                width: 100%;
                position: absolute;
                text-align: center;
                display: inline-block;
            }

            .circle-info {
                color: #999;
            }

            .circliful .fa {
                margin: -10px 3px 0 3px;
                position: relative;
                bottom: 4px;
            }

            .circles {
                display: block;
            }

            .tb {
                width: 74%;
            }

        }







        h2 {
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #666;
        }

        .form-group select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            width: 200px;
        }

        .trash {
            color: red;
            font-size: 20px;
            margin-right: 5px;
        }

    </style>
</head>
<x-app-layout>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    {{ __("Tuntutan MUHAMMAD QISTI AMALUDDIN BIN MOHD ROZAINI!") }}
    </div>
    </div>
    </div>
    </div> --}}
    <br>
    <br>
    <br>


    <div class="stats">
        <ul class="circles">
            <li class="data-one" data-dimension="200" data-text="88%" data-info="Amazing Stats" data-width="30" data-fontsize="38" data-percent="88" data-fgcolor="#aff199" data-bgcolor="#eee"></li>

            <li class="data-two" data-dimension="200" data-text="92%" data-info="Awesome Data" data-width="30" data-fontsize="38" data-percent="92" data-fgcolor="#45fdaf" data-bgcolor="#eee"></li>

            <li class="data-three" data-dimension="200" data-text="100%" data-info="Wow Numbers!" data-width="30" data-fontsize="38" data-percent="100" data-fgcolor="#32c3e0" data-bgcolor="#eee"></li>
        </ul>

    </div>

    <br>


    <center>



        <div style="" class="table-responsive tablestyle tb">

            <table id="example" class="display nowrap uk-table uk-table-hover uk-table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th> <i class="fas fa-trash trash"></i>[]</th>
                        <th>NAME</th>
                        <th>BULAN</th>
                        <th>JUMLAH TUNTUTAN</th>
                        <th>BAKI TUNTUTAN</th>
                        <th>STATUS PEMBAYARAN</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>



                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>


                    <tr>
                        <td>[]</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <center><i class="fas fa-edit"></i></center>
                        </td>
                    </tr>




                </tbody>
            </table>
        </div>
        <br>
        <center>
            <div style="color:green;font-weight:bold; font-family: 'Righteous', cursive;font-size:17px;">JUMLAH KESELURUHAN TUNTUTAN YANG BELUM DIBAYAR: RM<span>2000</span></div>
            <br><br><br>
        </center>

    </center>

    <br>
    <br><br>





    @include('layouts.sidebar')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true
            , });
        });










        $(document).ready(function() {
            $('.data-one').circliful();
            $('.data-two').circliful();
            $('.data-three').circliful();
        });

        (function($) {

            $.fn.circliful = function(options, callback) {

                var settings = $.extend({
                    // These are the defaults.
                    startdegree: 0
                    , fgcolor: "#556b2f"
                    , bgcolor: "#eee"
                    , fill: false
                    , width: 15
                    , dimension: 200
                    , fontsize: 15
                    , percent: 50
                    , animationstep: 1.0
                    , iconsize: '20px'
                    , iconcolor: '#999'
                    , border: 'default'
                    , complete: null
                    , bordersize: 10
                }, options);

                return this.each(function() {

                    var customSettings = ["fgcolor", "bgcolor", "fill", "width", "dimension", "fontsize", "animationstep", "endPercent", "icon", "iconcolor", "iconsize", "border", "startdegree", "bordersize"];

                    var customSettingsObj = {};
                    var icon = '';
                    var percent;
                    var endPercent = 0;
                    var obj = $(this);
                    var fill = false;
                    var text, info;

                    obj.addClass('circliful');

                    checkDataAttributes(obj);

                    if (obj.data('text') != undefined) {
                        text = obj.data('text');

                        if (obj.data('icon') != undefined) {
                            icon = $('<i></i>')
                                .addClass('fa ' + $(this).data('icon'))
                                .css({
                                    'color': customSettingsObj.iconcolor
                                    , 'font-size': customSettingsObj.iconsize
                                });
                        }

                        if (obj.data('type') != undefined) {
                            type = $(this).data('type');

                            if (type == 'half') {
                                addCircleText(obj, 'circle-text-half', (customSettingsObj.dimension / 1.45));
                            } else {
                                addCircleText(obj, 'circle-text', customSettingsObj.dimension);
                            }
                        } else {
                            addCircleText(obj, 'circle-text', customSettingsObj.dimension);
                        }
                    }

                    if ($(this).data("total") != undefined && $(this).data("part") != undefined) {
                        var total = $(this).data("total") / 100;

                        percent = (($(this).data("part") / total) / 100).toFixed(3);
                        endPercent = ($(this).data("part") / total).toFixed(3);
                    } else {
                        if ($(this).data("percent") != undefined) {
                            percent = $(this).data("percent") / 100;
                            endPercent = $(this).data("percent");
                        } else {
                            percent = settings.percent / 100;
                        }
                    }

                    if ($(this).data('info') != undefined) {
                        info = $(this).data('info');

                        if ($(this).data('type') != undefined) {
                            type = $(this).data('type');

                            if (type == 'half') {
                                addInfoText(obj, 0.9);
                            } else {
                                addInfoText(obj, 1.25);
                            }
                        } else {
                            addInfoText(obj, 1.25);
                        }
                    }

                    $(this).width(customSettingsObj.dimension + 'px');

                    var size = customSettingsObj.dimension
                        , canvas = $('<canvas></canvas>').attr({
                            width: size
                            , height: size
                        }).appendTo($(this)).get(0);

                    var context = canvas.getContext('2d');

                    var dpr = window.devicePixelRatio;
                    if (dpr) {
                        var $canvas = $(canvas);
                        $canvas.css('width', size);
                        $canvas.css('height', size);
                        $canvas.attr('width', size * dpr);
                        $canvas.attr('height', size * dpr);

                        context.scale(dpr, dpr);
                    }

                    var container = $(canvas).parent();
                    var x = size / 2;
                    var y = size / 2;
                    var degrees = customSettingsObj.percent * 360.0;
                    var radians = degrees * (Math.PI / 180);
                    var radius = size / 2.5;
                    var startAngle = 2.3 * Math.PI;
                    var endAngle = 0;
                    var counterClockwise = false;
                    var curPerc = customSettingsObj.animationstep === 0.0 ? endPercent : 0.0;
                    var curStep = Math.max(customSettingsObj.animationstep, 0.0);
                    var circ = Math.PI * 2;
                    var quart = Math.PI / 2;
                    var type = '';
                    var fireCallback = true;
                    var additionalAngelPI = (customSettingsObj.startdegree / 180) * Math.PI;

                    if ($(this).data('type') != undefined) {
                        type = $(this).data('type');

                        if (type == 'half') {
                            startAngle = 2.0 * Math.PI;
                            endAngle = 3.13;
                            circ = Math.PI;
                            quart = Math.PI / 0.996;
                        }
                    }

                    if ($(this).data('type') != undefined) {
                        type = $(this).data('type');

                        if (type == 'angle') {
                            startAngle = 2.25 * Math.PI;
                            endAngle = 2.4;
                            circ = 1.53 + Math.PI;
                            quart = 0.73 + Math.PI / 0.996;
                        }
                    }

                    /**
                     * adds text to circle
                     *
                     * @param obj
                     * @param cssClass
                     * @param lineHeight
                     */
                    function addCircleText(obj, cssClass, lineHeight) {
                        $("<span></span>")
                            .appendTo(obj)
                            .addClass(cssClass)
                            .html(text)
                            .prepend(icon)
                            .css({
                                'line-height': lineHeight + 'px'
                                , 'font-size': customSettingsObj.fontsize + 'px'
                            });
                    }

                    /**
                     * adds info text to circle
                     *
                     * @param obj
                     * @param factor
                     */
                    function addInfoText(obj, factor) {
                        $('<span></span>')
                            .appendTo(obj)
                            .addClass('circle-info-half')
                            .css(
                                'line-height', (customSettingsObj.dimension * factor) + 'px'
                            )
                            .text(info);
                    }

                    /**
                     * checks which data attributes are defined
                     * @param obj
                     */
                    function checkDataAttributes(obj) {
                        $.each(customSettings, function(index, attribute) {
                            if (obj.data(attribute) != undefined) {
                                customSettingsObj[attribute] = obj.data(attribute);
                            } else {
                                customSettingsObj[attribute] = $(settings).attr(attribute);
                            }

                            if (attribute == 'fill' && obj.data('fill') != undefined) {
                                fill = true;
                            }
                        });
                    }

                    /**
                     * animate foreground circle
                     * @param current
                     */
                    function animate(current) {

                        context.clearRect(0, 0, canvas.width, canvas.height);

                        context.beginPath();
                        context.arc(x, y, radius, endAngle, startAngle, false);

                        context.lineWidth = customSettingsObj.width + 1;

                        context.strokeStyle = customSettingsObj.bgcolor;
                        context.stroke();

                        if (fill) {
                            context.fillStyle = customSettingsObj.fill;
                            context.fill();
                        }

                        context.beginPath();
                        context.arc(x, y, radius, -(quart) + additionalAngelPI, ((circ) * current) - quart + additionalAngelPI, false);

                        if (customSettingsObj.border == 'outline') {
                            context.lineWidth = customSettingsObj.width + 13;
                        } else if (customSettingsObj.border == 'inline') {
                            context.lineWidth = customSettingsObj.width - 13;
                        }

                        context.strokeStyle = customSettingsObj.fgcolor;
                        context.stroke();

                        if (curPerc < endPercent) {
                            curPerc += curStep;
                            requestAnimationFrame(function() {
                                animate(Math.min(curPerc, endPercent) / 100);
                            }, obj);
                        }

                        if (curPerc == endPercent && fireCallback && typeof(options) != "undefined") {
                            if ($.isFunction(options.complete)) {
                                options.complete();

                                fireCallback = false;
                            }
                        }
                    }

                    animate(curPerc / 100);

                });
            };
        }(jQuery));

    </script>




</x-app-layout>
