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
 * Parameters used in speech recognition
 *
 * @method string getLang() Obtain <p>The model type used by the transcription service. Example value "bigmodel-zh". The languages supported by different package versions of speech to text are as follows:</p><ol><li>V2 version (recommended)</li></ol><p>"bigmodel-xxx": large model engine, recommended for use. "xxx" can be filled with specific languages, such as "bigmodel-zh". "xxx" can be filled with Chinese ("zh"), English ("en"), Cantonese ("yue"), Arabic ("ar"), German ("de"), French ("fr"), Spanish ("es"), Portuguese ("pt"), Indonesian ("id"), Italian ("it"), Korean ("ko"), Russian ("ru"), Thai ("th"), Vietnamese ("vi"), Japanese ("ja"), Turkish ("tr"), Hindi ("hi"), Malay ("ms"), Dutch ("nl"), Swedish ("sv"), Danish ("da"), Finnish ("fi"), Polish ("pl"), Czech ("cs"), Filipino ("fil"), Persian ("fa"), Greek ("el"), Hungarian ("hu"), Macedonian ("mk"), Romanian ("ro").</p><ol start="2"><li>V1 version (legacy version)</li></ol><p>Standard language engine:</p><ul><li>"16k_zh_large": 16k large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition.</li><li>"16k_zh_en": latest 16k Chinese-English large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition, optimized for Chinese-English mixed scenarios.</li></ul><p>Advanced language engine:</p><ul><li>"zh-yue": Cantonese Chinese</li><li>"vi": Vietnamese</li><li>"ja": Japanese</li><li>"ko": Korean</li><li>"id": Indonesian</li><li>"th": Thai</li><li>"pt": Portuguese</li><li>"tr": Turkish</li><li>"ar": Arabic</li><li>"es": Spanish</li><li>"hi": Hindi</li><li>"fr": French</li><li>"ms": Malay</li><li>"fil": Filipino</li><li>"de": German</li><li>"it": Italian</li><li>"ru": Russian</li><li>"sv": Swedish</li><li>"da": Danish</li><li>"no": Norwegian</li></ul><p>Note:<br>If the language you need is not available, contact our technical support.</p>
 * @method void setLang(string $Lang) Set <p>The model type used by the transcription service. Example value "bigmodel-zh". The languages supported by different package versions of speech to text are as follows:</p><ol><li>V2 version (recommended)</li></ol><p>"bigmodel-xxx": large model engine, recommended for use. "xxx" can be filled with specific languages, such as "bigmodel-zh". "xxx" can be filled with Chinese ("zh"), English ("en"), Cantonese ("yue"), Arabic ("ar"), German ("de"), French ("fr"), Spanish ("es"), Portuguese ("pt"), Indonesian ("id"), Italian ("it"), Korean ("ko"), Russian ("ru"), Thai ("th"), Vietnamese ("vi"), Japanese ("ja"), Turkish ("tr"), Hindi ("hi"), Malay ("ms"), Dutch ("nl"), Swedish ("sv"), Danish ("da"), Finnish ("fi"), Polish ("pl"), Czech ("cs"), Filipino ("fil"), Persian ("fa"), Greek ("el"), Hungarian ("hu"), Macedonian ("mk"), Romanian ("ro").</p><ol start="2"><li>V1 version (legacy version)</li></ol><p>Standard language engine:</p><ul><li>"16k_zh_large": 16k large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition.</li><li>"16k_zh_en": latest 16k Chinese-English large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition, optimized for Chinese-English mixed scenarios.</li></ul><p>Advanced language engine:</p><ul><li>"zh-yue": Cantonese Chinese</li><li>"vi": Vietnamese</li><li>"ja": Japanese</li><li>"ko": Korean</li><li>"id": Indonesian</li><li>"th": Thai</li><li>"pt": Portuguese</li><li>"tr": Turkish</li><li>"ar": Arabic</li><li>"es": Spanish</li><li>"hi": Hindi</li><li>"fr": French</li><li>"ms": Malay</li><li>"fil": Filipino</li><li>"de": German</li><li>"it": Italian</li><li>"ru": Russian</li><li>"sv": Swedish</li><li>"da": Danish</li><li>"no": Norwegian</li></ul><p>Note:<br>If the language you need is not available, contact our technical support.</p>
 * @method integer getVadSilenceTime() Obtain <p>The time when speech recognition vad ranges from 240 to 2000, with a default of 1000. The unit is ms. A smaller value enables faster sentence segmentation for speech recognition.<br>Example value: 1000</p>
 * @method void setVadSilenceTime(integer $VadSilenceTime) Set <p>The time when speech recognition vad ranges from 240 to 2000, with a default of 1000. The unit is ms. A smaller value enables faster sentence segmentation for speech recognition.<br>Example value: 1000</p>
 * @method string getHotWordList() Obtain <p>Temporary term list: improves recognition accuracy by biasing the ASR engine toward specific terms.</p>
