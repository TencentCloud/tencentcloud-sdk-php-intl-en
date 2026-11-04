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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Employee information
 *
 * @method string getAccountUin() Obtain <p>Employee sub-account id</p>
 * @method void setAccountUin(string $AccountUin) Set <p>Employee sub-account id</p>
 * @method string getNickName() Obtain <p>Employee nickname</p>
 * @method void setNickName(string $NickName) Set <p>Employee nickname</p>
 * @method string getAvatar() Obtain <p>Employee avatar</p>
 * @method void setAvatar(string $Avatar) Set <p>Employee avatar</p>
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string <p>Employee sub-account id</p>
     */
    public $AccountUin;

    /**
     * @var string <p>Employee nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>Employee avatar</p>
     */
    public $Avatar;

    /**
     * @param string $AccountUin <p>Employee sub-account id</p>
     * @param string $NickName <p>Employee nickname</p>
     * @param string $Avatar <p>Employee avatar</p>
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
        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
