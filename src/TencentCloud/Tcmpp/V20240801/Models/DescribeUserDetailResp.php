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
 * User details
 *
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAccount() Obtain User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAccount(string $UserAccount) Set User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccountType() Obtain User account
1 - Super admin 2 - Platform admin 3 - Ordinary member
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountType(integer $AccountType) Set User account
1 - Super admin 2 - Platform admin 3 - Ordinary member
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain User name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeUserDetailResp extends AbstractModel
{
    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string User account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAccount;

    /**
     * @var integer User account
1 - Super admin 2 - Platform admin 3 - Ordinary member
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountType;

    /**
     * @var string User name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAccount User account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccountType User account
1 - Super admin 2 - Platform admin 3 - Ordinary member
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName User name
Note: This field may return null, indicating that no valid values can be obtained.
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
