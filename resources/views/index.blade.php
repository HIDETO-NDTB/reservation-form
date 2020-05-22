@extends('layouts.app')
@section('content')

<div class="container">
    <div class="top_part">
        <img class="top_img" src="{{ asset('app/img/freedom_ogp.png') }}">
    </div>

    <div class="select_part">
        <div class="card">
            <h3 class="card-header">店舗を選択</h3>

            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/check-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマー１号店</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>

            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマー2号店</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマー3号店</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>

            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマー4号店</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>

        </div>

        <div class="card">
            <h3 class="card-header">メニューを選択</h3>

            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/check-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマによるWordPress</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>

            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマーによるLaravel</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマーによるアンドロイドアプリ</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>

            </table>
            <table class="table table-hover mb-0">
                <tr>
                    <td class="icon"><img class="icon" src="{{ asset('app/img/star-icon.png') }}"></td>
                    <td><h5 class="card-title">おっさんプログラマーによる中国語翻訳</h5></td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>

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
        </div>
    </div>



</div>

@endsection
