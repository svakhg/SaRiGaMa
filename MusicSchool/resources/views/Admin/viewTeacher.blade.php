@extends('Admin.index')
@section('title')
    View Teacher
@endsection
@section('style')


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <link href="../../../public/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <link href="../../../public/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <script src="../../../public/jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript"></script>
    <script src="../../../public/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript"></script>

    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}



    <script>

        $(document).ready(function () {
            $('select').material_select();
        });

    </script>
@endsection


@section('content')
    @if(count($errors)>0)
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach

                </ul>

            </div>

        </div>
    @endif
    <div class="container " style="padding: 5px;">
        <div class="row">
            <div class="col-lg-12">
                <br><br>
                {{csrf_field()}}
                <div class="card-panel teal lighten-2">
                    <h6>Teacher Details</h6>
                </div>
                <table class="striped">
                    <thead>
                    <tr>
                        <th data-field="name">First Name</th>
                        <th data-field="name">Middle Name</th>
                        <th data-field="name">Last Name</th>
                        <th data-field="name">DOB</th>
                        <th data-field="name">Qualifications</th>

                    </tr>
                    </thead>
                    @foreach ($teacher as $teacher)
                        <tr>
                            <td>{{ $teacher->t_first_name }}</td>
                            <td>{{ $teacher->t_middle_name}}</td>
                            <td>{{ $teacher->t_last_name }}</td>
                            <td>{{ $teacher-> t_dob }}</td>
                            <td>{{ $teacher->qualifications }}</td>


                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection