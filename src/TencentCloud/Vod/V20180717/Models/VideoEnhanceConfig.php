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
 * @method string getEnhanceScenarioType() Obtain 
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set 
 * @method SuperResolutionInfo getSuperResolution() Obtain 
 * @method void setSuperResolution(SuperResolutionInfo $SuperResolution) Set 
 * @method HDRInfo getHdr() Obtain 
 * @method void setHdr(HDRInfo $Hdr) Set 
 * @method VideoDenoiseInfo getDenoise() Obtain 
 * @method void setDenoise(VideoDenoiseInfo $Denoise) Set 
 * @method ImageQualityEnhanceInfo getImageQualityEnhance() Obtain 
 * @method void setImageQualityEnhance(ImageQualityEnhanceInfo $ImageQualityEnhance) Set 
 * @method ColorEnhanceInfo getColorEnhance() Obtain 
 * @method void setColorEnhance(ColorEnhanceInfo $ColorEnhance) Set 
 * @method LowLightEnhanceInfo getLowLightEnhance() Obtain 
 * @method void setLowLightEnhance(LowLightEnhanceInfo $LowLightEnhance) Set 
 * @method ScratchRepairInfo getScratchRepair() Obtain 
 * @method void setScratchRepair(ScratchRepairInfo $ScratchRepair) Set 
 * @method ArtifactRepairInfo getArtifactRepair() Obtain 
 * @method void setArtifactRepair(ArtifactRepairInfo $ArtifactRepair) Set 
 * @method DiffusionEnhanceInfo getDiffusionEnhance() Obtain 
 * @method void setDiffusionEnhance(DiffusionEnhanceInfo $DiffusionEnhance) Set 
 * @method FrameRateWithDenInfo getFrameRateWithDen() Obtain 
 * @method void setFrameRateWithDen(FrameRateWithDenInfo $FrameRateWithDen) Set 
 */
class VideoEnhanceConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $EnhanceScenarioType;

    /**
     * @var SuperResolutionInfo 
     */
    public $SuperResolution;

    /**
     * @var HDRInfo 
     */
    public $Hdr;

    /**
     * @var VideoDenoiseInfo 
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
     * @var LowLightEnhanceInfo 
     */
    public $LowLightEnhance;

    /**
     * @var ScratchRepairInfo 
     */
    public $ScratchRepair;

    /**
     * @var ArtifactRepairInfo 
     */
    public $ArtifactRepair;

    /**
     * @var DiffusionEnhanceInfo 
     */
    public $DiffusionEnhance;

    /**
     * @var FrameRateWithDenInfo 
     */
    public $FrameRateWithDen;

    /**
     * @param string $EnhanceScenarioType 
     * @param SuperResolutionInfo $SuperResolution 
     * @param HDRInfo $Hdr 
     * @param VideoDenoiseInfo $Denoise 
     * @param ImageQualityEnhanceInfo $ImageQualityEnhance 
     * @param ColorEnhanceInfo $ColorEnhance 
     * @param LowLightEnhanceInfo $LowLightEnhance 
     * @param ScratchRepairInfo $ScratchRepair 
     * @param ArtifactRepairInfo $ArtifactRepair 
     * @param DiffusionEnhanceInfo $DiffusionEnhance 
     * @param FrameRateWithDenInfo $FrameRateWithDen 
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
        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }

        if (array_key_exists("SuperResolution",$param) and $param["SuperResolution"] !== null) {
            $this->SuperResolution = new SuperResolutionInfo();
            $this->SuperResolution->deserialize($param["SuperResolution"]);
        }

        if (array_key_exists("Hdr",$param) and $param["Hdr"] !== null) {
            $this->Hdr = new HDRInfo();
            $this->Hdr->deserialize($param["Hdr"]);
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new VideoDenoiseInfo();
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

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhanceInfo();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepairInfo();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("ArtifactRepair",$param) and $param["ArtifactRepair"] !== null) {
            $this->ArtifactRepair = new ArtifactRepairInfo();
            $this->ArtifactRepair->deserialize($param["ArtifactRepair"]);
        }

        if (array_key_exists("DiffusionEnhance",$param) and $param["DiffusionEnhance"] !== null) {
            $this->DiffusionEnhance = new DiffusionEnhanceInfo();
            $this->DiffusionEnhance->deserialize($param["DiffusionEnhance"]);
        }

        if (array_key_exists("FrameRateWithDen",$param) and $param["FrameRateWithDen"] !== null) {
            $this->FrameRateWithDen = new FrameRateWithDenInfo();
            $this->FrameRateWithDen->deserialize($param["FrameRateWithDen"]);
        }
    }
}
