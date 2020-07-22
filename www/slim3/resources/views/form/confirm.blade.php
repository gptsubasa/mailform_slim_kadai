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
{!! Form::open(['route'=>'form.complete', 'class'=>'clr']) !!}
                    <h2 class="ttl2">送付先入力フォーム</h2>
					<p class="lead">
						以下内容で間違いないかご確認いただき、<br class="sp">送信ボタンを押してください。
					</p>

					<div class="formBox">
						<table>
							<tr class="error">
								<th><b>お名前</b></th>
								<td>{{ $inputs->name_sei }} {{ $inputs->name_mei }}</td>
							</tr>
							<tr>
								<th><b>フリガナ</b></th>
								<td>{{ $inputs->kana_sei }} {{ $inputs->kana_mei }}</td>
							</tr>
							<tr>
								<th><b>住所</b></th>
								<td>
									〒{{ $inputs->zip1 }}-{{ $inputs->zip2 }}<br>
									{{ config('form.pref')[$inputs->prefecture] }} {{ $inputs->address }}<br>
									{{ $inputs->building }}
								</td>
							</tr>
							<tr>
								<th><b>メールアドレス</b></th>
								<td>
                                {{ $inputs->email }}
								</td>
							</tr>
							<tr>
								<th><b>電話番号</b></th>
								<td>
                                {{ $inputs->tel1 }}-{{ $inputs->tel2 }}-{{ $inputs->tel3 }}
								</td>
							</tr>
						</table>
						<div class="formQuestionnaire">
							<dl class="formQuestionnaireBox">
								<dt><b>あなたは、このキャンペーンをどこでお知りになりましたか</b></dt>
								<dd>・{{ config('form.q1')[$inputs->q1] }}@if($inputs->q1 == 6)（{{ $inputs->q1_other }}）@endif</dd>
                            </dl>
							<dl class="formQuestionnaireBox">
								<dt><b>この商品を購入した理由をお教えください（当てはまるものを全てお選びください）</b></dt>
    @foreach($inputs->q2 as $key)
                                <dd>・{{ config('form.q2')[$key] }} @if($key == 7)（{{ $inputs->q2_other }}）@endif</dd>
    @endforeach
                            </dl>
                            <dl class="formQuestionnaireBox">
								<dt><b>ご意見・ご感想がございましたら、ご自由にご記入ください。</b></dt>
								<dd>{!! nl2br(e($inputs->q3)) !!}</dd>
							</dl>
						</div>
					</div>

					<div class="btnGroup clr">
						<p class="btn confirm">{!! Form::button('<span>送信する</span>', ['name'=>'action', 'value'=>'sent', 'type'=>'submit']) !!}</p>
						<p class="btn back">{!! Form::button('<span>修正する</span>', ['name'=>'action', 'value'=>'back', 'type'=>'submit']) !!}</p>
					</div>
    @foreach($inputs->getAttributes() as $key => $value)
        @if(isset($value))
            @if(is_array($value))
                @foreach($value as $subValue)
                    <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                @endforeach
            @else
                {!! Form::hidden($key, $value) !!}
            @endif
        @endif
    @endforeach
{!! Form::close() !!}

			</div>
			<!-- /.inner -->
        </section>
@endsection

@include('layouts.footer')
