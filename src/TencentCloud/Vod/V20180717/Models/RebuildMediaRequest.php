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
 * RebuildMedia request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
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
 * @method AudioDenoiseInfo getAudioDenoiseInfo() Obtain 
 * @method void setAudioDenoiseInfo(AudioDenoiseInfo $AudioDenoiseInfo) Set 
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
 * @method RebuildMediaTargetInfo getTargetInfo() Obtain 
 * @method void setTargetInfo(RebuildMediaTargetInfo $TargetInfo) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class RebuildMediaRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

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
     * @var AudioDenoiseInfo 
     */
    public $AudioDenoiseInfo;

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
     * @var RebuildMediaTargetInfo 
     */
    public $TargetInfo;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param string $FileId 
     * @param integer $SubAppId 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param RepairInfo $RepairInfo 
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo 
     * @param SuperResolutionInfo $SuperResolutionInfo 
     * @param HDRInfo $HDRInfo 
     * @param VideoDenoiseInfo $VideoDenoiseInfo 
     * @param AudioDenoiseInfo $AudioDenoiseInfo 
     * @param ColorEnhanceInfo $ColorInfo 
     * @param SharpEnhanceInfo $SharpInfo 
     * @param FaceEnhanceInfo $FaceInfo 
     * @param LowLightEnhanceInfo $LowLightInfo 
     * @param ScratchRepairInfo $ScratchRepairInfo 
     * @param ArtifactRepairInfo $ArtifactRepairInfo 
     * @param RebuildMediaTargetInfo $TargetInfo 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $TasksPriority 
     * @param string $ExtInfo 
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
