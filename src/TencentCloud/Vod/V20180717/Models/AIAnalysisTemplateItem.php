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
 * AI-based intelligent analysis template details
 *
 * @method integer getDefinition() Obtain Unique ID of intelligent analysis template.
 * @method void setDefinition(integer $Definition) Set Unique ID of intelligent analysis template.
 * @method string getName() Obtain Intelligent analysis template name.
 * @method void setName(string $Name) Set Intelligent analysis template name.
 * @method string getComment() Obtain Intelligent analysis template description.
 * @method void setComment(string $Comment) Set Intelligent analysis template description.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Control parameter of intelligent categorization task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Control parameter of intelligent categorization task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TagConfigureInfo getTagConfigure() Obtain Control parameter of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Control parameter of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Control parameter of intelligent cover generating task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Control parameter of intelligent cover generating task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Control parameter of intelligent frame-specific tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Control parameter of intelligent frame-specific tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain Control parameter of an intelligent highlight generating task.
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set Control parameter of an intelligent highlight generating task.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AIAnalysisTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of intelligent analysis template.
     */
    public $Definition;

    /**
     * @var string Intelligent analysis template name.
     */
    public $Name;

    /**
     * @var string Intelligent analysis template description.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo Control parameter of intelligent categorization task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo Control parameter of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo Control parameter of intelligent cover generating task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo Control parameter of intelligent frame-specific tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo Control parameter of an intelligent highlight generating task.
     */
    public $HighlightConfigure;

    /**
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique ID of intelligent analysis template.
     * @param string $Name Intelligent analysis template name.
     * @param string $Comment Intelligent analysis template description.
     * @param ClassificationConfigureInfo $ClassificationConfigure Control parameter of intelligent categorization task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TagConfigureInfo $TagConfigure Control parameter of intelligent tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CoverConfigureInfo $CoverConfigure Control parameter of intelligent cover generating task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param FrameTagConfigureInfo $FrameTagConfigure Control parameter of intelligent frame-specific tagging task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param HighlightsConfigureInfo $HighlightConfigure Control parameter of an intelligent highlight generating task.
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
