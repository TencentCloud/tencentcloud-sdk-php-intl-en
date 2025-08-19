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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group
 *
 * @method integer getId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain User group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set User group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getParentId() Obtain Parent node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParentId(integer $ParentId) Set Parent node ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDefault() Obtain Whether it is default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefault(integer $IsDefault) Set Whether it is default.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminUserId() Obtain Administrator user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminUserId(string $AdminUserId) Set Administrator user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLocation() Obtain Location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(integer $Location) Set Location.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserGroupDTO extends AbstractModel
{
    /**
     * @var integer id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string User group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var integer Parent node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParentId;

    /**
     * @var integer Whether it is default.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefault;

    /**
     * @var string Administrator user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminUserId;

    /**
     * @var string Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Location.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @param integer $Id id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName User group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ParentId Parent node ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDefault Whether it is default.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminUserId Administrator user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Location Location.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
