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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of Range type partition
 *
 * @method string getRangeType() Obtain Range partition type:
●FIXED: Define the left closed and right open interval of the partition.
●LESS THAN: Only define the upper bound of the partition.
●BATCH RANGE: Batch create RANGE partitions of numeric and time types, define the left closed and right open intervals of the partitions, and set the step size.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRangeType(string $RangeType) Set Range partition type:
●FIXED: Define the left closed and right open interval of the partition.
●LESS THAN: Only define the upper bound of the partition.
●BATCH RANGE: Batch create RANGE partitions of numeric and time types, define the left closed and right open intervals of the partitions, and set the step size.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPartitionName() Obtain Partition name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionName(string $PartitionName) Set Partition name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLeft() Obtain The left-closed interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLeft(string $Left) Set The left-closed interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRight() Obtain The right open interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRight(string $Right) Set The right open interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMax() Obtain The upper bound of each partition column when RangeType is LESS THAN

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMax(string $Max) Set The upper bound of each partition column when RangeType is LESS THAN

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepLength() Obtain RangeType is the step size of BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepLength(integer $StepLength) Set RangeType is the step size of BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Fill it in when RangeType is BATCH RANGE or automatic partitioning. It indicates the step size unit when the partition column is of time type.
●YEAR: year
●MONTH: month
●WEEK: week
●DAY: day

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Fill it in when RangeType is BATCH RANGE or automatic partitioning. It indicates the step size unit when the partition column is of time type.
●YEAR: year
●MONTH: month
●WEEK: week
●DAY: day

Note: This field may return null, indicating that no valid values can be obtained.
 */
class RangeInfo extends AbstractModel
{
    /**
     * @var string Range partition type:
●FIXED: Define the left closed and right open interval of the partition.
●LESS THAN: Only define the upper bound of the partition.
●BATCH RANGE: Batch create RANGE partitions of numeric and time types, define the left closed and right open intervals of the partitions, and set the step size.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RangeType;

    /**
     * @var string Partition name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionName;

    /**
     * @var string The left-closed interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Left;

    /**
     * @var string The right open interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Right;

    /**
     * @var string The upper bound of each partition column when RangeType is LESS THAN

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @var integer RangeType is the step size of BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepLength;

    /**
     * @var string Fill it in when RangeType is BATCH RANGE or automatic partitioning. It indicates the step size unit when the partition column is of time type.
●YEAR: year
●MONTH: month
●WEEK: week
●DAY: day

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @param string $RangeType Range partition type:
●FIXED: Define the left closed and right open interval of the partition.
●LESS THAN: Only define the upper bound of the partition.
●BATCH RANGE: Batch create RANGE partitions of numeric and time types, define the left closed and right open intervals of the partitions, and set the step size.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PartitionName Partition name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Left The left-closed interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Right The right open interval of each partition column when RangeType is FIXED or BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Max The upper bound of each partition column when RangeType is LESS THAN

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepLength RangeType is the step size of BATCH RANGE

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Unit Fill it in when RangeType is BATCH RANGE or automatic partitioning. It indicates the step size unit when the partition column is of time type.
●YEAR: year
●MONTH: month
●WEEK: week
●DAY: day

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
        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Right",$param) and $param["Right"] !== null) {
            $this->Right = $param["Right"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("StepLength",$param) and $param["StepLength"] !== null) {
            $this->StepLength = $param["StepLength"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
