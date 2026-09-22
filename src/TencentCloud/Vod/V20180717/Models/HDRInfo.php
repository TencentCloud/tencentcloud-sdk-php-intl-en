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
 * High dynamic range type control parameter.
 *
 * @method string getSwitch() Obtain HDR type control switch. Available values:
<li>ON: enable high dynamic range type conversion;</li>
<li>OFF: Disable high dynamic range type switch.</li>
 * @method void setSwitch(string $Switch) Set HDR type control switch. Available values:
<li>ON: enable high dynamic range type conversion;</li>
<li>OFF: Disable high dynamic range type switch.</li>
 * @method string getType() Obtain High dynamic range type. Valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>

Note:
<li> Valid only when the high dynamic range type control switch is ON;</li>
<li>Valid when the video stream encoding format Codec of the video output parameter is specified as libx264 or libx265 in the target parameter.</li>
 * @method void setType(string $Type) Set High dynamic range type. Valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>

Note:
<li> Valid only when the high dynamic range type control switch is ON;</li>
<li>Valid when the video stream encoding format Codec of the video output parameter is specified as libx264 or libx265 in the target parameter.</li>
 */
class HDRInfo extends AbstractModel
{
    /**
     * @var string HDR type control switch. Available values:
<li>ON: enable high dynamic range type conversion;</li>
<li>OFF: Disable high dynamic range type switch.</li>
     */
    public $Switch;

    /**
     * @var string High dynamic range type. Valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>

Note:
<li> Valid only when the high dynamic range type control switch is ON;</li>
<li>Valid when the video stream encoding format Codec of the video output parameter is specified as libx264 or libx265 in the target parameter.</li>
     */
    public $Type;

    /**
     * @param string $Switch HDR type control switch. Available values:
<li>ON: enable high dynamic range type conversion;</li>
<li>OFF: Disable high dynamic range type switch.</li>
     * @param string $Type High dynamic range type. Valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>

Note:
<li> Valid only when the high dynamic range type control switch is ON;</li>
<li>Valid when the video stream encoding format Codec of the video output parameter is specified as libx264 or libx265 in the target parameter.</li>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
