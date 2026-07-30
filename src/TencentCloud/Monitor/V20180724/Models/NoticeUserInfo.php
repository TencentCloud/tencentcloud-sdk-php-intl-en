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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User information configured in the notification template
 *
 * @method string getUserId() Obtain <p>Tencent Cloud user id, <strong>not account uin</strong></p>
 * @method void setUserId(string $UserId) Set <p>Tencent Cloud user id, <strong>not account uin</strong></p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 */
class NoticeUserInfo extends AbstractModel
{
    /**
     * @var string <p>Tencent Cloud user id, <strong>not account uin</strong></p>
     */
    public $UserId;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @param string $UserId <p>Tencent Cloud user id, <strong>not account uin</strong></p>
     * @param string $UserName <p>Username.</p>
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
