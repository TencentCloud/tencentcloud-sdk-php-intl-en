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
 * CreateCCReqLimitPolicy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getProtocol() Obtain Protocol. Valid values: `HTTP` and `HTTPS`.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: `HTTP` and `HTTPS`.
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method CCReqLimitPolicyRecord getPolicy() Obtain Configuration field
 * @method void setPolicy(CCReqLimitPolicyRecord $Policy) Set Configuration field
 * @method integer getIsGlobal() Obtain Whether it’s a global CC frequency limit
 * @method void setIsGlobal(integer $IsGlobal) Set Whether it’s a global CC frequency limit
 */
class CreateCCReqLimitPolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var string Protocol. Valid values: `HTTP` and `HTTPS`.
     */
    public $Protocol;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var CCReqLimitPolicyRecord Configuration field
     */
    public $Policy;

    /**
     * @var integer Whether it’s a global CC frequency limit
     */
    public $IsGlobal;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Ip IP address
     * @param string $Protocol Protocol. Valid values: `HTTP` and `HTTPS`.
     * @param string $Domain Domain name
     * @param CCReqLimitPolicyRecord $Policy Configuration field
     * @param integer $IsGlobal Whether it’s a global CC frequency limit
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new CCReqLimitPolicyRecord();
            $this->Policy->deserialize($param["Policy"]);
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }
    }
}
