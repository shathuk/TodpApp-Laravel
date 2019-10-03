
<div class="navbar bg-dark">
        <div class="logo-text">
            TodoList
        </div>
        <ul>
            <li>
                <a class="{{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
            </li>
            <li>
                <a class="{{Request::is('todo/create') ? 'active' : ''}}" href="/todo/create">Create</a>
            </li>
        </ul>
</div>