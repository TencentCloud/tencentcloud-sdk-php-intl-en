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
 * CVM HostName settings
 *
 * @method string getHostName() Obtain Specifies the cvm hostname.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>. 
<Li>Windows instances are not supported.</li>. 
<li>Instances of other types (such as Linux): specifies the character length should be within the range of [2, 42]. multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-). using only digits is not allowed.</li>. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Specifies the cvm hostname.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>. 
<Li>Windows instances are not supported.</li>. 
<li>Instances of other types (such as Linux): specifies the character length should be within the range of [2, 42]. multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-). using only digits is not allowed.</li>. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostNameStyle() Obtain The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostNameStyle(string $HostNameStyle) Set The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostNameSuffix() Obtain Specifies the hostname suffix for cvm.
<li>Dots (.) and hyphens (-) cannot be used as the last character of HostNameSuffix, and cannot be used consecutively.</li>
<Li>Windows instances are not supported.</li>
<li>Instances of other types (such as Linux): The character length should be within the range of [1, 39], and the combined length with HostName cannot exceed 41. Multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostNameSuffix(string $HostNameSuffix) Set Specifies the hostname suffix for cvm.
<li>Dots (.) and hyphens (-) cannot be used as the last character of HostNameSuffix, and cannot be used consecutively.</li>
<Li>Windows instances are not supported.</li>
<li>Instances of other types (such as Linux): The character length should be within the range of [1, 39], and the combined length with HostName cannot exceed 41. Multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostNameDelimiter() Obtain Specifies the delimiter for the CVM host name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating host name, index, and suffix. Assuming host name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
 * @method void setHostNameDelimiter(string $HostNameDelimiter) Set Specifies the delimiter for the CVM host name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating host name, index, and suffix. Assuming host name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
 */
class HostNameSettings extends AbstractModel
{
    /**
     * @var string Specifies the cvm hostname.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>. 
<Li>Windows instances are not supported.</li>. 
<li>Instances of other types (such as Linux): specifies the character length should be within the range of [2, 42]. multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-). using only digits is not allowed.</li>. 
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
     * @var string Specifies the hostname suffix for cvm.
<li>Dots (.) and hyphens (-) cannot be used as the last character of HostNameSuffix, and cannot be used consecutively.</li>
<Li>Windows instances are not supported.</li>
<li>Instances of other types (such as Linux): The character length should be within the range of [1, 39], and the combined length with HostName cannot exceed 41. Multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostNameSuffix;

    /**
     * @var string Specifies the delimiter for the CVM host name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating host name, index, and suffix. Assuming host name is testGpu4090, index is 0007, and suffix is server.
-The delimiter is a period (.), and the final concatenation is testGpu4090.007.server.
-Specifies the delimiter as a hyphen (-), with the final concatenation as testGpu4090-007-server.
-Delimiter is an empty string, finally concatenated as testGpu4090007server.
     */
    public $HostNameDelimiter;

    /**
     * @param string $HostName Specifies the cvm hostname.
<li>Dots (.) and hyphens (-) cannot be used as the first or last character of HostName, and cannot be used consecutively.</li>. 
<Li>Windows instances are not supported.</li>. 
<li>Instances of other types (such as Linux): specifies the character length should be within the range of [2, 42]. multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-). using only digits is not allowed.</li>. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostNameStyle The style of the CVM HostName. Valid values include ORIGINAL and UNIQUE, and the default value is ORIGINAL.
<li>ORIGINAL: AS passes HostName filled in the input parameters to CVM. CVM may append serial numbers to HostName, which can result in conflicts with HostName of instances in the scaling group.</li>
<li> UNIQUE: HostName filled in the input parameters acts as a prefix for the HostName. AS and CVM will expand this prefix to ensure that HostName of the instance in the scaling group is unique.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostNameSuffix Specifies the hostname suffix for cvm.
<li>Dots (.) and hyphens (-) cannot be used as the last character of HostNameSuffix, and cannot be used consecutively.</li>
<Li>Windows instances are not supported.</li>
<li>Instances of other types (such as Linux): The character length should be within the range of [1, 39], and the combined length with HostName cannot exceed 41. Multiple dots (.) are allowed. each segment between dots can consist of letters (case-insensitive), digits, and hyphens (-).</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostNameDelimiter Specifies the delimiter for the CVM host name. The default delimiter is a dot (.). Valid values: 
- dot (.)
-  hyphen (-)
- empty string.
Delimiter used for concatenating host name, index, and suffix. Assuming host name is testGpu4090, index is 0007, and suffix is server.
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostNameStyle",$param) and $param["HostNameStyle"] !== null) {
            $this->HostNameStyle = $param["HostNameStyle"];
        }

        if (array_key_exists("HostNameSuffix",$param) and $param["HostNameSuffix"] !== null) {
            $this->HostNameSuffix = $param["HostNameSuffix"];
        }

        if (array_key_exists("HostNameDelimiter",$param) and $param["HostNameDelimiter"] !== null) {
            $this->HostNameDelimiter = $param["HostNameDelimiter"];
        }
    }
}
