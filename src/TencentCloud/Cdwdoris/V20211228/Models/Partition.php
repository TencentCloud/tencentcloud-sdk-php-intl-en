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
 * Partition information of the table
 *
 * @method string getPartitionType() Obtain Partition type:
●Range: The partition column is usually of time or integer type. Four writing methods are supported.
●List: The partition value is an enumeration value.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionType(string $PartitionType) Set Partition type:
●Range: The partition column is usually of time or integer type. Four writing methods are supported.
●List: The partition value is an enumeration value.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoPartition() Obtain Whether to automatically partition

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoPartition(boolean $AutoPartition) Set Whether to automatically partition

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRangeInfos() Obtain Partition information when the partition type is Range

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRangeInfos(array $RangeInfos) Set Partition information when the partition type is Range

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getListInfos() Obtain Partition information when the partition type is List

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListInfos(array $ListInfos) Set Partition information when the partition type is List

Note: This field may return null, indicating that no valid values can be obtained.
 */
class Partition extends AbstractModel
{
    /**
     * @var string Partition type:
●Range: The partition column is usually of time or integer type. Four writing methods are supported.
●List: The partition value is an enumeration value.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionType;

    /**
     * @var boolean Whether to automatically partition

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoPartition;

    /**
     * @var array Partition information when the partition type is Range

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RangeInfos;

    /**
     * @var array Partition information when the partition type is List

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListInfos;

    /**
     * @param string $PartitionType Partition type:
●Range: The partition column is usually of time or integer type. Four writing methods are supported.
●List: The partition value is an enumeration value.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoPartition Whether to automatically partition

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RangeInfos Partition information when the partition type is Range

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ListInfos Partition information when the partition type is List

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
        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("AutoPartition",$param) and $param["AutoPartition"] !== null) {
            $this->AutoPartition = $param["AutoPartition"];
        }

        if (array_key_exists("RangeInfos",$param) and $param["RangeInfos"] !== null) {
            $this->RangeInfos = [];
            foreach ($param["RangeInfos"] as $key => $value){
                $obj = new RangeInfo();
                $obj->deserialize($value);
                array_push($this->RangeInfos, $obj);
            }
        }

        if (array_key_exists("ListInfos",$param) and $param["ListInfos"] !== null) {
            $this->ListInfos = [];
            foreach ($param["ListInfos"] as $key => $value){
                $obj = new ListInfo();
                $obj->deserialize($value);
                array_push($this->ListInfos, $obj);
            }
        }
    }
}
