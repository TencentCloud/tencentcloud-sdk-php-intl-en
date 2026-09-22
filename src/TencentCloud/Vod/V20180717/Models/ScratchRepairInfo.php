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
 * Scratch removal control information
 *
 * @method string getSwitch() Obtain Scratch control switch. Available values:
<li>ON: turn on scratch removal;</li>
<li>OFF: Turn off scratch removal.</li>
 * @method void setSwitch(string $Switch) Set Scratch control switch. Available values:
<li>ON: turn on scratch removal;</li>
<li>OFF: Turn off scratch removal.</li>
 * @method float getIntensity() Obtain Scratch removal strength. Valid only when the scratch control switch is ON. Value range: 0.0–1.0.
Default: 0.0.
 * @method void setIntensity(float $Intensity) Set Scratch removal strength. Valid only when the scratch control switch is ON. Value range: 0.0–1.0.
Default: 0.0.
 * @method string getType() Obtain Scratch removal type. Valid only when the scratch control switch is ON. Available values:
<li>normal: normal scratch removal;</li>
Default value: normal.
 * @method void setType(string $Type) Set Scratch removal type. Valid only when the scratch control switch is ON. Available values:
<li>normal: normal scratch removal;</li>
Default value: normal.
 */
class ScratchRepairInfo extends AbstractModel
{
    /**
     * @var string Scratch control switch. Available values:
<li>ON: turn on scratch removal;</li>
<li>OFF: Turn off scratch removal.</li>
     */
    public $Switch;

    /**
     * @var float Scratch removal strength. Valid only when the scratch control switch is ON. Value range: 0.0–1.0.
Default: 0.0.
     */
    public $Intensity;

    /**
     * @var string Scratch removal type. Valid only when the scratch control switch is ON. Available values:
<li>normal: normal scratch removal;</li>
Default value: normal.
     */
    public $Type;

    /**
     * @param string $Switch Scratch control switch. Available values:
<li>ON: turn on scratch removal;</li>
<li>OFF: Turn off scratch removal.</li>
     * @param float $Intensity Scratch removal strength. Valid only when the scratch control switch is ON. Value range: 0.0–1.0.
Default: 0.0.
     * @param string $Type Scratch removal type. Valid only when the scratch control switch is ON. Available values:
<li>normal: normal scratch removal;</li>
Default value: normal.
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

        if (array_key_exists("Intensity",$param) and $param["Intensity"] !== null) {
            $this->Intensity = $param["Intensity"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
