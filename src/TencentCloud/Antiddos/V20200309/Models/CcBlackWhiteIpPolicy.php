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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-4 access control list
 *
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getType() Obtain IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method void setType(string $Type) Set IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
 * @method string getBlackWhiteIp() Obtain Blocklist/Allowlist IP address
 * @method void setBlackWhiteIp(string $BlackWhiteIp) Set Blocklist/Allowlist IP address
 * @method integer getMask() Obtain Mask
 * @method void setMask(integer $Mask) Set Mask
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class CcBlackWhiteIpPolicy extends AbstractModel
{
    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     */
    public $Type;

    /**
     * @var string Blocklist/Allowlist IP address
     */
    public $BlackWhiteIp;

    /**
     * @var integer Mask
     */
    public $Mask;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param string $PolicyId Policy ID
     * @param string $InstanceId Instance ID
     * @param string $Ip IP address
     * @param string $Domain Domain name
     * @param string $Protocol Protocol
     * @param string $Type IP type. Valid values: `black` (blocklisted IP), `white`(allowlisted IP).
     * @param string $BlackWhiteIp Blocklist/Allowlist IP address
     * @param integer $Mask Mask
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BlackWhiteIp",$param) and $param["BlackWhiteIp"] !== null) {
            $this->BlackWhiteIp = $param["BlackWhiteIp"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
