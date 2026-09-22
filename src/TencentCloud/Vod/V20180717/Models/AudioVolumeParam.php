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
 * Audio gain adjustment parameter
 *
 * @method integer getMute() Obtain Whether to mute. Value range: 0 or 1.
<li>0 means unmuted.</li>
<li>1 means mute.</li>
Default value: 0.
 * @method void setMute(integer $Mute) Set Whether to mute. Value range: 0 or 1.
<li>0 means unmuted.</li>
<li>1 means mute.</li>
Default value: 0.
 * @method float getGain() Obtain Audio gain. Value range: 0-10.
<li>A value greater than 1 means volume increase.</li>
<li>Less than 1 means low volume.</li>
<li>0 and 1: means do not change.</li>
Default value: 0.
 * @method void setGain(float $Gain) Set Audio gain. Value range: 0-10.
<li>A value greater than 1 means volume increase.</li>
<li>Less than 1 means low volume.</li>
<li>0 and 1: means do not change.</li>
Default value: 0.
 */
class AudioVolumeParam extends AbstractModel
{
    /**
     * @var integer Whether to mute. Value range: 0 or 1.
<li>0 means unmuted.</li>
<li>1 means mute.</li>
Default value: 0.
     */
    public $Mute;

    /**
     * @var float Audio gain. Value range: 0-10.
<li>A value greater than 1 means volume increase.</li>
<li>Less than 1 means low volume.</li>
<li>0 and 1: means do not change.</li>
Default value: 0.
     */
    public $Gain;

    /**
     * @param integer $Mute Whether to mute. Value range: 0 or 1.
<li>0 means unmuted.</li>
<li>1 means mute.</li>
Default value: 0.
     * @param float $Gain Audio gain. Value range: 0-10.
<li>A value greater than 1 means volume increase.</li>
<li>Less than 1 means low volume.</li>
<li>0 and 1: means do not change.</li>
Default value: 0.
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
        if (array_key_exists("Mute",$param) and $param["Mute"] !== null) {
            $this->Mute = $param["Mute"];
        }

        if (array_key_exists("Gain",$param) and $param["Gain"] !== null) {
            $this->Gain = $param["Gain"];
        }
    }
}
