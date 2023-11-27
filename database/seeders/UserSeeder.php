<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = \Carbon\Carbon::now();

        $password = Hash::make("admin");
        $social = Hash::make("social");
        $medecin = Hash::make("medecin");

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $password,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        $admin->assignRole('admin');

        $permissionAdmin = [
            'index-EtatCivilController',
            'create-EtatCivilController',
            'edit-EtatCivilController',
            'show-EtatCivilController',
            'update-EtatCivilController',
            'destroy-EtatCivilController',
            'index-PermissionController',
            'create-PermissionController',
            'show-PermissionController',
            'edit-PermissionController',
            'update-PermissionController',
            'destroy-PermissionController',
            'index-RoleController',
            'store-RoleController',
            'create-RoleController',
            'exporter-RoleController',
            'importer-RoleController',
            'show-RoleController',
            'edit-RoleController',
            'update-RoleController',
            'destroy-RoleController',
            'index-EmployeController',
            'create-EmployeController',
            'show-EmployeController',
            'edit-EmployeController',
            'update-EmployeController',
            'destroy-EmployeController',
            'export-EmployeController',
            'import-EmployeController',
            'index-CouvertureMedicalController',
            'create-CouvertureMedicalController',
            'show-CouvertureMedicalController',
            'edit-CouvertureMedicalController',
            'update-CouvertureMedicalController',
            'destroy-CouvertureMedicalController',
            'export-CouvertureMedicalController',
            'import-CouvertureMedicalController',
            'index-TypeHandicapController',
            'create-TypeHandicapController',
            'show-TypeHandicapController',
            'edit-TypeHandicapController',
            'update-TypeHandicapController',
            'destroy-TypeHandicapController',
            'export-TypeHandicapController',
            'import-TypeHandicapController',
            'index-NiveauScolaireController',
            'show-NiveauScolaireController',
            'create-NiveauScolaireController',
            'edit-NiveauScolaireController',
            'update-NiveauScolaireController',
            'destroy-NiveauScolaireController',
            'exporter-NiveauScolaireController',
            'importer-NiveauScolaireController',
            'addPermissionsAuto-PermissionController',
            'index-UserController',
            'showRolePermission-PermissionController',
            'assignRolePermission-PermissionController',

        ];

        $admin->givePermissionTo($permissionAdmin);
        $user = User::insert([

            [
                'name' => 'service social',
                'email' => 'social@gmail.com',
                'password' => $social,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Medecin générale',
                'email' => 'medecin@gmail.com',
                'password' => $medecin,
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ]);

    }
}
