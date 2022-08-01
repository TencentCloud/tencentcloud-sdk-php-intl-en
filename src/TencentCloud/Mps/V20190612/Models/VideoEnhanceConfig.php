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
 * Video enhancement configuration.
 *
 * @method FrameRateConfig getFrameRate() Obtain Frame interpolation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrameRate(FrameRateConfig $FrameRate) Set Frame interpolation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SuperResolutionConfig getSuperResolution() Obtain Super resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) Set Super resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HdrConfig getHdr() Obtain HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHdr(HdrConfig $Hdr) Set HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VideoDenoiseConfig getDenoise() Obtain Image noise removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDenoise(VideoDenoiseConfig $Denoise) Set Image noise removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() Obtain Overall enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) Set Overall enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ColorEnhanceConfig getColorEnhance() Obtain Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) Set Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SharpEnhanceConfig getSharpEnhance() Obtain Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharpEnhance(SharpEnhanceConfig $SharpEnhance) Set Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FaceEnhanceConfig getFaceEnhance() Obtain Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceEnhance(FaceEnhanceConfig $FaceEnhance) Set Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LowLightEnhanceConfig getLowLightEnhance() Obtain Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) Set Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScratchRepairConfig getScratchRepair() Obtain Banding removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) Set Banding removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ArtifactRepairConfig getArtifactRepair() Obtain Artifact removal (smoothing) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) Set Artifact removal (smoothing) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig Frame interpolation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig Super resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperResolution;

    /**
     * @var HdrConfig HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig Image noise removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig Overall enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorEnhance;

    /**
     * @var SharpEnhanceConfig Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharpEnhance;

    /**
     * @var FaceEnhanceConfig Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceEnhance;

    /**
     * @var LowLightEnhanceConfig Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairConfig Banding removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairConfig Artifact removal (smoothing) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArtifactRepair;

    /**
     * @param FrameRateConfig $FrameRate Frame interpolation configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SuperResolutionConfig $SuperResolution Super resolution configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HdrConfig $Hdr HDR configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VideoDenoiseConfig $Denoise Image noise removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance Overall enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ColorEnhanceConfig $ColorEnhance Color enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SharpEnhanceConfig $SharpEnhance Detail enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FaceEnhanceConfig $FaceEnhance Face enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LowLightEnhanceConfig $LowLightEnhance Low-light enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScratchRepairConfig $ScratchRepair Banding removal configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ArtifactRepairConfig $ArtifactRepair Artifact removal (smoothing) configuration.
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
        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = new FrameRateConfig();
            $this->FrameRate->deserialize($param["FrameRate"]);
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionConfig();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HdrConfig();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("ImageQualityEnhance",$param) and $param["ImageQualityEnhance"] !== null) {
            $this->ImageQualityEnhance = new ImageQualityEnhanceConfig();
            $this->ImageQualityEnhance->deserialize($param["ImageQualityEnhance"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhanceConfig();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("SharpEnhance",$param) and $param["SharpEnhance"] !== null) {
            $this->SharpEnhance = new SharpEnhanceConfig();
            $this->SharpEnhance->deserialize($param["SharpEnhance"]);
        }

        if (array_key_exists("FaceEnhance",$param) and $param["FaceEnhance"] !== null) {
            $this->FaceEnhance = new FaceEnhanceConfig();
            $this->FaceEnhance->deserialize($param["FaceEnhance"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceConfig();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairConfig();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairConfig();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }
    }
}
