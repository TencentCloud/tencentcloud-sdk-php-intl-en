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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Settings of CVM instance names.
 *
 * @method string getInstanceName() Obtain CVM instance name. Value range: 2-108.
 * @method void setInstanceName(string $InstanceName) Set CVM instance name. Value range: 2-108.
 * @method string getInstanceNameStyle() Obtain Type of CVM instance name. Valid values: `ORIGINAL` and `UNIQUE`. Default value: `ORIGINAL`.

`ORIGINAL`: Auto Scaling sends the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the scaling group may conflict.

`UNIQUE`: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the scaling group is unique.
 * @method void setInstanceNameStyle(string $InstanceNameStyle) Set Type of CVM instance name. Valid values: `ORIGINAL` and `UNIQUE`. Default value: `ORIGINAL`.

`ORIGINAL`: Auto Scaling sends the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the scaling group may conflict.

`UNIQUE`: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the scaling group is unique.
 * @method string getInstanceNameSuffix() Obtain CVM instance name suffix. The suffix for a CVM instance name must be 1 to 105 characters in length. Additionally, the combined character count of the base instance name and the suffix must not exceed 107 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNameSuffix(string $InstanceNameSuffix) Set CVM instance name suffix. The suffix for a CVM instance name must be 1 to 105 characters in length. Additionally, the combined character count of the base instance name and the suffix must not exceed 107 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceNameDelimiter() Obtain Specifies the delimiter for the CVM instance name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating instance name, index, and suffix. Assuming instance name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
 * @method void setInstanceNameDelimiter(string $InstanceNameDelimiter) Set Specifies the delimiter for the CVM instance name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating instance name, index, and suffix. Assuming instance name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
 */
class InstanceNameSettings extends AbstractModel
{
    /**
     * @var string CVM instance name. Value range: 2-108.
     */
    public $InstanceName;

    /**
     * @var string Type of CVM instance name. Valid values: `ORIGINAL` and `UNIQUE`. Default value: `ORIGINAL`.

`ORIGINAL`: Auto Scaling sends the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the scaling group may conflict.

`UNIQUE`: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the scaling group is unique.
     */
    public $InstanceNameStyle;

    /**
     * @var string CVM instance name suffix. The suffix for a CVM instance name must be 1 to 105 characters in length. Additionally, the combined character count of the base instance name and the suffix must not exceed 107 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNameSuffix;

    /**
     * @var string Specifies the delimiter for the CVM instance name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating instance name, index, and suffix. Assuming instance name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
     */
    public $InstanceNameDelimiter;

    /**
     * @param string $InstanceName CVM instance name. Value range: 2-108.
     * @param string $InstanceNameStyle Type of CVM instance name. Valid values: `ORIGINAL` and `UNIQUE`. Default value: `ORIGINAL`.

`ORIGINAL`: Auto Scaling sends the input parameter `InstanceName` to the CVM directly. The CVM may append a serial number to the `InstanceName`. The `InstanceName` of the instances within the scaling group may conflict.

`UNIQUE`: the input parameter `InstanceName` is the prefix of an instance name. Auto Scaling and CVM expand it. The `InstanceName` of an instance in the scaling group is unique.
     * @param string $InstanceNameSuffix CVM instance name suffix. The suffix for a CVM instance name must be 1 to 105 characters in length. Additionally, the combined character count of the base instance name and the suffix must not exceed 107 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceNameDelimiter Specifies the delimiter for the CVM instance name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating instance name, index, and suffix. Assuming instance name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
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

        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            $this->InstanceNameSuffix = $param["InstanceNameSuffix"];
        }

        if (array_key_exists("InstanceNameDelimiter",$param) and $param["InstanceNameDelimiter"] !== null) {
            $this->InstanceNameDelimiter = $param["InstanceNameDelimiter"];
        }
    }
}
