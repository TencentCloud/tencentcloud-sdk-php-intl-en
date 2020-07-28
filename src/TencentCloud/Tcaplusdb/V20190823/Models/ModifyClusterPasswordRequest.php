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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterPassword request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster for which to modify the password
 * @method void setClusterId(string $ClusterId) Set ID of the cluster for which to modify the password
 * @method string getOldPassword() Obtain Old cluster password
 * @method void setOldPassword(string $OldPassword) Set Old cluster password
 * @method string getOldPasswordExpireTime() Obtain Expected expiration time of old cluster password
 * @method void setOldPasswordExpireTime(string $OldPasswordExpireTime) Set Expected expiration time of old cluster password
 * @method string getNewPassword() Obtain New cluster password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
 * @method void setNewPassword(string $NewPassword) Set New cluster password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
 * @method string getMode() Obtain Update mode. 1: updates password, 2: updates old password expiration time. Default value: 1
 * @method void setMode(string $Mode) Set Update mode. 1: updates password, 2: updates old password expiration time. Default value: 1
 */
class ModifyClusterPasswordRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster for which to modify the password
     */
    public $ClusterId;

    /**
     * @var string Old cluster password
     */
    public $OldPassword;

    /**
     * @var string Expected expiration time of old cluster password
     */
    public $OldPasswordExpireTime;

    /**
     * @var string New cluster password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
     */
    public $NewPassword;

    /**
     * @var string Update mode. 1: updates password, 2: updates old password expiration time. Default value: 1
     */
    public $Mode;

    /**
     * @param string $ClusterId ID of the cluster for which to modify the password
     * @param string $OldPassword Old cluster password
     * @param string $OldPasswordExpireTime Expected expiration time of old cluster password
     * @param string $NewPassword New cluster password, which must contain lowercase letters (a-z), uppercase letters (A-Z), and digits (0-9).
     * @param string $Mode Update mode. 1: updates password, 2: updates old password expiration time. Default value: 1
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("OldPasswordExpireTime",$param) and $param["OldPasswordExpireTime"] !== null) {
            $this->OldPasswordExpireTime = $param["OldPasswordExpireTime"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
