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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent analysis result
 *
 * @method string getType() Obtain Task type. Valid values:
<li>Classification: intelligent categorization</li>
<li>Cover: intelligent cover generating</li>
<li>Tag: intelligent tagging</li>
<li>FrameTag: intelligent frame tagging</li>
<li>Highlight: intelligent highlight generating</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<li>Classification: intelligent categorization</li>
<li>Cover: intelligent cover generating</li>
<li>Tag: intelligent tagging</li>
<li>FrameTag: intelligent frame tagging</li>
<li>Highlight: intelligent highlight generating</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() Obtain Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) Set Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskCoverResult getCoverTask() Obtain Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) Set Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskTagResult getTagTask() Obtain Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) Set Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskFrameTagResult getFrameTagTask() Obtain Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrameTagTask(AiAnalysisTaskFrameTagResult $FrameTagTask) Set Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskHighlightResult getHighlightTask() Obtain Query result of an intelligent highlight generating task in video content analysis, which is valid when task type is `Highlight`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHighlightTask(AiAnalysisTaskHighlightResult $HighlightTask) Set Query result of an intelligent highlight generating task in video content analysis, which is valid when task type is `Highlight`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<li>Classification: intelligent categorization</li>
<li>Cover: intelligent cover generating</li>
<li>Tag: intelligent tagging</li>
<li>FrameTag: intelligent frame tagging</li>
<li>Highlight: intelligent highlight generating</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagTask;

    /**
     * @var AiAnalysisTaskFrameTagResult Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FrameTagTask;

    /**
     * @var AiAnalysisTaskHighlightResult Query result of an intelligent highlight generating task in video content analysis, which is valid when task type is `Highlight`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HighlightTask;

    /**
     * @param string $Type Task type. Valid values:
<li>Classification: intelligent categorization</li>
<li>Cover: intelligent cover generating</li>
<li>Tag: intelligent tagging</li>
<li>FrameTag: intelligent frame tagging</li>
<li>Highlight: intelligent highlight generating</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask Query result of intelligent categorization task in video content analysis, which is valid if task type is `Classification`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskCoverResult $CoverTask Query result of intelligent cover generating task in video content analysis, which is valid if task type is `Cover`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskTagResult $TagTask Query result of intelligent tagging task in video content analysis, which is valid if task type is `Tag`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask Query result of intelligent frame-specific tagging task in video content analysis, which is valid if task type is `FrameTag`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskHighlightResult $HighlightTask Query result of an intelligent highlight generating task in video content analysis, which is valid when task type is `Highlight`.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
