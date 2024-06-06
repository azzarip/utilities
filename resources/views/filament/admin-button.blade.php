<x-filament-widgets::widget>
    <x-filament::section>
        <a href="{{ $path }}"
        style="width: 100%; border-radius: 0.5rem; display: flex; box-shadow: 0px 4px 6px 0px rgba(107, 114, 128, 0.7);">
         <div style="display: flex; flex: 1; align-items: center; justify-content: center; text-align: center; color: {{ $secondary }}; background-color: {{ $primary }}; border: 2px solid {{ $primary }}; border-right: none; border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;">
             <p style="font-size: 1.9rem; line-height: 2.25rem; width: 100%;">{{ $name }}</p>
         </div>
         <div style="display: flex; flex-shrink: 0; background-color: {{ $secondary }}; align-items: center; justify-content: center; width: 6rem; border: 2px solid {{ $primary }}; border-left: none; border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;">
             @svg($icon, '', ['style'=> "width: 4rem; height: 4rem; margin: 0.5rem auto; color: $primary;"])
         </div>
     </a>
</x-filament::section>
</x-filament-widgets::widget>
