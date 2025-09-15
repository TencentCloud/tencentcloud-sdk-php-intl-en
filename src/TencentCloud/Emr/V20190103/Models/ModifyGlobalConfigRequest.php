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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGlobalConfig request structure.
 *
 * @method string getInstanceId() Obtain English ID of the EMR cluster.
 * @method void setInstanceId(string $InstanceId) Set English ID of the EMR cluster.
 * @method array getItems() Obtain List of modified configurations. Key values have a one-to-one correspondence with the output parameters of the `DescribeGlobalConfig` API and are case-insensitive (if an error occurs indicating the key cannot be found, refer to the output parameters). The values are:
1. enableResourceSchedule: Enables or disables resource scheduling. When disabling, a synchronous operation option (sync) is available with values true or false.
2. scheduler type: scheduler.
2. enableLabel: Enables or disables tags, with values true or false.
2. tag directory: labelDir.
3. whether to overwrite the user-specified queue, with values true or false.
4. userMaxAppsDefault: program upper limit.
5. dynamic configuration item: Corresponds to the Name field in the DefaultSettings object returned by the DescribeGlobalConfig API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, a full transmission is required to perform overwriting.
 * @method void setItems(array $Items) Set List of modified configurations. Key values have a one-to-one correspondence with the output parameters of the `DescribeGlobalConfig` API and are case-insensitive (if an error occurs indicating the key cannot be found, refer to the output parameters). The values are:
1. enableResourceSchedule: Enables or disables resource scheduling. When disabling, a synchronous operation option (sync) is available with values true or false.
2. scheduler type: scheduler.
2. enableLabel: Enables or disables tags, with values true or false.
2. tag directory: labelDir.
3. whether to overwrite the user-specified queue, with values true or false.
4. userMaxAppsDefault: program upper limit.
5. dynamic configuration item: Corresponds to the Name field in the DefaultSettings object returned by the DescribeGlobalConfig API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, a full transmission is required to perform overwriting.
 */
class ModifyGlobalConfigRequest extends AbstractModel
{
    /**
     * @var string English ID of the EMR cluster.
     */
    public $InstanceId;

    /**
     * @var array List of modified configurations. Key values have a one-to-one correspondence with the output parameters of the `DescribeGlobalConfig` API and are case-insensitive (if an error occurs indicating the key cannot be found, refer to the output parameters). The values are:
1. enableResourceSchedule: Enables or disables resource scheduling. When disabling, a synchronous operation option (sync) is available with values true or false.
2. scheduler type: scheduler.
2. enableLabel: Enables or disables tags, with values true or false.
2. tag directory: labelDir.
3. whether to overwrite the user-specified queue, with values true or false.
4. userMaxAppsDefault: program upper limit.
5. dynamic configuration item: Corresponds to the Name field in the DefaultSettings object returned by the DescribeGlobalConfig API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, a full transmission is required to perform overwriting.
     */
    public $Items;

    /**
     * @param string $InstanceId English ID of the EMR cluster.
     * @param array $Items List of modified configurations. Key values have a one-to-one correspondence with the output parameters of the `DescribeGlobalConfig` API and are case-insensitive (if an error occurs indicating the key cannot be found, refer to the output parameters). The values are:
1. enableResourceSchedule: Enables or disables resource scheduling. When disabling, a synchronous operation option (sync) is available with values true or false.
2. scheduler type: scheduler.
2. enableLabel: Enables or disables tags, with values true or false.
2. tag directory: labelDir.
3. whether to overwrite the user-specified queue, with values true or false.
4. userMaxAppsDefault: program upper limit.
5. dynamic configuration item: Corresponds to the Name field in the DefaultSettings object returned by the DescribeGlobalConfig API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, a full transmission is required to perform overwriting.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
