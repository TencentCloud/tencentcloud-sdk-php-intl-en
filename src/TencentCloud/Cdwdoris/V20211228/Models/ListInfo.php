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
 * List type partition information
 *
 * @method string getPartitionName() Obtain Partition name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionName(string $PartitionName) Set Partition name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEnumValues() Obtain Enumeration values of each partition column

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnumValues(array $EnumValues) Set Enumeration values of each partition column

Note: This field may return null, indicating that no valid values can be obtained.
 */
class ListInfo extends AbstractModel
{
    /**
     * @var string Partition name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionName;

    /**
     * @var array Enumeration values of each partition column

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnumValues;

    /**
     * @param string $PartitionName Partition name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EnumValues Enumeration values of each partition column

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
        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("EnumValues",$param) and $param["EnumValues"] !== null) {
            $this->EnumValues = $param["EnumValues"];
        }
    }
}
