{{$inputs->name_sei}}　{{$inputs->name_mei}}様

この度は、「オリジナルデザイングッズ」にお申込みいただき誠にありがとうございます。

以下の内容でご応募を受け付け致しました。

===================================

【お名前】：{{$inputs->name_sei}}　{{$inputs->name_mei}}
【フリガナ】：{{$inputs->kana_sei}}　{{$inputs->kana_mei}}
【ご住所】：{{$inputs->zip1}}-{{$inputs->zip2}} {{ config('form.pref')[$inputs->prefecture] }} {{$inputs->address}} {{$inputs->building}}
【メールアドレス】：{{$inputs->email}}
【電話番号】：{{$inputs->tel1}}-{{$inputs->tel2}}-{{$inputs->tel3}}

===================================

【あなたは、このキャンペーンをどこでお知りになりましたか】
・{{ config('form.q1')[$inputs->q1] }}@if($inputs->q1 == 6)（{{ $inputs->q1_other }}）@endif


【この商品を購入した理由をお教えください】
@foreach($inputs->q2 as $key)
・{{ config('form.q2')[$key] }} @if($key == 7)（{{ $inputs->q2_other }}）@endif</dd>
@endforeach

【ご意見・ご感想】
{{$inputs->q3}}

===================================

賞品はキャンペーン終了後、2ヶ月以内に発送いたします。
賞品の到着まで今しばらくお待ちくださいませ。

※本メールにお心あたりのない場合、大変お手数ではございますが、
上記お問い合わせ先へご連絡くださいますようお願い申し上げます。

──────────────────────────────
キャンペーン事務局06-0000-0000

受付時間：平日 10：00～17：00（土・日・祝日を除く）
──────────────────────────────
