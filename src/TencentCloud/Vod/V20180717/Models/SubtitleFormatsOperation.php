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
 * Subtitle format list operations.
 *
 * @method string getType() Obtain Operation type. Value range:
<li>add: add the format list specified by Formats;</li>
<li>delete: delete the format list specified by Formats;<l/i>
<li>reset: Reset the configured format list to the format list specified by Formats.</li>
 * @method void setType(string $Type) Set Operation type. Value range:
<li>add: add the format list specified by Formats;</li>
<li>delete: delete the format list specified by Formats;<l/i>
<li>reset: Reset the configured format list to the format list specified by Formats.</li>
 * @method array getFormats() Obtain Subtitle format list. Value range:
<li>vtt: Generate a WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle file.</li>
 * @method void setFormats(array $Formats) Set Subtitle format list. Value range:
<li>vtt: Generate a WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle file.</li>
 */
class SubtitleFormatsOperation extends AbstractModel
{
    /**
     * @var string Operation type. Value range:
<li>add: add the format list specified by Formats;</li>
<li>delete: delete the format list specified by Formats;<l/i>
<li>reset: Reset the configured format list to the format list specified by Formats.</li>
     */
    public $Type;

    /**
     * @var array Subtitle format list. Value range:
<li>vtt: Generate a WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle file.</li>
     */
    public $Formats;

    /**
     * @param string $Type Operation type. Value range:
<li>add: add the format list specified by Formats;</li>
<li>delete: delete the format list specified by Formats;<l/i>
<li>reset: Reset the configured format list to the format list specified by Formats.</li>
     * @param array $Formats Subtitle format list. Value range:
<li>vtt: Generate a WebVTT subtitle file;</li>
<li>srt: generate SRT subtitle file.</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }
    }
}
