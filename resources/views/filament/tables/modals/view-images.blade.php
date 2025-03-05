<div class="grid grid-cols-3 gap-4" style="display: flex;
  justify-content: space-between;
  gap: 10px;">
    @foreach ($images as $image)
        <div class="
    justify-center items-center" style="width: 100%;height: auto;">
            <img src="{{ $image->image }}" alt="User Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
    @endforeach
</div>
