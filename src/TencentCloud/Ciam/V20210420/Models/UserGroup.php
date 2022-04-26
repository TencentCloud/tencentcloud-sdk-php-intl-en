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
namespace TencentCloud\Ciam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group
 *
 * @method string getUserGroupId() Obtain User group ID
 * @method void setUserGroupId(string $UserGroupId) Set User group ID
 * @method string getDisplayName() Obtain User group name
 * @method void setDisplayName(string $DisplayName) Set User group name
 * @method string getDescription() Obtain User group description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set User group description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getTenantId() Obtain Tenant ID
 * @method void setTenantId(string $TenantId) Set Tenant ID
 */
class UserGroup extends AbstractModel
{
    /**
     * @var string User group ID
     */
    public $UserGroupId;

    /**
     * @var string User group name
     */
    public $DisplayName;

    /**
     * @var string User group description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string Tenant ID
     */
    public $TenantId;

    /**
     * @param string $UserGroupId User group ID
     * @param string $DisplayName User group name
     * @param string $Description User group description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserStoreId User directory ID
     * @param string $TenantId Tenant ID
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }
    }
}