<ul>
<li>Single term format: term|weight. Each term must not exceed 30 characters (or 10 Chinese characters). Weight must be an integer from [1-11] or 100. Examples: Tencent Cloud|5, ASR|11.</li>
<li>List format and limits: separate multiple terms with commas. Up to 128 terms are supported. Example: Tencent Cloud|10,speech recognition|5,ASR|11.<br>
Note:<br>
When the term weight is set to 11, the term is treated as a high-priority super term. Use weight 11 only for terms that are critical and must be recognized reliably. Setting too many terms to weight 11 may reduce overall accuracy.<br>
When the term weight is set to 100, the term enables homophone replacement. For example, when the configuration is write|100, any recognized homophone of "write" (such as "right") is forcibly replaced with "write". Enable this feature only when needed, and reserve weight 100 for terms where homophone confusion is a real problem. Setting too many terms to weight 100 may reduce overall accuracy.<br>
Terms must not contain spaces. Invalid example: ASR Tencent Cloud<br>
Example value: voice assistant|10</li>
</ul>
 * @method void setHotWordList(string $HotWordList) Set <p>Temporary term list: improves recognition accuracy by biasing the ASR engine toward specific terms.</p>
<ul>
<li>Single term format: term|weight. Each term must not exceed 30 characters (or 10 Chinese characters). Weight must be an integer from [1-11] or 100. Examples: Tencent Cloud|5, ASR|11.</li>
<li>List format and limits: separate multiple terms with commas. Up to 128 terms are supported. Example: Tencent Cloud|10,speech recognition|5,ASR|11.<br>
Note:<br>
When the term weight is set to 11, the term is treated as a high-priority super term. Use weight 11 only for terms that are critical and must be recognized reliably. Setting too many terms to weight 11 may reduce overall accuracy.<br>
When the term weight is set to 100, the term enables homophone replacement. For example, when the configuration is write|100, any recognized homophone of "write" (such as "right") is forcibly replaced with "write". Enable this feature only when needed, and reserve weight 100 for terms where homophone confusion is a real problem. Setting too many terms to weight 100 may reduce overall accuracy.<br>
Terms must not contain spaces. Invalid example: ASR Tencent Cloud<br>
Example value: voice assistant|10</li>
</ul>
 * @method array getAlternativeLanguage() Obtain <p>Fuzzy recognition is an advanced language engine feature. You can only specify advanced language engines other than zh-dialect and zh-yue. Note: You can specify up to 4 languages.</p>
 * @method void setAlternativeLanguage(array $AlternativeLanguage) Set <p>Fuzzy recognition is an advanced language engine feature. You can only specify advanced language engines other than zh-dialect and zh-yue. Note: You can specify up to 4 languages.</p>
 * @method integer getVadLevel() Obtain <p>The far-field voice suppression capacity of vad (without impacting asr recognition accuracy) ranges from [0, 3], defaulting to 0. Recommended setting is 2 for better far-field voice suppression capacity.</p>
 * @method void setVadLevel(integer $VadLevel) Set <p>The far-field voice suppression capacity of vad (without impacting asr recognition accuracy) ranges from [0, 3], defaulting to 0. Recommended setting is 2 for better far-field voice suppression capacity.</p>
 * @method integer getFilterDirty() Obtain <p>Whether to filter profanity (currently only support basic language engine and standard language engine), range [0, 2], default value 0.<br>0: not filter profanity; 1: filter dirty words; 2: replace with " * ".</p>
 * @method void setFilterDirty(integer $FilterDirty) Set <p>Whether to filter profanity (currently only support basic language engine and standard language engine), range [0, 2], default value 0.<br>0: not filter profanity; 1: filter dirty words; 2: replace with " * ".</p>
 * @method integer getFilterModal() Obtain <p>Whether to filter modal particles (currently only support basic language engine and standard language engine). Range: [0, 2]. Default value: 0.<br>0: Do not filter modal particles; 1: Partial filtering; 2: Strict filtering.</p>
 * @method void setFilterModal(integer $FilterModal) Set <p>Whether to filter modal particles (currently only support basic language engine and standard language engine). Range: [0, 2]. Default value: 0.<br>0: Do not filter modal particles; 1: Partial filtering; 2: Strict filtering.</p>
 * @method integer getFilterPunc() Obtain <p>Whether to filter periods at the end of sentences (currently only support basic language engine and standard language engine), range [0, 1], default value 0.<br>0: does not filter periods at the end of sentences; 1: filter out periods at the end of sentences.</p>
 * @method void setFilterPunc(integer $FilterPunc) Set <p>Whether to filter periods at the end of sentences (currently only support basic language engine and standard language engine), range [0, 1], default value 0.<br>0: does not filter periods at the end of sentences; 1: filter out periods at the end of sentences.</p>
 */
