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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain 
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set 
 * @method TagConfigureInfo getTagConfigure() Obtain 
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set 
 * @method CoverConfigureInfo getCoverConfigure() Obtain 
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set 
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain 
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set 
 * @method HighlightsConfigureInfo getHighlightConfigure() Obtain 
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) Set 
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
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
     * @var ClassificationConfigureInfo 
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo 
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo 
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo 
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo 
     */
    public $HighlightConfigure;

    /**
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param ClassificationConfigureInfo $ClassificationConfigure 
     * @param TagConfigureInfo $TagConfigure 
     * @param CoverConfigureInfo $CoverConfigure 
     * @param FrameTagConfigureInfo $FrameTagConfigure 
     * @param HighlightsConfigureInfo $HighlightConfigure 
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
