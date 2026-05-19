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
 * Control parameter of full speech recognition task.
 *
 * @method string getSwitch() Obtain Voice full-text recognition task switch. Available values:
<li>ON: enable intelligent voice full-text recognition task.</li>
<li>OFF: disable intelligent voice full-text recognition task</li>
 * @method void setSwitch(string $Switch) Set Voice full-text recognition task switch. Available values:
<li>ON: enable intelligent voice full-text recognition task.</li>
<li>OFF: disable intelligent voice full-text recognition task</li>
 * @method SubtitleFormatsOperation getSubtitleFormatsOperation() Obtain Subtitle format list operation information.
 * @method void setSubtitleFormatsOperation(SubtitleFormatsOperation $SubtitleFormatsOperation) Set Subtitle format list operation information.
 * @method string getSubtitleFormat() Obtain Generated subtitle file format. <font color='red'>Fill in an empty string</font> to indicate no subtitle file generation. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormatsOperation.</font>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Generated subtitle file format. <font color='red'>Fill in an empty string</font> to indicate no subtitle file generation. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormatsOperation.</font>
 * @method string getSrcLanguage() Obtain Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
 * @method void setSrcLanguage(string $SrcLanguage) Set Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
 * @method string getSubtitleName() Obtain Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
 * @method void setSubtitleName(string $SubtitleName) Set Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
 */
class AsrFullTextConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Voice full-text recognition task switch. Available values:
<li>ON: enable intelligent voice full-text recognition task.</li>
<li>OFF: disable intelligent voice full-text recognition task</li>
     */
    public $Switch;

    /**
     * @var SubtitleFormatsOperation Subtitle format list operation information.
     */
    public $SubtitleFormatsOperation;

    /**
     * @var string Generated subtitle file format. <font color='red'>Fill in an empty string</font> to indicate no subtitle file generation. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormatsOperation.</font>
     * @deprecated
     */
    public $SubtitleFormat;

    /**
     * @var string Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
     */
    public $SrcLanguage;

    /**
     * @var string Specify subtitle name. Length limit: 64 characters. This value will be used for player display.
     */
    public $SubtitleName;

    /**
     * @param string $Switch Voice full-text recognition task switch. Available values:
<li>ON: enable intelligent voice full-text recognition task.</li>
<li>OFF: disable intelligent voice full-text recognition task</li>
     * @param SubtitleFormatsOperation $SubtitleFormatsOperation Subtitle format list operation information.
     * @param string $SubtitleFormat Generated subtitle file format. <font color='red'>Fill in an empty string</font> to indicate no subtitle file generation. Available values:
<li>vtt: Generate a WebVTT subtitle file.</li>
<li>srt: Generate SRT subtitle file.</li>
<font color='red'>Note: This field is deprecated. Recommend using SubtitleFormatsOperation.</font>
     * @param string $SrcLanguage Media source language. Valid values:
<li>zh: Mandarin;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>zh-ca: Cantonese.</li>
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

        if (array_key_exists("SubtitleFormatsOperation",$param) and $param["SubtitleFormatsOperation"] !== null) {
            $this->SubtitleFormatsOperation = new SubtitleFormatsOperation();
            $this->SubtitleFormatsOperation->deserialize($param["SubtitleFormatsOperation"]);
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
