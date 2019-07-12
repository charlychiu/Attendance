@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <div class="card-columns">
                            <form method="POST" action="{{ route('duty.on') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    上班打卡
                                </button>
                            </form>
                        </div>
                            <br/>
                        <div class="card-columns">
                            <form method="POST" action="{{ route('duty.off') }}">
                                @csrf
                                <button type="submit" class="btn btn-warning">
                                    下班打卡
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
