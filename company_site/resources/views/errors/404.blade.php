@include("parts.common")
@include("parts.header")
<main>
    <div style="text-align:center">
        <h1>ページが見つかりません</h1>
        <p>サーバーが起動しているか確認して下さい。</p>
        <p>ファイルが正しいか確認して下さい。</p>
        <a href="{{ url('/') }}">トップに戻る</a>
    </div>
</main>
@include("parts.footer")
</body>

</html>