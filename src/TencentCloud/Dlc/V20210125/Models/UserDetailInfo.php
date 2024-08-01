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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed user information
 *
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Types of returned information. Group: returned information about the working group where the current user is; DataAuth: returned information about the current user's data permission; EngineAuth: returned information about the current user's engine permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Types of returned information. Group: returned information about the working group where the current user is; DataAuth: returned information about the current user's data permission; EngineAuth: returned information about the current user's engine permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserType() Obtain Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserType(string $UserType) Set Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserDescription() Obtain User description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserDescription(string $UserDescription) Set User description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getDataPolicyInfo() Obtain Collection of data permission information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataPolicyInfo(Policys $DataPolicyInfo) Set Collection of data permission information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getEnginePolicyInfo() Obtain Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnginePolicyInfo(Policys $EnginePolicyInfo) Set Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WorkGroups getWorkGroupInfo() Obtain Information about collections of working groups bound to the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupInfo(WorkGroups $WorkGroupInfo) Set Information about collections of working groups bound to the user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAlias() Obtain User alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAlias(string $UserAlias) Set User alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getRowFilterInfo() Obtain Collection of filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowFilterInfo(Policys $RowFilterInfo) Set Collection of filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserDetailInfo extends AbstractModel
{
    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Types of returned information. Group: returned information about the working group where the current user is; DataAuth: returned information about the current user's data permission; EngineAuth: returned information about the current user's engine permission
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserType;

    /**
     * @var string User description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserDescription;

    /**
     * @var Policys Collection of data permission information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataPolicyInfo;

    /**
     * @var Policys Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnginePolicyInfo;

    /**
     * @var WorkGroups Information about collections of working groups bound to the user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupInfo;

    /**
     * @var string User alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAlias;

    /**
     * @var Policys Collection of filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowFilterInfo;

    /**
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Types of returned information. Group: returned information about the working group where the current user is; DataAuth: returned information about the current user's data permission; EngineAuth: returned information about the current user's engine permission
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserType Types of users. ADMIN: administrators; COMMON: general users
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserDescription User description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $DataPolicyInfo Collection of data permission information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $EnginePolicyInfo Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WorkGroups $WorkGroupInfo Information about collections of working groups bound to the user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAlias User alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $RowFilterInfo Collection of filtered rows
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("DataPolicyInfo",$param) and $param["DataPolicyInfo"] !== null) {
            $this->DataPolicyInfo = new Policys();
            $this->DataPolicyInfo->deserialize($param["DataPolicyInfo"]);
        }

        if (array_key_exists("EnginePolicyInfo",$param) and $param["EnginePolicyInfo"] !== null) {
            $this->EnginePolicyInfo = new Policys();
            $this->EnginePolicyInfo->deserialize($param["EnginePolicyInfo"]);
        }

        if (array_key_exists("WorkGroupInfo",$param) and $param["WorkGroupInfo"] !== null) {
            $this->WorkGroupInfo = new WorkGroups();
            $this->WorkGroupInfo->deserialize($param["WorkGroupInfo"]);
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("RowFilterInfo",$param) and $param["RowFilterInfo"] !== null) {
            $this->RowFilterInfo = new Policys();
            $this->RowFilterInfo->deserialize($param["RowFilterInfo"]);
        }
    }
}