class AsrParam extends AbstractModel
{
    /**
     * @var string <p>The model type used by the transcription service. Example value "bigmodel-zh". The languages supported by different package versions of speech to text are as follows:</p><ol><li>V2 version (recommended)</li></ol><p>"bigmodel-xxx": large model engine, recommended for use. "xxx" can be filled with specific languages, such as "bigmodel-zh". "xxx" can be filled with Chinese ("zh"), English ("en"), Cantonese ("yue"), Arabic ("ar"), German ("de"), French ("fr"), Spanish ("es"), Portuguese ("pt"), Indonesian ("id"), Italian ("it"), Korean ("ko"), Russian ("ru"), Thai ("th"), Vietnamese ("vi"), Japanese ("ja"), Turkish ("tr"), Hindi ("hi"), Malay ("ms"), Dutch ("nl"), Swedish ("sv"), Danish ("da"), Finnish ("fi"), Polish ("pl"), Czech ("cs"), Filipino ("fil"), Persian ("fa"), Greek ("el"), Hungarian ("hu"), Macedonian ("mk"), Romanian ("ro").</p><ol start="2"><li>V1 version (legacy version)</li></ol><p>Standard language engine:</p><ul><li>"16k_zh_large": 16k large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition.</li><li>"16k_zh_en": latest 16k Chinese-English large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition, optimized for Chinese-English mixed scenarios.</li></ul><p>Advanced language engine:</p><ul><li>"zh-yue": Cantonese Chinese</li><li>"vi": Vietnamese</li><li>"ja": Japanese</li><li>"ko": Korean</li><li>"id": Indonesian</li><li>"th": Thai</li><li>"pt": Portuguese</li><li>"tr": Turkish</li><li>"ar": Arabic</li><li>"es": Spanish</li><li>"hi": Hindi</li><li>"fr": French</li><li>"ms": Malay</li><li>"fil": Filipino</li><li>"de": German</li><li>"it": Italian</li><li>"ru": Russian</li><li>"sv": Swedish</li><li>"da": Danish</li><li>"no": Norwegian</li></ul><p>Note:<br>If the language you need is not available, contact our technical support.</p>
     */
    public $Lang;

    /**
     * @var integer <p>The time when speech recognition vad ranges from 240 to 2000, with a default of 1000. The unit is ms. A smaller value enables faster sentence segmentation for speech recognition.<br>Example value: 1000</p>
     */
    public $VadSilenceTime;

