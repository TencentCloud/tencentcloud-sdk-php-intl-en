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
 * Intelligent classification result
 *
 * @method string getClassification() Obtain Category name for intelligent classification.
 * @method void setClassification(string $Classification) Set Category name for intelligent classification.
 * @method float getConfidence() Obtain Reliability of intelligent classification, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Reliability of intelligent classification, with a value range from 0 to 100.
 */
class MediaAiAnalysisClassificationItem extends AbstractModel
{
    /**
     * @var string Category name for intelligent classification.
     */
    public $Classification;

    /**
     * @var float Reliability of intelligent classification, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @param string $Classification Category name for intelligent classification.
     * @param float $Confidence Reliability of intelligent classification, with a value range from 0 to 100.
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
        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
