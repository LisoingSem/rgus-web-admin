<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimeMinisterController extends Controller
{
    public function index()
    {
        $data['image'] = app()->getLocale() === 'km' ? 'assets/images/prime-minister/km-hun-manet.png' : 'assets/images/prime-minister/en-hun-manet.png';
        //$data['biography'] = (object) [
        //    'id' => 1,
        //    'header' => (object) [
        //        'km' => 'សម្តេចមហាបវរធិបតី ហ៊ុន ម៉ាណែត',
        //        'en' => 'Samdech Moha Borvor Thipadei HUN MANET',
        //    ],
        //    'description' => (object) [
        //        'km' => '<p>
        //            សម្តេចកិត្តិព្រឹទ្ធបណ្ឌិត ហ៊ុន ម៉ាណែត នឹងក្លាយជានាយករដ្ឋមន្ត្រីទី៣៣
        //                                         កម្ពុជា​កើត​នៅ​ថ្ងៃ​ព្រហស្បតិ៍ ទី​២០ ខែ​តុលា ឆ្នាំ​១៩៧៧ ក្នុង​ត្រកូល ហ៊ុន សែន ដែល​មាន​អាយុ​ប៉ុន្មាន​ឆ្នាំ
        //                                         ក្រោយ​មក​បាន​ក្លាយ​ជា “បុរស​ខ្លាំង​នៃ​ប្រទេស​កម្ពុជា” — និង​ភរិយា​របស់​លោក ប៊ុន រ៉ានី។
        //                                </p>
        //                                <p>
        //                                    ប៊ុន រ៉ានី ត្រូវ​សម្រាល​កូន​ប្រុស​នៅ​ខ្ទម​តូច​មួយ​នៅ​ភូមិ​កោះថ្ម។
        //                                         ស្រុកមេមត់ ខេត្តកំពង់ចាម (ឥឡូវខេត្តត្បូងឃ្មុំ) ពេលកំពុងរស់នៅ
        //                                         ក្រោមរបបខ្មែរក្រហម។
        //                                </p>

        //                                <p>
        //                                        លោក ហ៊ុន សែន មិន​មាន​វត្តមាន​ក្នុង​អំឡុង​ពេល​សម្រាល​កូន​របស់​លោក​ទេ ខណៈ​លោក​កំពុង​ធ្វើ​ជា​ប្រវត្តិសាស្ត្រ
        //                                         ដំណើរដែលនៅទីបំផុតនឹងនាំទៅដល់ការផ្តួលរំលំរបបប្រជាធិបតេយ្យប្រល័យពូជសាសន៍
        //                                         កម្ពុជា។ ទោះ​ជា​យ៉ាង​ណា លោក​បាន​និយាយ​ក្រោយ​មក​ថា លោក​ជឿ​ថា លោក ហ៊ុន ម៉ាណែត ប្រហែល​ជា
        //                                         កើត​ចេញ​ពី​វិញ្ញាណ​ដ៏​ខ្លាំង​ក្លា​ដែល​បង្ហាញ​ខ្លួន​ជា​ពន្លឺ​ដែល​បាញ់
        //                                         ចេញពី​ដើម​ចេក ហើយ​ឆ្លង​កាត់​ផ្ទះ​នៅពេល​នោះ​កូនប្រុស​គាត់​
        //                                         បានចូលទៅក្នុងពិភពលោក។
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-01.jpg" alt="">

        //                                <p>
        //                                    លោក ហ៊ុន សែន បាន​មាន​ប្រសាសន៍​កាល​ពី​ឆ្នាំ​២០១៣​ថា​៖ «​ម៉ាណែត​អាច​ជា​កូន​អ្នក​តា​អញ្ចាញ​កោះ​ថ្ម»។
        //                                         សំដៅ​ដល់​វិញ្ញាណ​ដែល​គេ​បូជា​នៅ​អាសនៈ​ក្រោម​ដើម​ចេក​ក្នុង​
        //                                         ភូមិកោះថ្ម ស្រុកមេមត់។
        //                                </p>
        //                                <p>
        //                                    ក្នុង​នាម​ជា​ទារក​និង​កុមារ​ទើប​ចេះ​ដើរ​តេះតះ លោក ម៉ាណែត បាន​ឆ្លង​កាត់​ទុក្ខ​លំបាក​ពេល​រស់​នៅ​ជាមួយ
        //                                         ម្តាយ​គាត់​ដូច​ឪពុក​គាត់​នៅ​ឆ្ងាយ​តស៊ូ​រំដោះ​ជាតិ។ នាយករដ្ឋមន្ត្រី
        //                                         លោក​រដ្ឋមន្ត្រី ហ៊ុន សែន ថ្លែង​ក្រោយ​មក​ថា លោក​តែងតែ​អាណិត​លោក ម៉ាណែត ដែល​កើត​មក
        //                                         នៅក្នុងពេលវេលាដ៏វឹកវរនៃពលកម្មដោយបង្ខំ កង្វះអាហារូបត្ថម្ភ ជំងឺ និងការប្រហារជីវិត។
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-02.jpg" alt="">

        //                                <p>
        //                                    ម៉ាណែត មាន​អាយុ​ពីរ​ឆ្នាំ ពេល​គាត់​បាន​ជួប​ឪពុក​ម្ដង​ទៀត​ក្នុង​ខែ​កុម្ភៈ ឆ្នាំ​១៩៧៩។
        //                                         មួយខែបន្ទាប់ពីប្រទេសនេះត្រូវបានរំដោះចេញពីការក្តាប់នៃរបបនេះ។
        //                                         ក្រុមជ្រុលនិយមម៉ៅនិយម។ នេះ​បើ​តាម​ការ​លើក​ឡើង​របស់​លោក​នាយក​រដ្ឋមន្ត្រី ហ៊ុន ម៉ាណែត
        //                                         ឪពុករបស់គាត់ជា "ពូ" នៅពេលពួកគេជួបគ្នាដំបូង។
        //                                </p>

        //                                <p>លោក ម៉ាណែត បានចាប់ផ្តើមការសិក្សាជាផ្លូវការនៅសាលាបឋមសិក្សាចតុមុខក្នុងឆ្នាំ 1980 និង
        //                                         បន្ទាប់​មក​បាន​ចុះ​ឈ្មោះ​ចូល​រៀន​នៅ Lycée Sisowath ក្នុង​ឆ្នាំ ១៩៩០។</p>
        //                                <p>ពេល​បញ្ចប់​មធ្យមសិក្សា​ទុតិយភូមិ លោក ម៉ាណែត បាន​ចូល​បម្រើ​ការងារ​ក្នុង​កងយោធពលខេមរភូមិន្ទ
        //                                         កងកម្លាំង (RCAF) ។ ក្នុង​ឆ្នាំ​ដដែល​នោះ លោក​ក៏​បាន​ចូល​បម្រើ​យោធា​ដ៏​មាន​កិត្យានុភាព
        //                                         បណ្ឌិតសភានៅសហរដ្ឋអាមេរិក។</p>
        //                                <p>ប្រាំឆ្នាំក្រោយមក គាត់បានក្លាយជានិស្សិតខ្មែរដំបូងគេបង្អស់នៃបណ្ឌិត្យសភា និងជានិស្សិតម្នាក់ក្នុងចំណោម
        //                                         កម្មាភិបាល​បរទេស​តែ​ប្រាំពីរ​នាក់​ប៉ុណ្ណោះ​ដែល​បាន​បញ្ចប់​ការ​សិក្សា​នៅ​ឆ្នាំ​នោះ។</p>
        //                                <p>ក្នុងឆ្នាំ 1999 គាត់បានទទួលបរិញ្ញាបត្រផ្នែកសេដ្ឋកិច្ច។</p>
        //                                <p>សូម្បី​តែ​ចូល​បម្រើ​កងទ័ព​ក៏​លោក ម៉ាណែត បាន​បន្ត​ការ​សិក្សា។</p>

        //                                <img src="assets/images/prime-minister/HunManet-03.jpg" alt="">

        //                                <p>នៅឆ្នាំ ២០០២ គាត់បានទទួលសញ្ញាប័ត្រអនុបណ្ឌិតផ្នែកសេដ្ឋកិច្ចពីសាកលវិទ្យាល័យញូវយ៉ក សហរដ្ឋអាមេរិក និង
        //                                         ក្នុងឆ្នាំ ២០០៩ គាត់បានទទួលសញ្ញាប័ត្របណ្ឌិតផ្នែកសេដ្ឋកិច្ចពីសាកលវិទ្យាល័យ Bristol ចក្រភពអង់គ្លេស។
        //                                         និក្ខេបបទថ្នាក់បណ្ឌិតរបស់គាត់មានចំណងជើងថា "អ្វីដែលកំណត់ទំហំរឹងមាំ
        //                                         ការចែកចាយ និងការរួមបញ្ចូលរចនាសម្ព័ន្ធ? ការសិក្សាឆ្លងស្រុក” (មាននៅលើ
        //                                         គេហទំព័ររបស់ Bristol) ។</p>
        //                                <p>ក្រោយ​ត្រឡប់​មក​កម្ពុជា​វិញ​បាន​តែ​មួយ​ខែ​ប៉ុណ្ណោះ​ត្រូវ​បាន​តែងតាំង​ជា​មេ​បញ្ជាការ​រង​
        //                                         កងយោធពលខេមរភូមិន្ទ និងជានាយរងសេនាធិការចម្រុះនៃកងយោធពលខេមរភូមិន្ទ គឺលោក ហ៊ុន ម៉ាណែត
        //                                         បានឡើងឋានន្តរស័ក្តិជា ឧត្តមសេនីយទោ នៅខែមករា ឆ្នាំ២០១១។</p>
        //                                <p>លោកបានក្លាយជាឧត្តមសេនីយឯកនៅខែមិថុនា ឆ្នាំ ២០១៣ ហើយនៅខែកក្កដា ឆ្នាំ ២០១៩ ត្រូវបានតែងតាំងជា អនុ
        //                                         អគ្គមេបញ្ជាការនៃកងយោធពលខេមរភូមិន្ទ (RFAC)។ នៅថ្ងៃទី២០ ខែមេសា គ.
        //                                         ឆ្នាំ 2023 គាត់ត្រូវបានដំឡើងឋានៈជាឧត្តមសេនីយ៍ផ្កាយបួន។
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-04.jpg" alt="">

        //                                <p>ចំណែក​អាជីព​នយោបាយ​វិញ លោក ហ៊ុន ម៉ាណែត បាន​ក្លាយ​ជា​ប្រធាន​ក្រុម​យុវជន​របស់​គណបក្ស​ប្រជាជន​កម្ពុជា កាល​ពី​ខែ​មិថុនា
        //                                         ឆ្នាំ ២០២០ ហើយនៅឆ្នាំ ២០២១ លោកត្រូវបានគណៈកម្មាធិការកណ្តាលរបស់គណបក្សប្រជាជនកម្ពុជាជ្រើសរើសជាឯកច្ឆ័ន្ទជា
        //                                         បេក្ខភាពនាយករដ្ឋមន្ត្រីនាពេលអនាគតរបស់ខ្លួន។</p>

        //                                <p>លោក​បាន​ឡើង​កាន់​តំណែង​ជា​នាយក​រដ្ឋមន្ត្រី ហ៊ុន សែន ជា​ផ្លូវ​ការ​ដែល​បាន​ដឹក​នាំ​ប្រទេស​ជាង ៤៤​ឆ្នាំ
        //                                         ប៉ុន្មានឆ្នាំបន្ទាប់ពីត្រូវបានតែងតាំងជានាយករដ្ឋមន្ត្រីនៃប្រទេសកម្ពុជាដោយព្រះបាទនរោត្តម
        //                                         សីហមុនី ថ្ងៃទី ៧ ខែ កក្កដា ឆ្នាំ ២០២៣។</p>
        //                                <p>លោក ហ៊ុន ម៉ាណែត បាន​រៀបការ​ជាមួយ​អ្នកស្រី ពេជ្រ ច័ន្ទមុនី ជា​កូន​ស្រី​របស់​អ្នកស្រី ពេជ្រ សោភ័ណ្ឌ អតីត​លេខា
        //                                         ប្រកាសនៅក្រសួងការងារ ហើយអ្នកណានឹងក្លាយជាជំទាវទីមួយថ្មីរបស់
        //                                         កម្ពុជា។ រួម​គ្នា​មាន​កូន​បី​នាក់​គឺ​កូន​ស្រី​ពីរ​នាក់​ប្រុស​ម្នាក់។</p>',
        //        'en' => '<p>
        //                                        Kitti Tesaphibal Hun Manet, who would become the 33rd Prime Minister of
        //                                        Cambodia, was born on Thursday, October 20, 1977, to Comrade Hun Sen who years
        //                                        later became the “Strongman of Cambodia” —and his wife Bun Rany.
        //                                </p>
        //                                <p>
        //                                        Bun Rany had to give birth to her son in a small cottage in Koh Thmar Village,
        //                                        Memot District, Kampong Cham Province (Now Tbong Kmom Province) while living
        //                                        under the ruthless regime of the Khmer Rouge.
        //                                </p>

        //                                <p>
        //                                        Mr Hun Sen was not present during the birth of his son as he was on a historic
        //                                        journey that would eventually led to the overthrow of the genocidal Democratic
        //                                        Kampuchea. However, he said later that he believed Mr Hun Manet was probably
        //                                        born from a powerful spirit that revealed itself as a flashing light that shot
        //                                        out of a banana tree and passed over the house at the very moment his son
        //                                        entered the world.
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-01.jpg" alt="">

        //                                <p>
        //                                        “Manet may be the child of Neak Ta Anchanh Koh Thmar,” Mr Hun Sen said in 2013,
        //                                        referring to a spirit that is worshipped at an altar under a banana tree in
        //                                        Memot district’s Koh Thmar village.
        //                                </p>
        //                                <p>
        //                                        As an infant and toddler, Mr Manet had gone through hardship while living with
        //                                        his mother, as his father was away fighting to liberate the nation. Prime
        //                                        Minister Hun Sen said later that he always felt sorry for Mr Manet, who was born
        //                                        in a chaotic time of forced labour, malnutrition, diseases and execution.
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-02.jpg" alt="">

        //                                <p>
        //                                        Manet was two years old when he was reunited with his father in February 1979,
        //                                        just a month after the country was liberated from the clutches of the
        //                                        ultra-Maoist group. According to the Prime Minister’s memoir, Manet addressed
        //                                        his father as “Uncle” when they first met.
        //                                </p>

        //                                <p>Mr Manet officially started his schooling at Chaktomuk Primary School in 1980 and
        //                                        then enrolled at Lycée Sisowath in 1990.</p>
        //                                <p>Upon finishing his secondary education, Mr Manet joined the Royal Cambodian Armed
        //                                        Forces (RCAF). In the same year, he also entered the prestigious Military
        //                                        Academy in the United States.</p>
        //                                <p>Five years later, he became the first Cambodian graduate of the academy and one of
        //                                        the only seven foreign cadets to graduate that year.</p>
        //                                <p>Also in 1999, he received his bachelor’s degree in economics.</p>
        //                                <p>Even after joining the army, Mr Manet continued his education.</p>

        //                                <img src="assets/images/prime-minister/HunManet-03.jpg" alt="">

        //                                <p>In 2002, he received a Master of Arts in economics from New York University, US, and
        //                                        in 2009, he was awarded a PhD in economics from the University of Bristol, UK.
        //                                        His doctoral dissertation is entitled, “What determines the firm size
        //                                        distribution and structural integration? A cross-county study” (Available on
        //                                        Bristol’s website).</p>
        //                                <p>After returning to Cambodia, just a month after being named Deputy Commander of the
        //                                        Royal Cambodian Army and Deputy Chief of the RCAF Joint Staff, Mr Hun Manet was
        //                                        promoted to Major General in January 2011.</p>
        //                                <p>He became a Lieutenant General in June 2013 and, in July 2019, was promoted to Deputy
        //                                        Commander-in-Chief of the Royal Cambodian Armed Forces (RFAC). On April 20,
        //                                        2023, he was promoted to a four-star general.
        //                                </p>

        //                                <img src="assets/images/prime-minister/HunManet-04.jpg" alt="">

        //                                <p>As for his political career, Mr Hun Manet became head of the CPP’s youth wing in June
        //                                        2020, and in 2021, he was chosen by the CPP’s Central Committee unanimously as
        //                                        its Future Prime Minister Candidate.</p>

        //                                <p>He officially succeeded Prime Minister Hun Sen, who had led the country for over 44
        //                                        years, after having been appointed as the Premier of Cambodia by King Norodom
        //                                        Sihamoni on July 7, 2023.</p>
        //                                <p>Mr Hun Manet married Pich Chanmony, daughter of Pich Sophoan, a former secretary of
        //                                        state at the Ministry of Labour, and who will soon be the new First Lady of
        //                                        Cambodia. Together, they have three children: two daughters and a son.</p>',
        //    ],
        //];

        $data['biography'] = (object) [
            'id' => 1,
            'header' => (object) [
                'km' => 'សម្តេចមហាបវរធិបតី ហ៊ុន ម៉ាណែត',
                'en' => 'Samdech Moha Borvor Thipadei HUN MANET',
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
                                        <p>
                                                On 30 June 2018, weeks before the parliamentary elections, Hun Sen appointed his second eldest son, Hun Manet, into higher military positions in a bid to prepare his son for the premiership when he retires in politics or dies, effectively solidifying the Hun political dynasty in Cambodia. He has been mentioned by Hun Sen as his potential successor.
                                        </p>
                                      ',
            ],
        ];

        $data['socials'] = [
            (object) [
                'id' => 1,
                'name' => (object) [
                    'km' => 'ហ្វេសប៊ុក',
                    'en' => 'Facebook',
                ],
                'link' => 'https://www.facebook.com/Dr.Hunmanetofcambodia',
                'image' => 'assets/images/social/facebook.png',
            ],
            (object) [
                'id' => 2,
                'name' => (object) [
                    'km' => 'ធ្វីតទឺ',
                    'en' => 'Twitter ',
                ],
                'link' => 'https://twitter.com/Dr_Hunmanet_PM?fbclid=IwAR07piMFVRL38Cc20Ap6aDIYqsfC1MmzMoxpNtKt-VfSgWuUJ_ORFAObYl0',
                'image' => 'assets/images/social/twitter.png',
            ],
            (object) [
                'id' => 3,
                'name' => (object) [
                    'km' => 'យូធូប ',
                    'en' => 'youtube ',
                ],
                'link' => 'https://www.youtube.com/@Dr.Hunmanetofcambodia',
                'image' => 'assets/images/social/youtube.png',
            ],
            (object) [
                'id' => 4,
                'name' => (object) [
                    'km' => 'អ៊ីនស្ដារក្រាម ',
                    'en' => 'instagram ',
                ],
                'link' => 'https://www.instagram.com/dr.hunmanetofcambodia/?fbclid=IwAR3hioHlFAVslkqaldGyTKL_aIcLsxpxTe9r22EGyw04lHonccUUw7CZAvE',
                'image' => 'assets/images/social/instagram.png',
            ],
            (object) [
                'id' => 5,
                'name' => (object) [
                    'km' => 'គេហទំព័រ',
                    'en' => 'website ',
                ],
                'link' => 'http://www.hunmanet.kh/?fbclid=IwAR1Ykgh9nKG5a3LfCYW6PNhBPwpc8SzKG8NcVg24nAfN0fVBJrBYvhrukII',
                'image' => 'assets/images/social/website.png',
            ],
            (object) [
                'id' => 6,
                'name' => (object) [
                    'km' => 'តេលេក្រាម',
                    'en' => 'telegram ',
                ],
                'link' => 'https://t.me/Dr_Hunmanetofcambodia?fbclid=IwAR2XoXxybfkG9hyOW7Cjt_JFdWI1Zq2tRL7m3QuHopp8FzuTpd_r3wbgg5E',
                'image' => 'assets/images/social/telegram.png',
            ],
            (object) [
                'id' => 6,
                'name' => (object) [
                    'km' => 'តិកតុក',
                    'en' => 'tiktok ',
                ],
                'link' => 'https://www.tiktok.com/@dr.hunmanetofcambodia?fbclid=IwAR2XoXxybfkG9hyOW7Cjt_JFdWI1Zq2tRL7m3QuHopp8FzuTpd_r3wbgg5E',
                'image' => 'assets/images/social/tiktok.png',
            ],
        ];

        return view('website::pages.prime-minister.index', $data);
    }
}
