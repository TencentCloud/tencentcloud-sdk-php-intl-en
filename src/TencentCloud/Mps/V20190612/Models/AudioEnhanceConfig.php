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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The audio enhancement configuration.
 *
 * @method AudioDenoiseConfig getDenoise() Obtain The audio noise reduction configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDenoise(AudioDenoiseConfig $Denoise) Set The audio noise reduction configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method AudioSeparateConfig getSeparate() Obtain The audio separation configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSeparate(AudioSeparateConfig $Separate) Set The audio separation configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method VolumeBalanceConfig getVolumeBalance() Obtain The volume equalization configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVolumeBalance(VolumeBalanceConfig $VolumeBalance) Set The volume equalization configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method AudioBeautifyConfig getBeautify() Obtain The audio improvement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBeautify(AudioBeautifyConfig $Beautify) Set The audio improvement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseConfig The audio noise reduction configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var AudioSeparateConfig The audio separation configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Separate;

    /**
     * @var VolumeBalanceConfig The volume equalization configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyConfig The audio improvement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Beautify;

    /**
     * @param AudioDenoiseConfig $Denoise The audio noise reduction configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param AudioSeparateConfig $Separate The audio separation configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param VolumeBalanceConfig $VolumeBalance The volume equalization configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param AudioBeautifyConfig $Beautify The audio improvement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
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
