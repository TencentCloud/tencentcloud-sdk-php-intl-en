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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network information
 *
 * @method string getVip() Obtain Private network IP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Private network IP
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Private network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Private network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getWanDomain() Obtain Public network domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWanDomain(string $WanDomain) Set Public network domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getWanPort() Obtain Public network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWanPort(integer $WanPort) Set Public network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getNetType() Obtain Network type. Valid values: `ro` (read-only), `rw` or `ha` (read-write)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNetType(string $NetType) Set Network type. Valid values: `ro` (read-only), `rw` or `ha` (read-write)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUniqSubnetId() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanIP() Obtain Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanIP(string $WanIP) Set Public IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanStatus() Obtain Public network status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanStatus(string $WanStatus) Set Public network status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceGroupId() Obtain Instance group ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance group ID Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetAddr extends AbstractModel
{
    /**
     * @var string Private network IP
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Private network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string Public network domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WanDomain;

    /**
     * @var integer Public network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WanPort;

    /**
     * @var string Network type. Valid values: `ro` (read-only), `rw` or `ha` (read-write)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NetType;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqSubnetId;

    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanIP;

    /**
     * @var string Public network status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanStatus;

    /**
     * @var string Instance group ID Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceGroupId;

    /**
     * @param string $Vip Private network IP
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Vport Private network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $WanDomain Public network domain name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $WanPort Public network port number
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $NetType Network type. Valid values: `ro` (read-only), `rw` or `ha` (read-write)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UniqSubnetId Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanIP Public IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanStatus Public network status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceGroupId Instance group ID Note: This field may return null, indicating that no valid values can be obtained.
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
