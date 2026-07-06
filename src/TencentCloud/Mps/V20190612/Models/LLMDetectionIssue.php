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
 * Issue detected by the LLM.
 *
 * @method string getTag() Obtain <p>Issue category tag.</p>
 * @method void setTag(string $Tag) Set <p>Issue category tag.</p>
 * @method string getDescription() Obtain <p>Issue description.</p>
 * @method void setDescription(string $Description) Set <p>Issue description.</p>
 * @method float getScore() Obtain <p>Quality score of the issue. Value range: [0, 100].</p>
 * @method void setScore(float $Score) Set <p>Quality score of the issue. Value range: [0, 100].</p>
 * @method float getConfidence() Obtain <p>Detection confidence for the issue. Value range: [0, 100].</p>
 * @method void setConfidence(float $Confidence) Set <p>Detection confidence for the issue. Value range: [0, 100].</p>
 * @method integer getStartTimeMs() Obtain <p>Issue start time (ms).</p>
 * @method void setStartTimeMs(integer $StartTimeMs) Set <p>Issue start time (ms).</p>
 * @method integer getEndTimeMs() Obtain <p>Issue end time (ms).</p>
 * @method void setEndTimeMs(integer $EndTimeMs) Set <p>Issue end time (ms).</p>
 * @method string getExtraData() Obtain <p>Additional data (JSON format), such as severity and other supplementary information.</p>
 * @method void setExtraData(string $ExtraData) Set <p>Additional data (JSON format), such as severity and other supplementary information.</p>
 */
class LLMDetectionIssue extends AbstractModel
{
    /**
     * @var string <p>Issue category tag.</p>
     */
    public $Tag;

    /**
     * @var string <p>Issue description.</p>
     */
    public $Description;

    /**
     * @var float <p>Quality score of the issue. Value range: [0, 100].</p>
     */
    public $Score;

    /**
     * @var float <p>Detection confidence for the issue. Value range: [0, 100].</p>
     */
    public $Confidence;

    /**
     * @var integer <p>Issue start time (ms).</p>
     */
    public $StartTimeMs;

    /**
     * @var integer <p>Issue end time (ms).</p>
     */
    public $EndTimeMs;

    /**
     * @var string <p>Additional data (JSON format), such as severity and other supplementary information.</p>
     */
    public $ExtraData;

    /**
     * @param string $Tag <p>Issue category tag.</p>
     * @param string $Description <p>Issue description.</p>
     * @param float $Score <p>Quality score of the issue. Value range: [0, 100].</p>
     * @param float $Confidence <p>Detection confidence for the issue. Value range: [0, 100].</p>
     * @param integer $StartTimeMs <p>Issue start time (ms).</p>
     * @param integer $EndTimeMs <p>Issue end time (ms).</p>
     * @param string $ExtraData <p>Additional data (JSON format), such as severity and other supplementary information.</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
