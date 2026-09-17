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
 * 
 *
 * @method string getTag() Obtain 
 * @method void setTag(string $Tag) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method float getScore() Obtain 
 * @method void setScore(float $Score) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method integer getStartTimeMs() Obtain 
 * @method void setStartTimeMs(integer $StartTimeMs) Set 
 * @method integer getEndTimeMs() Obtain 
 * @method void setEndTimeMs(integer $EndTimeMs) Set 
 * @method string getExtraData() Obtain 
 * @method void setExtraData(string $ExtraData) Set 
 */
class QualityInspectLLMDetectionIssue extends AbstractModel
{
    /**
     * @var string 
     */
    public $Tag;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var float 
     */
    public $Score;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var integer 
     */
    public $StartTimeMs;

    /**
     * @var integer 
     */
    public $EndTimeMs;

    /**
     * @var string 
     */
    public $ExtraData;

    /**
     * @param string $Tag 
     * @param string $Description 
     * @param float $Score 
     * @param float $Confidence 
     * @param integer $StartTimeMs 
     * @param integer $EndTimeMs 
     * @param string $ExtraData 
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
