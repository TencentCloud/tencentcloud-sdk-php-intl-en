<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voice attribute.
 *
 * @method string getName() Obtain <p>Voice name.</p>
 * @method void setName(string $Name) Set <p>Voice name.</p>
 * @method string getDescription() Obtain <p>Voice description.</p>
 * @method void setDescription(string $Description) Set <p>Voice description.</p>
 * @method string getGender() Obtain <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
 * @method void setGender(string $Gender) Set <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
 * @method string getAge() Obtain <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
 * @method void setAge(string $Age) Set <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
 * @method array getLanguages() Obtain <p>Language. Supported languages:<br>zh Chinese<br>en English<br>ja Japanese<br>de German<br>fr French<br>ko Korean<br>ru Russian<br>uk Ukrainian<br>pt Portuguese<br>it Italian<br>es Spanish<br>id Indonesian<br>nl Dutch<br>tr Turkish<br>fil Filipino<br>ms Malay<br>el Greek<br>fi Finnish<br>hr Croatian<br>sk Slovak<br>pl Polish<br>sv Swedish<br>hi Hindi<br>bg Bulgarian<br>ro Romanian<br>ar Arabic<br>cs Czech<br>da Danish<br>ta Tamil<br>hun Hungarian<br>vi Vietnamese<br>no Norwegian<br>yue Cantonese<br>th Thai<br>he Hebrew<br>ca Catalan<br>nn Nynorsk<br>af Afrikaans<br>fa Persian<br>sl Slovenian</p>
 * @method void setLanguages(array $Languages) Set <p>Language. Supported languages:<br>zh Chinese<br>en English<br>ja Japanese<br>de German<br>fr French<br>ko Korean<br>ru Russian<br>uk Ukrainian<br>pt Portuguese<br>it Italian<br>es Spanish<br>id Indonesian<br>nl Dutch<br>tr Turkish<br>fil Filipino<br>ms Malay<br>el Greek<br>fi Finnish<br>hr Croatian<br>sk Slovak<br>pl Polish<br>sv Swedish<br>hi Hindi<br>bg Bulgarian<br>ro Romanian<br>ar Arabic<br>cs Czech<br>da Danish<br>ta Tamil<br>hun Hungarian<br>vi Vietnamese<br>no Norwegian<br>yue Cantonese<br>th Thai<br>he Hebrew<br>ca Catalan<br>nn Nynorsk<br>af Afrikaans<br>fa Persian<br>sl Slovenian</p>
 * @method array getLabels() Obtain <p>Tag.</p>
 * @method void setLabels(array $Labels) Set <p>Tag.</p>
 * @method array getScenes() Obtain <p>Scenario.</p>
 * @method void setScenes(array $Scenes) Set <p>Scenario.</p>
 */
class VoiceProfile extends AbstractModel
{
    /**
     * @var string <p>Voice name.</p>
     */
    public $Name;

    /**
     * @var string <p>Voice description.</p>
     */
    public $Description;

    /**
     * @var string <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
     */
    public $Age;

    /**
     * @var array <p>Language. Supported languages:<br>zh Chinese<br>en English<br>ja Japanese<br>de German<br>fr French<br>ko Korean<br>ru Russian<br>uk Ukrainian<br>pt Portuguese<br>it Italian<br>es Spanish<br>id Indonesian<br>nl Dutch<br>tr Turkish<br>fil Filipino<br>ms Malay<br>el Greek<br>fi Finnish<br>hr Croatian<br>sk Slovak<br>pl Polish<br>sv Swedish<br>hi Hindi<br>bg Bulgarian<br>ro Romanian<br>ar Arabic<br>cs Czech<br>da Danish<br>ta Tamil<br>hun Hungarian<br>vi Vietnamese<br>no Norwegian<br>yue Cantonese<br>th Thai<br>he Hebrew<br>ca Catalan<br>nn Nynorsk<br>af Afrikaans<br>fa Persian<br>sl Slovenian</p>
     */
    public $Languages;

    /**
     * @var array <p>Tag.</p>
     */
    public $Labels;

    /**
     * @var array <p>Scenario.</p>
     */
    public $Scenes;

    /**
     * @param string $Name <p>Voice name.</p>
     * @param string $Description <p>Voice description.</p>
     * @param string $Gender <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
     * @param string $Age <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
     * @param array $Languages <p>Language. Supported languages:<br>zh Chinese<br>en English<br>ja Japanese<br>de German<br>fr French<br>ko Korean<br>ru Russian<br>uk Ukrainian<br>pt Portuguese<br>it Italian<br>es Spanish<br>id Indonesian<br>nl Dutch<br>tr Turkish<br>fil Filipino<br>ms Malay<br>el Greek<br>fi Finnish<br>hr Croatian<br>sk Slovak<br>pl Polish<br>sv Swedish<br>hi Hindi<br>bg Bulgarian<br>ro Romanian<br>ar Arabic<br>cs Czech<br>da Danish<br>ta Tamil<br>hun Hungarian<br>vi Vietnamese<br>no Norwegian<br>yue Cantonese<br>th Thai<br>he Hebrew<br>ca Catalan<br>nn Nynorsk<br>af Afrikaans<br>fa Persian<br>sl Slovenian</p>
     * @param array $Labels <p>Tag.</p>
     * @param array $Scenes <p>Scenario.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
