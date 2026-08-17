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
 * RecognizeAudio request structure.
 *
 * @method string getAudioData() Obtain Base64-encoded audio data.
 * @method void setAudioData(string $AudioData) Set Base64-encoded audio data.
 * @method string getSource() Obtain Identify the target language. If left empty, the default is auto for automatic language identification.
Note: If the automatic language recognition performance is poor, you can specify the language to improve accuracy.

Currently supported languages:
auto-identification
Simplified Chinese
en: English
Japanese
ko: Korean
vi: Vietnamese
ms: Malay
id: Indonesian
fil: Filipino
th: Thai
pt: Portuguese
tr:
ar: Arabic
es: Spanish
hi: Hindi
French
de: German
Italian
Cantonese
ru: Russian
af: Afrikaans
sq: Albanian
am: Amharic
hy: Armenian
az: Azerbaijani
eu: Basque
bn: Bengali
bs: Bosnian
bg: Bulgarian
my: Burmese
ca: Catalan
hr: Croatian
cs: Czech
da: Danish
nl: Dutch
et: Estonian
fi: Finnish
gl: Galician
ka: Georgian
el: Greek
gu: Gujarati
iw: Hebrew
hu: Hungarian
is: Icelandic
jv: Javanese
kn: Kannada
kk: Kazakh
km: Khmer
RPC
lo: Lao
lv: Latvian
lt: Lithuanian
mk: Macedonian
ml: Malayalam
mr: Marathi
mn: Mongolian
ne: Nepali
Norwegian Bokmål
fa: Persian
pl: Polish
ro: Romanian
sr: Serbian
si: Sinhalese
sk: Slovak
sl: Slovenian
Southern Sotho
su: Sundanese
sw: Swahili
sv: Swedish
ta: Tamil
te: Telugu
`ts`: Tsonga.
uk: Ukrainian
ur: Urdu
uz: Uzbek
ve: Venda
xh: isiXhosa
zu: Zulu

 * @method void setSource(string $Source) Set Identify the target language. If left empty, the default is auto for automatic language identification.
Note: If the automatic language recognition performance is poor, you can specify the language to improve accuracy.

Currently supported languages:
auto-identification
Simplified Chinese
en: English
Japanese
ko: Korean
vi: Vietnamese
ms: Malay
id: Indonesian
fil: Filipino
th: Thai
pt: Portuguese
tr:
ar: Arabic
es: Spanish
hi: Hindi
French
de: German
Italian
Cantonese
ru: Russian
af: Afrikaans
sq: Albanian
am: Amharic
hy: Armenian
az: Azerbaijani
eu: Basque
bn: Bengali
bs: Bosnian
bg: Bulgarian
my: Burmese
ca: Catalan
hr: Croatian
cs: Czech
da: Danish
nl: Dutch
et: Estonian
fi: Finnish
gl: Galician
ka: Georgian
el: Greek
gu: Gujarati
iw: Hebrew
hu: Hungarian
is: Icelandic
jv: Javanese
kn: Kannada
kk: Kazakh
km: Khmer
RPC
lo: Lao
lv: Latvian
lt: Lithuanian
mk: Macedonian
ml: Malayalam
mr: Marathi
mn: Mongolian
ne: Nepali
Norwegian Bokmål
fa: Persian
pl: Polish
ro: Romanian
sr: Serbian
si: Sinhalese
sk: Slovak
sl: Slovenian
Southern Sotho
su: Sundanese
sw: Swahili
sv: Swedish
ta: Tamil
te: Telugu
`ts`: Tsonga.
uk: Ukrainian
ur: Urdu
uz: Uzbek
ve: Venda
xh: isiXhosa
zu: Zulu

 * @method string getAudioFormat() Obtain Audio data format, default is pcm

Supported formats:
pcm (mono 16-bit sampling pcm data with a 16000 sampling rate)
ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
 * @method void setAudioFormat(string $AudioFormat) Set Audio data format, default is pcm

Supported formats:
pcm (mono 16-bit sampling pcm data with a 16000 sampling rate)
ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
 * @method integer getSampleRate() Obtain Audio sampling rate

Supported sampling rates:
pcm 16000
ogg-opus 16000 / 24000 / 48000
 * @method void setSampleRate(integer $SampleRate) Set Audio sampling rate

Supported sampling rates:
pcm 16000
ogg-opus 16000 / 24000 / 48000
 * @method string getUserExtPara() Obtain Extended parameter. This is left empty by default. Use this parameter for special requirements.
 * @method void setUserExtPara(string $UserExtPara) Set Extended parameter. This is left empty by default. Use this parameter for special requirements.
 */
class RecognizeAudioRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded audio data.
     */
    public $AudioData;

    /**
     * @var string Identify the target language. If left empty, the default is auto for automatic language identification.
Note: If the automatic language recognition performance is poor, you can specify the language to improve accuracy.

Currently supported languages:
auto-identification
Simplified Chinese
en: English
Japanese
ko: Korean
vi: Vietnamese
ms: Malay
id: Indonesian
fil: Filipino
th: Thai
pt: Portuguese
tr:
ar: Arabic
es: Spanish
hi: Hindi
French
de: German
Italian
Cantonese
ru: Russian
af: Afrikaans
sq: Albanian
am: Amharic
hy: Armenian
az: Azerbaijani
eu: Basque
bn: Bengali
bs: Bosnian
bg: Bulgarian
my: Burmese
ca: Catalan
hr: Croatian
cs: Czech
da: Danish
nl: Dutch
et: Estonian
fi: Finnish
gl: Galician
ka: Georgian
el: Greek
gu: Gujarati
iw: Hebrew
hu: Hungarian
is: Icelandic
jv: Javanese
kn: Kannada
kk: Kazakh
km: Khmer
RPC
lo: Lao
lv: Latvian
lt: Lithuanian
mk: Macedonian
ml: Malayalam
mr: Marathi
mn: Mongolian
ne: Nepali
Norwegian Bokmål
fa: Persian
pl: Polish
ro: Romanian
sr: Serbian
si: Sinhalese
sk: Slovak
sl: Slovenian
Southern Sotho
su: Sundanese
sw: Swahili
sv: Swedish
ta: Tamil
te: Telugu
`ts`: Tsonga.
uk: Ukrainian
ur: Urdu
uz: Uzbek
ve: Venda
xh: isiXhosa
zu: Zulu

     */
    public $Source;

    /**
     * @var string Audio data format, default is pcm

Supported formats:
pcm (mono 16-bit sampling pcm data with a 16000 sampling rate)
ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
     */
    public $AudioFormat;

    /**
     * @var integer Audio sampling rate

Supported sampling rates:
pcm 16000
ogg-opus 16000 / 24000 / 48000
     */
    public $SampleRate;

    /**
     * @var string Extended parameter. This is left empty by default. Use this parameter for special requirements.
     */
    public $UserExtPara;

    /**
     * @param string $AudioData Base64-encoded audio data.
     * @param string $Source Identify the target language. If left empty, the default is auto for automatic language identification.
Note: If the automatic language recognition performance is poor, you can specify the language to improve accuracy.

Currently supported languages:
auto-identification
Simplified Chinese
en: English
Japanese
ko: Korean
vi: Vietnamese
ms: Malay
id: Indonesian
fil: Filipino
th: Thai
pt: Portuguese
tr:
ar: Arabic
es: Spanish
hi: Hindi
French
de: German
Italian
Cantonese
ru: Russian
af: Afrikaans
sq: Albanian
am: Amharic
hy: Armenian
az: Azerbaijani
eu: Basque
bn: Bengali
bs: Bosnian
bg: Bulgarian
my: Burmese
ca: Catalan
hr: Croatian
cs: Czech
da: Danish
nl: Dutch
et: Estonian
fi: Finnish
gl: Galician
ka: Georgian
el: Greek
gu: Gujarati
iw: Hebrew
hu: Hungarian
is: Icelandic
jv: Javanese
kn: Kannada
kk: Kazakh
km: Khmer
RPC
lo: Lao
lv: Latvian
lt: Lithuanian
mk: Macedonian
ml: Malayalam
mr: Marathi
mn: Mongolian
ne: Nepali
Norwegian Bokmål
fa: Persian
pl: Polish
ro: Romanian
sr: Serbian
si: Sinhalese
sk: Slovak
sl: Slovenian
Southern Sotho
su: Sundanese
sw: Swahili
sv: Swedish
ta: Tamil
te: Telugu
`ts`: Tsonga.
uk: Ukrainian
ur: Urdu
uz: Uzbek
ve: Venda
xh: isiXhosa
zu: Zulu

     * @param string $AudioFormat Audio data format, default is pcm

Supported formats:
pcm (mono 16-bit sampling pcm data with a 16000 sampling rate)
ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
     * @param integer $SampleRate Audio sampling rate

Supported sampling rates:
pcm 16000
ogg-opus 16000 / 24000 / 48000
     * @param string $UserExtPara Extended parameter. This is left empty by default. Use this parameter for special requirements.
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
        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }
    }
}
