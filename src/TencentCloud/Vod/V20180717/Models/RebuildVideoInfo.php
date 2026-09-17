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
 * @method RepairInfo getRepairInfo() Obtain 
 * @method void setRepairInfo(RepairInfo $RepairInfo) Set 
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() Obtain 
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) Set 
 * @method SuperResolutionInfo getSuperResolutionInfo() Obtain 
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) Set 
 * @method HDRInfo getHDRInfo() Obtain 
 * @method void setHDRInfo(HDRInfo $HDRInfo) Set 
 * @method VideoDenoiseInfo getVideoDenoiseInfo() Obtain 
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) Set 
 * @method ColorEnhanceInfo getColorInfo() Obtain 
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) Set 
 * @method SharpEnhanceInfo getSharpInfo() Obtain 
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) Set 
 * @method FaceEnhanceInfo getFaceInfo() Obtain 
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) Set 
 * @method LowLightEnhanceInfo getLowLightInfo() Obtain 
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) Set 
 * @method ScratchRepairInfo getScratchRepairInfo() Obtain 
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) Set 
 * @method ArtifactRepairInfo getArtifactRepairInfo() Obtain 
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) Set 
 */
class RebuildVideoInfo extends AbstractModel
{
    /**
     * @var RepairInfo 
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo 
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo 
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo 
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo 
     */
    public $VideoDenoiseInfo;

    /**
     * @var ColorEnhanceInfo 
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo 
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo 
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo 
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo 
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo 
     */
    public $ArtifactRepairInfo;

    /**
     * @param RepairInfo $RepairInfo 
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo 
     * @param SuperResolutionInfo $SuperResolutionInfo 
     * @param HDRInfo $HDRInfo 
     * @param VideoDenoiseInfo $VideoDenoiseInfo 
     * @param ColorEnhanceInfo $ColorInfo 
     * @param SharpEnhanceInfo $SharpInfo 
     * @param FaceEnhanceInfo $FaceInfo 
     * @param LowLightEnhanceInfo $LowLightInfo 
     * @param ScratchRepairInfo $ScratchRepairInfo 
     * @param ArtifactRepairInfo $ArtifactRepairInfo 
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
        if (array_key_exists("RepairInfo",$param) and $param["RepairInfo"] !== null) {
            $this->RepairInfo = new RepairInfo();
            $this->RepairInfo->deserialize($param["RepairInfo"]);
        }

        if (array_key_exists("VideoFrameInterpolationInfo",$param) and $param["VideoFrameInterpolationInfo"] !== null) {
            $this->VideoFrameInterpolationInfo = new VideoFrameInterpolationInfo();
            $this->VideoFrameInterpolationInfo->deserialize($param["VideoFrameInterpolationInfo"]);
        }

        if (array_key_exists("SuperResolutionInfo",$param) and $param["SuperResolutionInfo"] !== null) {
            $this->SuperResolutionInfo = new SuperResolutionInfo();
            $this->SuperResolutionInfo->deserialize($param["SuperResolutionInfo"]);
        }

        if (array_key_exists("HDRInfo",$param) and $param["HDRInfo"] !== null) {
            $this->HDRInfo = new HDRInfo();
            $this->HDRInfo->deserialize($param["HDRInfo"]);
        }

        if (array_key_exists("VideoDenoiseInfo",$param) and $param["VideoDenoiseInfo"] !== null) {
            $this->VideoDenoiseInfo = new VideoDenoiseInfo();
            $this->VideoDenoiseInfo->deserialize($param["VideoDenoiseInfo"]);
        }

        if (array_key_exists("ColorInfo",$param) and $param["ColorInfo"] !== null) {
            $this->ColorInfo = new ColorEnhanceInfo();
            $this->ColorInfo->deserialize($param["ColorInfo"]);
        }

        if (array_key_exists("SharpInfo",$param) and $param["SharpInfo"] !== null) {
            $this->SharpInfo = new SharpEnhanceInfo();
            $this->SharpInfo->deserialize($param["SharpInfo"]);
        }

        if (array_key_exists("FaceInfo",$param) and $param["FaceInfo"] !== null) {
            $this->FaceInfo = new FaceEnhanceInfo();
            $this->FaceInfo->deserialize($param["FaceInfo"]);
        }

        if (array_key_exists("LowLightInfo",$param) and $param["LowLightInfo"] !== null) {
            $this->LowLightInfo = new LowLightEnhanceInfo();
            $this->LowLightInfo->deserialize($param["LowLightInfo"]);
        }

        if (array_key_exists("ScratchRepairInfo",$param) and $param["ScratchRepairInfo"] !== null) {
            $this->ScratchRepairInfo = new ScratchRepairInfo();
            $this->ScratchRepairInfo->deserialize($param["ScratchRepairInfo"]);
        }

        if (array_key_exists("ArtifactRepairInfo",$param) and $param["ArtifactRepairInfo"] !== null) {
            $this->ArtifactRepairInfo = new ArtifactRepairInfo();
            $this->ArtifactRepairInfo->deserialize($param["ArtifactRepairInfo"]);
        }
    }
}
