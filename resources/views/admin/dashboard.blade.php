<x-app-layout>
    @include('admin.navigation-menu')
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
    @endif
    <div class="welc-cont">
        <div style="display:flex;flex-direction:column;text-align:center;font-family:'Script MT Bold';font-size:90px;line-height: 80px;">
            <div class="welc">Welcome to our</div>
            <div class="welc">Unireserv</div>
        </div>
        <div style="text-align:center;font-size:15px;font-weight: bold;">Now you can book rooms and halls<br>in efficient, easy and fast way!</div>
        <a href="#more" onclick="document.getElementById('more').style.display='flex'" class="btn btn-info" style="background-color: skyblue;border:none;font-weight: bold;box-shadow: 0px 3px 6px gray;">More Details</a>
    </div>
    <div style="display:flex;width:100%;height:93.9vh;justify-content:end;align-items:end">
        <img src="{{URL('images/hall.png')}}" alt="event">
    </div>
    <div id="more" style="width:99%;height:100vh;display:none;justify-content:end;align-items:center">
        <div class="card-cont">
            <div class="cards" style="display:flex;justify-content:center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/calendar.png')}}" alt="calendar" style="height:6em;width:6em">
                <div><h2 style="font-size: 20px;font-weight: bold;">Calendar</h2>Our website allows you to see all reservations within faculty using a calendar.</div>
            </div>
            <div class="cards" style="display:flex;justify-content: center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/timetable.png')}}" alt="calendar" style="height:6em;width:6em">
                <div><h2 style="font-size: 20px;font-weight: bold;">Reservations</h2>You can reserve a Room/Hall easily and save your time!</div>
            </div>
            <div class="cards" style="display:flex;justify-content: center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/email.png')}}" alt="calendar" style="height:6em;width:6em">
                <div><h2 style="font-size: 20px;font-weight: bold;">Contact</h2>Contact other professors in your faculty if needed!</div>
            </div>
            <div class="cards" style="display:flex;justify-content: center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/notification.png')}}" alt="calendar" style="height:6em;width:6em;padding:10px">
                <div><h2 style="font-size: 20px;font-weight: bold;">Notifications</h2>Notifications of speacial Rooms/Halls reservations will reach to accept or refuse them!</div>
            </div>
            <div class="cards" style="display:flex;justify-content: center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/room.png')}}" alt="calendar" style="height:6em;width:6em;padding:10px">
                <div><h2 style="font-size: 20px;font-weight: bold;">Rooms/Halls</h2>Here you can manage Rooms/Halls which your faculty contains.</div>
            </div>
            <div class="cards" style="display:flex;justify-content: center;align-items: center;gap:20px;padding:10px">
                <img src="{{URL('images/manager.png')}}" alt="calendar" style="height:6em;width:6em;padding:10px">
                <div><h2 style="font-size: 20px;font-weight: bold;">Professors</h2>You can also manage the account of faculty professors to offer a more secured system!</div>
            </div>
        </div>
        <img onclick="document.getElementById('more').style.display='none'" src="{{url('images/up.png')}}" alt="up_arrow" style="position: absolute;cursor: pointer;height:3em;width:3em;">
    </div>
    
</x-app-layout>