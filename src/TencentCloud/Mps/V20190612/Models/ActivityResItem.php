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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Orchestration subtask output
 *
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain 
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set 
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain 
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set 
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain 
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set 
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain 
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set 
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain 
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set 
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain 
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set 
 * @method ScheduleRecognitionTaskResult getRecognitionTask() Obtain 
 * @method void setRecognitionTask(ScheduleRecognitionTaskResult $RecognitionTask) Set 
 * @method ScheduleReviewTaskResult getReviewTask() Obtain 
 * @method void setReviewTask(ScheduleReviewTaskResult $ReviewTask) Set 
 * @method ScheduleAnalysisTaskResult getAnalysisTask() Obtain 
 * @method void setAnalysisTask(ScheduleAnalysisTaskResult $AnalysisTask) Set 
 * @method ScheduleQualityControlTaskResult getQualityControlTask() Obtain 
 * @method void setQualityControlTask(ScheduleQualityControlTaskResult $QualityControlTask) Set 
 * @method ScheduleExecRuleTaskResult getExecRuleTask() Obtain 
 * @method void setExecRuleTask(ScheduleExecRuleTaskResult $ExecRuleTask) Set 
 * @method ScheduleSmartSubtitleTaskResult getSmartSubtitlesTask() Obtain 
 * @method void setSmartSubtitlesTask(ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask) Set 
 * @method SmartEraseTaskResult getSmartEraseTask() Obtain 
 * @method void setSmartEraseTask(SmartEraseTaskResult $SmartEraseTask) Set 
 */
class ActivityResItem extends AbstractModel
{
    /**
     * @var MediaProcessTaskTranscodeResult 
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult 
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult 
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult 
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult 
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult 
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var ScheduleRecognitionTaskResult 
     */
    public $RecognitionTask;

    /**
     * @var ScheduleReviewTaskResult 
     */
    public $ReviewTask;

    /**
     * @var ScheduleAnalysisTaskResult 
     */
    public $AnalysisTask;

    /**
     * @var ScheduleQualityControlTaskResult 
     */
    public $QualityControlTask;

    /**
     * @var ScheduleExecRuleTaskResult 
     */
    public $ExecRuleTask;

    /**
     * @var ScheduleSmartSubtitleTaskResult 
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskResult 
     */
    public $SmartEraseTask;

    /**
     * @param MediaProcessTaskTranscodeResult $TranscodeTask 
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask 
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask 
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask 
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask 
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask 
     * @param ScheduleRecognitionTaskResult $RecognitionTask 
     * @param ScheduleReviewTaskResult $ReviewTask 
     * @param ScheduleAnalysisTaskResult $AnalysisTask 
     * @param ScheduleQualityControlTaskResult $QualityControlTask 
     * @param ScheduleExecRuleTaskResult $ExecRuleTask 
     * @param ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask 
     * @param SmartEraseTaskResult $SmartEraseTask 
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

        if (array_key_exists("ExecRuleTask",$param) and $param["ExecRuleTask"] !== null) {
            $this->ExecRuleTask = new ScheduleExecRuleTaskResult();
            $this->ExecRuleTask->deserialize($param["ExecRuleTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new ScheduleSmartSubtitleTaskResult();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new SmartEraseTaskResult();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }
    }
}
