
    <form method="POST" action="{{ route('admin.store') }}">
        {{ csrf_field() }}
        <input type="text" name="category_name" placeholder="Select category name" autofocus>
        <button type="submit" class="">SEND</button>
    </form>

    @yield('msg')


















