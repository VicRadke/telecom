@props(['name'])
<a class="accesos-directos pt-3" {{ $attributes }}>
    <div>
        <div>
            {{ $image }}
        </div>
        <p>
            {{ $name }}
        </p>
    </div>
</a>