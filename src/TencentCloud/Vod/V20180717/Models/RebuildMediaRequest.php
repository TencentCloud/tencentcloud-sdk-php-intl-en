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
 * RebuildMedia request structure.
 *
 * @method string getFileId() Obtain The file ID.
 * @method void setFileId(string $FileId) Set The file ID.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method float getStartTimeOffset() Obtain The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method float getEndTimeOffset() Obtain The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
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
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method integer getTasksPriority() Obtain The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
 * @method string getExtInfo() Obtain A reserved parameter.
 * @method void setExtInfo(string $ExtInfo) Set A reserved parameter.
 */
class RebuildMediaRequest extends AbstractModel
{
    /**
     * @var string The file ID.
     */
    public $FileId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var float The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     */
    public $StartTimeOffset;

    /**
     * @var float The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
     */
    public $EndTimeOffset;

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
     * @var string The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @var string The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string A reserved parameter.
     */
    public $ExtInfo;

    /**
     * @param string $FileId The file ID.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param float $StartTimeOffset The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     * @param float $EndTimeOffset The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
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
     * @param string $SessionId The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     * @param integer $TasksPriority The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
     * @param string $ExtInfo A reserved parameter.
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
