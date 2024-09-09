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
 * Agent Information with Skill Group Priority
 *
 * @method string getName() Obtain Agent name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Agent name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMail() Obtain Agent email.
 * @method void setMail(string $Mail) Set Agent email.
 * @method string getPhone() Obtain Agent's Telephone Number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set Agent's Telephone Number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNick() Obtain Agent nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set Agent nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStaffNumber() Obtain Agent ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStaffNumber(string $StaffNumber) Set Agent ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRoleId() Obtain User Role ID
 * @method void setRoleId(integer $RoleId) Set User Role ID
 * @method array getSkillGroupList() Obtain Affiliated Skill Group List.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupList(array $SkillGroupList) Set Affiliated Skill Group List.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTimestamp() Obtain Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) Set Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StaffInfo extends AbstractModel
{
    /**
     * @var string Agent name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Agent email.
     */
    public $Mail;

    /**
     * @var string Agent's Telephone Number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var string Agent nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string Agent ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StaffNumber;

    /**
     * @var integer User Role ID
     */
    public $RoleId;

    /**
     * @var array Affiliated Skill Group List.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupList;

    /**
     * @var integer Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTimestamp;

    /**
     * @param string $Name Agent name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mail Agent email.
     * @param string $Phone Agent's Telephone Number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nick Agent nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StaffNumber Agent ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RoleId User Role ID
     * @param array $SkillGroupList Affiliated Skill Group List.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTimestamp Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("SkillGroupList",$param) and $param["SkillGroupList"] !== null) {
            $this->SkillGroupList = [];
            foreach ($param["SkillGroupList"] as $key => $value){
                $obj = new SkillGroupItem();
                $obj->deserialize($value);
                array_push($this->SkillGroupList, $obj);
            }
        }

        if (array_key_exists("LastModifyTimestamp",$param) and $param["LastModifyTimestamp"] !== null) {
            $this->LastModifyTimestamp = $param["LastModifyTimestamp"];
        }
    }
}
