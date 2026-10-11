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
 * @method array getItems() Obtain List of modified configurations. Key values have a one-to-one correspondence with the response parameters of the `DescribeGlobalConfig` API and are case-insensitive (If an error occurs indicating that the key cannot be found, refer to the response parameters). Valid values:
1. enableResourceSchedule: Whether to enable or disable resource scheduling. When it is disabled, a synchronization option with Key set to sync is available. Valid values: true and false.
2. scheduler: Scheduler type.
2. enableLabel: Whether to enable or disable the tag. Valid values: true and false.
2. labelDir: Tag directory.
3. queueMappingOverride: Whether to overwrite user-specified queue. Valid values: true and false.
4. userMaxAppsDefault: Program upper limit.
5. Dynamic configuration item: Name field in DefaultSettings returned by the `DescribeGlobalConfig` API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, pass all values to overwrite the existing ones.
 * @method void setItems(array $Items) Set List of modified configurations. Key values have a one-to-one correspondence with the response parameters of the `DescribeGlobalConfig` API and are case-insensitive (If an error occurs indicating that the key cannot be found, refer to the response parameters). Valid values:
1. enableResourceSchedule: Whether to enable or disable resource scheduling. When it is disabled, a synchronization option with Key set to sync is available. Valid values: true and false.
2. scheduler: Scheduler type.
2. enableLabel: Whether to enable or disable the tag. Valid values: true and false.
2. labelDir: Tag directory.
3. queueMappingOverride: Whether to overwrite user-specified queue. Valid values: true and false.
4. userMaxAppsDefault: Program upper limit.
5. Dynamic configuration item: Name field in DefaultSettings returned by the `DescribeGlobalConfig` API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, pass all values to overwrite the existing ones.
 */
class ModifyGlobalConfigRequest extends AbstractModel
{
    /**
     * @var string English ID of the EMR cluster.
     */
    public $InstanceId;

    /**
     * @var array List of modified configurations. Key values have a one-to-one correspondence with the response parameters of the `DescribeGlobalConfig` API and are case-insensitive (If an error occurs indicating that the key cannot be found, refer to the response parameters). Valid values:
1. enableResourceSchedule: Whether to enable or disable resource scheduling. When it is disabled, a synchronization option with Key set to sync is available. Valid values: true and false.
2. scheduler: Scheduler type.
2. enableLabel: Whether to enable or disable the tag. Valid values: true and false.
2. labelDir: Tag directory.
3. queueMappingOverride: Whether to overwrite user-specified queue. Valid values: true and false.
4. userMaxAppsDefault: Program upper limit.
5. Dynamic configuration item: Name field in DefaultSettings returned by the `DescribeGlobalConfig` API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, pass all values to overwrite the existing ones.
     */
    public $Items;

    /**
     * @param string $InstanceId English ID of the EMR cluster.
     * @param array $Items List of modified configurations. Key values have a one-to-one correspondence with the response parameters of the `DescribeGlobalConfig` API and are case-insensitive (If an error occurs indicating that the key cannot be found, refer to the response parameters). Valid values:
1. enableResourceSchedule: Whether to enable or disable resource scheduling. When it is disabled, a synchronization option with Key set to sync is available. Valid values: true and false.
2. scheduler: Scheduler type.
2. enableLabel: Whether to enable or disable the tag. Valid values: true and false.
2. labelDir: Tag directory.
3. queueMappingOverride: Whether to overwrite user-specified queue. Valid values: true and false.
4. userMaxAppsDefault: Program upper limit.
5. Dynamic configuration item: Name field in DefaultSettings returned by the `DescribeGlobalConfig` API.
The values are strings. For **whether to overwrite the user-specified queue** and **program upper limit**, null in the JSON specifications means clearing the value of this configuration. Individual configuration items can be modified. For **dynamic configurations**, pass all values to overwrite the existing ones.
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
