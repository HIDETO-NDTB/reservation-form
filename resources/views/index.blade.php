@extends('layouts.app')
@section('content')

<div class="container">
    <div class="top_part">
        <img class="top_img" src="{{ asset('app/img/freedom_ogp.png') }}">
    </div>

  <form action="{{ route('select_date') }}" method="POST">
  @csrf

    <div class="select_part">
        <div class="card">
            <h3 class="card-header">店舗を選択</h3>

            @foreach($shops as $shop)
            <table class="table table-hover mb-0">
                <tr>
                <td class="card-title"><input name="shop" type="radio" value="{{ $shop->id }}">{{ $shop->name }}</td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>
            @endforeach

            {{-- <script>
                $(function() {
                $('[name="shop"]:radio').change( function() {
                  if($('[id=1]').prop('checked')){
                    $('.icon1').fadeIn();

                  } else if ($('[id=2]').prop('checked')){
                    $('.icon2').fadeIn();

                  }
                });
                });
            </script> --}}

        </div>

        <div class="card">
            <h3 class="card-header">メニューを選択</h3>

            @foreach($menus as $menu)
            <table class="table table-hover mb-0">
                <tr>
                    <td class="card-title"><input name="menu" type="radio" value="{{ $menu->id }}">{{ $menu->name }}</td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </table>
            @endforeach

        </div>

    </div>

    <div class="button-part">
        <button type="submit" class="checkdate">日時確認</button>
    </div>

  </form>

</div>

@endsection
