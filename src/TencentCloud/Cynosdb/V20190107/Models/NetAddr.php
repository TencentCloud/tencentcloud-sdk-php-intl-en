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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network info
 *
 * @method string getVip() Obtain Private IP address
 * @method void setVip(string $Vip) Set Private IP address
 * @method integer getVport() Obtain Private network port number
 * @method void setVport(integer $Vport) Set Private network port number
 * @method string getWanDomain() Obtain Public network domain name.
 * @method void setWanDomain(string $WanDomain) Set Public network domain name.
 * @method integer getWanPort() Obtain Public network port number.
 * @method void setWanPort(integer $WanPort) Set Public network port number.
 * @method string getNetType() Obtain Network type (ro: read-only, rw/ha: read-write)
 * @method void setNetType(string $NetType) Set Network type (ro: read-only, rw/ha: read-write)
 * @method string getUniqSubnetId() Obtain Subnet ID.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID.
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getDescription() Obtain Description information
 * @method void setDescription(string $Description) Set Description information
 * @method string getWanIP() Obtain Public IP address
 * @method void setWanIP(string $WanIP) Set Public IP address
 * @method string getWanStatus() Obtain Public network status.
 * @method void setWanStatus(string $WanStatus) Set Public network status.
 * @method string getInstanceGroupId() Obtain Instance group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance group ID
 */
class NetAddr extends AbstractModel
{
    /**
     * @var string Private IP address
     */
    public $Vip;

    /**
     * @var integer Private network port number
     */
    public $Vport;

    /**
     * @var string Public network domain name.
     */
    public $WanDomain;

    /**
     * @var integer Public network port number.
     */
    public $WanPort;

    /**
     * @var string Network type (ro: read-only, rw/ha: read-write)
     */
    public $NetType;

    /**
     * @var string Subnet ID.
     */
    public $UniqSubnetId;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string Description information
     */
    public $Description;

    /**
     * @var string Public IP address
     */
    public $WanIP;

    /**
     * @var string Public network status.
     */
    public $WanStatus;

    /**
     * @var string Instance group ID
     */
    public $InstanceGroupId;

    /**
     * @param string $Vip Private IP address
     * @param integer $Vport Private network port number
     * @param string $WanDomain Public network domain name.
     * @param integer $WanPort Public network port number.
     * @param string $NetType Network type (ro: read-only, rw/ha: read-write)
     * @param string $UniqSubnetId Subnet ID.
     * @param string $UniqVpcId VPC ID
     * @param string $Description Description information
     * @param string $WanIP Public IP address
     * @param string $WanStatus Public network status.
     * @param string $InstanceGroupId Instance group ID
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }
    }
}
