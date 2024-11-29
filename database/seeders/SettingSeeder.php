<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'key' => 'about_us',
                'value' => '<p><em>Assalamu‘alaikum warohmatullahi wabarokatuh</em></p>
                            <p><br></p>
                            <p><strong>Saibah Mulia Mandiri</strong> adalah biro perjalanan umrah dan haji
                            yang telah berpengalaman melayani para tamu Allah sejak tahun 1995. Saibah didirikan
                            oleh Ustadz Haji Bambang Riyanto dan Ibu Hj Aisyah Abdillah, dimana beliau berdua
                            sering menemani atau mendampingi </p><p>langsung para Jamaah Umroh maupun Haji.</p>
                            <p><br></p>
                            <p>Saibah dengan pembimbing yang sangat berpengalaman, mengutamakan kegiatan ibadah
                            selama di Tanah suci. Insya Allah selain beribadah dengan khusyuk jamaah akan
                            diperkenalkan dengan sejarah peradaban Islam dengan mengunjungi tempat-tempat
                            ibadah dan bersejarah bagi Umat Islam. Semoga Keinginan kita untuk beribadah
                            Umroh dan Haji dikabulkan oleh Allah . Dan semoga Ibadah Haji dan Umroh kita
                            di Mabrurkan oleh Allah. Aamiin Ya Rabbal ‘Aalamiin.</p>
                            <p><br></p>
                            <p><em>Wassalamu‘alaikum warohmatullahi wabarokatuh</em></p>
                            <p><br><br></p>
                            <p><strong>Saibah Mulia Mandiri</strong>, Exclusive Umrah and Hajj Travel</p>
                            <p>Kantor Pusat Semarang: Jl. Hasanudin no. 243 B Semarang 50171, Indonesia</p>
                            <p><br></p>
                            <p>Telp : (024) 3521821, 081225442388</p>
                            <p>Telp/WA 081225442388</p>
                            <p>Telp/Fax (024)3521821,</p>
                            <p>E mail : admin@saibah.co.id</p>'
            ],
            [
                'key' => 'privacy_policy',
                'value' => '<p><strong>Saibah Mulia Mandiri</strong> built the Saibah app as a Commercial app. This SERVICE is provided by Saibah Mulia Mandiri and is intended for use as is.</p>
                            <p><br></p>
                            <p>This page is used to inform visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service.</p>
                            <p><br></p>
                            <p>If you choose to use our Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that we collect is
                            used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>
                            <p><br></p>
                            <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Saibah unless otherwise defined in this Privacy Policy.</p>
                            <p><br></p>
                            <p><strong>Information Collection and Use</strong></p>
                            <p><br></p>
                            <p>For a better experience, while using our Service, we may require you to provide us with certain personally identifiable information. The information that we request will
                            be retained by us and used as described in this privacy policy.</p>
                            <p><br></p>
                            <p>The app does use third party services that may collect information used to identify you.</p>
                            <p><br></p>
                            <p>Link to privacy policy of third party service providers used by the app</p>
                            <ul>
                                <li>Google Play Services</li>
                                <li>Facebook</li>
                            </ul>
                            <p><br></p>
                            <p><strong>Log Data</strong></p>
                            <p><br></p>
                            <p>We want to inform you that whenever you use our Service, in a case of an error in the app we collect data and information (through third party products) on your phone called Log Data.
                            This Log Data may include information such as your device Internet Protocol (“IP”) address, device name, operating </p>'
            ]
        ]);

        DB::table('settings')->insert([
            [
                'key' => 'email_setting',
                'json_value' => json_encode([
                    'logo' => '',
                    'footer' => '<p>Kantor Pusat Semarang: Jl. Hasanudin no. 243 B Semarang 50171, Indonesia</p>',
                    'salutation' => "Salam,\r\nPrayudi"
                ])
            ],
            [
                'key' => 'email_invitation',
                'json_value' => json_encode([
                    'from' => 'info.saibah@gmail.com',
                    'first_message' => '<p><strong>Assalamualaikum</strong>,</p><p>Terimakasih telah mendaftar menjadi calon PIC saibah Umrah, untuk menjadi PIC saibah umrah diharapkan bapak/ibu berkenana mengikuti pelatihan menjadi PIC agar mengetahui aturan main menjadi seorang PIC, di sana juga akan kami jelaskan terkait promo, bonus, dan segala alat pendukung yang membantu Anda untuk menjalankan tugas sebagai seorang PIC.</p><p>Kami mengundang Anda hadir dalam acara:</p>'
                ])
            ]
        ]);
    }
}
