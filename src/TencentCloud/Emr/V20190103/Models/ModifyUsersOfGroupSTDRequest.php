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
 * ModifyUsersOfGroupSTD request structure.
 *
 * @method string getInstanceId() Obtain Cluster name.
 * @method void setInstanceId(string $InstanceId) Set Cluster name.
 * @method string getGroup() Obtain User group name.
 * @method void setGroup(string $Group) Set User group name.
 * @method array getUsers() Obtain User list.
 * @method void setUsers(array $Users) Set User list.
 * @method string getDescription() Obtain User group description.
 * @method void setDescription(string $Description) Set User group description.
 * @method string getOperateAction() Obtain Enumeration class. Valid values: ADD, DELETE, SYNC.


Enumeration class description.
- ADD: Batched users to add. Adding the same user multiple times will not trigger an error.
- DELETE: Batched users to remove from the user group. Deleting non-existing users will not trigger an error.
- SYNC: Overwrites the entire user group. An empty list clears all existing members.
Defaults to SYNC.

 * @method void setOperateAction(string $OperateAction) Set Enumeration class. Valid values: ADD, DELETE, SYNC.


Enumeration class description.
- ADD: Batched users to add. Adding the same user multiple times will not trigger an error.
- DELETE: Batched users to remove from the user group. Deleting non-existing users will not trigger an error.
- SYNC: Overwrites the entire user group. An empty list clears all existing members.
Defaults to SYNC.
 */
class ModifyUsersOfGroupSTDRequest extends AbstractModel
{
    /**
     * @var string Cluster name.
     */
    public $InstanceId;

    /**
     * @var string User group name.
     */
    public $Group;

    /**
     * @var array User list.
     */
    public $Users;

    /**
     * @var string User group description.
     */
    public $Description;

    /**
     * @var string Enumeration class. Valid values: ADD, DELETE, SYNC.


Enumeration class description.
- ADD: Batched users to add. Adding the same user multiple times will not trigger an error.
- DELETE: Batched users to remove from the user group. Deleting non-existing users will not trigger an error.
- SYNC: Overwrites the entire user group. An empty list clears all existing members.
Defaults to SYNC.

     */
    public $OperateAction;

    /**
     * @param string $InstanceId Cluster name.
     * @param string $Group User group name.
     * @param array $Users User list.
     * @param string $Description User group description.
     * @param string $OperateAction Enumeration class. Valid values: ADD, DELETE, SYNC.


Enumeration class description.
- ADD: Batched users to add. Adding the same user multiple times will not trigger an error.
- DELETE: Batched users to remove from the user group. Deleting non-existing users will not trigger an error.
- SYNC: Overwrites the entire user group. An empty list clears all existing members.
Defaults to SYNC.
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperateAction",$param) and $param["OperateAction"] !== null) {
            $this->OperateAction = $param["OperateAction"];
        }
    }
}
