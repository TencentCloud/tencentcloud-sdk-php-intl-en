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
 * Output of the orchestration subtask
 *
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() Obtain <p>Transcoding task output</p>
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) Set <p>Transcoding task output</p>
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() Obtain <p>Output of rotating image tasks</p>
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) Set <p>Output of rotating image tasks</p>
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() Obtain <p>Time point screenshot task output</p>
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) Set <p>Time point screenshot task output</p>
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() Obtain <p>Output of sampling screenshot task</p>
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) Set <p>Output of sampling screenshot task</p>
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() Obtain <p>Image sprite output</p>
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) Set <p>Image sprite output</p>
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() Obtain <p>Adaptive bitrate streaming task output</p>
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) Set <p>Adaptive bitrate streaming task output</p>
 * @method ScheduleRecognitionTaskResult getRecognitionTask() Obtain <p>Identification task output</p>
 * @method void setRecognitionTask(ScheduleRecognitionTaskResult $RecognitionTask) Set <p>Identification task output</p>
 * @method ScheduleReviewTaskResult getReviewTask() Obtain <p>Review task output</p>
 * @method void setReviewTask(ScheduleReviewTaskResult $ReviewTask) Set <p>Review task output</p>
 * @method ScheduleAnalysisTaskResult getAnalysisTask() Obtain <p>Analysis task output</p>
 * @method void setAnalysisTask(ScheduleAnalysisTaskResult $AnalysisTask) Set <p>Analysis task output</p>
 * @method ScheduleQualityControlTaskResult getQualityControlTask() Obtain <p>Media quality inspection task output</p>
 * @method void setQualityControlTask(ScheduleQualityControlTaskResult $QualityControlTask) Set <p>Media quality inspection task output</p>
 * @method ScheduleExecRuleTaskResult getExecRuleTask() Obtain <p>Conditional judgment task output</p>
 * @method void setExecRuleTask(ScheduleExecRuleTaskResult $ExecRuleTask) Set <p>Conditional judgment task output</p>
 * @method ScheduleSmartSubtitleTaskResult getSmartSubtitlesTask() Obtain <p>Smart subtitle task output</p>
 * @method void setSmartSubtitlesTask(ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask) Set <p>Smart subtitle task output</p>
 * @method SmartEraseTaskResult getSmartEraseTask() Obtain <p>Output of the intelligent erasure task</p>
 * @method void setSmartEraseTask(SmartEraseTaskResult $SmartEraseTask) Set <p>Output of the intelligent erasure task</p>
 * @method AIDubbingTaskResult getAIDubbingTask() Obtain <p>AI dubbing task output.</p>
 * @method void setAIDubbingTask(AIDubbingTaskResult $AIDubbingTask) Set <p>AI dubbing task output.</p>
 */
class ActivityResItem extends AbstractModel
{
    /**
     * @var MediaProcessTaskTranscodeResult <p>Transcoding task output</p>
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult <p>Output of rotating image tasks</p>
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult <p>Time point screenshot task output</p>
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult <p>Output of sampling screenshot task</p>
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult <p>Image sprite output</p>
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult <p>Adaptive bitrate streaming task output</p>
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var ScheduleRecognitionTaskResult <p>Identification task output</p>
     */
    public $RecognitionTask;

    /**
     * @var ScheduleReviewTaskResult <p>Review task output</p>
     */
    public $ReviewTask;

    /**
     * @var ScheduleAnalysisTaskResult <p>Analysis task output</p>
     */
    public $AnalysisTask;

    /**
     * @var ScheduleQualityControlTaskResult <p>Media quality inspection task output</p>
     */
    public $QualityControlTask;

    /**
     * @var ScheduleExecRuleTaskResult <p>Conditional judgment task output</p>
     */
    public $ExecRuleTask;

    /**
     * @var ScheduleSmartSubtitleTaskResult <p>Smart subtitle task output</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskResult <p>Output of the intelligent erasure task</p>
     */
    public $SmartEraseTask;

    /**
     * @var AIDubbingTaskResult <p>AI dubbing task output.</p>
     */
    public $AIDubbingTask;

    /**
     * @param MediaProcessTaskTranscodeResult $TranscodeTask <p>Transcoding task output</p>
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask <p>Output of rotating image tasks</p>
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask <p>Time point screenshot task output</p>
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask <p>Output of sampling screenshot task</p>
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask <p>Image sprite output</p>
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask <p>Adaptive bitrate streaming task output</p>
     * @param ScheduleRecognitionTaskResult $RecognitionTask <p>Identification task output</p>
     * @param ScheduleReviewTaskResult $ReviewTask <p>Review task output</p>
     * @param ScheduleAnalysisTaskResult $AnalysisTask <p>Analysis task output</p>
     * @param ScheduleQualityControlTaskResult $QualityControlTask <p>Media quality inspection task output</p>
     * @param ScheduleExecRuleTaskResult $ExecRuleTask <p>Conditional judgment task output</p>
     * @param ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask <p>Smart subtitle task output</p>
     * @param SmartEraseTaskResult $SmartEraseTask <p>Output of the intelligent erasure task</p>
     * @param AIDubbingTaskResult $AIDubbingTask <p>AI dubbing task output.</p>
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

        if (array_key_exists("AIDubbingTask",$param) and $param["AIDubbingTask"] !== null) {
            $this->AIDubbingTask = new AIDubbingTaskResult();
            $this->AIDubbingTask->deserialize($param["AIDubbingTask"]);
        }
    }
}
