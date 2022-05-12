@extends('layouts.app')

@section('content')
<div class="container profile">
    <div class="row">
        <div class="col-3 pt-5 mt-1">
            <img src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/278479793_734598264208578_7838242761727126818_n.jpg?stp=c0.17.206.206a_dst-jpg_p206x206&_nc_cat=105&ccb=1-6&_nc_sid=da31f3&_nc_ohc=VRewxaxlOwAAX_Q-t9f&tn=v_tenr3G61cAOBPQ&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9PQG9rWdlPpXAP7YgSugdjaxVnJ7PfdGCfpLMMaERqvQ&oe=6280E2A6" class="rounded-circle" alt="Profile Picture">
        </div>
        <div class="col-9 pt-5 ps-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">

                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>233</strong> posts</div>
                    <div class="pe-5"><strong>1,360</strong> followers</div>
                    <div class="pe-5"><strong>436</strong> following</div>
                </div>
                <div class="pt-3">
                    <strong>{{ $user->name }}</strong>
                </div>
                <div class="text-muted">
                    Digital creator
                </div>
                <div>
                    {{ $user->profile->bio ?? " "}}
                </div>
                <div class="fw-bold">
                    <a class="text-decoration-none" href="https://{{ $user->profile->website ?? ' '}}">{{ $user->profile->website ?? " "}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/278799970_737122180622853_3265528278529767819_n.jpg?stp=dst-jpg_s206x206&_nc_cat=110&ccb=1-6&_nc_sid=da31f3&_nc_ohc=VKJsrHvV-6sAX_sQe5f&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT-gduFQ5XBAVexKrvGdl6NgW_OkqXaVPxvhHNSGpcV9pA&oe=62802EA9" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/278479793_734598264208578_7838242761727126818_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=730e14&_nc_ohc=VRewxaxlOwAAX_Q-t9f&tn=v_tenr3G61cAOBPQ&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9XhnZttJqbxNxvJ_CLsYnleJHHYKRFYANcLsS646wfGg&oe=6280E2A6" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/277777274_728932854775119_4392849192618160595_n.jpg?_nc_cat=107&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=WnpcCn0EhUUAX8KynnJ&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9x4YdTl_PhH6hNnlRdCVISsS5LmkQNgmZR9tbtKnbhvQ&oe=627FA208" alt="">
        </div>
    </div>
    <div class="row pt-0">
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/278799970_737122180622853_3265528278529767819_n.jpg?stp=dst-jpg_s206x206&_nc_cat=110&ccb=1-6&_nc_sid=da31f3&_nc_ohc=VKJsrHvV-6sAX_sQe5f&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT-gduFQ5XBAVexKrvGdl6NgW_OkqXaVPxvhHNSGpcV9pA&oe=62802EA9" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/278479793_734598264208578_7838242761727126818_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=730e14&_nc_ohc=VRewxaxlOwAAX_Q-t9f&tn=v_tenr3G61cAOBPQ&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9XhnZttJqbxNxvJ_CLsYnleJHHYKRFYANcLsS646wfGg&oe=6280E2A6" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/277777274_728932854775119_4392849192618160595_n.jpg?_nc_cat=107&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=WnpcCn0EhUUAX8KynnJ&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9x4YdTl_PhH6hNnlRdCVISsS5LmkQNgmZR9tbtKnbhvQ&oe=627FA208" alt="">
        </div>
    </div>
</div>
@endsection