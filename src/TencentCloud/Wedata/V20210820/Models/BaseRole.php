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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic role object.
 *
 * @method string getRoleId() Obtain Role id.
 * @method void setRoleId(string $RoleId) Set Role id.
 * @method string getRoleName() Obtain Role name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Role name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Role nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Role nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleType() Obtain Role type divides into System, Tenant, Project, Commercial.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleType(string $RoleType) Set Role type divides into System, Tenant, Project, Commercial.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSystemDefault() Obtain System preset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDefault(boolean $SystemDefault) Set System preset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParameters() Obtain Custom parameter.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameters(string $Parameters) Set Custom parameter.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberCount() Obtain Specifies member statistics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberCount(integer $MemberCount) Set Specifies member statistics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivileges() Obtain Permission

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivileges(array $Privileges) Set Permission

Note: This field may return null, indicating that no valid values can be obtained.
 * @method BaseUser getOperator() Obtain Operator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperator(BaseUser $Operator) Set Operator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOperateTime() Obtain Operation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperateTime(integer $OperateTime) Set Operation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTimeStr() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTimeStr(string $CreateTimeStr) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTimeStr() Obtain Update time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTimeStr(string $UpdateTimeStr) Set Update time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Creator

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Creator

Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaseRole extends AbstractModel
{
    /**
     * @var string Role id.
     */
    public $RoleId;

    /**
     * @var string Role name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var string Role nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Description

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Role type divides into System, Tenant, Project, Commercial.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleType;

    /**
     * @var boolean System preset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDefault;

    /**
     * @var string Custom parameter.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Parameters;

    /**
     * @var integer Specifies member statistics.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberCount;

    /**
     * @var array Permission

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Privileges;

    /**
     * @var BaseUser Operator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operator;

    /**
     * @var integer Operation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperateTime;

    /**
     * @var integer Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTimeStr;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTimeStr;

    /**
     * @var string Project ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Creator

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @param string $RoleId Role id.
     * @param string $RoleName Role name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Role nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleType Role type divides into System, Tenant, Project, Commercial.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SystemDefault System preset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Parameters Custom parameter.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberCount Specifies member statistics.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Privileges Permission

Note: This field may return null, indicating that no valid values can be obtained.
     * @param BaseUser $Operator Operator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OperateTime Operation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTimeStr Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTimeStr Update time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Creator Creator

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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SystemDefault",$param) and $param["SystemDefault"] !== null) {
            $this->SystemDefault = $param["SystemDefault"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new BaseUser();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateTimeStr",$param) and $param["CreateTimeStr"] !== null) {
            $this->CreateTimeStr = $param["CreateTimeStr"];
        }

        if (array_key_exists("UpdateTimeStr",$param) and $param["UpdateTimeStr"] !== null) {
            $this->UpdateTimeStr = $param["UpdateTimeStr"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
