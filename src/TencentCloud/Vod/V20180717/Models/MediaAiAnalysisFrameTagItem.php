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
 * Intelligent frame-specific tagging result information.
 *
 * @method string getTag() Obtain By frame tag name.
 * @method void setTag(string $Tag) Set By frame tag name.
 * @method array getCategorySet() Obtain Classification list by frame tag name. CategorySet.N indicates the (N+1)-th level category.
For example, if Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", indicating the frame tag is "tower", with "scenario" as the level-1 category and "building" as the level-2 category.
 * @method void setCategorySet(array $CategorySet) Set Classification list by frame tag name. CategorySet.N indicates the (N+1)-th level category.
For example, if Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", indicating the frame tag is "tower", with "scenario" as the level-1 category and "building" as the level-2 category.
 * @method float getConfidence() Obtain Confidence of the frame tagging, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Confidence of the frame tagging, with a value range from 0 to 100.
 */
class MediaAiAnalysisFrameTagItem extends AbstractModel
{
    /**
     * @var string By frame tag name.
     */
    public $Tag;

    /**
     * @var array Classification list by frame tag name. CategorySet.N indicates the (N+1)-th level category.
For example, if Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", indicating the frame tag is "tower", with "scenario" as the level-1 category and "building" as the level-2 category.
     */
    public $CategorySet;

    /**
     * @var float Confidence of the frame tagging, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @param string $Tag By frame tag name.
     * @param array $CategorySet Classification list by frame tag name. CategorySet.N indicates the (N+1)-th level category.
For example, if Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", indicating the frame tag is "tower", with "scenario" as the level-1 category and "building" as the level-2 category.
     * @param float $Confidence Confidence of the frame tagging, with a value range from 0 to 100.
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("CategorySet",$param) and $param["CategorySet"] !== null) {
            $this->CategorySet = $param["CategorySet"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
