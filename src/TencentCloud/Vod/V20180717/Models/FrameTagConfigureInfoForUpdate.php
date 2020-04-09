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
 * Control parameter of intelligent frame-specific tagging task
 *
 * @method string getSwitch() Obtain Switch of intelligent frame-specific tagging task. Valid values:
<li>ON: enables intelligent frame-specific tagging task;</li>
<li>OFF: disables intelligent frame-specific tagging task.</li>
 * @method void setSwitch(string $Switch) Set Switch of intelligent frame-specific tagging task. Valid values:
<li>ON: enables intelligent frame-specific tagging task;</li>
<li>OFF: disables intelligent frame-specific tagging task.</li>
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 */
class FrameTagConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Switch of intelligent frame-specific tagging task. Valid values:
<li>ON: enables intelligent frame-specific tagging task;</li>
<li>OFF: disables intelligent frame-specific tagging task.</li>
     */
    public $Switch;

    /**
     * @var float Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param string $Switch Switch of intelligent frame-specific tagging task. Valid values:
<li>ON: enables intelligent frame-specific tagging task;</li>
<li>OFF: disables intelligent frame-specific tagging task.</li>
     * @param float $ScreenshotInterval Frame capturing interval in seconds. Minimum value: 0.5 seconds.
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

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
