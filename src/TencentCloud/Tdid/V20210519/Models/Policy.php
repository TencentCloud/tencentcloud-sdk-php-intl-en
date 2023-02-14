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
 * The policy information.
 *
 * @method integer getId() Obtain The policy index.
 * @method void setId(integer $Id) Set The policy index.
 * @method string getName() Obtain The policy name.
 * @method void setName(string $Name) Set The policy name.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method integer getServiceId() Obtain The service ID.
 * @method void setServiceId(integer $ServiceId) Set The service ID.
 * @method integer getContractAppId() Obtain The application ID of the contract.
 * @method void setContractAppId(integer $ContractAppId) Set The application ID of the contract.
 * @method integer getPolicyId() Obtain The policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The policy ID.
 * @method integer getCptId() Obtain The claim protocol type (CPT) ID.
 * @method void setCptId(integer $CptId) Set The claim protocol type (CPT) ID.
 * @method string getPolicyJson() Obtain The JSON data.
 * @method void setPolicyJson(string $PolicyJson) Set The JSON data.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The last updated time.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
 * @method string getCreatorDid() Obtain The DID of the creator.
 * @method void setCreatorDid(string $CreatorDid) Set The DID of the creator.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 * @method integer getCptIndex() Obtain The claim protocol type (CPT) index.
 * @method void setCptIndex(integer $CptIndex) Set The claim protocol type (CPT) index.
 */
class Policy extends AbstractModel
{
    /**
     * @var integer The policy index.
     */
    public $Id;

    /**
     * @var string The policy name.
     */
    public $Name;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var integer The service ID.
     */
    public $ServiceId;

    /**
     * @var integer The application ID of the contract.
     */
    public $ContractAppId;

    /**
     * @var integer The policy ID.
     */
    public $PolicyId;

    /**
     * @var integer The claim protocol type (CPT) ID.
     */
    public $CptId;

    /**
     * @var string The JSON data.
     */
    public $PolicyJson;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The last updated time.
     */
    public $UpdateTime;

    /**
     * @var string The DID of the creator.
     */
    public $CreatorDid;

    /**
     * @var string The application name.
     */
    public $AppName;

    /**
     * @var integer The claim protocol type (CPT) index.
     */
    public $CptIndex;

    /**
     * @param integer $Id The policy index.
     * @param string $Name The policy name.
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param integer $ServiceId The service ID.
     * @param integer $ContractAppId The application ID of the contract.
     * @param integer $PolicyId The policy ID.
     * @param integer $CptId The claim protocol type (CPT) ID.
     * @param string $PolicyJson The JSON data.
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The last updated time.
     * @param string $CreatorDid The DID of the creator.
     * @param string $AppName The application name.
     * @param integer $CptIndex The claim protocol type (CPT) index.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ContractAppId",$param) and $param["ContractAppId"] !== null) {
            $this->ContractAppId = $param["ContractAppId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("PolicyJson",$param) and $param["PolicyJson"] !== null) {
            $this->PolicyJson = $param["PolicyJson"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreatorDid",$param) and $param["CreatorDid"] !== null) {
            $this->CreatorDid = $param["CreatorDid"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("CptIndex",$param) and $param["CptIndex"] !== null) {
            $this->CptIndex = $param["CptIndex"];
        }
    }
}
