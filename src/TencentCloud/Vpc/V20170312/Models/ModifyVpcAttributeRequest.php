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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcAttribute request structure.
 *
 * @method string getVpcId() Obtain Security group can be named freely, but cannot exceed 60 characters.
 * @method void setVpcId(string $VpcId) Set Security group can be named freely, but cannot exceed 60 characters.
 * @method string getVpcName() Obtain VPC can be named freely, but the maximum length is 60 characters.
 * @method void setVpcName(string $VpcName) Set VPC can be named freely, but the maximum length is 60 characters.
 * @method string getEnableMulticast() Obtain Whether multicast is enabled. `true`: Enabled. `false`: Off.
 * @method void setEnableMulticast(string $EnableMulticast) Set Whether multicast is enabled. `true`: Enabled. `false`: Off.
 * @method array getDnsServers() Obtain DNS address. A maximum of 4 addresses is supported. The first one is primary server by default, and the rest are secondary servers.
 * @method void setDnsServers(array $DnsServers) Set DNS address. A maximum of 4 addresses is supported. The first one is primary server by default, and the rest are secondary servers.
 * @method string getDomainName() Obtain Domain name
 * @method void setDomainName(string $DomainName) Set Domain name
 * @method boolean getEnableCdcPublish() Obtain Whether to publish the CDC subnet to CCN. `true`: Publish; `false`: Do not publish
 * @method void setEnableCdcPublish(boolean $EnableCdcPublish) Set Whether to publish the CDC subnet to CCN. `true`: Publish; `false`: Do not publish
 */
class ModifyVpcAttributeRequest extends AbstractModel
{
    /**
     * @var string Security group can be named freely, but cannot exceed 60 characters.
     */
    public $VpcId;

    /**
     * @var string VPC can be named freely, but the maximum length is 60 characters.
     */
    public $VpcName;

    /**
     * @var string Whether multicast is enabled. `true`: Enabled. `false`: Off.
     */
    public $EnableMulticast;

    /**
     * @var array DNS address. A maximum of 4 addresses is supported. The first one is primary server by default, and the rest are secondary servers.
     */
    public $DnsServers;

    /**
     * @var string Domain name
     */
    public $DomainName;

    /**
     * @var boolean Whether to publish the CDC subnet to CCN. `true`: Publish; `false`: Do not publish
     */
    public $EnableCdcPublish;

    /**
     * @param string $VpcId Security group can be named freely, but cannot exceed 60 characters.
     * @param string $VpcName VPC can be named freely, but the maximum length is 60 characters.
     * @param string $EnableMulticast Whether multicast is enabled. `true`: Enabled. `false`: Off.
     * @param array $DnsServers DNS address. A maximum of 4 addresses is supported. The first one is primary server by default, and the rest are secondary servers.
     * @param string $DomainName Domain name
     * @param boolean $EnableCdcPublish Whether to publish the CDC subnet to CCN. `true`: Publish; `false`: Do not publish
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = $param["DnsServers"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("EnableCdcPublish",$param) and $param["EnableCdcPublish"] !== null) {
            $this->EnableCdcPublish = $param["EnableCdcPublish"];
        }
    }
}
