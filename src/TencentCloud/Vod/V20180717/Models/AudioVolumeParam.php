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
 * 
 *
 * @method integer getMute() Obtain 
 * @method void setMute(integer $Mute) Set 
 * @method float getGain() Obtain 
 * @method void setGain(float $Gain) Set 
 */
class AudioVolumeParam extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Mute;

    /**
     * @var float 
     */
    public $Gain;

    /**
     * @param integer $Mute 
     * @param float $Gain 
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
