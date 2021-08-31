<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ruby Finance | Online Boekhouden</title>


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://s3.amazonaws.com/thurgoimages/hire/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="{{ asset('theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" >

    @yield('styles')
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">


    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            <!-- Menu for Mobile and Larger Screen -->
            @include('partials.menu')
            @yield('content')

            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>


    <script src="{{ asset('theme/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('theme/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('theme/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('theme/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <!-- <script src="{{ asset('theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script> -->

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!-- Datatable Button -->
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="{{ asset('theme/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('theme/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('theme/js/demo_customizer.js?version=4.5.0') }}"></script>
    <script src="{{ asset('theme/js/main.js') }}"></script>
    <script src="{{ asset('theme/js/donutChart.js') }}"></script>
    <script src="https://s3.amazonaws.com/thurgoimages/hire/js/bootstrap-datepicker.min.js"></script>
    @include('sweetalert::alert')
    
    <script>
        $(function() {
            let copyButtonTrans = "{{ trans('global.datatables.copy') }}"
            let csvButtonTrans = "{{ trans('global.datatables.csv') }}"
            let excelButtonTrans = "{{ trans('global.datatables.excel') }}"
            let pdfButtonTrans = "{{ trans('global.datatables.pdf') }}"
            let printButtonTrans = "{{ trans('global.datatables.print') }}"
            let colvisButtonTrans = "{{ trans('global.datatables.colvis') }}"
            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };
            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}'],
                    search: '',
                    searchPlaceholder: 'Search',
                },
                columnDefs: [
                // {
                //     orderable: false,
                //     className: 'select-checkbox',
                //     render: function (data, type, full, meta){
                //         return '<input type="checkbox" class="form-control mx-auto d-block">';
                //     },
                //     targets: 0
                // }, 
                {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style:    'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: false,
                pageLength: 5,
                dom: "B<'mobile-buttons d-flex justify-content-between'<'btnsInTable'>>frt<'row pt-3'<'mr-0'>i<'col float-right pr-0 mobilePagination'p>>",
                buttons: [
                // {
                //     extend: '',
                //     className: 'd-none classofSelectOptionButton',
                //     id: 'idofSelectOptionButton'
                // },
                // {
                //     extend: 'excel',
                //     className: 'btn btn-sm btn-secondary mx-2',
                //     text: excelButtonTrans,
                //     exportOptions: {
                //         columns: ':visible'
                //     }
                // },
                // {
                //     extend: 'pdf',
                //     className: 'btn btn-sm btn-secondary mx-2',
                //     text: pdfButtonTrans,
                //     exportOptions: {
                //         columns: ':visible'
                //     }
                // },
                // {
                //     extend: 'print',
                //     className: 'btn btn-sm btn-secondary mx-2',
                //     text: printButtonTrans,
                //     exportOptions: {
                //         columns: ':visible'
                //     }
                // }
                ]
            });
            $.fn.dataTable.ext.classes.sPageButton = '';
            // Make dropdown with buttons

        });


        $(document).ready(function()
        {
            $("#companyLogo").on('change', function(e) {
                e.preventDefault();
                //Get count of selected files

                var countFiles = $(this)[0].files.length;
                var imgPath = $(this)[0].value;
                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                var image_holder = $("#image-holder");
                image_holder.empty();
                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                    if (typeof(FileReader) != "undefined") {
                        //loop for each file selected for uploaded.
                        for (var i = 0; i < countFiles; i++)
                        {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<img />", {
                                    "src": e.target.result,
                                    "class": "thumb-image mx-auto"
                                }).appendTo(image_holder);
                            }
                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[i]);
                        }
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                } else {
                    alert("Pls select only images");
                }
            });
        });
    </script>
    @yield('scripts')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>