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
 * ModifyAIAnalysisTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of video content analysis template.
 * @method void setDefinition(integer $Definition) Set Unique ID of video content analysis template.
 * @method string getName() Obtain Video content analysis template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Video content analysis template name. Length limit: 64 characters.
 * @method string getComment() Obtain Video content analysis template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Video content analysis template description. Length limit: 256 characters.
 * @method ClassificationConfigureInfoForUpdate getClassificationConfigure() Obtain Control parameter of intelligent categorization task.
 * @method void setClassificationConfigure(ClassificationConfigureInfoForUpdate $ClassificationConfigure) Set Control parameter of intelligent categorization task.
 * @method TagConfigureInfoForUpdate getTagConfigure() Obtain Control parameter of intelligent tagging task.
 * @method void setTagConfigure(TagConfigureInfoForUpdate $TagConfigure) Set Control parameter of intelligent tagging task.
 * @method CoverConfigureInfoForUpdate getCoverConfigure() Obtain Control parameter of intelligent cover generating task.
 * @method void setCoverConfigure(CoverConfigureInfoForUpdate $CoverConfigure) Set Control parameter of intelligent cover generating task.
 * @method FrameTagConfigureInfoForUpdate getFrameTagConfigure() Obtain Control parameter of intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfoForUpdate $FrameTagConfigure) Set Control parameter of intelligent frame-specific tagging task.
 * @method HighlightsConfigureInfoForUpdate getHighlightConfigure() Obtain Control parameter of an intelligent highlight generating task.
 * @method void setHighlightConfigure(HighlightsConfigureInfoForUpdate $HighlightConfigure) Set Control parameter of an intelligent highlight generating task.
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ModifyAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of video content analysis template.
     */
    public $Definition;

    /**
     * @var string Video content analysis template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Video content analysis template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfoForUpdate Control parameter of intelligent categorization task.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfoForUpdate Control parameter of intelligent tagging task.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfoForUpdate Control parameter of intelligent cover generating task.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfoForUpdate Control parameter of intelligent frame-specific tagging task.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfoForUpdate Control parameter of an intelligent highlight generating task.
     */
    public $HighlightConfigure;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param integer $Definition Unique ID of video content analysis template.
     * @param string $Name Video content analysis template name. Length limit: 64 characters.
     * @param string $Comment Video content analysis template description. Length limit: 256 characters.
     * @param ClassificationConfigureInfoForUpdate $ClassificationConfigure Control parameter of intelligent categorization task.
     * @param TagConfigureInfoForUpdate $TagConfigure Control parameter of intelligent tagging task.
     * @param CoverConfigureInfoForUpdate $CoverConfigure Control parameter of intelligent cover generating task.
     * @param FrameTagConfigureInfoForUpdate $FrameTagConfigure Control parameter of intelligent frame-specific tagging task.
     * @param HighlightsConfigureInfoForUpdate $HighlightConfigure Control parameter of an intelligent highlight generating task.
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
