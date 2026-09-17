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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method MPSAIAnalysisConfigureInfo getClassificationConfigure() Obtain 
 * @method void setClassificationConfigure(MPSAIAnalysisConfigureInfo $ClassificationConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getTagConfigure() Obtain 
 * @method void setTagConfigure(MPSAIAnalysisConfigureInfo $TagConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getCoverConfigure() Obtain 
 * @method void setCoverConfigure(MPSAIAnalysisConfigureInfo $CoverConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getFrameTagConfigure() Obtain 
 * @method void setFrameTagConfigure(MPSAIAnalysisConfigureInfo $FrameTagConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getSplitConfigure() Obtain 
 * @method void setSplitConfigure(MPSAIAnalysisConfigureInfo $SplitConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getHighlightConfigure() Obtain 
 * @method void setHighlightConfigure(MPSAIAnalysisConfigureInfo $HighlightConfigure) Set 
 * @method MPSAIAnalysisConfigureInfo getOpeningAndEndingConfigure() Obtain 
 * @method void setOpeningAndEndingConfigure(MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure) Set 
 */
class MPSAIAnalysisTemplateForUpdate extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $ClassificationConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $TagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $CoverConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $FrameTagConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $SplitConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $HighlightConfigure;

    /**
     * @var MPSAIAnalysisConfigureInfo 
     */
    public $OpeningAndEndingConfigure;

    /**
     * @param integer $Definition 
     * @param string $Name 
     * @param string $Comment 
     * @param MPSAIAnalysisConfigureInfo $ClassificationConfigure 
     * @param MPSAIAnalysisConfigureInfo $TagConfigure 
     * @param MPSAIAnalysisConfigureInfo $CoverConfigure 
     * @param MPSAIAnalysisConfigureInfo $FrameTagConfigure 
     * @param MPSAIAnalysisConfigureInfo $SplitConfigure 
     * @param MPSAIAnalysisConfigureInfo $HighlightConfigure 
     * @param MPSAIAnalysisConfigureInfo $OpeningAndEndingConfigure 
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
