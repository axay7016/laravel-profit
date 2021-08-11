<style>
    

    .bottom IMG {
        margin: -11px 0 0 -3px;
        width: 115px;
    }

    .bottom UL {
        margin-top: 10px;
    }

    .float_lang_base_2 {
        float: left;
        color: #000;
        margin-left: -37px;
    }

    ol,
    ul {
        list-style: none;
    }

    .clearfix:before {
        content: "";
        display: block;
        clear: both;
    }

    .bottom UL LI:first-child {
        border: none;
        padding: 0;
        margin: 0;
    }

    .bottom UL LI {
        font-size: 13px;
        display: inline-block;
        line-height: 12px;
        margin-left: 8px;
        padding-left: 10px;
        border-left: 1px solid #666;
    }

    .bottom UL LI A {
        color: #bebebe;
    }

    A {
        text-decoration: none;
      
        outline: none;
    }

    .bottom UL+DIV {
        margin-top: 44px;
    }

    .disclaimer {
        background-color: #ccc;
        margin-top: 18px;
        padding: 15px 13px;
        /* border: 1px solid #fff; */
        color: #fff;
        text-align: justify;
    }

    .bold {
        font-weight: bold;
    }

</style>
<footer class="text-left" style="    padding-top: 0;
    padding-bottom: 0; ">
    <section class="bottom">
        {{-- <img style="float: left;" src="{{ asset('/assets/images/logo_profit180.png?v=' . time()) }}" alt="profit180"> --}}
        {{-- <ul class="float_lang_base_2 clearfix"> --}}
            {{-- <li>Terms And Conditions</li> --}}
            {{-- <li><a href="/about-us/privacy-policy">Privacy Policy</a></li>
            <li><a href="/about-us/risk-warning">Risk Warning</a></li> --}}
        {{-- </ul> --}}
        <div class="disclaimer" >
            <span class="bold">Risk Disclosure:</span> Trading in equity stocks involves high risks including the risk
            of losing some, or all, of your investment amount, and may not be suitable for all investors.
            Trading on margin increases the financial risks.
            Before deciding to trade in financial instrument or cryptocurrencies you should be fully informed of the
            risks and costs associated with trading the financial markets, carefully consider your investment
            objectives, level of experience, and risk appetite, and seek professional advice where needed.

            Profit180&nbsp;would like to remind you that the data contained in this website is not necessarily
            real-time nor accurate. The data and prices on the website are not&nbsp;necessarily&nbsp;provided by any
            market or exchange, but may be provided by&nbsp;market makers, and so prices may not be accurate and may
            differ from the actual price at any given market, meaning prices are indicative and not appropriate for
            trading purposes.&nbsp;Profit180&nbsp;and&nbsp;any provider of the data contained in this
            website&nbsp;will not accept liability for any loss or damage as a result of your trading, or your reliance
            on the information contained within this website.
            It is prohibited to use, store, reproduce, display, modify, transmit or distribute the data contained in
            this website without the explicit prior written permission of Profit180 and/or the data provider. All
            intellectual property rights are reserved by the providers and/or the exchange providing the data contained
            in this website.

            Profit180 may be compensated by the advertisers that appear on the website, based on your
            interaction with the advertisements or advertisers.
        </div>
        <div style="color:#000;">© {{ date('Y') }} Profit180. All Rights Reserved &amp;
            <span> &nbsp;Powered by <a href="https://websmb.ca/" target="_blank" style="color:#blue; text-decoration:none;cursor: pointer; "> <span style="color:rgb(76, 136, 226);font-weight:bold;">webSMB</span> </a></span> 
        </div>
    </section>
    {{-- <p style="text-align: center;">Profit180 &copy; 2020 </p>
    --}}
    
</footer>
<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function() {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
    $(document).ready(function() {
        $('#example').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true
        });
    });

</script>

<script src="{{ asset('assets/js/dataTable.js') }}"></script>
