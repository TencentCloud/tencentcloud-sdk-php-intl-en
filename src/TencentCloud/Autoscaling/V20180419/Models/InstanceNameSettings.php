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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Settings of CVM instance names.
 *
 * @method string getInstanceName() Obtain CVM instance name

The `InstanceName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.

Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setInstanceName(string $InstanceName) Set CVM instance name

The `InstanceName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.

Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getInstanceNameStyle() Obtain Type of CVM instance name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL".

ORIGINAL: Auto Scaling transfers the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the auto scaling group may conflict.

UNIQUE: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the auto scaling group is unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNameStyle(string $InstanceNameStyle) Set Type of CVM instance name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL".

ORIGINAL: Auto Scaling transfers the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the auto scaling group may conflict.

UNIQUE: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the auto scaling group is unique.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InstanceNameSettings extends AbstractModel
{
    /**
     * @var string CVM instance name

The `InstanceName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.

Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $InstanceName;

    /**
     * @var string Type of CVM instance name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL".

ORIGINAL: Auto Scaling transfers the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the auto scaling group may conflict.

UNIQUE: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the auto scaling group is unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNameStyle;

    /**
     * @param string $InstanceName CVM instance name

The `InstanceName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.

Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $InstanceNameStyle Type of CVM instance name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL".

ORIGINAL: Auto Scaling transfers the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the auto scaling group may conflict.

UNIQUE: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the auto scaling group is unique.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceNameStyle",$param) and $param["InstanceNameStyle"] !== null) {
            $this->InstanceNameStyle = $param["InstanceNameStyle"];
        }
    }
}
