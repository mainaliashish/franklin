<?php

namespace Database\Seeders;

use App\Models\StudyAbroad;
use Illuminate\Database\Seeder;

class StudyAbroadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $study_uk = StudyAbroad::create([
            'country_name' => 'UK',
            'slug' => 'uk',
            'country_description' => 'Irure veniam magna incididunt id labore cillum velit ut ea exercitation ea nisi. Aliqua ut excepteur do non ipsum occaecat amet consectetur non sunt velit ea adipisicing. Ipsum minim culpa nisi aute ut qui commodo incididunt. Ex ut laboris veniam excepteur aute amet eu non proident laborum excepteur in qui cupidatat. Cillum id fugiat ut consectetur do elit cillum voluptate aute veniam excepteur non. Nulla incididunt sit anim nulla est reprehenderit enim tempor magna ut officia.',
            'country_image' => '',
            'education_system' => 'Ut proident incididunt aute do aute sunt excepteur ut magna. Reprehenderit exercitation cupidatat ad eu anim. Ullamco aliqua cupidatat nostrud sint proident et esse adipisicing ut deserunt minim. Elit in et labore occaecat deserunt eiusmod dolore ad non. Et proident voluptate aliquip aute ex consequat aliquip enim eu sit. Exercitation dolor cupidatat proident consequat nisi id enim tempor esse voluptate ut. Laborum ex id et adipisicing cupidatat in aute non dolore magna elit enim.',
            'education_system_image' => '',
            'cost_of_studies' => 'Quis irure consequat veniam eu. Laboris magna consectetur nulla aute. Ullamco irure aliquip ex non magna mollit est reprehenderit eu qui aute incididunt cupidatat. Culpa enim sint pariatur nulla eu laborum in velit laborum. Amet commodo culpa consequat enim proident magna aute ad est ea occaecat et officia. Cillum eiusmod anim dolore ex do fugiat laborum deserunt.',
            'cost_of_studies_image' => '',
            'living_and_working' => 'Eu fugiat aute ullamco irure nisi ullamco adipisicing proident labore Lorem eu dolore laboris. Consectetur sunt est anim cupidatat nulla nostrud. Non excepteur in enim excepteur enim labore deserunt laborum velit ex. Tempor cillum duis eu tempor occaecat culpa ut non id irure qui dolore. Exercitation excepteur minim officia et occaecat et ut Lorem velit proident mollit.',
            'visa_procedures' => 'Non ad pariatur ullamco mollit commodo ea ullamco laboris nostrud consequat enim qui. Ut culpa quis cillum quis. Lorem ut tempor nostrud sunt. Culpa sint pariatur velit do et minim occaecat sunt veniam ullamco proident mollit et consectetur. Magna quis reprehenderit elit commodo ullamco cupidatat deserunt pariatur ad excepteur consectetur id amet. Tempor aliquip exercitation reprehenderit sunt non duis fugiat esse sint culpa eiusmod. Duis exercitation est minim culpa Lorem amet irure qui.',
            'offered_courses' => 'Consequat voluptate est adipisicing dolor duis ad non in labore irure labore ea. Id elit proident ad ea labore officia nulla voluptate ullamco aliquip anim magna. Nulla irure velit cupidatat dolor aute cillum laboris ea ea fugiat nulla ea incididunt.',
            'popular_universities' => 'Nisi cillum nulla ad est. Commodo id fugiat aliqua nostrud. Proident minim reprehenderit magna consectetur cupidatat officia aliqua minim exercitation non non et aliquip enim. Aliqua quis aliquip ipsum do anim in eiusmod aliquip veniam sunt laboris id est.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);

        $study_india = StudyAbroad::create([
            'country_name' => 'India',
            'slug' => 'india',
            'country_description' => 'Irure veniam magna incididunt id labore cillum velit ut ea exercitation ea nisi. Aliqua ut excepteur do non ipsum occaecat amet consectetur non sunt velit ea adipisicing. Ipsum minim culpa nisi aute ut qui commodo incididunt. Ex ut laboris veniam excepteur aute amet eu non proident laborum excepteur in qui cupidatat. Cillum id fugiat ut consectetur do elit cillum voluptate aute veniam excepteur non. Nulla incididunt sit anim nulla est reprehenderit enim tempor magna ut officia.',
            'country_image' => '',
            'education_system' => 'Ut proident incididunt aute do aute sunt excepteur ut magna. Reprehenderit exercitation cupidatat ad eu anim. Ullamco aliqua cupidatat nostrud sint proident et esse adipisicing ut deserunt minim. Elit in et labore occaecat deserunt eiusmod dolore ad non. Et proident voluptate aliquip aute ex consequat aliquip enim eu sit. Exercitation dolor cupidatat proident consequat nisi id enim tempor esse voluptate ut. Laborum ex id et adipisicing cupidatat in aute non dolore magna elit enim.',
            'education_system_image' => '',
            'cost_of_studies' => 'Quis irure consequat veniam eu. Laboris magna consectetur nulla aute. Ullamco irure aliquip ex non magna mollit est reprehenderit eu qui aute incididunt cupidatat. Culpa enim sint pariatur nulla eu laborum in velit laborum. Amet commodo culpa consequat enim proident magna aute ad est ea occaecat et officia. Cillum eiusmod anim dolore ex do fugiat laborum deserunt.',
            'cost_of_studies_image' => '',
            'living_and_working' => 'Eu fugiat aute ullamco irure nisi ullamco adipisicing proident labore Lorem eu dolore laboris. Consectetur sunt est anim cupidatat nulla nostrud. Non excepteur in enim excepteur enim labore deserunt laborum velit ex. Tempor cillum duis eu tempor occaecat culpa ut non id irure qui dolore. Exercitation excepteur minim officia et occaecat et ut Lorem velit proident mollit.',
            'visa_procedures' => 'Non ad pariatur ullamco mollit commodo ea ullamco laboris nostrud consequat enim qui. Ut culpa quis cillum quis. Lorem ut tempor nostrud sunt. Culpa sint pariatur velit do et minim occaecat sunt veniam ullamco proident mollit et consectetur. Magna quis reprehenderit elit commodo ullamco cupidatat deserunt pariatur ad excepteur consectetur id amet. Tempor aliquip exercitation reprehenderit sunt non duis fugiat esse sint culpa eiusmod. Duis exercitation est minim culpa Lorem amet irure qui.',
            'offered_courses' => 'Consequat voluptate est adipisicing dolor duis ad non in labore irure labore ea. Id elit proident ad ea labore officia nulla voluptate ullamco aliquip anim magna. Nulla irure velit cupidatat dolor aute cillum laboris ea ea fugiat nulla ea incididunt.',
            'popular_universities' => 'Nisi cillum nulla ad est. Commodo id fugiat aliqua nostrud. Proident minim reprehenderit magna consectetur cupidatat officia aliqua minim exercitation non non et aliquip enim. Aliqua quis aliquip ipsum do anim in eiusmod aliquip veniam sunt laboris id est.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);

        $study_aus = StudyAbroad::create([
            'country_name' => 'Australia',
            'slug' => 'australia',
            'country_description' => 'Irure veniam magna incididunt id labore cillum velit ut ea exercitation ea nisi. Aliqua ut excepteur do non ipsum occaecat amet consectetur non sunt velit ea adipisicing. Ipsum minim culpa nisi aute ut qui commodo incididunt. Ex ut laboris veniam excepteur aute amet eu non proident laborum excepteur in qui cupidatat. Cillum id fugiat ut consectetur do elit cillum voluptate aute veniam excepteur non. Nulla incididunt sit anim nulla est reprehenderit enim tempor magna ut officia.',
            'country_image' => '',
            'education_system' => 'Ut proident incididunt aute do aute sunt excepteur ut magna. Reprehenderit exercitation cupidatat ad eu anim. Ullamco aliqua cupidatat nostrud sint proident et esse adipisicing ut deserunt minim. Elit in et labore occaecat deserunt eiusmod dolore ad non. Et proident voluptate aliquip aute ex consequat aliquip enim eu sit. Exercitation dolor cupidatat proident consequat nisi id enim tempor esse voluptate ut. Laborum ex id et adipisicing cupidatat in aute non dolore magna elit enim.',
            'education_system_image' => '',
            'cost_of_studies' => 'Quis irure consequat veniam eu. Laboris magna consectetur nulla aute. Ullamco irure aliquip ex non magna mollit est reprehenderit eu qui aute incididunt cupidatat. Culpa enim sint pariatur nulla eu laborum in velit laborum. Amet commodo culpa consequat enim proident magna aute ad est ea occaecat et officia. Cillum eiusmod anim dolore ex do fugiat laborum deserunt.',
            'cost_of_studies_image' => '',
            'living_and_working' => 'Eu fugiat aute ullamco irure nisi ullamco adipisicing proident labore Lorem eu dolore laboris. Consectetur sunt est anim cupidatat nulla nostrud. Non excepteur in enim excepteur enim labore deserunt laborum velit ex. Tempor cillum duis eu tempor occaecat culpa ut non id irure qui dolore. Exercitation excepteur minim officia et occaecat et ut Lorem velit proident mollit.',
            'visa_procedures' => 'Non ad pariatur ullamco mollit commodo ea ullamco laboris nostrud consequat enim qui. Ut culpa quis cillum quis. Lorem ut tempor nostrud sunt. Culpa sint pariatur velit do et minim occaecat sunt veniam ullamco proident mollit et consectetur. Magna quis reprehenderit elit commodo ullamco cupidatat deserunt pariatur ad excepteur consectetur id amet. Tempor aliquip exercitation reprehenderit sunt non duis fugiat esse sint culpa eiusmod. Duis exercitation est minim culpa Lorem amet irure qui.',
            'offered_courses' => 'Consequat voluptate est adipisicing dolor duis ad non in labore irure labore ea. Id elit proident ad ea labore officia nulla voluptate ullamco aliquip anim magna. Nulla irure velit cupidatat dolor aute cillum laboris ea ea fugiat nulla ea incididunt.',
            'popular_universities' => 'Nisi cillum nulla ad est. Commodo id fugiat aliqua nostrud. Proident minim reprehenderit magna consectetur cupidatat officia aliqua minim exercitation non non et aliquip enim. Aliqua quis aliquip ipsum do anim in eiusmod aliquip veniam sunt laboris id est.',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
    }
}
