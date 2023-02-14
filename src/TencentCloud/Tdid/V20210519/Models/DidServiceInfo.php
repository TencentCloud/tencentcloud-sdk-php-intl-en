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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The DID service information.
 *
 * @method integer getId() Obtain The DID service ID.
 * @method void setId(integer $Id) Set The DID service ID.
 * @method integer getAppid() Obtain The application ID.
 * @method void setAppid(integer $Appid) Set The application ID.
 * @method string getUin() Obtain The account ID.
 * @method void setUin(string $Uin) Set The account ID.
 * @method integer getConsortiumId() Obtain The consortium ID.
 * @method void setConsortiumId(integer $ConsortiumId) Set The consortium ID.
 * @method string getConsortiumName() Obtain The consortium name.
 * @method void setConsortiumName(string $ConsortiumName) Set The consortium name.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getChainId() Obtain The chain ID.
 * @method void setChainId(string $ChainId) Set The chain ID.
 * @method integer getRoleType() Obtain Whether you are the owner of the consortium. `1`: Yes; `0`: No.
 * @method void setRoleType(integer $RoleType) Set Whether you are the owner of the consortium. `1`: Yes; `0`: No.
 * @method string getAgencyDid() Obtain The organization DID.
 * @method void setAgencyDid(string $AgencyDid) Set The organization DID.
 * @method string getCreateOrg() Obtain The organization name.
 * @method void setCreateOrg(string $CreateOrg) Set The organization name.
 * @method string getEndpoint() Obtain The endpoint.
 * @method void setEndpoint(string $Endpoint) Set The endpoint.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The last updated time.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
 * @method string getGroupName() Obtain The group name.
 * @method void setGroupName(string $GroupName) Set The group name.
 */
class DidServiceInfo extends AbstractModel
{
    /**
     * @var integer The DID service ID.
     */
    public $Id;

    /**
     * @var integer The application ID.
     */
    public $Appid;

    /**
     * @var string The account ID.
     */
    public $Uin;

    /**
     * @var integer The consortium ID.
     */
    public $ConsortiumId;

    /**
     * @var string The consortium name.
     */
    public $ConsortiumName;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The chain ID.
     */
    public $ChainId;

    /**
     * @var integer Whether you are the owner of the consortium. `1`: Yes; `0`: No.
     */
    public $RoleType;

    /**
     * @var string The organization DID.
     */
    public $AgencyDid;

    /**
     * @var string The organization name.
     */
    public $CreateOrg;

    /**
     * @var string The endpoint.
     */
    public $Endpoint;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The last updated time.
     */
    public $UpdateTime;

    /**
     * @var string The group name.
     */
    public $GroupName;

    /**
     * @param integer $Id The DID service ID.
     * @param integer $Appid The application ID.
     * @param string $Uin The account ID.
     * @param integer $ConsortiumId The consortium ID.
     * @param string $ConsortiumName The consortium name.
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param string $ChainId The chain ID.
     * @param integer $RoleType Whether you are the owner of the consortium. `1`: Yes; `0`: No.
     * @param string $AgencyDid The organization DID.
     * @param string $CreateOrg The organization name.
     * @param string $Endpoint The endpoint.
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The last updated time.
     * @param string $GroupName The group name.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("AgencyDid",$param) and $param["AgencyDid"] !== null) {
            $this->AgencyDid = $param["AgencyDid"];
        }

        if (array_key_exists("CreateOrg",$param) and $param["CreateOrg"] !== null) {
            $this->CreateOrg = $param["CreateOrg"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
