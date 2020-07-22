@extends('layouts.app')

@section('title','送信完了')

@include('layouts.head')

@push('css')
<!--個別css-->
<link rel="stylesheet" href="/css/entry_pc.css" media="all">
<link rel="stylesheet" href="/css/entry_sp.css" media="all">
@endpush

@include('layouts.header')

@section('content')
        <section id="mv">
            <h1>
				<img src="../common/img/img_mv.png" alt="dummy" class="pc">
				<img src="../common/img/sp/img_mv.png" alt="dummy" class="sp">
			</h1>
        </section>
		<section id="contentsBox" class="form complete">
			<div class="inner">
				<h2 class="ttl2">
					<b>ご応募いただき<br class="sp">ありがとうございました！</b>
					<span>賞品はキャンペーン終了後、<br class="sp">2ヶ月以内に発送いたします。<br>賞品の到着まで今しばらくお待ちくださいませ。</span>
				</h2>

				<p class="lead">
					2020年7月31日（金）を過ぎても<br class="sp">賞品が届かない場合は、<br>キャンペーン事務局まで<br class="sp">お問い合わせください。
					<span class="note">離島へのお届けや天候・交通状況等により、<br class="sp">賞品の発送が遅れる場合がございます。</span>
				</p>

				<dl class="contact">
					<dt>本キャンペーンに関するお問い合わせ</dt>
					<dd><span>キャンペーン事務局</span><b><a href="tel:0000000000" class="sp">00-0000-0000</a><span class="tel pc">00-0000-0000</span></b></dd>
					<dd class="time"><b class="pc">受付時間：平日 10：00～17：00（土・日・祝日を除く）</b><b class="sp">受付時間：10時～17時（土・日・祝日を除く）</b>※2020年5月2日（土）〜 2020年5月6日（水）は<br>ゴールデンウィーク休暇の為、<br class="sp">対応いたしかねますので予めご了承ください。</dd>
				</dl>
			</div><!-- /.inner -->
		</section><!-- /#contentsBox -->
@endsection

@include('layouts.footer')
