<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('events_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/event-settings*') ? 'c-show' : '' }} {{ request()->is('admin/companies*') ? 'c-show' : '' }} {{ request()->is('admin/posts*') ? 'c-show' : '' }} {{ request()->is('admin/comments*') ? 'c-show' : '' }} {{ request()->is('admin/agenda-dates*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-calendar-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.eventsManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('event_setting_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.event-settings.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/event-settings') || request()->is('admin/event-settings/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventSetting.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('company_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.companies.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fab fa-houzz c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.company.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('post_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.posts.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/posts') || request()->is('admin/posts/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.post.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('comment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.comments.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/comments') || request()->is('admin/comments/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.comment.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('agenda_date_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.agenda-dates.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/agenda-dates') || request()->is('admin/agenda-dates/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.agendaDate.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('event_schedule_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.event-schedules.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/event-schedules') || request()->is('admin/event-schedules/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.eventSchedule.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('task_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/task-statuses*') ? 'c-show' : '' }} {{ request()->is('admin/task-tags*') ? 'c-show' : '' }} {{ request()->is('admin/tasks*') ? 'c-show' : '' }} {{ request()->is('admin/tasks-calendars*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.taskManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('task_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.task-statuses.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.task-tags.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.tasks.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.task.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tasks_calendar_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.tasks-calendars.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-calendar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tasksCalendar.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/permissions*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/users*') ? 'c-show' : '' }} {{ request()->is('admin/user-alerts*') ? 'c-show' : '' }} {{ request()->is('admin/interests*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_alert_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.user-alerts.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.userAlert.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('interest_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.interests.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/interests') || request()->is('admin/interests/*') ? 'c-active' : '' }}">
                                <i class="fa-fw far fa-edit c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.interest.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @php($unread = \App\Models\QaTopic::unreadCount())
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.messenger.index') }}"
                class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'c-active' : '' }} c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                </i>
                <span>{{ trans('global.messages') }}</span>
                @if ($unread > 0)
                    <strong>( {{ $unread }} )</strong>
                @endif

            </a>
        </li>
        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                        href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
