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
 * Voice Translation Recognition Control Parameter
 *
 * @method string getSwitch() Obtain Voice translation recognition task switch. Available values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li><font color=red>Note:</font> The speech translation recognition task itself will return ASR full text recognition results. To avoid duplicate charges, it is forbidden to enable both speech translation recognition and ASR full text recognition feature items simultaneously.</li>
 * @method void setSwitch(string $Switch) Set Voice translation recognition task switch. Available values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li><font color=red>Note:</font> The speech translation recognition task itself will return ASR full text recognition results. To avoid duplicate charges, it is forbidden to enable both speech translation recognition and ASR full text recognition feature items simultaneously.</li>
 * @method string getSrcLanguage() Obtain Media source language. Valid values:
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
 * @method void setSrcLanguage(string $SrcLanguage) Set Media source language. Valid values:
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
 * @method string getDstLanguage() Obtain Target language.
If this parameter is filled in with an empty string, it means that only full speech recognition is performed without translation (the billing item is the same as AsrFullTextConfigure full speech recognition).
Otherwise, the parameter value range is divided into the following cases:
When SrcLanguage is zh (Chinese), the value ranges from...to...
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay.</li>
When SrcLanguage is en (English), the value ranges from...to...
<li>zh: Chinese.</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay;</li>
<li>ar: Arabic;</li>
<li>hi: Hindi.</li>
When SrcLanguage is ja (Japanese), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ko: Korean.</li>
When SrcLanguage is ko (Korean), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese.</li>
When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English.</li>
When SrcLanguage is pt (Portuguese), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian.</li>
When SrcLanguage is tr (Turkish), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is es (Spanish), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is ar (Arabic) or hi (Hindi), the value ranges from...to...
<li>en: English.</li>
When SrcLanguage is fr (French), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
 * @method void setDstLanguage(string $DstLanguage) Set Target language.
If this parameter is filled in with an empty string, it means that only full speech recognition is performed without translation (the billing item is the same as AsrFullTextConfigure full speech recognition).
Otherwise, the parameter value range is divided into the following cases:
When SrcLanguage is zh (Chinese), the value ranges from...to...
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay.</li>
When SrcLanguage is en (English), the value ranges from...to...
<li>zh: Chinese.</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay;</li>
<li>ar: Arabic;</li>
<li>hi: Hindi.</li>
When SrcLanguage is ja (Japanese), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ko: Korean.</li>
When SrcLanguage is ko (Korean), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese.</li>
When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English.</li>
When SrcLanguage is pt (Portuguese), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian.</li>
When SrcLanguage is tr (Turkish), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is es (Spanish), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is ar (Arabic) or hi (Hindi), the value ranges from...to...
<li>en: English.</li>
When SrcLanguage is fr (French), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
 * @method SubtitleFormatsOperation getSubtitleFormatsOperation() Obtain Subtitle format list operation information.
 * @method void setSubtitleFormatsOperation(SubtitleFormatsOperation $SubtitleFormatsOperation) Set Subtitle format list operation information.
 * @method string getSubtitleName() Obtain Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
 * @method void setSubtitleName(string $SubtitleName) Set Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
 */
class AsrTranslateConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Voice translation recognition task switch. Available values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li><font color=red>Note:</font> The speech translation recognition task itself will return ASR full text recognition results. To avoid duplicate charges, it is forbidden to enable both speech translation recognition and ASR full text recognition feature items simultaneously.</li>
     */
    public $Switch;

    /**
     * @var string Media source language. Valid values:
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
     */
    public $SrcLanguage;

    /**
     * @var string Target language.
If this parameter is filled in with an empty string, it means that only full speech recognition is performed without translation (the billing item is the same as AsrFullTextConfigure full speech recognition).
Otherwise, the parameter value range is divided into the following cases:
When SrcLanguage is zh (Chinese), the value ranges from...to...
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay.</li>
When SrcLanguage is en (English), the value ranges from...to...
<li>zh: Chinese.</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay;</li>
<li>ar: Arabic;</li>
<li>hi: Hindi.</li>
When SrcLanguage is ja (Japanese), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ko: Korean.</li>
When SrcLanguage is ko (Korean), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese.</li>
When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English.</li>
When SrcLanguage is pt (Portuguese), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian.</li>
When SrcLanguage is tr (Turkish), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is es (Spanish), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is ar (Arabic) or hi (Hindi), the value ranges from...to...
<li>en: English.</li>
When SrcLanguage is fr (French), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
     */
    public $DstLanguage;

    /**
     * @var SubtitleFormatsOperation Subtitle format list operation information.
     */
    public $SubtitleFormatsOperation;

    /**
     * @var string Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
     */
    public $SubtitleName;

    /**
     * @param string $Switch Voice translation recognition task switch. Available values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li><font color=red>Note:</font> The speech translation recognition task itself will return ASR full text recognition results. To avoid duplicate charges, it is forbidden to enable both speech translation recognition and ASR full text recognition feature items simultaneously.</li>
     * @param string $SrcLanguage Media source language. Valid values:
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
     * @param string $DstLanguage Target language.
If this parameter is filled in with an empty string, it means that only full speech recognition is performed without translation (the billing item is the same as AsrFullTextConfigure full speech recognition).
Otherwise, the parameter value range is divided into the following cases:
When SrcLanguage is zh (Chinese), the value ranges from...to...
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay.</li>
When SrcLanguage is en (English), the value ranges from...to...
<li>zh: Chinese.</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese;</li>
<li>vi: Vietnamese;</li>
<li>id: Indonesian;</li>
<li>th: Thai;</li>
<li>ms: Malay;</li>
<li>ar: Arabic;</li>
<li>hi: Hindi.</li>
When SrcLanguage is ja (Japanese), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ko: Korean.</li>
When SrcLanguage is ko (Korean), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>ja: Japanese.</li>
When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English.</li>
When SrcLanguage is pt (Portuguese), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian.</li>
When SrcLanguage is tr (Turkish), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is es (Spanish), the parameter value range is
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>fr: French;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
When SrcLanguage is ar (Arabic) or hi (Hindi), the value ranges from...to...
<li>en: English.</li>
When SrcLanguage is fr (French), the value ranges from...to...
<li>zh: Chinese.</li>
<li>en: English;</li>
<li>es: Spanish;</li>
<li>it: Italian.</li>
<li>de: German;</li>
<li>tr: Turkish;</li>
<li>ru: Russian;</li>
<li>pt: Portuguese.</li>
     * @param SubtitleFormatsOperation $SubtitleFormatsOperation Subtitle format list operation information.
     * @param string $SubtitleName Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("SubtitleFormatsOperation",$param) and $param["SubtitleFormatsOperation"] !== null) {
            $this->SubtitleFormatsOperation = new SubtitleFormatsOperation();
            $this->SubtitleFormatsOperation->deserialize($param["SubtitleFormatsOperation"]);
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
