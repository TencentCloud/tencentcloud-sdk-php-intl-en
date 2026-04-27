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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReleasePublicIp request structure.
 *
 * @method string getNetworkInstanceId() Obtain Public network instance ID (route publishing mode is STATIC)
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set Public network instance ID (route publishing mode is STATIC)
 * @method string getType() Obtain Ip type to be released, enumeration value: ipv4, ipv6
 * @method void setType(string $Type) Set Ip type to be released, enumeration value: ipv4, ipv6
 * @method array getIpList() Obtain List of Ip addresses to be released
 * @method void setIpList(array $IpList) Set List of Ip addresses to be released
 */
class ReleasePublicIpRequest extends AbstractModel
{
    /**
     * @var string Public network instance ID (route publishing mode is STATIC)
     */
    public $NetworkInstanceId;

    /**
     * @var string Ip type to be released, enumeration value: ipv4, ipv6
     */
    public $Type;

    /**
     * @var array List of Ip addresses to be released
     */
    public $IpList;

    /**
     * @param string $NetworkInstanceId Public network instance ID (route publishing mode is STATIC)
     * @param string $Type Ip type to be released, enumeration value: ipv4, ipv6
     * @param array $IpList List of Ip addresses to be released
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
