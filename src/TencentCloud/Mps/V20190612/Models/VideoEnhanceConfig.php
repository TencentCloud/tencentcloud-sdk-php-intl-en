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
 * Video enhancement configuration
 *
 * @method FrameRateConfig getFrameRate() Obtain 
 * @method void setFrameRate(FrameRateConfig $FrameRate) Set 
 * @method SuperResolutionConfig getSuperResolution() Obtain 
 * @method void setSuperResolution(SuperResolutionConfig $SuperResolution) Set 
 * @method HdrConfig getHdr() Obtain 
 * @method void setHdr(HdrConfig $Hdr) Set 
 * @method VideoDenoiseConfig getDenoise() Obtain 
 * @method void setDenoise(VideoDenoiseConfig $Denoise) Set 
 * @method ImageQualityEnhanceConfig getImageQualityEnhance() Obtain 
 * @method void setImageQualityEnhance(ImageQualityEnhanceConfig $ImageQualityEnhance) Set 
 * @method ColorEnhanceConfig getColorEnhance() Obtain 
 * @method void setColorEnhance(ColorEnhanceConfig $ColorEnhance) Set 
 * @method LowLightEnhanceConfig getLowLightEnhance() Obtain 
 * @method void setLowLightEnhance(LowLightEnhanceConfig $LowLightEnhance) Set 
 * @method ScratchRepairConfig getScratchRepair() Obtain 
 * @method void setScratchRepair(ScratchRepairConfig $ScratchRepair) Set 
 * @method ArtifactRepairConfig getArtifactRepair() Obtain 
 * @method void setArtifactRepair(ArtifactRepairConfig $ArtifactRepair) Set 
 * @method string getEnhanceSceneType() Obtain 
 * @method void setEnhanceSceneType(string $EnhanceSceneType) Set 
 * @method DiffusionEnhanceConfig getDiffusionEnhance() Obtain 
 * @method void setDiffusionEnhance(DiffusionEnhanceConfig $DiffusionEnhance) Set 
 * @method FrameRateWithDenConfig getFrameRateWithDen() Obtain 
 * @method void setFrameRateWithDen(FrameRateWithDenConfig $FrameRateWithDen) Set 
 * @method AiRestorationConfig getAiRestoration() Obtain 
 * @method void setAiRestoration(AiRestorationConfig $AiRestoration) Set 
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var FrameRateConfig 
     */
    public $FrameRate;

    /**
     * @var SuperResolutionConfig 
     */
    public $SuperResolution;

    /**
     * @var HdrConfig 
     */
    public $Hdr;

    /**
     * @var VideoDenoiseConfig 
     */
    public $Denoise;

    /**
     * @var ImageQualityEnhanceConfig 
     */
    public $ImageQualityEnhance;

    /**
     * @var ColorEnhanceConfig 
     */
    public $ColorEnhance;

    /**
     * @var LowLightEnhanceConfig 
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairConfig 
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairConfig 
     */
    public $ArtifactRepair;

    /**
     * @var string 
     */
    public $EnhanceSceneType;

    /**
     * @var DiffusionEnhanceConfig 
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenConfig 
     */
    public $FrameRateWithDen;

    /**
     * @var AiRestorationConfig 
     */
    public $AiRestoration;

    /**
     * @param FrameRateConfig $FrameRate 
     * @param SuperResolutionConfig $SuperResolution 
     * @param HdrConfig $Hdr 
     * @param VideoDenoiseConfig $Denoise 
     * @param ImageQualityEnhanceConfig $ImageQualityEnhance 
     * @param ColorEnhanceConfig $ColorEnhance 
     * @param LowLightEnhanceConfig $LowLightEnhance 
     * @param ScratchRepairConfig $ScratchRepair 
     * @param ArtifactRepairConfig $ArtifactRepair 
     * @param string $EnhanceSceneType 
     * @param DiffusionEnhanceConfig $DiffusionEnhance 
     * @param FrameRateWithDenConfig $FrameRateWithDen 
     * @param AiRestorationConfig $AiRestoration 
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

        if (array_key_exists("EnhanceSceneType",$param) and $param["EnhanceSceneType"] !== null) {
            $this->EnhanceSceneType = $param["EnhanceSceneType"];
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceConfig();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenConfig();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }

        if (array_key_exists("AiRestoration",$param) and $param["AiRestoration"] !== null) {
            $this->AiRestoration = new AiRestorationConfig();
            $this->AiRestoration->deserialize($param["AiRestoration"]);
        }
    }
}
