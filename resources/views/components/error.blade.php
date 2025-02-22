@props(['error'])

@error($error)
    <div class="text-red-500 font-bold text-sm">{{ $message }}</div>
@enderror
