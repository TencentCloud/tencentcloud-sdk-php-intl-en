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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Control parameter of a full speech recognition task.
 *
 * @method string getSwitch() Obtain Switch of a full speech recognition task. Valid values:
<li>ON: Enables an intelligent full speech recognition task;</li>
<li>OFF: Disables an intelligent full speech recognition task.</li>
 * @method void setSwitch(string $Switch) Set Switch of a full speech recognition task. Valid values:
<li>ON: Enables an intelligent full speech recognition task;</li>
<li>OFF: Disables an intelligent full speech recognition task.</li>
 * @method string getSourceLanguage() Obtain Video source language.
 * @method void setSourceLanguage(string $SourceLanguage) Set Video source language.
 * @method string getDestinationLanguage() Obtain Translated target language.
 * @method void setDestinationLanguage(string $DestinationLanguage) Set Translated target language.
 * @method string getSubtitleFormat() Obtain Generated subtitle file format. Leaving it as an empty string means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Generated subtitle file format. Leaving it as an empty string means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>

Note: This field may return null, indicating that no valid values can be obtained.
 */
class TranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string Switch of a full speech recognition task. Valid values:
<li>ON: Enables an intelligent full speech recognition task;</li>
<li>OFF: Disables an intelligent full speech recognition task.</li>
     */
    public $Switch;

    /**
     * @var string Video source language.
     */
    public $SourceLanguage;

    /**
     * @var string Translated target language.
     */
    public $DestinationLanguage;

    /**
     * @var string Generated subtitle file format. Leaving it as an empty string means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitleFormat;

    /**
     * @param string $Switch Switch of a full speech recognition task. Valid values:
<li>ON: Enables an intelligent full speech recognition task;</li>
<li>OFF: Disables an intelligent full speech recognition task.</li>
     * @param string $SourceLanguage Video source language.
     * @param string $DestinationLanguage Translated target language.
     * @param string $SubtitleFormat Generated subtitle file format. Leaving it as an empty string means no subtitle file will be generated. Valid value:
<li>vtt: Generate a WebVTT subtitle file.</li>

Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("DestinationLanguage",$param) and $param["DestinationLanguage"] !== null) {
            $this->DestinationLanguage = $param["DestinationLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }
    }
}
