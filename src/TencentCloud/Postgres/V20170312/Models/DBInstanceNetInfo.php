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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance network connection information
 *
 * @method string getAddress() Obtain DNS domain name
 * @method void setAddress(string $Address) Set DNS domain name
 * @method string getIp() Obtain Ip
 * @method void setIp(string $Ip) Set Ip
 * @method integer getPort() Obtain Connection port address
 * @method void setPort(integer $Port) Set Connection port address
 * @method string getNetType() Obtain Network type. 1: inner (private network address), 2: public (public network address)
 * @method void setNetType(string $NetType) Set Network type. 1: inner (private network address), 2: public (public network address)
 * @method string getStatus() Obtain Network connection status. Valid values: `initing` (never enabled before), `opened` (enabled), `closed` (disabled), `opening` (enabling), `closing` (disabling)
 * @method void setStatus(string $Status) Set Network connection status. Valid values: `initing` (never enabled before), `opened` (enabled), `closed` (disabled), `opening` (enabling), `closing` (disabling)
 * @method string getVpcId() Obtain VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProtocolType() Obtain Database connection protocol type. Valid values: `postgresql`, `mssql` (MSSQL-compatible)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocolType(string $ProtocolType) Set Database connection protocol type. Valid values: `postgresql`, `mssql` (MSSQL-compatible)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string DNS domain name
     */
    public $Address;

    /**
     * @var string Ip
     */
    public $Ip;

    /**
     * @var integer Connection port address
     */
    public $Port;

    /**
     * @var string Network type. 1: inner (private network address), 2: public (public network address)
     */
    public $NetType;

    /**
     * @var string Network connection status. Valid values: `initing` (never enabled before), `opened` (enabled), `closed` (disabled), `opening` (enabling), `closing` (disabling)
     */
    public $Status;

    /**
     * @var string VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Database connection protocol type. Valid values: `postgresql`, `mssql` (MSSQL-compatible)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProtocolType;

    /**
     * @param string $Address DNS domain name
     * @param string $Ip Ip
     * @param integer $Port Connection port address
     * @param string $NetType Network type. 1: inner (private network address), 2: public (public network address)
     * @param string $Status Network connection status. Valid values: `initing` (never enabled before), `opened` (enabled), `closed` (disabled), `opening` (enabling), `closing` (disabling)
     * @param string $VpcId VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProtocolType Database connection protocol type. Valid values: `postgresql`, `mssql` (MSSQL-compatible)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }
    }
}
