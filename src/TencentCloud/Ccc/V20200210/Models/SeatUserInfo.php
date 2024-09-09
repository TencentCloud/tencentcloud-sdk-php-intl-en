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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent User Information
 *
 * @method string getName() Obtain Agent name.
 * @method void setName(string $Name) Set Agent name.
 * @method string getMail() Obtain Agent email.
 * @method void setMail(string $Mail) Set Agent email.
 * @method string getStaffNumber() Obtain Worker number.
Note: This field may return null, indicating that no valid value could be obtained.
 * @method void setStaffNumber(string $StaffNumber) Set Worker number.
Note: This field may return null, indicating that no valid value could be obtained.
 * @method string getPhone() Obtain Agent's Telephone Number (With 0086 Prefix)
 * @method void setPhone(string $Phone) Set Agent's Telephone Number (With 0086 Prefix)
 * @method string getNick() Obtain Agent nickname.
 * @method void setNick(string $Nick) Set Agent nickname.
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method array getSkillGroupNameList() Obtain List of skill groups associated with the seat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupNameList(array $SkillGroupNameList) Set List of skill groups associated with the seat
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRole() Obtain 1: Admin.
2: Quality inspector.
3: Ordinary agent.
else: Custom Role ID.
Note: This field may return null, indicating that no valid value could be obtained.
 * @method void setRole(integer $Role) Set 1: Admin.
2: Quality inspector.
3: Ordinary agent.
else: Custom Role ID.
Note: This field may return null, indicating that no valid value could be obtained.
 */
class SeatUserInfo extends AbstractModel
{
    /**
     * @var string Agent name.
     */
    public $Name;

    /**
     * @var string Agent email.
     */
    public $Mail;

    /**
     * @var string Worker number.
Note: This field may return null, indicating that no valid value could be obtained.
     */
    public $StaffNumber;

    /**
     * @var string Agent's Telephone Number (With 0086 Prefix)
     */
    public $Phone;

    /**
     * @var string Agent nickname.
     */
    public $Nick;

    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var array List of skill groups associated with the seat
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupNameList;

    /**
     * @var integer 1: Admin.
2: Quality inspector.
3: Ordinary agent.
else: Custom Role ID.
Note: This field may return null, indicating that no valid value could be obtained.
     */
    public $Role;

    /**
     * @param string $Name Agent name.
     * @param string $Mail Agent email.
     * @param string $StaffNumber Worker number.
Note: This field may return null, indicating that no valid value could be obtained.
     * @param string $Phone Agent's Telephone Number (With 0086 Prefix)
     * @param string $Nick Agent nickname.
     * @param string $UserId User ID
     * @param array $SkillGroupNameList List of skill groups associated with the seat
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Role 1: Admin.
2: Quality inspector.
3: Ordinary agent.
else: Custom Role ID.
Note: This field may return null, indicating that no valid value could be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SkillGroupNameList",$param) and $param["SkillGroupNameList"] !== null) {
            $this->SkillGroupNameList = $param["SkillGroupNameList"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
