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
 * CreateWorkspaceRole request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace id</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace id</p>
 * @method RoleBasicInfo getBasicInfo() Obtain <p>Role basic info</p>
 * @method void setBasicInfo(RoleBasicInfo $BasicInfo) Set <p>Role basic info</p>
 * @method array getPermissions() Obtain <p>Role permission</p>
 * @method void setPermissions(array $Permissions) Set <p>Role permission</p>
 */
class CreateWorkspaceRoleRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace id</p>
     */
    public $WorkspaceId;

    /**
     * @var RoleBasicInfo <p>Role basic info</p>
     */
    public $BasicInfo;

    /**
     * @var array <p>Role permission</p>
     */
    public $Permissions;

    /**
     * @param string $WorkspaceId <p>Workspace id</p>
     * @param RoleBasicInfo $BasicInfo <p>Role basic info</p>
     * @param array $Permissions <p>Role permission</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new RoleBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new RolePermission();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
