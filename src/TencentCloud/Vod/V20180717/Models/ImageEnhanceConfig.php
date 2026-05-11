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
 * @method SuperResolutionInfo getSuperResolution() Obtain 
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) Set 
 * @method AdvancedSuperResolutionConfig getAdvancedSuperResolution() Obtain 
 * @method void setAdvancedSuperResolution(AdvancedSuperResolutionConfig $AdvancedSuperResolution) Set 
 * @method ImageDenoiseConfig getDenoise() Obtain 
 * @method void setDenoise(ImageDenoiseConfig $Denoise) Set 
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() Obtain 
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) Set 
 * @method ColorEnhanceInfo getColorEnhance() Obtain 
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) Set 
 * @method SharpEnhanceInfo getSharpEnhance() Obtain 
 * @method void setSharpEnhance(SharpEnhanceInfo $SharpEnhance) Set 
 * @method FaceEnhanceInfo getFaceEnhance() Obtain 
 * @method void setFaceEnhance(FaceEnhanceInfo $FaceEnhance) Set 
 * @method LowLightEnhanceInfo getLowLightEnhance() Obtain 
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) Set 
 */
class ImageEnhanceConfig extends AbstractModel
{
    /**
     * @var SuperResolutionInfo 
     */
    public $SuperResolution;

    /**
     * @var AdvancedSuperResolutionConfig 
     */
    public $AdvancedSuperResolution;

    /**
     * @var ImageDenoiseConfig 
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo 
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo 
     */
    public $ColorEnhance;

    /**
     * @var SharpEnhanceInfo 
     */
    public $SharpEnhance;

    /**
     * @var FaceEnhanceInfo 
     */
    public $FaceEnhance;

    /**
     * @var LowLightEnhanceInfo 
     */
    public $LowLightEnhance;

    /**
     * @param SuperResolutionInfo $SuperResolution 
     * @param AdvancedSuperResolutionConfig $AdvancedSuperResolution 
     * @param ImageDenoiseConfig $Denoise 
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance 
     * @param ColorEnhanceInfo $ColorEnhance 
     * @param SharpEnhanceInfo $SharpEnhance 
     * @param FaceEnhanceInfo $FaceEnhance 
     * @param LowLightEnhanceInfo $LowLightEnhance 
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
        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionInfo();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("AdvancedSuperResolution",$param) and $param["AdvancedSuperResolution"] !== null) {
            $this->AdvancedSuperResolution = new AdvancedSuperResolutionConfig();
            $this->AdvancedSuperResolution->deserialize($param["AdvancedSuperResolution"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new ImageDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceInfo();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceInfo();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("SharpEnhance",$param) and $param["SharpEnhance"] !== null) {
            $this->SharpEnhance = new SharpEnhanceInfo();
            $this->SharpEnhance->deserialize($param["SharpEnhance"]);
        }

        if (array_key_exists("FaceEnhance",$param) and $param["FaceEnhance"] !== null) {
            $this->FaceEnhance = new FaceEnhanceInfo();
            $this->FaceEnhance->deserialize($param["FaceEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceInfo();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }
    }
}
