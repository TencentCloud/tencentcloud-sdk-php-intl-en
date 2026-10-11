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
 * Role permission
 *
 * @method string getModuleId() Obtain <p>Module ID, which must be the module ID of a feature module (leaf node) activated for the current tenant (hierarchical encoded string, for example 101=quick start, 109=workflow, 116101103=workspace management_role permission). An illegal value returns InvalidParameterValue. Method for obtaining the module list: call the ListWorkspaceModules API to query the workspace module list, and take the returned Items[].ModuleId field (leaf nodes with IsLeaf set to true). You can also view it on the "Workspace settings-Role permission" page in the console.</p>
 * @method void setModuleId(string $ModuleId) Set <p>Module ID, which must be the module ID of a feature module (leaf node) activated for the current tenant (hierarchical encoded string, for example 101=quick start, 109=workflow, 116101103=workspace management_role permission). An illegal value returns InvalidParameterValue. Method for obtaining the module list: call the ListWorkspaceModules API to query the workspace module list, and take the returned Items[].ModuleId field (leaf nodes with IsLeaf set to true). You can also view it on the "Workspace settings-Role permission" page in the console.</p>
 * @method string getPermissions() Obtain <p>Module access permission. Single value: R=read-only, RW=read-write, RWD=read and write delete, N=no permission</p>
 * @method void setPermissions(string $Permissions) Set <p>Module access permission. Single value: R=read-only, RW=read-write, RWD=read and write delete, N=no permission</p>
 */
class RolePermission extends AbstractModel
{
    /**
     * @var string <p>Module ID, which must be the module ID of a feature module (leaf node) activated for the current tenant (hierarchical encoded string, for example 101=quick start, 109=workflow, 116101103=workspace management_role permission). An illegal value returns InvalidParameterValue. Method for obtaining the module list: call the ListWorkspaceModules API to query the workspace module list, and take the returned Items[].ModuleId field (leaf nodes with IsLeaf set to true). You can also view it on the "Workspace settings-Role permission" page in the console.</p>
     */
    public $ModuleId;

    /**
     * @var string <p>Module access permission. Single value: R=read-only, RW=read-write, RWD=read and write delete, N=no permission</p>
     */
    public $Permissions;

    /**
     * @param string $ModuleId <p>Module ID, which must be the module ID of a feature module (leaf node) activated for the current tenant (hierarchical encoded string, for example 101=quick start, 109=workflow, 116101103=workspace management_role permission). An illegal value returns InvalidParameterValue. Method for obtaining the module list: call the ListWorkspaceModules API to query the workspace module list, and take the returned Items[].ModuleId field (leaf nodes with IsLeaf set to true). You can also view it on the "Workspace settings-Role permission" page in the console.</p>
     * @param string $Permissions <p>Module access permission. Single value: R=read-only, RW=read-write, RWD=read and write delete, N=no permission</p>
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
