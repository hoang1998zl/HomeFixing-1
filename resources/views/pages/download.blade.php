<x-frame>
    <div id="dl" class="title mx-auto my-3" style="text-align:center;">
        TẢI VỀ
    </div>
    <div class="title mx-auto my-3" style="display: flex;justify-content: space-around;padding-top:30px;padding-bottom:25px;border-bottom: groove;">
        <div style="text-align: -webkit-center;align-self: center;width:30%;">
            Khách hàng
        </div>
        <div style="display: flex;justify-content: space-around;width:35%">
            <a href="{{asset('downloads/HomeFixing.apk')}}">
                <img src="{{ asset('img/download/google-play.png') }}" alt="" style="width:70%;border-radius: 10px;">
            </a>
        </div>
        <div style="display: flex;justify-content: space-around;width:35%">
            <a href="https://testflight.apple.com/join/8FQSBYlr">
                <img src="{{ asset('img/download/app-store.png') }}" alt="" style="width:70%;border-radius: 10px;">
            </a>
        </div>
    </div>
    <div class="title mx-auto my-3" style="display: flex;justify-content: space-around;padding-top:25px;padding-bottom:25px;border-bottom: groove;">
        <div style="text-align: -webkit-center;align-self: center;width:30%;">
            Chuyên gia
        </div>
        <div style="display: flex;justify-content: space-around;width:35%">
            <a href="{{asset('downloads/HomeFixingTho.apk')}}">
                <img src="{{ asset('img/download/google-play.png') }}" alt="" style="width:70%;border-radius: 10px;">
            </a>
        </div>
        <div style="display: flex;justify-content: space-around;width:35%">
            <a href="https://testflight.apple.com/join/E71XzjcA">
                <img src="{{ asset('img/download/app-store.png') }}" alt="" style="width:70%;border-radius: 10px;">
            </a>
        </div>
    </div>
    <x-service-intro/>
</x-frame>