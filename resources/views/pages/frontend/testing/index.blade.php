<form action="{{ route('testingSend') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="message" placeholder="Message">
    <button type="submit">Send</button>
</form>
