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
 * @method string getSource() Obtain Target language for recognition. If this is not specified, the language is automatically identified (auto).Note: If the automatic identification provides unsatisfactory results, you can specify the language to improve the accuracy.Supported languages:auto: automatic identification.zh: Simplified Chinese.en: English.ja: Japanese.ko: Korean.vi: Vietnamese.ms: Malay.id: Indonesian.fil: Filipino.th: Thai.pt: Portuguese.tr: Turkish.ar: Arabic.es: Spanish.hi: Hindi.fr: French.de: German.it: Italian.yue: Cantonese.ru: Russian.af: Afrikaans.sq: Albanian.am: Amharic.hy: Armenian.az: Azerbaijani.eu: Basque.bn: Bengali.bs: Bosnian.bg: Bulgarian.my: Burmese.ca: Catalan.hr: Croatian.cs: Czech.da: Danish.nl: Dutch.et: Estonian.fi: Finnish.gl: Galician.ka: Georgian.el: Greek.gu: Gujarati.iw: Hebrew.hu: Hungarian.is: Icelandic.jv: Javanese.kn: Kannada.kk: Kazakh.km: Khmer.rw: Kinyarwanda.lo: Lao.lv: Latvian.lt: Lithuanian.mk: Macedonian.ml: Malayalam.mr: Marathi.mn: Mongolian.ne: Nepali.no: Norwegian Bokmal.fa: Persian.pl: Polish.ro: Romanian.sr: Serbian.si: Sinhala.sk: Slovak.sl: Slovenian.st: Southern Sotho.su: Sundanese.sw: Swahili.sv: Swedish.ta: Tamil.te: Telugu.ts: Tsonga.uk: Ukrainian.ur: Urdu.uz: Uzbek.ve: Vendaxh: Xhosa.zu: Zulu.

 * @method void setSource(string $Source) Set Target language for recognition. If this is not specified, the language is automatically identified (auto).Note: If the automatic identification provides unsatisfactory results, you can specify the language to improve the accuracy.Supported languages:auto: automatic identification.zh: Simplified Chinese.en: English.ja: Japanese.ko: Korean.vi: Vietnamese.ms: Malay.id: Indonesian.fil: Filipino.th: Thai.pt: Portuguese.tr: Turkish.ar: Arabic.es: Spanish.hi: Hindi.fr: French.de: German.it: Italian.yue: Cantonese.ru: Russian.af: Afrikaans.sq: Albanian.am: Amharic.hy: Armenian.az: Azerbaijani.eu: Basque.bn: Bengali.bs: Bosnian.bg: Bulgarian.my: Burmese.ca: Catalan.hr: Croatian.cs: Czech.da: Danish.nl: Dutch.et: Estonian.fi: Finnish.gl: Galician.ka: Georgian.el: Greek.gu: Gujarati.iw: Hebrew.hu: Hungarian.is: Icelandic.jv: Javanese.kn: Kannada.kk: Kazakh.km: Khmer.rw: Kinyarwanda.lo: Lao.lv: Latvian.lt: Lithuanian.mk: Macedonian.ml: Malayalam.mr: Marathi.mn: Mongolian.ne: Nepali.no: Norwegian Bokmal.fa: Persian.pl: Polish.ro: Romanian.sr: Serbian.si: Sinhala.sk: Slovak.sl: Slovenian.st: Southern Sotho.su: Sundanese.sw: Swahili.sv: Swedish.ta: Tamil.te: Telugu.ts: Tsonga.uk: Ukrainian.ur: Urdu.uz: Uzbek.ve: Vendaxh: Xhosa.zu: Zulu.

 * @method string getAudioFormat() Obtain Audio data format. Default value: pcm.Supported formats:pcm (mono 16-bit PCM data with a sample rate of 16000).ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
 * @method void setAudioFormat(string $AudioFormat) Set Audio data format. Default value: pcm.Supported formats:pcm (mono 16-bit PCM data with a sample rate of 16000).ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
 * @method integer getSampleRate() Obtain Audio sample rate.Supported sample rates:pcm 16000
