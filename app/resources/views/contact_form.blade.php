
<form action="{{ route('contact_confirm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="email">メールアドレス：</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="phone">電話番号：</label>
        <input type="tel" name="phone" id="phone" required>
    </div>

    <div>
        <label>性別：</label>
        <label for="gender-male">男性</label>
        <input type="radio" name="gender" id="gender-male" value="male" required>
        <label for="gender-female">女性</label>
        <input type="radio" name="gender" id="gender-female" value="female" required>
    </div>

    <div>
        <label for="image">画像：</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    </div>

    <div>
        <label for="message">お問い合わせ内容：</label>
        <textarea name="message" id="message" required></textarea>
    </div>

    <button type="submit">送信</button>
</form>