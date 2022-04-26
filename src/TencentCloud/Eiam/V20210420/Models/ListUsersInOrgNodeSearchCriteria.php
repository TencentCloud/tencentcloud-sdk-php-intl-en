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
 * Displays user attribute search criteria under the organization.
 *
 * @method string getUserName() Obtain Username, which can contain up to 64 characters.
 * @method void setUserName(string $UserName) Set Username, which can contain up to 64 characters.
 * @method string getPhone() Obtain User's mobile number.
 * @method void setPhone(string $Phone) Set User's mobile number.
 * @method string getEmail() Obtain User's email address.
 * @method void setEmail(string $Email) Set User's email address.
 * @method string getStatus() Obtain User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
 * @method void setStatus(string $Status) Set User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
 * @method string getCreationTime() Obtain User creation time in ISO 8601 format.
 * @method void setCreationTime(string $CreationTime) Set User creation time in ISO 8601 format.
 * @method string getLastUpdateTime() Obtain Last update time of the user.
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time of the user.
 * @method string getKeyword() Obtain Search by name. The match criteria include username and user's mobile number.
 * @method void setKeyword(string $Keyword) Set Search by name. The match criteria include username and user's mobile number.
 */
class ListUsersInOrgNodeSearchCriteria extends AbstractModel
{
    /**
     * @var string Username, which can contain up to 64 characters.
     */
    public $UserName;

    /**
     * @var string User's mobile number.
     */
    public $Phone;

    /**
     * @var string User's email address.
     */
    public $Email;

    /**
     * @var string User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
     */
    public $Status;

    /**
     * @var string User creation time in ISO 8601 format.
     */
    public $CreationTime;

    /**
     * @var string Last update time of the user.
     */
    public $LastUpdateTime;

    /**
     * @var string Search by name. The match criteria include username and user's mobile number.
     */
    public $Keyword;

    /**
     * @param string $UserName Username, which can contain up to 64 characters.
     * @param string $Phone User's mobile number.
     * @param string $Email User's email address.
     * @param string $Status User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
     * @param string $CreationTime User creation time in ISO 8601 format.
     * @param string $LastUpdateTime Last update time of the user.
     * @param string $Keyword Search by name. The match criteria include username and user's mobile number.
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

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
