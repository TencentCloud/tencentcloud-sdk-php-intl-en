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
 * Translate configuration.
 *
 * @method array getTargetLanguages() Obtain Target language for translation, target language list (ISO 639-1).

 * @method void setTargetLanguages(array $TargetLanguages) Set Target language for translation, target language list (ISO 639-1).

 * @method integer getMode() Obtain 1: text translation only 2: speech simultaneous interpretation.

 * @method void setMode(integer $Mode) Set 1: text translation only 2: speech simultaneous interpretation.

 * @method TTSConfig getTTSConfig() Obtain Speech simultaneous interpretation configuration. when enabling simultaneous interpretation, transmission is required.
 * @method void setTTSConfig(TTSConfig $TTSConfig) Set Speech simultaneous interpretation configuration. when enabling simultaneous interpretation, transmission is required.
 * @method array getTerminology() Obtain Translation terminology collection.
 * @method void setTerminology(array $Terminology) Set Translation terminology collection.
 */
class TranslationConfig extends AbstractModel
{
    /**
     * @var array Target language for translation, target language list (ISO 639-1).

     */
    public $TargetLanguages;

    /**
     * @var integer 1: text translation only 2: speech simultaneous interpretation.

     */
    public $Mode;

    /**
     * @var TTSConfig Speech simultaneous interpretation configuration. when enabling simultaneous interpretation, transmission is required.
     */
    public $TTSConfig;

    /**
     * @var array Translation terminology collection.
     */
    public $Terminology;

    /**
     * @param array $TargetLanguages Target language for translation, target language list (ISO 639-1).

     * @param integer $Mode 1: text translation only 2: speech simultaneous interpretation.

     * @param TTSConfig $TTSConfig Speech simultaneous interpretation configuration. when enabling simultaneous interpretation, transmission is required.
     * @param array $Terminology Translation terminology collection.
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
        if (array_key_exists("TargetLanguages",$param) and $param["TargetLanguages"] !== null) {
            $this->TargetLanguages = $param["TargetLanguages"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TTSConfig();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("Terminology",$param) and $param["Terminology"] !== null) {
            $this->Terminology = [];
            foreach ($param["Terminology"] as $key => $value){
                $obj = new Terminology();
                $obj->deserialize($value);
                array_push($this->Terminology, $obj);
            }
        }
    }
}
