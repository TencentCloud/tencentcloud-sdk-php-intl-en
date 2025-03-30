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
 * The execution results of the subtasks of a scheme.
 *
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain The result of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set The result of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain The result of an animated image generating task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set The result of an animated image generating task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain The result of a time point screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set The result of a time point screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain The result of a sampled screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set The result of a sampled screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain The result of an image sprite task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set The result of an image sprite task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain The result of an adaptive bitrate streaming task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set The result of an adaptive bitrate streaming task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduleRecognitionTaskResult getRecognitionTask() Obtain The result of a content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecognitionTask(ScheduleRecognitionTaskResult $RecognitionTask) Set The result of a content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduleReviewTaskResult getReviewTask() Obtain The result of a content moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReviewTask(ScheduleReviewTaskResult $ReviewTask) Set The result of a content moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduleAnalysisTaskResult getAnalysisTask() Obtain The result of a content analysis task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisTask(ScheduleAnalysisTaskResult $AnalysisTask) Set The result of a content analysis task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduleQualityControlTaskResult getQualityControlTask() Obtain Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlTask(ScheduleQualityControlTaskResult $QualityControlTask) Set Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduleSmartSubtitleTaskResult getSmartSubtitlesTask() Obtain Smart subtitle task output.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSmartSubtitlesTask(ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask) Set Smart subtitle task output.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ActivityResItem extends AbstractModel
{
    /**
     * @var MediaProcessTaskTranscodeResult The result of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult The result of an animated image generating task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult The result of a time point screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult The result of a sampled screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult The result of an image sprite task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult The result of an adaptive bitrate streaming task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var ScheduleRecognitionTaskResult The result of a content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecognitionTask;

    /**
     * @var ScheduleReviewTaskResult The result of a content moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewTask;

    /**
     * @var ScheduleAnalysisTaskResult The result of a content analysis task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisTask;

    /**
     * @var ScheduleQualityControlTaskResult Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityControlTask;

    /**
     * @var ScheduleSmartSubtitleTaskResult Smart subtitle task output.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SmartSubtitlesTask;

    /**
     * @param MediaProcessTaskTranscodeResult $TranscodeTask The result of a transcoding task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask The result of an animated image generating task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask The result of a time point screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask The result of a sampled screenshot task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask The result of an image sprite task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask The result of an adaptive bitrate streaming task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduleRecognitionTaskResult $RecognitionTask The result of a content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduleReviewTaskResult $ReviewTask The result of a content moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduleAnalysisTaskResult $AnalysisTask The result of a content analysis task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduleQualityControlTaskResult $QualityControlTask Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask Smart subtitle task output.
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
            $this->TranscodeTask = new MediaProcessTaskTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new MediaProcessTaskAnimatedGraphicResult();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new MediaProcessTaskSnapshotByTimeOffsetResult();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("SampleSnapshotTask",$param) and $param["SampleSnapshotTask"] !== null) {
            $this->SampleSnapshotTask = new MediaProcessTaskSampleSnapshotResult();
            $this->SampleSnapshotTask->deserialize($param["SampleSnapshotTask"]);
        }

        if (array_key_exists("ImageSpriteTask",$param) and $param["ImageSpriteTask"] !== null) {
            $this->ImageSpriteTask = new MediaProcessTaskImageSpriteResult();
            $this->ImageSpriteTask->deserialize($param["ImageSpriteTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new MediaProcessTaskAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("RecognitionTask",$param) and $param["RecognitionTask"] !== null) {
            $this->RecognitionTask = new ScheduleRecognitionTaskResult();
            $this->RecognitionTask->deserialize($param["RecognitionTask"]);
        }

        if (array_key_exists("ReviewTask",$param) and $param["ReviewTask"] !== null) {
            $this->ReviewTask = new ScheduleReviewTaskResult();
            $this->ReviewTask->deserialize($param["ReviewTask"]);
        }

        if (array_key_exists("AnalysisTask",$param) and $param["AnalysisTask"] !== null) {
            $this->AnalysisTask = new ScheduleAnalysisTaskResult();
            $this->AnalysisTask->deserialize($param["AnalysisTask"]);
        }

        if (array_key_exists("QualityControlTask",$param) and $param["QualityControlTask"] !== null) {
            $this->QualityControlTask = new ScheduleQualityControlTaskResult();
            $this->QualityControlTask->deserialize($param["QualityControlTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new ScheduleSmartSubtitleTaskResult();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }
    }
}
