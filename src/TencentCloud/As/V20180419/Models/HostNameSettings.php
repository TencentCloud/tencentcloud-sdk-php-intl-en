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
 * @method string getHostName() Obtain CVM HostName.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [2, 40]. Multiple dots (.) are allowed. Each segment between dot marks can consist of letters (case-insensitive), digits, and hyphens (-). Using only digits is not allowed.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set CVM HostName.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [2, 40]. Multiple dots (.) are allowed. Each segment between dot marks can consist of letters (case-insensitive), digits, and hyphens (-). Using only digits is not allowed.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostNameStyle() Obtain The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostNameStyle(string $HostNameStyle) Set The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostNameSuffix() Obtain HostName suffix for CVM.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostNameSuffix, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [1, 37], and the combined length with HostName should not exceed 39. Multiple dots (.) are allowed. Each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Assume the suffix name is suffix and the original HostName is test.0, then the final HostName is test.0.suffix.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostNameSuffix(string $HostNameSuffix) Set HostName suffix for CVM.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostNameSuffix, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [1, 37], and the combined length with HostName should not exceed 39. Multiple dots (.) are allowed. Each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Assume the suffix name is suffix and the original HostName is test.0, then the final HostName is test.0.suffix.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HostNameSettings extends AbstractModel
{
    /**
     * @var string CVM HostName.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [2, 40]. Multiple dots (.) are allowed. Each segment between dot marks can consist of letters (case-insensitive), digits, and hyphens (-). Using only digits is not allowed.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostNameStyle;

    /**
     * @var string HostName suffix for CVM.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostNameSuffix, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [1, 37], and the combined length with HostName should not exceed 39. Multiple dots (.) are allowed. Each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Assume the suffix name is suffix and the original HostName is test.0, then the final HostName is test.0.suffix.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostNameSuffix;

    /**
     * @param string $HostName CVM HostName.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [2, 40]. Multiple dots (.) are allowed. Each segment between dot marks can consist of letters (case-insensitive), digits, and hyphens (-). Using only digits is not allowed.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostNameStyle The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostNameSuffix HostName suffix for CVM.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostNameSuffix, and cannot be used consecutively.</li>
<li>Windows instances are not supported.</li>
<li>Instances of other types (e.g., Linux): The length of the character should be within the range of [1, 37], and the combined length with HostName should not exceed 39. Multiple dots (.) are allowed. Each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Assume the suffix name is suffix and the original HostName is test.0, then the final HostName is test.0.suffix.
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

        if (array_key_exists("HostNameSuffix",$param) and $param["HostNameSuffix"] !== null) {
            $this->HostNameSuffix = $param["HostNameSuffix"];
        }
    }
}
