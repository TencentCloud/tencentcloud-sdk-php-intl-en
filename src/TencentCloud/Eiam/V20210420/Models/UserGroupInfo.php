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
 * @method string getDisplayName() Obtain Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserGroupId() Obtain User group ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain User group remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set User group remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UserGroupInfo extends AbstractModel
{
    /**
     * @var string Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string User group ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupId;

    /**
     * @var string User group remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @param string $DisplayName Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserGroupId User group ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description User group remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Creation time.
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
