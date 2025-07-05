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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrganizationMemberEmail request structure.
 *
 * @method integer getMemberUin() Obtain Member uin.
 * @method void setMemberUin(integer $MemberUin) Set Member uin.
 * @method string getEmail() Obtain Email address.
 * @method void setEmail(string $Email) Set Email address.
 * @method string getCountryCode() Obtain International area code.
 * @method void setCountryCode(string $CountryCode) Set International area code.
 * @method string getPhone() Obtain Mobile number.
 * @method void setPhone(string $Phone) Set Mobile number.
 */
class AddOrganizationMemberEmailRequest extends AbstractModel
{
    /**
     * @var integer Member uin.
     */
    public $MemberUin;

    /**
     * @var string Email address.
     */
    public $Email;

    /**
     * @var string International area code.
     */
    public $CountryCode;

    /**
     * @var string Mobile number.
     */
    public $Phone;

    /**
     * @param integer $MemberUin Member uin.
     * @param string $Email Email address.
     * @param string $CountryCode International area code.
     * @param string $Phone Mobile number.
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }
    }
}
