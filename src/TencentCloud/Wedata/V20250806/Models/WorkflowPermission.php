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
 * Authorization information for data development.
 *
 * @method string getPermissionTargetType() Obtain Target type (user: user, role: role).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionTargetType(string $PermissionTargetType) Set Target type (user: user, role: role).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPermissionTargetId() Obtain id array of the authorization target (userId/roleId).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionTargetId(string $PermissionTargetId) Set id array of the authorization target (userId/roleId).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPermissionTypeList() Obtain Authorization permission type array (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionTypeList(array $PermissionTypeList) Set Authorization permission type array (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkflowPermission extends AbstractModel
{
    /**
     * @var string Target type (user: user, role: role).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionTargetType;

    /**
     * @var string id array of the authorization target (userId/roleId).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionTargetId;

    /**
     * @var array Authorization permission type array (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionTypeList;

    /**
     * @param string $PermissionTargetType Target type (user: user, role: role).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PermissionTargetId id array of the authorization target (userId/roleId).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PermissionTypeList Authorization permission type array (CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE, currently only support CAN_MANAGE).
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
