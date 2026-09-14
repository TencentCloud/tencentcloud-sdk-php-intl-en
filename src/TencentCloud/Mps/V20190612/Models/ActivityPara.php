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
 * 
 *
 * @method TranscodeTaskInput getTranscodeTask() Obtain <p>Video transcoding task</p>
 * @method void setTranscodeTask(TranscodeTaskInput $TranscodeTask) Set <p>Video transcoding task</p>
 * @method AnimatedGraphicTaskInput getAnimatedGraphicTask() Obtain <p>Video-to-GIF task</p>
 * @method void setAnimatedGraphicTask(AnimatedGraphicTaskInput $AnimatedGraphicTask) Set <p>Video-to-GIF task</p>
 * @method SnapshotByTimeOffsetTaskInput getSnapshotByTimeOffsetTask() Obtain <p>Video time point screenshot task</p>
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask) Set <p>Video time point screenshot task</p>
 * @method SampleSnapshotTaskInput getSampleSnapshotTask() Obtain <p>Video sampling screenshot task</p>
 * @method void setSampleSnapshotTask(SampleSnapshotTaskInput $SampleSnapshotTask) Set <p>Video sampling screenshot task</p>
 * @method ImageSpriteTaskInput getImageSpriteTask() Obtain <p>Video image sprite task</p>
 * @method void setImageSpriteTask(ImageSpriteTaskInput $ImageSpriteTask) Set <p>Video image sprite task</p>
 * @method AdaptiveDynamicStreamingTaskInput getAdaptiveDynamicStreamingTask() Obtain <p>Adaptive bitrate streaming task</p>
 * @method void setAdaptiveDynamicStreamingTask(AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask) Set <p>Adaptive bitrate streaming task</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain <p>Video content review task</p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set <p>Video content review task</p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain <p>Video content analysis task</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set <p>Video content analysis task</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain <p>Video content recognition task</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set <p>Video content recognition task</p>
 * @method AiQualityControlTaskInput getQualityControlTask() Obtain <p>Media quality inspection task</p>
 * @method void setQualityControlTask(AiQualityControlTaskInput $QualityControlTask) Set <p>Media quality inspection task</p>
 * @method ExecRulesTask getExecRulesTask() Obtain <p>Conditional judgment of the task.</p>
 * @method void setExecRulesTask(ExecRulesTask $ExecRulesTask) Set <p>Conditional judgment of the task.</p>
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain <p>Smart subtitle task.</p>
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) Set <p>Smart subtitle task.</p>
 * @method SmartEraseTaskInput getSmartEraseTask() Obtain <p>Intelligent erasure task</p>
 * @method void setSmartEraseTask(SmartEraseTaskInput $SmartEraseTask) Set <p>Intelligent erasure task</p>
 * @method AIDubbingTaskInput getAIDubbingTask() Obtain <p>AI Dubbing task.</p>
 * @method void setAIDubbingTask(AIDubbingTaskInput $AIDubbingTask) Set <p>AI Dubbing task.</p>
 */
class ActivityPara extends AbstractModel
{
    /**
     * @var TranscodeTaskInput <p>Video transcoding task</p>
     */
    public $TranscodeTask;

    /**
     * @var AnimatedGraphicTaskInput <p>Video-to-GIF task</p>
     */
    public $AnimatedGraphicTask;

    /**
     * @var SnapshotByTimeOffsetTaskInput <p>Video time point screenshot task</p>
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var SampleSnapshotTaskInput <p>Video sampling screenshot task</p>
     */
    public $SampleSnapshotTask;

    /**
     * @var ImageSpriteTaskInput <p>Video image sprite task</p>
     */
    public $ImageSpriteTask;

    /**
     * @var AdaptiveDynamicStreamingTaskInput <p>Adaptive bitrate streaming task</p>
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var AiContentReviewTaskInput <p>Video content review task</p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>Video content analysis task</p>
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput <p>Video content recognition task</p>
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput <p>Media quality inspection task</p>
     */
    public $QualityControlTask;

    /**
     * @var ExecRulesTask <p>Conditional judgment of the task.</p>
     */
    public $ExecRulesTask;

    /**
     * @var SmartSubtitlesTaskInput <p>Smart subtitle task.</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskInput <p>Intelligent erasure task</p>
     */
    public $SmartEraseTask;

    /**
     * @var AIDubbingTaskInput <p>AI Dubbing task.</p>
     */
    public $AIDubbingTask;

    /**
     * @param TranscodeTaskInput $TranscodeTask <p>Video transcoding task</p>
     * @param AnimatedGraphicTaskInput $AnimatedGraphicTask <p>Video-to-GIF task</p>
     * @param SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask <p>Video time point screenshot task</p>
     * @param SampleSnapshotTaskInput $SampleSnapshotTask <p>Video sampling screenshot task</p>
     * @param ImageSpriteTaskInput $ImageSpriteTask <p>Video image sprite task</p>
     * @param AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask <p>Adaptive bitrate streaming task</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>Video content review task</p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>Video content analysis task</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>Video content recognition task</p>
     * @param AiQualityControlTaskInput $QualityControlTask <p>Media quality inspection task</p>
     * @param ExecRulesTask $ExecRulesTask <p>Conditional judgment of the task.</p>
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask <p>Smart subtitle task.</p>
     * @param SmartEraseTaskInput $SmartEraseTask <p>Intelligent erasure task</p>
     * @param AIDubbingTaskInput $AIDubbingTask <p>AI Dubbing task.</p>
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

        if (array_key_exists("AIDubbingTask",$param) and $param["AIDubbingTask"] !== null) {
            $this->AIDubbingTask = new AIDubbingTaskInput();
            $this->AIDubbingTask->deserialize($param["AIDubbingTask"]);
        }
    }
}
