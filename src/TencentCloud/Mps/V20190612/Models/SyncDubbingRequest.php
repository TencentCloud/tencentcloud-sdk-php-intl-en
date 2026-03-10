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
 * SyncDubbing request structure.
 *
 * @method string getText() Obtain Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.
 * @method void setText(string $Text) Set Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.
 * @method string getTextLang() Obtain Text language. This defaults to zh (Chinese) if left empty.
Supported languages:
zh: Chinese.
en: English.
ja: Japanese.
de: German.
fr: French.
ko: Korean.
ru: Russian.
uk: Ukrainian.
pt: Portuguese.
it: Italian.
es: Spanish.
id: Indonesian.
nl: Dutch.
tr: Turkish.
fil: Filipino.
ms: Malay.
el: Greek.
fi: Finnish.
hr: Croatian.
sk: Slovak.
pl: Polish.
sv: Swedish.
hi: Hindi.
bg: Bulgarian.
ro: Romanian.
ar: Arabic.
cs: Czech.
da: Danish.
ta: Tamil.
hun: Hungarian.
vi: Vietnamese.
no: Norwegian.
yue: Cantonese.
th: Thai.
he: Hebrew.
ca: Catalan.
nn: Nynorsk.
af: Afrikaans.
fa: Persian.
sl: Slovenian.

 * @method void setTextLang(string $TextLang) Set Text language. This defaults to zh (Chinese) if left empty.
Supported languages:
zh: Chinese.
en: English.
ja: Japanese.
de: German.
fr: French.
ko: Korean.
ru: Russian.
uk: Ukrainian.
pt: Portuguese.
it: Italian.
es: Spanish.
id: Indonesian.
nl: Dutch.
tr: Turkish.
fil: Filipino.
ms: Malay.
el: Greek.
fi: Finnish.
hr: Croatian.
sk: Slovak.
pl: Polish.
sv: Swedish.
hi: Hindi.
bg: Bulgarian.
ro: Romanian.
ar: Arabic.
cs: Czech.
da: Danish.
ta: Tamil.
hun: Hungarian.
vi: Vietnamese.
no: Norwegian.
yue: Cantonese.
th: Thai.
he: Hebrew.
ca: Catalan.
nn: Nynorsk.
af: Afrikaans.
fa: Persian.
sl: Slovenian.

 * @method string getVoiceId() Obtain Voice type ID. This is required for synthesis with a specific voice type. System voice types and voice type cloning are supported.
 * @method void setVoiceId(string $VoiceId) Set Voice type ID. This is required for synthesis with a specific voice type. System voice types and voice type cloning are supported.
 * @method string getAudioData() Obtain Base64-encoded audio for cloning.
 * @method void setAudioData(string $AudioData) Set Base64-encoded audio for cloning.
 * @method string getAudioLang() Obtain Cloning audio language. The default language is Chinese.
Supported languages are the same as those for TextLang.
 * @method void setAudioLang(string $AudioLang) Set Cloning audio language. The default language is Chinese.
Supported languages are the same as those for TextLang.
 * @method string getExtParam() Obtain Extended parameters in the format of a JSON string.
 * @method void setExtParam(string $ExtParam) Set Extended parameters in the format of a JSON string.
 */
class SyncDubbingRequest extends AbstractModel
{
    /**
     * @var string Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.
     */
    public $Text;

    /**
     * @var string Text language. This defaults to zh (Chinese) if left empty.
Supported languages:
zh: Chinese.
en: English.
ja: Japanese.
de: German.
fr: French.
ko: Korean.
ru: Russian.
uk: Ukrainian.
pt: Portuguese.
it: Italian.
es: Spanish.
id: Indonesian.
nl: Dutch.
tr: Turkish.
fil: Filipino.
ms: Malay.
el: Greek.
fi: Finnish.
hr: Croatian.
sk: Slovak.
pl: Polish.
sv: Swedish.
hi: Hindi.
bg: Bulgarian.
ro: Romanian.
ar: Arabic.
cs: Czech.
da: Danish.
ta: Tamil.
hun: Hungarian.
vi: Vietnamese.
no: Norwegian.
yue: Cantonese.
th: Thai.
he: Hebrew.
ca: Catalan.
nn: Nynorsk.
af: Afrikaans.
fa: Persian.
sl: Slovenian.

     */
    public $TextLang;

    /**
     * @var string Voice type ID. This is required for synthesis with a specific voice type. System voice types and voice type cloning are supported.
     */
    public $VoiceId;

    /**
     * @var string Base64-encoded audio for cloning.
     */
    public $AudioData;

    /**
     * @var string Cloning audio language. The default language is Chinese.
Supported languages are the same as those for TextLang.
     */
    public $AudioLang;

    /**
     * @var string Extended parameters in the format of a JSON string.
     */
    public $ExtParam;

    /**
     * @param string $Text Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.
     * @param string $TextLang Text language. This defaults to zh (Chinese) if left empty.
Supported languages:
zh: Chinese.
en: English.
ja: Japanese.
de: German.
fr: French.
ko: Korean.
ru: Russian.
uk: Ukrainian.
pt: Portuguese.
it: Italian.
es: Spanish.
id: Indonesian.
nl: Dutch.
tr: Turkish.
fil: Filipino.
ms: Malay.
el: Greek.
fi: Finnish.
hr: Croatian.
sk: Slovak.
pl: Polish.
sv: Swedish.
hi: Hindi.
bg: Bulgarian.
ro: Romanian.
ar: Arabic.
cs: Czech.
da: Danish.
ta: Tamil.
hun: Hungarian.
vi: Vietnamese.
no: Norwegian.
yue: Cantonese.
th: Thai.
he: Hebrew.
ca: Catalan.
nn: Nynorsk.
af: Afrikaans.
fa: Persian.
sl: Slovenian.

     * @param string $VoiceId Voice type ID. This is required for synthesis with a specific voice type. System voice types and voice type cloning are supported.
     * @param string $AudioData Base64-encoded audio for cloning.
     * @param string $AudioLang Cloning audio language. The default language is Chinese.
Supported languages are the same as those for TextLang.
     * @param string $ExtParam Extended parameters in the format of a JSON string.
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

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioLang",$param) and $param["AudioLang"] !== null) {
            $this->AudioLang = $param["AudioLang"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
