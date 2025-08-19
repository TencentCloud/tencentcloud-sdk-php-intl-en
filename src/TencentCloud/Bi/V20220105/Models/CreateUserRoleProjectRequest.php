<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserRoleProject request structure.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getRoleIdList() Obtain Role ID list.
 * @method void setRoleIdList(array $RoleIdList) Set Role ID list.
 * @method array getUserList() Obtain User list (deprecated).
 * @method void setUserList(array $UserList) Set User list (deprecated).
 * @method array getUserInfoList() Obtain User list (new).
 * @method void setUserInfoList(array $UserInfoList) Set User list (new).
 */
class CreateUserRoleProjectRequest extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array Role ID list.
     */
    public $RoleIdList;

    /**
     * @var array User list (deprecated).
     * @deprecated
     */
    public $UserList;

    /**
     * @var array User list (new).
     */
    public $UserInfoList;

    /**
     * @param integer $ProjectId Project ID.
     * @param array $RoleIdList Role ID list.
     * @param array $UserList User list (deprecated).
     * @param array $UserInfoList User list (new).
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserIdAndUserName();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("UserInfoList",$param) and $param["UserInfoList"] !== null) {
            $this->UserInfoList = [];
            foreach ($param["UserInfoList"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfoList, $obj);
            }
        }
    }
}
