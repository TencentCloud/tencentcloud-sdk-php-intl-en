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
 * Audio-visual quality revival video control info.
 *
 * @method RepairInfo getRepairInfo() Obtain Image quality restoration control parameters.
 * @method void setRepairInfo(RepairInfo $RepairInfo) Set Image quality restoration control parameters.
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() Obtain Intelligent frame interpolation control parameters.
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) Set Intelligent frame interpolation control parameters.
 * @method SuperResolutionInfo getSuperResolutionInfo() Obtain Image super-resolution control parameters.
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) Set Image super-resolution control parameters.
 * @method HDRInfo getHDRInfo() Obtain High dynamic range type control parameter.
 * @method void setHDRInfo(HDRInfo $HDRInfo) Set High dynamic range type control parameter.
 * @method VideoDenoiseInfo getVideoDenoiseInfo() Obtain Video noise reduction control parameters.
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) Set Video noise reduction control parameters.
 * @method ColorEnhanceInfo getColorInfo() Obtain Color enhancement control parameters.
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) Set Color enhancement control parameters.
 * @method SharpEnhanceInfo getSharpInfo() Obtain Detail enhancement control parameters.
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) Set Detail enhancement control parameters.
 * @method FaceEnhanceInfo getFaceInfo() Obtain Face enhancement control parameters.
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) Set Face enhancement control parameters.
 * @method LowLightEnhanceInfo getLowLightInfo() Obtain Low-light control parameters.
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) Set Low-light control parameters.
 * @method ScratchRepairInfo getScratchRepairInfo() Obtain Scratch removal control parameter.
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) Set Scratch removal control parameter.
 * @method ArtifactRepairInfo getArtifactRepairInfo() Obtain Artifact removal control parameter.
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) Set Artifact removal control parameter.
 */
class RebuildVideoInfo extends AbstractModel
{
    /**
     * @var RepairInfo Image quality restoration control parameters.
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo Intelligent frame interpolation control parameters.
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo Image super-resolution control parameters.
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo High dynamic range type control parameter.
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo Video noise reduction control parameters.
     */
    public $VideoDenoiseInfo;

    /**
     * @var ColorEnhanceInfo Color enhancement control parameters.
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo Detail enhancement control parameters.
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo Face enhancement control parameters.
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo Low-light control parameters.
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo Scratch removal control parameter.
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo Artifact removal control parameter.
     */
    public $ArtifactRepairInfo;

    /**
     * @param RepairInfo $RepairInfo Image quality restoration control parameters.
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo Intelligent frame interpolation control parameters.
     * @param SuperResolutionInfo $SuperResolutionInfo Image super-resolution control parameters.
     * @param HDRInfo $HDRInfo High dynamic range type control parameter.
     * @param VideoDenoiseInfo $VideoDenoiseInfo Video noise reduction control parameters.
     * @param ColorEnhanceInfo $ColorInfo Color enhancement control parameters.
     * @param SharpEnhanceInfo $SharpInfo Detail enhancement control parameters.
     * @param FaceEnhanceInfo $FaceInfo Face enhancement control parameters.
     * @param LowLightEnhanceInfo $LowLightInfo Low-light control parameters.
     * @param ScratchRepairInfo $ScratchRepairInfo Scratch removal control parameter.
     * @param ArtifactRepairInfo $ArtifactRepairInfo Artifact removal control parameter.
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
