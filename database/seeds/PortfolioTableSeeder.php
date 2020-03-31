<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert([
            'alias' => 'ka',
            'title' => 'Астраханский новостной портал "Каспий-Инфо"',
            'src' => '/images/kaspyinfo.png',
            'href' => 'https://kaspyinfo.ru/',
            'description' => 'Новая версия регионального новостоного портала "КаспийИнфо" вышла в 2014 году. Сайт постоянно дополняется и изменяется. Для сайта разработаны уникальные плагины и дополнительные шаблоны темы.',
            'clock' => '3 месяца',
            'calendar' => '2014',
            'briefcase' => 'Проектирование, Прототипирование, Дизайн, Разработка, Поддержка, Обслуживание',
            'sort' => 0,
            'color_1' => '#174f89',
            'color_2' => '#ff8100',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'uz',
            'title' => 'Сайт производства и уставноки дорожных знаков "Юг-знак"',
            'src' => '/images/ugznak.png',
            'href' => 'https://ugznak.ru/',
            'description' => 'Сайт-визитка компании, производящей и устанавливающей дорожные знаки и дорожную разметку. Для сайта разработан свой плагин слайдера и собственный настраиваемый шаблон',
            'clock' => '14 дней',
            'calendar' => '2018',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 1,
            'color_1' => '#ffa100',
            'color_2' => '#1e2947',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'sc',
            'title' => 'Сайт Северо-Каспийской дирекции по техническому обеспечению надзора на море',
            'src' => '/images/sctmd30.png',
            'href' => 'http://sctmd30.ru/',
            'description' => 'Сайт-визитка Северо-Каспийской дирекции по техническому обеспечению надзора на море. Для сайта разработан собственный настраиваемый шаблон',
            'clock' => '7 дней',
            'calendar' => '2018',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 2,
            'color_1' => '#8f8f8f',
            'color_2' => '#58b062',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'da',
            'title' => 'Портал городской думы МО "Астрахань"',
            'src' => '/images/dumaastrakhan.png',
            'href' => 'http://duma-astrakhan.ru/',
            'description' => 'Корпоративный сайт думы муниципального образования "Астрахань". Для сайта разработан собственный уникальный шаблон и плагины',
            'clock' => '45 дней',
            'calendar' => '2016',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 3,
            'color_1' => 'rgba(69, 163, 207)',
            'color_2' => 'rgb(59, 71, 109)',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'av',
            'title' => 'Электронная версия газеты "Волга"',
            'src' => '/images/astravolga.png',
            'href' => 'https://astravolga.ru/',
            'description' => 'Новостной портал и электронная версия региональный газеты "Волга". Для сайт разработан собственный шаблон и плагины',
            'clock' => '14 дней',
            'calendar' => '2015',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 4,
            'color_1' => '#ffffff',
            'color_2' => '#00a0e3',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'gm',
            'title' => 'Сайт-портфолио кавер-группы "Гамма"',
            'src' => '/images/gamma30.png',
            'href' => 'http://gamma30.ru/',
            'description' => 'Сайт-портфолио поможет рассказать будущим клиентам о ваших возможностей. Легкий сайт на основе готового шаблона',
            'clock' => '3 дня',
            'calendar' => '2015',
            'briefcase' => 'Проектирование, Прототипирование, Дизайн, Разработка, Поддержка, Обслуживание',
            'sort' => 5,
            'color_1' => '#000000',
            'color_2' => '#686868',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'ed',
            'title' => 'Корпоративный сайт Emir Dental Clinic',
            'src' => '/images/emirdent.png',
            'href' => 'http://emir-dent.ru/',
            'description' => 'Корпоративный сайт, позволяющий рассказать все о клинике Emir Dental: отзывы, документы, обрудование, статьи, врачи и т.д. Для сайта разработан собственный уникальный шаблон',
            'clock' => '14 дней',
            'calendar' => '2017',
            'briefcase' => 'Проектирование, Дизайн, Разработка, Поддержка',
            'sort' => 6,
            'color_1' => '#31a3dd',
            'color_2' => '#ffffff',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'es',
            'title' => 'Сайт электромонтажного предприятия "Эра-СВ"',
            'src' => '/images/erasv.png',
            'href' => 'http://era-sv.ru/',
            'description' => 'Сайт-лендинг электромонтажного предприятия работает на основе собственного шаблона. Сайт содержит всю необходимую информацию о предприятии',
            'clock' => '14 дней',
            'calendar' => '2017',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 7,
            'color_1' => '#016d9f',
            'color_2' => '#23b7ea',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'sp',
            'title' => 'Сайт Астраханского центра спецоценки рабочих мест "Спектр"',
            'src' => '/images/spektr.jpg',
            'href' => 'http://xn----8sbaav4azajlcegje1cxh.xn--p1ai/',
            'description' => 'Корпоративный сайт Астраханского центра спецоценки рабочих мест "Спектр". Разработан но основе готового шаблона.',
            'clock' => '30 дней',
            'calendar' => '2016',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 8,
            'color_1' => '#f4ab00',
            'color_2' => '#333333',
        ]);
        DB::table('portfolio')->insert([
            'alias' => 'sa',
            'title' => 'Сайт ГК "СервисТеплоПрибор"',
            'src' => '/images/stpast.png',
            'href' => 'http://www.stp-ast.ru/',
            'description' => 'Корпоративный сайт группы компаний "СервисТеплоПрибор". Для сайта разработан собственный уникальный настраиваемый шаблон',
            'clock' => '30 дней',
            'calendar' => '2017',
            'briefcase' => 'Проектирование, Дизайн, Разработка',
            'sort' => 9,
            'color_1' => '#c42223',
            'color_2' => '#272933',
        ]);
    }
}
