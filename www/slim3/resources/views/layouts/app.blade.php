<!DOCTYPE html>
<html lang="ja">
<head>
@yield('head')
@stack('css')
@stack('js')
</head>
<body>
@yield('header')
	<div id="contentsWrap">
@yield('content')
	</div>
	<!-- /#contents_wrap -->
@yield('footer')
</body>
</html>
