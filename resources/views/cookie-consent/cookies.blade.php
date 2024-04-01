<aside id="cookies-policy" class="cookies cookies--no-js" data-text="{{ json_encode(__('cookieConsent::cookies.details')) }}">
    <div class="bg-black/10 fixed inset-0 z-10 flex items-center justify-center pointer-events-none">
    <div class="cookies__alert fixed xl:-bottom-4  max-lg:bottom-1 pointer-events-auto max-w-4xl">
        <div class="cookies__container">
            <div class="cookies__wrapper max-w-4xl mx-auto">
                <h2 class="cookies__title text-center">@lang('cookieConsent::cookies.title')</h2>
                <div class="cookies__intro max-lg:text-xs xl:text-sm">
                    <p>Wir und ausgewählte Dritte verwenden Cookies oder ähnliche Technologien für technische Zwecke und mit Ihrer Zustimmung auch für Erfahrungs-, Mess- und Marketingzwecke (mit personalisierter Werbung), wie in der <a href="{{ route('cookie-policy') }}">Cookie-Policy</a> angegeben.</p>
                    <p>In Bezug auf Werbung können wir und ausgewählte Dritte präzise Standortdaten und Gerätekennungen verwenden, um Informationen auf einem Gerät zu speichern und/oder darauf zuzugreifen und personenbezogene Daten wie Ihre Nutzungsdaten zu verarbeiten.</p>
                    <p class="max-lg:hidden">Sie können Ihre Zustimmung frei geben, ablehnen oder widerrufen, jederzeit, indem Sie auf das Präferenzpanel zugreifen. Wenn Sie Ihre Zustimmung geben, gilt sie nur für diese Domain. Die Verweigerung der Zustimmung kann die entsprechenden Funktionen möglicherweise unzugänglich machen.</p>
                    <p class="max-lg:hidden">Verwenden Sie die Schaltfläche "Alles akzeptieren", um zuzustimmen. Verwenden Sie die Schaltfläche "Nur notwendige", um ohne Zustimmung fortzufahren.</p>
                </div>
                <div class="cookies__actions flex-col gap-2 xl:flex-row xl:justify-between max-w-5xl">
                    @cookieconsentbutton(action: 'accept.essentials', label: __('cookieConsent::cookies.essentials'), attributes: ['class' => 'cookiesBtn cookiesBtn--essentials'])
                    @cookieconsentbutton(action: 'accept.all', label: __('cookieConsent::cookies.all'), attributes: ['class' => 'cookiesBtn cookiesBtn--accept'])
                </div>
            </div>
        </div>
            <a href="#cookies-policy-customize" class="cookies__btn cookies__btn--customize w-full">
                <div class="mx-auto flex flex-row gap-4 align-bottom">
                    <span class="text-center pt-1">@lang('cookieConsent::cookies.customize')</span>
                    <x-heroicon-s-chevron-down class="w-6 svg"/>
                </div>
            </a>

        <div class="cookies__expandable cookies__expandable--custom" id="cookies-policy-customize">
            <form action="{{ route('cookieconsent.accept.configuration') }}" method="post" class="cookies__customize">
                @csrf
                <div class="cookies__sections">
                    @foreach($cookies->getCategories() as $category)
                    <div class="cookies__section">
                        <label for="cookies-policy-check-{{ $category->key() }}" class="cookies__category">
                            @if ($category->key() === 'essentials')
                                <input type="hidden" name="categories[]" value="{{ $category->key() }}" />
                                <input type="checkbox" name="categories[]" value="{{ $category->key() }}" id="cookies-policy-check-{{ $category->key() }}" checked="checked" disabled="disabled" />
                            @else
                                <input type="checkbox" name="categories[]" value="{{ $category->key() }}" id="cookies-policy-check-{{ $category->key() }}" checked="checked" />
                            @endif
                            <span class="cookies__box">
                                <strong class="cookies__label">{{ $category->title }}</strong>
                            </span>
                            @if($category->description)
                                <p class="cookies__info">{{ $category->description }}</p>
                            @endif
                        </label>


                    </div>
                    @endforeach
                </div>
                <div class="cookies__save">
                    <button type="submit" class="cookiesBtn__link max-w-2xl mx-auto">@lang('cookieConsent::cookies.save')</button>
                </div>
                <a href="{{ route('cookie-policy') }}" class="px-6 cookies__details">@lang('cookieConsent::cookies.details.more')</a>
            </form>
        </div>
    </div>
</div>
</aside>

{{-- STYLES & SCRIPT : feel free to remove them and add your own --}}

<script data-cookie-consent>
    {!! file_get_contents(LCC_ROOT . '/dist/script.js') !!}
</script>
