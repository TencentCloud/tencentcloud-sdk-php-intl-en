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
 * Details about working groups
 *
 * @method integer getWorkGroupId() Obtain Working group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupId(integer $WorkGroupId) Set Working group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkGroupName() Obtain Working group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupName(string $WorkGroupName) Set Working group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Types of information included. User: user information; DataAuth: data permissions; EngineAuth: engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Types of information included. User: user information; DataAuth: data permissions; EngineAuth: engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Users getUserInfo() Obtain Collection of users bound to working groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserInfo(Users $UserInfo) Set Collection of users bound to working groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getDataPolicyInfo() Obtain Collection of data permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataPolicyInfo(Policys $DataPolicyInfo) Set Collection of data permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getEnginePolicyInfo() Obtain Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnginePolicyInfo(Policys $EnginePolicyInfo) Set Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkGroupDescription() Obtain Working group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkGroupDescription(string $WorkGroupDescription) Set Working group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Policys getRowFilterInfo() Obtain Collection of information about filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowFilterInfo(Policys $RowFilterInfo) Set Collection of information about filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkGroupDetailInfo extends AbstractModel
{
    /**
     * @var integer Working group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupId;

    /**
     * @var string Working group name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupName;

    /**
     * @var string Types of information included. User: user information; DataAuth: data permissions; EngineAuth: engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var Users Collection of users bound to working groups
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserInfo;

    /**
     * @var Policys Collection of data permissions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataPolicyInfo;

    /**
     * @var Policys Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnginePolicyInfo;

    /**
     * @var string Working group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkGroupDescription;

    /**
     * @var Policys Collection of information about filtered rows
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowFilterInfo;

    /**
     * @param integer $WorkGroupId Working group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkGroupName Working group name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Types of information included. User: user information; DataAuth: data permissions; EngineAuth: engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Users $UserInfo Collection of users bound to working groups
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $DataPolicyInfo Collection of data permissions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $EnginePolicyInfo Collection of engine permissions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkGroupDescription Working group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Policys $RowFilterInfo Collection of information about filtered rows
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new Users();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("DataPolicyInfo",$param) and $param["DataPolicyInfo"] !== null) {
            $this->DataPolicyInfo = new Policys();
            $this->DataPolicyInfo->deserialize($param["DataPolicyInfo"]);
        }

        if (array_key_exists("EnginePolicyInfo",$param) and $param["EnginePolicyInfo"] !== null) {
            $this->EnginePolicyInfo = new Policys();
            $this->EnginePolicyInfo->deserialize($param["EnginePolicyInfo"]);
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("RowFilterInfo",$param) and $param["RowFilterInfo"] !== null) {
            $this->RowFilterInfo = new Policys();
            $this->RowFilterInfo->deserialize($param["RowFilterInfo"]);
        }
    }
}
