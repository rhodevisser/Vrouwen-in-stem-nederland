@props([
    'pioneer' => 'Ada Lovelace',
    'work' => 'First Computer Programmer'
])

<div class="flex items-center gap-x-6">
    <div>
        <h3 class="header-two-styling">
            {{ $pioneer }}
        </h3>
        <p class="paragraph-styling">
            {{ $work }}
        </p>
    </div>
</div>
