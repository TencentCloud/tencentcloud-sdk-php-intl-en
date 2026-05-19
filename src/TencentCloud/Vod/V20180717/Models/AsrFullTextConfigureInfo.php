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
 * Control parameter of the speech full-text recognition task.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger speech translation recognition (when DstLanguage is empty or a fill-in string, no translation is performed, and the billing item matches full text recognition).</font>
 *
 * @method string getSwitch() Obtain Voice full-text recognition task switch. Available values:
<li>ON: Enable intelligent voice full-text recognition task.</li>
<li>OFF: Disable the intelligent voice full-text recognition task.</li>
 * @method void setSwitch(string $Switch) Set Voice full-text recognition task switch. Available values:
<li>ON: Enable intelligent voice full-text recognition task.</li>
<li>OFF: Disable the intelligent voice full-text recognition task.</li>
 * @method array getSubtitleFormats() Obtain Generated subtitle file format list. Leaving it as an empty array means no subtitle file will be generated. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li><font color=red>Note:</font> VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will be generated subtitles add to media assets.
 * @method void setSubtitleFormats(array $SubtitleFormats) Set Generated subtitle file format list. Leaving it as an empty array means no subtitle file will be generated. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li><font color=red>Note:</font> VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will be generated subtitles add to media assets.
 * @method string getSubtitleFormat() Obtain Generated subtitle file format. Leaving it as an empty string or not filling it means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormats.</font>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Generated subtitle file format. Leaving it as an empty string or not filling it means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormats.</font>
 * @method string getSrcLanguage() Obtain Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
<font color=red>Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. Recommended to fill in the language corresponding to the original media to improve recognition accuracy).
 * @method void setSrcLanguage(string $SrcLanguage) Set Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
<font color=red>Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. Recommended to fill in the language corresponding to the original media to improve recognition accuracy).
 * @method string getSubtitleName() Obtain Specify subtitle name. Length limit: 64 characters. This value will be used for player display. If left blank, VOD will auto generate.
<font color=red>Note:</font> This field is valid only when SubtitleFormats contains vtt.
 * @method void setSubtitleName(string $SubtitleName) Set Specify subtitle name. Length limit: 64 characters. This value will be used for player display. If left blank, VOD will auto generate.
<font color=red>Note:</font> This field is valid only when SubtitleFormats contains vtt.
 */
class AsrFullTextConfigureInfo extends AbstractModel
{
    /**
     * @var string Voice full-text recognition task switch. Available values:
<li>ON: Enable intelligent voice full-text recognition task.</li>
<li>OFF: Disable the intelligent voice full-text recognition task.</li>
     */
    public $Switch;

    /**
     * @var array Generated subtitle file format list. Leaving it as an empty array means no subtitle file will be generated. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li><font color=red>Note:</font> VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will be generated subtitles add to media assets.
     */
    public $SubtitleFormats;

    /**
     * @var string Generated subtitle file format. Leaving it as an empty string or not filling it means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormats.</font>
     * @deprecated
     */
    public $SubtitleFormat;

    /**
     * @var string Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
<font color=red>Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. Recommended to fill in the language corresponding to the original media to improve recognition accuracy).
     */
    public $SrcLanguage;

    /**
     * @var string Specify subtitle name. Length limit: 64 characters. This value will be used for player display. If left blank, VOD will auto generate.
<font color=red>Note:</font> This field is valid only when SubtitleFormats contains vtt.
     */
    public $SubtitleName;

    /**
     * @param string $Switch Voice full-text recognition task switch. Available values:
<li>ON: Enable intelligent voice full-text recognition task.</li>
<li>OFF: Disable the intelligent voice full-text recognition task.</li>
     * @param array $SubtitleFormats Generated subtitle file format list. Leaving it as an empty array means no subtitle file will be generated. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li><font color=red>Note:</font> VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will be generated subtitles add to media assets.
     * @param string $SubtitleFormat Generated subtitle file format. Leaving it as an empty string or not filling it means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormats.</font>
     * @param string $SrcLanguage Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
<font color=red>Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. Recommended to fill in the language corresponding to the original media to improve recognition accuracy).
     * @param string $SubtitleName Specify subtitle name. Length limit: 64 characters. This value will be used for player display. If left blank, VOD will auto generate.
<font color=red>Note:</font> This field is valid only when SubtitleFormats contains vtt.
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

        if (array_key_exists("SubtitleFormats",$param) and $param["SubtitleFormats"] !== null) {
            $this->SubtitleFormats = $param["SubtitleFormats"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
