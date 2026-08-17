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
 * @method string getType() Obtain Task type. Valid values:
<li>Classification: intelligent classification.</li>
<li>Cover: intelligent cover</li>
<li>Tag: intelligent tagging.</li>
<li>FrameTag: intelligent frame tagging.</li>
<li>Highlight: Intelligent Highlights</li>
<li>DeLogo: intelligent removal.</li>
<li>Description: large model summarization.</li>
<li>Dubbing: Intelligent Dubbing</li>
<li>VideoRemake: Video deduplication</li>
<li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: Video matting</li>
<li>Reel: intelligent video editing.</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Classification: intelligent classification.</li>
<li>Cover: intelligent cover</li>
<li>Tag: intelligent tagging.</li>
<li>FrameTag: intelligent frame tagging.</li>
<li>Highlight: Intelligent Highlights</li>
<li>DeLogo: intelligent removal.</li>
<li>Description: large model summarization.</li>
<li>Dubbing: Intelligent Dubbing</li>
<li>VideoRemake: Video deduplication</li>
<li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: Video matting</li>
<li>Reel: intelligent video editing.</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() Obtain 
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) Set 
 * @method AiAnalysisTaskCoverResult getCoverTask() Obtain 
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) Set 
 * @method AiAnalysisTaskTagResult getTagTask() Obtain 
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) Set 
 * @method AiAnalysisTaskFrameTagResult getFrameTagTask() Obtain 
 * @method void setFrameTagTask(AiAnalysisTaskFrameTagResult $FrameTagTask) Set 
 * @method AiAnalysisTaskHighlightResult getHighlightTask() Obtain 
 * @method void setHighlightTask(AiAnalysisTaskHighlightResult $HighlightTask) Set 
 * @method AiAnalysisTaskDelLogoResult getDeLogoTask() Obtain 
 * @method void setDeLogoTask(AiAnalysisTaskDelLogoResult $DeLogoTask) Set 
 * @method AiAnalysisTaskSegmentResult getSegmentTask() Obtain 
 * @method void setSegmentTask(AiAnalysisTaskSegmentResult $SegmentTask) Set 
 * @method AiAnalysisTaskHeadTailResult getHeadTailTask() Obtain 
 * @method void setHeadTailTask(AiAnalysisTaskHeadTailResult $HeadTailTask) Set 
 * @method AiAnalysisTaskDescriptionResult getDescriptionTask() Obtain 
 * @method void setDescriptionTask(AiAnalysisTaskDescriptionResult $DescriptionTask) Set 
 * @method AiAnalysisTaskHorizontalToVerticalResult getHorizontalToVerticalTask() Obtain 
 * @method void setHorizontalToVerticalTask(AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask) Set 
 * @method AiAnalysisTaskDubbingResult getDubbingTask() Obtain 
 * @method void setDubbingTask(AiAnalysisTaskDubbingResult $DubbingTask) Set 
 * @method AiAnalysisTaskVideoRemakeResult getVideoRemakeTask() Obtain 
 * @method void setVideoRemakeTask(AiAnalysisTaskVideoRemakeResult $VideoRemakeTask) Set 
 * @method AiAnalysisTaskVideoComprehensionResult getVideoComprehensionTask() Obtain 
 * @method void setVideoComprehensionTask(AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask) Set 
 * @method AiAnalysisTaskCutoutResult getCutoutTask() Obtain 
 * @method void setCutoutTask(AiAnalysisTaskCutoutResult $CutoutTask) Set 
 * @method AiAnalysisTaskReelResult getReelTask() Obtain 
 * @method void setReelTask(AiAnalysisTaskReelResult $ReelTask) Set 
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Classification: intelligent classification.</li>
<li>Cover: intelligent cover</li>
<li>Tag: intelligent tagging.</li>
<li>FrameTag: intelligent frame tagging.</li>
<li>Highlight: Intelligent Highlights</li>
<li>DeLogo: intelligent removal.</li>
<li>Description: large model summarization.</li>
<li>Dubbing: Intelligent Dubbing</li>
<li>VideoRemake: Video deduplication</li>
<li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: Video matting</li>
<li>Reel: intelligent video editing.</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult 
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult 
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult 
     */
    public $TagTask;

    /**
     * @var AiAnalysisTaskFrameTagResult 
     */
    public $FrameTagTask;

    /**
     * @var AiAnalysisTaskHighlightResult 
     */
    public $HighlightTask;

    /**
     * @var AiAnalysisTaskDelLogoResult 
     */
    public $DeLogoTask;

    /**
     * @var AiAnalysisTaskSegmentResult 
     */
    public $SegmentTask;

    /**
     * @var AiAnalysisTaskHeadTailResult 
     */
    public $HeadTailTask;

    /**
     * @var AiAnalysisTaskDescriptionResult 
     */
    public $DescriptionTask;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalResult 
     */
    public $HorizontalToVerticalTask;

    /**
     * @var AiAnalysisTaskDubbingResult 
     */
    public $DubbingTask;

    /**
     * @var AiAnalysisTaskVideoRemakeResult 
     */
    public $VideoRemakeTask;

    /**
     * @var AiAnalysisTaskVideoComprehensionResult 
     */
    public $VideoComprehensionTask;

    /**
     * @var AiAnalysisTaskCutoutResult 
     */
    public $CutoutTask;

    /**
     * @var AiAnalysisTaskReelResult 
     */
    public $ReelTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Classification: intelligent classification.</li>
<li>Cover: intelligent cover</li>
<li>Tag: intelligent tagging.</li>
<li>FrameTag: intelligent frame tagging.</li>
<li>Highlight: Intelligent Highlights</li>
<li>DeLogo: intelligent removal.</li>
<li>Description: large model summarization.</li>
<li>Dubbing: Intelligent Dubbing</li>
<li>VideoRemake: Video deduplication</li>
<li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: Video matting</li>
<li>Reel: intelligent video editing.</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask 
     * @param AiAnalysisTaskCoverResult $CoverTask 
     * @param AiAnalysisTaskTagResult $TagTask 
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask 
     * @param AiAnalysisTaskHighlightResult $HighlightTask 
     * @param AiAnalysisTaskDelLogoResult $DeLogoTask 
     * @param AiAnalysisTaskSegmentResult $SegmentTask 
     * @param AiAnalysisTaskHeadTailResult $HeadTailTask 
     * @param AiAnalysisTaskDescriptionResult $DescriptionTask 
     * @param AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask 
     * @param AiAnalysisTaskDubbingResult $DubbingTask 
     * @param AiAnalysisTaskVideoRemakeResult $VideoRemakeTask 
     * @param AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask 
     * @param AiAnalysisTaskCutoutResult $CutoutTask 
     * @param AiAnalysisTaskReelResult $ReelTask 
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
    }
}
