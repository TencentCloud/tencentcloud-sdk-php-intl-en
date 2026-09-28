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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security policy information.
 *
 * @method array getCiphers() Obtain List of supported cipher suites.
Supported encryption suite, which depends on the TLSVersions value.
Cipher only needs to be supported by any passed-in TLSVersions.

Description: If TLSv1.3 is selected, the Cipher list must contain ciphers supported by TLSv1.3.

Call the DescribeSecurityPolicyCapabilities API to get the supported encryption suite list.
 * @method void setCiphers(array $Ciphers) Set List of supported cipher suites.
Supported encryption suite, which depends on the TLSVersions value.
Cipher only needs to be supported by any passed-in TLSVersions.

Description: If TLSv1.3 is selected, the Cipher list must contain ciphers supported by TLSv1.3.

Call the DescribeSecurityPolicyCapabilities API to get the supported encryption suite list.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getSecurityPolicyId() Obtain Security policy ID, format: tls- followed by 8 alphanumeric characters.
 * @method void setSecurityPolicyId(string $SecurityPolicyId) Set Security policy ID, format: tls- followed by 8 alphanumeric characters.
 * @method string getSecurityPolicyName() Obtain Security policy name. It must be 2-128 English or Chinese characters, starting with letters or Chinese characters. It can consist of digits, half-width periods (.), underscores (_), and dashes (-).
 * @method void setSecurityPolicyName(string $SecurityPolicyName) Set Security policy name. It must be 2-128 English or Chinese characters, starting with letters or Chinese characters. It can consist of digits, half-width periods (.), underscores (_), and dashes (-).
 * @method string getStatus() Obtain Security policy status. The current API most often returns Active, which means the security policy is in available status.
 * @method void setStatus(string $Status) Set Security policy status. The current API most often returns Active, which means the security policy is in available status.
 * @method array getTLSVersions() Obtain List of supported TLS protocol versions. Optional values include: TLSv1.0, TLSv1.1, TLSv1.2, TLSv1.3.
 * @method void setTLSVersions(array $TLSVersions) Set List of supported TLS protocol versions. Optional values include: TLSv1.0, TLSv1.1, TLSv1.2, TLSv1.3.
 * @method array getTags() Obtain Tag information.
 * @method void setTags(array $Tags) Set Tag information.
 */
class SecurityPolicyInfo extends AbstractModel
{
    /**
     * @var array List of supported cipher suites.
Supported encryption suite, which depends on the TLSVersions value.
Cipher only needs to be supported by any passed-in TLSVersions.

Description: If TLSv1.3 is selected, the Cipher list must contain ciphers supported by TLSv1.3.

Call the DescribeSecurityPolicyCapabilities API to get the supported encryption suite list.
     */
    public $Ciphers;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Security policy ID, format: tls- followed by 8 alphanumeric characters.
     */
    public $SecurityPolicyId;

    /**
     * @var string Security policy name. It must be 2-128 English or Chinese characters, starting with letters or Chinese characters. It can consist of digits, half-width periods (.), underscores (_), and dashes (-).
     */
    public $SecurityPolicyName;

    /**
     * @var string Security policy status. The current API most often returns Active, which means the security policy is in available status.
     */
    public $Status;

    /**
     * @var array List of supported TLS protocol versions. Optional values include: TLSv1.0, TLSv1.1, TLSv1.2, TLSv1.3.
     */
    public $TLSVersions;

    /**
     * @var array Tag information.
     */
    public $Tags;

    /**
     * @param array $Ciphers List of supported cipher suites.
Supported encryption suite, which depends on the TLSVersions value.
Cipher only needs to be supported by any passed-in TLSVersions.

Description: If TLSv1.3 is selected, the Cipher list must contain ciphers supported by TLSv1.3.

Call the DescribeSecurityPolicyCapabilities API to get the supported encryption suite list.
     * @param string $CreateTime Creation time.
     * @param string $SecurityPolicyId Security policy ID, format: tls- followed by 8 alphanumeric characters.
     * @param string $SecurityPolicyName Security policy name. It must be 2-128 English or Chinese characters, starting with letters or Chinese characters. It can consist of digits, half-width periods (.), underscores (_), and dashes (-).
     * @param string $Status Security policy status. The current API most often returns Active, which means the security policy is in available status.
     * @param array $TLSVersions List of supported TLS protocol versions. Optional values include: TLSv1.0, TLSv1.1, TLSv1.2, TLSv1.3.
     * @param array $Tags Tag information.
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
        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("SecurityPolicyName",$param) and $param["SecurityPolicyName"] !== null) {
            $this->SecurityPolicyName = $param["SecurityPolicyName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TLSVersions",$param) and $param["TLSVersions"] !== null) {
            $this->TLSVersions = $param["TLSVersions"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
