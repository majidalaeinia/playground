@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--                <div class="card-header">Dashboard</div>--}}

                {{--                <div class="card-body">--}}
                {{--                    @if (session('status'))--}}
                {{--                        <div class="alert alert-success" role="alert">--}}
                {{--                            {{ session('status') }}--}}
                {{--                        </div>--}}
                {{--                    @endif--}}

                {{--                    You are logged in!--}}
                {{--                </div>--}}
                {{--            </div>--}}

                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <div id="vue_det">
                            <p>Firstname: @{{firstname}}</p>
                            <p>Lastname: @{{lastname}}</p>
                            <p>Address: <span v-html="address"></span></p>
                            <p>@{{myDetails()}}</p>
                            <p>@{{testFun()}}</p>
                        </div>

                    </div>

                </div>

            </div>
    </div>
</div>
@endsection

    @section('footer')
        <script>
            new Vue({
                el: '#vue_det',
                data: {
                    firstname: "Ria",
                    lastname: "Singh",
                    address: "<b>Mumbai</b>",
                    imgsrc: "./"
                },
                methods: {
                    myDetails: function () {
                        return "I am " + this.firstname + " " + this.lastname + " and live in " + this.address;
                    },
                    testFun: function () {
                        return "This is the test string.";
                    }
                }
            })
        </script>
@endsection