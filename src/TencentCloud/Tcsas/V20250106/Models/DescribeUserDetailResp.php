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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for querying user details.
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getUserAccount() Obtain User account.
 * @method void setUserAccount(string $UserAccount) Set User account.
 * @method integer getAccountType() Obtain User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned.
 * @method void setAccountType(integer $AccountType) Set User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned.
 * @method string getUserName() Obtain User name.
 * @method void setUserName(string $UserName) Set User name.
 */
class DescribeUserDetailResp extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string User account.
     */
    public $UserAccount;

    /**
     * @var integer User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned.
     */
    public $AccountType;

    /**
     * @var string User name.
     */
    public $UserName;

    /**
     * @param string $UserId User ID.
     * @param string $UserAccount User account.
     * @param integer $AccountType User account type. Valid values: 1: Super admin; 2: Platform admin; 3: Regular member. If left empty, all types are returned.
     * @param string $UserName User name.
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

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
