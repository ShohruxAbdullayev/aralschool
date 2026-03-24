<?php

namespace Database\Seeders;

use App\Models\ApplyStep;
use App\Models\Faq;
use App\Models\FooterSetting;
use App\Models\HeroSection;
use App\Models\InfoParagraph;
use App\Models\IntroSection;
use App\Models\Mentor;
use App\Models\Outcome;
use App\Models\ResearchTheme;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\VisionItem;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        Setting::query()->delete();
        FooterSetting::query()->delete();
        HeroSection::query()->delete();
        IntroSection::query()->delete();
        InfoParagraph::query()->delete();
        VisionItem::query()->delete();
        ResearchTheme::query()->delete();
        Outcome::query()->delete();
        ApplyStep::query()->delete();
        TeamMember::query()->delete();
        Mentor::query()->delete();
        Faq::query()->delete();

        $settings = [
            'site_title' => $this->same('Aral School'),
            'top_banner' => $this->t(
                'Apply to the Aral School – Deadline 5th of October 2025',
                'Подайте заявку в Aral School — срок до 5 октября 2025 года',
                "Aral School dasturiga ariza topshiring — muddat 2025-yil 5-oktabr",
                'Aral School бағдарламасына өтінім беріңіз — мерзімі 2025 жылғы 5 қазан'
            ),
            'nav_about' => $this->same('Aral School'),
            'nav_programme' => $this->t('Programme', 'Программа', 'Dastur', 'Бағдарлама'),
            'nav_apply' => $this->t('Apply', 'Подать заявку', 'Ariza', 'Өтінім'),
            'nav_team' => $this->t('Team', 'Команда', 'Jamoa', 'Команда'),
            'nav_faq' => $this->t('FAQ', 'Вопросы', 'Savollar', 'Сұрақтар'),
            'nav_about_acdf' => $this->t('About ACDF', 'Об ACDF', 'ACDF haqida', 'ACDF туралы'),
            'nav_summit' => $this->t('Aral Culture Summit', 'Саммит культуры Арала', 'Aral madaniyat sammiti', 'Арал мәдениет саммиті'),
            'intro_apply_label' => $this->t('Apply now', 'Подать заявку', 'Hozir ariza topshiring', 'Қазір өтінім беріңіз'),
            'intro_deadline' => $this->t('Deadline 5th of October 2025', 'Срок — 5 октября 2025', 'Muddat — 2025-yil 5-oktabr', 'Мерзімі — 2025 жылғы 5 қазан'),
            'vision_title' => $this->t('Programme<br>vision', 'Видение<br>программы', 'Dastur<br>qarashi', 'Бағдарлама<br>көзқарасы'),
            'research_title' => $this->t('Core research<br>themes', 'Ключевые исследовательские<br>темы', 'Asosiy tadqiqot<br>mavzulari', 'Негізгі зерттеу<br>тақырыптары'),
            'research_intro' => $this->t(
                <<<'EN'
The two first themes of the Aral School Pilot examine food and water. Two interconnected research topics that are influencing the way we produce and consume food, our livelihood and global biodiversity. We need to develop and speculate new strategies and design new systems to prototype possible futures in order to inspire, building hope. The topics are at the same time our alibi and point of departure to introduce holistic eco-systemic projects that would build a new bioregion from molecular to bioregional scale.
EN,
                <<<'RU'
Первые две темы пилотной программы Aral School посвящены еде и воде — двум взаимосвязанным направлениям исследований, которые влияют на то, как мы производим и потребляем пищу, на наши способы жизни и глобальное биоразнообразие. Нам нужно разрабатывать и воображать новые стратегии и проектировать новые системы, чтобы прототипировать возможные будущие и вселять надежду. Эти темы одновременно служат нам алиби и точкой отправления для запуска целостных экосистемных проектов, которые смогут сформировать новую биорегиональную среду — от молекулярного до биорегионального масштаба.
RU,
                <<<'UZ'
Aral School pilot dasturining dastlabki ikki mavzusi oziq-ovqat va suvga bag'ishlangan — bu ikki o'zaro bog'liq tadqiqot yo'nalishlari bo'lib, ular oziq-ovqatni qanday ishlab chiqarish va iste'mol qilishimizga, yashash tarzimizga va global biologik xilma-xillikka ta'sir qiladi. Biz ilhom berish va umid uyg'otish uchun mumkin bo'lgan kelajaklarni prototiplash maqsadida yangi strategiyalarni ishlab chiqish va yangi tizimlarni loyihalashimiz kerak. Bu mavzular bir vaqtning o'zida bizga dalil va butunlay ekologik tizimli loyihalarni boshlab beruvchi nuqta bo'lib xizmat qiladi — ular molekulyar darajadan bioregional miqyosgacha yangi bioregionni qurishga qaratilgan.
UZ,
                <<<'KK'
Aral School пилоттық бағдарламасының алғашқы екі тақырыбы азық‑түлік пен суға арналды — бұл екі өзара байланысты зерттеу бағыты, олар біздің тамақты қалай өндіретініміз бен тұтынатынымызға, өмір сүру салтымызға және жаһандық биоалуантүрлілікке ықпал етеді. Үміт ояту үшін мүмкін болашақтарды прототиптеу мақсатында жаңа стратегияларды әзірлеп, жаңа жүйелерді жобалауымыз керек. Бұл тақырыптар бір мезгілде бізге алиби және молекулалық деңгейден биорегиондық ауқымға дейін жаңа биорегионды құра алатын тұтас экожүйелік жобаларды бастау нүктесі болып табылады.
KK
            ),
            'outcomes_title' => $this->t('Programme<br>outcomes', 'Результаты<br>программы', 'Dastur<br>natijalari', 'Бағдарлама<br>нәтижелері'),
            'apply_title' => $this->t('Who can apply', 'Кто может подать заявку', 'Kim ariza topshira oladi', 'Кім өтінім бере алады'),
            'apply_intro_p1' => $this->t(
                <<<'EN'
The multidisciplinary programme is aimed at young professionals from Uzbekistan and abroad with varied backgrounds and work experience in the fields of architecture, urbanism, environmental science, biotech, climate studies, filmmaking, media, crafts, design, computer technologies, social studies, physical sciences, and other fields.
EN,
                <<<'RU'
Междисциплинарная программа предназначена для молодых профессионалов из Узбекистана и других стран с разным опытом и практикой в областях архитектуры, урбанизма, экологических наук, биотехнологий, климатических исследований, кино, медиа, ремёсел, дизайна, компьютерных технологий, социальных и естественных наук и других сфер.
RU,
                <<<'UZ'
Ko'p tarmoqli dastur O'zbekiston va boshqa davlatlardan bo'lgan, arxitektura, urbanistika, ekologiya, biotexnologiya, iqlim tadqiqotlari, kino, media, hunarmandchilik, dizayn, kompyuter texnologiyalari, ijtimoiy fanlar, tabiiy fanlar va boshqa sohalarda tajribaga ega yosh mutaxassislarga mo'ljallangan.
UZ,
                <<<'KK'
Көпсалалы бағдарлама Өзбекстаннан және басқа елдерден келген, архитектура, урбанистика, экология ғылымы, биотехнология, климаттық зерттеулер, кино, медиа, қолөнер, дизайн, компьютерлік технологиялар, әлеуметтік және жаратылыстану ғылымдары және басқа салаларда тәжірибесі бар жас мамандарға арналған.
KK
            ),
            'apply_intro_p2' => $this->t(
                'It is recommended that applicants to the programme have a higher education diploma (in any specialisation) and no less than 2-3 years of work experience.',
                'Рекомендуется, чтобы у заявителей было высшее образование (по любой специальности) и не менее 2–3 лет профессионального опыта.',
                "Ariza beruvchilarda oliy ma'lumot diplomi (har qanday yo'nalishda) va kamida 2–3 yillik ish tajribasi bo'lishi tavsiya etiladi.",
                'Үміткерлерде жоғары білім дипломы (кез келген мамандық бойынша) және кемінде 2–3 жылдық жұмыс тәжірибесі болуы ұсынылады.'
            ),
            'apply_intro_p3' => $this->t(
                'When reviewing applications, we focus on how potential researchers could apply their expertise to the research agenda of the programme and current theme.',
                'При рассмотрении заявок мы оцениваем, как потенциальные исследователи могут применить свою экспертизу к исследовательской повестке программы и текущей теме.',
                "Arizalarni ko'rib chiqishda, potensial tadqiqotchilar o'z tajribasini dastur tadqiqot kun tartibiga va joriy mavzuga qanday qo'llay olishini baholaymiz.",
                'Өтінімдерді қарастыруда біз әлеуетті зерттеушілер өз тәжірибесін бағдарламаның зерттеу күн тәртібіне және ағымдағы тақырыпқа қалай қолдана алатынына назар аударамыз.'
            ),
            'apply_action_label' => $this->t('Apply now', 'Подать заявку', 'Ariza topshiring', 'Өтінім беріңіз'),
            'apply_action_deadline' => $this->t('Deadline 5th of October 2026', 'Срок — 5 октября 2026', 'Muddat — 2026-yil 5-oktabr', 'Мерзімі — 2026 жылғы 5 қазан'),
            'team_title' => $this->t('The team', 'Команда', 'Jamoa', 'Команда'),
            'mentors_title' => $this->t('Mentors & Experts', 'Менторы и эксперты', 'Mentorlar va ekspertlar', 'Менторлар мен сарапшылар'),
            'mentors_category_water' => $this->t('Water', 'Вода', 'Suv', 'Су'),
            'mentors_category_food' => $this->t('Food', 'Питание', 'Oziq-ovqat', 'Азық-түлік'),
            'faq_title' => $this->t('FAQ', 'Вопросы и ответы', 'Savol-javob', 'Сұрақ-жауап'),
            'about_title' => $this->t('About ACDF', 'Об ACDF', 'ACDF haqida', 'ACDF туралы'),
            'about_left' => $this->t(
                'The Aral School is an initiative of the Uzbekistan Art and Culture Development Foundation (ACDF).',
                'Aral School — инициатива Фонда развития искусства и культуры Узбекистана (ACDF).',
                "Aral School O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasi (ACDF) tashabbusidir.",
                'Aral School — Өзбекстан өнер және мәдениет даму қоры (ACDF) бастамасы.'
            ),
            'about_right' => $this->t(
                <<<'EN'
<p>The Uzbekistan Art and Culture Development Foundation (ACDF) preserves, promotes and nurtures Uzbekistan's heritage, arts and culture. Positioned at the forefront of Uzbekistan's cultural development, ACDF is committed to fostering the cultural ecosystem of the country, driving the creative economy, and providing opportunities for practitioners on a local, regional and global stage. ACDF believes that culture and heritage are vital in shaping society, uniting communities, bridging generations, and facilitating cross-cultural conversations.</p>
<p>ACDF has successfully led the fourth edition of the World Conference on Creative Economy (WCCE) (2-4 October 2024) in Tashkent and the inaugural Aral Culture Summit (4-6 April 2025) in Nukus, Karakalpakstan. The Foundation currently spearheads Uzbekistan's participation in Expo 2025 Osaka, Kansai, Japan (April – October 2025), the revitalisation of the Centre for Contemporary Arts in Tashkent, the construction of the new National Museum of Uzbekistan designed by Tadao Ando, and the restoration and partial reconstruction of the Palace of the Grand Duke of Romanov. ACDF has also launched "Tashkent Modernism XX/XXI", an ongoing research project documenting and protecting the city's modernist architecture, highlighted by two significant publications in collaboration with Rizzoli New York (published in November 2024) and Lars Müller Publishers (published in May 2025). In Bukhara, ACDF is launching the first Bukhara Biennial in September 2025. In Samarkand, ACDF will host the forthcoming 43rd session of the UNESCO General Conference (30 October - 13 November 2025).</p>
<p>To date, ACDF has reached over 3.5 million visitors through landmark exhibitions across 17 countries: from the Louvre and Arab World Institute in Paris to the Uffizi in Florence, the British Museum in London, and the Palace Museum in Beijing. With projects presented across Europe, Asia, and the Gulf, and collaborations with over 40 international museums and cultural institutions, the Foundation is amplifying Uzbek voices and stories in the world's most influential cultural arenas.</p>
EN,
                <<<'RU'
<p>Фонд развития искусства и культуры Узбекистана (ACDF) сохраняет, продвигает и развивает наследие, искусство и культуру Узбекистана. Находясь в авангарде культурного развития страны, ACDF стремится укреплять культурную экосистему, развивать креативную экономику и создавать возможности для профессионалов на локальном, региональном и международном уровнях. ACDF убеждён, что культура и наследие жизненно важны для формирования общества, объединения сообществ, связи поколений и межкультурного диалога.</p>
<p>ACDF успешно провёл четвёртую Всемирную конференцию по креативной экономике (WCCE) (2–4 октября 2024) в Ташкенте и первый Аральский культурный саммит (4–6 апреля 2025) в Нукусе, Каракалпакстан. Сейчас Фонд курирует участие Узбекистана в Expo 2025 Osaka, Kansai, Japan (апрель–октябрь 2025), обновление Центра современного искусства в Ташкенте, строительство нового Национального музея Узбекистана по проекту Тадао Андо, а также реставрацию и частичную реконструкцию дворца Великого князя Романова. ACDF также запустил «Ташкентский модернизм XX/XXI» — долгосрочный исследовательский проект по документированию и защите модернистской архитектуры города, который отмечен двумя важными публикациями в сотрудничестве с Rizzoli New York (выпущена в ноябре 2024) и Lars Müller Publishers (выпущена в мае 2025). В Бухаре ACDF запускает первую Бухарскую биеннале в сентябре 2025. В Самарканде ACDF проведёт 43‑ю сессию Генеральной конференции ЮНЕСКО (30 октября – 13 ноября 2025).</p>
<p>На сегодняшний день ACDF привлёк более 3,5 млн посетителей благодаря выставкам в 17 странах: от Лувра и Института арабского мира в Париже до галереи Уффици во Флоренции, Британского музея в Лондоне и Дворцового музея в Пекине. Проекты Фонда представлены в Европе, Азии и странах Персидского залива, а сотрудничество более чем с 40 международными музеями и культурными институциями усиливает узнаваемость узбекских голосов и историй на самых влиятельных культурных площадках мира.</p>
RU,
                <<<'UZ'
<p>O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasi (ACDF) O'zbekiston merosi, san'ati va madaniyatini asraydi, targ'ib qiladi va rivojlantiradi. Mamlakatning madaniy rivojlanishi oldingi safida turib, ACDF milliy madaniy ekotizimni mustahkamlash, ijodiy iqtisodiyotni qo'llab-quvvatlash va ijodkorlar uchun mahalliy, mintaqaviy hamda global darajada imkoniyatlar yaratishga intiladi. ACDF madaniyat va meros jamiyatni shakllantirish, jamoalarni birlashtirish, avlodlarni bog'lash va madaniyatlararo muloqotni rivojlantirishda muhim rol o'ynaydi, deb hisoblaydi.</p>
<p>ACDF 2024-yil 2–4-oktabr kunlari Toshkentda bo'lib o'tgan Creative Economy bo'yicha IV Jahon konferensiyasi (WCCE) va 2025-yil 4–6-aprel kunlari Nukus, Qoraqalpog'istonda o'tkazilgan ilk Aral Culture Summitni muvaffaqiyatli tashkil etdi. Hozirda Jamg'arma O'zbekistonning Expo 2025 Osaka, Kansai, Japan (2025-yil aprel–oktabr) ko'rgazmasidagi ishtirokini, Toshkentdagi Zamonaviy san'at markazini yangilashni, Tadao Ando loyihalagan yangi O'zbekiston Milliy muzeyini qurishni, shuningdek Romanov Buyuk knyazi saroyini restavratsiya qilish va qisman qayta tiklashni boshqarib bormoqda. ACDF shuningdek «Toshkent modernizmi XX/XXI» nomli, shaharning modernist arxitekturasini hujjatlashtirish va himoya qilishga qaratilgan uzoq muddatli tadqiqot loyihasini yo'lga qo'ydi; bu loyiha Rizzoli New York (2024-yil noyabr) va Lars Müller Publishers (2025-yil may) bilan hamkorlikda chop etilgan ikki muhim nashr bilan yoritildi. Buxoroda ACDF 2025-yil sentabrda birinchi Buxoro biennalesini ishga tushirmoqda. Samarqandda esa ACDF 2025-yil 30-oktabr – 13-noyabr kunlari bo'lib o'tadigan UNESCO Bosh konferensiyasining 43-sessiyasiga mezbonlik qiladi.</p>
<p>Bugunga qadar ACDF 17 mamlakatdagi muhim ko'rgazmalar orqali 3,5 milliondan ortiq tashrif buyuruvchiga yetdi: Parijdagi Luvr va Arab World Institute'dan tortib Florensiyadagi Uffizi, Londondagi British Museum va Pekindagi Palace Museumgacha. Yevropa, Osiyo va Fors ko'rfazi mamlakatlarida taqdim etilgan loyihalar hamda 40 dan ortiq xalqaro muzey va madaniy institutlar bilan hamkorlik Jamg'armaga O'zbekistonning ovozlari va hikoyalarini dunyoning eng nufuzli madaniy maydonlarida yanada kuchaytirishga yordam bermoqda.</p>
UZ,
                <<<'KK'
<p>Өзбекстан өнер және мәдениет даму қоры (ACDF) Өзбекстанның мұрасын, өнерін және мәдениетін сақтап, насихаттайды әрі дамытады. Елдің мәдени дамуының алдыңғы қатарында тұратын ACDF ұлттық мәдени экожүйені нығайтуға, креативті экономиканы ілгерілетуге және жергілікті, өңірлік әрі халықаралық деңгейде мамандарға мүмкіндіктер жасауға ұмтылады. ACDF мәдениет пен мұра қоғамды қалыптастыруда, қауымдастықтарды біріктіруде, ұрпақтарды байланыстыруда және мәдениетаралық диалогты дамытуда аса маңызды деп санайды.</p>
<p>ACDF 2024 жылғы 2–4 қазанда Ташкентте өткен Креативті экономика жөніндегі төртінші Дүниежүзілік конференцияны (WCCE) және 2025 жылғы 4–6 сәуірде Қарақалпақстанның Нүкіс қаласында өткен алғашқы Aral Culture Summit-ті сәтті ұйымдастырды. Қор қазіргі уақытта Өзбекстанның Expo 2025 Osaka, Kansai, Japan (2025 жылғы сәуір–қазан) көрмесіне қатысуын, Ташкенттегі Заманауи өнер орталығын жаңғыртуды, Тадао Андо жобалаған жаңа Өзбекстан Ұлттық музейінің құрылысын, сондай-ақ Романов Ұлы князінің сарайын қалпына келтіру мен ішінара қайта жаңғыртуды үйлестіруде. ACDF сондай-ақ қаланың модернистік сәулетін құжаттау және қорғауға арналған «Ташкент модернизмі XX/XXI» атты ұзақ мерзімді зерттеу жобасын іске қосты; жоба Rizzoli New York (2024 жылғы қараша) және Lars Müller Publishers (2025 жылғы мамыр) баспаларымен бірлескен екі маңызды жарияланыммен айқындалды. Бұхарада ACDF 2025 жылғы қыркүйекте алғашқы Бұхара биенналесін бастайды. Самарқандта ACDF 2025 жылғы 30 қазан – 13 қараша аралығында өтетін ЮНЕСКО Бас конференциясының 43‑сессиясын өткізеді.</p>
<p>Бүгінгі күнге дейін ACDF 17 елдегі ірі көрмелер арқылы 3,5 миллионнан астам келушіге жетті: Париждегі Лувр мен Араб әлемі институтынан бастап, Флоренциядағы Уффици галереясы, Лондондағы Британ музейі және Бейжіңдегі Сарай музейіне дейін. Еуропа, Азия және Парсы шығанағы елдеріндегі жобалар, сондай-ақ 40‑тан астам халықаралық музей және мәдени институттармен ынтымақтастық Қорға өзбек дауыстары мен әңгімелерін әлемнің ең ықпалды мәдени алаңдарында кеңінен танытуға мүмкіндік береді.</p>
KK
            ),
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $footerSettings = [
            'newsletter_title' => $this->t('NEWSLETTER', 'НОВОСТНАЯ РАССЫЛКА', 'YANGILIKLAR XABARNOMASI', 'ЖАҢАЛЫҚТАР ТАРАТЫЛЫМЫ'),
            'newsletter_placeholder' => $this->t('Enter your email', 'Введите ваш email', 'Emailingizni kiriting', 'Электрон поштаңызды енгізіңіз'),
            'newsletter_button' => $this->t('Subscribe', 'Подписаться', "Obuna bo'lish", 'Жазылу'),
            'contact_title' => $this->t('CONTACT', 'КОНТАКТЫ', 'ALOQA', 'БАЙЛАНЫС'),
            'contact_text' => $this->t(
                <<<'EN'
Uzbekistan Art and Culture Development Foundation<br>
Address: 1, Taras Shevchenko str., Tashkent,<br>
100029, Uzbekistan<br>
Phone: +998 (71) 207 40 80
EN,
                <<<'RU'
Uzbekistan Art and Culture Development Foundation<br>
Адрес: 1, ул. Тараса Шевченко, Ташкент,<br>
100029, Узбекистан<br>
Тел.: +998 (71) 207 40 80
RU,
                <<<'UZ'
Uzbekistan Art and Culture Development Foundation<br>
Manzil: 1, Taras Shevchenko ko'ch., Toshkent,<br>
100029, O'zbekiston<br>
Tel.: +998 (71) 207 40 80
UZ,
                <<<'KK'
Uzbekistan Art and Culture Development Foundation<br>
Мекенжайы: Тарас Шевченко к-сі 1, Ташкент,<br>
100029, Өзбекстан<br>
Тел.: +998 (71) 207 40 80
KK
            ),
            'general_inquiries_title' => $this->t('GENERAL INQUIRIES', 'ОБЩИЕ ВОПРОСЫ', 'UMUMIY MUROJAATLAR', 'ЖАЛПЫ СҰРАҚТАР'),
            'general_inquiries_email' => $this->same('info@aralschool.uz'),
            'social_media_title' => $this->t('SOCIAL MEDIA', 'СОЦИАЛЬНЫЕ СЕТИ', 'IJTIMOIY TARMOQLAR', 'ӘЛЕУМЕТТІК ЖЕЛІЛЕР'),
            'social_linkedin_label' => $this->same('LinkedIn ↗'),
            'social_linkedin_url' => $this->same('#'),
            'social_instagram_label' => $this->same('Instagram ↗'),
            'social_instagram_url' => $this->same('#'),
            'organiser_title' => $this->t('Organiser', 'Организатор', 'Tashkilotchi', 'Ұйымдастырушы'),
            'organiser_text' => $this->t(
                'Uzbekistan Art and Culture<br>Development Foundation',
                'Фонд развития искусства и культуры<br>Узбекистана',
                "O'zbekiston san'at va madaniyatni<br>rivojlantirish jamg'armasi",
                'Өзбекстан өнер және мәдениет<br>даму қоры'
            ),
            'policy_privacy_label' => $this->t('• Privacy policy', '• Политика конфиденциальности', '• Maxfiylik siyosati', '• Құпиялылық саясаты'),
            'policy_privacy_url' => $this->same('#'),
            'policy_cookie_label' => $this->t('• Cookie policy', '• Политика файлов cookie', '• Cookie siyosati', '• Cookie саясаты'),
            'policy_cookie_url' => $this->same('#'),
        ];

        foreach ($footerSettings as $key => $value) {
            FooterSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        HeroSection::create([
            'image' => 'img/hero-bg.png',
            'text' => $this->t(
                <<<'EN'
<span class="bold-text">The Aral Sea</span> is a place where all the most urgent concerns of today come together. Soil, water, energy, food, textiles and air quality – it can be seen as the live laboratory of the future and can help us rethink what's possible for many generations to come.
EN,
                <<<'RU'
<span class="bold-text">Аральское море</span> — место, где сходятся самые острые вызовы нашего времени. Почва, вода, энергия, продовольствие, текстиль и качество воздуха — это своего рода живая лаборатория будущего, которая помогает переосмыслить возможное для многих поколений.
RU,
                <<<'UZ'
<span class="bold-text">Orol dengizi</span> bugungi kunning eng dolzarb masalalari jam bo'ladigan joy. Tuproq, suv, energiya, oziq-ovqat, to'qimachilik va havo sifati — bularning barchasi kelajakning tirik laboratoriyasi bo'lib, ko'plab avlodlar uchun imkoniyatlarni qayta tasavvur qilishga yordam beradi.
UZ,
                <<<'KK'
<span class="bold-text">Арал теңізі</span> — бүгінгі күннің ең өзекті мәселелері түйісетін орын. Топырақ, су, энергия, азық‑түлік, тоқыма және ауа сапасы — бұл болашақтың тірі зертханасы, ол көптеген ұрпақ үшін мүмкіндікті қайта ойлауға көмектеседі.
KK
            ),
        ]);

        IntroSection::create([
            'title' => $this->same('Aral School'),
            'description' => $this->t(
                'We are pleased to announce the Aral School, the new education programme beginning in 2026, led by Jan Boelen and commissioned by the Uzbekistan Art and Culture Development Foundation.',
                'Мы рады объявить о запуске Aral School — новой образовательной программы, начинающейся в 2026 году, под руководством Яна Бёлена и по заказу Фонда развития искусства и культуры Узбекистана.',
                "Biz 2026 yilda boshlanadigan, Yan Boelen boshchiligida va O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasi buyurtmasi bilan tashkil etilayotgan Aral School yangi ta'lim dasturini e'lon qilishdan mamnunmiz.",
                'Біз 2026 жылы басталатын, Ян Боелен жетекшілік ететін және Өзбекстан өнер және мәдениет даму қорының тапсырмасымен іске асатын Aral School жаңа білім беру бағдарламасын қуана хабарлаймыз.'
            ),
        ]);

        $infoParagraphs = [
            [
                'sort_order' => 1,
                'content' => $this->t(
                    <<<'EN'
The climate crisis is leaving an indelible mark on our ecosystems and bioregions, forcing us to rethink our interdependencies and alliances. North Uzbekistan and the Karakalpakstan area were once home to the vast Aral Sea, a lake in Central Asia that was for most of the 20th century the world's fourth largest saline lake. In the last fifty years, the lake has dramatically dried up, with a radical increase in salinisation, primarily due to unsustainable irrigation practices linked to intensive, large-scale cotton cultivation. The consequences have irreversibly altered a bioregion and caused the collapse of an ecosystem, with serious impact on local communities and the region's ecology, economy, culture, and public health.
EN,
                    <<<'RU'
Климатический кризис оставляет неизгладимый след в наших экосистемах и биорегионах, заставляя пересматривать наши взаимозависимости и союзы. Север Узбекистана и регион Каракалпакстан когда-то были домом для обширного Аральского моря — озера в Центральной Азии, которое большую часть XX века было четвертым по величине солёным озером в мире. За последние пятьдесят лет озеро резко высохло, солёность существенно выросла, главным образом из‑за неустойчивых ирригационных практик, связанных с интенсивным крупномасштабным выращиванием хлопка. Последствия необратимо изменили биорегион и привели к коллапсу экосистемы, серьёзно повлияв на местные сообщества и экологию, экономику, культуру и здоровье населения региона.
RU,
                    <<<'UZ'
Iqlim inqirozi ekotizimlarimiz va bioregionlarimizda o'chmas iz qoldirmoqda, bu esa o'zaro bog'liqliklarimiz va ittifoqlarimizni qayta ko'rib chiqishga majbur qiladi. Shimoliy O'zbekiston va Qoraqalpog'iston hududi bir vaqtlar Markaziy Osiyodagi ulkan Orol dengizi — XX asrning katta qismida dunyodagi to'rtinchi yirik sho'r ko'l bo'lgan suv havzasining vatani edi. So'nggi ellik yil ichida ko'l keskin qurib, sho'rlanish keskin oshdi; buning asosiy sababi paxta yetishtirish bilan bog'liq intensiv va barqaror bo'lmagan sug'orish amaliyotlari bo'ldi. Oqibatlar bioregionni qaytarib bo'lmas darajada o'zgartirdi va ekotizimning qulashi bilan yakunlandi; bu esa mahalliy hamjamiyatlar hamda mintaqaning ekologiyasi, iqtisodiyoti, madaniyati va jamoat salomatligiga jiddiy ta'sir ko'rsatdi.
UZ,
                    <<<'KK'
Климаттық дағдарыс экожүйелеріміз бен биорегиондарымызда өшпес із қалдырып, өзара тәуелділіктеріміз бен одақтарымызды қайта ойлауға мәжбүр етеді. Өзбекстанның солтүстігі мен Қарақалпақстан өңірі бір кездері Орталық Азиядағы алып Арал теңізінің отаны болған — ол XX ғасырдың көп бөлігінде әлемдегі төртінші ірі тұзды көл еді. Соңғы елу жылда теңіз күрт тартылып, тұздану айтарлықтай өсті; бұл негізінен мақтаны қарқынды, ауқымды өсіруге байланысты тұрақсыз суару тәжірибелерінен болды. Бұл салдар биорегионды қайтымсыз өзгертіп, экожүйенің күйреуіне әкелді, жергілікті қауымдастықтарға және өңірдің экологиясына, экономикасына, мәдениетіне әрі қоғамдық денсаулығына қатты әсер етті.
KK
                ),
            ],
            [
                'sort_order' => 2,
                'content' => $this->t(
                    <<<'EN'
The Aral School is an interdisciplinary postgraduate programme that recognises the unique characteristics of this context, as well as the dramatic consequences of this ecosystem's collapse. In a lucid approach, the school takes these as the starting point to create new and sustainable visions and prototypes for a shared future. The programme brings together international and local participants from Uzbekistan and Karakalpakstan to explore innovative solutions for cultural and ecological regeneration. Learning from the traditions, biocultural context, and environmental pressure of the Karakalpakstan region, the programme fosters new ways of learning and collaborating across disciplines.
EN,
                    <<<'RU'
Aral School — междисциплинарная постдипломная программа, признающая уникальные особенности этого контекста и драматические последствия коллапса экосистемы. В ясном подходе школа берет их как отправную точку для создания новых и устойчивых видений и прототипов общего будущего. Программа объединяет международных и местных участников из Узбекистана и Каракалпакстана для поиска инновационных решений культурной и экологической регенерации. Опираясь на традиции, биокультурный контекст и экологическое давление региона Каракалпакстан, программа способствует новым способам обучения и сотрудничества между дисциплинами.
RU,
                    <<<'UZ'
Aral School — ushbu kontekstning noyob xususiyatlari va ekotizimning qulashi oqibatlarini tan oladigan ko'p tarmoqli magistrdan keyingi dastur. Dastur aniq yondashuv bilan bu holatlarni umumiy kelajak uchun yangi va barqaror tasavvurlar hamda prototiplarni yaratishning boshlang'ich nuqtasi sifatida qabul qiladi. Dastur O'zbekiston va Qoraqalpog'istondan xalqaro va mahalliy ishtirokchilarni birlashtirib, madaniy va ekologik regeneratsiya uchun innovatsion yechimlarni izlaydi. Qoraqalpog'iston mintaqasining an'analari, biokultural konteksti va ekologik bosimidan o'rganib, dastur fanlararo hamkorlik va o'qishning yangi usullarini rivojlantiradi.
UZ,
                    <<<'KK'
Aral School — осы контекстің бірегей ерекшеліктерін және экожүйенің құлдырауының салдарын мойындайтын көпсалалы магистратурадан кейінгі бағдарлама. Айқын тәсілмен мектеп бұл жағдайларды ортақ болашақ үшін жаңа әрі тұрақты көзқарастар мен прототиптер жасауға бастау нүктесі ретінде алады. Бағдарлама Өзбекстан мен Қарақалпақстаннан халықаралық және жергілікті қатысушыларды біріктіріп, мәдени және экологиялық регенерацияға арналған инновациялық шешімдерді зерттейді. Қарақалпақстан өңірінің дәстүрлері, биомәдени контексті және экологиялық қысымынан үйрене отырып, бағдарлама пәндер арасындағы оқыту мен ынтымақтастықтың жаңа жолдарын қалыптастырады.
KK
                ),
            ],
        ];

        foreach ($infoParagraphs as $paragraph) {
            InfoParagraph::create($paragraph);
        }

        $visionItems = [
            [
                'image' => 'img/vision1.png',
                'sort_order' => 1,
                'title' => $this->t('About', 'О программе', 'Haqida', 'Туралы'),
                'text' => $this->t(
                    <<<'EN'
The Aral School is a nomadic educational platform that investigates the complex relationship between human activity and environmental change in the Aral Sea region. We invite researchers, designers, and scientists to collaborate on sustainable futures in one of the most challenging ecological contexts on Earth. By connecting global expertise with local wisdom, we aim to design resilient systems for the generations to come.
EN,
                    <<<'RU'
Aral School — кочевая образовательная платформа, исследующая сложные взаимосвязи между человеческой деятельностью и экологическими изменениями в регионе Аральского моря. Мы приглашаем исследователей, дизайнеров и ученых сотрудничать ради устойчивого будущего в одном из самых сложных экологических контекстов на Земле. Соединяя глобальную экспертизу с местной мудростью, мы стремимся проектировать устойчивые системы для будущих поколений.
RU,
                    <<<'UZ'
Aral School — Orol dengizi mintaqasida inson faoliyati va atrof-muhitdagi o'zgarishlar o'rtasidagi murakkab munosabatlarni o'rganadigan ko'chma ta'lim platformasi. Biz tadqiqotchilarni, dizaynerlarni va olimlarni Yer yuzidagi eng murakkab ekologik kontekstlardan birida barqaror kelajak uchun hamkorlikka taklif qilamiz. Global tajribani mahalliy donishmandlik bilan uyg'unlashtirib, kelajak avlodlar uchun barqaror tizimlarni yaratishni maqsad qilamiz.
UZ,
                    <<<'KK'
Aral School — Арал теңізі өңіріндегі адам әрекеті мен экологиялық өзгерістер арасындағы күрделі байланыстарды зерттейтін көшпелі білім беру платформасы. Біз зерттеушілерді, дизайнерлерді және ғалымдарды Жердегі ең күрделі экологиялық контексттердің бірінде тұрақты болашақ үшін ынтымақтастыққа шақырамыз. Жаһандық тәжірибені жергілікті даналықпен ұштастыра отырып, келер ұрпақ үшін тұрақты жүйелерді жобалауды мақсат етеміз.
KK
                ),
            ],
            [
                'image' => 'img/vision3.png',
                'sort_order' => 2,
                'title' => null,
                'text' => null,
            ],
            [
                'image' => 'img/vision2.png',
                'sort_order' => 3,
                'title' => $this->t('Goals', 'Цели', 'Maqsadlar', 'Мақсаттар'),
                'text' => $this->t(
                    <<<'EN'
The Aral school wants to connect a new generation of design practitioners, and position Uzbekistan as a global laboratory of the future. Working from the Aral Sea region context, the initiative promotes regenerative practices, stimulates new ways of learning and collaborating, and learns from local know-how, communities and stakeholders.

The postgraduate programme brings together twenty participants per year, each cohort contributing to create a growing global community around themes of sustainability and regeneration. With a yearly programme of events around the globe, including a presentation at the Milan Design Week 2026 and the Aral Culture Summit later on in October 2026, the Aral School becomes a global platform for knowledge exchange on ecological restoration and sustainability.
EN,
                    <<<'RU'
Aral School стремится объединить новое поколение практикующих дизайнеров и позиционировать Узбекистан как глобальную лабораторию будущего. Исходя из контекста региона Аральского моря, инициатива продвигает регенеративные практики, стимулирует новые способы обучения и сотрудничества и опирается на местные знания, сообщества и заинтересованные стороны.

Постдипломная программа объединяет двадцать участников в год; каждый набор формирует растущее глобальное сообщество вокруг тем устойчивости и регенерации. Ежегодная программа мероприятий по всему миру, включая презентацию на Миланской неделе дизайна 2026 и саммит культуры Арала позднее в октябре 2026, делает Aral School глобальной платформой обмена знаниями об экологическом восстановлении и устойчивости.
RU,
                    <<<'UZ'
Aral School yangi avlod dizayn amaliyotchilarini bog'lash va O'zbekistonni kelajakning global laboratoriyasi sifatida ko'rsatishni maqsad qiladi. Orol dengizi mintaqasi kontekstidan kelib chiqib, tashabbus regenerativ amaliyotlarni ilgari suradi, o'qish va hamkorlikning yangi usullarini rag'batlantiradi hamda mahalliy bilim, hamjamiyat va manfaatdor tomonlardan o'rganadi.

Magistrdan keyingi dastur har yili yigirma nafar ishtirokchini birlashtiradi; har bir kohort barqarorlik va regeneratsiya mavzulari atrofida o'sib borayotgan global hamjamiyatni shakllantiradi. Dunyo bo'ylab yillik tadbirlar dasturi, jumladan 2026-yilgi Milan Design Week taqdimoti va 2026-yil oktabr oyidagi Aral Culture Summit, Aral Schoolni ekologik tiklanish va barqarorlik bo'yicha bilim almashishning global platformasiga aylantiradi.
UZ,
                    <<<'KK'
Aral School жаңа буын дизайн практиктерін біріктіріп, Өзбекстанды болашақтың жаһандық зертханасы ретінде танытуды мақсат етеді. Арал теңізі өңірі контекстінен шыға отырып, бастама регенеративті тәжірибелерді ілгерілетеді, оқыту мен ынтымақтастықтың жаңа тәсілдерін ынталандырады және жергілікті білімге, қауымдастықтарға әрі мүдделі тараптарға сүйенеді.

Магистратурадан кейінгі бағдарлама жыл сайын жиырма қатысушыны біріктіреді; әрбір когорт тұрақтылық пен регенерация тақырыптары айналасында өсіп келе жатқан жаһандық қауымдастықты қалыптастырады. Әлем бойынша жыл сайынғы іс-шаралар бағдарламасы, соның ішінде Milan Design Week 2026‑дағы таныстырылым және 2026 жылғы қазанда өтетін Aral Culture Summit, Aral School-ды экологиялық қалпына келтіру мен тұрақтылық туралы білім алмасудың жаһандық платформасына айналдырады.
KK
                ),
            ],
            [
                'image' => 'img/vision4.png',
                'sort_order' => 4,
                'title' => $this->t('Mission', 'Миссия', 'Missiya', 'Миссия'),
                'text' => $this->t(
                    <<<'EN'
Our mission is to foster a new generation of bioregional designers who can propose radical solutions for ecological restoration. Through interdisciplinary research and hands-on making, we strive to build a community of practice that values local knowledge as much as scientific innovation. We believe in the power of design to imagine and prototype futures that are both ecologically sound and socially just.
EN,
                    <<<'RU'
Наша миссия — сформировать новое поколение биорегиональных дизайнеров, способных предлагать радикальные решения для экологического восстановления. Через междисциплинарные исследования и практическое создание мы стремимся построить сообщество практики, которое ценит местные знания так же высоко, как научные инновации. Мы верим в силу дизайна воображать и прототипировать будущие, которые являются и экологически устойчивыми, и социально справедливыми.
RU,
                    <<<'UZ'
Bizning missiyamiz ekologik tiklanish uchun radikal yechimlarni taklif qila oladigan yangi avlod bioregional dizaynerlarini yetishtirishdir. Fanlararo tadqiqotlar va amaliy ishlash orqali biz mahalliy bilimlarni ilmiy innovatsiyalar kabi qadrlaydigan amaliyot hamjamiyatini qurishga intilamiz. Biz dizaynning ekologik jihatdan barqaror va ijtimoiy jihatdan adolatli kelajaklarni tasavvur qilish hamda prototiplash kuchiga ishonamiz.
UZ,
                    <<<'KK'
Біздің миссиямыз — экологиялық қалпына келтіру үшін радикалды шешімдер ұсына алатын биорегиондық дизайнерлердің жаңа буынын қалыптастыру. Пәнаралық зерттеу мен практикалық жасаудың арқасында біз жергілікті білімді ғылыми инновациялармен тең дәрежеде бағалайтын тәжірибе қауымдастығын құруға ұмтыламыз. Біз дизайнның экологиялық тұрғыдан орнықты әрі әлеуметтік әділетті болашақты елестету және прототиптеу қуатына сенеміз.
KK
                ),
            ],
            [
                'image' => 'img/vision5.png',
                'sort_order' => 5,
                'title' => null,
                'text' => null,
            ],
        ];

        foreach ($visionItems as $visionItem) {
            VisionItem::create($visionItem);
        }

        $researchThemes = [
            [
                'image' => 'img/theme1.png',
                'number' => 1,
                'sort_order' => 1,
                'title' => $this->t("The Food System\nof the Aral region", "Пищевая система\nАральского региона", "Orol mintaqasining\novqat tizimi", "Арал өңірінің\nазық‑түлік жүйесі"),
                'description' => $this->t(
                    <<<'EN'
When ecological systems are changing or collapsing, agriculture needs to adapt. What kind of sustainable food systems in Karakalpakstan and the Aral Sea region at a larger scale can we develop? New agroecological approach in the city of Nukus and beyond will be explored and developed, creating a sustainable framework for a resilient and equitable future.
EN,
                    <<<'RU'
Когда экологические системы меняются или рушатся, сельскому хозяйству нужно адаптироваться. Какие устойчивые продовольственные системы в Каракалпакстане и регионе Аральского моря в более широком масштабе мы можем разработать? Новый агроэкологический подход в городе Нукус и за его пределами будет изучен и развит, создавая устойчивую основу для справедливого и жизнестойкого будущего.
RU,
                    <<<'UZ'
Ekologik tizimlar o'zgarganda yoki qulasa, qishloq xo'jaligi moslashishi kerak. Qoraqalpog'iston va Orol dengizi mintaqasida kengroq miqyosda qanday barqaror oziq-ovqat tizimlarini ishlab chiqishimiz mumkin? Nukus shahrida va undan tashqarida yangi agroekologik yondashuvlar o'rganilib, rivojlantiriladi va adolatli hamda barqaror kelajak uchun mustahkam asos yaratadi.
UZ,
                    <<<'KK'
Экологиялық жүйелер өзгергенде немесе құлдырағанда, ауыл шаруашылығы бейімделуі керек. Қарақалпақстан мен Арал өңірінде кең ауқымда қандай тұрақты азық‑түлік жүйелерін дамыта аламыз? Нүкіс қаласында және одан тыс жерлерде жаңа агроэкологиялық тәсілдер зерттеліп, дамытылып, әділ әрі төзімді болашақ үшін тұрақты негіз қалыптастырылады.
KK
                ),
            ],
            [
                'image' => 'img/theme2.png',
                'number' => 2,
                'sort_order' => 2,
                'title' => $this->t("Water of the Aral\nregion", "Вода Аральского\nрегиона", "Orol mintaqasining\nsuvi", "Арал өңірінің\nсуы"),
                'description' => $this->t(
                    <<<'EN'
In the region where water evaporated by human activities we want to bring back water in everyday life to increase the quality of life. As a new benchmark for the water ecosystem, this theme explores new opportunities, partnerships, tools and collaborations that will elevate the most precious source of. Reshaping the future of the region through new water ethics, and principles of the bioregional design.
EN,
                    <<<'RU'
В регионе, где вода испарилась из‑за человеческой деятельности, мы хотим вернуть воду в повседневную жизнь, чтобы повысить качество жизни. В качестве нового ориентира для водной экосистемы тема исследует новые возможности, партнерства, инструменты и сотрудничество, которые помогут поднять значение самого ценного ресурса. Переформатируя будущее региона через новую водную этику и принципы биорегионального дизайна.
RU,
                    <<<'UZ'
Inson faoliyati tufayli suv bug'lanib ketgan mintaqada biz suvni kundalik hayotga qaytarib, hayot sifatini oshirishni istaymiz. Suv ekotizimi uchun yangi mezon sifatida ushbu mavzu eng qimmat resursning ahamiyatini oshiradigan yangi imkoniyatlar, hamkorliklar, vositalar va sherikliklarni o'rganadi. Yangi suv etikasi va bioregional dizayn tamoyillari orqali mintaqaning kelajagini qayta shakllantiradi.
UZ,
                    <<<'KK'
Адам әрекеті салдарынан су тартылған өңірде біз суды күнделікті өмірге қайта әкеліп, өмір сапасын арттырғымыз келеді. Су экожүйесі үшін жаңа бағдар ретінде бұл тақырып ең қымбат ресурстың маңызын көтеретін жаңа мүмкіндіктерді, серіктестіктерді, құралдар мен ынтымақтастықтарды зерттейді. Жаңа су этикасы мен биорегиондық дизайн қағидалары арқылы өңірдің болашағын қайта қалыптастырады.
KK
                ),
            ],
        ];

        foreach ($researchThemes as $theme) {
            ResearchTheme::create($theme);
        }

        $outcomes = [
            $this->t(
                'Design prototypes connected to the core themes developed within the research groups.',
                'Проектные прототипы, связанные с ключевыми темами, разработанными в исследовательских группах.',
                'Tadqiqot guruhlarida ishlab chiqilgan asosiy mavzularga bog\'langan dizayn prototiplari.',
                'Зерттеу топтарында әзірленген негізгі тақырыптарға байланысты дизайн прототиптері.'
            ),
            $this->t(
                'Media publication capturing the process, key research questions and prototype solutions will be published within 2026.',
                'Медийная публикация, фиксирующая процесс, ключевые исследовательские вопросы и прототипные решения, будет выпущена в 2026 году.',
                'Jarayon, asosiy tadqiqot savollari va prototip yechimlarni aks ettiruvchi media nashri 2026-yilda chop etiladi.',
                'Процесті, негізгі зерттеу сұрақтарын және прототиптік шешімдерді қамтитын медиа жарияланым 2026 жылы жарық көреді.'
            ),
            $this->t(
                'First ideas will be shared with the global creative public during Milan Design Week 2026 and Aral Culture Summit 2026, additional cultural outposts for the prototypes exhibition might also take place.',
                'Первые идеи будут представлены мировой творческой общественности во время Миланской недели дизайна 2026 и Aral Culture Summit 2026; также возможны дополнительные культурные площадки для выставки прототипов.',
                'Dastlabki g\'oyalar 2026-yil Milan Design Week va Aral Culture Summit 2026 doirasida global ijodiy jamoatchilikka taqdim etiladi; prototiplar ko\'rgazmasi uchun qo\'shimcha madaniy maydonlar ham bo\'lishi mumkin.',
                'Алғашқы идеялар Milan Design Week 2026 және Aral Culture Summit 2026 кезінде әлемдік шығармашылық қауымға ұсынылады; прототиптер көрмесі үшін қосымша мәдени алаңдар да ұйымдастырылуы мүмкін.'
            ),
            $this->t(
                'Key research outcomes and ideas will be shared in an exhibition and publication during the second Aral Culture Summit in October 2026 as part of the programme.',
                'Ключевые исследовательские результаты и идеи будут представлены на выставке и в публикации во время второго Aral Culture Summit в октябре 2026 года в рамках программы.',
                'Asosiy tadqiqot natijalari va g\'oyalar dastur doirasida 2026-yil oktabr oyidagi ikkinchi Aral Culture Summitda ko\'rgazma va nashrda taqdim etiladi.',
                'Негізгі зерттеу нәтижелері мен идеялар бағдарлама аясында 2026 жылғы қазанда өтетін екінші Aral Culture Summit кезінде көрме мен жарияланымда ұсынылады.'
            ),
        ];

        foreach ($outcomes as $index => $outcome) {
            Outcome::create([
                'sort_order' => $index + 1,
                'content' => $outcome,
            ]);
        }

        $applySteps = [
            [
                'sort_order' => 1,
                'type' => 'left',
                'title' => $this->t('What is in it for applicants?', 'Что получают участники?', 'Ishtirokchilar uchun nimasi bor?', 'Қатысушылар үшін не бар?'),
                'content' => $this->t(
                    <<<'EN'
<ul>
    <li>No tuition fee</li>
    <li>Prototyping, material costs, research trips and accommodation are included</li>
    <li>Monthly participation stipend</li>
    <li>Visibility and exposure to global and local creative network</li>
    <li>Contact with international experts on a 1:1 basis</li>
    <li>Publication of the cohort developments and outcome in a respective print format</li>
    <li>A growing cohort of Aral School alumni, who remain connected in the future</li>
</ul>
EN,
                    <<<'RU'
<ul>
    <li>Обучение бесплатное</li>
    <li>Прототипирование, материалы, исследовательские поездки и проживание включены</li>
    <li>Ежемесячная стипендия участника</li>
    <li>Видимость и выход на глобальную и локальную творческую сеть</li>
    <li>Индивидуальные встречи с международными экспертами</li>
    <li>Публикация работы когорты и результатов в печатном формате</li>
    <li>Растущее сообщество выпускников Aral School, остающееся связанным в будущем</li>
</ul>
RU,
                    <<<'UZ'
<ul>
    <li>O'qish bepul</li>
    <li>Prototiplash, material xarajatlari, tadqiqot safarlari va yashash joyi ta'minlanadi</li>
    <li>Oylik stipendiya</li>
    <li>Global va mahalliy ijodiy tarmoqqa kirish va ko'rinish</li>
    <li>Xalqaro ekspertlar bilan 1:1 uchrashuvlar</li>
    <li>Kohort ishlari va natijalarining bosma nashri</li>
    <li>Kelajakda ham aloqada qoladigan Aral School bitiruvchilari hamjamiyati</li>
</ul>
UZ,
                    <<<'KK'
<ul>
    <li>Оқу ақысы жоқ</li>
    <li>Прототиптеу, материал шығындары, зерттеу сапарлары және тұру қамтылған</li>
    <li>Ай сайынғы стипендия</li>
    <li>Жаһандық және жергілікті шығармашылық желіде көріну</li>
    <li>Халықаралық сарапшылармен 1:1 кездесулер</li>
    <li>Когортаның жұмыстары мен нәтижелерін баспа түрде жариялау</li>
    <li>Болашақта да байланыста болатын Aral School түлектер қауымдастығы</li>
</ul>
KK
                ),
            ],
            [
                'sort_order' => 2,
                'type' => 'right',
                'title' => $this->t('Application Requirements', 'Требования к заявке', 'Ariza talablari', 'Өтінім талаптары'),
                'content' => $this->t(
                    <<<'EN'
<ul>
    <li>Completed higher education</li>
    <li>2-3 years of work experience</li>
    <li>Fluency in English</li>
    <li>High level of motivation and self-organisation</li>
</ul>
EN,
                    <<<'RU'
<ul>
    <li>Законченное высшее образование</li>
    <li>2–3 года опыта работы</li>
    <li>Свободное владение английским</li>
    <li>Высокая мотивация и самоорганизация</li>
</ul>
RU,
                    <<<'UZ'
<ul>
    <li>Oliy ma'lumot</li>
    <li>2–3 yil ish tajribasi</li>
    <li>Ingliz tilini yaxshi bilish</li>
    <li>Yuqori motivatsiya va o'zini-o'zi tashkil qilish</li>
</ul>
UZ,
                    <<<'KK'
<ul>
    <li>Жоғары білім</li>
    <li>2–3 жыл жұмыс тәжірибесі</li>
    <li>Ағылшын тілін еркін меңгеру</li>
    <li>Жоғары мотивация және өзін-өзі ұйымдастыру</li>
</ul>
KK
                ),
            ],
            [
                'sort_order' => 3,
                'type' => 'left',
                'title' => $this->t('Selection Process', 'Процесс отбора', 'Tanlov jarayoni', 'Іріктеу үдерісі'),
                'content' => $this->t(
                    '<p>Upon applications and portfolio review, selected candidates will be invited for a creative interview session to share their areas of interests and motivations.</p>',
                    '<p>После рассмотрения заявок и портфолио отобранные кандидаты будут приглашены на творческое собеседование, чтобы рассказать о своих интересах и мотивации.</p>',
                    '<p>Arizalar va portfoliolar ko\'rib chiqilgach, tanlangan nomzodlar o\'z qiziqishlari va motivatsiyalarini baham ko\'rish uchun ijodiy suhbatga taklif etiladi.</p>',
                    '<p>Өтінімдер мен портфолиолар қаралғаннан кейін, іріктелген үміткерлер қызығушылықтары мен уәждерін бөлісу үшін шығармашылық сұхбатқа шақырылады.</p>'
                ),
            ],
            [
                'sort_order' => 4,
                'type' => 'right',
                'title' => $this->t('Required documents', 'Необходимые документы', 'Kerakli hujjatlar', 'Қажетті құжаттар'),
                'content' => $this->t(
                    <<<'EN'
<div class="apply-red-bar">
    <span>Completed online application form</span>
    <div class="apply-btn-icon"></div>
</div>

<p class="doc-intro">Please submit the following documents together with your application:</p>
<ol>
    <li>CV + Creative Portfolio (PDF, not exceeding a total of 10 pages and 5 projects) - your portfolio should contain examples of projects and/or research work completed in the last few years and demonstrate your skills and expertise as well as interest in the themes of focus of the Aral School. Please embed any video material within the Portfolio PDF.</li>
    <li>Copy of a university diploma.</li>
    <li>Motivation letter - please explain in no more than 500 words why you are interested in the program and how it connects to your area of research or practice.</li>
    <li>Passport photo page scan.</li>
</ol>
<p class="doc-note">Please note, only fully completed applications as per the list above will be considered.</p>
EN,
                    <<<'RU'
<div class="apply-red-bar">
    <span>Заполненная онлайн‑форма заявки</span>
    <div class="apply-btn-icon"></div>
</div>

<p class="doc-intro">Пожалуйста, подайте следующие документы вместе с заявкой:</p>
<ol>
    <li>CV + творческое портфолио (PDF, не более 10 страниц и 5 проектов) — портфолио должно содержать примеры проектов и/или исследовательских работ за последние годы и демонстрировать ваши навыки, экспертизу и интерес к темам Aral School. Пожалуйста, встраивайте любые видео‑материалы в PDF портфолио.</li>
    <li>Копия университетского диплома.</li>
    <li>Мотивационное письмо — объясните (не более 500 слов), почему вы заинтересованы в программе и как она связана с вашей областью исследования или практики.</li>
    <li>Паспортная страница с фото (скан).</li>
</ol>
<p class="doc-note">Пожалуйста, обратите внимание: будут рассмотрены только полностью заполненные заявки согласно списку выше.</p>
RU,
                    <<<'UZ'
<div class="apply-red-bar">
    <span>To'ldirilgan onlayn ariza</span>
    <div class="apply-btn-icon"></div>
</div>

<p class="doc-intro">Iltimos, arizangiz bilan birga quyidagi hujjatlarni yuboring:</p>
<ol>
    <li>Rezyume + ijodiy portfel (PDF, jami 10 bet va 5 loyihadan oshmasligi kerak) — portfelingiz so'nggi yillardagi loyihalar va/yoki tadqiqot ishlari namunalarini o'z ichiga olishi, shuningdek Aral School mavzulariga qiziqishingiz va tajribangizni ko'rsatishi kerak. Iltimos, video materiallarni portfel PDF ichiga joylashtiring.</li>
    <li>Universitet diplomi nusxasi.</li>
    <li>Motivatsion xat — 500 so'zdan oshmagan holda dasturga nega qiziqishingizni va u sizning tadqiqot yoki amaliyot sohangiz bilan qanday bog'liqligini tushuntiring.</li>
    <li>Pasportning foto sahifasi skani.</li>
</ol>
<p class="doc-note">E'tibor bering, yuqoridagi ro'yxat bo'yicha to'liq topshirilgan arizalarigina ko'rib chiqiladi.</p>
UZ,
                    <<<'KK'
<div class="apply-red-bar">
    <span>Толтырылған онлайн өтінім</span>
    <div class="apply-btn-icon"></div>
</div>

<p class="doc-intro">Өтініміңізбен бірге төмендегі құжаттарды тапсырыңыз:</p>
<ol>
    <li>CV + шығармашылық портфолио (PDF, барлығы 10 беттен және 5 жобадан аспауы керек) — портфолиода соңғы жылдардағы жобалар және/немесе зерттеу жұмыстарының үлгілері болуы, сондай‑ақ сіздің дағдыларыңыз, тәжірибеңіз және Aral School тақырыптарына қызығушылығыңыз көрінуі тиіс. Бейнематериалдарды портфолио PDF ішіне кірістіріңіз.</li>
    <li>Университет дипломының көшірмесі.</li>
    <li>Мотивациялық хат — 500 сөзден аспай, бағдарламаға неге қызығатыныңызды және оның сіздің зерттеу немесе практика саласыңызбен қалай байланысатынын түсіндіріңіз.</li>
    <li>Паспорттың фотобетінің сканы.</li>
</ol>
<p class="doc-note">Назар аударыңыз, жоғарыдағы тізім бойынша толық тапсырылған өтінімдер ғана қарастырылады.</p>
KK
                ),
            ],
        ];

        foreach ($applySteps as $step) {
            ApplyStep::create($step);
        }

        $teamMembers = [
            [
                'image' => 'img/gayane.png',
                'role_type' => 'leader',
                'sort_order' => 1,
                'name' => $this->same('Gayane Umerova'),
                'role' => $this->t('Project Chair', 'Председатель проекта', 'Loyiha raisi', 'Жоба төрағасы'),
                'bio' => $this->t(
                    <<<'EN'
<p>Gayane Umerova is dedicated to developing the culture sector in Uzbekistan.</p>
<p>Head of the Department of Creative Economy and Tourism of the Administration of the President of the Republic of Uzbekistan and Chairperson of the Uzbekistan Art and Culture Development Foundation (ACDF), Gayane Umerova is at the helm of building Uzbekistan's cultural infrastructure. Her efforts are bringing the nation's art, artists, and cultural heritage into the global spotlight. Currently, she is overseeing the restoration and development of the Centre for Contemporary Arts in Tashkent, poised to become a new cultural hub for the region, and is the commissioner of the Bukhara Biennial (5 September - 20 November 2025). She has spearheaded the inaugural Aral Culture Summit (April 4-6, 2025); is driving the construction of the new Uzbekistan National Museum designed by Tadao Ando and is leading the forthcoming 43rd session of the UNESCO General Conference that will take place in Samarkand on 30 October - 13 November 2025. She is the commissioner for the Uzbekistan Pavilion at the Venice Biennale Arte and Architettura since 2021 as well as for Uzbekistan's participation in Expo 2025 Osaka, among other significant projects.</p>
<p>Committed to boosting Uzbekistan's prominence on the international culture scene, Umerova serves as the Chairperson of the National Commission of Uzbekistan on UNESCO Affairs under the Cabinet of Ministers and in April 2025 has been awarded France's Order of Arts and Literature. Her public service commitment is evident in her dedication to creating opportunities for young people in Uzbekistan's cultural sector and fostering a cultural economy that unites communities and generations.</p>
EN,
                    <<<'RU'
<p>Гаяне Умерова посвящает себя развитию культурного сектора в Узбекистане.</p>
<p>Глава Департамента креативной экономики и туризма Администрации Президента Республики Узбекистан и председатель Фонда развития искусства и культуры Узбекистана (ACDF), Гаяне Умерова находится в центре построения культурной инфраструктуры страны. Её усилия выводят искусство, художников и культурное наследие Узбекистана на мировую арену. В настоящее время она курирует реставрацию и развитие Центра современного искусства в Ташкенте, который должен стать новым культурным хабом региона, и является комиссаром Бухарской биеннале (5 сентября – 20 ноября 2025). Она стояла у истоков первого Аральского культурного саммита (4–6 апреля 2025); продвигает строительство нового Национального музея Узбекистана по проекту Тадао Андо и возглавляет подготовку 43‑й сессии Генеральной конференции ЮНЕСКО, которая пройдет в Самарканде 30 октября – 13 ноября 2025. Она также комиссар Павильона Узбекистана на Венецианской биеннале искусства и архитектуры с 2021 года, а также отвечает за участие Узбекистана в Expo 2025 Osaka и ряд других значимых проектов.</p>
<p>Стремясь повысить присутствие Узбекистана на международной культурной сцене, Умерова возглавляет Национальную комиссию Узбекистана по делам ЮНЕСКО при Кабинете Министров и в апреле 2025 года была награждена французским орденом Искусств и литературы. Её приверженность государственной службе проявляется в стремлении создавать возможности для молодежи в культурном секторе Узбекистана и развивать культурную экономику, объединяющую сообщества и поколения.</p>
RU,
                    <<<'UZ'
<p>Gayane Umerova O'zbekistonda madaniyat sohasini rivojlantirishga bag'ishlangan.</p>
<p>O'zbekiston Respublikasi Prezidenti Administratsiyasining Ijodiy iqtisodiyot va turizm departamenti rahbari hamda O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasi (ACDF) raisi sifatida Gayane Umerova mamlakatning madaniy infratuzilmasini yaratish jarayonining markazida turibdi. Uning sa'y-harakatlari O'zbekiston san'ati, san'atkorlari va madaniy merosini global maydonga olib chiqmoqda. Hozirda u Toshkentdagi Zamonaviy san'at markazini restavratsiya va rivojlantirishni boshqarib, uni mintaqa uchun yangi madaniy markazga aylantirmoqda hamda Buxoro Biennalesi komissari hisoblanadi (2025-yil 5-sentabr – 20-noyabr). U 2025-yil 4–6-aprel kunlari bo'lib o'tgan ilk Aral Culture Summitni yo'lga qo'ydi; Tadao Ando loyihalagan yangi O'zbekiston Milliy muzeyi qurilishini ilgari surmoqda va Samarqandda 2025-yil 30-oktabr – 13-noyabr kunlari o'tadigan UNESCO Bosh konferensiyasining 43-sessiyasini boshqarib bormoqda. Shuningdek, u 2021-yildan beri Venetsiya biennalesi San'at va Arxitektura ko'rgazmasida O'zbekiston pavilyoni komissari, hamda Expo 2025 Osaka dagi O'zbekiston ishtiroki uchun mas'ul bo'lgan boshqa muhim loyihalar komissaridir.</p>
<p>O'zbekistonning xalqaro madaniy maydondagi nufuzini oshirishga intilgan Umerova Vazirlar Mahkamasi huzuridagi O'zbekistonning UNESCO ishlari bo'yicha Milliy komissiyasi raisi hisoblanadi va 2025-yil aprel oyida Fransiyaning San'at va adabiyot ordeni bilan taqdirlangan. Uning davlat xizmatiga sadoqati O'zbekistonning madaniyat sohasida yoshlar uchun imkoniyatlar yaratish va jamoalar hamda avlodlarni birlashtiradigan madaniy iqtisodiyotni rivojlantirishga qaratilgan sa'y-harakatlarida namoyon bo'ladi.</p>
UZ,
                    <<<'KK'
<p>Гаяне Умерова Өзбекстандағы мәдениет саласын дамытуға арналған.</p>
<p>Өзбекстан Республикасы Президенті Әкімшілігінің Креативті экономика және туризм департаментінің басшысы әрі Өзбекстан өнер және мәдениет даму қорының (ACDF) төрағасы ретінде Гаяне Умерова елдің мәдени инфрақұрылымын қалыптастырудың алдыңғы қатарында тұр. Оның жұмысы Өзбекстанның өнерін, суретшілерін және мәдени мұрасын әлемдік сахнаға шығарып келеді. Қазіргі уақытта ол Ташкенттегі Заманауи өнер орталығын қалпына келтіру және дамыту жұмыстарын қадағалап, оны өңір үшін жаңа мәдени хабқа айналдыруда және Бухара биенналесінің комиссары болып табылады (5 қыркүйек – 20 қараша 2025). Ол алғашқы Aral Culture Summit-ті (2025 жылғы 4–6 сәуір) ұйымдастырды; Тадао Андо жобалаған Өзбекстанның жаңа Ұлттық музейінің құрылысын ілгерілетіп, Самарқанда 2025 жылғы 30 қазан – 13 қараша аралығында өтетін ЮНЕСКО Бас конференциясының 43-сессиясын дайындауды басқарып отыр. Сондай-ақ 2021 жылдан бері Венеция биенналесінің өнер және сәулет бөліміндегі Өзбекстан павильонының комиссары және Expo 2025 Osaka көрмесіне Өзбекстанның қатысуын қоса алғанда бірқатар маңызды жобалардың комиссары.</p>
<p>Өзбекстанның халықаралық мәдени сахнадағы беделін арттыруға ұмтылған Умерова Министрлер Кабинеті жанындағы ЮНЕСКО істері жөніндегі Өзбекстанның Ұлттық комиссиясын басқарады және 2025 жылғы сәуірде Францияның Өнер және әдебиет орденімен марапатталды. Оның мемлекеттік қызметке адалдығы Өзбекстанның мәдени секторындағы жастарға мүмкіндіктер жасауға және қауымдастықтар мен ұрпақтарды біріктіретін мәдени экономиканы дамытуға бағытталған еңбегінен көрінеді.</p>
KK
                ),
            ],
            [
                'image' => 'img/jan.png',
                'role_type' => 'leader',
                'sort_order' => 2,
                'name' => $this->same('Jan Boelen'),
                'role' => $this->t('Program Director', 'Директор программы', 'Dastur direktori', 'Бағдарлама директоры'),
                'bio' => $this->t(
                    <<<'EN'
<p>Jan Boelen is a curator of design, architecture, and contemporary art. He is the artistic director of Atelier LUMA, an experimental laboratory for design in Arles, France. Boelen studied Product Design at Genk and is the founder and former artistic director of Z33 - House for contemporary art in Hasselt, Belgium. He was founder of the Master Social design at the Design Academy of Eindhoven till 2020 and Rektor of the Karlsruhe University of Arts and Design from 2019 till 2023. In 2014 he curated BIO50, the design biennial of Ljubljana in Slovenia. He was curator of the 4th Istanbul Design Biennial in Istanbul (2018) and initiated Manifesta 9 in Belgium (2012). Lastly, Boelen curated the Lithuanian Pavilion Planet of People in the Venice Architecture Biennial (2021).</p>
<p>Over the years he has been fashioning projects and exhibitions that encourage the visitor to look at everyday objects in a novel manner.</p>
<p>Boelen recently edited Social Matter, Social Design: For Good or Bad, all Design is Social (Valiz, 2020), and Muller Van Severen: Dialogue (Walther Koenig, 2021) and Atelier Luma, Bioregional design practices (Luma, 2023). His writing addresses the implications of design in everyday life and how artistic practices can shape the discipline.</p>
EN,
                    <<<'RU'
<p>Ян Бёлен — куратор дизайна, архитектуры и современного искусства. Он является художественным директором Atelier LUMA, экспериментальной лаборатории дизайна в Арле, Франция. Бёлен изучал продуктовый дизайн в Генке и является основателем и бывшим художественным директором Z33 — Дома современного искусства в Хасселте, Бельгия. Он был основателем магистерской программы Social Design в Design Academy Eindhoven до 2020 года и ректором Университета искусств и дизайна Карлсруэ с 2019 по 2023 год. В 2014 году он курировал BIO50, дизайн‑биеннале в Любляне, Словения. Он был куратором 4‑й Стамбульской биеннале дизайна (2018) и инициировал Manifesta 9 в Бельгии (2012). Наконец, Бёлен курировал Литовский павильон Planet of People на Венецианской архитектурной биеннале (2021).</p>
<p>На протяжении многих лет он создавал проекты и выставки, побуждающие посетителя по‑новому смотреть на повседневные объекты.</p>
<p>Недавно Бёлен отредактировал Social Matter, Social Design: For Good or Bad, all Design is Social (Valiz, 2020), а также Muller Van Severen: Dialogue (Walther Koenig, 2021) и Atelier Luma, Bioregional design practices (Luma, 2023). Его тексты посвящены влиянию дизайна на повседневную жизнь и тому, как художественные практики формируют дисциплину.</p>
RU,
                    <<<'UZ'
<p>Jan Boelen dizayn, me'morchilik va zamonaviy san'at kuratori. U Fransiyaning Arl shahridagi dizayn bo'yicha tajriba laboratoriyasi Atelier LUMA ning badiiy direktoridir. Boelen Genkda mahsulot dizaynini o'qigan va Belgiya, Xasseltdagi Z33 — zamonaviy san'at uyi asoschisi hamda sobiq badiiy direktoridir. U 2020-yilgacha Design Academy Eindhoven'da Social Design magistratura dasturining asoschisi bo'lgan va 2019–2023 yillarda Karlsruhe San'at va dizayn universiteti rektori lavozimida ishlagan. 2014 yilda u Lyublyanadagi BIO50 dizayn biennalesini kuratorlik qilgan. 2018 yilda Istanbul Design Biennalesining 4-nashri kuratori bo'lgan va 2012 yilda Belgiya'da Manifesta 9 ni boshlagan. Shuningdek, 2021 yilda Venetsiya Arxitektura biennalesida Litva pavilyoni Planet of People'ni kuratorlik qilgan.</p>
<p>Yillar davomida u tomoshabinni kundalik buyumlarni yangicha ko'rishga undaydigan loyihalar va ko'rgazmalar yaratib kelmoqda.</p>
<p>Boelen yaqinda Social Matter, Social Design: For Good or Bad, all Design is Social (Valiz, 2020), shuningdek Muller Van Severen: Dialogue (Walther Koenig, 2021) va Atelier Luma, Bioregional design practices (Luma, 2023) kitoblarini tahrir qilgan. Uning yozuvlari dizaynning kundalik hayotga ta'siri va badiiy amaliyotlarning sohani qanday shakllantirishi haqida.</p>
UZ,
                    <<<'KK'
<p>Ян Боелен — дизайн, сәулет және заманауи өнер кураторы. Ол Францияның Арль қаласындағы дизайнға арналған эксперименттік Atelier LUMA зертханасының көркемдік директоры. Боелен Генкте өнімдік дизайнды оқыған және Бельгияның Хасселт қаласындағы Z33 — заманауи өнер үйінің негізін қалаушы әрі бұрынғы көркемдік директоры. Ол 2020 жылға дейін Design Academy Eindhoven‑дағы Social Design магистрлік бағдарламасының негізін қалаушы болды және 2019–2023 жылдары Карлсруэ Өнер және дизайн университетінің ректоры қызметін атқарды. 2014 жылы Словенияның Любляна қаласындағы BIO50 дизайн биенналесін куртады. Ол 2018 жылы Ыстамбұл дизайн биенналесінің 4‑нұсқасының кураторы болды және 2012 жылы Бельгияда Manifesta 9 жобасын бастады. Соңында, 2021 жылы Венеция сәулет биенналесінде «Planet of People» Литва павильонын куртады.</p>
<p>Жылдар бойы ол көрерменді күнделікті заттарға жаңа қырынан қарауға ынталандыратын жобалар мен көрмелер жасап келеді.</p>
<p>Боелен жақында Social Matter, Social Design: For Good or Bad, all Design is Social (Valiz, 2020), сондай-ақ Muller Van Severen: Dialogue (Walther Koenig, 2021) және Atelier Luma, Bioregional design practices (Luma, 2023) басылымдарын редакциялады. Оның жазбалары дизайнның күнделікті өмірге әсері және көркемдік тәжірибелердің пәнді қалай қалыптастыратыны туралы.</p>
KK
                ),
            ],
            [
                'image' => 'img/ksenia.png',
                'role_type' => 'leader',
                'sort_order' => 3,
                'name' => $this->same("Ksenia Starikova-\nPozzoli"),
                'role' => $this->t('Program Lead', 'Руководитель программы', 'Dastur rahbari', 'Бағдарлама жетекшісі'),
                'bio' => $this->t(
                    <<<'EN'
<p>Ksenia is a design curator and creative strategist with a focus on circular innovations and regenerative place making. London School of Economics and Stanford graduate, she brings over 15 years of creative leadership and programme management across a variety of impact-driven brands, sectors and organisations. A journalist by background, she gradually centered her thinking at the intersection of science, design & new technologies, leading one of WPP design & innovation practices in London and NYC.</p>
<p>Her subsequent brand leadership of the iconic Design Hotels platform allowed for a greater focus on the topics of Community, Impact & Sustainability and led to her authorship of the first Regenerative Placemaking framework in Travel, widely adopted by the industry since then across the globe.</p>
<p>Driven by her interests in sustainable design practices, Ksenia now runs her own design studio, working with impact and climate-driven ventures and organisations on their content, programming and community initiatives.</p>
<p>She is also a curator of the largest climate tech festival in the UK, The Heat, and is focused on supporting a diverse range of pioneering bio design innovations in Fashion, Design and Architecture as part of it.</p>
EN,
                    <<<'RU'
<p>Ксения — куратор дизайна и креативный стратег, сфокусированный на циркулярных инновациях и регенеративном формировании среды. Выпускница London School of Economics и Stanford, она имеет более 15 лет опыта творческого лидерства и управления программами в разных брендах, секторах и организациях, ориентированных на влияние. По образованию журналист, она постепенно сосредоточила свой подход на пересечении науки, дизайна и новых технологий, возглавляя одну из практик дизайна и инноваций WPP в Лондоне и Нью‑Йорке.</p>
<p>Позднее руководство брендом легендарной платформы Design Hotels позволило ей усилить фокус на темах сообщества, воздействия и устойчивости и привело к созданию первого в сфере путешествий фреймворка Regenerative Placemaking, который с тех пор широко применяется в отрасли по всему миру.</p>
<p>Вдохновлённая устойчивыми практиками дизайна, Ксения сегодня ведёт собственную дизайн‑студию и работает с проектами и организациями, ориентированными на влияние и климат, над их контентом, программированием и инициативами для сообществ.</p>
<p>Она также является куратором крупнейшего в Великобритании фестиваля климатических технологий The Heat и сосредоточена на поддержке широкого спектра новаторских био‑дизайн инноваций в моде, дизайне и архитектуре.</p>
RU,
                    <<<'UZ'
<p>Ksenia — aylana (circular) innovatsiyalar va regenerativ joy yaratishga yo'naltirilgan dizayn kuratori va kreativ strateg. London School of Economics va Stanford bitiruvchisi sifatida u ta'sirga yo'naltirilgan turli brendlar, sohalar va tashkilotlarda 15 yildan ortiq kreativ yetakchilik va dastur boshqaruvi tajribasiga ega. Jurnalist sifatidagi tajribasi uni ilm‑fan, dizayn va yangi texnologiyalar kesishmasiga olib keldi; u London va Nyu‑Yorkdagi WPP dizayn va innovatsiya amaliyotlaridan biriga rahbarlik qilgan.</p>
<p>Keyinchalik Design Hotels platformasining brend yetakchiligini olib borishi uning hamjamiyat, ta'sir va barqarorlik mavzulariga e'tiborini kuchaytirib, sayohat sohasida birinchi Regenerative Placemaking ramkasini yaratishiga olib keldi. Bu yondashuv keyinchalik dunyo bo'ylab sohada keng qo'llanildi.</p>
<p>Barqaror dizayn amaliyotlariga qiziqishi uni o'z dizayn studiyasini yuritishga olib keldi; u ta'sir va iqlimga yo'naltirilgan loyihalar va tashkilotlar bilan ularning kontenti, dasturlari va hamjamiyat tashabbuslari ustida ishlaydi.</p>
<p>Shuningdek, u Buyuk Britaniyadagi eng yirik iqlim texnologiyalari festivali — The Heat kuratori bo'lib, uning doirasida moda, dizayn va me'morchilikdagi ilg'or bio‑dizayn innovatsiyalarini qo'llab-quvvatlashga e'tibor qaratadi.</p>
UZ,
                    <<<'KK'
<p>Ксения — айналымдық инновациялар мен регенеративті орта қалыптастыруға бағытталған дизайн кураторы және креативті стратег. London School of Economics пен Stanford университеттерінің түлегі ретінде ол әсерге бағдарланған түрлі брендтер, салалар және ұйымдарда 15 жылдан астам креативті көшбасшылық пен бағдарламаларды басқару тәжірибесіне ие. Журналистикадан бастаған кәсіби жолы оны ғылым, дизайн және жаңа технологиялар тоғысындағы ойлауға әкелді; ол Лондон мен Нью‑Йорктегі WPP дизайн және инновация практикасының бірін басқарды.</p>
<p>Кейінірек Design Hotels платформасының брендтік жетекшілігі оның қауымдастық, әсер және тұрақтылық тақырыптарына назарын күшейтіп, туризм саласындағы алғашқы Regenerative Placemaking негіздемесін жасауына алып келді. Бұл тәсіл кейіннен бүкіл әлемде кеңінен қолданылды.</p>
<p>Тұрақты дизайн тәжірибелеріне қызығушылығы Ксенияны өз дизайн студиясын басқаруға жетеледі; ол әсер мен климатқа бағытталған жобалар және ұйымдармен олардың контенті, бағдарламалары және қауымдастық бастамалары бойынша жұмыс істейді.</p>
<p>Ол сондай‑ақ Ұлыбританиядағы ең ірі климаттық технологиялар фестивалі The Heat‑тің кураторы және оның аясында сән, дизайн және сәулет салаларындағы озық био‑дизайн инновацияларын қолдауға бағытталған.</p>
KK
                ),
            ],
            [
                'image' => 'img/khudoyorxon.png',
                'role_type' => 'member',
                'sort_order' => 1,
                'name' => $this->same("Khudoyorkhon\nAbdujabborov"),
                'role' => $this->t('Project Manager', 'Менеджер проекта', 'Loyiha menejeri', 'Жоба менеджері'),
                'bio' => $this->t(
                    <<<'EN'
<p>Khudoyorkhon Abdujabborov is a project manager at the Aral School, responsible for coordinating partnerships, exhibitions, and local implementation across Karakalpakstan. He brings extensive experience in international cultural collaboration, having managed key initiatives for the Uzbekistan Art and Culture Development Foundation, including the exhibition "A Glimpse Through Time: The Legacy of Khudaybergen Devanov" at UNESCO in Paris and the redevelopment of the permanent collection at the State Museum of Arts named after I.V. Savitsky in Nukus. Prior to this, he worked in diplomatic and cultural roles at the Embassy of Poland in Uzbekistan and the El-Yurt Umidi Foundation. He holds a degree in International Relations from Kazan Federal University and is also a laureate of an international circus arts festival, with performance experience in Uzbekistan, Mexico, and the USA.</p>
EN,
                    <<<'RU'
<p>Худойорхон Абдужабборов — менеджер проекта в Aral School, отвечает за координацию партнерств, выставок и локальную реализацию в Каракалпакстане. Он обладает обширным опытом международного культурного сотрудничества и руководил ключевыми инициативами Фонда развития искусства и культуры Узбекистана, включая выставку «Взгляд сквозь время: наследие Худойбергена Деванова» в ЮНЕСКО (Париж) и обновление постоянной экспозиции Государственного музея искусств имени И.В. Савицкого в Нукусе. Ранее он работал в дипломатических и культурных должностях в Посольстве Польши в Узбекистане и в фонде El‑Yurt Umidi. Он имеет степень в области международных отношений Казанского федерального университета и является лауреатом международного фестиваля циркового искусства, с опытом выступлений в Узбекистане, Мексике и США.</p>
RU,
                    <<<'UZ'
<p>Xudoyorkhon Abdujabborov Aral Schoolda loyiha menejeri bo'lib, Qoraqalpog'iston bo'ylab hamkorliklar, ko'rgazmalar va mahalliy amalga oshirish ishlarini muvofiqlashtiradi. U O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasining muhim tashabbuslarini boshqargan holda xalqaro madaniy hamkorlik bo'yicha katta tajribaga ega, jumladan Parijdagi UNESCOda o'tkazilgan "A Glimpse Through Time: The Legacy of Khudaybergen Devanov" ko'rgazmasi va Nukusdagi I.V. Savitskiy nomidagi Davlat san'at muzeyining doimiy kolleksiyasini yangilash. Avval u O'zbekistondagi Polsha elchixonasi va El‑Yurt Umidi jamg'armasida diplomatik va madaniy lavozimlarda ishlagan. U Qozon Federal universitetining xalqaro munosabatlar yo'nalishi bo'yicha diplomiga ega hamda xalqaro sirk san'ati festivali laureati bo'lib, O'zbekiston, Meksika va AQShda chiqish tajribasiga ega.</p>
UZ,
                    <<<'KK'
<p>Худойорхон Абдужабборов — Aral School жобасының менеджері, Қарақалпақстандағы серіктестіктерді, көрмелерді және жергілікті іске асыруды үйлестіруге жауапты. Ол Өзбекстан өнер және мәдениет даму қорының негізгі бастамаларын басқарған халықаралық мәдени ынтымақтастық тәжірибесіне ие, соның ішінде Париждегі ЮНЕСКО‑дағы «A Glimpse Through Time: The Legacy of Khudaybergen Devanov» көрмесі және Нүкістегі И.В. Савицкий атындағы Мемлекеттік өнер музейінің тұрақты коллекциясын жаңарту. Бұған дейін ол Өзбекстандағы Польша елшілігінде және El‑Yurt Umidi қорында дипломатиялық және мәдени қызметтер атқарған. Ол Қазан федералдық университетінде халықаралық қатынастар мамандығы бойынша диплом алған әрі халықаралық цирк өнері фестивалінің лауреаты, Өзбекстанда, Мексикада және АҚШ-та өнер көрсету тәжірибесі бар.</p>
KK
                ),
            ],
            [
                'image' => 'img/gulnara.png',
                'role_type' => 'member',
                'sort_order' => 2,
                'name' => $this->same("Gulnara\nJoldasbaeva"),
                'role' => $this->t('Local Coordinator', 'Местный координатор', 'Mahalliy koordinator', 'Жергілікті үйлестіруші'),
                'bio' => $this->t(
                    <<<'EN'
<p>Gulnara Joldasbaeva is a cultural producer, educator, and local coordinator of the Aral Culture Summit in Karakalpakstan. She curates interdisciplinary events connecting ecology, heritage, and contemporary art. As part of the School, she brings together artists, scientists, and community members to reflect on the Aral Sea crisis through creative formats. In partnership with UNDP, she also launched Bilim, a platform offering programming and language education to young women in underrepresented communities. Her experience in ecological education and local cultural engagement makes her an essential link between artistic content and regional relevance.</p>
EN,
                    <<<'RU'
<p>Гульнара Жолдасбаева — культурный продюсер, педагог и местный координатор Aral Culture Summit в Каракалпакстане. Она курирует междисциплинарные события, соединяющие экологию, наследие и современное искусство. В рамках школы она объединяет художников, ученых и представителей сообществ, чтобы осмыслить кризис Аральского моря через творческие форматы. В партнерстве с ПРООН она также запустила Bilim — платформу, предлагающую программирование и языковое образование молодым женщинам из недостаточно представленных сообществ. Её опыт в экологическом образовании и локальной культурной вовлеченности делает её ключевым связующим звеном между художественным содержанием и региональной релевантностью.</p>
RU,
                    <<<'UZ'
<p>Gulnara Joldasbaeva — madaniyat prodyuseri, o'qituvchi va Qoraqalpog'istondagi Aral Culture Summitning mahalliy koordinatori. U ekologiya, meros va zamonaviy san'atni bog'laydigan fanlararo tadbirlarni kuratorlik qiladi. Maktab doirasida u Aral dengizi inqirozini ijodiy formatlar orqali yoritish uchun rassomlar, olimlar va hamjamiyat a'zolarini birlashtiradi. UNDP bilan hamkorlikda u Bilim platformasini ham ishga tushirdi — u yetarlicha vakillikka ega bo'lmagan hamjamiyatlardan bo'lgan yosh ayollar uchun dasturlash va til ta'limini taklif qiladi. Uning ekologik ta'lim va mahalliy madaniy ishtirok bo'yicha tajribasi uni badiiy mazmun va mintaqaviy ahamiyat o'rtasidagi muhim bog'lovchiga aylantiradi.</p>
UZ,
                    <<<'KK'
<p>Гүлнара Жолдасбаева — мәдени продюсер, педагог және Қарақалпақстандағы Aral Culture Summit-тің жергілікті үйлестірушісі. Ол экология, мұра және заманауи өнерді байланыстыратын пәнаралық іс-шараларды курирует. Мектеп аясында ол Арал теңізі дағдарысын шығармашылық форматтар арқылы ой елегінен өткізу үшін суретшілерді, ғалымдарды және қауымдастық мүшелерін біріктіреді. БҰҰ Даму бағдарламасымен серіктестікте ол Bilim платформасын да іске қосты — ол жеткіліксіз қамтылған қауымдастықтардағы жас әйелдерге бағдарламалау және тіл білімін ұсынады. Оның экологиялық білім беру және жергілікті мәдени қатысу тәжірибесі оны көркем мазмұн мен өңірлік өзектілік арасындағы маңызды байланыстырушы етеді.</p>
KK
                ),
            ],
            [
                'image' => 'img/cyril.png',
                'role_type' => 'member',
                'sort_order' => 3,
                'name' => $this->same("Cyril\nZammit"),
                'role' => $this->t('Advisor', 'Советник', 'Maslahatchi', 'Кеңесші'),
                'bio' => $this->t(
                    <<<'EN'
<p>Cyril Zammit is an independent advisor and design consultant, with a career devoted to supporting cultural and creative initiatives across the Middle East and Central Asia.</p>
<p>He began his professional journey at the Institut Français in Prague, followed by a role at the Cultural Department of the French Embassy in London. He later moved to Switzerland, where he oversaw international sponsorship for the Montreux Jazz Festival, before taking on cultural sponsorship roles at UBS and HSBC Private Bank.</p>
<p>In 2009, Cyril relocated to the UAE, where he played a key role in launching Abu Dhabi Art, and went on to establish Design Days Dubai and Dubai Design Week. He later served as an advisor to Dubai Culture & Arts Authority, and subsequently joined the UAE Ministry of Foreign Affairs & International Cooperation as a Cultural Affairs Expert in the Office of Public and Cultural Diplomacy.</p>
<p>Since March 2022, he has been advising the Uzbekistan Art and Culture Development Foundation. In 2023, he also became an advisor to L'ÉCOLE Middle East in Dubai and was appointed Design Consultant to the Royal Commission for AlUla. Cyril is also a regular design columnist for Esquire Middle East.</p>
EN,
                    <<<'RU'
<p>Сирил Заммит — независимый советник и консультант по дизайну, чья карьера посвящена поддержке культурных и креативных инициатив на Ближнем Востоке и в Центральной Азии.</p>
<p>Он начал профессиональный путь в Institut Français в Праге, затем работал в культурном отделе посольства Франции в Лондоне. Позже он переехал в Швейцарию, где курировал международное спонсорство фестиваля Montreux Jazz Festival, а затем занялся культурными спонсорскими программами в UBS и HSBC Private Bank.</p>
<p>В 2009 году Сирил переехал в ОАЭ, где сыграл ключевую роль в запуске Abu Dhabi Art и затем основал Design Days Dubai и Dubai Design Week. Позже он консультировал Dubai Culture & Arts Authority, а затем присоединился к Министерству иностранных дел и международного сотрудничества ОАЭ в качестве эксперта по культурным вопросам в Управлении публичной и культурной дипломатии.</p>
<p>С марта 2022 года он консультирует Фонд развития искусства и культуры Узбекистана. В 2023 году он также стал советником L'ÉCOLE Middle East в Дубае и был назначен дизайн‑консультантом Королевской комиссии Аль‑Улы. Сирил также регулярно публикуется как колумнист по дизайну в Esquire Middle East.</p>
RU,
                    <<<'UZ'
<p>Cyril Zammit — mustaqil maslahatchi va dizayn konsultanti bo'lib, uning faoliyati Yaqin Sharq va Markaziy Osiyodagi madaniy hamda ijodiy tashabbuslarni qo'llab-quvvatlashga bag'ishlangan.</p>
<p>U professional faoliyatini Pragada Institut Françaisda boshlagan, so'ng Londondagi Fransiya elchixonasining madaniyat bo'limida ishlagan. Keyinchalik Shveytsariyaga ko'chib, Montreux Jazz Festivalining xalqaro homiyligini boshqargan va so'ngra UBS hamda HSBC Private Bank'da madaniy homiylik rollarini bajargan.</p>
<p>2009-yilda Cyril BAAga ko'chib o'tib, Abu Dhabi Art'ni ishga tushirishda muhim rol o'ynadi va keyin Design Days Dubai hamda Dubai Design Weekni tashkil etdi. Keyinroq u Dubai Culture & Arts Authorityga maslahatchi bo'lib xizmat qildi va so'ngra BAA Tashqi ishlar va xalqaro hamkorlik vazirligining Jamoatchilik va madaniy diplomatiya bo'limida madaniy masalalar bo'yicha ekspert sifatida ishladi.</p>
<p>2022-yil martidan buyon u O'zbekiston san'at va madaniyatni rivojlantirish jamg'armasiga maslahatchilik qilib kelmoqda. 2023-yilda u Dubaydagi L'ÉCOLE Middle East'ga maslahatchi bo'ldi va AlUla Qirollik komissiyasi uchun dizayn konsultanti etib tayinlandi. Cyril shuningdek Esquire Middle East'da dizayn bo'yicha doimiy ustun (kolumnist) muallifidir.</p>
UZ,
                    <<<'KK'
<p>Сирил Заммит — тәуелсіз кеңесші және дизайн консультанты, оның кәсіби жолы Таяу Шығыс пен Орталық Азиядағы мәдени және креативті бастамаларды қолдауға арналған.</p>
<p>Ол кәсіби жолын Прагада Institut Français ұйымында бастады, кейін Лондонда Франция елшілігінің мәдени бөлімінде қызмет етті. Кейін Швейцарияға қоныс аударып, Montreux Jazz Festival-дің халықаралық демеушілігін басқарды, содан соң UBS және HSBC Private Bank-та мәдени демеушілік бағытында жұмыс істеді.</p>
<p>2009 жылы Сирил БАӘ‑ге көшіп, Abu Dhabi Art жобасын іске қосуда маңызды рөл атқарды және кейін Design Days Dubai мен Dubai Design Week жобаларын құрды. Кейін ол Dubai Culture & Arts Authority ұйымына кеңесші болды және одан соң БАӘ Сыртқы істер және халықаралық ынтымақтастық министрлігінің Қоғамдық және мәдени дипломатия кеңсесінде мәдени мәселелер жөніндегі сарапшы ретінде жұмыс істеді.</p>
<p>2022 жылдың наурызынан бері ол Өзбекстан өнер және мәдениет даму қорына кеңес береді. 2023 жылы ол Дубайдағы L'ÉCOLE Middle East ұйымының кеңесшісі атанып, AlUla Корольдік комиссиясының дизайн консультанты болып тағайындалды. Сирил сондай-ақ Esquire Middle East журналының дизайн бойынша тұрақты колумнисі.</p>
KK
                ),
            ],
            [
                'image' => 'img/anastasia.png',
                'role_type' => 'member',
                'sort_order' => 4,
                'name' => $this->same("Anastasia\nSinitsyna"),
                'role' => $this->t('Research & Development', 'Исследования и разработка', 'Tadqiqot va rivojlantirish', 'Зерттеу және дамыту'),
                'bio' => $this->t(
                    <<<'EN'
<p>Anastasia Sinitsyna is a researcher and cultural consultant working at the intersection of environmental humanities, design, and education. She is currently based in Venice, Italy, where she coordinates international exhibitions and cultural initiatives, including the Spanish (2023) and Uzbekistan (2022-2025) National Pavilions at the Venice Biennale. Her work focuses on ecological transformation, sustainable futures, and the role of art and education in reimagining cultural and physical landscapes.</p>
<p>Anastasia also leads research and programming for the Aral Culture Summit, a long-term initiative of ACDF aimed at supporting biocultural diversity and ecological regeneration in Karakalpakstan and the broader Aral Sea region.</p>
EN,
                    <<<'RU'
<p>Анастасия Синицына — исследователь и культурный консультант, работающая на стыке экологических гуманитарных наук, дизайна и образования. В настоящее время она базируется в Венеции (Италия), где координирует международные выставки и культурные инициативы, включая национальные павильоны Испании (2023) и Узбекистана (2022–2025) на Венецианской биеннале. Её работа сосредоточена на экологической трансформации, устойчивых будущих и роли искусства и образования в переосмыслении культурных и физических ландшафтов.</p>
<p>Анастасия также руководит исследовательской и программной работой Aral Culture Summit — долгосрочной инициативы ACDF, направленной на поддержку биокультурного разнообразия и экологической регенерации в Каракалпакстане и более широком регионе Аральского моря.</p>
RU,
                    <<<'UZ'
<p>Anastasia Sinitsyna — ekologik gumanitar fanlar, dizayn va ta'lim kesishmasida ishlaydigan tadqiqotchi va madaniy konsultant. Hozirda u Italiyaning Venetsiya shahrida yashaydi va xalqaro ko'rgazmalar hamda madaniy tashabbuslarni, jumladan Venetsiya biennalesidagi Ispaniya (2023) va O'zbekiston (2022–2025) milliy pavilyonlarini muvofiqlashtiradi. Uning ishlari ekologik transformatsiya, barqaror kelajaklar va san'at hamda ta'limning madaniy va jismoniy landshaftlarni qayta tasavvur qilishdagi roliga qaratilgan.</p>
<p>Anastasia, shuningdek, ACDFning Qoraqalpog'iston va kengroq Orol dengizi mintaqasida biokultural xilma-xillik hamda ekologik regeneratsiyani qo'llab-quvvatlashga qaratilgan uzoq muddatli Aral Culture Summit tashabbusi uchun tadqiqot va dasturlash ishlariga rahbarlik qiladi.</p>
UZ,
                    <<<'KK'
<p>Анастасия Синицына — экологиялық гуманитарлық ғылымдар, дизайн және білім беру тоғысында жұмыс істейтін зерттеуші әрі мәдени консультант. Қазіргі уақытта ол Италияның Венеция қаласында тұрады және халықаралық көрмелер мен мәдени бастамаларды, соның ішінде Венеция биенналесіндегі Испания (2023) және Өзбекстан (2022–2025) ұлттық павильондарын үйлестіреді. Оның жұмысы экологиялық трансформацияға, тұрақты болашақтарға және өнер мен білім берудің мәдени және физикалық ландшафтарды қайта елестетудегі рөліне бағытталған.</p>
<p>Анастасия сондай-ақ ACDF-тің Қарақалпақстан мен Арал теңізінің кең өңіріндегі биомәдени әртүрлілік пен экологиялық регенерацияны қолдауға бағытталған ұзақ мерзімді Aral Culture Summit бастамасының зерттеу және бағдарламалық жұмыстарына жетекшілік етеді.</p>
KK
                ),
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }

        $mentors = [
            [
                'image' => 'img/sagitjan.png',
                'category' => 'water',
                'sort_order' => 1,
                'name' => $this->same('Sagitjan Aytjanov'),
                'bio' => $this->t(
                    <<<'EN'
<p>Sagitjan has a profound experience in the field of complex projects management with technical expertise in programs planning, management, monitoring and evaluation, community empowerment, employment and business support. He has been engaged in a wide range of development, programming and implementation processes of UN programmes for the last 20 years both at national and international level.</p>
<p>Sagitjan worked as WASH Officer for UNICEF Country Office in Uzbekistan by managing several UN Joint Programmes in Karakalpakstan, focused on improving access to safe drinking water in remote communities of Karakalpakstan, improving WASH facilities in 25 schools and 36 healthcare facilities and the revision of WASH hardware and software standards (2021-2025).</p>
<p>He was also the Project Manager for UNDP Uzbekistan "Promoting Youth Employment in Uzbekistan" on managing youth employment and entrepreneurial skills development. He was also a Team Leader on Social Services/ Monitoring & Evaluation for several UN Joint Programmes in Aral Sea region (2013-2014; 2016-2019).</p>
<p>At International level, Sagitjan served as Planning, Monitoring and Evaluation Officer for UN Liberia Resident Coordinator's Office, where he was engaged in coordination of 16 UN agencies during the EVD outbreak (2014-2016).</p>
EN,
                    <<<'RU'
<p>Сагитжан обладает глубоким опытом в управлении сложными проектами и технической экспертизой в планировании программ, управлении, мониторинге и оценке, расширении прав и возможностей сообществ, поддержке занятости и бизнеса. В течение последних 20 лет он участвовал в широком спектре процессов разработки, программирования и реализации программ ООН на национальном и международном уровнях.</p>
<p>Сагитжан работал специалистом WASH в страновом офисе ЮНИСЕФ в Узбекистане, управляя несколькими совместными программами ООН в Каракалпакстане, направленными на улучшение доступа к безопасной питьевой воде в удалённых сообществах, улучшение WASH‑инфраструктуры в 25 школах и 36 медицинских учреждениях, а также пересмотр стандартов WASH‑оборудования и программ (2021–2025).</p>
<p>Он также был менеджером проекта UNDP Uzbekistan «Promoting Youth Employment in Uzbekistan», где отвечал за развитие молодежной занятости и предпринимательских навыков. Также он был руководителем группы по социальным услугам/мониторингу и оценке в рамках нескольких совместных программ ООН в регионе Аральского моря (2013–2014; 2016–2019).</p>
<p>На международном уровне Сагитжан работал офицером по планированию, мониторингу и оценке в офисе координатора ООН в Либерии, где участвовал в координации 16 агентств ООН во время вспышки ЭВД (2014–2016).</p>
RU,
                    <<<'UZ'
<p>Sagitjan murakkab loyihalarni boshqarish sohasida chuqur tajribaga ega bo'lib, dasturlarni rejalashtirish, boshqarish, monitoring va baholash, hamjamiyatlarni qo'llab-quvvatlash, bandlik va biznesni rivojlantirish bo'yicha texnik ekspertizaga ega. So'nggi 20 yil davomida u BMT dasturlarini milliy va xalqaro darajada ishlab chiqish, dasturlash va amalga oshirish jarayonlarida keng ishtirok etib kelgan.</p>
<p>Sagitjan O'zbekistondagi UNICEF Country Office'da WASH xodimi sifatida ishlagan, Qoraqalpog'istonda bir nechta BMT qo'shma dasturlarini boshqarib, uzoq hududlardagi hamjamiyatlarga xavfsiz ichimlik suvi bilan ta'minlash, 25 maktab va 36 tibbiy muassasada WASH infratuzilmasini yaxshilash hamda WASH uskunalari va dasturiy standartlarini qayta ko'rib chiqishga (2021–2025) qaratilgan ishlarni olib borgan.</p>
<p>Shuningdek, u UNDP Uzbekistanning "Promoting Youth Employment in Uzbekistan" loyihasi doirasida yoshlar bandligi va tadbirkorlik ko'nikmalarini rivojlantirish bo'yicha loyiha menejeri bo'lgan. U Aral dengizi mintaqasidagi bir nechta BMT qo'shma dasturlarida (2013–2014; 2016–2019) ijtimoiy xizmatlar/monitoring va baholash bo'yicha guruh rahbari ham bo'lgan.</p>
<p>Xalqaro darajada Sagitjan BMTning Liberiya rezident-koordinator ofisida rejalashtirish, monitoring va baholash bo'yicha xodim sifatida ishlagan va EVD epidemiyasi (2014–2016) davrida 16 ta BMT agentligini muvofiqlashtirishda ishtirok etgan.</p>
UZ,
                    <<<'KK'
<p>Сагитжан күрделі жобаларды басқару саласында терең тәжірибеге ие және бағдарламаларды жоспарлау, басқару, мониторинг пен бағалау, қауымдастықтарды қолдау, жұмыспен қамту және бизнесті қолдау бойынша техникалық біліктілігі бар. Соңғы 20 жылда ол БҰҰ бағдарламаларын ұлттық және халықаралық деңгейде әзірлеу, бағдарламалау және іске асыру процестеріне кеңінен қатысып келеді.</p>
<p>Сагитжан Өзбекстандағы ЮНИСЕФ елдік офисінде WASH маманы болып жұмыс істеп, Қарақалпақстандағы бірнеше БҰҰ бірлескен бағдарламаларын басқарды. Бұл бағдарламалар шалғай қауымдастықтарды қауіпсіз ауызсумен қамтамасыз етуге, 25 мектеп пен 36 медициналық мекемедегі WASH инфрақұрылымын жақсартуға және WASH жабдықтары мен бағдарламалық стандарттарын қайта қарауға (2021–2025) бағытталды.</p>
<p>Ол сондай‑ақ UNDP Uzbekistan‑ның «Promoting Youth Employment in Uzbekistan» жобасында жастардың жұмыспен қамтылуы мен кәсіпкерлік дағдыларын дамыту бойынша жоба менеджері болды. Сонымен қатар, Арал теңізі өңіріндегі бірнеше БҰҰ бірлескен бағдарламаларында (2013–2014; 2016–2019) әлеуметтік қызметтер/мониторинг және бағалау тобының жетекшісі қызметін атқарды.</p>
<p>Халықаралық деңгейде Сагитжан Либериядағы БҰҰ тұрақты координаторы кеңсесінде жоспарлау, мониторинг және бағалау жөніндегі офицер болып, ЭВД індеті кезінде (2014–2016) 16 БҰҰ агенттігінің үйлестіру жұмысына қатысты.</p>
KK
                ),
            ],
            [
                'image' => 'img/elena.png',
                'category' => 'food',
                'sort_order' => 1,
                'name' => $this->same('Elena Kan'),
                'bio' => $this->t(
                    <<<'EN'
<p>Elena Kan is the director of a young NGO "KIVA Center" dedicated to advancing sustainable development by integrating science, education, research, production, and agribusiness - one of the few civil society organizations of its kind in the Aral Sea region.</p>
<p>With a background in language studies and ecology, Elena has built extensive experience in capacity building for efficient land and water use in agriculture. Among her current engagements is the promotion of effective production and export of alternative, low-resource oilseed crops among farmers and agripreneurs. Elena also collaborates with protected areas to enhance their educational programs and eco-tourism capacities through non-formal learning on natural resource conservation and fostering civic activism for environmental protection. She strives to drive positive changes in both urban and rural areas, contributing to nature conservation and the resilience of local ecosystems and communities through education and collaboration.</p>
EN,
                    <<<'RU'
<p>Елена Кан — директор молодого НПО «KIVA Center», которое занимается продвижением устойчивого развития через интеграцию науки, образования, исследований, производства и агробизнеса — одной из немногих организаций гражданского общества такого рода в регионе Аральского моря.</p>
<p>Имея образование в области лингвистики и экологии, Елена накопила обширный опыт в наращивании потенциала эффективного использования земли и воды в сельском хозяйстве. Среди её текущих задач — продвижение эффективного производства и экспорта альтернативных масличных культур с низкими ресурсными затратами среди фермеров и агропредпринимателей. Елена также сотрудничает с охраняемыми территориями для усиления их образовательных программ и экотуристического потенциала через неформальное обучение вопросам сохранения природных ресурсов и развитие гражданской активности в сфере охраны окружающей среды. Она стремится к позитивным изменениям в городских и сельских районах, способствуя сохранению природы и устойчивости локальных экосистем и сообществ через образование и сотрудничество.</p>
RU,
                    <<<'UZ'
<p>Elena Kan — Aral dengizi mintaqasidagi shunday tashkilotlardan kam sonlisiga kiruvchi, ilm‑fan, ta'lim, tadqiqot, ishlab chiqarish va agribiznesni uyg'unlashtirish orqali barqaror rivojlanishni ilgari surishga bag'ishlangan "KIVA Center" nomli yosh NNT direktori.</p>
<p>Tilshunoslik va ekologiya yo'nalishidagi bilimlari asosida Elena qishloq xo'jaligida yer va suvdan samarali foydalanish bo'yicha salohiyatni oshirishda katta tajriba to'plagan. Uning hozirgi faoliyatlaridan biri — fermerlar va agrobiznes vakillari orasida resurs tejamkor, muqobil moyli ekinlarni samarali ishlab chiqarish va eksportini targ'ib qilish. Elena, shuningdek, tabiiy resurslarni muhofaza qilish bo'yicha norasmiy ta'lim va atrof‑muhitni himoya qilish bo'yicha fuqarolik faolligini kuchaytirish orqali muhofaza etiladigan hududlarning ta'lim dasturlari hamda ekoturizm salohiyatini oshirishga hissa qo'shadi. U shahar va qishloq hududlarida ijobiy o'zgarishlarni rag'batlantirib, ta'lim va hamkorlik orqali tabiatni asrash va mahalliy ekotizimlar hamda hamjamiyatlar barqarorligiga hissa qo'shadi.</p>
UZ,
                    <<<'KK'
<p>Елена Кан — Aral теңізі өңіріндегі санаулы азаматтық ұйымдардың бірі саналатын, ғылым, білім, зерттеу, өндіріс және агробизнесті біріктіру арқылы тұрақты дамуды ілгерілетуге арналған «KIVA Center» атты жас ҮЕҰ‑ның директоры.</p>
<p>Тіл білімі мен экология бойынша білімі бар Елена ауыл шаруашылығында жер мен суды тиімді пайдалануға бағытталған әлеуетті арттыруда үлкен тәжірибе жинады. Қазіргі жұмыстарының бірі — фермерлер мен агробизнес өкілдері арасында ресурсы аз жұмсалатын балама майлы дақылдарды тиімді өндіру және экспорттауды ілгерілету. Елена сондай‑ақ табиғи ресурстарды сақтау бойынша бейресми оқыту және қоршаған ортаны қорғауда азаматтық белсенділікті қолдау арқылы қорғалатын аумақтардың білім беру бағдарламалары мен экотуризм әлеуетін арттыруға үлес қосады. Ол қала және ауыл аймақтарында оң өзгерістерге ықпал етіп, білім беру мен ынтымақтастық арқылы табиғатты қорғауға және жергілікті экожүйелер мен қауымдастықтардың төзімділігіне үлес қосады.</p>
KK
                ),
            ],
            [
                'image' => 'img/eva.png',
                'category' => 'water',
                'sort_order' => 2,
                'name' => $this->same('Eva Pfannes'),
                'bio' => $this->t(
                    <<<'EN'
<p>Eva is a passionate practitioner and frequent key-note speaker who thrives working in complex and fast developing environments with public sector and cultural clients, focused on the benefits for society and the natural environment. She co-founded OOZE architects; urbanists with her partner Sylvain Hartenberg in Rotterdam. "OOZE is championing a culture of innovation, inclusion and integration: radical system thinkers and doers, passionate collaborators leaving no one behind, and catalysts' designers that foster innovative interventions for real change, from the smallest community to the world" (quote Henk Ovink, 2025). Eva specializes in urban strategies, blue-green infrastructure and bankable concept developments that mitigate and adapt to climate change impacts with Nature-based and Culture-based solutions.</p>
<p>For the Dutch Water as Leverage programme, she is the team lead for the CITY OF 1000 TANKS alliance in Chennai, developing a water balance model across the city to make the most inclusive, efficient and economic use of water locally. Água Carioca, an urban circulatory system for Brazil, received the Holcim Prize for Sustainable Development. As co-curator and lead designer for the International Architecture Biennial Rotterdam (IABR) Eva and her team developed a neighbourhood energy transition model prioritizing community ownership, multi-scalar benefits, and actionable implementation frameworks.</p>
EN,
                    <<<'RU'
<p>Ева — увлечённый практик и частый ключевой спикер, успешно работающий в сложных и быстро меняющихся условиях с государственными и культурными заказчиками, ориентируясь на пользу для общества и природной среды. Она со‑основала OOZE architects; urbanists вместе со своим партнёром Сильвеном Хартернбергом в Роттердаме. «OOZE продвигает культуру инноваций, инклюзии и интеграции: радикальные системные мыслители и практики, страстные коллабораторы, не оставляющие никого позади, и дизайнеры‑катализаторы, которые создают инновационные вмешательства ради реальных изменений — от самой маленькой общины до всего мира» (цитата Хенка Овинка, 2025). Ева специализируется на городских стратегиях, сине‑зелёной инфраструктуре и жизнеспособных концепциях, которые помогают смягчать последствия изменения климата и адаптироваться к ним с помощью решений, основанных на природе и культуре.</p>
<p>В рамках голландской программы Water as Leverage она возглавляет альянс CITY OF 1000 TANKS в Ченнаи, разрабатывая модель водного баланса для всего города, чтобы обеспечить максимально инклюзивное, эффективное и экономичное локальное использование воды. Água Carioca, городская «кровеносная» система для Бразилии, получила премию Holcim Prize for Sustainable Development. Как со‑куратор и ведущий дизайнер Международной архитектурной биеннале Роттердама (IABR) Ева и её команда разработали модель энергетического перехода на уровне района, где приоритет отдан общественному владению, многоуровневой пользе и практическим механизмам внедрения.</p>
RU,
                    <<<'UZ'
<p>Eva — ishtiyoq bilan ishlaydigan amaliyotchi va tez-tez asosiy ma'ruzachi bo'lib, u murakkab va tez rivojlanayotgan muhitlarda davlat sektori va madaniy mijozlar bilan ishlashni yoqtiradi; e'tibori jamiyat va tabiiy muhitga foyda keltirishga qaratilgan. U Rotterdamda hamkori Sylvain Hartenberg bilan OOZE architects; urbanists kompaniyasiga asos solgan. "OOZE innovatsiya, inklyuziya va integratsiya madaniyatini ilgari suradi: radikal tizimli fikrlovchilar va amaliyotchilar, hech kimni ortda qoldirmaydigan ishtiyoqli hamkorlar hamda kichik hamjamiyatdan tortib butun dunyogacha real o'zgarishlar uchun innovatsion aralashuvlarni yaratadigan katalizator dizaynerlar" (Henk Ovink iqtibosi, 2025). Eva shahar strategiyalari, ko'k‑yashil infratuzilma va iqlim o'zgarishi ta'sirlarini kamaytirish hamda moslashishga yordam beradigan, tabiat va madaniyatga asoslangan yechimlar bilan bankable (moliyaviy jihatdan asosli) konseptlarni ishlab chiqishga ixtisoslashgan.</p>
<p>Gollandiyaning Water as Leverage dasturi doirasida u Chennaydagi CITY OF 1000 TANKS alyansining jamoa yetakchisi bo'lib, shaharda suvdan eng inklyuziv, samarali va iqtisodiy foydalanish uchun suv balansi modelini ishlab chiqmoqda. Braziliya uchun shahar aylanish tizimi bo'lgan Água Carioca Holcim Prize for Sustainable Development mukofotini oldi. Rotterdam xalqaro arxitektura biennalesi (IABR)ning hamkuratori va yetakchi dizayneri sifatida Eva va uning jamoasi hamjamiyat egaligi, ko'p darajali foyda va amaliy joriy etish mexanizmlarini ustuvor qilgan mahalla energiya o'tishi modelini ishlab chiqdi.</p>
UZ,
                    <<<'KK'
<p>Ева — құлшына жұмыс істейтін практик және жиі негізгі баяндаушы, ол қоғам мен табиғи ортаға пайда әкелуге бағытталған мемлекеттік сектор және мәдени ұйымдармен күрделі әрі жылдам дамып жатқан ортада жұмыс істеуді жақсы көреді. Ол Роттердамда серіктесі Сильвен Хартернбергпен бірге OOZE architects; urbanists ұйымын бірге құрды. «OOZE инновация, инклюзия және интеграция мәдениетін қолдайды: радикалды жүйелік ойшылдар мен әрекет етушілер, ешкімді шет қалдырмайтын ынтымақшыл серіктестер және шағын қауымнан бастап бүкіл әлемге дейін нақты өзгерістер үшін инновациялық араласулар жасайтын катализатор‑дизайнерлер» (Хенк Овинктің дәйексөзі, 2025). Ева қалалық стратегияларға, көк‑жасыл инфрақұрылымға және климаттың өзгеруіне бейімделу мен оның әсерін азайтатын табиғатқа және мәдениетке негізделген шешімдер арқылы жүзеге асатын өміршең концепцияларға маманданған.</p>
<p>Нидерландтың Water as Leverage бағдарламасы аясында ол Ченнайдағы CITY OF 1000 TANKS альянсының жетекшісі болып, қала бойынша су теңгерімі моделін жасап, суды жергілікті деңгейде барынша инклюзивті, тиімді әрі үнемді пайдалануға бағыттайды. Бразилияға арналған қалалық «қанайналым» жүйесі Água Carioca Holcim Prize for Sustainable Development сыйлығын алды. Rotterdam халықаралық сәулет биенналесінің (IABR) қоса‑кураторы және жетекші дизайнері ретінде Ева мен оның командасы қауымдастық меншігін, көпмасштабты пайдаларды және іске асыруға болатын тетіктерді басым қоятын аудандық энергия ауысу моделін әзірледі.</p>
KK
                ),
            ],
            [
                'image' => 'img/michelle.png',
                'category' => 'food',
                'sort_order' => 2,
                'name' => $this->same("Michelle\nSkelsgaard"),
                'bio' => $this->t(
                    <<<'EN'
<p>Michelle is a Danish economic geographer, policy advisor, and project manager with a strong focus on sustainable agri-food systems and agroecological transformations. She hold an MSc in Geography with a specialization in socio-economic transformations, and have extensive experience working across civil society, research, and practice.</p>
<p>She currently work as a food policy advisor at the Danish environmental NGO Rådet for Grøn Omstilling (Green Transition Denmark), where she develops and leads projects at the intersection of policy, sustainability, and agriculture, including ecological economics, seed sovereignty, and grassroots innovation in food and farming systems.</p>
<p>Her professional background spans research, advisory, and editorial roles across multiple countries and contexts. She co-founded interdisciplinary platforms (e.g. The Preserve Journal, KOMPOST Studio), all dedicated to the exploration and celebration of sustainable food culture, place-based knowledge, and transformative storytelling. She is deeply engaged in regional innovation networks and participatory learning formats, with a particular interest in the regeneration and revitalisation of rural landscapes, practices, and communities.</p>
EN,
                    <<<'RU'
<p>Мишель — датский экономико‑географ, консультант по политике и менеджер проектов с сильным фокусом на устойчивых агропродовольственных системах и агроэкологических трансформациях. Она имеет степень MSc по географии со специализацией в социально‑экономических трансформациях и обладает большим опытом работы на стыке гражданского общества, исследований и практики.</p>
<p>В настоящее время она работает консультантом по продовольственной политике в датской экологической НПО Rådet for Grøn Omstilling (Green Transition Denmark), где разрабатывает и ведет проекты на пересечении политики, устойчивости и сельского хозяйства, включая экологическую экономику, суверенитет семян и низовые инновации в пищевых и сельскохозяйственных системах.</p>
<p>Её профессиональный опыт включает исследовательские, консультативные и редакторские роли в разных странах и контекстах. Она со‑основала междисциплинарные платформы (например, The Preserve Journal, KOMPOST Studio), посвящённые исследованию и популяризации устойчивой пищевой культуры, локальных знаний и трансформирующих историй. Она глубоко вовлечена в региональные инновационные сети и форматы партисипативного обучения, с особым интересом к регенерации и оживлению сельских ландшафтов, практик и сообществ.</p>
RU,
                    <<<'UZ'
<p>Michelle — daniyalik iqtisodiy geograf, siyosat bo'yicha maslahatchi va loyiha menejeri bo'lib, barqaror agro‑oziq-ovqat tizimlari va agroekologik transformatsiyalarga kuchli e'tibor qaratadi. U ijtimoiy‑iqtisodiy transformatsiyalar bo'yicha ixtisoslashgan Geografiya yo'nalishida MSc darajasiga ega va fuqarolik jamiyati, tadqiqot hamda amaliyot kesishmasida katta tajribaga ega.</p>
<p>Hozirda u Daniyaning ekologik NNTsi Rådet for Grøn Omstilling (Green Transition Denmark)da oziq-ovqat siyosati bo'yicha maslahatchi bo'lib ishlaydi, u yerda siyosat, barqarorlik va qishloq xo'jaligi kesishmasidagi loyihalarni ishlab chiqadi va boshqaradi, jumladan ekologik iqtisodiyot, urug' suvereniteti hamda oziq-ovqat va dehqonchilik tizimlaridagi jamoaviy innovatsiyalar.</p>
<p>Uning professional tajribasi turli mamlakat va kontekstlarda tadqiqot, maslahat va tahririy rollarni o'z ichiga oladi. U The Preserve Journal va KOMPOST Studio kabi fanlararo platformalarning hammuassisi bo'lib, ular barqaror oziq-ovqat madaniyati, joyga bog'liq bilimlar va transformativ hikoya qilishni o'rganish va ulug'lashga bag'ishlangan. U mintaqaviy innovatsion tarmoqlar va ishtirokchilikka asoslangan o'qish formatlariga chuqur jalb qilingan bo'lib, qishloq landshaftlari, amaliyotlari va hamjamiyatlarini qayta tiklash va jonlantirishga alohida qiziqadi.</p>
UZ,
                    <<<'KK'
<p>Мишель — даниялық экономикалық географ, саясат жөніндегі кеңесші және жоба менеджері, ол тұрақты агро‑азық‑түлік жүйелері мен агроэкологиялық трансформацияларға ерекше назар аударады. Ол география бойынша MSc дәрежесіне ие, мамандануы — әлеуметтік‑экономикалық трансформациялар; азаматтық қоғам, зерттеу және практика тоғысындағы мол тәжірибесі бар.</p>
<p>Қазіргі уақытта ол Данияның экологиялық ҮЕҰ‑сы Rådet for Grøn Omstilling (Green Transition Denmark) ұйымында азық‑түлік саясаты жөніндегі кеңесші болып жұмыс істейді. Мұнда ол саясат, тұрақтылық және ауыл шаруашылығы тоғысындағы жобаларды әзірлеп, басқарады, соның ішінде экологиялық экономика, тұқым егемендігі және азық‑түлік пен фермерлік жүйелердегі төменнен жоғары инновациялар.</p>
<p>Оның кәсіби тәжірибесі әртүрлі елдер мен контексттерде зерттеу, кеңес беру және редакторлық рөлдерді қамтиды. Ол The Preserve Journal және KOMPOST Studio сияқты пәнаралық платформалардың қоса‑негізін қалаушы; бұл платформалар тұрақты тағам мәдениетін, орынға негізделген білімді және трансформативті әңгімелеуді зерттеуге әрі дәріптеуге арналған. Ол өңірлік инновациялық желілер мен қатысымға негізделген оқу форматтарына терең араласқан, ауылдық ландшафттарды, тәжірибелерді және қауымдастықтарды регенерациялау мен жаңғыртуға ерекше қызығушылық танытады.</p>
KK
                ),
            ],
        ];

        foreach ($mentors as $mentor) {
            Mentor::create($mentor);
        }

        $faqsLeft = [
            [
                'question' => $this->t(
                    'What is the tuition fee for the Aral School programme and does the School provide a monthly stipend to cover participants\' expenses?',
                    'Какова стоимость обучения в программе Aral School и предоставляет ли школа ежемесячную стипендию для покрытия расходов участников?',
                    "Aral School dasturining o'quv to'lovi qancha va maktab ishtirokchilar xarajatlarini qoplash uchun oylik stipendiya beradimi?",
                    'Aral School бағдарламасының оқу ақысы қандай және мектеп қатысушылар шығындарын жабу үшін ай сайынғы стипендия береді ме?'
                ),
                'answer' => $this->t(
                    'Details will be provided regarding specific tuitions and grant schedules during the application phases.',
                    'Подробная информация о стоимости обучения и графике грантов будет предоставлена на этапе подачи заявок.',
                    "Ariza topshirish bosqichlarida o'quv to'lovi va grant jadvali bo'yicha batafsil ma'lumot beriladi.",
                    'Өтінім беру кезеңдерінде оқу ақысы мен грант кестесі туралы нақты ақпарат беріледі.'
                ),
            ],
            [
                'question' => $this->t(
                    'What kind of degree will I receive upon completing the programme?',
                    'Какую степень я получу после завершения программы?',
                    "Dastur yakunlangach qanday daraja (diplom) olaman?",
                    'Бағдарламаны аяқтағаннан кейін қандай дәреже аламын?'
                ),
                'answer' => $this->t(
                    'This programme focuses on practical engagements; specific certifications details will be clarified.',
                    'Программа ориентирована на практику; детали сертификации будут уточнены.',
                    'Dastur amaliy faoliyatga yo\'naltirilgan; sertifikatlash tafsilotlari keyinroq aniqlashtiriladi.',
                    'Бағдарлама практикалық жұмысқа бағытталған; сертификаттау туралы мәліметтер кейін нақтыланады.'
                ),
            ],
            [
                'question' => $this->t(
                    'Can I apply if I have no previous experience in design and ecology?',
                    'Могу ли я подать заявку, если у меня нет опыта в дизайне и экологии?',
                    'Dizayn va ekologiya bo\'yicha tajribam bo\'lmasa ham ariza topshira olamanmi?',
                    'Дизайн және экология бойынша тәжірибем болмаса да өтінім бере аламын ба?'
                ),
                'answer' => $this->t(
                    'Yes, cross-disciplinary practitioners are firmly encouraged to participate and form novel teams.',
                    'Да, междисциплинарные практики особенно приветствуются.',
                    'Ha, fanlararo amaliyotchilar ishtirok etishga va yangi jamoalar tuzishga qat\'iy rag\'batlantiriladi.',
                    'Иә, пәнаралық тәжірибеге ие қатысушыларды қатысуға және жаңа командалар құруға белсенді шақырамыз.'
                ),
            ],
            [
                'question' => $this->t(
                    'Does the Aral School provide accommodation?',
                    'Предоставляет ли Aral School проживание?',
                    'Aral School yashash joyi bilan ta\'minlaydimi?',
                    'Aral School тұру орнын қамтамасыз ете ме?'
                ),
                'answer' => $this->t(
                    'Yes, localized housing infrastructure exists for fully accepted candidate cohorts.',
                    'Да, для полностью принятых когорт предусмотрена местная инфраструктура проживания.',
                    'Ha, to\'liq qabul qilingan kohortlar uchun mahalliy yashash infratuzilmasi mavjud.',
                    'Иә, толық қабылданған когорттар үшін жергілікті тұру инфрақұрылымы бар.'
                ),
            ],
            [
                'question' => $this->t(
                    'Are there any significant programme related expenses that I will have to cover?',
                    'Есть ли существенные расходы по программе, которые мне нужно будет покрыть?',
                    'Dastur bilan bog\'liq yirik xarajatlarni o\'zim qoplashim kerakmi?',
                    'Бағдарламаға қатысты өзім жабуым керек елеулі шығындар бар ма?'
                ),
                'answer' => $this->t(
                    'Travel, personal effects, and individual project budgets may require supplemental alignment.',
                    'Проезд, личные расходы и бюджеты отдельных проектов могут потребовать дополнительного согласования.',
                    'Safar xarajatlari, shaxsiy sarf-xarajatlar va individual loyiha byudjetlari bo\'yicha qo\'shimcha kelishuv talab qilinishi mumkin.',
                    'Сапар, жеке шығындар және жеке жобалар бюджеті бойынша қосымша келісім қажет болуы мүмкін.'
                ),
            ],
        ];

        foreach ($faqsLeft as $index => $faq) {
            Faq::create([
                'sort_order' => $index + 1,
                'column' => 'left',
                'question' => $faq['question'],
                'answer' => $faq['answer'],
            ]);
        }

        $faqsRight = [
            [
                'question' => $this->t(
                    'Can I apply to the Aral School if my English is not very good?',
                    'Могу ли я подать заявку в Aral School, если мой английский не очень хорош?',
                    'Ingliz tilim unchalik yaxshi bo\'lmasa ham Aral Schoolga ariza topshira olamanmi?',
                    'Ағылшын тілім жақсы болмаса да Aral School‑ға өтінім бере аламын ба?'
                ),
                'answer' => $this->t(
                    'The working language of the programme is English; all workshops and projects are run in English, so fluency in English is essential. Please expect a high working pace and numerous global experts sharing their insights, you need to be able to exchange in English fluently on a daily basis and participate in weekly creative dialogues.',
                    'Рабочий язык программы — английский; все воркшопы и проекты проходят на английском, поэтому свободное владение английским необходимо. Ожидайте высокий темп работы и большое количество международных экспертов; важно ежедневно свободно общаться на английском и участвовать в еженедельных творческих диалогах.',
                    'Dastur ishchi tili ingliz tili; barcha ustaxonalar va loyihalar ingliz tilida olib boriladi, shuning uchun ingliz tilini erkin bilish zarur. Ish sur\'ati yuqori bo\'lishini va ko\'plab xalqaro ekspertlar ishtirok etishini kuting; ingliz tilida har kuni erkin muloqot qila olish va haftalik ijodiy dialoglarda qatnashish talab etiladi.',
                    'Бағдарламаның жұмыс тілі — ағылшын тілі; барлық воркшоптар мен жобалар ағылшын тілінде өтеді, сондықтан ағылшын тілін еркін меңгеру қажет. Жұмыс қарқыны жоғары болатынын және көптеген халықаралық сарапшылардың тәжірибесімен бөлісетінін күтіңіз; күнделікті ағылшын тілінде еркін сөйлесіп, апта сайынғы шығармашылық диалогтарға қатысу маңызды.'
                ),
            ],
            [
                'question' => $this->t(
                    'Is it mandatory to stay in Uzbekistan? Can I participate in the Aral School online?',
                    'Обязательно ли находиться в Узбекистане? Можно ли участвовать в Aral School онлайн?',
                    'O\'zbekistonda bo\'lish majburiymi? Aral Schoolda onlayn qatnashsam bo\'ladimi?',
                    'Өзбекстанда болу міндетті ме? Aral School бағдарламасына онлайн қатыса аламын ба?'
                ),
                'answer' => $this->t(
                    'Physical presence is mandated during major curriculum tracks due to place-based design methodologies.',
                    'Физическое присутствие обязательно во время основных модулей из‑за локально ориентированных методологий дизайна.',
                    'Joyga bog\'liq dizayn metodologiyalari sababli asosiy o\'quv bosqichlarida jismoniy ishtirok talab etiladi.',
                    'Орынға негізделген дизайн әдістемелері себепті негізгі оқу кезеңдерінде физикалық қатысу міндетті.'
                ),
            ],
            [
                'question' => $this->t(
                    'Is the programme full-time?',
                    'Программа требует полной занятости?',
                    'Dastur to\'liq stavkali (full‑time)mi?',
                    'Бағдарлама толық уақытты ма?'
                ),
                'answer' => $this->t(
                    'The primary iterations demand intense full-time immersion into the community architectures.',
                    'Основные этапы требуют интенсивного полного вовлечения в работу с сообществами.',
                    'Asosiy bosqichlar hamjamiyatlar bilan ishlashga to\'liq va intensiv jalb bo\'lishni talab qiladi.',
                    'Негізгі кезеңдер қауымдастықтармен жұмысқа толық әрі қарқынды араласуды талап етеді.'
                ),
            ],
            [
                'question' => $this->t(
                    'Is it possible to combine work with participation in the Aral School?',
                    'Возможно ли совмещать работу с участием в Aral School?',
                    'Aral Schoolda qatnashishni ish bilan birga olib borish mumkinmi?',
                    'Aral School‑ға қатысуды жұмысымен қатар алып жүруге бола ма?'
                ),
                'answer' => $this->t(
                    'Extensive asynchronous work may be maintained, provided synchronous commitments are prioritized.',
                    'Значительную часть асинхронной работы можно сохранить, при условии приоритета синхронных обязательств.',
                    'Asinxron ishlarning ma\'lum qismini saqlab qolish mumkin, biroq sinxron majburiyatlar ustuvor bo\'lishi kerak.',
                    'Синхронды міндеттемелер басым болған жағдайда, айтарлықтай асинхронды жұмысты сақтауға болады.'
                ),
            ],
            [
                'question' => $this->t(
                    'Where can I find more information about the Aral School?',
                    'Где я могу найти дополнительную информацию об Aral School?',
                    'Aral School haqida qo\'shimcha ma\'lumotni qayerdan topsam bo\'ladi?',
                    'Aral School туралы қосымша ақпаратты қайдан таба аламын?'
                ),
                'answer' => $this->t(
                    'Consult our programme dossier online or reach out via the provided organizational emails.',
                    'Посмотрите программное досье онлайн или свяжитесь с нами по указанным организационным адресам.',
                    'Onlayn dastur dosyesi bilan tanishing yoki ko\'rsatilgan tashkilot email manzillari orqali murojaat qiling.',
                    'Онлайн бағдарламалық досьені қараңыз немесе көрсетілген ұйымдық электрон пошта арқылы хабарласыңыз.'
                ),
            ],
        ];

        foreach ($faqsRight as $index => $faq) {
            Faq::create([
                'sort_order' => $index + 1,
                'column' => 'right',
                'question' => $faq['question'],
                'answer' => $faq['answer'],
            ]);
        }
    }

    private function t(string $en, string $ru, string $uz, string $kk): array
    {
        return [
            'en' => $en,
            'ru' => $ru,
            'uz' => $uz,
            'kk' => $kk,
        ];
    }

    private function same(string $text): array
    {
        return $this->t($text, $text, $text, $text);
    }
}
