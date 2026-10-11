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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateConsoleGroup request structure.
 *
 * @method string getGroupId() Obtain <p>User group ID, which can be obtained through the ListConsoleGroups API</p>
 * @method void setGroupId(string $GroupId) Set <p>User group ID, which can be obtained through the ListConsoleGroups API</p>
 * @method integer getOperType() Obtain <p>Modification Flag: USER_GROUP_OPER_TYPE_ADD_USER(1)=add member, USER_GROUP_OPER_TYPE_DELETE_USER(2)=delete member, USER_GROUP_OPER_TYPE_BASIC_INFO(3)=basic information (alias and description)</p>
 * @method void setOperType(integer $OperType) Set <p>Modification Flag: USER_GROUP_OPER_TYPE_ADD_USER(1)=add member, USER_GROUP_OPER_TYPE_DELETE_USER(2)=delete member, USER_GROUP_OPER_TYPE_BASIC_INFO(3)=basic information (alias and description)</p>
 * @method string getGroupName() Obtain <p>User group name</p>
 * @method void setGroupName(string $GroupName) Set <p>User group name</p>
 * @method string getGroupNickname() Obtain <p>User group alias.</p>
 * @method void setGroupNickname(string $GroupNickname) Set <p>User group alias.</p>
 * @method string getDescription() Obtain <p>User group description.</p>
 * @method void setDescription(string $Description) Set <p>User group description.</p>
 * @method array getUserUins() Obtain <p>Member UIN list (used when OperType is add/delete member), up to 100 at a time</p>
 * @method void setUserUins(array $UserUins) Set <p>Member UIN list (used when OperType is add/delete member), up to 100 at a time</p>
 */
class UpdateConsoleGroupRequest extends AbstractModel
{
    /**
     * @var string <p>User group ID, which can be obtained through the ListConsoleGroups API</p>
     */
    public $GroupId;

    /**
     * @var integer <p>Modification Flag: USER_GROUP_OPER_TYPE_ADD_USER(1)=add member, USER_GROUP_OPER_TYPE_DELETE_USER(2)=delete member, USER_GROUP_OPER_TYPE_BASIC_INFO(3)=basic information (alias and description)</p>
     */
    public $OperType;

    /**
     * @var string <p>User group name</p>
     */
    public $GroupName;

    /**
     * @var string <p>User group alias.</p>
     */
    public $GroupNickname;

    /**
     * @var string <p>User group description.</p>
     */
    public $Description;

    /**
     * @var array <p>Member UIN list (used when OperType is add/delete member), up to 100 at a time</p>
     */
    public $UserUins;

    /**
     * @param string $GroupId <p>User group ID, which can be obtained through the ListConsoleGroups API</p>
     * @param integer $OperType <p>Modification Flag: USER_GROUP_OPER_TYPE_ADD_USER(1)=add member, USER_GROUP_OPER_TYPE_DELETE_USER(2)=delete member, USER_GROUP_OPER_TYPE_BASIC_INFO(3)=basic information (alias and description)</p>
     * @param string $GroupName <p>User group name</p>
     * @param string $GroupNickname <p>User group alias.</p>
     * @param string $Description <p>User group description.</p>
     * @param array $UserUins <p>Member UIN list (used when OperType is add/delete member), up to 100 at a time</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("OperType",$param) and $param["OperType"] !== null) {
            $this->OperType = $param["OperType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNickname",$param) and $param["GroupNickname"] !== null) {
            $this->GroupNickname = $param["GroupNickname"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }
    }
}
