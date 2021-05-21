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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM HostName settings
 *
 * @method string getHostName() Obtain Hostname of a CVM
<br><li>The `HostName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.
<br><li>This field is unavailable to CVM instances.
<br><li>Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setHostName(string $HostName) Set Hostname of a CVM
<br><li>The `HostName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.
<br><li>This field is unavailable to CVM instances.
<br><li>Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getHostNameStyle() Obtain Type of CVM host name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL"
<br><li> ORIGINAL. Auto Scaling transfers the HostName set in input parameters to the CVM directly. CVM may adds serial numbers for the HostName. The HostName of instances within the auto scaling group may conflict.
<br><li> UNIQUE. The HostName set in input parameters is the prefix of a host name. Auto Scaling and CVM expand it. The HostName of an instance in the auto scaling group is unique.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostNameStyle(string $HostNameStyle) Set Type of CVM host name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL"
<br><li> ORIGINAL. Auto Scaling transfers the HostName set in input parameters to the CVM directly. CVM may adds serial numbers for the HostName. The HostName of instances within the auto scaling group may conflict.
<br><li> UNIQUE. The HostName set in input parameters is the prefix of a host name. Auto Scaling and CVM expand it. The HostName of an instance in the auto scaling group is unique.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HostNameSettings extends AbstractModel
{
    /**
     * @var string Hostname of a CVM
<br><li>The `HostName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.
<br><li>This field is unavailable to CVM instances.
<br><li>Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $HostName;

    /**
     * @var string Type of CVM host name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL"
<br><li> ORIGINAL. Auto Scaling transfers the HostName set in input parameters to the CVM directly. CVM may adds serial numbers for the HostName. The HostName of instances within the auto scaling group may conflict.
<br><li> UNIQUE. The HostName set in input parameters is the prefix of a host name. Auto Scaling and CVM expand it. The HostName of an instance in the auto scaling group is unique.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostNameStyle;

    /**
     * @param string $HostName Hostname of a CVM
<br><li>The `HostName` cannot start or end with a period (.) or hyphen (-), and cannot contain consecutive periods and hyphens.
<br><li>This field is unavailable to CVM instances.
<br><li>Other types of instances (such as Linux): the name contains 2 to 40 characters, and supports multiple periods (.). The string between two periods can consist of letters (case insensitive), numbers, and hyphens (-), and cannot be all numbers.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $HostNameStyle Type of CVM host name. Valid values: "ORIGINAL" and "UNIQUE". Default value: "ORIGINAL"
<br><li> ORIGINAL. Auto Scaling transfers the HostName set in input parameters to the CVM directly. CVM may adds serial numbers for the HostName. The HostName of instances within the auto scaling group may conflict.
<br><li> UNIQUE. The HostName set in input parameters is the prefix of a host name. Auto Scaling and CVM expand it. The HostName of an instance in the auto scaling group is unique.
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostNameStyle",$param) and $param["HostNameStyle"] !== null) {
            $this->HostNameStyle = $param["HostNameStyle"];
        }
    }
}
