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
 * The input parameters of an audio/video remastering task.
 *
 * @method string getFileId() Obtain The file ID.
 * @method void setFileId(string $FileId) Set The file ID.
 * @method float getStartTimeOffset() Obtain The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method float getEndTimeOffset() Obtain The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
 * @method integer getDefinition() Obtain The ID of the remaster template.
 * @method void setDefinition(integer $Definition) Set The ID of the remaster template.
 * @method RepairInfo getRepairInfo() Obtain The video quality remastering parameters.
 * @method void setRepairInfo(RepairInfo $RepairInfo) Set The video quality remastering parameters.
 * @method VideoFrameInterpolationInfo getVideoFrameInterpolationInfo() Obtain The smart frame interpolation parameters.
 * @method void setVideoFrameInterpolationInfo(VideoFrameInterpolationInfo $VideoFrameInterpolationInfo) Set The smart frame interpolation parameters.
 * @method SuperResolutionInfo getSuperResolutionInfo() Obtain The super resolution parameters.
 * @method void setSuperResolutionInfo(SuperResolutionInfo $SuperResolutionInfo) Set The super resolution parameters.
 * @method HDRInfo getHDRInfo() Obtain The high dynamic range (HDR) parameters.
 * @method void setHDRInfo(HDRInfo $HDRInfo) Set The high dynamic range (HDR) parameters.
 * @method VideoDenoiseInfo getVideoDenoiseInfo() Obtain The image noise removal parameters.
 * @method void setVideoDenoiseInfo(VideoDenoiseInfo $VideoDenoiseInfo) Set The image noise removal parameters.
 * @method AudioDenoiseInfo getAudioDenoiseInfo() Obtain The noise removal parameters.
 * @method void setAudioDenoiseInfo(AudioDenoiseInfo $AudioDenoiseInfo) Set The noise removal parameters.
 * @method ColorEnhanceInfo getColorInfo() Obtain The color enhancement parameters.
 * @method void setColorInfo(ColorEnhanceInfo $ColorInfo) Set The color enhancement parameters.
 * @method SharpEnhanceInfo getSharpInfo() Obtain The detail enhancement parameters.
 * @method void setSharpInfo(SharpEnhanceInfo $SharpInfo) Set The detail enhancement parameters.
 * @method FaceEnhanceInfo getFaceInfo() Obtain The face enhancement parameters.
 * @method void setFaceInfo(FaceEnhanceInfo $FaceInfo) Set The face enhancement parameters.
 * @method LowLightEnhanceInfo getLowLightInfo() Obtain The low-light enhancement parameters.
 * @method void setLowLightInfo(LowLightEnhanceInfo $LowLightInfo) Set The low-light enhancement parameters.
 * @method ScratchRepairInfo getScratchRepairInfo() Obtain The banding removal parameters.
 * @method void setScratchRepairInfo(ScratchRepairInfo $ScratchRepairInfo) Set The banding removal parameters.
 * @method ArtifactRepairInfo getArtifactRepairInfo() Obtain The artifact removal (smoothing) parameters.
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) Set The artifact removal (smoothing) parameters.
 * @method RebuildMediaTargetInfo getTargetInfo() Obtain The output parameters of the file.
 * @method void setTargetInfo(RebuildMediaTargetInfo $TargetInfo) Set The output parameters of the file.
 */
class RebuildMediaTaskInput extends AbstractModel
{
    /**
     * @var string The file ID.
     */
    public $FileId;

    /**
     * @var float The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     */
    public $StartTimeOffset;

    /**
     * @var float The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
     */
    public $EndTimeOffset;

    /**
     * @var integer The ID of the remaster template.
     */
    public $Definition;

    /**
     * @var RepairInfo The video quality remastering parameters.
     */
    public $RepairInfo;

    /**
     * @var VideoFrameInterpolationInfo The smart frame interpolation parameters.
     */
    public $VideoFrameInterpolationInfo;

    /**
     * @var SuperResolutionInfo The super resolution parameters.
     */
    public $SuperResolutionInfo;

    /**
     * @var HDRInfo The high dynamic range (HDR) parameters.
     */
    public $HDRInfo;

    /**
     * @var VideoDenoiseInfo The image noise removal parameters.
     */
    public $VideoDenoiseInfo;

    /**
     * @var AudioDenoiseInfo The noise removal parameters.
     */
    public $AudioDenoiseInfo;

    /**
     * @var ColorEnhanceInfo The color enhancement parameters.
     */
    public $ColorInfo;

    /**
     * @var SharpEnhanceInfo The detail enhancement parameters.
     */
    public $SharpInfo;

    /**
     * @var FaceEnhanceInfo The face enhancement parameters.
     */
    public $FaceInfo;

    /**
     * @var LowLightEnhanceInfo The low-light enhancement parameters.
     */
    public $LowLightInfo;

    /**
     * @var ScratchRepairInfo The banding removal parameters.
     */
    public $ScratchRepairInfo;

    /**
     * @var ArtifactRepairInfo The artifact removal (smoothing) parameters.
     */
    public $ArtifactRepairInfo;

    /**
     * @var RebuildMediaTargetInfo The output parameters of the file.
     */
    public $TargetInfo;

    /**
     * @param string $FileId The file ID.
     * @param float $StartTimeOffset The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     * @param float $EndTimeOffset The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
     * @param integer $Definition The ID of the remaster template.
     * @param RepairInfo $RepairInfo The video quality remastering parameters.
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo The smart frame interpolation parameters.
     * @param SuperResolutionInfo $SuperResolutionInfo The super resolution parameters.
     * @param HDRInfo $HDRInfo The high dynamic range (HDR) parameters.
     * @param VideoDenoiseInfo $VideoDenoiseInfo The image noise removal parameters.
     * @param AudioDenoiseInfo $AudioDenoiseInfo The noise removal parameters.
     * @param ColorEnhanceInfo $ColorInfo The color enhancement parameters.
     * @param SharpEnhanceInfo $SharpInfo The detail enhancement parameters.
     * @param FaceEnhanceInfo $FaceInfo The face enhancement parameters.
     * @param LowLightEnhanceInfo $LowLightInfo The low-light enhancement parameters.
     * @param ScratchRepairInfo $ScratchRepairInfo The banding removal parameters.
     * @param ArtifactRepairInfo $ArtifactRepairInfo The artifact removal (smoothing) parameters.
     * @param RebuildMediaTargetInfo $TargetInfo The output parameters of the file.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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

        if (array_key_exists("AudioDenoiseInfo",$param) and $param["AudioDenoiseInfo"] !== null) {
            $this->AudioDenoiseInfo = new AudioDenoiseInfo();
            $this->AudioDenoiseInfo->deserialize($param["AudioDenoiseInfo"]);
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

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new RebuildMediaTargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }
    }
}
