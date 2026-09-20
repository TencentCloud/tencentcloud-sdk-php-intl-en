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
 * AI intelligent analysis template details
 *
 * @method integer getDefinition() Obtain Unique identifier of the intelligent analysis template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the intelligent analysis template.
 * @method string getName() Obtain Name of the intelligent analysis template.
 * @method void setName(string $Name) Set Name of the intelligent analysis template.
 * @method string getComment() Obtain Template description information for intelligent analysis.
 * @method void setComment(string $Comment) Set Template description information for intelligent analysis.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Intelligent classification task control parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Intelligent classification task control parameters.
 * @method TagConfigureInfo getTagConfigure() Obtain Control parameter of the intelligent tag task.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Control parameter of the intelligent tag task.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Intelligent cover task control parameters.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Intelligent cover task control parameters.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Control parameter for intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Control parameter for intelligent frame-specific tagging task.
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain Control parameters for the intelligent highlights compilation task.
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set Control parameters for the intelligent highlights compilation task.
 * @method string getCreateTime() Obtain Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AIAnalysisTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of the intelligent analysis template.
     */
    public $Definition;

    /**
     * @var string Name of the intelligent analysis template.
     */
    public $Name;

    /**
     * @var string Template description information for intelligent analysis.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo Intelligent classification task control parameters.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo Control parameter of the intelligent tag task.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo Intelligent cover task control parameters.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo Control parameter for intelligent frame-specific tagging task.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo Control parameters for the intelligent highlights compilation task.
     */
    public $HighlightConfigure;

    /**
     * @var string Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier of the intelligent analysis template.
     * @param string $Name Name of the intelligent analysis template.
     * @param string $Comment Template description information for intelligent analysis.
     * @param ClassificationConfigureInfo $ClassificationConfigure Intelligent classification task control parameters.
     * @param TagConfigureInfo $TagConfigure Control parameter of the intelligent tag task.
     * @param CoverConfigureInfo $CoverConfigure Intelligent cover task control parameters.
     * @param FrameTagConfigureInfo $FrameTagConfigure Control parameter for intelligent frame-specific tagging task.
     * @param HighlightsConfigureInfo $HighlightConfigure Control parameters for the intelligent highlights compilation task.
     * @param string $CreateTime Template creation time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
            $this->ClassificationConfigure = new ClassificationConfigureInfo();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new TagConfigureInfo();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new CoverConfigureInfo();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new FrameTagConfigureInfo();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new HighlightsConfigureInfo();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
