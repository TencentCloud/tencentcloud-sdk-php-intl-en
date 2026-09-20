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
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method float getStartTimeOffset() Obtain Start offset time, in seconds. If not filled, the segment is cut from the beginning of the video.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start offset time, in seconds. If not filled, the segment is cut from the beginning of the video.
 * @method float getEndTimeOffset() Obtain End offset time, in seconds. Not filled indicates cutting to the end of the video.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End offset time, in seconds. Not filled indicates cutting to the end of the video.
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
 * @method AudioDenoiseInfo getAudioDenoiseInfo() Obtain Audio noise reduction control parameters.
 * @method void setAudioDenoiseInfo(AudioDenoiseInfo $AudioDenoiseInfo) Set Audio noise reduction control parameters.
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
 * @method ArtifactRepairInfo getArtifactRepairInfo() Obtain Artifact (burr) removal control parameter.
 * @method void setArtifactRepairInfo(ArtifactRepairInfo $ArtifactRepairInfo) Set Artifact (burr) removal control parameter.
 * @method RebuildMediaTargetInfo getTargetInfo() Obtain Output target parameters for audio-visual quality rebirth.
 * @method void setTargetInfo(RebuildMediaTargetInfo $TargetInfo) Set Output target parameters for audio-visual quality rebirth.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purposes.
 */
class RebuildMediaRequest extends AbstractModel
{
    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var float Start offset time, in seconds. If not filled, the segment is cut from the beginning of the video.
     */
    public $StartTimeOffset;

    /**
     * @var float End offset time, in seconds. Not filled indicates cutting to the end of the video.
     */
    public $EndTimeOffset;

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
     * @var AudioDenoiseInfo Audio noise reduction control parameters.
     */
    public $AudioDenoiseInfo;

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
     * @var ArtifactRepairInfo Artifact (burr) removal control parameter.
     */
    public $ArtifactRepairInfo;

    /**
     * @var RebuildMediaTargetInfo Output target parameters for audio-visual quality rebirth.
     */
    public $TargetInfo;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @param string $FileId Media file ID.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param float $StartTimeOffset Start offset time, in seconds. If not filled, the segment is cut from the beginning of the video.
     * @param float $EndTimeOffset End offset time, in seconds. Not filled indicates cutting to the end of the video.
     * @param RepairInfo $RepairInfo Image quality restoration control parameters.
     * @param VideoFrameInterpolationInfo $VideoFrameInterpolationInfo Intelligent frame interpolation control parameters.
     * @param SuperResolutionInfo $SuperResolutionInfo Image super-resolution control parameters.
     * @param HDRInfo $HDRInfo High dynamic range type control parameter.
     * @param VideoDenoiseInfo $VideoDenoiseInfo Video noise reduction control parameters.
     * @param AudioDenoiseInfo $AudioDenoiseInfo Audio noise reduction control parameters.
     * @param ColorEnhanceInfo $ColorInfo Color enhancement control parameters.
     * @param SharpEnhanceInfo $SharpInfo Detail enhancement control parameters.
     * @param FaceEnhanceInfo $FaceInfo Face enhancement control parameters.
     * @param LowLightEnhanceInfo $LowLightInfo Low-light control parameters.
     * @param ScratchRepairInfo $ScratchRepairInfo Scratch removal control parameter.
     * @param ArtifactRepairInfo $ArtifactRepairInfo Artifact (burr) removal control parameter.
     * @param RebuildMediaTargetInfo $TargetInfo Output target parameters for audio-visual quality rebirth.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purposes.
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
