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
 * CreateAIAnalysisTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Video content analysis template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Video content analysis template name. Length limit: 64 characters.
 * @method string getComment() Obtain Video content analysis template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Video content analysis template description. Length limit: 256 characters.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Control parameter of intelligent categorization task.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Control parameter of intelligent categorization task.
 * @method TagConfigureInfo getTagConfigure() Obtain Control parameter of intelligent tagging task.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Control parameter of intelligent tagging task.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Control parameter of intelligent cover generating task.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Control parameter of intelligent cover generating task.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Control parameter of intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Control parameter of intelligent frame-specific tagging task.
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain Control parameter of an intelligent highlight generating task.
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set Control parameter of an intelligent highlight generating task.
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Video content analysis template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Video content analysis template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo Control parameter of intelligent categorization task.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo Control parameter of intelligent tagging task.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo Control parameter of intelligent cover generating task.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo Control parameter of intelligent frame-specific tagging task.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo Control parameter of an intelligent highlight generating task.
     */
    public $HighlightConfigure;

    /**
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Video content analysis template name. Length limit: 64 characters.
     * @param string $Comment Video content analysis template description. Length limit: 256 characters.
     * @param ClassificationConfigureInfo $ClassificationConfigure Control parameter of intelligent categorization task.
     * @param TagConfigureInfo $TagConfigure Control parameter of intelligent tagging task.
     * @param CoverConfigureInfo $CoverConfigure Control parameter of intelligent cover generating task.
     * @param FrameTagConfigureInfo $FrameTagConfigure Control parameter of intelligent frame-specific tagging task.
     * @param HighlightsConfigureInfo $HighlightConfigure Control parameter of an intelligent highlight generating task.
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
