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
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to initiate speech translation recognition (when DstLanguage is not filled in or is an empty string, no translation is performed, and the billing item is the same as full speech recognition).</font>
 *
 * @method string getSwitch() Obtain <p>Voice full-text recognition task switch. Available values:</p><li>ON: Enable the intelligent voice full-text recognition task;</li><li>OFF: Disable the intelligent voice full-text recognition task.</li>
 * @method void setSwitch(string $Switch) Set <p>Voice full-text recognition task switch. Available values:</p><li>ON: Enable the intelligent voice full-text recognition task;</li><li>OFF: Disable the intelligent voice full-text recognition task.</li>
 * @method array getSubtitleFormats() Obtain <p>List of generated subtitle file formats. Leave empty or pass an empty array to indicate no subtitle file generation. Available values:</p><li>vtt: generate WebVTT subtitle file;</li><li>srt: generate SRT subtitle file.</li><font color="red">Note:</font>VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will add the generated subtitles to media assets.
 * @method void setSubtitleFormats(array $SubtitleFormats) Set <p>List of generated subtitle file formats. Leave empty or pass an empty array to indicate no subtitle file generation. Available values:</p><li>vtt: generate WebVTT subtitle file;</li><li>srt: generate SRT subtitle file.</li><font color="red">Note:</font>VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will add the generated subtitles to media assets.
 * @method string getSubtitleFormat() Obtain <p>Generated subtitle file format. Leave it empty or as an empty string to not generate subtitle files. Available values:</p><li>vtt: generate a WebVTT subtitle file;</li><li>srt: generate an SRT subtitle file.</li><font color="red">Note: This field is deprecated. We recommend using SubtitleFormats.</font>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set <p>Generated subtitle file format. Leave it empty or as an empty string to not generate subtitle files. Available values:</p><li>vtt: generate a WebVTT subtitle file;</li><li>srt: generate an SRT subtitle file.</li><font color="red">Note: This field is deprecated. We recommend using SubtitleFormats.</font>
 * @method string getSrcLanguage() Obtain <p>Media source language. Value range:</p><li>zh: Mandarin</li><li>en: English</li><li>ja: Japanese</li><li>zh-ca: Cantonese</li><font color="red">Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. It is recommended to fill in the language corresponding to the original media to improve recognition accuracy).
 * @method void setSrcLanguage(string $SrcLanguage) Set <p>Media source language. Value range:</p><li>zh: Mandarin</li><li>en: English</li><li>ja: Japanese</li><li>zh-ca: Cantonese</li><font color="red">Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. It is recommended to fill in the language corresponding to the original media to improve recognition accuracy).
 * @method string getSubtitleName() Obtain <p>Specify subtitle name, length limited to 64 characters. This value will be used for player display. If left blank, VOD will auto generate it.<br><font color="red">Note:</font> This field is valid only when SubtitleFormats includes vtt.</p>
 * @method void setSubtitleName(string $SubtitleName) Set <p>Specify subtitle name, length limited to 64 characters. This value will be used for player display. If left blank, VOD will auto generate it.<br><font color="red">Note:</font> This field is valid only when SubtitleFormats includes vtt.</p>
 */
class AsrFullTextConfigureInfo extends AbstractModel
{
    /**
     * @var string <p>Voice full-text recognition task switch. Available values:</p><li>ON: Enable the intelligent voice full-text recognition task;</li><li>OFF: Disable the intelligent voice full-text recognition task.</li>
     */
    public $Switch;

    /**
     * @var array <p>List of generated subtitle file formats. Leave empty or pass an empty array to indicate no subtitle file generation. Available values:</p><li>vtt: generate WebVTT subtitle file;</li><li>srt: generate SRT subtitle file.</li><font color="red">Note:</font>VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will add the generated subtitles to media assets.
     */
    public $SubtitleFormats;

    /**
     * @var string <p>Generated subtitle file format. Leave it empty or as an empty string to not generate subtitle files. Available values:</p><li>vtt: generate a WebVTT subtitle file;</li><li>srt: generate an SRT subtitle file.</li><font color="red">Note: This field is deprecated. We recommend using SubtitleFormats.</font>
     * @deprecated
     */
    public $SubtitleFormat;

    /**
     * @var string <p>Media source language. Value range:</p><li>zh: Mandarin</li><li>en: English</li><li>ja: Japanese</li><li>zh-ca: Cantonese</li><font color="red">Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. It is recommended to fill in the language corresponding to the original media to improve recognition accuracy).
     */
    public $SrcLanguage;

    /**
     * @var string <p>Specify subtitle name, length limited to 64 characters. This value will be used for player display. If left blank, VOD will auto generate it.<br><font color="red">Note:</font> This field is valid only when SubtitleFormats includes vtt.</p>
     */
    public $SubtitleName;

    /**
     * @param string $Switch <p>Voice full-text recognition task switch. Available values:</p><li>ON: Enable the intelligent voice full-text recognition task;</li><li>OFF: Disable the intelligent voice full-text recognition task.</li>
     * @param array $SubtitleFormats <p>List of generated subtitle file formats. Leave empty or pass an empty array to indicate no subtitle file generation. Available values:</p><li>vtt: generate WebVTT subtitle file;</li><li>srt: generate SRT subtitle file.</li><font color="red">Note:</font>VOD media asset information only supports adding vtt subtitles. When and only when SubtitleFormats includes vtt, VOD will add the generated subtitles to media assets.
     * @param string $SubtitleFormat <p>Generated subtitle file format. Leave it empty or as an empty string to not generate subtitle files. Available values:</p><li>vtt: generate a WebVTT subtitle file;</li><li>srt: generate an SRT subtitle file.</li><font color="red">Note: This field is deprecated. We recommend using SubtitleFormats.</font>
     * @param string $SrcLanguage <p>Media source language. Value range:</p><li>zh: Mandarin</li><li>en: English</li><li>ja: Japanese</li><li>zh-ca: Cantonese</li><font color="red">Note:</font> Fill in an empty string or leave the parameter blank for automatic recognition (effectiveness difficult to guarantee. It is recommended to fill in the language corresponding to the original media to improve recognition accuracy).
     * @param string $SubtitleName <p>Specify subtitle name, length limited to 64 characters. This value will be used for player display. If left blank, VOD will auto generate it.<br><font color="red">Note:</font> This field is valid only when SubtitleFormats includes vtt.</p>
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
