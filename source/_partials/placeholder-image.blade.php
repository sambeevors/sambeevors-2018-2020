@if ($addP) <p> @endif
    <img src="https://unsplash.it/{{ $width or '500' }}/{{ $height or '500' }}?random" style="max-width: 100%; {{ $style }}" class="{{ $class }}">
@if ($addP) </p> @endif
