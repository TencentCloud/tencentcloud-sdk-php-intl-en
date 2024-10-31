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
 * Control parameter of full speech recognition task.
 *
 * @method string getSwitch() Obtain Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
 * @method void setSwitch(string $Switch) Set Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
 * @method SubtitleFormatsOperation getSubtitleFormatsOperation() Obtain The modification information of the subtitle format list.
 * @method void setSubtitleFormatsOperation(SubtitleFormatsOperation $SubtitleFormatsOperation) Set The modification information of the subtitle format list.
 * @method string getSubtitleFormat() Obtain The format of the subtitle file generated. <font color='red'>If you pass in an empty string</font>, no subtitle files will be generated. Valid values:
<li>vtt</li>
<li>srt</li>
<font color='red'>Note: This parameter has been deprecated. Please use `SubtitleFormatsOperation` instead.</font>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set The format of the subtitle file generated. <font color='red'>If you pass in an empty string</font>, no subtitle files will be generated. Valid values:
<li>vtt</li>
<li>srt</li>
<font color='red'>Note: This parameter has been deprecated. Please use `SubtitleFormatsOperation` instead.</font>
 * @method string getSrcLanguage() Obtain Media source language value range: <li>zh: Mandarin </li> <li>en: English</li> <li>ja: Japanese </li> <li>zh-ca: Cantonese</li>
 * @method void setSrcLanguage(string $SrcLanguage) Set Media source language value range: <li>zh: Mandarin </li> <li>en: English</li> <li>ja: Japanese </li> <li>zh-ca: Cantonese</li>
 * @method string getSubtitleName() Obtain Specify subtitle name, length limit: 64 characters. This value will be used for player display.
 * @method void setSubtitleName(string $SubtitleName) Set Specify subtitle name, length limit: 64 characters. This value will be used for player display.
 */
class AsrFullTextConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
     */
    public $Switch;

    /**
     * @var SubtitleFormatsOperation The modification information of the subtitle format list.
     */
    public $SubtitleFormatsOperation;

    /**
     * @var string The format of the subtitle file generated. <font color='red'>If you pass in an empty string</font>, no subtitle files will be generated. Valid values:
<li>vtt</li>
<li>srt</li>
<font color='red'>Note: This parameter has been deprecated. Please use `SubtitleFormatsOperation` instead.</font>
     */
    public $SubtitleFormat;

    /**
     * @var string Media source language value range: <li>zh: Mandarin </li> <li>en: English</li> <li>ja: Japanese </li> <li>zh-ca: Cantonese</li>
     */
    public $SrcLanguage;

    /**
     * @var string Specify subtitle name, length limit: 64 characters. This value will be used for player display.
     */
    public $SubtitleName;

    /**
     * @param string $Switch Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
     * @param SubtitleFormatsOperation $SubtitleFormatsOperation The modification information of the subtitle format list.
     * @param string $SubtitleFormat The format of the subtitle file generated. <font color='red'>If you pass in an empty string</font>, no subtitle files will be generated. Valid values:
<li>vtt</li>
<li>srt</li>
<font color='red'>Note: This parameter has been deprecated. Please use `SubtitleFormatsOperation` instead.</font>
     * @param string $SrcLanguage Media source language value range: <li>zh: Mandarin </li> <li>en: English</li> <li>ja: Japanese </li> <li>zh-ca: Cantonese</li>
     * @param string $SubtitleName Specify subtitle name, length limit: 64 characters. This value will be used for player display.
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
