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
 * Result information of intelligent tagging
 *
 * @method string getTag() Obtain Tag name.
 * @method void setTag(string $Tag) Set Tag name.
 * @method float getConfidence() Obtain Confidence of tag between 0 and 100.
 * @method void setConfidence(float $Confidence) Set Confidence of tag between 0 and 100.
 */
class MediaAiAnalysisTagItem extends AbstractModel
{
    /**
     * @var string Tag name.
     */
    public $Tag;

    /**
     * @var float Confidence of tag between 0 and 100.
     */
    public $Confidence;

    /**
     * @param string $Tag Tag name.
     * @param float $Confidence Confidence of tag between 0 and 100.
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

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
