<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Control parameters of voice translation recognition task.
 *
 * @method string getSwitch() Obtain Voice translation task switch, optional values:
<li>ON: switch on;</li>
<li>OFF: switch off.</li><font color=red>Note:</font> The task results of voice translation include asr full text recognition result. To avoid duplicate charges, simultaneous activation of voice translation and asr full text recognition features is prohibited.

 * @method void setSwitch(string $Switch) Set Voice translation task switch, optional values:
<li>ON: switch on;</li>
<li>OFF: switch off.</li><font color=red>Note:</font> The task results of voice translation include asr full text recognition result. To avoid duplicate charges, simultaneous activation of voice translation and asr full text recognition features is prohibited.

 * @method string getSrcLanguage() Obtain Media source language. When the Switch is ON, this parameter is mandatory. Value range:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`vi`: Vietnamese;</li>
<li>`ms`: Malay;</li>
<li>`th`: Thai;</li>
<li>`pt`: Portuguese;</li>
<li>`tr`: Turkish;</li>
<li>`ar`: Arabic;</li>
<li>`es`: Spanish;</li>
<li>`hi`: Hindi;</li>
<li>`fr`: French.</li>
 * @method void setSrcLanguage(string $SrcLanguage) Set Media source language. When the Switch is ON, this parameter is mandatory. Value range:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`vi`: Vietnamese;</li>
<li>`ms`: Malay;</li>
<li>`th`: Thai;</li>
<li>`pt`: Portuguese;</li>
<li>`tr`: Turkish;</li>
<li>`ar`: Arabic;</li>
<li>`es`: Spanish;</li>
<li>`hi`: Hindi;</li>
<li>`fr`: French.</li>
 * @method string getDstLanguage() Obtain Translation target language. When the Switch is ON, this parameter is mandatory.
When SrcLanguage is zh (Chinese), the value range:
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay.</li>

When SrcLanguage is en (English), the value range:
<li>`zh`: Chinese;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay;</li>
<li>`ar`: Arabic;</li>
<li>`hi`: Hindi.</li>

