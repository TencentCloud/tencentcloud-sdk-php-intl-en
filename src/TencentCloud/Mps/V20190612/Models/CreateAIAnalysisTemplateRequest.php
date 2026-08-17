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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIAnalysisTemplate request structure.
 *
 * @method string getName() Obtain Name of the video analysis template, length limited to 64 characters.
 * @method void setName(string $Name) Set Name of the video analysis template, length limited to 64 characters.
 * @method string getComment() Obtain Description of the video analysis template, length limited to 256 characters.
 * @method void setComment(string $Comment) Set Description of the video analysis template, length limited to 256 characters.
 * @method ClassificationConfigureInfo getClassificationConfigure() Obtain Intelligent Classification Task Control Parameters.
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) Set Intelligent Classification Task Control Parameters.
 * @method TagConfigureInfo getTagConfigure() Obtain Intelligent tag task control parameter.
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) Set Intelligent tag task control parameter.
 * @method CoverConfigureInfo getCoverConfigure() Obtain Intelligent Cover Task Control Parameters.
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) Set Intelligent Cover Task Control Parameters.
 * @method FrameTagConfigureInfo getFrameTagConfigure() Obtain Intelligent frame-specific tagging task control parameter.
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) Set Intelligent frame-specific tagging task control parameter.
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var string Name of the video analysis template, length limited to 64 characters.
     */
    public $Name;

    /**
     * @var string Description of the video analysis template, length limited to 256 characters.
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo Intelligent Classification Task Control Parameters.
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
     * @var FrameTagConfigureInfo Intelligent frame-specific tagging task control parameter.
     */
    public $FrameTagConfigure;

    /**
     * @param string $Name Name of the video analysis template, length limited to 64 characters.
     * @param string $Comment Description of the video analysis template, length limited to 256 characters.
     * @param ClassificationConfigureInfo $ClassificationConfigure Intelligent Classification Task Control Parameters.
     * @param TagConfigureInfo $TagConfigure Intelligent tag task control parameter.
     * @param CoverConfigureInfo $CoverConfigure Intelligent Cover Task Control Parameters.
     * @param FrameTagConfigureInfo $FrameTagConfigure Intelligent frame-specific tagging task control parameter.
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
    }
}
