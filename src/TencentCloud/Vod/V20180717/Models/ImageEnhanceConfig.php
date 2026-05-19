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
 * Image enhancement parameters
 *
 * @method SuperResolutionInfo getSuperResolution() Obtain Super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) Set Super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AdvancedSuperResolutionConfig getAdvancedSuperResolution() Obtain Advanced super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdvancedSuperResolution(AdvancedSuperResolutionConfig $AdvancedSuperResolution) Set Advanced super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageDenoiseConfig getDenoise() Obtain Denoising configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDenoise(ImageDenoiseConfig $Denoise) Set Denoising configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() Obtain Comprehensive enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) Set Comprehensive enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ColorEnhanceInfo getColorEnhance() Obtain Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) Set Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SharpEnhanceInfo getSharpEnhance() Obtain Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharpEnhance(SharpEnhanceInfo $SharpEnhance) Set Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FaceEnhanceInfo getFaceEnhance() Obtain Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceEnhance(FaceEnhanceInfo $FaceEnhance) Set Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LowLightEnhanceInfo getLowLightEnhance() Obtain Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) Set Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageEnhanceConfig extends AbstractModel
{
    /**
     * @var SuperResolutionInfo Super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperResolution;

    /**
     * @var AdvancedSuperResolutionConfig Advanced super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdvancedSuperResolution;

    /**
     * @var ImageDenoiseConfig Denoising configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceInfo Comprehensive enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceInfo Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorEnhance;

    /**
     * @var SharpEnhanceInfo Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharpEnhance;

    /**
     * @var FaceEnhanceInfo Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceEnhance;

    /**
     * @var LowLightEnhanceInfo Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowLightEnhance;

    /**
     * @param SuperResolutionInfo $SuperResolution Super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AdvancedSuperResolutionConfig $AdvancedSuperResolution Advanced super-resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageDenoiseConfig $Denoise Denoising configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance Comprehensive enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ColorEnhanceInfo $ColorEnhance Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SharpEnhanceInfo $SharpEnhance Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FaceEnhanceInfo $FaceEnhance Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LowLightEnhanceInfo $LowLightEnhance Low-light enhancement configuration.
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
