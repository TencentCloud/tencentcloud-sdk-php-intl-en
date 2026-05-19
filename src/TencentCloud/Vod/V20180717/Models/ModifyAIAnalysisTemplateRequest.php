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
 * @method integer getDefinition() Obtain Unique identifier of an audio and video content analysis template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of an audio and video content analysis template.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video content analysis template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Audio and video content analysis template name. Length limit: 64 characters.
 * @method string getComment() Obtain Audio/video content analysis template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Audio/video content analysis template description. Length limit: 256 characters.
 * @method ClassificationConfigureInfoForUpdate getClassificationConfigure() Obtain Intelligent classification task control parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfoForUpdate $ClassificationConfigure) Set Intelligent classification task control parameters.
 * @method TagConfigureInfoForUpdate getTagConfigure() Obtain Intelligent tag task control parameter.
 * @method void setTagConfigure(TagConfigureInfoForUpdate $TagConfigure) Set Intelligent tag task control parameter.
 * @method CoverConfigureInfoForUpdate getCoverConfigure() Obtain Intelligent Cover Task Control Parameters.
 * @method void setCoverConfigure(CoverConfigureInfoForUpdate $CoverConfigure) Set Intelligent Cover Task Control Parameters.
 * @method FrameTagConfigureInfoForUpdate getFrameTagConfigure() Obtain Intelligent frame tagging task control parameter.
 * @method void setFrameTagConfigure(FrameTagConfigureInfoForUpdate $FrameTagConfigure) Set Intelligent frame tagging task control parameter.
 * @method HighlightsConfigureInfoForUpdate getHighlightConfigure() Obtain Intelligent Highlights Compilation Task Control Parameters.
 * @method void setHighlightConfigure(HighlightsConfigureInfoForUpdate $HighlightConfigure) Set Intelligent Highlights Compilation Task Control Parameters.
 */
class ModifyAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of an audio and video content analysis template.
     */
    public $Definition;

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
     * @var ClassificationConfigureInfoForUpdate Intelligent classification task control parameters.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfoForUpdate Intelligent tag task control parameter.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfoForUpdate Intelligent Cover Task Control Parameters.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfoForUpdate Intelligent frame tagging task control parameter.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfoForUpdate Intelligent Highlights Compilation Task Control Parameters.
     */
    public $HighlightConfigure;

    /**
     * @param integer $Definition Unique identifier of an audio and video content analysis template.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video content analysis template name. Length limit: 64 characters.
     * @param string $Comment Audio/video content analysis template description. Length limit: 256 characters.
     * @param ClassificationConfigureInfoForUpdate $ClassificationConfigure Intelligent classification task control parameters.
     * @param TagConfigureInfoForUpdate $TagConfigure Intelligent tag task control parameter.
     * @param CoverConfigureInfoForUpdate $CoverConfigure Intelligent Cover Task Control Parameters.
     * @param FrameTagConfigureInfoForUpdate $FrameTagConfigure Intelligent frame tagging task control parameter.
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
