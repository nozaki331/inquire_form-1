
<form method="POST" action="{{ route('contact_complete') }}">
    @csrf

    <?php if (isset($inputs['name'])) {
        //<label>名前</label>
        $inputs['name'];
        ?>
        <input
            name="name"
            value="{{ $inputs['name'] }}"
            type="hidden">
    <?php 
    }
    ?>

    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>