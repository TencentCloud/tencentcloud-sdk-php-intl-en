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
namespace TencentCloud\Mps\V20190612\Models;
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
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Control parameter of intelligent categorization task.
 * @method TagConfigureInfo getTagConfigure() Obtain Control parameter of intelligent tagging task.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Control parameter of intelligent tagging task.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Control parameter of intelligent cover generating task.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Control parameter of intelligent cover generating task.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Control parameter of intelligent frame-specific tagging task.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Control parameter of intelligent frame-specific tagging task.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getType() Obtain The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var string The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param integer $Definition Unique ID of intelligent analysis template.
     * @param string $Name Intelligent analysis template name.
     * @param string $Comment Intelligent analysis template description.
     * @param ClassificationConfigureInfo $ClassificationConfigure Control parameter of intelligent categorization task.
     * @param TagConfigureInfo $TagConfigure Control parameter of intelligent tagging task.
     * @param CoverConfigureInfo $CoverConfigure Control parameter of intelligent cover generating task.
     * @param FrameTagConfigureInfo $FrameTagConfigure Control parameter of intelligent frame-specific tagging task.
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $Type The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
