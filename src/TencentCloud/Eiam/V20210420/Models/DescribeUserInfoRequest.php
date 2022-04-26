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
 * DescribeUserInfo request structure.
 *
 * @method string getUserName() Obtain Username, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method void setUserName(string $UserName) Set Username, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method string getUserId() Obtain User ID, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 * @method void setUserId(string $UserId) Set User ID, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
 */
class DescribeUserInfoRequest extends AbstractModel
{
    /**
     * @var string Username, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     */
    public $UserName;

    /**
     * @var string User ID, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     */
    public $UserId;

    /**
     * @param string $UserName Username, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
     * @param string $UserId User ID, which can contain up to 64 characters. You need to specify at least `UserName` or `UserId`. If both are specified, `UserName` will be used first.
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
