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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUser request structure.
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 * @method integer getAccountType() Obtain Account type 2 - Platform administrator 3 - Ordinary member
 * @method void setAccountType(integer $AccountType) Set Account type 2 - Platform administrator 3 - Ordinary member
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getUserAccount() Obtain Account
 * @method void setUserAccount(string $UserAccount) Set Account
 */
class ModifyUserRequest extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User name
     */
    public $UserName;

    /**
     * @var integer Account type 2 - Platform administrator 3 - Ordinary member
     */
    public $AccountType;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Account
     * @deprecated
     */
    public $UserAccount;

    /**
     * @param string $UserId User ID
     * @param string $UserName User name
     * @param integer $AccountType Account type 2 - Platform administrator 3 - Ordinary member
     * @param string $PlatformId Platform ID
     * @param string $UserAccount Account
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

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }
    }
}
