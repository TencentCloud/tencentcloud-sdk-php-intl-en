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
 * User information associated with the account
 *
 * @method string getUserId() Obtain User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class LinkUserInfo extends AbstractModel
{
    /**
     * @var string User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Username.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @param string $UserId User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
