<?php

namespace Database\Seeders;

use App\Models\ModulePermission;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
            Schema::disableForeignKeyConstraints();
            ModulePermission::truncate();
            Permission::truncate();
            Schema::enableForeignKeyConstraints();
            $view                   = "View";
            $create                 = "Create";
            $edit                   = "Edit";
            $delete                 = "Delete";
            $stCategory             = 1;
            $stSlider               = 2;
            $stAdvertize            = 3;
            $stMedia            = 5;
            $stMap         = 6;
            $stDownloadApp         = 7;
            $stLeader         = 8;
            $stStructure         = 9;
            $stContact         = 10;
            $stLaw         = 11;
            $stArrested         = 12;
            $stDownload         = 13;
            $stUser                 = 100;
            $stSetting              = 101;

            // Category
            $category = ModulePermission::create([
                  'name' => 'category',
                  'sort_no' => $stCategory,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'category-view',
                        'guard_name' => 'admin',
                        'module_id' => $category->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'category-create',
                        'guard_name' => 'admin',
                        'module_id' => $category->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'category-update',
                        'guard_name' => 'admin',
                        'module_id' => $category->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'category-delete',
                        'guard_name' => 'admin',
                        'module_id' => $category->id,
                  ]
            ]);

            // Slider
            $slider = ModulePermission::create([
                  'name' => 'slider',
                  'sort_no' => $stSlider,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'slider-view',
                        'guard_name' => 'admin',
                        'module_id' => $slider->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'slider-create',
                        'guard_name' => 'admin',
                        'module_id' => $slider->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'slider-update',
                        'guard_name' => 'admin',
                        'module_id' => $slider->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'slider-delete',
                        'guard_name' => 'admin',
                        'module_id' => $slider->id,
                  ]
            ]);

            //Adcertize
            $advertize = ModulePermission::create([
                  'name' => 'advertize',
                  'sort_no' => $stAdvertize,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'advertize-view',
                        'guard_name' => 'admin',
                        'module_id' => $slider->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'advertize-create',
                        'guard_name' => 'admin',
                        'module_id' => $advertize->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'advertize-update',
                        'guard_name' => 'admin',
                        'module_id' => $advertize->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'advertize-delete',
                        'guard_name' => 'admin',
                        'module_id' => $advertize->id,
                  ]
            ]);

            //Media
            $media = ModulePermission::create([
                  'name' => 'media',
                  'sort_no' => $stMedia,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'media-view',
                        'guard_name' => 'admin',
                        'module_id' => $media->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'media-create',
                        'guard_name' => 'admin',
                        'module_id' => $media->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'media-update',
                        'guard_name' => 'admin',
                        'module_id' => $media->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'media-delete',
                        'guard_name' => 'admin',
                        'module_id' => $media->id,
                  ]
            ]);


            //Map
            $map = ModulePermission::create([
                  'name' => 'map',
                  'sort_no' => $stMap,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'map-view',
                        'guard_name' => 'admin',
                        'module_id' => $map->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'map-create',
                        'guard_name' => 'admin',
                        'module_id' => $map->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'map-update',
                        'guard_name' => 'admin',
                        'module_id' => $map->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'map-delete',
                        'guard_name' => 'admin',
                        'module_id' => $map->id,
                  ]
            ]);

            //Download App
            $downloadApp = ModulePermission::create([
                  'name' => 'downloadApp',
                  'sort_no' => $stDownloadApp,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'downloadApp-view',
                        'guard_name' => 'admin',
                        'module_id' => $downloadApp->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'downloadApp-create',
                        'guard_name' => 'admin',
                        'module_id' => $downloadApp->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'downloadApp-update',
                        'guard_name' => 'admin',
                        'module_id' => $downloadApp->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'downloadApp-delete',
                        'guard_name' => 'admin',
                        'module_id' => $downloadApp->id,
                  ]
            ]);


            //Leader
            $leader = ModulePermission::create([
                  'name' => 'leader',
                  'sort_no' => $stLeader,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'leader-view',
                        'guard_name' => 'admin',
                        'module_id' => $leader->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'leader-create',
                        'guard_name' => 'admin',
                        'module_id' => $leader->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'leader-update',
                        'guard_name' => 'admin',
                        'module_id' => $leader->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'leader-delete',
                        'guard_name' => 'admin',
                        'module_id' => $leader->id,
                  ]
            ]);

            //Structure
            $structure = ModulePermission::create([
                  'name' => 'structure',
                  'sort_no' => $stStructure,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'structure-view',
                        'guard_name' => 'admin',
                        'module_id' => $structure->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'structure-create',
                        'guard_name' => 'admin',
                        'module_id' => $structure->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'structure-update',
                        'guard_name' => 'admin',
                        'module_id' => $structure->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'structure-delete',
                        'guard_name' => 'admin',
                        'module_id' => $structure->id,
                  ]
            ]);

            //Contact
            $contact = ModulePermission::create([
                  'name' => 'contact',
                  'sort_no' => $stContact,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'contact-view',
                        'guard_name' => 'admin',
                        'module_id' => $contact->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'contact-create',
                        'guard_name' => 'admin',
                        'module_id' => $contact->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'contact-update',
                        'guard_name' => 'admin',
                        'module_id' => $contact->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'contact-delete',
                        'guard_name' => 'admin',
                        'module_id' => $contact->id,
                  ]
            ]);

            //Law
            $law = ModulePermission::create([
                  'name' => 'law',
                  'sort_no' => $stLaw,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'law-view',
                        'guard_name' => 'admin',
                        'module_id' => $law->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'law-create',
                        'guard_name' => 'admin',
                        'module_id' => $law->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'law-update',
                        'guard_name' => 'admin',
                        'module_id' => $law->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'law-delete',
                        'guard_name' => 'admin',
                        'module_id' => $law->id,
                  ]
            ]);

            //Arrested
            $arrested = ModulePermission::create([
                  'name' => 'arrested',
                  'sort_no' => $stArrested,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'arrested-view',
                        'guard_name' => 'admin',
                        'module_id' => $arrested->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'arrested-create',
                        'guard_name' => 'admin',
                        'module_id' => $arrested->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'arrested-update',
                        'guard_name' => 'admin',
                        'module_id' => $arrested->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'arrested-delete',
                        'guard_name' => 'admin',
                        'module_id' => $arrested->id,
                  ]
            ]);


            //Download
            $download = ModulePermission::create([
                  'name' => 'download',
                  'sort_no' => $stDownload,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'download-view',
                        'guard_name' => 'admin',
                        'module_id' => $download->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'download-create',
                        'guard_name' => 'admin',
                        'module_id' => $download->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'download-update',
                        'guard_name' => 'admin',
                        'module_id' => $download->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'download-delete',
                        'guard_name' => 'admin',
                        'module_id' => $download->id,
                  ]
            ]);

            //admin
            $admin = ModulePermission::create([
                  'name' => 'admin',
                  'sort_no' => $stUser,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'admin-view',
                        'guard_name' => 'admin',
                        'module_id' => $admin->id,
                  ],
                  [
                        'display_name' => $create,
                        'name' => 'admin-create',
                        'guard_name' => 'admin',
                        'module_id' => $admin->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'admin-update',
                        'guard_name' => 'admin',
                        'module_id' => $admin->id,
                  ],
                  [
                        'display_name' => $delete,
                        'name' => 'admin-delete',
                        'guard_name' => 'admin',
                        'module_id' => $admin->id,
                  ]
            ]);

            // Setting
            $setting = ModulePermission::create([
                  'name' => 'setting',
                  'sort_no' => $stSetting,
            ]);
            Permission::insert([
                  [
                        'display_name' => $view,
                        'name' => 'setting-view',
                        'guard_name' => 'admin',
                        'module_id' => $setting->id,
                  ],
                  [
                        'display_name' => $edit,
                        'name' => 'setting-create',
                        'guard_name' => 'admin',
                        'module_id' => $setting->id,
                  ]
            ]);
      }
}
