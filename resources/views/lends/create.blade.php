<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('lends.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $id}}">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <label for="start" >START</label>
                    <input type="text" name="start" id="datepicker-start" autocomplete="off">
                    <label for="end">END</label>
                    <input type="text" name="end" id="datepicker-end" autocomplete="off">
                    <select name="type">
                        <option value="">希望する渡し方</option>
                        <option value="rocker">ロッカーに預け入れする</option>
                        <option value="delivery">配送する</option>
                    </select> 
                    <button class="btn btn-primary" type="submit" >決定</button>
                    <div class="circle">
                    <a href="/" class="bt-samp31">トップページに戻る</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
$('#datepicker-start').datepicker({ dateFormat: "yy-mm-dd" }).val();
$('#datepicker-end').datepicker({ dateFormat: "yy-mm-dd" }).val();
</script>

