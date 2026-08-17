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
 * Orchestrate atomic tasks
 *
 * @method TranscodeTaskInput getTranscodeTask() Obtain 
 * @method void setTranscodeTask(TranscodeTaskInput $TranscodeTask) Set 
 * @method AnimatedGraphicTaskInput getAnimatedGraphicTask() Obtain 
 * @method void setAnimatedGraphicTask(AnimatedGraphicTaskInput $AnimatedGraphicTask) Set 
 * @method SnapshotByTimeOffsetTaskInput getSnapshotByTimeOffsetTask() Obtain 
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask) Set 
 * @method SampleSnapshotTaskInput getSampleSnapshotTask() Obtain 
 * @method void setSampleSnapshotTask(SampleSnapshotTaskInput $SampleSnapshotTask) Set 
 * @method ImageSpriteTaskInput getImageSpriteTask() Obtain 
 * @method void setImageSpriteTask(ImageSpriteTaskInput $ImageSpriteTask) Set 
 * @method AdaptiveDynamicStreamingTaskInput getAdaptiveDynamicStreamingTask() Obtain 
 * @method void setAdaptiveDynamicStreamingTask(AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask) Set 
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain 
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set 
 * @method AiQualityControlTaskInput getQualityControlTask() Obtain 
 * @method void setQualityControlTask(AiQualityControlTaskInput $QualityControlTask) Set 
 * @method ExecRulesTask getExecRulesTask() Obtain 
 * @method void setExecRulesTask(ExecRulesTask $ExecRulesTask) Set 
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain 
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) Set 
 * @method SmartEraseTaskInput getSmartEraseTask() Obtain 
 * @method void setSmartEraseTask(SmartEraseTaskInput $SmartEraseTask) Set 
 */
class ActivityPara extends AbstractModel
{
    /**
     * @var TranscodeTaskInput 
     */
    public $TranscodeTask;

    /**
     * @var AnimatedGraphicTaskInput 
     */
    public $AnimatedGraphicTask;

    /**
     * @var SnapshotByTimeOffsetTaskInput 
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var SampleSnapshotTaskInput 
     */
    public $SampleSnapshotTask;

    /**
     * @var ImageSpriteTaskInput 
     */
    public $ImageSpriteTask;

    /**
     * @var AdaptiveDynamicStreamingTaskInput 
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var AiContentReviewTaskInput 
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput 
     */
    public $QualityControlTask;

    /**
     * @var ExecRulesTask 
     */
    public $ExecRulesTask;

    /**
     * @var SmartSubtitlesTaskInput 
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskInput 
     */
    public $SmartEraseTask;

    /**
     * @param TranscodeTaskInput $TranscodeTask 
     * @param AnimatedGraphicTaskInput $AnimatedGraphicTask 
     * @param SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask 
     * @param SampleSnapshotTaskInput $SampleSnapshotTask 
     * @param ImageSpriteTaskInput $ImageSpriteTask 
     * @param AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param AiQualityControlTaskInput $QualityControlTask 
     * @param ExecRulesTask $ExecRulesTask 
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask 
     * @param SmartEraseTaskInput $SmartEraseTask 
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

        if (array_key_exists("ExecRulesTask",$param) and $param["ExecRulesTask"] !== null) {
            $this->ExecRulesTask = new ExecRulesTask();
            $this->ExecRulesTask->deserialize($param["ExecRulesTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new SmartEraseTaskInput();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }
    }
}
