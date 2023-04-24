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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The video remaster parameters.
 *
 * @method RepairInfo getRepairInfo() Obtain The image restoration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepairInfo(RepairInfo $RepairInfo) Set The image restoration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() Obtain The smart frame interpolation parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) Set The smart frame interpolation parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SuperResolutionInfo getSuperResolutionInfo() Obtain The super resolution parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) Set The super resolution parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HDRInfo getHDRInfo() Obtain The high dynamic range (HDR) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHDRInfo(HDRInfo $HDRInfo) Set The high dynamic range (HDR) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VideoDenoiseInfo getVideoDenoiseInfo() Obtain The image noise removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) Set The image noise removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ColorEnhanceInfo getColorInfo() Obtain The color enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) Set The color enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SharpEnhanceInfo getSharpInfo() Obtain The detail enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) Set The detail enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FaceEnhanceInfo getFaceInfo() Obtain The face enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) Set The face enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LowLightEnhanceInfo getLowLightInfo() Obtain The low-light enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) Set The low-light enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScratchRepairInfo getScratchRepairInfo() Obtain The banding removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) Set The banding removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ArtifactRepairInfo getArtifactRepairInfo() Obtain The artifact removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) Set The artifact removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RebuildVideoInfo extends AbstractModel
{
    /**
     * @var RepairInfo The image restoration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo The smart frame interpolation parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo The super resolution parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo The high dynamic range (HDR) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo The image noise removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoDenoiseInfo;

    /**
     * @var ColorEnhanceInfo The color enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo The detail enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo The face enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo The low-light enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo The banding removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo The artifact removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ArtifactRepairInfo;

    /**
     * @param RepairInfo $RepairInfo The image restoration parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo The smart frame interpolation parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SuperResolutionInfo $SuperResolutionInfo The super resolution parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HDRInfo $HDRInfo The high dynamic range (HDR) configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VideoDenoiseInfo $VideoDenoiseInfo The image noise removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ColorEnhanceInfo $ColorInfo The color enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SharpEnhanceInfo $SharpInfo The detail enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FaceEnhanceInfo $FaceInfo The face enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LowLightEnhanceInfo $LowLightInfo The low-light enhancement parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScratchRepairInfo $ScratchRepairInfo The banding removal parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ArtifactRepairInfo $ArtifactRepairInfo The artifact removal parameters.
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
