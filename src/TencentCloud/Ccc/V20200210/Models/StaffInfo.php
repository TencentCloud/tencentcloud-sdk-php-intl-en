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
 * @method void setName(string $Name) Set Agent name.
 * @method string getMail() Obtain Agent email.
 * @method void setMail(string $Mail) Set Agent email.
 * @method string getPhone() Obtain Agent phone number.
 * @method void setPhone(string $Phone) Set Agent phone number.
 * @method string getNick() Obtain Agent nickname.
 * @method void setNick(string $Nick) Set Agent nickname.
 * @method string getStaffNumber() Obtain Agent id.
 * @method void setStaffNumber(string $StaffNumber) Set Agent id.
 * @method integer getRoleId() Obtain User role id.
 * @method void setRoleId(integer $RoleId) Set User role id.
 * @method array getSkillGroupList() Obtain Affiliated skill group list.
 * @method void setSkillGroupList(array $SkillGroupList) Set Affiliated skill group list.
 * @method integer getLastModifyTimestamp() Obtain Last modification time.
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) Set Last modification time.
 * @method string getExtensionNumber() Obtain Agent extension number (starting with 1 to 8, 4 - 6 digits).
 * @method void setExtensionNumber(string $ExtensionNumber) Set Agent extension number (starting with 1 to 8, 4 - 6 digits).
 */
class StaffInfo extends AbstractModel
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
     * @var string Agent phone number.
     */
    public $Phone;

    /**
     * @var string Agent nickname.
     */
    public $Nick;

    /**
     * @var string Agent id.
     */
    public $StaffNumber;

    /**
     * @var integer User role id.
     * @deprecated
     */
    public $RoleId;

    /**
     * @var array Affiliated skill group list.
     */
    public $SkillGroupList;

    /**
     * @var integer Last modification time.
     */
    public $LastModifyTimestamp;

    /**
     * @var string Agent extension number (starting with 1 to 8, 4 - 6 digits).
     */
    public $ExtensionNumber;

    /**
     * @param string $Name Agent name.
     * @param string $Mail Agent email.
     * @param string $Phone Agent phone number.
     * @param string $Nick Agent nickname.
     * @param string $StaffNumber Agent id.
     * @param integer $RoleId User role id.
     * @param array $SkillGroupList Affiliated skill group list.
     * @param integer $LastModifyTimestamp Last modification time.
     * @param string $ExtensionNumber Agent extension number (starting with 1 to 8, 4 - 6 digits).
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

        if (array_key_exists("ExtensionNumber",$param) and $param["ExtensionNumber"] !== null) {
            $this->ExtensionNumber = $param["ExtensionNumber"];
        }
    }
}
