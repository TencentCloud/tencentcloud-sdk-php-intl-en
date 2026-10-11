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
 * @method string getInstanceId() Obtain <p>Cluster string ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster string ID.</p>
 * @method array getUsers() Obtain <p>User information list.</p>
 * @method void setUsers(array $Users) Set <p>User information list.</p>
 * @method string getUserGroup() Obtain <p>Primary user group. This parameter is required for CVM clusters and optional for TKE clusters.</p>
 * @method void setUserGroup(string $UserGroup) Set <p>Primary user group. This parameter is required for CVM clusters and optional for TKE clusters.</p>
 * @method array getGroups() Obtain <p>Secondary user group.</p>
 * @method void setGroups(array $Groups) Set <p>Secondary user group.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster string ID.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>User information list.</p>
     */
    public $Users;

    /**
     * @var string <p>Primary user group. This parameter is required for CVM clusters and optional for TKE clusters.</p>
     */
    public $UserGroup;

    /**
     * @var array <p>Secondary user group.</p>
     */
    public $Groups;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @param string $InstanceId <p>Cluster string ID.</p>
     * @param array $Users <p>User information list.</p>
     * @param string $UserGroup <p>Primary user group. This parameter is required for CVM clusters and optional for TKE clusters.</p>
     * @param array $Groups <p>Secondary user group.</p>
     * @param string $Remark <p>Remarks.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
