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
 * @method string getAccessType() Obtain Forwarding target IP network access type.
CLB: The forwarding IP is the internal CLB VIP.
CCN: Forwarding IP through CCN routing.
 * @method void setAccessType(string $AccessType) Set Forwarding target IP network access type.
CLB: The forwarding IP is the internal CLB VIP.
CCN: Forwarding IP through CCN routing.
 * @method string getHost() Obtain Forwarding target IP address.
 * @method void setHost(string $Host) Set Forwarding target IP address.
 * @method integer getPort() Obtain Specifies the forwarding IP port number.
 * @method void setPort(integer $Port) Set Specifies the forwarding IP port number.
 * @method integer getIpNum() Obtain Specifies the number of outbound endpoints.
Minimum 1, maximum 6.
 * @method void setIpNum(integer $IpNum) Set Specifies the number of outbound endpoints.
Minimum 1, maximum 6.
 * @method string getVpcId() Obtain Unique VPC ID.
 * @method void setVpcId(string $VpcId) Set Unique VPC ID.
 * @method string getSubnetId() Obtain Unique subnet ID.
Required when the access type is CCN.
 * @method void setSubnetId(string $SubnetId) Set Unique subnet ID.
Required when the access type is CCN.
 * @method string getAccessGatewayId() Obtain ccn id
Required when the access type is CCN.
 * @method void setAccessGatewayId(string $AccessGatewayId) Set ccn id
Required when the access type is CCN.
 */
class ForwardIp extends AbstractModel
{
    /**
     * @var string Forwarding target IP network access type.
CLB: The forwarding IP is the internal CLB VIP.
CCN: Forwarding IP through CCN routing.
     */
    public $AccessType;

    /**
     * @var string Forwarding target IP address.
     */
    public $Host;

    /**
     * @var integer Specifies the forwarding IP port number.
     */
    public $Port;

    /**
     * @var integer Specifies the number of outbound endpoints.
Minimum 1, maximum 6.
     */
    public $IpNum;

    /**
     * @var string Unique VPC ID.
     */
    public $VpcId;

    /**
     * @var string Unique subnet ID.
Required when the access type is CCN.
     */
    public $SubnetId;

    /**
     * @var string ccn id
Required when the access type is CCN.
     */
    public $AccessGatewayId;

    /**
     * @param string $AccessType Forwarding target IP network access type.
CLB: The forwarding IP is the internal CLB VIP.
CCN: Forwarding IP through CCN routing.
     * @param string $Host Forwarding target IP address.
     * @param integer $Port Specifies the forwarding IP port number.
     * @param integer $IpNum Specifies the number of outbound endpoints.
Minimum 1, maximum 6.
     * @param string $VpcId Unique VPC ID.
     * @param string $SubnetId Unique subnet ID.
Required when the access type is CCN.
     * @param string $AccessGatewayId ccn id
Required when the access type is CCN.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IpNum",$param) and $param["IpNum"] !== null) {
            $this->IpNum = $param["IpNum"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AccessGatewayId",$param) and $param["AccessGatewayId"] !== null) {
            $this->AccessGatewayId = $param["AccessGatewayId"];
        }
    }
}
