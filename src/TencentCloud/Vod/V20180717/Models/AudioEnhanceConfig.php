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
 * Audio enhancement configuration.
 *
 * @method AudioDenoiseInfo getDenoise() Obtain Audio noise reduction configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDenoise(AudioDenoiseInfo $Denoise) Set Audio noise reduction configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioSeparateInfo getSeparate() Obtain Audio separation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeparate(AudioSeparateInfo $Separate) Set Audio separation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioVolumeBalanceInfo getVolumeBalance() Obtain Volume equalization configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVolumeBalance(AudioVolumeBalanceInfo $VolumeBalance) Set Volume equalization configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioBeautifyInfo getBeautify() Obtain Volume beautification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeautify(AudioBeautifyInfo $Beautify) Set Volume beautification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseInfo Audio noise reduction configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var AudioSeparateInfo Audio separation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Separate;

    /**
     * @var AudioVolumeBalanceInfo Volume equalization configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyInfo Volume beautification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Beautify;

    /**
     * @param AudioDenoiseInfo $Denoise Audio noise reduction configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioSeparateInfo $Separate Audio separation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioVolumeBalanceInfo $VolumeBalance Volume equalization configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioBeautifyInfo $Beautify Volume beautification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->Denoise = new AudioDenoiseInfo();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("Separate",$param) and $param["Separate"] !== null) {
            $this->Separate = new AudioSeparateInfo();
            $this->Separate->deserialize($param["Separate"]);
        }

        if (array_key_exists("VolumeBalance",$param) and $param["VolumeBalance"] !== null) {
            $this->VolumeBalance = new AudioVolumeBalanceInfo();
            $this->VolumeBalance->deserialize($param["VolumeBalance"]);
        }

        if (array_key_exists("Beautify",$param) and $param["Beautify"] !== null) {
            $this->Beautify = new AudioBeautifyInfo();
            $this->Beautify->deserialize($param["Beautify"]);
        }
    }
}
