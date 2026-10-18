<section class="section">
    <div class="container">
        <div class="faq">
            <h2 class="faq__heading">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 8.5 8.5 0 0 1-3.8-.9L3 20l1.1-4.8A8.4 8.4 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5z"></path>
                    <path d="M9.8 9.4a2.3 2.3 0 0 1 4.4.8c0 1.5-2.2 1.8-2.2 3.2"></path>
                    <line x1="12" y1="16.4" x2="12.01" y2="16.4"></line>
                </svg>
                Frequently Asked Questions (FAQ)
            </h2>

            <div class="faq__list">
                @foreach($faqs as $faq)
                <div class="faq__item" data-open="false" @if($loop->index >= 4) data-faq-extra hidden @endif>
                    <button type="button" class="faq__question" aria-expanded="false">
                        <span>{{ $faq['question'] }}</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq__answer">
                        <div>
                            <p>{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if(count($faqs) > 4)
            <div class="faq__footer">
                <button type="button" class="btn btn-outline faq__more" data-faq-more aria-expanded="false">
                    <span>Lihat semua FAQ</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
            </div>
            @endif
        </div>
    </div>
</section>
