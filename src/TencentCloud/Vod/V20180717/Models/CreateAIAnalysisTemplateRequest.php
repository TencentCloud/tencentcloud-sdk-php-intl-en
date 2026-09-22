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
 * CreateAIAnalysisTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Audio and video content analysis template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Audio and video content analysis template name, with a length limit of 64 characters.
 * @method string getComment() Obtain Audio and video content analysis template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Audio and video content analysis template description, with a length limit of 256 characters.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Intelligent classification task control parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Intelligent classification task control parameters.
 * @method TagConfigureInfo getTagConfigure() Obtain Control parameter of an intelligent tag task.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Control parameter of an intelligent tag task.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Intelligent cover task control parameters.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Intelligent cover task control parameters.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Control parameter for intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Control parameter for intelligent frame-specific tagging task.
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain Control parameters for the intelligent highlights compilation task.
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set Control parameters for the intelligent highlights compilation task.
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
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
     * @var ClassificationConfigureInfo Intelligent classification task control parameters.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo Control parameter of an intelligent tag task.
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
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Audio and video content analysis template name, with a length limit of 64 characters.
     * @param string $Comment Audio and video content analysis template description, with a length limit of 256 characters.
     * @param ClassificationConfigureInfo $ClassificationConfigure Intelligent classification task control parameters.
     * @param TagConfigureInfo $TagConfigure Control parameter of an intelligent tag task.
     * @param CoverConfigureInfo $CoverConfigure Intelligent cover task control parameters.
     * @param FrameTagConfigureInfo $FrameTagConfigure Control parameter for intelligent frame-specific tagging task.
     * @param HighlightsConfigureInfo $HighlightConfigure Control parameters for the intelligent highlights compilation task.
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
    }
}