    /**
     * @var string <p>Temporary term list: improves recognition accuracy by biasing the ASR engine toward specific terms.</p>
<ul>
<li>Single term format: term|weight. Each term must not exceed 30 characters (or 10 Chinese characters). Weight must be an integer from [1-11] or 100. Examples: Tencent Cloud|5, ASR|11.</li>
<li>List format and limits: separate multiple terms with commas. Up to 128 terms are supported. Example: Tencent Cloud|10,speech recognition|5,ASR|11.<br>
Note:<br>
When the term weight is set to 11, the term is treated as a high-priority super term. Use weight 11 only for terms that are critical and must be recognized reliably. Setting too many terms to weight 11 may reduce overall accuracy.<br>
When the term weight is set to 100, the term enables homophone replacement. For example, when the configuration is write|100, any recognized homophone of "write" (such as "right") is forcibly replaced with "write". Enable this feature only when needed, and reserve weight 100 for terms where homophone confusion is a real problem. Setting too many terms to weight 100 may reduce overall accuracy.<br>
Terms must not contain spaces. Invalid example: ASR Tencent Cloud<br>
Example value: voice assistant|10</li>
</ul>
     */
    public $HotWordList;

    /**
     * @var array <p>Fuzzy recognition is an advanced language engine feature. You can only specify advanced language engines other than zh-dialect and zh-yue. Note: You can specify up to 4 languages.</p>
     */
    public $AlternativeLanguage;

    /**
     * @var integer <p>The far-field voice suppression capacity of vad (without impacting asr recognition accuracy) ranges from [0, 3], defaulting to 0. Recommended setting is 2 for better far-field voice suppression capacity.</p>
     */
    public $VadLevel;

    /**
     * @var integer <p>Whether to filter profanity (currently only support basic language engine and standard language engine), range [0, 2], default value 0.<br>0: not filter profanity; 1: filter dirty words; 2: replace with " * ".</p>
     */
    public $FilterDirty;

    /**
     * @var integer <p>Whether to filter modal particles (currently only support basic language engine and standard language engine). Range: [0, 2]. Default value: 0.<br>0: Do not filter modal particles; 1: Partial filtering; 2: Strict filtering.</p>
     */
    public $FilterModal;

    /**
     * @var integer <p>Whether to filter periods at the end of sentences (currently only support basic language engine and standard language engine), range [0, 1], default value 0.<br>0: does not filter periods at the end of sentences; 1: filter out periods at the end of sentences.</p>
     */
    public $FilterPunc;

