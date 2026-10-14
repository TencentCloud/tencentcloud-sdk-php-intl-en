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
 * Intelligent frame tagging result information.
 *
 * @method string getTag() Obtain Frame-specific tag name.
 * @method void setTag(string $Tag) Set Frame-specific tag name.
 * @method array getCategorySet() Obtain Classification list by frame tag name. CategorySet.N refers to the (N+1)-level category.
For example, when Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", which means the frame tag is "tower", the level-1 category is "scenario", and the level-2 category is "building".
 * @method void setCategorySet(array $CategorySet) Set Classification list by frame tag name. CategorySet.N refers to the (N+1)-level category.
For example, when Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", which means the frame tag is "tower", the level-1 category is "scenario", and the level-2 category is "building".
 * @method float getConfidence() Obtain Confidence of frame tagging, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Confidence of frame tagging, with a value range from 0 to 100.
 */
class MediaAiAnalysisFrameTagItem extends AbstractModel
{
    /**
     * @var string Frame-specific tag name.
     */
    public $Tag;

    /**
     * @var array Classification list by frame tag name. CategorySet.N refers to the (N+1)-level category.
For example, when Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", which means the frame tag is "tower", the level-1 category is "scenario", and the level-2 category is "building".
     */
    public $CategorySet;

    /**
     * @var float Confidence of frame tagging, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @param string $Tag Frame-specific tag name.
     * @param array $CategorySet Classification list by frame tag name. CategorySet.N refers to the (N+1)-level category.
For example, when Tag is "tower", CategorySet contains two elements: CategorySet.0 is "scenario" and CategorySet.1 is "building", which means the frame tag is "tower", the level-1 category is "scenario", and the level-2 category is "building".
     * @param float $Confidence Confidence of frame tagging, with a value range from 0 to 100.
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
