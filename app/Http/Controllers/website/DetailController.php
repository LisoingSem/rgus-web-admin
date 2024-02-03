<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonInterface;

class DetailController extends Controller
{
    public function index(Request $request, $category, $id)
    {
        $data['url'] = $request->fullUrl();

        $data['category'] = [
            (object) [
                'id' => 1,
                'name' => 'Press Releases',
                'slug' => 'press-release',
            ],
            (object) [
                'id' => 2,
                'name' => 'Press Breifing',
                'slug' => 'press-breifing',
            ],
        ];

        $data['articles'] = [
            (object) [
                'id' => 1,
                'category_id' => 1,
                'title' => (object) [
                    'km' => 'អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»',
                    'en' => 'Government Spokesperson Holds Press Conference on "Concepts in Agriculture in Cambodia"',
                ],
                'description' => (object) [
                    'km' => '
                    <img src="' . asset('assets/images/news/10.jpg') . '" alt="">
                    <p style="font-weight: bold;">
                                    អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល រៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«ទស្សនទាន ក្នុងវិស័យកសិកម្មនៅកម្ពុជា»ដែលមានវាគ្មិនអញ្ជើញចូលរួម៖
                                </p>
                                <p style="line-height: 25px;">
                                ឯកឧត្ដម ឌិត ទីណា រដ្ឋមន្រ្ដីក្រសួងកសិកម្ម រុក្ខាប្រមាញ់ និងនេសាទ <br/>
                                ឯកឧត្តម ជា ឆេង អនុរដ្ឋលេខាធិការ និងជាប្រធានខុទ្ទកាល័យឯកឧត្តមរដ្ឋមន្ដ្រីក្រសួងកសិកម្ម រុក្ខាប្រមាញ់ និងនេសាទ<br/>
                                លោកជំទាវ អ៊ឹម រចនា អនុរដ្ឋលេខាធិការ និងជាអ្នកនាំពាក្យនៃក្រសួងកសិកម្ម រុក្ខាប្រមាញ់ និងនេសាទ<br/>
                                ឯកឧត្តម កែវ អូម៉ាលីស្ស ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជាទទួលបន្ទុកជាប្រធានរដ្ឋបាលព្រៃឈើ<br/>
                                ឯកឧត្តម ងិន ឆាយ ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជាទទួលបន្ទុកជាអគ្គនាយកនៃអគ្គនាយកដ្ឋានកសិកម្ម<br/>
                                ឯកឧត្តម តាន់ ផាន់ណារ៉ា ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជាទទួលបន្ទុកជាអគ្គនាយកនៃអគ្គនាយកដ្ខានសុខភាពសត្វ និងផលិតកម្មសត្វ<br/>
                                ឯកឧត្តម ពុំ សុថា ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជាទទួលបន្ទុកជាប្រធានរដ្ឋបាលជលផល<br/>
                                ឯកឧត្តម ហ៊ឹម អូន ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជាទទួលបន្ទុកជាអគ្គនាយកនៃអគ្គនាយកដ្ឋានកៅស៊ូ<br/>
                                </p>
                                        ',
                    'en' => '<p>
                    The Spokesperson of the Royal Government held a press conference on "Concepts in the field of agriculture in Cambodia" with the following speakers:
                </p>
                <p>
                    His Excellency Dith Tina, Minister of Agriculture, Forestry and Fisheries
                </p>
                <p>
                    His Excellency Chea Chheng, Undersecretary of State and Chairman of the Cabinet of His Excellency the Minister of Agriculture, Forestry and Fisheries
                </p>
                <p>
                    Lok Chumteav Im Rachana, Undersecretary of State and Spokesperson of the Ministry of Agriculture, Forestry and Fisheries
                </p>
                <p>
                HE Keo Omalis, Royal Government of Cambodia Delegate in charge of Forestry Administration
                </p>
                <p>
                HE Ngin Chhay, Royal Government of Cambodia Delegate in charge of the Director General of the General Department of Agriculture
                </p>
                <p>
                HE Tan Phannara, Royal Government of Cambodia Delegate in charge of the Director General of the Department of Animal Health and Animal Production
                </p>
                <p>
                HE Pum Sotha, Royal Government of Cambodia Delegate in charge of the Director of Fisheries Administration
                </p>
                <p>
                His Excellency Him Oun, Royal Government of Cambodia Delegate in charge of the Director General of the General Department of Rubber
                </p>
                                      ',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2023, 1, 5, 0, 0, 0),
            ],
            (object) [
                'id' => 2,
                'category_id' => 1,
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
                'category_id' => 1,
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
                'category_id' => 1,
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
                'category_id' => 1,
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
                'category_id' => 1,
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
                'id' => 1,
                'category_id' => 2,
                'title' => (object) [
                    'km' => 'សេចក្ដីជូនដំណឹង របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល នឹងរៀបចំសន្និសីទសារព័ត៌មានស្ដីពី«វឌ្ឍនភាព និងទិសដៅការងារបន្ដរបស់រដ្ឋបាលខេត្ដកំពង់ឆ្នាំង» និង «បច្ចុប្បន្នភាពជំងឺរលាកសួតបង្កដោយវីរុសCOVID 19»',
                    'en' => 'Announcement of the Royal Government Spokesperson`s Unit to Hold a Press Conference on «Progress and Continuation of Kampong Chhnang Provincial Administration» and «COVID 19 Pneumonia Update»',
                ],
                'description' => (object) [
                    'km' => '<p>
                                លោក ហ៊ុន ម៉ាណែត កើតនៅថ្ងៃទី២០ ខែតុលា ឆ្នាំ១៩៧៧ នៅភូមិកោះថ្ម ស្រុកមេមត់ ខេត្តកំពង់ចាម ក្នុងរបបខ្មែរក្រហមគ្រប់គ្រងប្រទេសកម្ពុជា ជាកូនប្រុសទី២របស់លោក ហ៊ុន សែន និងលោកស្រី ប៊ុន រ៉ានី។ នៅ​យប់​ថ្ងៃ​កើត ពន្លឺ​ភ្លឺ​បាន​ហោះ​មក​លើ​ដំបូល​ផ្ទះ ដែល​លោក ហ៊ុន សែន ជឿ​ថា កូន​ប្រុស​របស់​លោក​កើត​ចេញ​ពី​វត្ថុ​អរូបី ដែល​គេ​គោរព​បូជា​នៅ​ភូមិ​កោះថ្ម។
                                </p>
                                <p>
                                        គាត់ធំដឹងក្តី និងទទួលបានការអប់រំទូទៅនៅភ្នំពេញ ហើយក្រោយមកបានចូលបម្រើការងារក្នុងកងយោធពលខេមរភូមិន្ទនៅឆ្នាំ ១៩៩៥ ក្នុងឆ្នាំដដែលនោះគាត់បានចូលរៀននៅសាលាយោធាសហរដ្ឋអាមេរិកនៅ West Point ។ ដោយបានទទួលសញ្ញាប័ត្រនៅខែឧសភា ឆ្នាំ ១៩៩៩ លោក ហ៊ុន ម៉ាណែត បានក្លាយជានិស្សិតខ្មែរដំបូងគេបង្អស់នៃបណ្ឌិតសភា។ គាត់គឺជាអតីតនិស្សិតកម្ពុជាដំបូងគេនៃបណ្ឌិត្យសភា ហើយជានិស្សិតបរទេសម្នាក់ក្នុងចំណោមនិស្សិតបរទេសប្រាំពីររូបប៉ុណ្ណោះដែលបានបញ្ចប់ការសិក្សានៅឆ្នាំនោះ។ ពេល​បញ្ចប់​ការ​សិក្សា​ពី West Point លោក​បាន​ទទួល​បរិញ្ញាបត្រ​ផ្នែក​សេដ្ឋកិច្ច និង​ទទួល​បាន​គណៈកម្មាការ​ជា​អនុសេនីយ៍ឯក​ក្នុង​កងយោធពល​ខេមរភូមិន្ទ។ គាត់ក៏បានទទួលអនុបណ្ឌិតផ្នែកសេដ្ឋកិច្ចរបស់គាត់ពីសាកលវិទ្យាល័យញូវយ៉កសហរដ្ឋអាមេរិកក្នុងឆ្នាំ 2002 និងបណ្ឌិតផ្នែកសេដ្ឋកិច្ចពីសាកលវិទ្យាល័យ Bristol ចក្រភពអង់គ្លេសក្នុងឆ្នាំ 2008 ។
                                </p>
                                <p>
                                        លោកបានទទួលការតែងតាំងជាមេបញ្ជាការកងកម្លាំងពិសេសប្រឆាំងភេរវកម្មជាតិរបស់កម្ពុជាដែលមានឋានៈជាវរសេនីយ៍ឯកក្នុងឆ្នាំ ២០០៨ ជាមួយនឹងការទទួលខុសត្រូវក្នុងការជួយកសាងសមត្ថភាពរបស់កម្ពុជាក្នុងការប្រយុទ្ធប្រឆាំងនឹងអំពើភេរវកម្ម។ លោកបានទទួលឋានន្តរស័ក្តិជាឧត្តមសេនីយឯកក្នុងខែមិថុនា ឆ្នាំ២០១៣ ភ្លាមៗបន្ទាប់ពីត្រូវបានតែងតាំងជាអគ្គមេបញ្ជាការរងនៃកងយោធពលខេមរភូមិន្ទ និងជានាយរងសេនាធិការចម្រុះនៃកងយោធពលខេមរភូមិន្ទ។ ក្នុង​អំឡុង​ការ​ប្រឈម​មុខ​ដាក់​គ្នា​រវាង​កម្ពុជា-ថៃ ឆ្នាំ ២០០៨-២០១១ លោក ហ៊ុន ម៉ាណែត បាន​ដើរ​តួនាទី​យ៉ាង​សំខាន់​ក្នុង​ការ​ចរចា​ដើម្បី​បញ្ចប់​ការ​ប្រឈម​មុខ​ដាក់​គ្នា។ លោក​ក៏​បាន​ចូលរួម​យ៉ាង​ខ្លាំង​ជាមួយ​នឹង​ដំណើរការ​កំណែទម្រង់​កងយោធពល​ខេមរភូមិន្ទ ជាពិសេស​ផ្តោត​លើ​មន្ត្រី​យោធា និង​ទាហាន​វ័យក្មេង។ ក្រៅ​ពី​កាតព្វកិច្ច​យោធា​អាជីព លោក​បាន​ចូល​រួម​យ៉ាង​សកម្ម​ជាមួយ​នឹង​កម្មវិធី​សង្គម​ជា​ច្រើន។ លោកជាប្រធានគណៈកម្មាធិការអាហារូបករណ៍សម្តេចតេជោ ហ៊ុន សែន និងសមាគមអាហារូបករណ៍សម្តេចតេជោ ដែលផ្តល់ឱកាសអាហារូបករណ៍ដល់យុវជនកម្ពុជារាប់ពាន់នាក់បានទៅសិក្សានៅសាកលវិទ្យាល័យនានាទូទាំងប្រទេសកម្ពុជា។ លោកក៏ជាប្រធានក្រុមប្រឹក្សាភិបាលនៃសមាគមគ្រូពេទ្យស្ម័គ្រចិត្តយុវជនសម្តេចតេជោ (TYDA) ដែលប្រមូលផ្តុំគ្រូពេទ្យ និស្សិតពេទ្យ និងអ្នកស្ម័គ្រចិត្តរាប់ពាន់នាក់ ដើម្បីជួយផ្តល់សេវាថែទាំសុខភាពដោយឥតគិតថ្លៃដល់ប្រជាជនកម្ពុជានៅតាមជនបទទូទាំងប្រទេស។ លោក​ក៏​បាន​ចូលរួម​ជាមួយ​សកម្មភាព​មួយ​ចំនួន​ទៀត​ដើម្បី​លើក​កម្ពស់​សកម្មភាព​មនុស្សធម៌​សម្រាប់​មណ្ឌល​កុមារ​កំព្រា និង​ជន​ពិការ។ លោក​បាន​រៀប​ការ​ជាមួយ ពេជ្រ ច័ន្ទមុនី។
                                </p>
                                <img src="' . asset('assets/images/prime-minister/HunManet-01.jpg') . '" alt="">
                                <p>
                                        កាលពីថ្ងៃទី ៣០ ខែមិថុនា ឆ្នាំ ២០១៨ ប៉ុន្មានសប្តាហ៍មុនការបោះឆ្នោតសភា លោក ហ៊ុន សែន បានតែងតាំងកូនប្រុសច្បងទី២ គឺលោក ហ៊ុន ម៉ាណែត ឲ្យឡើងកាន់តំណែងជាយោធាជាន់ខ្ពស់ ក្នុងគោលបំណងរៀបចំកូនប្រុសរបស់លោកធ្វើជានាយករដ្ឋមន្ត្រី នៅពេលលោកចូលនិវត្តន៍ក្នុងឆាកនយោបាយ ឬទទួលមរណភាព។ ក្នុងប្រទេសកម្ពុជា។[6] លោក​ត្រូវ​បាន​លោក ហ៊ុន សែន ចាត់​ទុក​ថា ជា​អ្នក​ស្នង​តំណែង​ដ៏​មាន​សក្តានុពល​របស់​លោក។
                                </p>
                                        ',
                    'en' => '<p>
                        Hun Manet was born on 20 October 1977 in Koh Thmar Village, Memot District, Kampong Cham Province during the Khmer Rouge rule of Cambodia as the second son of Hun Sen and Bun Rany. On the night of his birth, a bright light flew over the roof of the house, of which Hun Sen believed his son was born from a supernatural being that is worshipped in Koh Thmar Village.
                                        </p>
                                        <p>
                                                He grew up and received his General Education in Phnom Penh and later joined the Royal Cambodian Armed Forces in 1995, the same year he entered the United States Military Academy at West Point. Having received his diploma in May 1999, Hun Manet became the first Cambodian graduate of the Academy. He is the first Cambodia alumnus of the academy, and one of only seven foreign cadets to graduate that year. Upon graduation from West Point, he received his bachelor`s degree in Economics and a commission as Lieutenant in the Royal Cambodian Army. He also received his Master of Arts in Economics from New York University, US, in 2002, and a PhD in Economics from University of Bristol, United Kingdom, in 2008.
                                        </p>
                                        <p>
                                                He received appointment as the Commander of Cambodia`s National Counter-Terrorism Special Forces with the rank of Colonel in 2008, with the responsibility to help build Cambodia`s capability to fight against terrorism. He earned the rank of Lieutenant General in June 2013, shortly after being named Deputy Commander of the Royal Cambodian Army and Deputy Chief of Joint Staff of the RCAF. During the 2008-2011 Cambodia-Thai confrontation, Hun Manet played a prominent role in negotiations to end the stand-off. He is also very involved with reforming process of the RCAF, especially focusing on young military officers and soldiers. Apart from professional military duties, he is actively involved with many social programs. He is the Chief of the Samdech Techo Hun Sen Scholarship Committee and the Samdech Techo Scholarship Association, which provides scholarship opportunities to thousands of Cambodian youths to study at universities across Cambodia. He is also the chairman of the Board of Directors of the Samdech Techo Youth Volunteer Doctor Association (TYDA), which mobilizes thousands of medical professionals, medical students and volunteers to help provide free healthcare to rural Cambodians throughout the country. He is also engaged with a number of other activities to promote humanitarian activities for orphanages and handicaps. He is married to Pich Chanmony.
                                        </p>
                                        <img src="' . asset('assets/images/prime-minister/HunManet-01.jpg') . '" alt="">
                                        <p>
                                                On 30 June 2018, weeks before the parliamentary elections, Hun Sen appointed his second eldest son, Hun Manet, into higher military positions in a bid to prepare his son for the premiership when he retires in politics or dies, effectively solidifying the Hun political dynasty in Cambodia. He has been mentioned by Hun Sen as his potential successor.
                                        </p>
                                      ',
                ],
                'article_by' => 'Admin',
                'comments' => '10',
                'date' => Carbon::create(2024, 1, 10, 0, 0, 0),
            ],
        ];

        $article_id = $id;
        $category_name = $category;
        $category_id = null;

        foreach ($data['category'] as $category) {
            if ($category->slug === $category_name) {
                $category_id = $category->id;
                break;
            }
        }

        $detail = null;
        foreach ($data['articles'] as $article) {
            if ($article->category_id === $category_id && $article->id == $article_id) {
                $detail = $article;
                break;
            }
        }

        $data['details'] = $detail;
        return view('website::pages.details.index', $data);
    }
}
