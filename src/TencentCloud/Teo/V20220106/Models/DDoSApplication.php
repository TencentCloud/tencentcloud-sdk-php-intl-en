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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS protection for the application layer (layer 7)
 *
 * @method string getHost() Obtain Second-level domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHost(string $Host) Set Second-level domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Status of the domain name
`init`: NS to be switched
`offline`: Site acceleration not enabled with DNS
`process`: Deployment in progress
`online`: Normal
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Status of the domain name
`init`: NS to be switched
`offline`: Site acceleration not enabled with DNS
`process`: Deployment in progress
`online`: Normal
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAccelerateType() Obtain Site acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `SecurityType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAccelerateType(string $AccelerateType) Set Site acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `SecurityType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSecurityType() Obtain Security acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `AccelerateType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSecurityType(string $SecurityType) Set Security acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `AccelerateType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DDoSApplication extends AbstractModel
{
    /**
     * @var string Second-level domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Host;

    /**
     * @var string Status of the domain name
`init`: NS to be switched
`offline`: Site acceleration not enabled with DNS
`process`: Deployment in progress
`online`: Normal
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Site acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `SecurityType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AccelerateType;

    /**
     * @var string Security acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `AccelerateType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SecurityType;

    /**
     * @param string $Host Second-level domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Status Status of the domain name
`init`: NS to be switched
`offline`: Site acceleration not enabled with DNS
`process`: Deployment in progress
`online`: Normal
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $AccelerateType Site acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `SecurityType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SecurityType Security acceleration switch. `on`: Enable site acceleration; `off`: Disable site acceleration. This field can be used together with `AccelerateType`.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }
    }
}
