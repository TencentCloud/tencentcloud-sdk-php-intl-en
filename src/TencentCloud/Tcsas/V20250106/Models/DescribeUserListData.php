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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User list data
 *
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAccount() Obtain User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAccount(string $UserAccount) Set User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccountType() Obtain Account type. 1: Super admin; 2: Platform admin; 3: Member
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountType(integer $AccountType) Set Account type. 1: Super admin; 2: Platform admin; 3: Member
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain User name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeUserListData extends AbstractModel
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
     * @var integer Account type. 1: Super admin; 2: Platform admin; 3: Member
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountType;

    /**
     * @var string User name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAccount User account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccountType Account type. 1: Super admin; 2: Platform admin; 3: Member
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName User name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }
    }
}
