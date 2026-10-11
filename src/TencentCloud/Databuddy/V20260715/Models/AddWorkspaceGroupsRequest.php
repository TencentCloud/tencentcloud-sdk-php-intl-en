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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddWorkspaceGroups request structure.
 *
 * @method array getGroupIds() Obtain User group ID, which can be obtained through the ListWorkspaceGroups API.
 * @method void setGroupIds(array $GroupIds) Set User group ID, which can be obtained through the ListWorkspaceGroups API.
 * @method string getWorkspaceId() Obtain Workspace ID
 * @method void setWorkspaceId(string $WorkspaceId) Set Workspace ID
 * @method array getRoleIds() Obtain Role ID, which can be obtained through the ListWorkspaceRoles API.
 * @method void setRoleIds(array $RoleIds) Set Role ID, which can be obtained through the ListWorkspaceRoles API.
 */
class AddWorkspaceGroupsRequest extends AbstractModel
{
    /**
     * @var array User group ID, which can be obtained through the ListWorkspaceGroups API.
     */
    public $GroupIds;

    /**
     * @var string Workspace ID
     */
    public $WorkspaceId;

    /**
     * @var array Role ID, which can be obtained through the ListWorkspaceRoles API.
     */
    public $RoleIds;

    /**
     * @param array $GroupIds User group ID, which can be obtained through the ListWorkspaceGroups API.
     * @param string $WorkspaceId Workspace ID
     * @param array $RoleIds Role ID, which can be obtained through the ListWorkspaceRoles API.
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
