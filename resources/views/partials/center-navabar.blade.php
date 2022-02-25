<li role="presentation">
    <a href="{{ route('admin.home') }}" class="{{ request()->is('app') || request()->is('app/*') ? '' : '' }}">
        <i class="flaticon-internet"></i> <br>
        Reception
    </a>
</li>
@can('agenda_date_access')
    <li role="presentation">
        <a class="{{ request()->is('app/agenda') || request()->is('app/agenda/*') ? 'active' : '' }}"
            href="{{ route('admin.view.agenda') }}">
            <i class="flaticon-grid"></i>
            <br>Agenda
        </a>
    </li>
@endcan
@can('event_feed_access')
    <li role="presentation">
        <a class="{{ request()->is('app/feed') || request()->is('app/feed/*') ? 'active' : '' }}"
            href="{{ route('admin.view.event-feed') }}">
            <i class="flaticon-share-1"></i>
            <br>Event Feed
        </a>
    </li>
@endcan
@can('delegate_access')
    <li role="presentation">
        <a class="{{ request()->is('app/speaker') || request()->is('app/speaker/*') ? 'active' : '' }}"
            href="{{ route('admin.view.speaker') }}">
            <i class="fa fa-user-tie"></i>
            <br>Delegates
        </a>
    </li>
@endcan
@can('speaker_access')
    <li role="presentation">
        <a class="{{ request()->is('app/speaker') || request()->is('app/speaker/*') ? 'active' : '' }}"
            href="{{ route('admin.view.speaker') }}">
            <i class="fa fa-users"></i>
            <br>Speakers
        </a>
    </li>
@endcan
@can('company_access')
    <li role="presentation">
        <a class="{{ request()->is('app/companies') || request()->is('app/companies/*') ? 'active' : '' }}"
            href="{{ route('admin.companies.index') }}">
            <i class="fa fa-building"></i>
            <br>Companies
        </a>
    </li>
@endcan
@can('guest_of_honor_access')
    <li role="presentation">
        <a class="{{ request()->is('app/companies') || request()->is('app/companies/*') ? 'active' : '' }}" href="">
            <i class="fa fa-user-tie"></i>
            <br><small>Guest of Honor</small>
        </a>
    </li>
@endcan
@can('attendee_access')
    <li role="presentation">
        <a class="{{ request()->is('app/attendee') || request()->is('app/attendee/*') ? 'active' : '' }}"
            href="{{ route('admin.view.attendee') }}">
            <i class="far fa-user-circle"></i>
            <br>Attendees
        </a>
    </li>
@endcan
@can('my_meeting_access')
    <li role="presentation">
        <a class="{{ request()->is('app/meeting') || request()->is('app/meeting/*') ? 'active' : '' }}"
            href="{{ route('admin.view.meeting') }}">
            <i class="far fa-address-card"></i>
            <br>My Meetings
        </a>
    </li>
@endcan
@can('newsroom_access')
    <li role="presentation">
        <a class="{{ request()->is('app/newsroom') || request()->is('app/newsroom/*') ? 'active' : '' }}"
            href="{{ route('admin.view.newsroom') }}">
            <i class="flaticon-reader"></i>
            <br>Newsroom
        </a>
    </li>
@endcan
