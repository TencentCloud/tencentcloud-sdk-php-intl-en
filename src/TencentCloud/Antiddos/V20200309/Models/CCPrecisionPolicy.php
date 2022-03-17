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
 * CC precise protection policy information
 *
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getPolicyAction() Obtain Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
 * @method void setPolicyAction(string $PolicyAction) Set Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
 * @method array getPolicyList() Obtain List of policies
 * @method void setPolicyList(array $PolicyList) Set List of policies
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class CCPrecisionPolicy extends AbstractModel
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
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
     */
    public $PolicyAction;

    /**
     * @var array List of policies
     */
    public $PolicyList;

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
     * @param string $Protocol Protocol
     * @param string $Domain Domain name
     * @param string $PolicyAction Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
     * @param array $PolicyList List of policies
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("PolicyList",$param) and $param["PolicyList"] !== null) {
            $this->PolicyList = [];
            foreach ($param["PolicyList"] as $key => $value){
                $obj = new CCPrecisionPlyRecord();
                $obj->deserialize($value);
                array_push($this->PolicyList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
