<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    {{-- .dataTables_wrapper th {
            color: #34b1aa;
            background-color: #383434;
        } --}}
    <style>
        body {
            background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
        }

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
            font-size: 20px;
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


        }

        .lable {
            color: whitesmoke;
            font-size: 10px;
            margin-top: -7px;
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
                display: flex;
                justify-content: center;


            }

            .lable {
                color: whitesmoke;
                font-size: 20px;
                margin-top: -7px;
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

        #chart {

            width: 85%;
        }

        #chart2 {

            width: 85%;
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
    <br> <br>

    <div class="stats">
        <div class="newInv" style="cursor: pointer;" onclick="confirmCreateTask()" id="newClaim">
            <center><img src="{{ asset('image/new.png') }}" style="width: 40px; height: 40px;margin-top:7px;"></center>
            <div class="label" style="color:whitesmoke; font-size: 14px; margin-top: 5px;">New Claim</div>
        </div>

        <div class="totalQttn">
            <h2 style="color:whitesmoke;margin-top:8px;" id="rowCount2">1000</h2>
            <div class="lable">Pending</div>
        </div>
        <div class="acceptedQttn">
            <h2 style="color:whitesmoke;margin-top:8px;" id="rowCount5">1000</h2>
            <div class="lable">Approve</div>
        </div>
        <div class="notacceptedQttn">
            <h2 style="color:whitesmoke;margin-top:8px;" id="rowCount3">1000</h2>
            <div class="lable">notApprove</div>
        </div>
    </div>
    <br>


    <center>

        <h2>Select Year and Month</h2>
        <div style="display:flex;justify-content:center;">
            <div class="form-group">
                <label for="year">Select a year:</label>
                <select id="year">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <!-- Add more years as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="month">Select a month:</label>
                <select id="month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <!-- Add more months as needed -->
                </select>
            </div>
        </div>

        <form id="delete-form" method="post" action="{{ route('deleteClaim') }}">
            @csrf
            @method('DELETE')

            <div style="width:95%;" class="table-responsive tablestyle">

                <table id="example" class="display nowrap uk-table uk-table-hover uk-table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th> <input type="checkbox" id="allcheck" onclick="toggleAllCheckboxes()" />&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash trash" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"></i></th>
                            <th>STATUS</th>
                            <th>TARIKH</th>
                            <th>HARI</th>
                            <th>DARI</th>
                            <th>HINGGA</th>
                            <th>Jenis Waktu Bekerja</th>
                            <th>Jenis Hari</th>
                            <th>Jumlah Jam Bekerja</th>
                            <th>CATATAN</th>
                            <th>TUNTUTAN(RM)</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($claimAdmin as $Admin)


                        <tr>
                            <td><input type="checkbox" class="checkbox quotation-checkbox" name="ids[]" onclick="event.stopPropagation();" value="{{ $Admin->id_tuntutan }}" /></td>
                            <td>
                                @if ($Admin->status == 'not accepted')
                                <label class="badge badge-danger">{{ $Admin->status }}</label>
                                @elseif($Admin->status == 'accepted')
                                <label class="badge badge-success">{{ $Admin->status }}</label>
                                @else
                                <label class="badge badge-warning">{{ $Admin->status }}</label>
                                @endif
                            </td>
                            <td>{{ $Admin->tarikh }}</td>
                            <td>{{ $Admin->hari }}</td>
                            <td>{{ $Admin->masa_mula_bekerja }}</td>
                            <td>{{ $Admin->masa_akhir_bekerja }}</td>
                            <td>{{ $Admin->jenis_hari }}</td>
                            <td>{{ $Admin->jenis_waktu_bekerja }}</td>
                            <td>{{ $Admin->jumlah_jam_bekerja }}</td>
                            <td>{{ $Admin->catatan }}</td>
                            <td>1000</td>
                            <td>
                                <center><i class="fas fa-edit" onclick="editClaim('{{ $Admin->id_tuntutan }}', '{{ $Admin->status }}', '{{ $Admin->tarikh }}', '{{ $Admin->hari }}', '{{ $Admin->masa_mula_bekerja }}', '{{ $Admin->jenis_hari }}', '{{ $Admin->jenis_waktu_bekerja }}', '{{ $Admin->jumlah_jam_bekerja }}', '{{ $Admin->catatan }}', '{{ $Admin->masa_akhir_bekerja }}', '{{ $Admin->bulan_tuntutan }}', '{{ $Admin->id_pekerja }}')"></i></center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
        <br>
        <div style="color:green;font-weight:bold; font-family: 'Righteous', cursive;font-size:17px;">JUMLAH KESELURUHAN TUNTUTAN: RM<span>2000</span></div>

        <br><br>
        <hr>
        <div id="chart"></div>
        <br>
        <hr> <br>
        <div id="chart2"></div>

    </center>



    <script>
        // JavaScript code for bar chart configuration
        var optionsBar = {
            series: [{
                name: 'Net Profit'
                , data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue'
                , data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }]
            , chart: {
                type: 'bar'
                , height: 350
            }
            , plotOptions: {
                bar: {
                    horizontal: false
                    , columnWidth: '55%'
                    , endingShape: 'rounded'
                }
            , }
            , dataLabels: {
                enabled: false
            }
            , title: {
                text: 'Approve vs not approve'
                , align: 'center'
            }
            , stroke: {
                show: true
                , width: 2
                , colors: ['transparent']
            }
            , xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct']
            }
            , yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            }
            , fill: {
                opacity: 1
            }
            , tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands";
                    }
                }
            }
        };

        var barChart = new ApexCharts(document.querySelector("#chart"), optionsBar);
        barChart.render();

        // JavaScript code for line chart configuration
        var optionsLine = {
            series: [{
                name: "STOCK ABC"
                , data: [30, 40, 35, 50, 49, 60, 70, 91, 125] // Replace with your actual data
            }]
            , chart: {
                type: 'area'
                , height: 350
                , zoom: {
                    enabled: false
                }
            }
            , dataLabels: {
                enabled: false
            }
            , stroke: {
                curve: 'straight'
            }
            , title: {
                text: 'Jumlah tuntutan bulanan'
                , align: 'center'
            }
            , subtitle: {
                text: 'Price Movements'
                , align: 'left'
            }
            , xaxis: {
                type: 'datetime'
                , categories: ['2023-01-01', '2023-01-02', '2023-01-03', '2023-01-04', '2023-01-05', '2023-01-06', '2023-01-07', '2023-01-08', '2023-01-09'] // Replace with your actual dates
            }
            , yaxis: {
                opposite: true
            }
            , legend: {
                horizontalAlign: 'left'
            }
        };

        var lineChart = new ApexCharts(document.querySelector("#chart2"), optionsLine);
        lineChart.render();

    </script>


    <br>
    <br><br>





    @include('layouts.sidebar')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true
            , });
        });









        function confirmCreateTask() {
            Swal.fire({
                title: 'New Claim'
                , html: `
<style>
    .form-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
    }

    .form-container label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input,
    .form-container select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .form-container input[type="date"]::-webkit-inner-spin-button,
    .form-container input[type="date"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .form-container select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/></svg>");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 18px;
        padding-right: 30px;
    }

    .form-container input:focus,
    .form-container select:focus {
        outline: none;
        border-color: #4CAF50;
    }

    .form-container button {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<form action="insertClaim" method="post">
@csrf
<div class="form-container">
    <div>
        <label for="tarikh">Tarikh:</label>
        <input type="date" id="tarikh" name="Tarikh" class="Tarikh"  placeholder="Tarikh m-d-y" required>
    </div>
    <div>
        <label for="day">Day:</label>
        <input type="text" id="day" name="Day"  placeholder="Day" readonly required>
    </div>
    <div>
        <label for="bulan">Month:</label>
        <input type="text" id="bulan" name="Month" placeholder="Month" readonly required>
    </div>
    <div>
        <label for="timeStart">Start Time:</label>
        <input type="time" id="timeStart" name="timeStart" placeholder="Start Time" required>
    </div>
    <div>
        <label for="timeEnd">End Time:</label>
        <input type="time" id="timeEnd"  name="timeEnd" placeholder="End Time" required>
    </div>
    <div>
        <label for="dropdown1">Jenis hari:</label>
        <select id="dropdown1" name="dropdown1"  required>
         <option value="" disabled selected>---</option>
            <option value="HARI BEKERJA BIASA">HARI BEKERJA BIASA</option>
            <option value="HARI REHAT BIASA">HARI REHAT BIASA</option>
            <option value="HARI KELEPASAN AM">HARI KELEPASAN AM</option>
        </select>
    </div>
<div>
    <label for="dropdown2">Jenis Waktu:</label>
    <select id="dropdown2" name="dropdown2" required>
        <option value="" disabled selected>---</option>
        <option value="SIANG">SIANG</option>
        <option value="MALAM">MALAM</option>
    </select>
</div>

    <div>
        <label for="hour">Hour:</label>
        <input type="text" id="hour" name="Hour" placeholder="Hour" readonly required>
    </div>
 
  <div>
        <label for="bulan_tuntutan">bulan_tuntutan:</label>
        <input type="text" id="bulan_tuntutan" name="bulan_tuntutan" placeholder="bulan_tuntutan" readonly required>
    </div>
 
  <div>
        <label for="catatan">catatan:</label>
      <textarea id="catatan" name="catatan" required></textarea>
    </div>
 
</div>
    <input style="display:none;" type="text" class="form-control" id="id_pekerja" name="id_pekerja" placeholder="id_pekerja" value="{{ Auth::user()->id }}" readonly>

   <center> <div class="swal2-actions" style="width:220px;">
          <button type="submit" class="swal2-confirm">Submit</button>
          <button type="button" class="swal2-cancel">Cancel</button>
        </div></center>
   </form>



        `



                , showCancelButton: true
                , confirmButtonText: 'Submit'
                , cancelButtonText: 'Cancel'
                , preConfirm: () => {
                    const tarikh = document.getElementById('tarikh').value;
                    const selectedDate = new Date(tarikh);
                    const month = selectedDate.toLocaleString('en-US', {
                        month: 'long'
                    });
                    const day = selectedDate.toLocaleString('en-US', {
                        weekday: 'long'
                    });
                    const timeStart = document.getElementById('timeStart').value;
                    const timeEnd = document.getElementById('timeEnd').value;
                    const dropdown1 = document.getElementById('dropdown1').value;
                    const dropdown2 = document.getElementById('dropdown2').value;

                    // Calculate the hour difference between start time and end time
                    const startTime = new Date(`2000-01-01 ${timeStart}`);
                    const endTime = new Date(`2000-01-01 ${timeEnd}`);
                    const hourDifference = (endTime - startTime) / 1000 / 60 / 60;

                    const hourInput = document.getElementById('hour');
                    hourInput.value = hourDifference;


                    console.log(month, tarikh, day, timeStart, timeEnd, dropdown1, dropdown2, hourDifference);
                }
            });

            // Add event listener to the cancel button
            const cancelButton = document.querySelector('.swal2-cancel');
            cancelButton.addEventListener('click', () => {
                Swal.close(); // Manually close the popup
            });

            // Add event listener to the tarikh field
            const tarikhField = document.getElementById('tarikh');
            const monthField = document.getElementById('bulan');
            const dayField = document.getElementById('day');

            tarikhField.addEventListener('input', updateMonthAndDayFields);

            // Add event listeners to the timeStart and timeEnd fields
            const timeStartField = document.getElementById('timeStart');
            const timeEndField = document.getElementById('timeEnd');

            timeStartField.addEventListener('input', calculateHourDifference);
            timeEndField.addEventListener('input', calculateHourDifference);




            function updateMonthAndDayFields() {
                const tarikhValue = tarikhField.value;
                const selectedDate = new Date(tarikhValue);

                // Update the month field based on the selected tarikh
                const month = selectedDate.toLocaleString('en-US', {
                    month: 'long'
                });
                monthField.value = month;

                // Update the day field based on the selected tarikh
                const day = selectedDate.toLocaleString('en-US', {
                    weekday: 'long'
                });
                dayField.value = day;



                const monthNames = [
                    "January", "February", "March", "April", "May", "June", "July"
                    , "August", "September", "October", "November", "December"
                ];

                const tarikh = document.getElementById('tarikh').value;
                const selectedDate2 = new Date(tarikh);

                const monthIndex = selectedDate2.getMonth();
                const monthName = monthNames[monthIndex];

                // Set the value of bulan_tuntutan field to the month name
                const bulanTuntutanInput = document.getElementById('bulan_tuntutan');
                bulanTuntutanInput.value = monthName;

            }

            function calculateHourDifference() {
                const timeStart = timeStartField.value;
                const timeEnd = timeEndField.value;

                // Parse the start time and end time into hours and minutes
                const [startHour, startMinute] = timeStart.split(':').map(Number);
                const [endHour, endMinute] = timeEnd.split(':').map(Number);

                // Calculate the minute difference between start time and end time
                let minuteDifference = (endHour * 60 + endMinute) - (startHour * 60 + startMinute);

                // Handle cases where end time is on the next day
                if (endHour < startHour || (endHour === startHour)) {
                    minuteDifference += 24 * 60;
                }

                // Calculate the hour and minute components
                const hourDifference = Math.floor(minuteDifference / 60);
                const remainingMinutes = minuteDifference % 60;

                // Construct the display value
                let displayValue;
                if (remainingMinutes === 0) {
                    displayValue = hourDifference.toString();
                } else {
                    displayValue = `${hourDifference}.${(remainingMinutes / 60).toFixed(1).split('.')[1]}`;
                }

                const hourInput = document.getElementById('hour');
                hourInput.value = displayValue;


            }



        }
























        function editClaim(id_tuntutan, status, tarikh, hari, masa_mula_bekerja_, jenis_hari_, jenis_waktu_bekerja_, jumlah_jam_bekerja_, catatan_, masa_akhir_bekerja_, bulan_tuntutan_, id_pekerja) {
            Swal.fire({
                title: 'New Claim'
                , html: `
<style>
    .form-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
    }

    .form-container label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input,
    .form-container select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .form-container input[type="date"]::-webkit-inner-spin-button,
    .form-container input[type="date"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .form-container select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/></svg>");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 18px;
        padding-right: 30px;
    }

    .form-container input:focus,
    .form-container select:focus {
        outline: none;
        border-color: #4CAF50;
    }

    .form-container button {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<form action="changeClaim" method="post"  enctype="multipart/form-data">
   @csrf
            @method('PUT')
<div class="form-container">
    <div>
        <label for="tarikh">Tarikh:</label>
        <input type="date" id="tarikh" name="Tarikh" class="Tarikh"  placeholder="Tarikh m-d-y" required>
    </div>
    <div>
        <label for="day">Day:</label>
        <input type="text" id="day" name="Day"  placeholder="" readonly required>
    </div>
    <div>
        <label for="bulan">Month:</label>
        <input type="text" id="bulan" name="Month" placeholder="Month" readonly required>
    </div>
    <div>
        <label for="timeStart">Start Time:</label>
        <input type="time" id="timeStart" name="timeStart" placeholder="Start Time" required>
    </div>
    <div>
        <label for="timeEnd">End Time:</label>
        <input type="time" id="timeEnd"  name="timeEnd" placeholder="End Time" required>
    </div>
    <div>
        <label for="dropdown1">Jenis hari:</label>
        <select id="dropdown1" name="dropdown1"  required>
         <option value="" disabled selected>---</option>
            <option value="HARI BEKERJA BIASA">HARI BEKERJA BIASA</option>
            <option value="HARI REHAT BIASA">HARI REHAT BIASA</option>
            <option value="HARI KELEPASAN AM">HARI KELEPASAN AM</option>
        </select>
    </div>
<div>
    <label for="dropdown2">Jenis Waktu:</label>
    <select id="dropdown2" name="dropdown2" required>
        <option value="" disabled selected>---</option>
        <option value="SIANG">SIANG</option>
        <option value="MALAM">MALAM</option>
    </select>
</div>

    <div>
        <label for="hour">Hour:</label>
        <input type="text" id="hour" name="Hour" placeholder="Hour" readonly required>
    </div>
 
  <div>
        <label for="bulan_tuntutan">bulan_tuntutan:</label>
        <input type="text" id="bulan_tuntutan" name="bulan_tuntutan" placeholder="bulan_tuntutan" readonly required>
    </div>
 
  <div>
        <label for="catatan">catatan:</label>
      <textarea id="catatan" name="catatan" required></textarea>
    </div>
 
</div>
    <input style="display:none;" type="text" class="form-control" id="id_pekerja" name="id_pekerja" placeholder="id_pekerja" value="" readonly>
        <input style="display:none;" type="text" class="form-control" id="id_tuntutan" name="id_tuntutan" placeholder="id_pekerja" value="" readonly>

   <center> <div class="swal2-actions" style="width:220px;">
          <button type="submit" class="swal2-confirm">Submit</button>
          <button type="button" class="swal2-cancel">Cancel</button>
        </div></center>
   </form>


        `
                , didRender: () => {
                        // Access the form fields and update their values
                        const tarikhInput = document.getElementById('tarikh');
                        const dayInput = document.getElementById('day');

                        const masa_akhir_bekerja = document.getElementById('timeEnd');
                        const catatan = document.getElementById('catatan');
                        const jumlah_jam_bekerja = document.getElementById('hour');
                        const jenis_waktu_bekerja = document.getElementById('dropdown2');
                        const jenis_hari = document.getElementById('dropdown1');
                        const masa_mula_bekerja = document.getElementById('timeStart');
                        const bulantuntutan = document.getElementById('bulan_tuntutan');
                        const id_tuntutan2 = document.getElementById('id_tuntutan');
                        const id_pekerja2 = document.getElementById('id_pekerja');
                        // Update the values with JavaScript variables
                        tarikhInput.value = tarikh;
                        dayInput.value = hari;

                        masa_akhir_bekerja.value = masa_akhir_bekerja_;
                        catatan.value = catatan_;
                        jumlah_jam_bekerja.value = jumlah_jam_bekerja_;
                        jenis_waktu_bekerja.value = jenis_waktu_bekerja_;
                        jenis_hari.value = jenis_hari_;
                        masa_mula_bekerja.value = masa_mula_bekerja_;
                        bulantuntutan.value = bulan_tuntutan_;
                        id_tuntutan2.value = id_tuntutan;
                        id_pekerja2.value = id_pekerja;

                    }

                , showCancelButton: true
                , confirmButtonText: 'Submit'
                , cancelButtonText: 'Cancel'
                , preConfirm: () => {
                    const tarikh = document.getElementById('tarikh').value;
                    const selectedDate = new Date(tarikh);
                    const month = selectedDate.toLocaleString('en-US', {
                        month: 'long'
                    });
                    const day = selectedDate.toLocaleString('en-US', {
                        weekday: 'long'
                    });
                    const timeStart = document.getElementById('timeStart').value;
                    const timeEnd = document.getElementById('timeEnd').value;
                    const dropdown1 = document.getElementById('dropdown1').value;
                    const dropdown2 = document.getElementById('dropdown2').value;

                    // Calculate the hour difference between start time and end time
                    const startTime = new Date(`2000-01-01 ${timeStart}`);
                    const endTime = new Date(`2000-01-01 ${timeEnd}`);
                    const hourDifference = (endTime - startTime) / 1000 / 60 / 60;

                    const hourInput = document.getElementById('hour');
                    hourInput.value = hourDifference;


                    console.log(month, tarikh, day, timeStart, timeEnd, dropdown1, dropdown2, hourDifference);
                }
            });

            // Add event listener to the cancel button
            const cancelButton = document.querySelector('.swal2-cancel');
            cancelButton.addEventListener('click', () => {
                Swal.close(); // Manually close the popup
            });

            // Add event listener to the tarikh field
            const tarikhField = document.getElementById('tarikh');
            const monthField = document.getElementById('bulan');
            const dayField = document.getElementById('day');

            tarikhField.addEventListener('input', updateMonthAndDayFields);

            // Add event listeners to the timeStart and timeEnd fields
            const timeStartField = document.getElementById('timeStart');
            const timeEndField = document.getElementById('timeEnd');

            timeStartField.addEventListener('input', calculateHourDifference);
            timeEndField.addEventListener('input', calculateHourDifference);




            function updateMonthAndDayFields() {
                const tarikhValue = tarikhField.value;
                const selectedDate = new Date(tarikhValue);

                // Update the month field based on the selected tarikh
                const month = selectedDate.toLocaleString('en-US', {
                    month: 'long'
                });
                monthField.value = month;

                // Update the day field based on the selected tarikh
                const day = selectedDate.toLocaleString('en-US', {
                    weekday: 'long'
                });
                dayField.value = day;



                const monthNames = [
                    "January", "February", "March", "April", "May", "June", "July"
                    , "August", "September", "October", "November", "December"
                ];

                const tarikh = document.getElementById('tarikh').value;
                const selectedDate2 = new Date(tarikh);

                const monthIndex = selectedDate2.getMonth();
                const monthName = monthNames[monthIndex];

                // Set the value of bulan_tuntutan field to the month name
                const bulanTuntutanInput = document.getElementById('bulan_tuntutan');
                bulanTuntutanInput.value = monthName;

            }

            function calculateHourDifference() {
                const timeStart = timeStartField.value;
                const timeEnd = timeEndField.value;

                // Parse the start time and end time into hours and minutes
                const [startHour, startMinute] = timeStart.split(':').map(Number);
                const [endHour, endMinute] = timeEnd.split(':').map(Number);

                // Calculate the minute difference between start time and end time
                let minuteDifference = (endHour * 60 + endMinute) - (startHour * 60 + startMinute);

                // Handle cases where end time is on the next day
                if (endHour < startHour || (endHour === startHour)) {
                    minuteDifference += 24 * 60;
                }

                // Calculate the hour and minute components
                const hourDifference = Math.floor(minuteDifference / 60);
                const remainingMinutes = minuteDifference % 60;

                // Construct the display value
                let displayValue;
                if (remainingMinutes === 0) {
                    displayValue = hourDifference.toString();
                } else {
                    displayValue = `${hourDifference}.${(remainingMinutes / 60).toFixed(1).split('.')[1]}`;
                }

                const hourInput = document.getElementById('hour');
                hourInput.value = displayValue;


            }



        }

    </script>



    {{-- <script>
        function editClaim(id_tuntutan, status) {
            // Perform actions with the id_tuntutan value
            console.log(id_tuntutan, status);
            // You can use this value to make AJAX requests, update UI, etc.
        }

    </script>


    <script type="text/javascript">
        function toggleAllCheckboxes() {
            var allCheck = document.getElementById("allcheck");
            var checkboxes = document.getElementsByName("ids[]");

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = allCheck.checked;
            }
        }

    </script> --}}
</x-app-layout>
