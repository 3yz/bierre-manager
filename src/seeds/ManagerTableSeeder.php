<?php 
class ManagerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();

        Sentry::getUserProvider()->create(array(
            'email'       => 'admin@admin.com',
            'password'    => "admin123",
            'first_name'  => 'Darth',
            'last_name'   => 'Vader',
            'activated'   => 1,
        ));

        for($i = 0; $i < 10; $i++) {
          Sentry::getUserProvider()->create(array(
              'email'       => $i.'admin@admin.com',
              'password'    => $i."admin123",
              'first_name'  => $i.'Darth',
              'last_name'   => $i.'Vader',
              'activated'   => 1,
          ));
        }

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));

        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@admin.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }

}