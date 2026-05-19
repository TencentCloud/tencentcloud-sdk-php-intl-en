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
 * @method string getName() Obtain <p>Video analysis template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Video analysis template name. The length cannot exceed 64 characters.</p>
 * @method string getComment() Obtain <p>Video analysis template description, with a length limit of 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Video analysis template description, with a length limit of 256 characters.</p>
 * @method MPSAIAnalysisConfigureInfo getClassificationConfigure() Obtain <p>Parameters for the intelligent classification task.</p>
 * @method void setClassificationConfigure(MPSAIAnalysisConfigureInfo $ClassificationConfigure) Set <p>Parameters for the intelligent classification task.</p>
 * @method MPSAIAnalysisConfigureInfo getTagConfigure() Obtain <p>Control parameters for the intelligent tag task.</p>
 * @method void setTagConfigure(MPSAIAnalysisConfigureInfo $TagConfigure) Set <p>Control parameters for the intelligent tag task.</p>
 * @method MPSAIAnalysisConfigureInfo getCoverConfigure() Obtain <p>Intelligent Cover Task Control Parameters.</p>
 * @method void setCoverConfigure(MPSAIAnalysisConfigureInfo $CoverConfigure) Set <p>Intelligent Cover Task Control Parameters.</p>
 * @method MPSAIAnalysisConfigureInfo getFrameTagConfigure() Obtain <p>Control parameters for the intelligent frame-specific tagging task.</p>
 * @method void setFrameTagConfigure(MPSAIAnalysisConfigureInfo $FrameTagConfigure) Set <p>Control parameters for the intelligent frame-specific tagging task.</p>
 * @method MPSAIAnalysisConfigureInfo getSplitConfigure() Obtain <p>Task control parameters for video splitting.</p>
 * @method void setSplitConfigure(MPSAIAnalysisConfigureInfo $SplitConfigure) Set <p>Task control parameters for video splitting.</p>
 * @method MPSAIAnalysisConfigureInfo getHighlightConfigure() Obtain <p>Control parameters for the intelligent highlights task.</p>
 * @method void setHighlightConfigure(MPSAIAnalysisConfigureInfo $HighlightConfigure) Set <p>Control parameters for the intelligent highlights task.</p>
 * @method MPSAIAnalysisConfigureInfo getOpeningAndEndingConfigure() Obtain <p>Intelligent Opening and Closing Credits Task Control Parameters.</p>
 * @method void setOpeningAndEndingConfigure(MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure) Set <p>Intelligent Opening and Closing Credits Task Control Parameters.</p>
 */
class MPSAIAnalysisTemplate extends AbstractModel
{
    /**
     * @var string <p>Video analysis template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Video analysis template description, with a length limit of 256 characters.</p>
     */
    public $Comment;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Parameters for the intelligent classification task.</p>
     */
    public $ClassificationConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Control parameters for the intelligent tag task.</p>
     */
    public $TagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Intelligent Cover Task Control Parameters.</p>
     */
    public $CoverConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Control parameters for the intelligent frame-specific tagging task.</p>
     */
    public $FrameTagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Task control parameters for video splitting.</p>
     */
    public $SplitConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Control parameters for the intelligent highlights task.</p>
     */
    public $HighlightConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo <p>Intelligent Opening and Closing Credits Task Control Parameters.</p>
     */
    public $OpeningAndEndingConfigure;

    /**
     * @param string $Name <p>Video analysis template name. The length cannot exceed 64 characters.</p>
     * @param string $Comment <p>Video analysis template description, with a length limit of 256 characters.</p>
     * @param MPSAIAnalysisConfigureInfo $ClassificationConfigure <p>Parameters for the intelligent classification task.</p>
     * @param MPSAIAnalysisConfigureInfo $TagConfigure <p>Control parameters for the intelligent tag task.</p>
     * @param MPSAIAnalysisConfigureInfo $CoverConfigure <p>Intelligent Cover Task Control Parameters.</p>
     * @param MPSAIAnalysisConfigureInfo $FrameTagConfigure <p>Control parameters for the intelligent frame-specific tagging task.</p>
     * @param MPSAIAnalysisConfigureInfo $SplitConfigure <p>Task control parameters for video splitting.</p>
     * @param MPSAIAnalysisConfigureInfo $HighlightConfigure <p>Control parameters for the intelligent highlights task.</p>
     * @param MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure <p>Intelligent Opening and Closing Credits Task Control Parameters.</p>
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
