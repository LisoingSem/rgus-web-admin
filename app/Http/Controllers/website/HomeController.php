<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $data['press_breifing'] = [
            (object) [
                'id' => 1,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'images' => 'assets/images/news/02.jpeg',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 2,
                'title' => (object) [
                    'km' => 'ទិន្នន័យគឺសំខាន់ណាស់ព្រោះជាផែនទីនិងត្រីយ៍វិស័យសម្រាប់យើងទាំ2',
                    'en' => 'Testing',
                ],
                'images' => 'assets/images/news/01.jpeg',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 3,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'images' => 'assets/images/news/02.jpeg',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 4,
                'title' => (object) [
                    'km' => 'ទិន្នន័យគឺសំខាន់ណាស់ព្រោះជាផែនទីនិងត្រីយ៍វិស័យសម្រាប់យើងទាំ2',
                    'en' => 'Testing',
                ],
                'images' => 'assets/images/news/01.jpeg',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 5,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'images' => 'assets/images/news/02.jpeg',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 6,
                'title' => (object) [
                    'km' => 'ទិន្នន័យគឺសំខាន់ណាស់ព្រោះជាផែនទីនិងត្រីយ៍វិស័យសម្រាប់យើងទាំ2',
                    'en' => 'Testing',
                ],
                'images' => 'assets/images/news/01.jpeg',
                'date' => Carbon::now(),
            ],
        ];

        $data['press_release'] = [
            (object) [
                'id' => 1,
                'title' => (object) [
                    'km' => 'សេចក្ដីជូនដំណឹង របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល នឹងរៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«វឌ្ឍនភាព និងទិសដៅការងារបន្ដរបស់រដ្ឋបាលខេត្ដកំពង់ឆ្នាំង» និង «បច្ចុប្បន្នភាពជំងឺរលាកសួតបង្កដោយវីរុសCOVID 19»',
                    'en' => 'Announcement of the Royal Government Spokesperson`s Unit to Hold a Press Conference on «Progress and Continuation of Kampong Chhnang Provincial Administration» and «COVID 19 Pneumonia Update»',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 2,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 3,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 4,
                'title' => (object) [
                    'km' => 'សេចក្ដីជូនដំណឹង របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល នឹងរៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«វឌ្ឍនភាព និងទិសដៅការងារបន្ដរបស់រដ្ឋបាលខេត្ដកំពង់ឆ្នាំង» និង «បច្ចុប្បន្នភាពជំងឺរលាកសួតបង្កដោយវីរុសCOVID 19»',
                    'en' => 'Announcement of the Royal Government Spokesperson`s Unit to Hold a Press Conference on «Progress and Continuation of Kampong Chhnang Provincial Administration» and «COVID 19 Pneumonia Update»',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 5,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
            (object) [
                'id' => 6,
                'title' => (object) [
                    'km' => 'សេចក្ដីជូនដំណឹង របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល នឹងរៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«វឌ្ឍនភាព និងទិសដៅការងារបន្ដរបស់រដ្ឋបាលខេត្ដកំពង់ឆ្នាំង» និង «បច្ចុប្បន្នភាពជំងឺរលាកសួតបង្កដោយវីរុសCOVID 19»',
                    'en' => 'Announcement of the Royal Government Spokesperson`s Unit to Hold a Press Conference on «Progress and Continuation of Kampong Chhnang Provincial Administration» and «COVID 19 Pneumonia Update»',
                ],
                'description' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី «ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា» អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម',
                    'en' => 'Department of Administration held a meeting on «Provinces in Agriculture» Government Spokesperson Unit Holds Press Conference on "Concepts in Agriculture in Cambodia" with Invited Speakers',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::now(),
            ],
        ];
        return view('website::pages.homepage.index', $data);
    }
}
