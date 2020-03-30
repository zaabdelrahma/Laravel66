@extends('layouts.app')

<?php

/**
* Retrieved values from Google Sheets API Explorer here:
https://drive.google.com/file/d/1XjqJ7kp2AcMQjWaf_exDTTx-1qU4ctGp/view
*
* 
* Set placeholder values as $values variable. 
*
*/

$values = [
    [
      "labmanager",
      "",
      "Linckia - Huai Hai Community",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.224671",
      "121.480206",
      "17th Floor, 1 Huai Hai Zhong Road, Huangpu, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Linckia - Dong Hai 7th",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.226267",
      "121.449214",
      "7th Floor, Dong Hai Plaza Building 3, Yuyuan East Road, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Chuangzhi Community",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.30823",
      "121.50768",
      "6F, Tower 2, Chuangzhi Science & Technology Center, 477 Zhengli Road, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "COWORK - Chuanzhi World Business Center",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.332154",
      "121.524731",
      "3th Floor, Chuanzhi World Business Center Building 6,7, 500 Zheng Yue Road, Yangpu District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "SOHO 3Q - Bund 3Q l",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.2315534",
      "121.492723",
      "Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "SOHO3Q - Bund 3Q II",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.2315534",
      "121.492723",
      "Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "SOHO3Q - Sky 3Q",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.2208583",
      "121.35243",
      "968 Jin Zhong Road, Changning District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Linckia - Tongji Community",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.278778",
      "121.504764",
      "1st Floor, Design Center Promotion Center, 1230 Siping Road, Yangpu District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "XNode - Zhang Jiang",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.1812077",
      "121.605051",
      "4F, 800 Naxian Road, Pudong District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "XNode - Hong Qiao",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.204984",
      "121.402548",
      "5F, Building D, Orient International Mansion, 85 Loushanguan Road, Changning District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Naked Hub - Xikang",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.24338",
      "121.439496",
      "189 Changshou Road, Putuo District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "MIXPACE Townhide",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.230828",
      "121.465445",
      "612 Nan Jing Xi Lu, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Naked Hub - Fu Xing Lu",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.212578",
      "121.458184",
      "3th Floor, 1237 Fu Xing Zhong Road, Xuhui District, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "We Geek",
      "",
      "Co-working Space",
      "Public",
      "",
      "31.09247645",
      "121.327414",
      "Xinzhuang Lu 258, Palm Plaza, Building 32, Shanghai, China",
      "Shanghai",
      "China",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Terminal",
      "",
      "Co-working Space",
      "Public",
      "",
      "41.7074429",
      "44.7655064",
      "34-36 Irakli Abashidze Street, Tbilisi, Georgia",
      "Tbilisi",
      "Georgia",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "UG Startup Factory",
      "",
      "Co-working Space",
      "Public",
      "",
      "41.7229554",
      "44.7797785",
      "77a Merab Kostava Street, Tbilisi, Georgia",
      "Tbilisi",
      "Georgia",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Vere Loft",
      "",
      "Co-working Space",
      "Public",
      "",
      "41.7062892",
      "44.783586",
      "Khorava Street 3, Tbilisi, Georgia",
      "Tbilisi",
      "Georgia",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Generator 9.8",
      "",
      "Co-working Space",
      "Public",
      "",
      "41.6997859",
      "44.8020677",
      "Antoneli street #29, Tbilisi, Georgia",
      "Tbilisi",
      "Georgia",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Publica",
      "",
      "Co-working Space",
      "Public",
      "",
      "41.69745123",
      "44.7999328",
      "18 Lado Gudiashvili Street, Tbilisi, Georgia",
      "Tbilisi",
      "Georgia",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Dev X",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0290001",
      "72.53016890000001",
      "B/H Keshav Baugh Party Plot,, Near Shivalik High-Street., I I M, Vastrapur, Ahmedabad, Gujarat 380015, India, Vastrapur, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Uncubate",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0432348",
      "72.549655",
      "308, Aeon Complex, Vijay Cross Road, Near Angira Society, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "DoubleO",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.032447",
      "72.510955",
      "B501 Krishna Complex, Bodakdev, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Pravel CoWorking Space",
      "",
      "Co-working Space",
      "Public",
      "",
      "22.9946966",
      "72.4991682",
      "Makarba, Ahmedabad, Gujarat, Makarba Road, S.G. Highway, Sarkhej, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "14 The Hub",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0418232",
      "72.51680639999999",
      "605 Venus Benecia Maruti Nexa Building Pakwaan restaurant service lane S.G. Highway, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Daftar - The coworking space",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0282646",
      "72.542312",
      "Panjara Pol, Ambawadi, Ahmedabad, Gujarat 380015, India, IIM Road, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "5B Colab",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.03156937",
      "72.559113",
      "5B Vishwabharti society, Opp BSNL office, Opposite BSNL telephone exchange, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Pravel Solutions",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0119548",
      "72.5148738",
      "Dev Auram, Prahlad Nagar, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Next57 Coworking",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0326554",
      "72.50821209999999",
      "2nd Floor, Block N, S.G. Road, Safal Mondeal Retail Park, Bodakdev Near, Rajpath Rangoli Rd, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "InstaOffice",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.1586396",
      "72.6831136",
      "Gujarat International Finance Tec-City, Gujarat, Building 56A, Block No. 56, Road-5C, Zone-5, Gandhinagar, India",
      "Gandhinagar",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ],
    [
      "labmanager",
      "",
      "Spaces",
      "",
      "Co-working Space",
      "Public",
      "",
      "23.0263387",
      "72.52439440000001",
      "Iscon Emporio, Next to Star Bazaar, Jodhpur Crossroads, Ahmedabad, India",
      "Ahmedabad",
      "India",
      "NULL",
      "NULL",
      "NULL",
      "NULL",
      "1"
    ]
  ]

?>

@section('content')
<div class="container">
    <div class='jumbotron'>
                  <h2>Labs Locations</h2>
                  <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="Search labs"> <span class="input-group-btn"> 
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                  </form>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    <div class="form-group">
                        <?php
                            foreach ($values as $value) {
                                echo "
                                    <div class='form-group'>
                                        <h5><strong>$value[2]</strong></h5>
                                        <h6>
                                            <a href='https://www.google.com/maps/search/?api=1&query=$value[7],$value[8]' target='_blank'>
                                                $value[9]
                                            </a>
                                        </h6>
                                    </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection