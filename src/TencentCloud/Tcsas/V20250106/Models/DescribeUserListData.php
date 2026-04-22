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
 * User list data
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserAccount() Obtain User account
 * @method void setUserAccount(string $UserAccount) Set User account
 * @method integer getAccountType() Obtain Account type. 1: super administrator; 2: platform administrator; 3: ordinary member.
 * @method void setAccountType(integer $AccountType) Set Account type. 1: super administrator; 2: platform administrator; 3: ordinary member.
 * @method string getUserName() Obtain User name
 * @method void setUserName(string $UserName) Set User name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getStatus() Obtain Status. 1: normal; 2: disabled.
 * @method void setStatus(integer $Status) Set Status. 1: normal; 2: disabled.
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 */
class DescribeUserListData extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User account
     */
    public $UserAccount;

    /**
     * @var integer Account type. 1: super administrator; 2: platform administrator; 3: ordinary member.
     */
    public $AccountType;

    /**
     * @var string User name
     */
    public $UserName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Status. 1: normal; 2: disabled.
     */
    public $Status;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @param string $UserId User ID
     * @param string $UserAccount User account
     * @param integer $AccountType Account type. 1: super administrator; 2: platform administrator; 3: ordinary member.
     * @param string $UserName User name
     * @param string $CreateTime Creation time
     * @param integer $Status Status. 1: normal; 2: disabled.
     * @param string $TeamName Team name
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
