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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceRebootTime request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
Description: Multiple instance IDs allowed for query. json format as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
Description: Multiple instance IDs allowed for query. json format as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
 */
class DescribeDBInstanceRebootTimeRequest extends AbstractModel
{
    /**
     * @var array Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
Description: Multiple instance IDs allowed for query. json format as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
Description: Multiple instance IDs allowed for query. json format as follows.
[
    "cdb-30z11v8s",
    "cdb-93h11efg"
  ]
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
