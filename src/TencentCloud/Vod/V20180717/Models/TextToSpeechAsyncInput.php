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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speech synthesis task input.
 *
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getText() Obtain <p>Text to convert to speech.</p>
 * @method void setText(string $Text) Set <p>Text to convert to speech.</p>
 * @method string getLanguageBoost() Obtain <p>Text to speech language.</p>
 * @method void setLanguageBoost(string $LanguageBoost) Set <p>Text to speech language.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class TextToSpeechAsyncInput extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Text to convert to speech.</p>
     */
    public $Text;

    /**
     * @var string <p>Text to speech language.</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $Text <p>Text to convert to speech.</p>
     * @param string $LanguageBoost <p>Text to speech language.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
