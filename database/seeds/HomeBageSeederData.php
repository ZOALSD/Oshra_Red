<?php

use Illuminate\Database\Seeder;

class HomeBageSeederData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \App\Model\HomePage::create([
            'main_preghraph_ar' => 
            'نحن نمنح الناس المهارات اللازمة 
            للاستعداد والاستجابة للكوارث في جميع أنحاء العالم',
            'main_preghraph_en' => 'We give people the skills to be ready for
            and respond to disasters worldwide',
            'sub_preghraph_ar' => '40 عامًا من الخبرة في بناء قدرات العاملين في المجال الإنساني والمجتمعات المتضررة للاستجابة 
            للأزمات مثل الأعاصير والنزاعات وتفشي الأمراض 
            ، بما في ذلك COVID-19.',
            'sub_preghraph_en' => '40 years of experience building capacity 
            of humanitarian workers and affected communities 
            to respond to crises such as cyclones,
             conflict and disease outbreaks, including COVID-19.',
            'Where_we_work_ar' => 'نحن نقدم التدريب والدعم الإنساني حول 
            العالم ونعمل بشكل أساسي في البلدان النامية المعرضة 
            للكوارث الطبيعية الكبرى أو النزاعات أو تأثرت بها. 
            لدينا مكاتب برامج إقليمية 
            في المملكة المتحدة والأردن والسودان. نحن نقدم التدريب 
            والخدمات الاستشارية ودعم الخبراء على مستوى العالم.',
            'Where_we_work_en' => 'We deliver humanitarian training and support around the
            world working primarily in developing countries that are prone to or 
           have been affected by major natural disasters or conflict. We have
            regional programme offices in the UK, Jordan and Sudan. We deliver
             training, consultancy services and expert support globally.',
            'about_say_ar' => 'لقد أخذت ثلاث دورات RedR: تقييم الاحتياجات في حالات الطوارئ ، وتدريب المدربين ، وكتابة المقترحات والتقارير. كان المدربون دائما رائعين. لديهم الكثير من المعرفة ، وهم يعرفون كيفية مشاركتها وتعزيز مهاراتنا وقدرتنا في عملنا. لا نجد أي مراكز تدريب أخرى في السودان متخصصة في دورات للمنظمات غير الحكومية والمنظمات الإنسانية. لقد عدت لتوي إلى الخرطوم بعد رحلة استغرقت عشرة أيام إلى الميدان ،
            ويمكنني أن أقول على وجه اليقين إنني استخدمت
            ما تعلمته عند كتابة تقريري الميداني',
            'about_say_en' => 'I’ve taken three RedR courses: Needs Assessment in Emergencies,
            Training of Trainers, and Proposal and Report Writing.
             The trainers have always been great. They have a lot of
              knowledge, and they know how to share it and to enhance our skills
              , our ability in our work. We don’t find any other training centres
               in Sudan that specialise in courses for NGOs and humanitarian
                organisations. I’ve just got back to Khartoum after a ten-day 
                trip to the field, and I can say for sure that I’ve used what 
                I learnt when writing up my field report',
            'write_about_us_ar' => 'محمد فيصل',
            'write_about_us_en' => 'Muhammed Faisal',
            'Key_word' =>'OSHRA,منظمة  السودانين, حقوق السودانين بالخارج,احمد,ZOOLS3D'
        ]);
    }
}
