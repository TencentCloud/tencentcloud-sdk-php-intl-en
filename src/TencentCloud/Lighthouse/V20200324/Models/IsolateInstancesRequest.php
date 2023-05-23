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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateInstances request structure.
 *
 * @method array getInstanceIds() Obtain IDs of target instances. You can get the IDs from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 20 instances can be specified at the same time.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of target instances. You can get the IDs from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 20 instances can be specified at the same time.
 * @method boolean getIsolateDataDisk() Obtain Whether to return data disks mounted on the instance together with the instance. Valid values: 
`TRUE`: Return the mounted data disks at the same time 
`FALSE`: Do not return the mounted data disks at the same time 
Default value: `TRUE`.
 * @method void setIsolateDataDisk(boolean $IsolateDataDisk) Set Whether to return data disks mounted on the instance together with the instance. Valid values: 
`TRUE`: Return the mounted data disks at the same time 
`FALSE`: Do not return the mounted data disks at the same time 
Default value: `TRUE`.
 */
class IsolateInstancesRequest extends AbstractModel
{
    /**
     * @var array IDs of target instances. You can get the IDs from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 20 instances can be specified at the same time.
     */
    public $InstanceIds;

    /**
     * @var boolean Whether to return data disks mounted on the instance together with the instance. Valid values: 
`TRUE`: Return the mounted data disks at the same time 
`FALSE`: Do not return the mounted data disks at the same time 
Default value: `TRUE`.
     */
    public $IsolateDataDisk;

    /**
     * @param array $InstanceIds IDs of target instances. You can get the IDs from the `InstanceId` parameter returned by the `DescribeInstances` API. Up to 20 instances can be specified at the same time.
     * @param boolean $IsolateDataDisk Whether to return data disks mounted on the instance together with the instance. Valid values: 
`TRUE`: Return the mounted data disks at the same time 
`FALSE`: Do not return the mounted data disks at the same time 
Default value: `TRUE`.
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

        if (array_key_exists("IsolateDataDisk",$param) and $param["IsolateDataDisk"] !== null) {
            $this->IsolateDataDisk = $param["IsolateDataDisk"];
        }
    }
}
