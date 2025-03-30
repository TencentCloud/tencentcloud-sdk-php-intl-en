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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A subtask of a scheme.
 *
 * @method TranscodeTaskInput getTranscodeTask() Obtain A transcoding task.
 * @method void setTranscodeTask(TranscodeTaskInput $TranscodeTask) Set A transcoding task.
 * @method AnimatedGraphicTaskInput getAnimatedGraphicTask() Obtain An animated screenshot generation task.
 * @method void setAnimatedGraphicTask(AnimatedGraphicTaskInput $AnimatedGraphicTask) Set An animated screenshot generation task.
 * @method SnapshotByTimeOffsetTaskInput getSnapshotByTimeOffsetTask() Obtain A time point screencapturing task.
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask) Set A time point screencapturing task.
 * @method SampleSnapshotTaskInput getSampleSnapshotTask() Obtain A sampled screencapturing task.
 * @method void setSampleSnapshotTask(SampleSnapshotTaskInput $SampleSnapshotTask) Set A sampled screencapturing task.
 * @method ImageSpriteTaskInput getImageSpriteTask() Obtain An image sprite generation task.
 * @method void setImageSpriteTask(ImageSpriteTaskInput $ImageSpriteTask) Set An image sprite generation task.
 * @method AdaptiveDynamicStreamingTaskInput getAdaptiveDynamicStreamingTask() Obtain An adaptive bitrate streaming task.
 * @method void setAdaptiveDynamicStreamingTask(AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask) Set An adaptive bitrate streaming task.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain A content moderation task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set A content moderation task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain A content analysis task.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set A content analysis task.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain A content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set A content recognition task.
 * @method AiQualityControlTaskInput getQualityControlTask() Obtain Media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlTask(AiQualityControlTaskInput $QualityControlTask) Set Media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain Smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) Set Smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ActivityPara extends AbstractModel
{
    /**
     * @var TranscodeTaskInput A transcoding task.
     */
    public $TranscodeTask;

    /**
     * @var AnimatedGraphicTaskInput An animated screenshot generation task.
     */
    public $AnimatedGraphicTask;

    /**
     * @var SnapshotByTimeOffsetTaskInput A time point screencapturing task.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var SampleSnapshotTaskInput A sampled screencapturing task.
     */
    public $SampleSnapshotTask;

    /**
     * @var ImageSpriteTaskInput An image sprite generation task.
     */
    public $ImageSpriteTask;

    /**
     * @var AdaptiveDynamicStreamingTaskInput An adaptive bitrate streaming task.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var AiContentReviewTaskInput A content moderation task.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput A content analysis task.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput A content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput Media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityControlTask;

    /**
     * @var SmartSubtitlesTaskInput Smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SmartSubtitlesTask;

    /**
     * @param TranscodeTaskInput $TranscodeTask A transcoding task.
     * @param AnimatedGraphicTaskInput $AnimatedGraphicTask An animated screenshot generation task.
     * @param SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask A time point screencapturing task.
     * @param SampleSnapshotTaskInput $SampleSnapshotTask A sampled screencapturing task.
     * @param ImageSpriteTaskInput $ImageSpriteTask An image sprite generation task.
     * @param AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask An adaptive bitrate streaming task.
     * @param AiContentReviewTaskInput $AiContentReviewTask A content moderation task.
     * @param AiAnalysisTaskInput $AiAnalysisTask A content analysis task.
     * @param AiRecognitionTaskInput $AiRecognitionTask A content recognition task.
     * @param AiQualityControlTaskInput $QualityControlTask Media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask Smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTaskInput();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new AnimatedGraphicTaskInput();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTaskInput();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("SampleSnapshotTask",$param) and $param["SampleSnapshotTask"] !== null) {
            $this->SampleSnapshotTask = new SampleSnapshotTaskInput();
            $this->SampleSnapshotTask->deserialize($param["SampleSnapshotTask"]);
        }

        if (array_key_exists("ImageSpriteTask",$param) and $param["ImageSpriteTask"] !== null) {
            $this->ImageSpriteTask = new ImageSpriteTaskInput();
            $this->ImageSpriteTask->deserialize($param["ImageSpriteTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new AdaptiveDynamicStreamingTaskInput();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("QualityControlTask",$param) and $param["QualityControlTask"] !== null) {
            $this->QualityControlTask = new AiQualityControlTaskInput();
            $this->QualityControlTask->deserialize($param["QualityControlTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }
    }
}
