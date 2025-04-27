<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role permission objects.
 *
 * @method string getPrivilegeId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilegeId(string $PrivilegeId) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivilegeName() Obtain Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilegeName(string $PrivilegeName) Set Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRestPath() Obtain Path

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestPath(string $RestPath) Set Path

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRestMethod() Obtain Method.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestMethod(string $RestMethod) Set Method.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModuleId() Obtain Module ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModuleId(string $ModuleId) Set Module ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Permission type: N, R, RW, RWD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Permission type: N, R, RW, RWD.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RolePrivilege extends AbstractModel
{
    /**
     * @var string id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivilegeId;

    /**
     * @var string Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivilegeName;

    /**
     * @var string Path

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestPath;

    /**
     * @var string Method.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestMethod;

    /**
     * @var string Description

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Module ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModuleId;

    /**
     * @var string Permission type: N, R, RW, RWD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $PrivilegeId id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivilegeName Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RestPath Path

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RestMethod Method.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModuleId Module ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Permission type: N, R, RW, RWD.
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
        if (array_key_exists("PrivilegeId",$param) and $param["PrivilegeId"] !== null) {
            $this->PrivilegeId = $param["PrivilegeId"];
        }

        if (array_key_exists("PrivilegeName",$param) and $param["PrivilegeName"] !== null) {
            $this->PrivilegeName = $param["PrivilegeName"];
        }

        if (array_key_exists("RestPath",$param) and $param["RestPath"] !== null) {
            $this->RestPath = $param["RestPath"];
        }

        if (array_key_exists("RestMethod",$param) and $param["RestMethod"] !== null) {
            $this->RestMethod = $param["RestMethod"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
