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
 * @method string getSubtitleFormat() Obtain Format of generated subtitles file. If this parameter is left empty or a blank string is entered, no subtitles files will be generated. Valid value:
<li>vtt: generates a WebVTT subtitles file.</li>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Format of generated subtitles file. If this parameter is left empty or a blank string is entered, no subtitles files will be generated. Valid value:
<li>vtt: generates a WebVTT subtitles file.</li>
 */
class AsrFullTextConfigureInfo extends AbstractModel
{
    /**
     * @var string Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
     */
    public $Switch;

    /**
     * @var string Format of generated subtitles file. If this parameter is left empty or a blank string is entered, no subtitles files will be generated. Valid value:
<li>vtt: generates a WebVTT subtitles file.</li>
     */
    public $SubtitleFormat;

    /**
     * @param string $Switch Switch of full speech recognition task. Valid values:
<li>ON: enables intelligent full speech recognition task;</li>
<li>OFF: disables intelligent full speech recognition task.</li>
     * @param string $SubtitleFormat Format of generated subtitles file. If this parameter is left empty or a blank string is entered, no subtitles files will be generated. Valid value:
<li>vtt: generates a WebVTT subtitles file.</li>
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

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }
    }
}
