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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserGroup response structure.
 *
 * @method string getDisplayName() Obtain User group nickname, which is not unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set User group nickname, which is not unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain User group remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set User group remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserGroupId() Obtain User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserGroupResponse extends AbstractModel
{
    /**
     * @var string User group nickname, which is not unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string User group remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DisplayName User group nickname, which is not unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description User group remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserGroupId User group ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
