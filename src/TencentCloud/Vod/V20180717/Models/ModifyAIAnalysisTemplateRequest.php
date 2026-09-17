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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method ClassificationConfigureInfoForUpdate getClassificationConfigure() Obtain 
 * @method void setClassificationConfigure(ClassificationConfigureInfoForUpdate $ClassificationConfigure) Set 
 * @method TagConfigureInfoForUpdate getTagConfigure() Obtain 
 * @method void setTagConfigure(TagConfigureInfoForUpdate $TagConfigure) Set 
 * @method CoverConfigureInfoForUpdate getCoverConfigure() Obtain 
 * @method void setCoverConfigure(CoverConfigureInfoForUpdate $CoverConfigure) Set 
 * @method FrameTagConfigureInfoForUpdate getFrameTagConfigure() Obtain 
 * @method void setFrameTagConfigure(FrameTagConfigureInfoForUpdate $FrameTagConfigure) Set 
 * @method HighlightsConfigureInfoForUpdate getHighlightConfigure() Obtain 
 * @method void setHighlightConfigure(HighlightsConfigureInfoForUpdate $HighlightConfigure) Set 
 */
class ModifyAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfoForUpdate 
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfoForUpdate 
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfoForUpdate 
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfoForUpdate 
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfoForUpdate 
     */
    public $HighlightConfigure;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param ClassificationConfigureInfoForUpdate $ClassificationConfigure 
     * @param TagConfigureInfoForUpdate $TagConfigure 
     * @param CoverConfigureInfoForUpdate $CoverConfigure 
     * @param FrameTagConfigureInfoForUpdate $FrameTagConfigure 
     * @param HighlightsConfigureInfoForUpdate $HighlightConfigure 
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
