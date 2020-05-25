@extends('layouts.app')
@section('content')

<div class="container">
    <div class="top_part">
        <img class="top_img" src="{{ asset('app/img/freedom_ogp.png') }}">
    </div>

    <div class="card">
        <h3 class="card-header">日時を選択</h3>

        <ul>
            <li class="button-list">
            <button class="now-reserv">直近の予約</button>
            </li>
            <li class="button-list">
                <button class="pre-reserv">前の週</button>
                </li>
            <li class="button-list">
            <button class="next-reserv">次の週</button>
            </li>
        </ul>


        <table class="table table-bordered mb-0">
            <tr>
                <th class="first"></th>
                <th>5/25(月)</th>
                <th>5/26(火)</th>
                <th>5/27(水)</th>
                <th>5/28(木)</th>
                <th>5/29(金)</th>
                <th>5/30(土)</th>
                <th>5/31(日)</th>
            </tr>
            <tr>
                <th class="first">10:00</th>
                <th>◯</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="first">12:00</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="first">14:00</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="first">16:00</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th class="first">18:00</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

        </table>

        <ul>
            <li class="text-list">
                <p class="text">◯　受付可能</p>
            </li>
            <li class="text-list">
                <p class="text">×　予約完売</p>
            </li>
        </ul>

        <p>入力した文字は、{{$data1['shop']}}</p>
        <p>入力した文字は、{{$data1['menu']}}</p>

    </div>

</div>

</div>

@endsection
