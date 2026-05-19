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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video content analysis template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Audio and video content analysis template name. Length limit: 64 characters.
 * @method string getComment() Obtain Audio/video content analysis template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Audio/video content analysis template description. Length limit: 256 characters.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Intelligent classification task control parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Intelligent classification task control parameters.
 * @method TagConfigureInfo getTagConfigure() Obtain Intelligent tag task control parameter.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Intelligent tag task control parameter.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Intelligent Cover Task Control Parameters.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Intelligent Cover Task Control Parameters.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Intelligent frame tagging task control parameter.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Intelligent frame tagging task control parameter.
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain Intelligent Highlights Compilation Task Control Parameters.
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set Intelligent Highlights Compilation Task Control Parameters.
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video content analysis template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Audio/video content analysis template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo Intelligent classification task control parameters.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo Intelligent tag task control parameter.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo Intelligent Cover Task Control Parameters.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo Intelligent frame tagging task control parameter.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo Intelligent Highlights Compilation Task Control Parameters.
     */
    public $HighlightConfigure;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video content analysis template name. Length limit: 64 characters.
     * @param string $Comment Audio/video content analysis template description. Length limit: 256 characters.
     * @param ClassificationConfigureInfo $ClassificationConfigure Intelligent classification task control parameters.
     * @param TagConfigureInfo $TagConfigure Intelligent tag task control parameter.
     * @param CoverConfigureInfo $CoverConfigure Intelligent Cover Task Control Parameters.
     * @param FrameTagConfigureInfo $FrameTagConfigure Intelligent frame tagging task control parameter.
     * @param HighlightsConfigureInfo $HighlightConfigure Intelligent Highlights Compilation Task Control Parameters.
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
