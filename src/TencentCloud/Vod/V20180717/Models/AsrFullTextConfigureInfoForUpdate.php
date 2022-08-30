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
     * @param string $Switch Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
     * @param SubtitleFormatsOperation $SubtitleFormatsOperation The modification information of the subtitle format list.
     * @param string $SubtitleFormat The format of the subtitle file generated. <font color='red'>If you pass in an empty string</font>, no subtitle files will be generated. Valid values:
<li>vtt</li>
<li>srt</li>
<font color='red'>Note: This parameter has been deprecated. Please use `SubtitleFormatsOperation` instead.</font>
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
    }
}
