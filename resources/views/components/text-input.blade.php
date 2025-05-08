<div class="relative mb-4">
    @if ($formId)
        <button type="button" class="absolute top-0 right-0 h-full flex items-center pr-2"
            onclick="document.getElementById('{{ $name }}').value = ''; document.getElementById('{{ $formId }}').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-slate-500">
                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </button>
    @endif

        <input type="text" placeholder="{{ $placeholder }}"
        name="{{ $name }}" value="{{ $value }}" id="{{ $name }}"
        class="w-full rounded-md border-0 py-1.5 px-2.5 text-sm
            ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2 pr-8" />
</div>




