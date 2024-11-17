@props(['items' => []])


<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            @foreach ($items as $index => $item)
                <li class="breadcrumb-item {{ $loop->last? 'active': '' }}">
                    @if ($loop->last)
                        {{ $item['title'] }}
                    @endif
                    @if (!$loop->last)
                        {{ $item['title'] }}
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div>