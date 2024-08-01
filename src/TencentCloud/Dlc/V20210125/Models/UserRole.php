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
 * User role
 *
 * @method integer getRoleId() Obtain The role ID.
 * @method void setRoleId(integer $RoleId) Set The role ID.
 * @method string getAppId() Obtain The user's app ID.
 * @method void setAppId(string $AppId) Set The user's app ID.
 * @method string getUin() Obtain The user ID.
 * @method void setUin(string $Uin) Set The user ID.
 * @method string getArn() Obtain The role permission.
 * @method void setArn(string $Arn) Set The role permission.
 * @method integer getModifyTime() Obtain The last modified timestamp.
 * @method void setModifyTime(integer $ModifyTime) Set The last modified timestamp.
 * @method string getDesc() Obtain The role description.
 * @method void setDesc(string $Desc) Set The role description.
 * @method string getRoleName() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCosPermissionList() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosPermissionList(array $CosPermissionList) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPermissionJson() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionJson(string $PermissionJson) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserRole extends AbstractModel
{
    /**
     * @var integer The role ID.
     */
    public $RoleId;

    /**
     * @var string The user's app ID.
     */
    public $AppId;

    /**
     * @var string The user ID.
     */
    public $Uin;

    /**
     * @var string The role permission.
     */
    public $Arn;

    /**
     * @var integer The last modified timestamp.
     */
    public $ModifyTime;

    /**
     * @var string The role description.
     */
    public $Desc;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @var array Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosPermissionList;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionJson;

    /**
     * @param integer $RoleId The role ID.
     * @param string $AppId The user's app ID.
     * @param string $Uin The user ID.
     * @param string $Arn The role permission.
     * @param integer $ModifyTime The last modified timestamp.
     * @param string $Desc The role description.
     * @param string $RoleName Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Creator Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CosPermissionList Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PermissionJson Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CosPermissionList",$param) and $param["CosPermissionList"] !== null) {
            $this->CosPermissionList = [];
            foreach ($param["CosPermissionList"] as $key => $value){
                $obj = new CosPermission();
                $obj->deserialize($value);
                array_push($this->CosPermissionList, $obj);
            }
        }

        if (array_key_exists("PermissionJson",$param) and $param["PermissionJson"] !== null) {
            $this->PermissionJson = $param["PermissionJson"];
        }
    }
}
