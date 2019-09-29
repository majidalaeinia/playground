@extends('layouts.app')

@section('content')
    <div class="container" xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--            <div class="card">--}}
            {{--                                <div class="card-header">Dashboard</div>--}}

            {{--                                <div class="card-body">--}}
            {{--                                    @if (session('status'))--}}
            {{--                                        <div class="alert alert-success" role="alert">--}}
            {{--                                            {{ session('status') }}--}}
            {{--                                        </div>--}}
            {{--                                    @endif--}}

            {{--                                    You are logged in!--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <div id="component_test">
                            <testcomponent></testcomponent>
                        </div>
                        <div id="component_test1">
                            <testcomponent></testcomponent>
                        </div>

                        <div id="component_test2">
                            <tablle></tablle>
                        </div>


                    </div>

                </div>

            </div>
    </div>
</div>
@endsection

@section('footer')
        <script>
            Vue.component('testcomponent', {
                template: "<div><h1>This is coming from component</h1></div>"
            });

            Vue.component('tablle', {
                template: `<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>`
            });


            let vm = new Vue({
                el: '#component_test'
            });
            let vm1 = new Vue({
                el: '#component_test1'
            });

            let vm2 = new Vue({
                el: '#component_test2'
            });

        </script>
@endsection
