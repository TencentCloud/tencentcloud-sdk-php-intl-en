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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
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
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string 
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
     * @param string $Type 
     * @param AiAnalysisTaskClassificationResult $ClassificationTask 
     * @param AiAnalysisTaskCoverResult $CoverTask 
     * @param AiAnalysisTaskTagResult $TagTask 
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask 
     * @param AiAnalysisTaskHighlightResult $HighlightTask 
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
