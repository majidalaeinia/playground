@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Laravel 5.7 Ajax Request example</h1>

        <form>
            {{--Name--}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
            </div>

            {{--Password--}}
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>

            {{--Email--}}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('لطفاً در تکمیل فیلد ایمیل دقت نمایید.')">
            </div>

            {{--Button--}}
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>

    </div>

@endsection


@section('footer')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function () {
            // e.preventDefault();
            let name = $("input[name=name]").val();
            let password = $("input[name=password]").val();
            let email = $("input[name=email]").val();
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.post') }}",
                data: {name: name, password: password, email: email},
                success: function (data) {
                    alert(data.success);
                },
                error: function (data) {
                    alert(data.error);
                }
            });
        });
    </script>

@endsection