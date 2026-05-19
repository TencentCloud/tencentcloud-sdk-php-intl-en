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
 * MPS intelligent analysis template input
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of a video analysis template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of a video analysis template.</p>
 * @method string getName() Obtain <p>Video analysis template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Video analysis template name. The length cannot exceed 64 characters.</p>
 * @method string getComment() Obtain <p>Video analysis template description, with a length limit of 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Video analysis template description, with a length limit of 256 characters.</p>
 * @method MPSAIAnalysisConfigureInfo getClassificationConfigure() Obtain <p>Intelligent Classification Task Control Parameters.</p>
 * @method void setClassificationConfigure(MPSAIAnalysisConfigureInfo $ClassificationConfigure) Set <p>Intelligent Classification Task Control Parameters.</p>
 * @method MPSAIAnalysisConfigureInfo getTagConfigure() Obtain <p>Intelligent tag task control parameter.</p>
 * @method void setTagConfigure(MPSAIAnalysisConfigureInfo $TagConfigure) Set <p>Intelligent tag task control parameter.</p>
 * @method MPSAIAnalysisConfigureInfo getCoverConfigure() Obtain <p>Parameters for the intelligent cover task.</p>
 * @method void setCoverConfigure(MPSAIAnalysisConfigureInfo $CoverConfigure) Set <p>Parameters for the intelligent cover task.</p>
 * @method MPSAIAnalysisConfigureInfo getFrameTagConfigure() Obtain <p>Task control parameters for intelligent frame tagging.</p>
 * @method void setFrameTagConfigure(MPSAIAnalysisConfigureInfo $FrameTagConfigure) Set <p>Task control parameters for intelligent frame tagging.</p>
 * @method MPSAIAnalysisConfigureInfo getSplitConfigure() Obtain <p>Task control parameter for intelligent splitting.</p>
 * @method void setSplitConfigure(MPSAIAnalysisConfigureInfo $SplitConfigure) Set <p>Task control parameter for intelligent splitting.</p>
 * @method MPSAIAnalysisConfigureInfo getHighlightConfigure() Obtain <p>Intelligent highlights task control parameter.</p>
 * @method void setHighlightConfigure(MPSAIAnalysisConfigureInfo $HighlightConfigure) Set <p>Intelligent highlights task control parameter.</p>
 * @method MPSAIAnalysisConfigureInfo getOpeningAndEndingConfigure() Obtain <p>Parameters for the intelligent video opening/closing credits task.</p>
 * @method void setOpeningAndEndingConfigure(MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure) Set <p>Parameters for the intelligent video opening/closing credits task.</p>
 */
class MPSAIAnalysisTemplateForUpdate extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of a video analysis template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Video analysis template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Video analysis template description, with a length limit of 256 characters.</p>
     */
    public $Comment;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Intelligent Classification Task Control Parameters.</p>
     */
    public $ClassificationConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Intelligent tag task control parameter.</p>
     */
    public $TagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Parameters for the intelligent cover task.</p>
     */
    public $CoverConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Task control parameters for intelligent frame tagging.</p>
     */
    public $FrameTagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Task control parameter for intelligent splitting.</p>
     */
    public $SplitConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Intelligent highlights task control parameter.</p>
     */
    public $HighlightConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Parameters for the intelligent video opening/closing credits task.</p>
     */
    public $OpeningAndEndingConfigure;

    /**
     * @param integer $Definition <p>Unique identifier of a video analysis template.</p>
     * @param string $Name <p>Video analysis template name. The length cannot exceed 64 characters.</p>
     * @param string $Comment <p>Video analysis template description, with a length limit of 256 characters.</p>
     * @param MPSAIAnalysisConfigureInfo $ClassificationConfigure <p>Intelligent Classification Task Control Parameters.</p>
     * @param MPSAIAnalysisConfigureInfo $TagConfigure <p>Intelligent tag task control parameter.</p>
     * @param MPSAIAnalysisConfigureInfo $CoverConfigure <p>Parameters for the intelligent cover task.</p>
     * @param MPSAIAnalysisConfigureInfo $FrameTagConfigure <p>Task control parameters for intelligent frame tagging.</p>
     * @param MPSAIAnalysisConfigureInfo $SplitConfigure <p>Task control parameter for intelligent splitting.</p>
     * @param MPSAIAnalysisConfigureInfo $HighlightConfigure <p>Intelligent highlights task control parameter.</p>
     * @param MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure <p>Parameters for the intelligent video opening/closing credits task.</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ClassificationConfigure",$param) and $param["ClassificationConfigure"] !== null) {
            $this->ClassificationConfigure = new MPSAIAnalysisConfigureInfo();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new MPSAIAnalysisConfigureInfo();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new MPSAIAnalysisConfigureInfo();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new MPSAIAnalysisConfigureInfo();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("SplitConfigure",$param) and $param["SplitConfigure"] !== null) {
            $this->SplitConfigure = new MPSAIAnalysisConfigureInfo();
            $this->SplitConfigure->deserialize($param["SplitConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new MPSAIAnalysisConfigureInfo();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }

        if (array_key_exists("OpeningAndEndingConfigure",$param) and $param["OpeningAndEndingConfigure"] !== null) {
            $this->OpeningAndEndingConfigure = new MPSAIAnalysisConfigureInfo();
            $this->OpeningAndEndingConfigure->deserialize($param["OpeningAndEndingConfigure"]);
        }
    }
}
