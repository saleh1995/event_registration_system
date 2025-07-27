<div class="language-switcher text-end mb-3">
    <div class="btn-group" role="group">
        <a href="{{ route('language.switch', 'ar') }}"
            class="btn btn-sm {{ app()->getLocale() === 'ar' ? 'btn-primary' : 'btn-outline-primary' }}">
            العربية
        </a>
        <a href="{{ route('language.switch', 'en') }}"
            class="btn btn-sm {{ app()->getLocale() === 'en' ? 'btn-primary' : 'btn-outline-primary' }}">
            English
        </a>
    </div>
</div>
