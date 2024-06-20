@props(['disabled' => false])
<x-input-label for="fileInput" :value="__('Profile Picture')" />
<div class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-md p-4">
    <input type="file" accept="image/*" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'hidden']) !!} id="fileInput">
    <label for="fileInput" class="cursor-pointer">
        <div class="text-center">
            <span class="text-gray-500 dark:text-gray-400">Click to upload</span>
        </div>
    </label>
</div>

<script>
    document.getElementById('fileInput').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const file = this.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgPreview = document.createElement('img');
                imgPreview.src = e.target.result;
                imgPreview.className = 'w-24 h-24 mt-4 rounded-md';
                const container = document.querySelector('#fileInput').parentNode;
                const existingPreview = container.querySelector('img');
                if (existingPreview) {
                    container.removeChild(existingPreview);
                }
                container.appendChild(imgPreview);
            }
            reader.readAsDataURL(file);
        }
    });
</script>
