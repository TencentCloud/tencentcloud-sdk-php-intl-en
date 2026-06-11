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
 * Convert speech to text parameter.
 *
 * @method string getLanguage() Obtain Convert speech to text supported languages, "zh" chinese is selected by default.

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. 

Supported languages for different speech to text package versions are as follows:.

- "zh": chinese (simplified).
- "zh-TW": chinese (traditional).
- "en": english.
- "zh-yue": cantonese in china.
- "vi": "vietnamese.".
- "ja": "japanese.".
- "ko": "korean.".
- "id": "indonesian".
- "th": thai.
- "pt": portuguese.
- "tr": "turkish.".
- "ar": "arabic".
- "es": "spanish".
- "hi": "hindi".
- "ft": "french.".
- "ms": malay.
- "fil": filipino.
- "de": german.
-`it`: italian.
- "ru": russian.
- "sv": "swedish.".
- "da": "danish.".
- "no": norwegian.
- "pl": polski.
-"af-ZA": afrikaans.
- "nl-NL": dutch.
- "nl-BE": flemish.
- "uz": uzbek.
- "hu": hungarian.
- "he": hebrew.
- "ur": urdu.

**Note**:.
If the language you need is not available, contact our technical staff.
 * @method void setLanguage(string $Language) Set Convert speech to text supported languages, "zh" chinese is selected by default.

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. 

Supported languages for different speech to text package versions are as follows:.

- "zh": chinese (simplified).
- "zh-TW": chinese (traditional).
- "en": english.
- "zh-yue": cantonese in china.
- "vi": "vietnamese.".
- "ja": "japanese.".
- "ko": "korean.".
- "id": "indonesian".
- "th": thai.
- "pt": portuguese.
- "tr": "turkish.".
- "ar": "arabic".
- "es": "spanish".
- "hi": "hindi".
- "ft": "french.".
- "ms": malay.
- "fil": filipino.
- "de": german.
-`it`: italian.
- "ru": russian.
- "sv": "swedish.".
- "da": "danish.".
- "no": norwegian.
- "pl": polski.
-"af-ZA": afrikaans.
- "nl-NL": dutch.
- "nl-BE": flemish.
- "uz": uzbek.
- "hu": hungarian.
- "he": hebrew.
- "ur": urdu.

**Note**:.
If the language you need is not available, contact our technical staff.
 * @method array getAlternativeLanguage() Obtain **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
 * @method void setAlternativeLanguage(array $AlternativeLanguage) Set **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
 * @method string getCustomParam() Obtain Custom parameter. contact for background usage.

 * @method void setCustomParam(string $CustomParam) Set Custom parameter. contact for background usage.

 * @method integer getVadSilenceTime() Obtain Specifies the time when automatic speech recognition (asr) vad is active. value range: 240-2000. default: 1000. unit: ms. a smaller value enables faster speech recognition sentence segmentation.
 * @method void setVadSilenceTime(integer $VadSilenceTime) Set Specifies the time when automatic speech recognition (asr) vad is active. value range: 240-2000. default: 1000. unit: ms. a smaller value enables faster speech recognition sentence segmentation.
 * @method integer getVadLevel() Obtain The vad far-field voice suppression capacity (without impacting asr recognition performance) ranges from 0 to 5, with a default value of 0, indicating disabled far-field voice suppression. the recommended setting is 2 for better far-field voice suppression. in a noisy office environment, it can be set to 3, and in more noisy environments, 4 and 5 are available for use. note that a higher VadLevel may suppress single words as noise.
 * @method void setVadLevel(integer $VadLevel) Set The vad far-field voice suppression capacity (without impacting asr recognition performance) ranges from 0 to 5, with a default value of 0, indicating disabled far-field voice suppression. the recommended setting is 2 for better far-field voice suppression. in a noisy office environment, it can be set to 3, and in more noisy environments, 4 and 5 are available for use. note that a higher VadLevel may suppress single words as noise.
 */
