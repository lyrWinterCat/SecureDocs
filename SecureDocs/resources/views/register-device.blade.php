<h1>기기 등록</h1>
<form method="POST" action="/register-device">
    @csrf
    <label>Device ID:</label>
    <input type="text" name="device_id" required>
    <button type="submit">등록</button>
</form>