    /**
     * @param string $Lang <p>The model type used by the transcription service. Example value "bigmodel-zh". The languages supported by different package versions of speech to text are as follows:</p><ol><li>V2 version (recommended)</li></ol><p>"bigmodel-xxx": large model engine, recommended for use. "xxx" can be filled with specific languages, such as "bigmodel-zh". "xxx" can be filled with Chinese ("zh"), English ("en"), Cantonese ("yue"), Arabic ("ar"), German ("de"), French ("fr"), Spanish ("es"), Portuguese ("pt"), Indonesian ("id"), Italian ("it"), Korean ("ko"), Russian ("ru"), Thai ("th"), Vietnamese ("vi"), Japanese ("ja"), Turkish ("tr"), Hindi ("hi"), Malay ("ms"), Dutch ("nl"), Swedish ("sv"), Danish ("da"), Finnish ("fi"), Polish ("pl"), Czech ("cs"), Filipino ("fil"), Persian ("fa"), Greek ("el"), Hungarian ("hu"), Macedonian ("mk"), Romanian ("ro").</p><ol start="2"><li>V1 version (legacy version)</li></ol><p>Standard language engine:</p><ul><li>"16k_zh_large": 16k large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition.</li><li>"16k_zh_en": latest 16k Chinese-English large model engine, simultaneously supports Chinese, English, and multiple Chinese dialects with accent recognition, optimized for Chinese-English mixed scenarios.</li></ul><p>Advanced language engine:</p><ul><li>"zh-yue": Cantonese Chinese</li><li>"vi": Vietnamese</li><li>"ja": Japanese</li><li>"ko": Korean</li><li>"id": Indonesian</li><li>"th": Thai</li><li>"pt": Portuguese</li><li>"tr": Turkish</li><li>"ar": Arabic</li><li>"es": Spanish</li><li>"hi": Hindi</li><li>"fr": French</li><li>"ms": Malay</li><li>"fil": Filipino</li><li>"de": German</li><li>"it": Italian</li><li>"ru": Russian</li><li>"sv": Swedish</li><li>"da": Danish</li><li>"no": Norwegian</li></ul><p>Note:<br>If the language you need is not available, contact our technical support.</p>
     * @param integer $VadSilenceTime <p>The time when speech recognition vad ranges from 240 to 2000, with a default of 1000. The unit is ms. A smaller value enables faster sentence segmentation for speech recognition.<br>Example value: 1000</p>
     * @param string $HotWordList <p>Temporary term list: improves recognition accuracy by biasing the ASR engine toward specific terms.</p>
<ul>
<li>Single term format: term|weight. Each term must not exceed 30 characters (or 10 Chinese characters). Weight must be an integer from [1-11] or 100. Examples: Tencent Cloud|5, ASR|11.</li>
<li>List format and limits: separate multiple terms with commas. Up to 128 terms are supported. Example: Tencent Cloud|10,speech recognition|5,ASR|11.<br>
Note:<br>
When the term weight is set to 11, the term is treated as a high-priority super term. Use weight 11 only for terms that are critical and must be recognized reliably. Setting too many terms to weight 11 may reduce overall accuracy.<br>
When the term weight is set to 100, the term enables homophone replacement. For example, when the configuration is write|100, any recognized homophone of "write" (such as "right") is forcibly replaced with "write". Enable this feature only when needed, and reserve weight 100 for terms where homophone confusion is a real problem. Setting too many terms to weight 100 may reduce overall accuracy.<br>
Terms must not contain spaces. Invalid example: ASR Tencent Cloud<br>
Example value: voice assistant|10</li>
</ul>
     * @param array $AlternativeLanguage <p>Fuzzy recognition is an advanced language engine feature. You can only specify advanced language engines other than zh-dialect and zh-yue. Note: You can specify up to 4 languages.</p>
     * @param integer $VadLevel <p>The far-field voice suppression capacity of vad (without impacting asr recognition accuracy) ranges from [0, 3], defaulting to 0. Recommended setting is 2 for better far-field voice suppression capacity.</p>
     * @param integer $FilterDirty <p>Whether to filter profanity (currently only support basic language engine and standard language engine), range [0, 2], default value 0.<br>0: not filter profanity; 1: filter dirty words; 2: replace with " * ".</p>
     * @param integer $FilterModal <p>Whether to filter modal particles (currently only support basic language engine and standard language engine). Range: [0, 2]. Default value: 0.<br>0: Do not filter modal particles; 1: Partial filtering; 2: Strict filtering.</p>
     * @param integer $FilterPunc <p>Whether to filter periods at the end of sentences (currently only support basic language engine and standard language engine), range [0, 1], default value 0.<br>0: does not filter periods at the end of sentences; 1: filter out periods at the end of sentences.</p>
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
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("VadSilenceTime",$param) and $param["VadSilenceTime"] !== null) {
            $this->VadSilenceTime = $param["VadSilenceTime"];
        }

        if (array_key_exists("HotWordList",$param) and $param["HotWordList"] !== null) {
            $this->HotWordList = $param["HotWordList"];
        }

        if (array_key_exists("AlternativeLanguage",$param) and $param["AlternativeLanguage"] !== null) {
            $this->AlternativeLanguage = $param["AlternativeLanguage"];
        }

        if (array_key_exists("VadLevel",$param) and $param["VadLevel"] !== null) {
            $this->VadLevel = $param["VadLevel"];
        }

        if (array_key_exists("FilterDirty",$param) and $param["FilterDirty"] !== null) {
            $this->FilterDirty = $param["FilterDirty"];
        }

        if (array_key_exists("FilterModal",$param) and $param["FilterModal"] !== null) {
            $this->FilterModal = $param["FilterModal"];
        }

        if (array_key_exists("FilterPunc",$param) and $param["FilterPunc"] !== null) {
            $this->FilterPunc = $param["FilterPunc"];
        }
    }
}
