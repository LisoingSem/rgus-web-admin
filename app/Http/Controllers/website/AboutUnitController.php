<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUnitController extends Controller
{
    public function index()
    {
        $data['about_unit'] = (object) [
            'id' => 1,
            'description' => (object) [
                'en' => '<p> Personnel Department abbreviated as (AR)
                Established by Sub-Decree No. 1, dated Thursday. (A.R.)
                As a government official, apply words and information
                Aspects of employment provide national and international work in a remarkable way
                Information and Support Meetings Supporting Outcomes
                And Progress at the Fourth Summit of Government Policy
                6th date of the President. </p>
                <p> The truth is the contract of opinion at the Public Opinion Center
                      From pollution by withdrawing from the verb in the gate agreement
                      Of great astonishment, by the narrowness of the outer part of the pod, there is an official state of abundance.
                      Cooperation draws trust and the highest responsibility
                      Through Inspiration, Growth
                      That this beauty contributes so much to its viral damage
                      Pot is creative and Bot is reactive. </p>
                      <img src = "' . asset('assets/images/about-unit/01.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/02.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/03.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/04.jpg') . '" alt = "">
                      ',
                'km' => '
                <p> នាយកដ្ឋាន​បុគ្គលិក​ដែលមាន​អក្សរកាត់ថា (អ.អ.រ)​
                ត្រូវ​បាន​បង្កើត​ឡើង​ដោយ​អនុក្រឹត្យ​លេខ​១​អនក្រ.បក​ចុះ​ថ្ងៃ​ព្រហស្បតិ៍។ (អ.អ.រ)
                ជា​សេនាធិការ​រាជ​រដ្ឋាភិបាល​អនុវត្ត​ពាក្យ​និង​ព័ត៌មាន
                ទិដ្ឋភាព​នៃ​ការ​ងារ​ផ្តល់​ឱ្យ​ជន​ជាតិ​និង​អន្តរជាតិ​ក្នុង​កិច្ច​ការ​គួរ​ឱ្យ​កត់​សម្គាល់​យ៉ាង​ខ្លាំង
                កិច្ច​ប្រជុំ​ព័ត៌មាន​ព័ត៌មាន​និង​ជំនួយ​គាំទ្រ​អំពី​អ្វី​ដែល​ជា​លទ្ធផល​នៃ​សមិទ្ធផល
                និង​វឌ្ឍនភាព​ក្នុង​កិច្ច​ប្រជុំ​កំពូល​ទី​៤​នៃ​គោល​នយោបាយ​របស់​រដ្ឋាភិបាល
                កាលបរិច្ឆេទទី 6 នៃលោកស្រីប្រធានាធិបតី។</p>
            <p> ការពិត​គឺ​ជា​កិច្ច​សន្យា​ផ្តល់​មតិ​នៅ​មជ្ឈិម​ដ្ឋាន​រណ្ដៅ​សិលា​មតិ​សាធារណៈ
                ពី​ការ​បំពុល​ដោយ​មាន​ការ​ដក​ខ្លួន​ចេញ​ពី​កិរិយា​ស័ព្ទ​ក្នុង​កិច្ច​ព្រម​ព្រៀង​នៅ​ច្រក​ទ្វារ
                នៃ​ភាព​អស្ចារ្យ​ដោយ​ភាព​ចង្អៀត​ទូ​ទាំង​ផ្នែក​ខាង​ក្រៅ​នៃ​ផត​មាន​ផ្លូវ​ការ​របស់​រដ្ឋ​ដែល​មាន​ច្រើន​ខ្លាំង។
                កិច្ចសហប្រតិបត្តិការ ទាញ​យក​ភាព​ជឿ​ទុក​ចិត្ត និង​ជា​អ្នក​ទទួល​ខុស​ត្រូវ​ខ្ពស់​បំផុត​
                តាម​រយៈ​ការ​បំផុស​គំនិត​ផ្ដល់​ភាព​រីក​ចម្រើន
                ដែល​ភាព​ស្រស់​ស្អាត​នេះ​ចូល​រួម​យ៉ាង​ខ្លាំង​ក្នុង​ការ​ខូច​ខាត​របស់​ខ្លួន​មាន​មេរោគ
                ប៉ោត មានប្រឌិត និង បូត មានប្រតិកិរិយា។</p>
                <img src = "' . asset('assets/images/about-unit/01.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/02.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/03.jpg') . '" alt = "">
                      <img src = "' . asset('assets/images/about-unit/04.jpg') . '" alt = "">
                ',
            ],
        ];

        return view('website::pages.about-unit.index', $data);
    }
}