class STTConfig extends AbstractModel
{
    /**
     * @var string Convert speech to text supported languages, "zh" chinese is selected by default.

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. 

Supported languages for different speech to text package versions are as follows:.

- "zh": chinese (simplified).
- "zh-TW": chinese (traditional).
- "en": english.
- "zh-yue": cantonese in china.
- "vi": "vietnamese.".
- "ja": "japanese.".
- "ko": "korean.".
- "id": "indonesian".
- "th": thai.
- "pt": portuguese.
- "tr": "turkish.".
- "ar": "arabic".
- "es": "spanish".
- "hi": "hindi".
- "ft": "french.".
- "ms": malay.
- "fil": filipino.
- "de": german.
-`it`: italian.
- "ru": russian.
- "sv": "swedish.".
- "da": "danish.".
- "no": norwegian.
- "pl": polski.
-"af-ZA": afrikaans.
- "nl-NL": dutch.
- "nl-BE": flemish.
- "uz": uzbek.
- "hu": hungarian.
- "he": hebrew.
- "ur": urdu.

**Note**:.
If the language you need is not available, contact our technical staff.
     */
    public $Language;

    /**
     * @var array **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
     */
    public $AlternativeLanguage;

    /**
     * @var string Custom parameter. contact for background usage.

     */
    public $CustomParam;

    /**
     * @var integer Specifies the time when automatic speech recognition (asr) vad is active. value range: 240-2000. default: 1000. unit: ms. a smaller value enables faster speech recognition sentence segmentation.
     */
    public $VadSilenceTime;

    /**
     * @var integer The vad far-field voice suppression capacity (without impacting asr recognition performance) ranges from 0 to 5, with a default value of 0, indicating disabled far-field voice suppression. the recommended setting is 2 for better far-field voice suppression. in a noisy office environment, it can be set to 3, and in more noisy environments, 4 and 5 are available for use. note that a higher VadLevel may suppress single words as noise.
     */
    public $VadLevel;

    /**
     * @param string $Language Convert speech to text supported languages, "zh" chinese is selected by default.

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. 

Supported languages for different speech to text package versions are as follows:.

- "zh": chinese (simplified).
- "zh-TW": chinese (traditional).
- "en": english.
- "zh-yue": cantonese in china.
- "vi": "vietnamese.".
- "ja": "japanese.".
- "ko": "korean.".
- "id": "indonesian".
- "th": thai.
- "pt": portuguese.
- "tr": "turkish.".
- "ar": "arabic".
- "es": "spanish".
- "hi": "hindi".
- "ft": "french.".
- "ms": malay.
- "fil": filipino.
- "de": german.
-`it`: italian.
- "ru": russian.
- "sv": "swedish.".
- "da": "danish.".
- "no": norwegian.
- "pl": polski.
-"af-ZA": afrikaans.
- "nl-NL": dutch.
- "nl-BE": flemish.
- "uz": uzbek.
- "hu": hungarian.
- "he": hebrew.
- "ur": urdu.

**Note**:.
If the language you need is not available, contact our technical staff.
     * @param array $AlternativeLanguage **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
     * @param string $CustomParam Custom parameter. contact for background usage.

     * @param integer $VadSilenceTime Specifies the time when automatic speech recognition (asr) vad is active. value range: 240-2000. default: 1000. unit: ms. a smaller value enables faster speech recognition sentence segmentation.
     * @param integer $VadLevel The vad far-field voice suppression capacity (without impacting asr recognition performance) ranges from 0 to 5, with a default value of 0, indicating disabled far-field voice suppression. the recommended setting is 2 for better far-field voice suppression. in a noisy office environment, it can be set to 3, and in more noisy environments, 4 and 5 are available for use. note that a higher VadLevel may suppress single words as noise.
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("AlternativeLanguage",$param) and $param["AlternativeLanguage"] !== null) {
            $this->AlternativeLanguage = $param["AlternativeLanguage"];
        }

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
        }

        if (array_key_exists("VadSilenceTime",$param) and $param["VadSilenceTime"] !== null) {
            $this->VadSilenceTime = $param["VadSilenceTime"];
        }

        if (array_key_exists("VadLevel",$param) and $param["VadLevel"] !== null) {
            $this->VadLevel = $param["VadLevel"];
        }
    }
}
