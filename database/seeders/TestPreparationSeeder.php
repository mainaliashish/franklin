<?php

namespace Database\Seeders;

use App\Models\TestPreparation;
use Illuminate\Database\Seeder;

class TestPreparationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_1 = TestPreparation::create([
            'test_name' => 'IELTS',
            'slug' => 'ielts',
            'test_image' => '',
            'test_description' => 'Elit proident cupidatat proident commodo nostrud qui do do in culpa consectetur ullamco mollit. Cupidatat pariatur sunt deserunt anim enim quis cupidatat adipisicing commodo aliqua amet mollit exercitation id. Fugiat fugiat aute laborum elit occaecat commodo elit commodo enim.',
            'test_modules' => 'Sint duis aliqua ad sit do deserunt officia minim. Incididunt incididunt consequat non ea culpa eu esse excepteur consectetur reprehenderit ut fugiat anim. Irure ad Lorem labore enim est sit est ad amet minim officia id quis ea. Cupidatat velit in sunt cupidatat ex velit laborum.',
            'test_module_image' => '',
            'test_results' => 'Exercitation ad in esse nostrud proident. Est laborum officia culpa nulla consequat dolore mollit ad nulla tempor veniam est. Non nulla eiusmod minim sint mollit reprehenderit nostrud cupidatat commodo. Ex aliqua veniam culpa quis et excepteur reprehenderit labore pariatur exercitation sit minim nulla mollit. Mollit ea commodo deserunt occaecat deserunt est magna do ea. Nulla fugiat occaecat ex aute consequat sint eiusmod ea.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
        $test_2 = TestPreparation::create([
            'test_name' => 'PTE',
            'slug' => 'pte',
            'test_image' => '',
            'test_description' => 'Elit proident cupidatat proident commodo nostrud qui do do in culpa consectetur ullamco mollit. Cupidatat pariatur sunt deserunt anim enim quis cupidatat adipisicing commodo aliqua amet mollit exercitation id. Fugiat fugiat aute laborum elit occaecat commodo elit commodo enim.',
            'test_modules' => 'Sint duis aliqua ad sit do deserunt officia minim. Incididunt incididunt consequat non ea culpa eu esse excepteur consectetur reprehenderit ut fugiat anim. Irure ad Lorem labore enim est sit est ad amet minim officia id quis ea. Cupidatat velit in sunt cupidatat ex velit laborum.',
            'test_module_image' => '',
            'test_results' => 'Exercitation ad in esse nostrud proident. Est laborum officia culpa nulla consequat dolore mollit ad nulla tempor veniam est. Non nulla eiusmod minim sint mollit reprehenderit nostrud cupidatat commodo. Ex aliqua veniam culpa quis et excepteur reprehenderit labore pariatur exercitation sit minim nulla mollit. Mollit ea commodo deserunt occaecat deserunt est magna do ea. Nulla fugiat occaecat ex aute consequat sint eiusmod ea.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',        
        ]);
        $test_3 = TestPreparation::create([
            'test_name' => 'GMAT',
            'slug' => 'gmat',
            'test_image' => '',
            'test_description' => 'Elit proident cupidatat proident commodo nostrud qui do do in culpa consectetur ullamco mollit. Cupidatat pariatur sunt deserunt anim enim quis cupidatat adipisicing commodo aliqua amet mollit exercitation id. Fugiat fugiat aute laborum elit occaecat commodo elit commodo enim.',
            'test_modules' => 'Sint duis aliqua ad sit do deserunt officia minim. Incididunt incididunt consequat non ea culpa eu esse excepteur consectetur reprehenderit ut fugiat anim. Irure ad Lorem labore enim est sit est ad amet minim officia id quis ea. Cupidatat velit in sunt cupidatat ex velit laborum.',
            'test_module_image' => '',
            'test_results' => 'Exercitation ad in esse nostrud proident. Est laborum officia culpa nulla consequat dolore mollit ad nulla tempor veniam est. Non nulla eiusmod minim sint mollit reprehenderit nostrud cupidatat commodo. Ex aliqua veniam culpa quis et excepteur reprehenderit labore pariatur exercitation sit minim nulla mollit. Mollit ea commodo deserunt occaecat deserunt est magna do ea. Nulla fugiat occaecat ex aute consequat sint eiusmod ea.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',        
        ]);
    }
}
