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
 * Explore file permission details.
 *
 * @method array getPrivileges() Obtain Permission point.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivileges(array $Privileges) Set Permission point.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleType() Obtain User: user role: role group: group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleType(string $RoleType) Set User: user role: role group: group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoleId() Obtain User or role ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleId(string $RoleId) Set User or role ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExploreFileResource getResource() Obtain Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(ExploreFileResource $Resource) Set Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeleteAble() Obtain Whether can be deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeleteAble(boolean $DeleteAble) Set Whether can be deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExploreFilePrivilegeItem extends AbstractModel
{
    /**
     * @var array Permission point.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Privileges;

    /**
     * @var string User: user role: role group: group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleType;

    /**
     * @var string User or role ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleId;

    /**
     * @var ExploreFileResource Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var boolean Whether can be deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeleteAble;

    /**
     * @param array $Privileges Permission point.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleType User: user role: role group: group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoleId User or role ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExploreFileResource $Resource Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DeleteAble Whether can be deleted.
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
        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("DeleteAble",$param) and $param["DeleteAble"] !== null) {
            $this->DeleteAble = $param["DeleteAble"];
        }
    }
}
