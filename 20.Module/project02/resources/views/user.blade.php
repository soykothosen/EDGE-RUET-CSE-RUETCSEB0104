<h1>User Name</h1>

<h1>{{$name}}</h1>

<h1>{{ time() }}</h1>

@if (1!=1)

<h1> If True </h1>

@endif

@for ($i = 0; $i < 10; $i++)
    <h2>The current value is {{ $i }}</h2>
    <br>
@endfor