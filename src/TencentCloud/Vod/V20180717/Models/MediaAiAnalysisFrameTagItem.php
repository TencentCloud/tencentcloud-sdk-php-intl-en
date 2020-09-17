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
 * Result information of intelligent frame-specific tagging
 *
 * @method string getTag() Obtain Frame-specific tag name.
 * @method void setTag(string $Tag) Set Frame-specific tag name.
 * @method array getCategorySet() Obtain Category list of frame-specific tag names. `CategorySet.N` indicates the N+1-level category.
For example, if the `Tag` is "tower", and `CategorySet` contains two elements (`CategorySet.0` is "scene", and `CategorySet.1` is "architecture"), then the frame-specific tag is "tower", the first-level category is "scene", and the second-level category is "architecture".
 * @method void setCategorySet(array $CategorySet) Set Category list of frame-specific tag names. `CategorySet.N` indicates the N+1-level category.
For example, if the `Tag` is "tower", and `CategorySet` contains two elements (`CategorySet.0` is "scene", and `CategorySet.1` is "architecture"), then the frame-specific tag is "tower", the first-level category is "scene", and the second-level category is "architecture".
 * @method float getConfidence() Obtain Confidence of intelligently generated frame-specific tag between 0 and 100.
 * @method void setConfidence(float $Confidence) Set Confidence of intelligently generated frame-specific tag between 0 and 100.
 */
class MediaAiAnalysisFrameTagItem extends AbstractModel
{
    /**
     * @var string Frame-specific tag name.
     */
    public $Tag;

    /**
     * @var array Category list of frame-specific tag names. `CategorySet.N` indicates the N+1-level category.
For example, if the `Tag` is "tower", and `CategorySet` contains two elements (`CategorySet.0` is "scene", and `CategorySet.1` is "architecture"), then the frame-specific tag is "tower", the first-level category is "scene", and the second-level category is "architecture".
     */
    public $CategorySet;

    /**
     * @var float Confidence of intelligently generated frame-specific tag between 0 and 100.
     */
    public $Confidence;

    /**
     * @param string $Tag Frame-specific tag name.
     * @param array $CategorySet Category list of frame-specific tag names. `CategorySet.N` indicates the N+1-level category.
For example, if the `Tag` is "tower", and `CategorySet` contains two elements (`CategorySet.0` is "scene", and `CategorySet.1` is "architecture"), then the frame-specific tag is "tower", the first-level category is "scene", and the second-level category is "architecture".
     * @param float $Confidence Confidence of intelligently generated frame-specific tag between 0 and 100.
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
