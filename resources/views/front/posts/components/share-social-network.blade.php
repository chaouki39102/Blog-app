<ul class="ud-blog-share-links">
    <li>
        <a target="_blanck" href="https://www.facebook.com/sharer/sharer.php?u={{$url}}&quote={{$text}}" class="facebook">
            <i class="lni lni-facebook-filled"></i>
        </a>
    </li>
    <li>
        <a target="_blanck" href="https://twitter.com/intent/tweet?text={{$text}}&url={{$url}}" class="twitter">
            <i class="lni lni-twitter-filled"></i>
        </a>
    </li>
    <li>
        {{-- <a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url=:{{$url}}&title=:{{$text}}" class="linkedin"> --}}
        <a target="_blanck" href="https://www.linkedin.com/sharing/share-offsite/?url={{$url}}" class="linkedin">
            <i class="lni lni-linkedin-original"></i>
        </a>
    </li>
    <li>
        <a target="_blanck" href="https://wa.me/?text=:{{$url}}%20:{{$text}}" style="background-color: #30D24E">
            <i class="lni lni-whatsapp"></i>
        </a>
    </li>
</ul>