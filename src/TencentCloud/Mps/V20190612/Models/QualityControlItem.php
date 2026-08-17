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
 * Quality inspection result item
 *
 * @method integer getConfidence() Obtain 
 * @method void setConfidence(integer $Confidence) Set 
 * @method float getStartTimeOffset() Obtain Start time of occurrence, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time of occurrence, in seconds.
 * @method float getEndTimeOffset() Obtain End timestamp of the occurrence, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End timestamp of the occurrence, in seconds.
 * @method array getAreaCoordSet() Obtain 
 * @method void setAreaCoordSet(array $AreaCoordSet) Set 
 */
class QualityControlItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Confidence;

    /**
     * @var float Start time of occurrence, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End timestamp of the occurrence, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var array 
     */
    public $AreaCoordSet;

    /**
     * @param integer $Confidence 
     * @param float $StartTimeOffset Start time of occurrence, in seconds.
     * @param float $EndTimeOffset End timestamp of the occurrence, in seconds.
     * @param array $AreaCoordSet 
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
