@php
    // this is made available by columns like select and select_multiple
    $related_key = $related_key ?? null;

    // define the wrapper element
    $wrapperElement = $column['wrapper']['element'] ?? 'a';
    if(!is_string($wrapperElement) && $wrapperElement instanceof \Closure) {
        $wrapperElement = $wrapperElement($crud, $column, $entry, $related_key);
    }
@endphp

@if($column['wrapper']['suffix'] ?? false)
<span>{{ $column['wrapper']['suffix'] }}</span>
@endif
</span>
</{{ $wrapperElement }}>
