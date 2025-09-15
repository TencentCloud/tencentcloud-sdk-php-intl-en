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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserGroup request structure.
 *
 * @method array getUsers() Obtain User information list.
 * @method void setUsers(array $Users) Set User information list.
 * @method string getUserGroup() Obtain User primary group. The CVM cluster is a required parameter, while the TKE cluster is optional.
 * @method void setUserGroup(string $UserGroup) Set User primary group. The CVM cluster is a required parameter, while the TKE cluster is optional.
 * @method array getGroups() Obtain User subgroup.
 * @method void setGroups(array $Groups) Set User subgroup.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var array User information list.
     */
    public $Users;

    /**
     * @var string User primary group. The CVM cluster is a required parameter, while the TKE cluster is optional.
     */
    public $UserGroup;

    /**
     * @var array User subgroup.
     */
    public $Groups;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @param array $Users User information list.
     * @param string $UserGroup User primary group. The CVM cluster is a required parameter, while the TKE cluster is optional.
     * @param array $Groups User subgroup.
     * @param string $Remark Remarks.
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
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
