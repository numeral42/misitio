<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $role1=Role::create(['name' => 'Admin']);
        $role2=Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.index', 
                            'description' => 'Mostrar dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 
                            'description' => 'Ver lista de usurios'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.users.edit', 
                            'description' => 'Editar usuarios'])->syncRoles([$role1]);        
        /* Permission::create(['name' => 'admin.users.update', 
                            'description' => ''])->syncRoles([$role1]);  */  

        Permission::create(['name' => 'admin.categories.index', 
                            'description' => 'Ver lista de categorías'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.categories.create', 
                            'description' => 'Crear categorías'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.categories.edit', 
                            'description' => 'Editar categorias'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.categories.destroy', 
                            'description' => 'Eliminar categorías'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 
                            'description' => 'Ver lista de etiquetas'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.tags.create', 
                            'description' => 'Crear etiquetas'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.tags.edit', 
                            'description' => 'Editar etiquetas'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.tags.destroy', 
                            'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 
                            'description' => 'Ver lista de posts'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.posts.create', 
                            'description' => 'Crear posts'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.posts.edit', 
                            'description' => 'Editar posts'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.posts.destroy', 
                            'description' => 'Eliminar posts'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.roles.index', 
                            'description' => 'Ver lista de roles'])->syncRoles([$role1, $role2]);        
        Permission::create(['name' => 'admin.roles.create', 
                            'description' => 'Crear roles'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.roles.edit', 
                            'description' => 'Editar roles'])->syncRoles([$role1]);        
        Permission::create(['name' => 'admin.roles.destroy', 
                            'description' => 'Eliminar roles'])->syncRoles([$role1]);
    }
}