When SrcLanguage is ja (Japanese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ko`: Korean.</li>

When SrcLanguage is ko (Korean), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese.</li>

When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English.</li>

When SrcLanguage is pt (Portuguese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian.</li>

When SrcLanguage is tr (Turkish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is es (Spanish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is ar (Arabic) or hi (Hindi), the value range is:
<li>`en`: English.</li>

When SrcLanguage is fr (French), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>
 * @method void setDstLanguage(string $DstLanguage) Set Translation target language. When the Switch is ON, this parameter is mandatory.
When SrcLanguage is zh (Chinese), the value range:
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay.</li>

When SrcLanguage is en (English), the value range:
<li>`zh`: Chinese;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay;</li>
<li>`ar`: Arabic;</li>
<li>`hi`: Hindi.</li>

When SrcLanguage is ja (Japanese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ko`: Korean.</li>

When SrcLanguage is ko (Korean), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese.</li>

When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English.</li>

When SrcLanguage is pt (Portuguese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian.</li>

When SrcLanguage is tr (Turkish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is es (Spanish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is ar (Arabic) or hi (Hindi), the value range is:
<li>`en`: English.</li>

When SrcLanguage is fr (French), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>
 * @method array getSubtitleFormats() Obtain Generated subtitle file format list. If not filled or an empty array is provided, no subtitle file will be generated. Optional values:
<li>vtt: generate WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle files.</li><font color=red>Note:</font> VOD media assets only support adding vtt subtitles. Therefore, VOD will add generated subtitles to media assets only when SubtitleFormats includes vtt.
 * @method void setSubtitleFormats(array $SubtitleFormats) Set Generated subtitle file format list. If not filled or an empty array is provided, no subtitle file will be generated. Optional values:
<li>vtt: generate WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle files.</li><font color=red>Note:</font> VOD media assets only support adding vtt subtitles. Therefore, VOD will add generated subtitles to media assets only when SubtitleFormats includes vtt.
 * @method string getSubtitleName() Obtain Specify subtitle name, length limit: 64 characters. This value will be displayed by the player. If not provided, VOD will automatically generate it.
 * @method void setSubtitleName(string $SubtitleName) Set Specify subtitle name, length limit: 64 characters. This value will be displayed by the player. If not provided, VOD will automatically generate it.
 */
class AsrTranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string Voice translation task switch, optional values:
<li>ON: switch on;</li>
<li>OFF: switch off.</li><font color=red>Note:</font> The task results of voice translation include asr full text recognition result. To avoid duplicate charges, simultaneous activation of voice translation and asr full text recognition features is prohibited.

     */
    public $Switch;

    /**
     * @var string Media source language. When the Switch is ON, this parameter is mandatory. Value range:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`vi`: Vietnamese;</li>
<li>`ms`: Malay;</li>
<li>`th`: Thai;</li>
<li>`pt`: Portuguese;</li>
<li>`tr`: Turkish;</li>
<li>`ar`: Arabic;</li>
<li>`es`: Spanish;</li>
<li>`hi`: Hindi;</li>
<li>`fr`: French.</li>
     */
    public $SrcLanguage;

    /**
     * @var string Translation target language. When the Switch is ON, this parameter is mandatory.
When SrcLanguage is zh (Chinese), the value range:
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay.</li>

When SrcLanguage is en (English), the value range:
<li>`zh`: Chinese;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay;</li>
<li>`ar`: Arabic;</li>
<li>`hi`: Hindi.</li>

When SrcLanguage is ja (Japanese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ko`: Korean.</li>

When SrcLanguage is ko (Korean), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese.</li>

When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English.</li>

When SrcLanguage is pt (Portuguese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian.</li>

When SrcLanguage is tr (Turkish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is es (Spanish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is ar (Arabic) or hi (Hindi), the value range is:
<li>`en`: English.</li>

When SrcLanguage is fr (French), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>
     */
    public $DstLanguage;

    /**
     * @var array Generated subtitle file format list. If not filled or an empty array is provided, no subtitle file will be generated. Optional values:
<li>vtt: generate WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle files.</li><font color=red>Note:</font> VOD media assets only support adding vtt subtitles. Therefore, VOD will add generated subtitles to media assets only when SubtitleFormats includes vtt.
     */
    public $SubtitleFormats;

    /**
     * @var string Specify subtitle name, length limit: 64 characters. This value will be displayed by the player. If not provided, VOD will automatically generate it.
     */
    public $SubtitleName;

    /**
     * @param string $Switch Voice translation task switch, optional values:
<li>ON: switch on;</li>
<li>OFF: switch off.</li><font color=red>Note:</font> The task results of voice translation include asr full text recognition result. To avoid duplicate charges, simultaneous activation of voice translation and asr full text recognition features is prohibited.

     * @param string $SrcLanguage Media source language. When the Switch is ON, this parameter is mandatory. Value range:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`vi`: Vietnamese;</li>
<li>`ms`: Malay;</li>
<li>`th`: Thai;</li>
<li>`pt`: Portuguese;</li>
<li>`tr`: Turkish;</li>
<li>`ar`: Arabic;</li>
<li>`es`: Spanish;</li>
<li>`hi`: Hindi;</li>
<li>`fr`: French.</li>
     * @param string $DstLanguage Translation target language. When the Switch is ON, this parameter is mandatory.
When SrcLanguage is zh (Chinese), the value range:
<li>`en`: English;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay.</li>

When SrcLanguage is en (English), the value range:
<li>`zh`: Chinese;</li>
<li>`ja`: Japanese;</li>
<li>`ko`: Korean;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese;</li>
<li>`vi`: Vietnamese;</li>
<li>`id`: Indonesian;</li>
<li>`th`: Thai;</li>
<li>`ms`: Malay;</li>
<li>`ar`: Arabic;</li>
<li>`hi`: Hindi.</li>

When SrcLanguage is ja (Japanese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ko`: Korean.</li>

When SrcLanguage is ko (Korean), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`ja`: Japanese.</li>

When SrcLanguage is vi (Vietnamese), ms (Malay), or th (Thai), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English.</li>

When SrcLanguage is pt (Portuguese), the valid options are:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian.</li>

When SrcLanguage is tr (Turkish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is es (Spanish), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`fr`: French;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>

When SrcLanguage is ar (Arabic) or hi (Hindi), the value range is:
<li>`en`: English.</li>

When SrcLanguage is fr (French), the value range is:
<li>`zh`: Chinese;</li>
<li>`en`: English;</li>
<li>`es`: Spanish;</li>
<li>`it`: Italian;</li>
<li>`de`: German;</li>
<li>`tr`: Turkish;</li>
<li>`ru`: Russian;</li>
<li>`pt`: Portuguese.</li>
     * @param array $SubtitleFormats Generated subtitle file format list. If not filled or an empty array is provided, no subtitle file will be generated. Optional values:
<li>vtt: generate WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle files.</li><font color=red>Note:</font> VOD media assets only support adding vtt subtitles. Therefore, VOD will add generated subtitles to media assets only when SubtitleFormats includes vtt.
     * @param string $SubtitleName Specify subtitle name, length limit: 64 characters. This value will be displayed by the player. If not provided, VOD will automatically generate it.
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

        if (array_key_exists("SubtitleFormats",$param) and $param["SubtitleFormats"] !== null) {
            $this->SubtitleFormats = $param["SubtitleFormats"];
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
