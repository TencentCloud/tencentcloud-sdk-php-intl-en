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
 * Network ACL rules.
 *
 * @method string getProtocol() Obtain Protocol. Valid values: TCP, UDP, ICMP, ALL.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: TCP, UDP, ICMP, ALL.
 * @method string getPort() Obtain Port. Valid values: all, single port, range. When Protocol takes the value `ALL` or `ICMP`, Port cannot be specified.
 * @method void setPort(string $Port) Set Port. Valid values: all, single port, range. When Protocol takes the value `ALL` or `ICMP`, Port cannot be specified.
 * @method string getCidrBlock() Obtain IP range or IP address (mutually exclusive).
 * @method void setCidrBlock(string $CidrBlock) Set IP range or IP address (mutually exclusive).
 * @method string getIpv6CidrBlock() Obtain CIDR block or IPv6 address (mutually exclusive).
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set CIDR block or IPv6 address (mutually exclusive).
 * @method string getAction() Obtain ACCEPT or DROP.
 * @method void setAction(string $Action) Set ACCEPT or DROP.
 * @method string getDescription() Obtain Rule description, which is up to 100 bytes.
 * @method void setDescription(string $Description) Set Rule description, which is up to 100 bytes.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 */
class NetworkAclEntry extends AbstractModel
{
    /**
     * @var string Protocol. Valid values: TCP, UDP, ICMP, ALL.
     */
    public $Protocol;

    /**
     * @var string Port. Valid values: all, single port, range. When Protocol takes the value `ALL` or `ICMP`, Port cannot be specified.
     */
    public $Port;

    /**
     * @var string IP range or IP address (mutually exclusive).
     */
    public $CidrBlock;

    /**
     * @var string CIDR block or IPv6 address (mutually exclusive).
     */
    public $Ipv6CidrBlock;

    /**
     * @var string ACCEPT or DROP.
     */
    public $Action;

    /**
     * @var string Rule description, which is up to 100 bytes.
     */
    public $Description;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @param string $Protocol Protocol. Valid values: TCP, UDP, ICMP, ALL.
     * @param string $Port Port. Valid values: all, single port, range. When Protocol takes the value `ALL` or `ICMP`, Port cannot be specified.
     * @param string $CidrBlock IP range or IP address (mutually exclusive).
     * @param string $Ipv6CidrBlock CIDR block or IPv6 address (mutually exclusive).
     * @param string $Action ACCEPT or DROP.
     * @param string $Description Rule description, which is up to 100 bytes.
     * @param string $ModifyTime Modification time.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
