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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUser request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getNewFirstName() Obtain First name of the user.
 * @method void setNewFirstName(string $NewFirstName) Set First name of the user.
 * @method string getNewLastName() Obtain Last name of the user.
 * @method void setNewLastName(string $NewLastName) Set Last name of the user.
 * @method string getNewDisplayName() Obtain Display name of the user.
 * @method void setNewDisplayName(string $NewDisplayName) Set Display name of the user.
 * @method string getNewDescription() Obtain User description.
 * @method void setNewDescription(string $NewDescription) Set User description.
 * @method string getNewEmail() Obtain Email address of the user.
 * @method void setNewEmail(string $NewEmail) Set Email address of the user.
 */
class UpdateUserRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string First name of the user.
     */
    public $NewFirstName;

    /**
     * @var string Last name of the user.
     */
    public $NewLastName;

    /**
     * @var string Display name of the user.
     */
    public $NewDisplayName;

    /**
     * @var string User description.
     */
    public $NewDescription;

    /**
     * @var string Email address of the user.
     */
    public $NewEmail;

    /**
     * @param string $ZoneId Space ID.
     * @param string $UserId User ID.
     * @param string $NewFirstName First name of the user.
     * @param string $NewLastName Last name of the user.
     * @param string $NewDisplayName Display name of the user.
     * @param string $NewDescription User description.
     * @param string $NewEmail Email address of the user.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("NewFirstName",$param) and $param["NewFirstName"] !== null) {
            $this->NewFirstName = $param["NewFirstName"];
        }

        if (array_key_exists("NewLastName",$param) and $param["NewLastName"] !== null) {
            $this->NewLastName = $param["NewLastName"];
        }

        if (array_key_exists("NewDisplayName",$param) and $param["NewDisplayName"] !== null) {
            $this->NewDisplayName = $param["NewDisplayName"];
        }

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }

        if (array_key_exists("NewEmail",$param) and $param["NewEmail"] !== null) {
            $this->NewEmail = $param["NewEmail"];
        }
    }
}
