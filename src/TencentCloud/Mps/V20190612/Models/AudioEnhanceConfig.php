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
 * The audio enhancement configuration.
 *
 * @method AudioDenoiseConfig getDenoise() Obtain Audio noise reduction configuration.
 * @method void setDenoise(AudioDenoiseConfig $Denoise) Set Audio noise reduction configuration.
 * @method AudioSeparateConfig getSeparate() Obtain Audio separation configuration.
 * @method void setSeparate(AudioSeparateConfig $Separate) Set Audio separation configuration.
 * @method VolumeBalanceConfig getVolumeBalance() Obtain Volume equalization configuration.
 * @method void setVolumeBalance(VolumeBalanceConfig $VolumeBalance) Set Volume equalization configuration.
 * @method AudioBeautifyConfig getBeautify() Obtain Audio beautification configuration.
 * @method void setBeautify(AudioBeautifyConfig $Beautify) Set Audio beautification configuration.
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseConfig Audio noise reduction configuration.
     */
    public $Denoise;

    /**
     * @var AudioSeparateConfig Audio separation configuration.
     */
    public $Separate;

    /**
     * @var VolumeBalanceConfig Volume equalization configuration.
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyConfig Audio beautification configuration.
     */
    public $Beautify;

    /**
     * @param AudioDenoiseConfig $Denoise Audio noise reduction configuration.
     * @param AudioSeparateConfig $Separate Audio separation configuration.
     * @param VolumeBalanceConfig $VolumeBalance Volume equalization configuration.
     * @param AudioBeautifyConfig $Beautify Audio beautification configuration.
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
