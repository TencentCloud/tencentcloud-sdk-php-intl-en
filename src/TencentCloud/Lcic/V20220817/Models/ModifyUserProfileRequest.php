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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserProfile request structure.
 *
 * @method string getUserId() Obtain The ID of the user whose profile will be modified.
 * @method void setUserId(string $UserId) Set The ID of the user whose profile will be modified.
 * @method string getNickname() Obtain The new username to use.
 * @method void setNickname(string $Nickname) Set The new username to use.
 * @method string getAvatar() Obtain The URL of the new profile photo.
 * @method void setAvatar(string $Avatar) Set The URL of the new profile photo.
 */
class ModifyUserProfileRequest extends AbstractModel
{
    /**
     * @var string The ID of the user whose profile will be modified.
     */
    public $UserId;

    /**
     * @var string The new username to use.
     */
    public $Nickname;

    /**
     * @var string The URL of the new profile photo.
     */
    public $Avatar;

    /**
     * @param string $UserId The ID of the user whose profile will be modified.
     * @param string $Nickname The new username to use.
     * @param string $Avatar The URL of the new profile photo.
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

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
