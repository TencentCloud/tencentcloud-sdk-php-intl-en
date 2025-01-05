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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PrivateDNS outbound endpoint forwarding IP
 *
 * @method string getAccessType() Obtain Specifies the forwarding target IP network access type.
CLB: Specifies that the forwarding IP is the private CLB VIP.
CCN: Specifies forwarding IP through CCN routing.
 * @method void setAccessType(string $AccessType) Set Specifies the forwarding target IP network access type.
CLB: Specifies that the forwarding IP is the private CLB VIP.
CCN: Specifies forwarding IP through CCN routing.
 * @method string getPip() Obtain Specifies the forwarding target IP address.
 * @method void setPip(string $Pip) Set Specifies the forwarding target IP address.
 * @method integer getPport() Obtain Specifies the forwarding IP port number.
 * @method void setPport(integer $Pport) Set Specifies the forwarding IP port number.
 * @method string getVpcId() Obtain Specifies the unique VPC ID.
 * @method void setVpcId(string $VpcId) Set Specifies the unique VPC ID.
 * @method string getVip() Obtain Specifies the forwarding target IP proxy IP.
 * @method void setVip(string $Vip) Set Specifies the forwarding target IP proxy IP.
 * @method integer getVport() Obtain Specifies the forwarding target IP proxy port.
 * @method void setVport(integer $Vport) Set Specifies the forwarding target IP proxy port.
 * @method string getProto() Obtain Specifies the forwarding target IP protocol.
 * @method void setProto(string $Proto) Set Specifies the forwarding target IP protocol.
 * @method string getSubnetId() Obtain Specifies the unique subnet ID.
Required if the access type is CCN.
 * @method void setSubnetId(string $SubnetId) Set Specifies the unique subnet ID.
Required if the access type is CCN.
 * @method string getAccessGatewayId() Obtain ccn id
Required if the access type is CCN.
 * @method void setAccessGatewayId(string $AccessGatewayId) Set ccn id
Required if the access type is CCN.
 * @method string getSnatVipCidr() Obtain The SNAT CIDR block of the outbound endpoint.
 * @method void setSnatVipCidr(string $SnatVipCidr) Set The SNAT CIDR block of the outbound endpoint.
 * @method string getSnatVipSet() Obtain The SNAT IP list of the outbound endpoint.
 * @method void setSnatVipSet(string $SnatVipSet) Set The SNAT IP list of the outbound endpoint.
 * @method string getRegion() Obtain The region of the outbound endpoint service.
 * @method void setRegion(string $Region) Set The region of the outbound endpoint service.
 */
class EndpointService extends AbstractModel
{
    /**
     * @var string Specifies the forwarding target IP network access type.
CLB: Specifies that the forwarding IP is the private CLB VIP.
CCN: Specifies forwarding IP through CCN routing.
     */
    public $AccessType;

    /**
     * @var string Specifies the forwarding target IP address.
     */
    public $Pip;

    /**
     * @var integer Specifies the forwarding IP port number.
     */
    public $Pport;

    /**
     * @var string Specifies the unique VPC ID.
     */
    public $VpcId;

    /**
     * @var string Specifies the forwarding target IP proxy IP.
     */
    public $Vip;

    /**
     * @var integer Specifies the forwarding target IP proxy port.
     */
    public $Vport;

    /**
     * @var string Specifies the forwarding target IP protocol.
     */
    public $Proto;

    /**
     * @var string Specifies the unique subnet ID.
Required if the access type is CCN.
     */
    public $SubnetId;

    /**
     * @var string ccn id
Required if the access type is CCN.
     */
    public $AccessGatewayId;

    /**
     * @var string The SNAT CIDR block of the outbound endpoint.
     */
    public $SnatVipCidr;

    /**
     * @var string The SNAT IP list of the outbound endpoint.
     */
    public $SnatVipSet;

    /**
     * @var string The region of the outbound endpoint service.
     */
    public $Region;

    /**
     * @param string $AccessType Specifies the forwarding target IP network access type.
CLB: Specifies that the forwarding IP is the private CLB VIP.
CCN: Specifies forwarding IP through CCN routing.
     * @param string $Pip Specifies the forwarding target IP address.
     * @param integer $Pport Specifies the forwarding IP port number.
     * @param string $VpcId Specifies the unique VPC ID.
     * @param string $Vip Specifies the forwarding target IP proxy IP.
     * @param integer $Vport Specifies the forwarding target IP proxy port.
     * @param string $Proto Specifies the forwarding target IP protocol.
     * @param string $SubnetId Specifies the unique subnet ID.
Required if the access type is CCN.
     * @param string $AccessGatewayId ccn id
Required if the access type is CCN.
     * @param string $SnatVipCidr The SNAT CIDR block of the outbound endpoint.
     * @param string $SnatVipSet The SNAT IP list of the outbound endpoint.
     * @param string $Region The region of the outbound endpoint service.
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Pip",$param) and $param["Pip"] !== null) {
            $this->Pip = $param["Pip"];
        }

        if (array_key_exists("Pport",$param) and $param["Pport"] !== null) {
            $this->Pport = $param["Pport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AccessGatewayId",$param) and $param["AccessGatewayId"] !== null) {
            $this->AccessGatewayId = $param["AccessGatewayId"];
        }

        if (array_key_exists("SnatVipCidr",$param) and $param["SnatVipCidr"] !== null) {
            $this->SnatVipCidr = $param["SnatVipCidr"];
        }

        if (array_key_exists("SnatVipSet",$param) and $param["SnatVipSet"] !== null) {
            $this->SnatVipSet = $param["SnatVipSet"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
