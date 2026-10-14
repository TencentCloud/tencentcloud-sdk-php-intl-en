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
 * Intelligent analysis result
 *
 * @method string getType() Obtain <p>Task type. Valid values:</p><li>Classification: intelligent classification</li><li>Cover: intelligent cover</li><li>Tag: intelligent tag</li><li>FrameTag: intelligent frame tagging</li><li>Highlight: intelligent highlights</li><li>DeLogo: smart erasing</li><li>Description: LLM summarization</li><li>Dubbing: intelligent dubbing</li><li>VideoRemake: video deduplication</li><li>VideoComprehension: video (audio) understanding</li><li>Cutout: video matting</li><li>Reel: intelligent video creation</li>
 * @method void setType(string $Type) Set <p>Task type. Valid values:</p><li>Classification: intelligent classification</li><li>Cover: intelligent cover</li><li>Tag: intelligent tag</li><li>FrameTag: intelligent frame tagging</li><li>Highlight: intelligent highlights</li><li>DeLogo: smart erasing</li><li>Description: LLM summarization</li><li>Dubbing: intelligent dubbing</li><li>VideoRemake: video deduplication</li><li>VideoComprehension: video (audio) understanding</li><li>Cutout: video matting</li><li>Reel: intelligent video creation</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() Obtain <p>Query result of the video content analysis intelligent categorization task. Valid when the task type is Classification.</p>
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) Set <p>Query result of the video content analysis intelligent categorization task. Valid when the task type is Classification.</p>
 * @method AiAnalysisTaskCoverResult getCoverTask() Obtain <p>Query result of the video content analysis Intelligent Cover Task. Valid when the task type is Cover.</p>
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) Set <p>Query result of the video content analysis Intelligent Cover Task. Valid when the task type is Cover.</p>
 * @method AiAnalysisTaskTagResult getTagTask() Obtain <p>Query result of the video content analysis intelligent tag task. Valid when the task type is Tag.</p>
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) Set <p>Query result of the video content analysis intelligent tag task. Valid when the task type is Tag.</p>
 * @method AiAnalysisTaskFrameTagResult getFrameTagTask() Obtain <p>Query result of the intelligent frame tagging task for video content analysis. Valid when the task type is FrameTag.</p>
 * @method void setFrameTagTask(AiAnalysisTaskFrameTagResult $FrameTagTask) Set <p>Query result of the intelligent frame tagging task for video content analysis. Valid when the task type is FrameTag.</p>
 * @method AiAnalysisTaskHighlightResult getHighlightTask() Obtain <p>Query result of the video content analysis highlight task. Valid when the task type is Highlight.</p>
 * @method void setHighlightTask(AiAnalysisTaskHighlightResult $HighlightTask) Set <p>Query result of the video content analysis highlight task. Valid when the task type is Highlight.</p>
 * @method AiAnalysisTaskDelLogoResult getDeLogoTask() Obtain <p>Query result of the video content analysis smart erasing task. Valid when the task type is DeLogo.</p>
 * @method void setDeLogoTask(AiAnalysisTaskDelLogoResult $DeLogoTask) Set <p>Query result of the video content analysis smart erasing task. Valid when the task type is DeLogo.</p>
 * @method AiAnalysisTaskSegmentResult getSegmentTask() Obtain <p>The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.</p>
 * @method void setSegmentTask(AiAnalysisTaskSegmentResult $SegmentTask) Set <p>The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.</p>
 * @method AiAnalysisTaskHeadTailResult getHeadTailTask() Obtain <p>The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.</p>
 * @method void setHeadTailTask(AiAnalysisTaskHeadTailResult $HeadTailTask) Set <p>The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.</p>
 * @method AiAnalysisTaskDescriptionResult getDescriptionTask() Obtain <p>The query result of a video content analysis summary task, valid when the task type is Description.</p>
 * @method void setDescriptionTask(AiAnalysisTaskDescriptionResult $DescriptionTask) Set <p>The query result of a video content analysis summary task, valid when the task type is Description.</p>
 * @method AiAnalysisTaskHorizontalToVerticalResult getHorizontalToVerticalTask() Obtain <p>The query result of a landscape-to-portrait task for video content analysis, which is valid when the task type is HorizontalToVertical.</p>
 * @method void setHorizontalToVerticalTask(AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask) Set <p>The query result of a landscape-to-portrait task for video content analysis, which is valid when the task type is HorizontalToVertical.</p>
 * @method AiAnalysisTaskDubbingResult getDubbingTask() Obtain <p>Query result of the video content analysis dubbing task. Valid when the task type is Dubbing.</p>
 * @method void setDubbingTask(AiAnalysisTaskDubbingResult $DubbingTask) Set <p>Query result of the video content analysis dubbing task. Valid when the task type is Dubbing.</p>
 * @method AiAnalysisTaskVideoRemakeResult getVideoRemakeTask() Obtain <p>The query result of a deduplication task for video content analysis, which is valid when the task type is VideoRemake.</p>
 * @method void setVideoRemakeTask(AiAnalysisTaskVideoRemakeResult $VideoRemakeTask) Set <p>The query result of a deduplication task for video content analysis, which is valid when the task type is VideoRemake.</p>
 * @method AiAnalysisTaskVideoComprehensionResult getVideoComprehensionTask() Obtain <p>Query result of the video (audio) understanding task. This parameter is valid when the task type is VideoComprehension.</p>
 * @method void setVideoComprehensionTask(AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask) Set <p>Query result of the video (audio) understanding task. This parameter is valid when the task type is VideoComprehension.</p>
 * @method AiAnalysisTaskCutoutResult getCutoutTask() Obtain <p>Query result of the video content analysis intelligent image masking task. Valid when the task type is Cutout.</p>
 * @method void setCutoutTask(AiAnalysisTaskCutoutResult $CutoutTask) Set <p>Query result of the video content analysis intelligent image masking task. Valid when the task type is Cutout.</p>
 * @method AiAnalysisTaskReelResult getReelTask() Obtain <p>Query result of the video content analysis AI narration and video re-creation task. Valid when the task type is Reel.</p>
 * @method void setReelTask(AiAnalysisTaskReelResult $ReelTask) Set <p>Query result of the video content analysis AI narration and video re-creation task. Valid when the task type is Reel.</p>
 * @method AiAnalysisTaskGenericResult getGenericTask() Obtain <p>Query result of the intelligent analysis common task. Valid when the task type is Generic.</p>
 * @method void setGenericTask(AiAnalysisTaskGenericResult $GenericTask) Set <p>Query result of the intelligent analysis common task. Valid when the task type is Generic.</p>
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string <p>Task type. Valid values:</p><li>Classification: intelligent classification</li><li>Cover: intelligent cover</li><li>Tag: intelligent tag</li><li>FrameTag: intelligent frame tagging</li><li>Highlight: intelligent highlights</li><li>DeLogo: smart erasing</li><li>Description: LLM summarization</li><li>Dubbing: intelligent dubbing</li><li>VideoRemake: video deduplication</li><li>VideoComprehension: video (audio) understanding</li><li>Cutout: video matting</li><li>Reel: intelligent video creation</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult <p>Query result of the video content analysis intelligent categorization task. Valid when the task type is Classification.</p>
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult <p>Query result of the video content analysis Intelligent Cover Task. Valid when the task type is Cover.</p>
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult <p>Query result of the video content analysis intelligent tag task. Valid when the task type is Tag.</p>
     */
    public $TagTask;

    /**
     * @var AiAnalysisTaskFrameTagResult <p>Query result of the intelligent frame tagging task for video content analysis. Valid when the task type is FrameTag.</p>
     */
    public $FrameTagTask;

    /**
     * @var AiAnalysisTaskHighlightResult <p>Query result of the video content analysis highlight task. Valid when the task type is Highlight.</p>
     */
    public $HighlightTask;

    /**
     * @var AiAnalysisTaskDelLogoResult <p>Query result of the video content analysis smart erasing task. Valid when the task type is DeLogo.</p>
     */
    public $DeLogoTask;

    /**
     * @var AiAnalysisTaskSegmentResult <p>The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.</p>
     */
    public $SegmentTask;

    /**
     * @var AiAnalysisTaskHeadTailResult <p>The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.</p>
     */
    public $HeadTailTask;

    /**
     * @var AiAnalysisTaskDescriptionResult <p>The query result of a video content analysis summary task, valid when the task type is Description.</p>
     */
    public $DescriptionTask;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalResult <p>The query result of a landscape-to-portrait task for video content analysis, which is valid when the task type is HorizontalToVertical.</p>
     */
    public $HorizontalToVerticalTask;

    /**
     * @var AiAnalysisTaskDubbingResult <p>Query result of the video content analysis dubbing task. Valid when the task type is Dubbing.</p>
     */
    public $DubbingTask;

    /**
     * @var AiAnalysisTaskVideoRemakeResult <p>The query result of a deduplication task for video content analysis, which is valid when the task type is VideoRemake.</p>
     */
    public $VideoRemakeTask;

    /**
     * @var AiAnalysisTaskVideoComprehensionResult <p>Query result of the video (audio) understanding task. This parameter is valid when the task type is VideoComprehension.</p>
     */
    public $VideoComprehensionTask;

    /**
     * @var AiAnalysisTaskCutoutResult <p>Query result of the video content analysis intelligent image masking task. Valid when the task type is Cutout.</p>
     */
    public $CutoutTask;

    /**
     * @var AiAnalysisTaskReelResult <p>Query result of the video content analysis AI narration and video re-creation task. Valid when the task type is Reel.</p>
     */
    public $ReelTask;

    /**
     * @var AiAnalysisTaskGenericResult <p>Query result of the intelligent analysis common task. Valid when the task type is Generic.</p>
     */
    public $GenericTask;

    /**
     * @param string $Type <p>Task type. Valid values:</p><li>Classification: intelligent classification</li><li>Cover: intelligent cover</li><li>Tag: intelligent tag</li><li>FrameTag: intelligent frame tagging</li><li>Highlight: intelligent highlights</li><li>DeLogo: smart erasing</li><li>Description: LLM summarization</li><li>Dubbing: intelligent dubbing</li><li>VideoRemake: video deduplication</li><li>VideoComprehension: video (audio) understanding</li><li>Cutout: video matting</li><li>Reel: intelligent video creation</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask <p>Query result of the video content analysis intelligent categorization task. Valid when the task type is Classification.</p>
     * @param AiAnalysisTaskCoverResult $CoverTask <p>Query result of the video content analysis Intelligent Cover Task. Valid when the task type is Cover.</p>
     * @param AiAnalysisTaskTagResult $TagTask <p>Query result of the video content analysis intelligent tag task. Valid when the task type is Tag.</p>
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask <p>Query result of the intelligent frame tagging task for video content analysis. Valid when the task type is FrameTag.</p>
     * @param AiAnalysisTaskHighlightResult $HighlightTask <p>Query result of the video content analysis highlight task. Valid when the task type is Highlight.</p>
     * @param AiAnalysisTaskDelLogoResult $DeLogoTask <p>Query result of the video content analysis smart erasing task. Valid when the task type is DeLogo.</p>
     * @param AiAnalysisTaskSegmentResult $SegmentTask <p>The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.</p>
     * @param AiAnalysisTaskHeadTailResult $HeadTailTask <p>The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.</p>
     * @param AiAnalysisTaskDescriptionResult $DescriptionTask <p>The query result of a video content analysis summary task, valid when the task type is Description.</p>
     * @param AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask <p>The query result of a landscape-to-portrait task for video content analysis, which is valid when the task type is HorizontalToVertical.</p>
     * @param AiAnalysisTaskDubbingResult $DubbingTask <p>Query result of the video content analysis dubbing task. Valid when the task type is Dubbing.</p>
     * @param AiAnalysisTaskVideoRemakeResult $VideoRemakeTask <p>The query result of a deduplication task for video content analysis, which is valid when the task type is VideoRemake.</p>
     * @param AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask <p>Query result of the video (audio) understanding task. This parameter is valid when the task type is VideoComprehension.</p>
     * @param AiAnalysisTaskCutoutResult $CutoutTask <p>Query result of the video content analysis intelligent image masking task. Valid when the task type is Cutout.</p>
     * @param AiAnalysisTaskReelResult $ReelTask <p>Query result of the video content analysis AI narration and video re-creation task. Valid when the task type is Reel.</p>
     * @param AiAnalysisTaskGenericResult $GenericTask <p>Query result of the intelligent analysis common task. Valid when the task type is Generic.</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassificationTask",$param) and $param["ClassificationTask"] !== null) {
            $this->ClassificationTask = new AiAnalysisTaskClassificationResult();
            $this->ClassificationTask->deserialize($param["ClassificationTask"]);
        }

        if (array_key_exists("CoverTask",$param) and $param["CoverTask"] !== null) {
            $this->CoverTask = new AiAnalysisTaskCoverResult();
            $this->CoverTask->deserialize($param["CoverTask"]);
        }

        if (array_key_exists("TagTask",$param) and $param["TagTask"] !== null) {
            $this->TagTask = new AiAnalysisTaskTagResult();
            $this->TagTask->deserialize($param["TagTask"]);
        }

        if (array_key_exists("FrameTagTask",$param) and $param["FrameTagTask"] !== null) {
            $this->FrameTagTask = new AiAnalysisTaskFrameTagResult();
            $this->FrameTagTask->deserialize($param["FrameTagTask"]);
        }

        if (array_key_exists("HighlightTask",$param) and $param["HighlightTask"] !== null) {
            $this->HighlightTask = new AiAnalysisTaskHighlightResult();
            $this->HighlightTask->deserialize($param["HighlightTask"]);
        }

        if (array_key_exists("DeLogoTask",$param) and $param["DeLogoTask"] !== null) {
            $this->DeLogoTask = new AiAnalysisTaskDelLogoResult();
            $this->DeLogoTask->deserialize($param["DeLogoTask"]);
        }

        if (array_key_exists("SegmentTask",$param) and $param["SegmentTask"] !== null) {
            $this->SegmentTask = new AiAnalysisTaskSegmentResult();
            $this->SegmentTask->deserialize($param["SegmentTask"]);
        }

        if (array_key_exists("HeadTailTask",$param) and $param["HeadTailTask"] !== null) {
            $this->HeadTailTask = new AiAnalysisTaskHeadTailResult();
            $this->HeadTailTask->deserialize($param["HeadTailTask"]);
        }

        if (array_key_exists("DescriptionTask",$param) and $param["DescriptionTask"] !== null) {
            $this->DescriptionTask = new AiAnalysisTaskDescriptionResult();
            $this->DescriptionTask->deserialize($param["DescriptionTask"]);
        }

        if (array_key_exists("HorizontalToVerticalTask",$param) and $param["HorizontalToVerticalTask"] !== null) {
            $this->HorizontalToVerticalTask = new AiAnalysisTaskHorizontalToVerticalResult();
            $this->HorizontalToVerticalTask->deserialize($param["HorizontalToVerticalTask"]);
        }

        if (array_key_exists("DubbingTask",$param) and $param["DubbingTask"] !== null) {
            $this->DubbingTask = new AiAnalysisTaskDubbingResult();
            $this->DubbingTask->deserialize($param["DubbingTask"]);
        }

        if (array_key_exists("VideoRemakeTask",$param) and $param["VideoRemakeTask"] !== null) {
            $this->VideoRemakeTask = new AiAnalysisTaskVideoRemakeResult();
            $this->VideoRemakeTask->deserialize($param["VideoRemakeTask"]);
        }

        if (array_key_exists("VideoComprehensionTask",$param) and $param["VideoComprehensionTask"] !== null) {
            $this->VideoComprehensionTask = new AiAnalysisTaskVideoComprehensionResult();
            $this->VideoComprehensionTask->deserialize($param["VideoComprehensionTask"]);
        }

        if (array_key_exists("CutoutTask",$param) and $param["CutoutTask"] !== null) {
            $this->CutoutTask = new AiAnalysisTaskCutoutResult();
            $this->CutoutTask->deserialize($param["CutoutTask"]);
        }

        if (array_key_exists("ReelTask",$param) and $param["ReelTask"] !== null) {
            $this->ReelTask = new AiAnalysisTaskReelResult();
            $this->ReelTask->deserialize($param["ReelTask"]);
        }

        if (array_key_exists("GenericTask",$param) and $param["GenericTask"] !== null) {
            $this->GenericTask = new AiAnalysisTaskGenericResult();
            $this->GenericTask->deserialize($param["GenericTask"]);
        }
    }
}
