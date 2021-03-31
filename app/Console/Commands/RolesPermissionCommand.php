<?php

namespace App\Console\Commands;

use App\Models\ChatMessages;
use Illuminate\Console\Command;

class RolesPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel_api:bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and permissions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $roles = ["Member", "Treasurer","Secretary","Admin","Super Admin"];
//
//        $permissions = [
//            "View All Users",
//            "Mark Attendance",
//            "Approve Loans",
//            "Issue Money",
//            "Withdraw Money",
//            "Edit All Users",
//            "Assign Role",
//            "Unassign Role",
//            "View All Permissions",
//            "View All Roles"];
//
//        $this->line('------------- Setting Up Roles:');
//
//        foreach ($roles as $role) {
//            $role = Role::updateOrCreate(['name' => $role, 'guard_name' => 'api']);
//            $this->info("Created " . $role->name . " Role");
//        }
//
//        $this->line('------------- Setting Up Permissions:');
//
//        $superAdminRole = Role::where('name', "Super Admin")->first();
//
//        foreach ($permissions as $perm_name) {
//            $permission = Permission::updateOrCreate(['name' => $perm_name,
//                'guard_name' => 'api']);
//
//            $superAdminRole->givePermissionTo($permission);
//
//            $this->info("Created " . $permission->name . " Permission");
//        }
        $message = new ChatMessages();
        $message->create([
//            'message' => 'my boy hello',
            'from_user' => 5,
//            'to_user' => 24,
//            'user_id' => 5
        ]);

        $this->info("All permissions are granted to Super Admin");
        $this->line('------------- Application Bootstrapping is Complete: \n');

    }
}
