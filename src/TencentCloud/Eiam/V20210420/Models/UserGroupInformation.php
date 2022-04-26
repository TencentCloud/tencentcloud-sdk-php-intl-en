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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned user group list.
 *
 * @method string getUserGroupId() Obtain User group ID.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID.
 * @method string getUserGroupName() Obtain User group name.
 * @method void setUserGroupName(string $UserGroupName) Set User group name.
 * @method string getLastModifiedDate() Obtain Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifiedDate(string $LastModifiedDate) Set Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UserGroupInformation extends AbstractModel
{
    /**
     * @var string User group ID.
     */
    public $UserGroupId;

    /**
     * @var string User group name.
     */
    public $UserGroupName;

    /**
     * @var string Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifiedDate;

    /**
     * @param string $UserGroupId User group ID.
     * @param string $UserGroupName User group name.
     * @param string $LastModifiedDate Last update time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }
    }
}
