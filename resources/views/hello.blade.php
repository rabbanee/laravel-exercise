<h2>Text ini berasal gabungan controller dan views</h2>
<br>
<p>Hello {{ $name }}</p>
<ul>
    @foreach ($pelajaran as $item)
    <li>{{ $item }}</li>
    @endforeach
</ul>