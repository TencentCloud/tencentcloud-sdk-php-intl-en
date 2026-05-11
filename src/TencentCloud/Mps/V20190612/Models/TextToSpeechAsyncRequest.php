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
 * TextToSpeechAsync request structure.
 *
 * @method string getText() Obtain <p>Text to convert to speech.</p>
 * @method void setText(string $Text) Set <p>Text to convert to speech.</p>
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getTextLang() Obtain <p>Text language. The default value is Chinese.</p>
 * @method void setTextLang(string $TextLang) Set <p>Text language. The default value is Chinese.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p><p>synExt (Object): Extended text to speech parameter.<br>  duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>  sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br>  pitch (Integer): -Pitch. Default value: 0 (original voice output). Value range: [-12, 12].</p><p>transExt (Object): Extended translation parameter.<br>  transInfo (Object).<br>   transDst (String): Target language, such as en.<br>  transRequirement (String): Translation requirements.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p><p>synExt (Object): Extended text to speech parameter.<br>  duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>  sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br>  pitch (Integer): -Pitch. Default value: 0 (original voice output). Value range: [-12, 12].</p><p>transExt (Object): Extended translation parameter.<br>  transInfo (Object).<br>   transDst (String): Target language, such as en.<br>  transRequirement (String): Translation requirements.</p>
 */
class TextToSpeechAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>Text to convert to speech.</p>
     */
    public $Text;

    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Text language. The default value is Chinese.</p>
     */
    public $TextLang;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p><p>synExt (Object): Extended text to speech parameter.<br>  duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>  sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br>  pitch (Integer): -Pitch. Default value: 0 (original voice output). Value range: [-12, 12].</p><p>transExt (Object): Extended translation parameter.<br>  transInfo (Object).<br>   transDst (String): Target language, such as en.<br>  transRequirement (String): Translation requirements.</p>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>Text to convert to speech.</p>
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $TextLang <p>Text language. The default value is Chinese.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p><p>synExt (Object): Extended text to speech parameter.<br>  duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>  sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br>  pitch (Integer): -Pitch. Default value: 0 (original voice output). Value range: [-12, 12].</p><p>transExt (Object): Extended translation parameter.<br>  transInfo (Object).<br>   transDst (String): Target language, such as en.<br>  transRequirement (String): Translation requirements.</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
