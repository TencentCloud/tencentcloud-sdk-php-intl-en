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
 * Intelligent frame interpolation control parameters
 *
 * @method string getSwitch() Obtain Intelligent frame interpolation control switch. Valid values:
<li>ON: enable intelligent frame interpolation;</li>
<li>OFF: disables intelligent frame interpolation.</li>
 * @method void setSwitch(string $Switch) Set Intelligent frame interpolation control switch. Valid values:
<li>ON: enable intelligent frame interpolation;</li>
<li>OFF: disables intelligent frame interpolation.</li>
 * @method integer getFps() Obtain Intelligent frame interpolation frame rate. Frame rate range: (0, 100]. Valid only when the intelligent frame interpolation control switch is ON. Default: same as the source file frame rate.
 * @method void setFps(integer $Fps) Set Intelligent frame interpolation frame rate. Frame rate range: (0, 100]. Valid only when the intelligent frame interpolation control switch is ON. Default: same as the source file frame rate.
 */
class VideoFrameInterpolationInfo extends AbstractModel
{
    /**
     * @var string Intelligent frame interpolation control switch. Valid values:
<li>ON: enable intelligent frame interpolation;</li>
<li>OFF: disables intelligent frame interpolation.</li>
     */
    public $Switch;

    /**
     * @var integer Intelligent frame interpolation frame rate. Frame rate range: (0, 100]. Valid only when the intelligent frame interpolation control switch is ON. Default: same as the source file frame rate.
     */
    public $Fps;

    /**
     * @param string $Switch Intelligent frame interpolation control switch. Valid values:
<li>ON: enable intelligent frame interpolation;</li>
<li>OFF: disables intelligent frame interpolation.</li>
     * @param integer $Fps Intelligent frame interpolation frame rate. Frame rate range: (0, 100]. Valid only when the intelligent frame interpolation control switch is ON. Default: same as the source file frame rate.
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
