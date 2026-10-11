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
 * @method string getInstanceId() Obtain <p>Cluster name.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster name.</p>
 * @method string getGroup() Obtain <p>User group name.</p>
 * @method void setGroup(string $Group) Set <p>User group name.</p>
 * @method array getUsers() Obtain <p>User list.</p>
 * @method void setUsers(array $Users) Set <p>User list.</p>
 * @method string getDescription() Obtain <p>User group description.</p>
 * @method void setDescription(string $Description) Set <p>User group description.</p>
 * @method string getOperateAction() Obtain <p>Enumeration class. Valid values: ADD, DELETE, and SYNC.</p><p>Enumeration class description:</p><ul><li>ADD: Users added in batches. Adding the same user for multiple times does not trigger an error.</li><li>DELETE: Users deleted from the user group in batches. Deleting a non-existing user does not trigger an error.</li><li>SYNC: Used to synchronize the entire user group. If the list is empty, the entire user group is cleared.<br>Default value: SYNC.</li></ul>
 * @method void setOperateAction(string $OperateAction) Set <p>Enumeration class. Valid values: ADD, DELETE, and SYNC.</p><p>Enumeration class description:</p><ul><li>ADD: Users added in batches. Adding the same user for multiple times does not trigger an error.</li><li>DELETE: Users deleted from the user group in batches. Deleting a non-existing user does not trigger an error.</li><li>SYNC: Used to synchronize the entire user group. If the list is empty, the entire user group is cleared.<br>Default value: SYNC.</li></ul>
 */
class ModifyUsersOfGroupSTDRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster name.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>User group name.</p>
     */
    public $Group;

    /**
     * @var array <p>User list.</p>
     */
    public $Users;

    /**
     * @var string <p>User group description.</p>
     */
    public $Description;

    /**
     * @var string <p>Enumeration class. Valid values: ADD, DELETE, and SYNC.</p><p>Enumeration class description:</p><ul><li>ADD: Users added in batches. Adding the same user for multiple times does not trigger an error.</li><li>DELETE: Users deleted from the user group in batches. Deleting a non-existing user does not trigger an error.</li><li>SYNC: Used to synchronize the entire user group. If the list is empty, the entire user group is cleared.<br>Default value: SYNC.</li></ul>
     */
    public $OperateAction;

    /**
     * @param string $InstanceId <p>Cluster name.</p>
     * @param string $Group <p>User group name.</p>
     * @param array $Users <p>User list.</p>
     * @param string $Description <p>User group description.</p>
     * @param string $OperateAction <p>Enumeration class. Valid values: ADD, DELETE, and SYNC.</p><p>Enumeration class description:</p><ul><li>ADD: Users added in batches. Adding the same user for multiple times does not trigger an error.</li><li>DELETE: Users deleted from the user group in batches. Deleting a non-existing user does not trigger an error.</li><li>SYNC: Used to synchronize the entire user group. If the list is empty, the entire user group is cleared.<br>Default value: SYNC.</li></ul>
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