ogg-opus 16000 / 24000 / 48000
 * @method void setSampleRate(integer $SampleRate) Set Audio sample rate.Supported sample rates:pcm 16000
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
     * @var string Target language for recognition. If this is not specified, the language is automatically identified (auto).Note: If the automatic identification provides unsatisfactory results, you can specify the language to improve the accuracy.Supported languages:auto: automatic identification.zh: Simplified Chinese.en: English.ja: Japanese.ko: Korean.vi: Vietnamese.ms: Malay.id: Indonesian.fil: Filipino.th: Thai.pt: Portuguese.tr: Turkish.ar: Arabic.es: Spanish.hi: Hindi.fr: French.de: German.it: Italian.yue: Cantonese.ru: Russian.af: Afrikaans.sq: Albanian.am: Amharic.hy: Armenian.az: Azerbaijani.eu: Basque.bn: Bengali.bs: Bosnian.bg: Bulgarian.my: Burmese.ca: Catalan.hr: Croatian.cs: Czech.da: Danish.nl: Dutch.et: Estonian.fi: Finnish.gl: Galician.ka: Georgian.el: Greek.gu: Gujarati.iw: Hebrew.hu: Hungarian.is: Icelandic.jv: Javanese.kn: Kannada.kk: Kazakh.km: Khmer.rw: Kinyarwanda.lo: Lao.lv: Latvian.lt: Lithuanian.mk: Macedonian.ml: Malayalam.mr: Marathi.mn: Mongolian.ne: Nepali.no: Norwegian Bokmal.fa: Persian.pl: Polish.ro: Romanian.sr: Serbian.si: Sinhala.sk: Slovak.sl: Slovenian.st: Southern Sotho.su: Sundanese.sw: Swahili.sv: Swedish.ta: Tamil.te: Telugu.ts: Tsonga.uk: Ukrainian.ur: Urdu.uz: Uzbek.ve: Vendaxh: Xhosa.zu: Zulu.

     */
    public $Source;

    /**
     * @var string Audio data format. Default value: pcm.Supported formats:pcm (mono 16-bit PCM data with a sample rate of 16000).ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
     */
    public $AudioFormat;

    /**
     * @var integer Audio sample rate.Supported sample rates:pcm 16000
ogg-opus 16000 / 24000 / 48000
     */
    public $SampleRate;

    /**
     * @var string Extended parameter. This is left empty by default. Use this parameter for special requirements.
     */
    public $UserExtPara;

    /**
     * @param string $AudioData Base64-encoded audio data.
     * @param string $Source Target language for recognition. If this is not specified, the language is automatically identified (auto).Note: If the automatic identification provides unsatisfactory results, you can specify the language to improve the accuracy.Supported languages:auto: automatic identification.zh: Simplified Chinese.en: English.ja: Japanese.ko: Korean.vi: Vietnamese.ms: Malay.id: Indonesian.fil: Filipino.th: Thai.pt: Portuguese.tr: Turkish.ar: Arabic.es: Spanish.hi: Hindi.fr: French.de: German.it: Italian.yue: Cantonese.ru: Russian.af: Afrikaans.sq: Albanian.am: Amharic.hy: Armenian.az: Azerbaijani.eu: Basque.bn: Bengali.bs: Bosnian.bg: Bulgarian.my: Burmese.ca: Catalan.hr: Croatian.cs: Czech.da: Danish.nl: Dutch.et: Estonian.fi: Finnish.gl: Galician.ka: Georgian.el: Greek.gu: Gujarati.iw: Hebrew.hu: Hungarian.is: Icelandic.jv: Javanese.kn: Kannada.kk: Kazakh.km: Khmer.rw: Kinyarwanda.lo: Lao.lv: Latvian.lt: Lithuanian.mk: Macedonian.ml: Malayalam.mr: Marathi.mn: Mongolian.ne: Nepali.no: Norwegian Bokmal.fa: Persian.pl: Polish.ro: Romanian.sr: Serbian.si: Sinhala.sk: Slovak.sl: Slovenian.st: Southern Sotho.su: Sundanese.sw: Swahili.sv: Swedish.ta: Tamil.te: Telugu.ts: Tsonga.uk: Ukrainian.ur: Urdu.uz: Uzbek.ve: Vendaxh: Xhosa.zu: Zulu.

     * @param string $AudioFormat Audio data format. Default value: pcm.Supported formats:pcm (mono 16-bit PCM data with a sample rate of 16000).ogg-opus (mono Opus-encoded Ogg data with sample rates of 16000, 24000, or 48000).
     * @param integer $SampleRate Audio sample rate.Supported sample rates:pcm 16000
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
