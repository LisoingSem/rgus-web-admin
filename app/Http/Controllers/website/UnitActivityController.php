<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UnitActivityController extends Controller
{
    public function index(Request $request)
    {

        $years = $request->query('years');
        $categoryName = $request->query('category');

        $categories = [
            (object) [
                'id' => 0,
                'name' => (object) [
                    'km' => 'ទាំងអស់',
                    'en' => 'All',
                ],
                'slug' => 'all',
            ],
            (object) [
                'id' => 1,
                'name' => (object) [
                    'km' => 'សន្និសីទថ្នាក់ជាតិ',
                    'en' => 'National Conference',
                ],
                'slug' => 'national_conference'
            ],
            (object) [
                'id' => 2,
                'name' => (object) [
                    'km' => 'សន្និសីទថ្នាក់ក្រោមជាតិ',
                    'en' => 'Sub-National Conference',
                ],
                'slug' => 'sub-national-conference',
            ],
            (object) [
                'id' => 3,
                'name' => (object) [
                    'km' => 'សន្និសីទវិសមញ្ញ',
                    'en' => 'Extraordinary Conference',
                ],
                'slug' => 'extraordinary-conference',
            ],
            (object) [
                'id' => 4,
                'name' => (object) [
                    'km' => 'សិក្ខាសាលា',
                    'en' => 'Seminar',
                ],
                'slug' => 'seminar',
            ],
            (object) [
                'id' => 5,
                'name' => (object) [
                    'km' => 'កិច្ចប្រជុំ',
                    'en' => 'Meetings',
                ],
                'slug' => 'meetings',
            ],
        ];

        $years = [
            (object) [
                'id' => 0,
                'name' => (object) [
                    'km' => 'ទាំងអស់',
                    'en' => 'all',
                ],
                'slug'  => 'all',
            ],
            (object) [
                'id' => 1,
                'name' => (object) [
                    'km' => '២០២០',
                    'en' => '2020',
                ],
                'slug'  => '2020',
            ],
            (object) [
                'id' => 2,
                'name' => (object) [
                    'km' => '២០២១',
                    'en' => '2021',
                ],
                'slug' => '2021',
            ],
            (object) [
                'id' => 3,
                'name' => (object) [
                    'km' => '២០២២',
                    'en' => '2022',
                ],
                'slug' => '2022'
            ],
            (object) [
                'id' => 4,
                'name' => (object) [
                    'km' => '២០២៣',
                    'en' => '2023',
                ],
                'slug' => '2023',
            ],
            (object) [
                'id' => 5,
                'name' => (object) [
                    'km' => '២០២៤',
                    'en' => '2024',
                ],
                'slug' => '2024',
            ],
        ];

        $articles = [
            (object) [
                'id' => 1,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/01.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 2,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/01.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 3,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/03.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 4,
                'category_id' => 3,
                'thumbnail' => 'assets/images/news/01.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 3,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/03.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2021, 1, 5, 0, 0, 0),
            ],
        ];

        $data['years'] = $years;
        $data['categories'] = $categories;

        $categoryId = null;
        foreach ($categories as $category) {
            if ($category->slug == $categoryName) {
                $categoryId = $category->id;
            }
        }

        $returnArticles = '';
        if ($request->has('category') && $request->has('years')) {
            $categoryId = $request->input('category');
            $selectedYears = $request->input('years');

            if ($categoryId === 'all' && $selectedYears === 'all') {
                $returnArticles = $articles;
            } elseif ($categoryId === 'all') {
                $returnArticles = array_filter($articles, function ($article) use ($selectedYears) {
                    return $article->date->format('Y') == $selectedYears;
                });
            } elseif ($selectedYears === 'all') {
                $returnArticles = array_filter($articles, function ($article) use ($categoryId) {
                    return $article->category_id == $categoryId;
                });
            } else {
                $returnArticles = array_filter($articles, function ($article) use ($categoryId, $selectedYears) {
                    return $article->category_id == $categoryId && $article->date->format('Y') == $selectedYears;
                });
            }
        } else {
            $returnArticles = $articles;
        }
        
        $data['articles'] = $returnArticles;
        return view('website::pages.unit-activity.index', $data);
    }

    public function data(Request $request)
    {
        $data['articles'] = [
            (object) [
                'id' => 1,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/01.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 2,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/01.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 3,
                'category_id' => 1,
                'thumbnail' => 'assets/images/news/03.jpeg',
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
        ];

        $data['categories'] = [
            (object) [
                'id' => 0,
                'name' => (object) [
                    'km' => 'ទាំងអស់',
                    'en' => 'All',
                ],
                'slug' => 'all',
            ],
            (object) [
                'id' => 1,
                'name' => (object) [
                    'km' => 'សន្និសីទថ្នាក់ជាតិ',
                    'en' => 'National Conference',
                ],
                'slug' => 'national_conference'
            ],
            (object) [
                'id' => 2,
                'name' => (object) [
                    'km' => 'សន្និសីទថ្នាក់ក្រោមជាតិ',
                    'en' => 'Sub-National Conference',
                ],
                'slug' => 'sub-national-conference',
            ],
            (object) [
                'id' => 3,
                'name' => (object) [
                    'km' => 'សន្និសីទវិសមញ្ញ',
                    'en' => 'Extraordinary Conference',
                ],
                'slug' => 'extraordinary-conference',
            ],
            (object) [
                'id' => 4,
                'name' => (object) [
                    'km' => 'សិក្ខាសាលា',
                    'en' => 'Seminar',
                ],
                'slug' => 'seminar',
            ],
            (object) [
                'id' => 5,
                'name' => (object) [
                    'km' => 'កិច្ចប្រជុំ',
                    'en' => 'Meetings',
                ],
                'slug' => 'meetings',
            ],
        ];

        return response()->json([
            'status' => 200,
            'data' => $data,
            'sms' => 'Article saved successfull.'
        ]);
    }
}
