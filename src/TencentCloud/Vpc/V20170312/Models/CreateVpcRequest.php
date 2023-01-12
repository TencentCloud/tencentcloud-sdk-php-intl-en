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
 * CreateVpc request structure.
 *
 * @method string getVpcName() Obtain The VPC name. The maximum length is 60 bytes.
 * @method void setVpcName(string $VpcName) Set The VPC name. The maximum length is 60 bytes.
 * @method string getCidrBlock() Obtain VPC CIDR block, which must fall within the following three private network IP ranges: 10.0.0.0/12, 172.16.0.0/12, and 192.168.0.0/16.
 * @method void setCidrBlock(string $CidrBlock) Set VPC CIDR block, which must fall within the following three private network IP ranges: 10.0.0.0/12, 172.16.0.0/12, and 192.168.0.0/16.
 * @method string getEnableMulticast() Obtain Whether multicast is enabled. `true`: Enabled. `false`: Not enabled.
 * @method void setEnableMulticast(string $EnableMulticast) Set Whether multicast is enabled. `true`: Enabled. `false`: Not enabled.
 * @method array getDnsServers() Obtain DNS address. A maximum of 4 addresses is supported.
 * @method void setDnsServers(array $DnsServers) Set DNS address. A maximum of 4 addresses is supported.
 * @method string getDomainName() Obtain Domain name of DHCP
 * @method void setDomainName(string $DomainName) Set Domain name of DHCP
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
 */
class CreateVpcRequest extends AbstractModel
{
    /**
     * @var string The VPC name. The maximum length is 60 bytes.
     */
    public $VpcName;

    /**
     * @var string VPC CIDR block, which must fall within the following three private network IP ranges: 10.0.0.0/12, 172.16.0.0/12, and 192.168.0.0/16.
     */
    public $CidrBlock;

    /**
     * @var string Whether multicast is enabled. `true`: Enabled. `false`: Not enabled.
     */
    public $EnableMulticast;

    /**
     * @var array DNS address. A maximum of 4 addresses is supported.
     */
    public $DnsServers;

    /**
     * @var string Domain name of DHCP
     */
    public $DomainName;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @param string $VpcName The VPC name. The maximum length is 60 bytes.
     * @param string $CidrBlock VPC CIDR block, which must fall within the following three private network IP ranges: 10.0.0.0/12, 172.16.0.0/12, and 192.168.0.0/16.
     * @param string $EnableMulticast Whether multicast is enabled. `true`: Enabled. `false`: Not enabled.
     * @param array $DnsServers DNS address. A maximum of 4 addresses is supported.
     * @param string $DomainName Domain name of DHCP
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
