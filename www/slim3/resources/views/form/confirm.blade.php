@extends('layouts.app')

@section('title','送付先確認')

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
        <section id="contentsBox" class="form confirm">
            <div class="inner">
			<form method="post" class="clr" action="./">
					<input type="hidden" name="action" value="complete" />
					<h2 class="ttl2">送付先入力フォーム</h2>
					<p class="lead">
						以下内容で間違いないかご確認いただき、<br class="sp">送信ボタンを押してください。
					</p>

					<div class="formBox">
						<table>
							<tr class="error">
								<th><b>お名前</b></th>
								<td>{{ $name_sei }} {{ $name_mei }}</td>
							</tr>
							<tr>
								<th><b>フリガナ</b></th>
								<td>ジーピー タロウ</td>
							</tr>
							<tr>
								<th><b>住所</b></th>
								<td>
									〒530-0004<br>
									大阪府大阪市北区堂島浜2丁目2-28<br>
									堂島アクシスビル3F
								</td>
							</tr>
							<tr>
								<th><b>メールアドレス</b></th>
								<td>
									test@gpol.co.jp
								</td>
							</tr>
							<tr>
								<th><b>電話番号</b></th>
								<td>
									06-6343-9363
								</td>
							</tr>
						</table>
						<div class="formQuestionnaire">
							<dl class="formQuestionnaireBox">
								<dt><b>あなたは、このキャンペーンをどこでお知りになりましたか</b></dt>
								<dd>・店頭装飾を見つけて</dd>
							</dl>
							<dl class="formQuestionnaireBox">
								<dt><b>この商品を購入した理由をお教えください（当てはまるものを全てお選びください）</b></dt>
								<dd>・特売していたから</dd>
							</dl>
							<dl class="formQuestionnaireBox">
								<dt><b>ご意見・ご感想がございましたら、ご自由にご記入ください。</b></dt>
								<dd>楽しみにしています</dd>
							</dl>
						</div>
					</div>

					<div class="btnGroup clr">
						<p class="btn confirm"><button type="submit" name="complete"><span>送信する</span></button></p>
						<p class="btn back"><button type="submit" name="backbutton" value="修正する"><span>修正する</span></button></p>
					</div>
				</form>
			</div>
			<!-- /.inner -->
        </section>
@endsection

@include('layouts.footer')
