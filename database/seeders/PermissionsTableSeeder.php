<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_create',
            ],
            [
                'id'    => 29,
                'title' => 'task_edit',
            ],
            [
                'id'    => 30,
                'title' => 'task_show',
            ],
            [
                'id'    => 31,
                'title' => 'task_delete',
            ],
            [
                'id'    => 32,
                'title' => 'task_access',
            ],
            [
                'id'    => 33,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 34,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 35,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 36,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 37,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 38,
                'title' => 'events_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'event_setting_create',
            ],
            [
                'id'    => 40,
                'title' => 'event_setting_edit',
            ],
            [
                'id'    => 41,
                'title' => 'event_setting_show',
            ],
            [
                'id'    => 42,
                'title' => 'event_setting_delete',
            ],
            [
                'id'    => 43,
                'title' => 'event_setting_access',
            ],
            [
                'id'    => 44,
                'title' => 'company_create',
            ],
            [
                'id'    => 45,
                'title' => 'company_edit',
            ],
            [
                'id'    => 46,
                'title' => 'company_show',
            ],
            [
                'id'    => 47,
                'title' => 'company_delete',
            ],
            [
                'id'    => 48,
                'title' => 'company_access',
            ],
            [
                'id'    => 49,
                'title' => 'interest_create',
            ],
            [
                'id'    => 50,
                'title' => 'interest_edit',
            ],
            [
                'id'    => 51,
                'title' => 'interest_show',
            ],
            [
                'id'    => 52,
                'title' => 'interest_delete',
            ],
            [
                'id'    => 53,
                'title' => 'interest_access',
            ],
            [
                'id'    => 54,
                'title' => 'post_create',
            ],
            [
                'id'    => 55,
                'title' => 'post_edit',
            ],
            [
                'id'    => 56,
                'title' => 'post_show',
            ],
            [
                'id'    => 57,
                'title' => 'post_delete',
            ],
            [
                'id'    => 58,
                'title' => 'post_access',
            ],
            [
                'id'    => 59,
                'title' => 'comment_create',
            ],
            [
                'id'    => 60,
                'title' => 'comment_edit',
            ],
            [
                'id'    => 61,
                'title' => 'comment_show',
            ],
            [
                'id'    => 62,
                'title' => 'comment_delete',
            ],
            [
                'id'    => 63,
                'title' => 'comment_access',
            ],
            [
                'id'    => 64,
                'title' => 'agenda_date_create',
            ],
            [
                'id'    => 65,
                'title' => 'agenda_date_edit',
            ],
            [
                'id'    => 66,
                'title' => 'agenda_date_show',
            ],
            [
                'id'    => 67,
                'title' => 'agenda_date_delete',
            ],
            [
                'id'    => 68,
                'title' => 'agenda_date_access',
            ],
            [
                'id'    => 69,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 70,
                'title' => 'no_role',
            ],
            [
                'id'    => 71,
                'title' => 'event_schedule_create',
            ],
            [
                'id'    => 72,
                'title' => 'event_schedule_edit',
            ],
            [
                'id'    => 73,
                'title' => 'event_schedule_show',
            ],
            [
                'id'    => 74,
                'title' => 'event_schedule_delete',
            ],
            [
                'id'    => 75,
                'title' => 'event_schedule_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
