@props(['pioneer'])


<div class="flex items-center gap-x-6">
    <img src="{{ str_starts_with($pioneer['image'], 'http') ? $pioneer['image'] : asset('images/' . $pioneer['image']) }}"
         alt="{{ $pioneer['name'] ?? 'Pioneer' }}"
         class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
    <div>
        <h3 class="header-two-styling">
            {{ $pioneer['name'] ?? 'Naam onbekend' }}
        </h3>
        <p class="paragraph-styling">
            {{ $pioneer['role'] ?? 'Rol onbekend' }}
        </p>
    </div>
</div>
