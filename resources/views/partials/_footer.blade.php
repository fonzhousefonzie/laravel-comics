@php
$comicsLinks = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
$shopLinks = ['Shop DC', 'Shop DC Collectibles'];
$DCLinks = ['Terms of use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
$sitesLinks = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
@endphp


<footer class="section">
    <div class="container text-start text-light py-4">
        <div class="d-flex gap-4">
            <div>
                <h4>DC COMICS</h4>
                <ul class="list-unstyled">
                    @foreach ($comicsLinks as $link)
                        <li>{{ $link }}</li>
                    @endforeach
                </ul>

                <h4>SHOP</h4>
                <ul class="list-unstyled">
                    @foreach ($shopLinks as $link)
                        <li>{{ $link }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4>DC</h4>
                <ul class="list-unstyled">
                    @foreach ($DCLinks as $link)
                        <li>{{ $link }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4>SITES</h4>
                <ul class="list-unstyled">
                    @foreach ($sitesLinks as $link)
                        <li>{{ $link }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <p>All site content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.<br>
        <a href="#">Cookies Settings</a></p>
    </div>
</footer>
