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
 * @method AudioDenoiseConfig getDenoise() Obtain <p>Audio noise reduction configuration.</p>
 * @method void setDenoise(AudioDenoiseConfig $Denoise) Set <p>Audio noise reduction configuration.</p>
 * @method AudioSeparateConfig getSeparate() Obtain <p>Audio separation configuration.</p>
 * @method void setSeparate(AudioSeparateConfig $Separate) Set <p>Audio separation configuration.</p>
 * @method VolumeBalanceConfig getVolumeBalance() Obtain <p>Volume equalization configuration.</p>
 * @method void setVolumeBalance(VolumeBalanceConfig $VolumeBalance) Set <p>Volume equalization configuration.</p>
 * @method AudioBeautifyConfig getBeautify() Obtain <p>Audio beautification configurations.</p>
 * @method void setBeautify(AudioBeautifyConfig $Beautify) Set <p>Audio beautification configurations.</p>
 * @method AudioEnhanceEditConfig getAudioEnhanceEdit() Obtain <p>Audio enhancement edit.</p>
 * @method void setAudioEnhanceEdit(AudioEnhanceEditConfig $AudioEnhanceEdit) Set <p>Audio enhancement edit.</p>
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseConfig <p>Audio noise reduction configuration.</p>
     */
    public $Denoise;

    /**
     * @var AudioSeparateConfig <p>Audio separation configuration.</p>
     */
    public $Separate;

    /**
     * @var VolumeBalanceConfig <p>Volume equalization configuration.</p>
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyConfig <p>Audio beautification configurations.</p>
     */
    public $Beautify;

    /**
     * @var AudioEnhanceEditConfig <p>Audio enhancement edit.</p>
     */
    public $AudioEnhanceEdit;

    /**
     * @param AudioDenoiseConfig $Denoise <p>Audio noise reduction configuration.</p>
     * @param AudioSeparateConfig $Separate <p>Audio separation configuration.</p>
     * @param VolumeBalanceConfig $VolumeBalance <p>Volume equalization configuration.</p>
     * @param AudioBeautifyConfig $Beautify <p>Audio beautification configurations.</p>
     * @param AudioEnhanceEditConfig $AudioEnhanceEdit <p>Audio enhancement edit.</p>
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

        if (array_key_exists("AudioEnhanceEdit",$param) and $param["AudioEnhanceEdit"] !== null) {
            $this->AudioEnhanceEdit = new AudioEnhanceEditConfig();
            $this->AudioEnhanceEdit->deserialize($param["AudioEnhanceEdit"]);
        }
    }
}
