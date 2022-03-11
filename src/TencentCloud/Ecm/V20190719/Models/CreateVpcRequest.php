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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpc request structure.
 *
 * @method string getVpcName() Obtain VPC name, which can contain up to 60 bytes.
 * @method void setVpcName(string $VpcName) Set VPC name, which can contain up to 60 bytes.
 * @method string getCidrBlock() Obtain VPC CIDR block, which must fall within the following private network IP ranges: 10.*.0.0/16, 172.[16-31].0.0/16, and 192.168.0.0/16.
 * @method void setCidrBlock(string $CidrBlock) Set VPC CIDR block, which must fall within the following private network IP ranges: 10.*.0.0/16, 172.[16-31].0.0/16, and 192.168.0.0/16.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getEnableMulticast() Obtain Whether multicast is enabled. true: enabled; false: disabled. This parameter is not supported currently
 * @method void setEnableMulticast(string $EnableMulticast) Set Whether multicast is enabled. true: enabled; false: disabled. This parameter is not supported currently
 * @method array getDnsServers() Obtain DNS address (not supported currently). Up to 4 addresses can be supported.
 * @method void setDnsServers(array $DnsServers) Set DNS address (not supported currently). Up to 4 addresses can be supported.
 * @method string getDomainName() Obtain Domain name. This parameter is not supported currently
 * @method void setDomainName(string $DomainName) Set Domain name. This parameter is not supported currently
 * @method array getTags() Obtain List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class CreateVpcRequest extends AbstractModel
{
    /**
     * @var string VPC name, which can contain up to 60 bytes.
     */
    public $VpcName;

    /**
     * @var string VPC CIDR block, which must fall within the following private network IP ranges: 10.*.0.0/16, 172.[16-31].0.0/16, and 192.168.0.0/16.
     */
    public $CidrBlock;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string Whether multicast is enabled. true: enabled; false: disabled. This parameter is not supported currently
     */
    public $EnableMulticast;

    /**
     * @var array DNS address (not supported currently). Up to 4 addresses can be supported.
     */
    public $DnsServers;

    /**
     * @var string Domain name. This parameter is not supported currently
     */
    public $DomainName;

    /**
     * @var array List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $VpcName VPC name, which can contain up to 60 bytes.
     * @param string $CidrBlock VPC CIDR block, which must fall within the following private network IP ranges: 10.*.0.0/16, 172.[16-31].0.0/16, and 192.168.0.0/16.
     * @param string $EcmRegion ECM region
     * @param string $EnableMulticast Whether multicast is enabled. true: enabled; false: disabled. This parameter is not supported currently
     * @param array $DnsServers DNS address (not supported currently). Up to 4 addresses can be supported.
     * @param string $DomainName Domain name. This parameter is not supported currently
     * @param array $Tags List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     * @param string $Description Description
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
