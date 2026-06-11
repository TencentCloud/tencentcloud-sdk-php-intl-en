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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Translation parameters
 *
 * @method array getTargetLang() Obtain <p>Target language for translation, example value ["en", "ja"]. Target language list [Chinese "zh", English "en", Vietnamese "vi", Japanese "ja", Korean "ko", Indonesian "id", Thai "th", Portuguese "pt", Arabic "ar", Spanish "es", French "fr", Malay "ms", German "de", Italian "it", Russian "ru"].</p>
 * @method void setTargetLang(array $TargetLang) Set <p>Target language for translation, example value ["en", "ja"]. Target language list [Chinese "zh", English "en", Vietnamese "vi", Japanese "ja", Korean "ko", Indonesian "id", Thai "th", Portuguese "pt", Arabic "ar", Spanish "es", French "fr", Malay "ms", German "de", Italian "it", Russian "ru"].</p>
 * @method array getTerminologies() Obtain <p>Glossary configuration.</p>
 * @method void setTerminologies(array $Terminologies) Set <p>Glossary configuration.</p>
 */
class TranslationParam extends AbstractModel
{
    /**
     * @var array <p>Target language for translation, example value ["en", "ja"]. Target language list [Chinese "zh", English "en", Vietnamese "vi", Japanese "ja", Korean "ko", Indonesian "id", Thai "th", Portuguese "pt", Arabic "ar", Spanish "es", French "fr", Malay "ms", German "de", Italian "it", Russian "ru"].</p>
     */
    public $TargetLang;

    /**
     * @var array <p>Glossary configuration.</p>
     */
    public $Terminologies;

    /**
     * @param array $TargetLang <p>Target language for translation, example value ["en", "ja"]. Target language list [Chinese "zh", English "en", Vietnamese "vi", Japanese "ja", Korean "ko", Indonesian "id", Thai "th", Portuguese "pt", Arabic "ar", Spanish "es", French "fr", Malay "ms", German "de", Italian "it", Russian "ru"].</p>
     * @param array $Terminologies <p>Glossary configuration.</p>
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
        if (array_key_exists("TargetLang",$param) and $param["TargetLang"] !== null) {
            $this->TargetLang = $param["TargetLang"];
        }

        if (array_key_exists("Terminologies",$param) and $param["Terminologies"] !== null) {
            $this->Terminologies = [];
            foreach ($param["Terminologies"] as $key => $value){
                $obj = new TerminologyItem();
                $obj->deserialize($value);
                array_push($this->Terminologies, $obj);
            }
        }
    }
}
