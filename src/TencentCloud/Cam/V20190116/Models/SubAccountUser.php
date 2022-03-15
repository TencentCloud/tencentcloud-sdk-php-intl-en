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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sub-user information
 *
 * @method integer getUin() Obtain Sub-user ID
 * @method void setUin(integer $Uin) Set Sub-user ID
 * @method string getName() Obtain Sub-user name
 * @method void setName(string $Name) Set Sub-user name
 * @method integer getUid() Obtain Sub-user UID. UID is the unique identifier of a user who is a message recipient, while UIN is a unique identifier of a user.
 * @method void setUid(integer $Uid) Set Sub-user UID. UID is the unique identifier of a user who is a message recipient, while UIN is a unique identifier of a user.
 * @method string getRemark() Obtain Sub-user remarks
 * @method void setRemark(string $Remark) Set Sub-user remarks
 * @method string getCreateTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUserType() Obtain User type (1: root account; 2: sub-user; 3: WeCom sub-user; 4: collaborator; 5: message recipient)
 * @method void setUserType(integer $UserType) Set User type (1: root account; 2: sub-user; 3: WeCom sub-user; 4: collaborator; 5: message recipient)
 * @method string getLastLoginIp() Obtain 
 * @method void setLastLoginIp(string $LastLoginIp) Set 
 * @method string getLastLoginTime() Obtain 
 * @method void setLastLoginTime(string $LastLoginTime) Set 
 */
class SubAccountUser extends AbstractModel
{
    /**
     * @var integer Sub-user ID
     */
    public $Uin;

    /**
     * @var string Sub-user name
     */
    public $Name;

    /**
     * @var integer Sub-user UID. UID is the unique identifier of a user who is a message recipient, while UIN is a unique identifier of a user.
     */
    public $Uid;

    /**
     * @var string Sub-user remarks
     */
    public $Remark;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer User type (1: root account; 2: sub-user; 3: WeCom sub-user; 4: collaborator; 5: message recipient)
     */
    public $UserType;

    /**
     * @var string 
     */
    public $LastLoginIp;

    /**
     * @var string 
     */
    public $LastLoginTime;

    /**
     * @param integer $Uin Sub-user ID
     * @param string $Name Sub-user name
     * @param integer $Uid Sub-user UID. UID is the unique identifier of a user who is a message recipient, while UIN is a unique identifier of a user.
     * @param string $Remark Sub-user remarks
     * @param string $CreateTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UserType User type (1: root account; 2: sub-user; 3: WeCom sub-user; 4: collaborator; 5: message recipient)
     * @param string $LastLoginIp 
     * @param string $LastLoginTime 
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("LastLoginIp",$param) and $param["LastLoginIp"] !== null) {
            $this->LastLoginIp = $param["LastLoginIp"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }
    }
}
