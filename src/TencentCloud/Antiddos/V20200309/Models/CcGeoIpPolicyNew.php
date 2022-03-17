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
 * Information of the policy list
 *
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getProtocol() Obtain Protocol. Valid values: `HTTP` and `HTTPS`.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: `HTTP` and `HTTPS`.
 * @method string getAction() Obtain Action. Valid values: `drop` and `alg`.
 * @method void setAction(string $Action) Set Action. Valid values: `drop` and `alg`.
 * @method string getRegionType() Obtain Region type. Valid values: `china`, `oversea` and `customized`.
 * @method void setRegionType(string $RegionType) Set Region type. Valid values: `china`, `oversea` and `customized`.
 * @method array getAreaList() Obtain ID list of regions to be blocked
 * @method void setAreaList(array $AreaList) Set ID list of regions to be blocked
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class CcGeoIpPolicyNew extends AbstractModel
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
     * @var string 
     */
    public $Domain;

    /**
     * @var string Protocol. Valid values: `HTTP` and `HTTPS`.
     */
    public $Protocol;

    /**
     * @var string Action. Valid values: `drop` and `alg`.
     */
    public $Action;

    /**
     * @var string Region type. Valid values: `china`, `oversea` and `customized`.
     */
    public $RegionType;

    /**
     * @var array ID list of regions to be blocked
     */
    public $AreaList;

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
     * @param string $Domain 
     * @param string $Protocol Protocol. Valid values: `HTTP` and `HTTPS`.
     * @param string $Action Action. Valid values: `drop` and `alg`.
     * @param string $RegionType Region type. Valid values: `china`, `oversea` and `customized`.
     * @param array $AreaList ID list of regions to be blocked
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("AreaList",$param) and $param["AreaList"] !== null) {
            $this->AreaList = $param["AreaList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
