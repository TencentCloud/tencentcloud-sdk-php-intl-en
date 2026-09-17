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
 * @method MediaBasicInfo getBasicInfo() Obtain 
 * @method void setBasicInfo(MediaBasicInfo $BasicInfo) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 * @method MediaTranscodeInfo getTranscodeInfo() Obtain 
 * @method void setTranscodeInfo(MediaTranscodeInfo $TranscodeInfo) Set 
 * @method MediaAnimatedGraphicsInfo getAnimatedGraphicsInfo() Obtain 
 * @method void setAnimatedGraphicsInfo(MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo) Set 
 * @method MediaSampleSnapshotInfo getSampleSnapshotInfo() Obtain 
 * @method void setSampleSnapshotInfo(MediaSampleSnapshotInfo $SampleSnapshotInfo) Set 
 * @method MediaImageSpriteInfo getImageSpriteInfo() Obtain 
 * @method void setImageSpriteInfo(MediaImageSpriteInfo $ImageSpriteInfo) Set 
 * @method MediaSnapshotByTimeOffsetInfo getSnapshotByTimeOffsetInfo() Obtain 
 * @method void setSnapshotByTimeOffsetInfo(MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo) Set 
 * @method MediaKeyFrameDescInfo getKeyFrameDescInfo() Obtain 
 * @method void setKeyFrameDescInfo(MediaKeyFrameDescInfo $KeyFrameDescInfo) Set 
 * @method MediaAdaptiveDynamicStreamingInfo getAdaptiveDynamicStreamingInfo() Obtain 
 * @method void setAdaptiveDynamicStreamingInfo(MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo) Set 
 * @method MediaMiniProgramReviewInfo getMiniProgramReviewInfo() Obtain 
 * @method void setMiniProgramReviewInfo(MediaMiniProgramReviewInfo $MiniProgramReviewInfo) Set 
 * @method MediaSubtitleInfo getSubtitleInfo() Obtain 
 * @method void setSubtitleInfo(MediaSubtitleInfo $SubtitleInfo) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method FileReviewInfo getReviewInfo() Obtain 
 * @method void setReviewInfo(FileReviewInfo $ReviewInfo) Set 
 * @method MPSAiMediaInfo getMPSAiMediaInfo() Obtain 
 * @method void setMPSAiMediaInfo(MPSAiMediaInfo $MPSAiMediaInfo) Set 
 * @method ImageUnderstandingInfo getImageUnderstandingInfo() Obtain 
 * @method void setImageUnderstandingInfo(ImageUnderstandingInfo $ImageUnderstandingInfo) Set 
 * @method KnowledgeBasesInfo getKnowledgeBasesInfo() Obtain 
 * @method void setKnowledgeBasesInfo(KnowledgeBasesInfo $KnowledgeBasesInfo) Set 
 * @method FaceRecognitionInfo getFaceRecognitionInfo() Obtain 
 * @method void setFaceRecognitionInfo(FaceRecognitionInfo $FaceRecognitionInfo) Set 
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var MediaBasicInfo 
     */
    public $BasicInfo;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @var MediaTranscodeInfo 
     */
    public $TranscodeInfo;

    /**
     * @var MediaAnimatedGraphicsInfo 
     */
    public $AnimatedGraphicsInfo;

    /**
     * @var MediaSampleSnapshotInfo 
     */
    public $SampleSnapshotInfo;

    /**
     * @var MediaImageSpriteInfo 
     */
    public $ImageSpriteInfo;

    /**
     * @var MediaSnapshotByTimeOffsetInfo 
     */
    public $SnapshotByTimeOffsetInfo;

    /**
     * @var MediaKeyFrameDescInfo 
     */
    public $KeyFrameDescInfo;

    /**
     * @var MediaAdaptiveDynamicStreamingInfo 
     */
    public $AdaptiveDynamicStreamingInfo;

    /**
     * @var MediaMiniProgramReviewInfo 
     */
    public $MiniProgramReviewInfo;

    /**
     * @var MediaSubtitleInfo 
     */
    public $SubtitleInfo;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var FileReviewInfo 
     */
    public $ReviewInfo;

    /**
     * @var MPSAiMediaInfo 
     */
    public $MPSAiMediaInfo;

    /**
     * @var ImageUnderstandingInfo 
     */
    public $ImageUnderstandingInfo;

    /**
     * @var KnowledgeBasesInfo 
     */
    public $KnowledgeBasesInfo;

    /**
     * @var FaceRecognitionInfo 
     */
    public $FaceRecognitionInfo;

    /**
     * @param MediaBasicInfo $BasicInfo 
     * @param MediaMetaData $MetaData 
     * @param MediaTranscodeInfo $TranscodeInfo 
     * @param MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo 
     * @param MediaSampleSnapshotInfo $SampleSnapshotInfo 
     * @param MediaImageSpriteInfo $ImageSpriteInfo 
     * @param MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo 
     * @param MediaKeyFrameDescInfo $KeyFrameDescInfo 
     * @param MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo 
     * @param MediaMiniProgramReviewInfo $MiniProgramReviewInfo 
     * @param MediaSubtitleInfo $SubtitleInfo 
     * @param string $FileId 
     * @param FileReviewInfo $ReviewInfo 
     * @param MPSAiMediaInfo $MPSAiMediaInfo 
     * @param ImageUnderstandingInfo $ImageUnderstandingInfo 
     * @param KnowledgeBasesInfo $KnowledgeBasesInfo 
     * @param FaceRecognitionInfo $FaceRecognitionInfo 
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new MediaBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = new MediaTranscodeInfo();
            $this->TranscodeInfo->deserialize($param["TranscodeInfo"]);
        }

        if (array_key_exists("AnimatedGraphicsInfo",$param) and $param["AnimatedGraphicsInfo"] !== null) {
            $this->AnimatedGraphicsInfo = new MediaAnimatedGraphicsInfo();
            $this->AnimatedGraphicsInfo->deserialize($param["AnimatedGraphicsInfo"]);
        }

        if (array_key_exists("SampleSnapshotInfo",$param) and $param["SampleSnapshotInfo"] !== null) {
            $this->SampleSnapshotInfo = new MediaSampleSnapshotInfo();
            $this->SampleSnapshotInfo->deserialize($param["SampleSnapshotInfo"]);
        }

        if (array_key_exists("ImageSpriteInfo",$param) and $param["ImageSpriteInfo"] !== null) {
            $this->ImageSpriteInfo = new MediaImageSpriteInfo();
            $this->ImageSpriteInfo->deserialize($param["ImageSpriteInfo"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetInfo",$param) and $param["SnapshotByTimeOffsetInfo"] !== null) {
            $this->SnapshotByTimeOffsetInfo = new MediaSnapshotByTimeOffsetInfo();
            $this->SnapshotByTimeOffsetInfo->deserialize($param["SnapshotByTimeOffsetInfo"]);
        }

        if (array_key_exists("KeyFrameDescInfo",$param) and $param["KeyFrameDescInfo"] !== null) {
            $this->KeyFrameDescInfo = new MediaKeyFrameDescInfo();
            $this->KeyFrameDescInfo->deserialize($param["KeyFrameDescInfo"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingInfo",$param) and $param["AdaptiveDynamicStreamingInfo"] !== null) {
            $this->AdaptiveDynamicStreamingInfo = new MediaAdaptiveDynamicStreamingInfo();
            $this->AdaptiveDynamicStreamingInfo->deserialize($param["AdaptiveDynamicStreamingInfo"]);
        }

        if (array_key_exists("MiniProgramReviewInfo",$param) and $param["MiniProgramReviewInfo"] !== null) {
            $this->MiniProgramReviewInfo = new MediaMiniProgramReviewInfo();
            $this->MiniProgramReviewInfo->deserialize($param["MiniProgramReviewInfo"]);
        }

        if (array_key_exists("SubtitleInfo",$param) and $param["SubtitleInfo"] !== null) {
            $this->SubtitleInfo = new MediaSubtitleInfo();
            $this->SubtitleInfo->deserialize($param["SubtitleInfo"]);
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ReviewInfo",$param) and $param["ReviewInfo"] !== null) {
            $this->ReviewInfo = new FileReviewInfo();
            $this->ReviewInfo->deserialize($param["ReviewInfo"]);
        }

        if (array_key_exists("MPSAiMediaInfo",$param) and $param["MPSAiMediaInfo"] !== null) {
            $this->MPSAiMediaInfo = new MPSAiMediaInfo();
            $this->MPSAiMediaInfo->deserialize($param["MPSAiMediaInfo"]);
        }

        if (array_key_exists("ImageUnderstandingInfo",$param) and $param["ImageUnderstandingInfo"] !== null) {
            $this->ImageUnderstandingInfo = new ImageUnderstandingInfo();
            $this->ImageUnderstandingInfo->deserialize($param["ImageUnderstandingInfo"]);
        }

        if (array_key_exists("KnowledgeBasesInfo",$param) and $param["KnowledgeBasesInfo"] !== null) {
            $this->KnowledgeBasesInfo = new KnowledgeBasesInfo();
            $this->KnowledgeBasesInfo->deserialize($param["KnowledgeBasesInfo"]);
        }

        if (array_key_exists("FaceRecognitionInfo",$param) and $param["FaceRecognitionInfo"] !== null) {
            $this->FaceRecognitionInfo = new FaceRecognitionInfo();
            $this->FaceRecognitionInfo->deserialize($param["FaceRecognitionInfo"]);
        }
    }
}
