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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data development authorization information to delete.
 *
 * @method string getPermissionTargetType() Obtain Target type to delete (user: user, role: role, group: group).
 * @method void setPermissionTargetType(string $PermissionTargetType) Set Target type to delete (user: user, role: role, group: group).
 * @method string getPermissionTargetId() Obtain Authorization target id (userId/roleId) to delete.
 * @method void setPermissionTargetId(string $PermissionTargetId) Set Authorization target id (userId/roleId) to delete.
 * @method array getPermissionTypeList() Obtain Type array of authorization permissions to delete (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
 * @method void setPermissionTypeList(array $PermissionTypeList) Set Type array of authorization permissions to delete (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
 */
class DeleteWorkflowPermission extends AbstractModel
{
    /**
     * @var string Target type to delete (user: user, role: role, group: group).
     */
    public $PermissionTargetType;

    /**
     * @var string Authorization target id (userId/roleId) to delete.
     */
    public $PermissionTargetId;

    /**
     * @var array Type array of authorization permissions to delete (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
     */
    public $PermissionTypeList;

    /**
     * @param string $PermissionTargetType Target type to delete (user: user, role: role, group: group).
     * @param string $PermissionTargetId Authorization target id (userId/roleId) to delete.
     * @param array $PermissionTypeList Type array of authorization permissions to delete (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
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
        if (array_key_exists("PermissionTargetType",$param) and $param["PermissionTargetType"] !== null) {
            $this->PermissionTargetType = $param["PermissionTargetType"];
        }

        if (array_key_exists("PermissionTargetId",$param) and $param["PermissionTargetId"] !== null) {
            $this->PermissionTargetId = $param["PermissionTargetId"];
        }

        if (array_key_exists("PermissionTypeList",$param) and $param["PermissionTypeList"] !== null) {
            $this->PermissionTypeList = $param["PermissionTypeList"];
        }
    }
}
