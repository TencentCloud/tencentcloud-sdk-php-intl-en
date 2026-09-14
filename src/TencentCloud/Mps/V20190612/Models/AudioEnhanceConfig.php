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
 * Audio enhancement configuration
 *
 * @method AudioDenoiseConfig getDenoise() Obtain 
 * @method void setDenoise(AudioDenoiseConfig $Denoise) Set 
 * @method AudioSeparateConfig getSeparate() Obtain 
 * @method void setSeparate(AudioSeparateConfig $Separate) Set 
 * @method VolumeBalanceConfig getVolumeBalance() Obtain 
 * @method void setVolumeBalance(VolumeBalanceConfig $VolumeBalance) Set 
 * @method AudioBeautifyConfig getBeautify() Obtain 
 * @method void setBeautify(AudioBeautifyConfig $Beautify) Set 
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseConfig 
     */
    public $Denoise;

    /**
     * @var AudioSeparateConfig 
     */
    public $Separate;

    /**
     * @var VolumeBalanceConfig 
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyConfig 
     */
    public $Beautify;

    /**
     * @param AudioDenoiseConfig $Denoise 
     * @param AudioSeparateConfig $Separate 
     * @param VolumeBalanceConfig $VolumeBalance 
     * @param AudioBeautifyConfig $Beautify 
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
        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new AudioDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("Separate",$param) and $param["Separate"] !== null) {
            $this->Separate = new AudioSeparateConfig();
            $this->Separate->deserialize($param["Separate"]);
        }

        if (array_key_exists("VolumeBalance",$param) and $param["VolumeBalance"] !== null) {
            $this->VolumeBalance = new VolumeBalanceConfig();
            $this->VolumeBalance->deserialize($param["VolumeBalance"]);
        }

        if (array_key_exists("Beautify",$param) and $param["Beautify"] !== null) {
            $this->Beautify = new AudioBeautifyConfig();
            $this->Beautify->deserialize($param["Beautify"]);
        }
    }
}
