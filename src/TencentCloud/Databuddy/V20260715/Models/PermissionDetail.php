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
 * Entity permission information, for returning the current user's list of permissions for an entity in get/list APIs.
 *
 * @method array getPermissions() Obtain Permission list of the current user for this entity.
 * @method void setPermissions(array $Permissions) Set Permission list of the current user for this entity.
 * @method string getCatalogWorkspacePrivilege() Obtain Permission information of the catalog on the workspace (optional). Value: WORKSPACE_READONLY (read-only) or WORKSPACE_READWRITE (read-write).
 * @method void setCatalogWorkspacePrivilege(string $CatalogWorkspacePrivilege) Set Permission information of the catalog on the workspace (optional). Value: WORKSPACE_READONLY (read-only) or WORKSPACE_READWRITE (read-write).
 * @method array getDenyPrivilegeList() Obtain Total deny permission list (user deny ∪ role deny ∪ inherited deny, deduplicated and excluded from Permissions)
 * @method void setDenyPrivilegeList(array $DenyPrivilegeList) Set Total deny permission list (user deny ∪ role deny ∪ inherited deny, deduplicated and excluded from Permissions)
 */
class PermissionDetail extends AbstractModel
{
    /**
     * @var array Permission list of the current user for this entity.
     */
    public $Permissions;

    /**
     * @var string Permission information of the catalog on the workspace (optional). Value: WORKSPACE_READONLY (read-only) or WORKSPACE_READWRITE (read-write).
     */
    public $CatalogWorkspacePrivilege;

    /**
     * @var array Total deny permission list (user deny ∪ role deny ∪ inherited deny, deduplicated and excluded from Permissions)
     */
    public $DenyPrivilegeList;

    /**
     * @param array $Permissions Permission list of the current user for this entity.
     * @param string $CatalogWorkspacePrivilege Permission information of the catalog on the workspace (optional). Value: WORKSPACE_READONLY (read-only) or WORKSPACE_READWRITE (read-write).
     * @param array $DenyPrivilegeList Total deny permission list (user deny ∪ role deny ∪ inherited deny, deduplicated and excluded from Permissions)
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
        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("CatalogWorkspacePrivilege",$param) and $param["CatalogWorkspacePrivilege"] !== null) {
            $this->CatalogWorkspacePrivilege = $param["CatalogWorkspacePrivilege"];
        }

        if (array_key_exists("DenyPrivilegeList",$param) and $param["DenyPrivilegeList"] !== null) {
            $this->DenyPrivilegeList = $param["DenyPrivilegeList"];
        }
    }
}
