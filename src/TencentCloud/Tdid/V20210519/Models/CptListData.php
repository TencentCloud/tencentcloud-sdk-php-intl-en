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
 * The information of claim protocol types (CPT).
 *
 * @method integer getId() Obtain The CPT ID.
 * @method void setId(integer $Id) Set The CPT ID.
 * @method string getName() Obtain The name of the claim protocol type (CPT).
 * @method void setName(string $Name) Set The name of the claim protocol type (CPT).
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method integer getServiceId() Obtain The service ID.
 * @method void setServiceId(integer $ServiceId) Set The service ID.
 * @method integer getContractAppId() Obtain The application ID of the contract.
 * @method void setContractAppId(integer $ContractAppId) Set The application ID of the contract.
 * @method integer getCptId() Obtain The claim protocol type (CPT) ID.
 * @method void setCptId(integer $CptId) Set The claim protocol type (CPT) ID.
 * @method integer getCptType() Obtain The type. `1`: System CPTs; `2`: Authorization CPTs; `3`: General CPTs
 * @method void setCptType(integer $CptType) Set The type. `1`: System CPTs; `2`: Authorization CPTs; `3`: General CPTs
 * @method string getDescription() Obtain The description of the claim protocol type (CPT).
 * @method void setDescription(string $Description) Set The description of the claim protocol type (CPT).
 * @method string getCptJson() Obtain The JSON file of the claim protocol type (CPT).
 * @method void setCptJson(string $CptJson) Set The JSON file of the claim protocol type (CPT).
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The last updated time.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
 * @method string getCreatorDid() Obtain The DID of the creator.
 * @method void setCreatorDid(string $CreatorDid) Set The DID of the creator.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 */
class CptListData extends AbstractModel
{
    /**
     * @var integer The CPT ID.
     */
    public $Id;

    /**
     * @var string The name of the claim protocol type (CPT).
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
     * @var integer The claim protocol type (CPT) ID.
     */
    public $CptId;

    /**
     * @var integer The type. `1`: System CPTs; `2`: Authorization CPTs; `3`: General CPTs
     */
    public $CptType;

    /**
     * @var string The description of the claim protocol type (CPT).
     */
    public $Description;

    /**
     * @var string The JSON file of the claim protocol type (CPT).
     */
    public $CptJson;

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
     * @param integer $Id The CPT ID.
     * @param string $Name The name of the claim protocol type (CPT).
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param integer $ServiceId The service ID.
     * @param integer $ContractAppId The application ID of the contract.
     * @param integer $CptId The claim protocol type (CPT) ID.
     * @param integer $CptType The type. `1`: System CPTs; `2`: Authorization CPTs; `3`: General CPTs
     * @param string $Description The description of the claim protocol type (CPT).
     * @param string $CptJson The JSON file of the claim protocol type (CPT).
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The last updated time.
     * @param string $CreatorDid The DID of the creator.
     * @param string $AppName The application name.
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

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("CptType",$param) and $param["CptType"] !== null) {
            $this->CptType = $param["CptType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CptJson",$param) and $param["CptJson"] !== null) {
            $this->CptJson = $param["CptJson"];
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
    }
}
