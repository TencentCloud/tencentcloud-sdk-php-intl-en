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
 * Intelligent analysis results
 *
 * @method string getType() Obtain Task type. Valid values:<li>Classification: intelligent classification.</li><li>Cover: intelligent cover.</li><li>Tag: intelligent tagging.</li><li>FrameTag: intelligent frame-level tagging.</li><li>Highlight: intelligent highlights.</li><li>DeLogo: intelligent removal.</li><li>Description: LLM summarization.</li><li>Dubbing: intelligent dubbing.</li><li>VideoRemake: video recreation.</li><li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: video matting.</li><li>Reel: intelligent video editing.</li>
 * @method void setType(string $Type) Set Task type. Valid values:<li>Classification: intelligent classification.</li><li>Cover: intelligent cover.</li><li>Tag: intelligent tagging.</li><li>FrameTag: intelligent frame-level tagging.</li><li>Highlight: intelligent highlights.</li><li>DeLogo: intelligent removal.</li><li>Description: LLM summarization.</li><li>Dubbing: intelligent dubbing.</li><li>VideoRemake: video recreation.</li><li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: video matting.</li><li>Reel: intelligent video editing.</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() Obtain Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) Set Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
 * @method AiAnalysisTaskCoverResult getCoverTask() Obtain Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) Set Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
 * @method AiAnalysisTaskTagResult getTagTask() Obtain Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) Set Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
 * @method AiAnalysisTaskFrameTagResult getFrameTagTask() Obtain Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
 * @method void setFrameTagTask(AiAnalysisTaskFrameTagResult $FrameTagTask) Set Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
 * @method AiAnalysisTaskHighlightResult getHighlightTask() Obtain The result of a highlight generation task. This parameter is valid if `Type` is `Highlight`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHighlightTask(AiAnalysisTaskHighlightResult $HighlightTask) Set The result of a highlight generation task. This parameter is valid if `Type` is `Highlight`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskDelLogoResult getDeLogoTask() Obtain The query result of an intelligent removal task for video analysis, which is valid when the task type is DeLogo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeLogoTask(AiAnalysisTaskDelLogoResult $DeLogoTask) Set The query result of an intelligent removal task for video analysis, which is valid when the task type is DeLogo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskSegmentResult getSegmentTask() Obtain The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentTask(AiAnalysisTaskSegmentResult $SegmentTask) Set The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskHeadTailResult getHeadTailTask() Obtain The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeadTailTask(AiAnalysisTaskHeadTailResult $HeadTailTask) Set The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskDescriptionResult getDescriptionTask() Obtain The query result of a video analysis summarization task, which is valid when the task type is Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescriptionTask(AiAnalysisTaskDescriptionResult $DescriptionTask) Set The query result of a video analysis summarization task, which is valid when the task type is Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskHorizontalToVerticalResult getHorizontalToVerticalTask() Obtain The query result of a landscape-to-portrait task for video analysis, which is valid when the task type is HorizontalToVertical.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHorizontalToVerticalTask(AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask) Set The query result of a landscape-to-portrait task for video analysis, which is valid when the task type is HorizontalToVertical.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskDubbingResult getDubbingTask() Obtain The query result of a Dubbing task for video content analysis, which is valid when the task type is Dubbing.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDubbingTask(AiAnalysisTaskDubbingResult $DubbingTask) Set The query result of a Dubbing task for video content analysis, which is valid when the task type is Dubbing.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AiAnalysisTaskVideoRemakeResult getVideoRemakeTask() Obtain The query result of a video content deduplication task, which is valid when the task type is VideoRemake.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVideoRemakeTask(AiAnalysisTaskVideoRemakeResult $VideoRemakeTask) Set The query result of a video content deduplication task, which is valid when the task type is VideoRemake.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AiAnalysisTaskVideoComprehensionResult getVideoComprehensionTask() Obtain Query result of the video (audio) recognition task. This parameter is valid when the task type is VideoComprehension.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoComprehensionTask(AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask) Set Query result of the video (audio) recognition task. This parameter is valid when the task type is VideoComprehension.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskCutoutResult getCutoutTask() Obtain Query result of a video matting task for video analysis, which is valid if the task type is Cutout.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCutoutTask(AiAnalysisTaskCutoutResult $CutoutTask) Set Query result of a video matting task for video analysis, which is valid if the task type is Cutout.Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskReelResult getReelTask() Obtain Query result of a video editing task for video analysis, which is valid if the task type is Reel.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReelTask(AiAnalysisTaskReelResult $ReelTask) Set Query result of a video editing task for video analysis, which is valid if the task type is Reel.Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:<li>Classification: intelligent classification.</li><li>Cover: intelligent cover.</li><li>Tag: intelligent tagging.</li><li>FrameTag: intelligent frame-level tagging.</li><li>Highlight: intelligent highlights.</li><li>DeLogo: intelligent removal.</li><li>Description: LLM summarization.</li><li>Dubbing: intelligent dubbing.</li><li>VideoRemake: video recreation.</li><li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: video matting.</li><li>Reel: intelligent video editing.</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
     */
    public $TagTask;

    /**
     * @var AiAnalysisTaskFrameTagResult Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
     */
    public $FrameTagTask;

    /**
     * @var AiAnalysisTaskHighlightResult The result of a highlight generation task. This parameter is valid if `Type` is `Highlight`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HighlightTask;

    /**
     * @var AiAnalysisTaskDelLogoResult The query result of an intelligent removal task for video analysis, which is valid when the task type is DeLogo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeLogoTask;

    /**
     * @var AiAnalysisTaskSegmentResult The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentTask;

    /**
     * @var AiAnalysisTaskHeadTailResult The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeadTailTask;

    /**
     * @var AiAnalysisTaskDescriptionResult The query result of a video analysis summarization task, which is valid when the task type is Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DescriptionTask;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalResult The query result of a landscape-to-portrait task for video analysis, which is valid when the task type is HorizontalToVertical.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HorizontalToVerticalTask;

    /**
     * @var AiAnalysisTaskDubbingResult The query result of a Dubbing task for video content analysis, which is valid when the task type is Dubbing.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DubbingTask;

    /**
     * @var AiAnalysisTaskVideoRemakeResult The query result of a video content deduplication task, which is valid when the task type is VideoRemake.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VideoRemakeTask;

    /**
     * @var AiAnalysisTaskVideoComprehensionResult Query result of the video (audio) recognition task. This parameter is valid when the task type is VideoComprehension.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoComprehensionTask;

    /**
     * @var AiAnalysisTaskCutoutResult Query result of a video matting task for video analysis, which is valid if the task type is Cutout.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CutoutTask;

    /**
     * @var AiAnalysisTaskReelResult Query result of a video editing task for video analysis, which is valid if the task type is Reel.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReelTask;

    /**
     * @param string $Type Task type. Valid values:<li>Classification: intelligent classification.</li><li>Cover: intelligent cover.</li><li>Tag: intelligent tagging.</li><li>FrameTag: intelligent frame-level tagging.</li><li>Highlight: intelligent highlights.</li><li>DeLogo: intelligent removal.</li><li>Description: LLM summarization.</li><li>Dubbing: intelligent dubbing.</li><li>VideoRemake: video recreation.</li><li>VideoComprehension: video (audio) recognition.</li>
<li>Cutout: video matting.</li><li>Reel: intelligent video editing.</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
     * @param AiAnalysisTaskCoverResult $CoverTask Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
     * @param AiAnalysisTaskTagResult $TagTask Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
     * @param AiAnalysisTaskHighlightResult $HighlightTask The result of a highlight generation task. This parameter is valid if `Type` is `Highlight`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskDelLogoResult $DeLogoTask The query result of an intelligent removal task for video analysis, which is valid when the task type is DeLogo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskSegmentResult $SegmentTask The query result of a splitting task for video analysis, which is valid when the task type is SegmentRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskHeadTailResult $HeadTailTask The query result of an opening and closing segments recognition task for video analysis, which is valid when the task type is HeadTailRecognition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskDescriptionResult $DescriptionTask The query result of a video analysis summarization task, which is valid when the task type is Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask The query result of a landscape-to-portrait task for video analysis, which is valid when the task type is HorizontalToVertical.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskDubbingResult $DubbingTask The query result of a Dubbing task for video content analysis, which is valid when the task type is Dubbing.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AiAnalysisTaskVideoRemakeResult $VideoRemakeTask The query result of a video content deduplication task, which is valid when the task type is VideoRemake.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AiAnalysisTaskVideoComprehensionResult $VideoComprehensionTask Query result of the video (audio) recognition task. This parameter is valid when the task type is VideoComprehension.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskCutoutResult $CutoutTask Query result of a video matting task for video analysis, which is valid if the task type is Cutout.Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskReelResult $ReelTask Query result of a video editing task for video analysis, which is valid if the task type is Reel.Note: This field may return null, indicating that no valid values can be obtained.
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
