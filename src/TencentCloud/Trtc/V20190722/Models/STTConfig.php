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

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. for detailed instructions, see: [AI intelligent recognition billing description](https://www.tencentcloud.com/document/product/647/111976?from_cn_redirect=1).

Supported languages for different speech to text package versions are as follows:.

Basic language engine:.
-"zh": chinese (simplified).
-`zh-TW`: chinese (traditional).
-"En": english.
-"16k_zh_edu": chinese education.
-"16k_zh_medical": medical chinese.
-"16k_zh_court": chinese court.

**Standard language engine:**.
-"8k_zh_large": engine (large model version) for telecommunication. the current model supports chinese and other language recognition, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy for telephone audio in various scenarios and chinese dialects.
-"16k_zh_large": large model engine for mandarin, chinese dialects, and english. the current model supports language recognition for chinese, english, and multiple chinese dialects. it has a large number of parameters and enhanced language model performance, targeting low-quality audio such as loud noise, strong echo, low voice volume, and voice from far away with greatly improved recognition accuracy.
-"16k_multi_lang": multilingual large model engine. the current model simultaneously supports english, japanese, korean, arabic, filipino, french, hindi, indonesian, malay, portuguese, spanish, thai, turkish, vietnamese, and german. it achieves auto-identification of 15 languages at the sentence or paragraph level.
-"16k_zh_en": chinese-english large model engine. the current model supports chinese and english recognition at the same time, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy against low-quality audio such as loud noise, echo, low voice volume, and voice from far away.

**Advanced language engine:**.
-"zh-dialect": chinese dialect.
-"zh-yue": cantonese in china.
-"Vi": "vietnamese.".
-"Ja": "japanese.".
-"Ko": "korean.".
-"id": "indonesian".
-"Th": thai.
-"pt": portuguese.
-"tr": "turkish.".
-"Ar": "arabic".
-"es": "spanish".
-"Hi": "hindi".
-"Fr": "french.".
-"ms": malay.
-"Fil": filipino.
-"de": german.
-`It`: italian.
-"Ru": russian.
-"sv": "swedish.".
-"Da": "danish.".
-"No": norwegian.

**Note**:.
If the language you need is not available, contact our technical staff.
 * @method void setLanguage(string $Language) Set Convert speech to text supported languages, "zh" chinese is selected by default.

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. for detailed instructions, see: [AI intelligent recognition billing description](https://www.tencentcloud.com/document/product/647/111976?from_cn_redirect=1).

Supported languages for different speech to text package versions are as follows:.

Basic language engine:.
-"zh": chinese (simplified).
-`zh-TW`: chinese (traditional).
-"En": english.
-"16k_zh_edu": chinese education.
-"16k_zh_medical": medical chinese.
-"16k_zh_court": chinese court.

**Standard language engine:**.
-"8k_zh_large": engine (large model version) for telecommunication. the current model supports chinese and other language recognition, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy for telephone audio in various scenarios and chinese dialects.
-"16k_zh_large": large model engine for mandarin, chinese dialects, and english. the current model supports language recognition for chinese, english, and multiple chinese dialects. it has a large number of parameters and enhanced language model performance, targeting low-quality audio such as loud noise, strong echo, low voice volume, and voice from far away with greatly improved recognition accuracy.
-"16k_multi_lang": multilingual large model engine. the current model simultaneously supports english, japanese, korean, arabic, filipino, french, hindi, indonesian, malay, portuguese, spanish, thai, turkish, vietnamese, and german. it achieves auto-identification of 15 languages at the sentence or paragraph level.
-"16k_zh_en": chinese-english large model engine. the current model supports chinese and english recognition at the same time, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy against low-quality audio such as loud noise, echo, low voice volume, and voice from far away.

**Advanced language engine:**.
-"zh-dialect": chinese dialect.
-"zh-yue": cantonese in china.
-"Vi": "vietnamese.".
-"Ja": "japanese.".
-"Ko": "korean.".
-"id": "indonesian".
-"Th": thai.
-"pt": portuguese.
-"tr": "turkish.".
-"Ar": "arabic".
-"es": "spanish".
-"Hi": "hindi".
-"Fr": "french.".
-"ms": malay.
-"Fil": filipino.
-"de": german.
-`It`: italian.
-"Ru": russian.
-"sv": "swedish.".
-"Da": "danish.".
-"No": norwegian.

**Note**:.
If the language you need is not available, contact our technical staff.
 * @method array getAlternativeLanguage() Obtain **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
Note: does not support entering "zh-dialect", "16k_zh_edu", "16k_zh_medical", "16k_zh_court", "8k_zh_large", "16k_zh_large", "16k_multi_lang", "16k_zh_en".

 * @method void setAlternativeLanguage(array $AlternativeLanguage) Set **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
Note: does not support entering "zh-dialect", "16k_zh_edu", "16k_zh_medical", "16k_zh_court", "8k_zh_large", "16k_zh_large", "16k_multi_lang", "16k_zh_en".

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

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. for detailed instructions, see: [AI intelligent recognition billing description](https://www.tencentcloud.com/document/product/647/111976?from_cn_redirect=1).

Supported languages for different speech to text package versions are as follows:.

Basic language engine:.
-"zh": chinese (simplified).
-`zh-TW`: chinese (traditional).
-"En": english.
-"16k_zh_edu": chinese education.
-"16k_zh_medical": medical chinese.
-"16k_zh_court": chinese court.

**Standard language engine:**.
-"8k_zh_large": engine (large model version) for telecommunication. the current model supports chinese and other language recognition, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy for telephone audio in various scenarios and chinese dialects.
-"16k_zh_large": large model engine for mandarin, chinese dialects, and english. the current model supports language recognition for chinese, english, and multiple chinese dialects. it has a large number of parameters and enhanced language model performance, targeting low-quality audio such as loud noise, strong echo, low voice volume, and voice from far away with greatly improved recognition accuracy.
-"16k_multi_lang": multilingual large model engine. the current model simultaneously supports english, japanese, korean, arabic, filipino, french, hindi, indonesian, malay, portuguese, spanish, thai, turkish, vietnamese, and german. it achieves auto-identification of 15 languages at the sentence or paragraph level.
-"16k_zh_en": chinese-english large model engine. the current model supports chinese and english recognition at the same time, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy against low-quality audio such as loud noise, echo, low voice volume, and voice from far away.

**Advanced language engine:**.
-"zh-dialect": chinese dialect.
-"zh-yue": cantonese in china.
-"Vi": "vietnamese.".
-"Ja": "japanese.".
-"Ko": "korean.".
-"id": "indonesian".
-"Th": thai.
-"pt": portuguese.
-"tr": "turkish.".
-"Ar": "arabic".
-"es": "spanish".
-"Hi": "hindi".
-"Fr": "french.".
-"ms": malay.
-"Fil": filipino.
-"de": german.
-`It`: italian.
-"Ru": russian.
-"sv": "swedish.".
-"Da": "danish.".
-"No": norwegian.

**Note**:.
If the language you need is not available, contact our technical staff.
     */
    public $Language;

    /**
     * @var array **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
Note: does not support entering "zh-dialect", "16k_zh_edu", "16k_zh_medical", "16k_zh_court", "8k_zh_large", "16k_zh_large", "16k_multi_lang", "16k_zh_en".

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

You can unlock different languages by purchasing the "AI intelligent recognition duration package" or claiming the trial version of the monthly subscription package. for detailed instructions, see: [AI intelligent recognition billing description](https://www.tencentcloud.com/document/product/647/111976?from_cn_redirect=1).

Supported languages for different speech to text package versions are as follows:.

Basic language engine:.
-"zh": chinese (simplified).
-`zh-TW`: chinese (traditional).
-"En": english.
-"16k_zh_edu": chinese education.
-"16k_zh_medical": medical chinese.
-"16k_zh_court": chinese court.

**Standard language engine:**.
-"8k_zh_large": engine (large model version) for telecommunication. the current model supports chinese and other language recognition, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy for telephone audio in various scenarios and chinese dialects.
-"16k_zh_large": large model engine for mandarin, chinese dialects, and english. the current model supports language recognition for chinese, english, and multiple chinese dialects. it has a large number of parameters and enhanced language model performance, targeting low-quality audio such as loud noise, strong echo, low voice volume, and voice from far away with greatly improved recognition accuracy.
-"16k_multi_lang": multilingual large model engine. the current model simultaneously supports english, japanese, korean, arabic, filipino, french, hindi, indonesian, malay, portuguese, spanish, thai, turkish, vietnamese, and german. it achieves auto-identification of 15 languages at the sentence or paragraph level.
-"16k_zh_en": chinese-english large model engine. the current model supports chinese and english recognition at the same time, has a large number of parameters, and features language model performance enhancement. it greatly improves recognition accuracy against low-quality audio such as loud noise, echo, low voice volume, and voice from far away.

**Advanced language engine:**.
-"zh-dialect": chinese dialect.
-"zh-yue": cantonese in china.
-"Vi": "vietnamese.".
-"Ja": "japanese.".
-"Ko": "korean.".
-"id": "indonesian".
-"Th": thai.
-"pt": portuguese.
-"tr": "turkish.".
-"Ar": "arabic".
-"es": "spanish".
-"Hi": "hindi".
-"Fr": "french.".
-"ms": malay.
-"Fil": filipino.
-"de": german.
-`It`: italian.
-"Ru": russian.
-"sv": "swedish.".
-"Da": "danish.".
-"No": norwegian.

**Note**:.
If the language you need is not available, contact our technical staff.
     * @param array $AlternativeLanguage **Fuzzy recognition is an advanced edition capacity, charged by default as the advanced edition.**.
Note: does not support entering "zh-dialect", "16k_zh_edu", "16k_zh_medical", "16k_zh_court", "8k_zh_large", "16k_zh_large", "16k_multi_lang", "16k_zh_en".

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
