<li role="presentation">
    <a href="{{ route('admin.home') }}"
        class="{{ request()->is('app') || request()->is('app/*') ? 'active' : '' }}">
        <i class="flaticon-internet"></i> <br>
        Reception
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/agenda') || request()->is('app/agenda/*') ? 'active' : '' }}"
        href="{{ route('admin.view.agenda') }}">
        <i class="flaticon-grid"></i>
        <br>Agenda
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/feed') || request()->is('app/feed/*') ? 'active' : '' }}"
        href="{{ route('admin.view.event-feed') }}">
        <i class="flaticon-share-1"></i>
        <br>Event Feed
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/speaker') || request()->is('app/speaker/*') ? 'active' : '' }}"
        href="{{ route('admin.view.speaker') }}">
        <i class="fa fa-users"></i>
        <br>Speakers
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/companies') || request()->is('app/companies/*') ? 'active' : '' }}"
        href="{{ route('admin.companies.index') }}">
        <i class="fa fa-building"></i>
        <br>Companies
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/attendee') || request()->is('app/attendee/*') ? 'active' : '' }}"
        href="{{ route('admin.view.attendee') }}">
        <i class="far fa-user-circle"></i>
        <br>Attendees
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/meeting') || request()->is('app/meeting/*') ? 'active' : '' }}"
        href="{{ route('admin.view.meeting') }}">
        <i class="far fa-address-card"></i>
        <br>My Meetings
    </a>
</li>
<li role="presentation">
    <a class="{{ request()->is('app/newsroom') || request()->is('app/newsroom/*') ? 'active' : '' }}"
        href="{{ route('admin.view.newsroom') }}">
        <i class="flaticon-reader"></i>
        <br>Newsroom
    </a>
</li>
