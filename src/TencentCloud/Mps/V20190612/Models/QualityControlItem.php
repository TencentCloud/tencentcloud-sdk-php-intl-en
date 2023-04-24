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
 * The information of a checked segment in quality control.
 *
 * @method integer getConfidence() Obtain The confidence score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(integer $Confidence) Set The confidence score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getStartTimeOffset() Obtain The start timestamp (second) of the segment.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start timestamp (second) of the segment.
 * @method float getEndTimeOffset() Obtain The end timestamp (second) of the segment.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end timestamp (second) of the segment.
 * @method array getAreaCoordSet() Obtain The coordinates (px) of the top left and bottom right corner.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The coordinates (px) of the top left and bottom right corner.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualityControlItem extends AbstractModel
{
    /**
     * @var integer The confidence score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @var float The start timestamp (second) of the segment.
     */
    public $StartTimeOffset;

    /**
     * @var float The end timestamp (second) of the segment.
     */
    public $EndTimeOffset;

    /**
     * @var array The coordinates (px) of the top left and bottom right corner.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AreaCoordSet;

    /**
     * @param integer $Confidence The confidence score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $StartTimeOffset The start timestamp (second) of the segment.
     * @param float $EndTimeOffset The end timestamp (second) of the segment.
     * @param array $AreaCoordSet The coordinates (px) of the top left and bottom right corner.
Note: This field may return null, indicating that no valid values can be obtained.
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
