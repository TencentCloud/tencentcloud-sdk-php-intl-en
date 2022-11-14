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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC DNS status of NAT firewall
 *
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method integer getFwMode() Obtain NAT firewall mode. 0: Create new; 1: Use existing
 * @method void setFwMode(integer $FwMode) Set NAT firewall mode. 0: Create new; 1: Use existing
 * @method string getVpcIpv4Cidr() Obtain VPC IPv4 CIDR block (Classless Inter-Domain Routing)
 * @method void setVpcIpv4Cidr(string $VpcIpv4Cidr) Set VPC IPv4 CIDR block (Classless Inter-Domain Routing)
 * @method string getDNSEip() Obtain Public EIP, which is the firewall DNS resolution address
 * @method void setDNSEip(string $DNSEip) Set Public EIP, which is the firewall DNS resolution address
 * @method string getNatInsId() Obtain NAT gateway ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNatInsId(string $NatInsId) Set NAT gateway ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getNatInsName() Obtain NAT gateway name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNatInsName(string $NatInsName) Set NAT gateway name
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getSwitchStatus() Obtain 0: off; 1: on
 * @method void setSwitchStatus(integer $SwitchStatus) Set 0: off; 1: on
 */
class VpcDnsInfo extends AbstractModel
{
    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var integer NAT firewall mode. 0: Create new; 1: Use existing
     */
    public $FwMode;

    /**
     * @var string VPC IPv4 CIDR block (Classless Inter-Domain Routing)
     */
    public $VpcIpv4Cidr;

    /**
     * @var string Public EIP, which is the firewall DNS resolution address
     */
    public $DNSEip;

    /**
     * @var string NAT gateway ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NatInsId;

    /**
     * @var string NAT gateway name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NatInsName;

    /**
     * @var integer 0: off; 1: on
     */
    public $SwitchStatus;

    /**
     * @param string $VpcId VPC ID
     * @param string $VpcName VPC name
     * @param integer $FwMode NAT firewall mode. 0: Create new; 1: Use existing
     * @param string $VpcIpv4Cidr VPC IPv4 CIDR block (Classless Inter-Domain Routing)
     * @param string $DNSEip Public EIP, which is the firewall DNS resolution address
     * @param string $NatInsId NAT gateway ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $NatInsName NAT gateway name
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $SwitchStatus 0: off; 1: on
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

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("VpcIpv4Cidr",$param) and $param["VpcIpv4Cidr"] !== null) {
            $this->VpcIpv4Cidr = $param["VpcIpv4Cidr"];
        }

        if (array_key_exists("DNSEip",$param) and $param["DNSEip"] !== null) {
            $this->DNSEip = $param["DNSEip"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("NatInsName",$param) and $param["NatInsName"] !== null) {
            $this->NatInsName = $param["NatInsName"];
        }

        if (array_key_exists("SwitchStatus",$param) and $param["SwitchStatus"] !== null) {
            $this->SwitchStatus = $param["SwitchStatus"];
        }
    }
}
