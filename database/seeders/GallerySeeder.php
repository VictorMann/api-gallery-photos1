<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/3d4536f6-9c36-423a-9735-cc184de5e942_rw_1920.jpg?h=a3bf349f933ca2cefed5019d1ad8877f', 'status' => 3],
            ['width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4960139d-27cb-4b9e-a9c9-2a9c1a5acb21_rw_600.gif?h=1ad6105bc2ffa0c1f051358b44720f51', 'status' => 3],
            ['width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/3da5d46a-3d27-4cfd-adf5-31de3dcceb72_rw_600.gif?h=4ebc0a316aea2e51fe7111bb75828e22', 'status' => 3],
            ['per' => 24, 'width' => 481, 'height' => 720, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/d94a980b-16b3-4bfb-96e3-da41a143edb9_rw_600.gif?h=22a2f646cb5bce1651da745f3377fd26', 'status' => 3],
            ['per' => 20, 'width' => 506, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/5375bfda-5cb0-407e-a02d-2b3261343be8_rw_600.gif?h=ac26d4926c45df124912bdef87d800fc', 'status' => 3],
            ['per' => 56, 'width' => 700, 'height' => 394, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/63bf4d16-2e16-4296-886b-7cbbdc84b814_rw_1200.gif?h=b44d9b1dce4fd323866c2ed21a4f8e67', 'status' => 3],
            ['width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/f1223916-6a00-445c-a5fe-ea3c23b86c73_rw_1920.jpg?h=11c63acd47bb1561e1d5b2af6f05a09e', 'status' => 3],
            ['width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/2772febf-9985-48b1-b449-8d0b457576dd_rw_1920.jpg?h=4ae0a90f4bc69937fd78ce92376b0d97', 'status' => 3],
            ['width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/6c82bf8c-6f06-4746-b984-3d6c23e1e10c_rw_1920.jpg?h=f8b418fe98c740aeba217b07b444fa70', 'status' => 3],
            ['width' => 800, 'height' => 1200, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/c7d7bdfb-d285-4da4-b752-bcb55223405b_rw_1200.jpg?h=13a52ff06e18e34ff4e747106771eb2a', 'status' => 3],
            ['width' => 799, 'height' => 1199, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/d1483029-5220-4622-b889-e19e5ce44f98_rw_1200.jpg?h=37aed17cc7528a6f32e9c16ddeafbef7', 'status' => 3],
            ['width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/87c94581-9d2a-4510-8c73-d6f7c19421a3_rw_1920.jpg?h=d5d639cde872a27ecfbef174c4aa401b', 'status' => 3],
            ['width' => 934, 'height' => 1399, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/5afa984d-771a-45df-8d6f-93436766ebaf_rw_1200.jpg?h=1edb338ad422fbdb2a4246b4691cc442', 'status' => 3],
            ['width' => 600, 'height' => 317, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/60eb4b59-3e5c-4eeb-aec7-375e50aa9149_rw_600.gif?h=1ca647d8922c341a3c0e07b41099b1dd', 'status' => 3],
            ['width' => 933, 'height' => 1400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/0e8dff12-b986-4fe9-b069-5f067f55c43a_rw_1200.jpg?h=6493b79b9738d79aa4d17d5ae378785c', 'status' => 3],


            ['category_id' => 4, 'width' => 1245, 'height' => 934, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4f54eef3-a37e-4136-8e6f-a51db87a8762_rwc_33x0x1245x934x1280.jpg?h=a86ed4b859f288b5b309535bb8d5a1a6', 'status' => 2],
            ['category_id' => 4, 'row' => 1, 'per' => 12, 'width' => 506, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/df5b8c80-fe7d-4a9f-8f06-52711b38df45_rw_600.gif?h=4f1addb1f13955f178def1abbbced792'],
            ['category_id' => 4, 'row' => 1, 'per' => 26, 'width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/13a7543f-8cee-411a-8a31-0f0473e467b0_rw_1920.jpg?h=fc5eac4c582c0a8937199054cab3bdb1'],
            ['category_id' => 4, 'row' => 1, 'per' => 13, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/5777d774-c114-4ca1-95b1-a6ae337eaf4b_rw_600.jpg?h=349e047d7a0e46273011592977b949ea'],
            ['category_id' => 4, 'row' => 1, 'per' => 13, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4bebe2d5-fcd4-4406-90e4-2c7982876725_rw_600.gif?h=1c4e2f628f30945c023e81fc12942dbe'],
            ['category_id' => 4, 'row' => 1, 'per' => 13, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/8cd9423e-056e-4891-a154-2de63d62d833_rw_600.gif?h=78edf20ea1f7e5892b1663b738ab4b95'],
            ['category_id' => 4, 'row' => 1, 'per' => 23, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/93dacf2e-e588-4796-a0d2-2fcbd8851451_rw_600.jpg?h=d750a9f58826c4e3ac01cc7fb8e61381'],
            ['category_id' => 4, 'row' => 2, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/2a6434c9-dba7-41af-9b73-4e3b73aecac4_rw_600.gif?h=1f039f0627d1a58e7de0f411e389a84f'],
            ['category_id' => 4, 'row' => 2, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/33bd0eaa-ff82-4556-a372-fcc3f52912ab_rw_600.gif?h=f24bf5c27c21d6e70e9cc92d0a873ade'],
            ['category_id' => 4, 'row' => 2, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/31f9512c-6c95-4c0e-bcc0-72b22b0e0153_rw_600.jpg?h=03630539cd083e45c5ab7b611dd2d785'],
            ['category_id' => 4, 'row' => 2, 'width' => 600, 'height' => 899, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/0aa60519-997b-4ae7-a6fb-6129a4399888_rw_600.gif?h=dad81de424e9711f4c99238d26f99ce7'],
            
            ['category_id' => 5, 'width' => 1280, 'height' => 960, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/f8c33f6c-2548-42ba-84bf-51827b46e2b1_rwc_100x0x1708x1281x1280.jpg?h=b943a30c3d58923954287ec5a8f9e3ae', 'status' => 2],
            ['category_id' => 5, 'row' => 1, 'width' => 800, 'height' => 1199, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/95cb3a84-3cd4-4fcc-8b89-24d2b52fc088_rw_1200.jpg?h=bc5b12bb49e0aec8ceb173f72490fba6'],
            ['category_id' => 5, 'row' => 2, 'width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/a3a8ba62-58fc-4bb2-b8dc-ef92e8ca00ea_rw_1920.jpg?h=d046c9520acf173468b9f13825aa984d'],
            ['category_id' => 5, 'row' => 3, 'width' => 800, 'height' => 1200, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/02fedf90-3988-46ad-8587-38fbdb82913f_rw_1200.jpg?h=0d0213da1c8e4774df2cdd79923349f3'],
            
            ['category_id' => 6, 'width' => 1280, 'height' => 960, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/f6654dc3-92e9-4654-9972-2c9636557085_rwc_201x0x1708x1281x1280.jpg?h=618240ab20c548b0d623bcc9ca3eb27a', 'status' => 2],
            ['category_id' => 6, 'row' => 1, 'width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/57753ffd-8868-40fa-8159-f14a36a72983_rw_1920.jpg?h=5951b5d9bec7b7e27cb95025d4af3c60'],
            ['category_id' => 6, 'row' => 2, 'width' => 1920, 'height' => 1281, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/a0ca5b63-22a6-4188-89da-7d2b437bc0b7_rw_1920.jpg?h=d0d2224fc1abc6d974a00ca6c0d2337e'],
            ['category_id' => 6, 'row' => 3, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/ee02f9ce-de9a-44de-a37c-28b6cba1b90d_rw_1920.jpg?h=a699d8a6672a6f35f47b683d0a682b05'],

            ['category_id' => 7, 'width' => 1280, 'height' => 960, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/b893ebba-0e06-4848-98da-dd9699b8cb83_rwc_321x204x3219x2414x1280.jpg?h=26c6f479c951ee552cf15f9afe679ab8', 'status' => 2],
            ['category_id' => 7, 'row' => 1, 'per' => 33, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/2ed67938-3c3b-4b26-84fa-5ff802640db6_rw_1920.jpg?h=d8a660ee82582e89a086df232fcd4dc7'],
            ['category_id' => 7, 'row' => 1, 'per' => 33, 'width' => 1920, 'height' => 1294, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/9542fb4f-1a9c-4150-b513-a4a6e3bcb064_rw_1920.jpg?h=2526adb60edd421ea48bcfd8e6393c02'],
            ['category_id' => 7, 'row' => 1, 'per' => 34, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/61bdb0a7-593c-482e-bee3-8b3a41855ce0_rw_600.jpg?h=d5480e3e034b632754fddafd86689f9c'],
            ['category_id' => 7, 'row' => 2, 'per' => 36, 'width' => 1920, 'height' => 1080, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/968524ea-2424-41c4-bf0f-097164594c2d_rw_1920.jpg?h=c8d534c9db1c88048137c415032c2321'],
            ['category_id' => 7, 'row' => 2, 'per' => 31, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4da88bac-de5a-4898-93ca-a35c8baf20b5_rw_1920.jpg?h=2a986b3fe373cfd92b16fef6a9e178b9'],
            ['category_id' => 7, 'row' => 2, 'per' => 33, 'width' => 600, 'height' => 382, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/b381b7dd-8b31-422b-a717-847cee592e48_rw_600.jpg?h=7af1b40ce233910e61fb70c74de7adf1'],
            ['category_id' => 7, 'row' => 3, 'per' => 30, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/0bcee99f-3b68-46b1-81e4-6016e92b6cc5_rw_1920.jpg?h=e5aac11841cd5fcd280b573172ba5919'],
            ['category_id' => 7, 'row' => 3, 'per' => 34, 'width' => 1920, 'height' => 1171, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/264ef1fe-37df-4f87-822d-649e752e8d36_rw_1920.jpg?h=a01f9b6a628b8383e029f053eaff63f5'],
            ['category_id' => 7, 'row' => 3, 'per' => 36, 'width' => 600, 'height' => 337, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/6d26fef0-365a-4a1b-8797-ec292d67419c_rw_600.jpg?h=82c91085c92f785bff5ec589d38cf0d6'],

            ['category_id' => 8, 'width' => 1280, 'height' => 960, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/771daa2d-56cb-4f8d-866b-ad04a18fc916_rwc_338x51x2256x1692x1280.jpg?h=bacefe3c80e93878bcd559f66fec2f72', 'status' => 2],
            ['category_id' => 8, 'row' => 1, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/32d059a1-b66c-45bd-9475-381562ebb2c1_rw_1920.jpg?h=958e01afcc586db22713f4e017d7da94'],
            ['category_id' => 8, 'row' => 2, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/16232f61-0b6f-4e1f-bb1d-4c3e94358be8_rw_1920.jpg?h=af7c5b8fb8f352976a1866a0a1627229'],
            ['category_id' => 8, 'row' => 3, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4f9b5bd1-0824-4e15-95d9-1fde5e0046a7_rw_1920.jpg?h=d64232f994db065dc3fe89a0ea08914b'],

            ['category_id' => 9, 'width' => 1280, 'height' => 961, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/0a919979-4bb1-40d5-be77-af90e80c255b_rwc_0x814x1599x1200x1280.jpg?h=31d66a7d34c7ae5e7656587c47d017ab', 'status' => 2],
            ['category_id' => 9, 'row' => 1, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/1facb7a7-5fca-4a13-867f-7dafc70fe3ef_rw_600.jpg?h=436538516b7e9389b6e57c9879dc6555'],
            ['category_id' => 9, 'row' => 1, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/0e91d187-e2c4-4e37-b487-55ccff9c9d07_rw_600.jpg?h=b4764c2f0997ffb262778a711414743f'],
            ['category_id' => 9, 'row' => 1, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/ed6a1d4c-c2e8-419b-b7a6-cb9ceaea1e93_rw_600.jpg?h=8d0394917e969b9193543a42c6a89052'],
            ['category_id' => 9, 'row' => 1, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/d9945365-dd20-4938-a401-2399200f86e5_rw_600.jpg?h=f6d4f01fa28e1af93c94f9e7be9ecb93'],
            ['category_id' => 9, 'row' => 2, 'per' => 40.75, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/211fc65d-c227-48bd-9537-7e51bc40b852_rw_600.jpg?h=e541f46196db3806da575403a7d28d25'],
            ['category_id' => 9, 'row' => 2, 'per' => 18.5, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/4211124d-13b5-480c-8908-7cb67c6b0295_rw_600.jpg?h=05ce814474edf07646fd694c94fc1814'],
            ['category_id' => 9, 'row' => 2, 'per' => 40.75, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/a1d0dbf5-53ed-4652-b8c7-167cd9d7ac74_rw_600.jpg?h=30b83a303c61c90c77cec984d886936a'],
            ['category_id' => 9, 'row' => 3, 'per' => 51.7, 'width' => 1200, 'height' => 498, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/16c6323a-0920-428b-9b18-a61f8e4acef9_rw_1200.jpg?h=07abfbe23987b980c808a94fbb2b4e53'],
            ['category_id' => 9, 'row' => 3, 'per' => 16, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/6f201131-b0cf-47c9-82d3-33ed7c850b06_rw_600.jpg?h=7a253dc5b29fb9ff0d0329aafe65c86f'],
            ['category_id' => 9, 'row' => 3, 'per' => 32.3, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/a959899b-d447-4587-97de-e9a7d7bc0a02_rw_600.jpg?h=4db3bd8ee189a63173d8499e146e026e'],

            ['category_id' => 10, 'width' => 1280, 'height' => 960, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/2c7bae19-a7cc-4256-a9f6-1e74326d8275_rwc_0x0x1706x1280x1280.jpg?h=b17ecb3cb399482cbc66dc8f426d630e', 'status' => 2],
            ['category_id' => 10, 'row' => 1, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/e9922fb3-4260-430d-b4bd-127a2b64b7fb_rw_600.jpg?h=cf937d19d21add1b540cd227711292e0'],
            ['category_id' => 10, 'row' => 1, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/87beaca2-d1b5-4913-af9f-a1ab8193a0ae_rw_600.jpg?h=7301e471e90048f7caf714276246f6af'],
            ['category_id' => 10, 'row' => 1, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/324cd12b-57e4-4668-86e6-3269e7add873_rw_600.jpg?h=d9148db0f0b12b4ba25466a1d00fe38c'],
            ['category_id' => 10, 'row' => 1, 'width' => 600, 'height' => 800, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/13e26c8e-f27d-401e-a408-c7d2aea2cede_rw_600.jpg?h=8467dcd0c1405bebfb458467ae9ee767'],
            ['category_id' => 10, 'row' => 2, 'per' => 29, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/7810d1bf-49ea-474e-936e-6787ba23c3ff_rw_600.jpg?h=73a99c30df1390a3e9a2db01ede7f621'],
            ['category_id' => 10, 'row' => 2, 'per' => 13, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/7ddabe19-ed3d-470e-8f0b-721928194ab2_rw_600.jpg?h=9c3c5cd9678346b6a6d5c801ee2cf71c'],
            ['category_id' => 10, 'row' => 2, 'per' => 29, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/49c17bc3-58b8-48a7-bfe4-37279d72e7f9_rw_1920.jpg?h=4347cc706986674248cbebd5b3e04308'],
            ['category_id' => 10, 'row' => 2, 'per' => 29, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/01c8ad11-5d09-4e61-8978-45b8f4f75825_rw_1920.jpg?h=48dea48795d5201ebe902c5a49a9c7d4'],
            ['category_id' => 10, 'row' => 3, 'per' => 29, 'width' => 1920, 'height' => 1280, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/334db58d-f8a5-4faa-9281-6469532a2720_rw_1920.jpg?h=d7d184f34cfb73d84c7db716a049ec95'],
            ['category_id' => 10, 'row' => 3, 'per' => 29, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/a40ff267-bee5-4323-bdbe-87d79507473b_rw_600.jpg?h=81d895ef2c4a33adbab56ffea2131016'],
            ['category_id' => 10, 'row' => 3, 'per' => 13, 'width' => 600, 'height' => 900, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/00822158-fa6f-42d6-a3ef-5dcf59d51c89_rw_600.jpg?h=0b26e662944470716582d1aa53fb4d2e'],
            ['category_id' => 10, 'row' => 3, 'per' => 29, 'width' => 600, 'height' => 400, 'image' => 'https://cdn.myportfolio.com/6ddb748e7455b951706cf3e4b96619a0/fe701567-e614-4d30-8b0d-fd6be0f00cae_rw_600.jpg?h=bb178e67760c2c6052454c1efaaed903'],

        ];

        foreach ($data as $key => $value) {
            Gallery::create($value);
        }
    }
}
