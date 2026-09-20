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
 * ModifyAIAnalysisTemplate request structure.
 *
 * @method integer getDefinition() Obtain Audio and video content analysis template unique identifier.
 * @method void setDefinition(integer $Definition) Set Audio and video content analysis template unique identifier.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
 * @method string getName() Obtain Audio and video content analysis template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Audio and video content analysis template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Audio and video content analysis template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Audio and video content analysis template description, with a length limit of 256 characters.
 * @method ClassificationConfigureInfoForUpdate getClassificationConfigure() Obtain Intelligent classification task control parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfoForUpdate $ClassificationConfigure) Set Intelligent classification task control parameters.
 * @method TagConfigureInfoForUpdate getTagConfigure() Obtain Intelligent tag task control parameter.
 * @method void setTagConfigure(TagConfigureInfoForUpdate $TagConfigure) Set Intelligent tag task control parameter.
 * @method CoverConfigureInfoForUpdate getCoverConfigure() Obtain Intelligent cover task control parameters.
 * @method void setCoverConfigure(CoverConfigureInfoForUpdate $CoverConfigure) Set Intelligent cover task control parameters.
 * @method FrameTagConfigureInfoForUpdate getFrameTagConfigure() Obtain Control parameter for the intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfoForUpdate $FrameTagConfigure) Set Control parameter for the intelligent frame-specific tagging task.
 * @method HighlightsConfigureInfoForUpdate getHighlightConfigure() Obtain Intelligent Highlights Compilation Task Control Parameters.
 * @method void setHighlightConfigure(HighlightsConfigureInfoForUpdate $HighlightConfigure) Set Intelligent Highlights Compilation Task Control Parameters.
 */
class ModifyAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer Audio and video content analysis template unique identifier.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video content analysis template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var string Audio and video content analysis template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfoForUpdate Intelligent classification task control parameters.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfoForUpdate Intelligent tag task control parameter.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfoForUpdate Intelligent cover task control parameters.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfoForUpdate Control parameter for the intelligent frame-specific tagging task.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfoForUpdate Intelligent Highlights Compilation Task Control Parameters.
     */
    public $HighlightConfigure;

    /**
     * @param integer $Definition Audio and video content analysis template unique identifier.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
     * @param string $Name Audio and video content analysis template name, with a length limit of 64 characters.
     * @param string $Comment Audio and video content analysis template description, with a length limit of 256 characters.
     * @param ClassificationConfigureInfoForUpdate $ClassificationConfigure Intelligent classification task control parameters.
     * @param TagConfigureInfoForUpdate $TagConfigure Intelligent tag task control parameter.
     * @param CoverConfigureInfoForUpdate $CoverConfigure Intelligent cover task control parameters.
     * @param FrameTagConfigureInfoForUpdate $FrameTagConfigure Control parameter for the intelligent frame-specific tagging task.
     * @param HighlightsConfigureInfoForUpdate $HighlightConfigure Intelligent Highlights Compilation Task Control Parameters.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ClassificationConfigure",$param) and $param["ClassificationConfigure"] !== null) {
            $this->ClassificationConfigure = new ClassificationConfigureInfoForUpdate();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new TagConfigureInfoForUpdate();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new CoverConfigureInfoForUpdate();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new FrameTagConfigureInfoForUpdate();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new HighlightsConfigureInfoForUpdate();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }
    }
}
