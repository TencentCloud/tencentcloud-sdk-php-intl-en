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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group information.
 *
 * @method string getGroupName() Obtain User group name.
 * @method void setGroupName(string $GroupName) Set User group name.
 * @method array getUsers() Obtain User name list.
 * @method void setUsers(array $Users) Set User name list.
 * @method string getDescription() Obtain Remarks.
 * @method void setDescription(string $Description) Set Remarks.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getGroupType() Obtain User group type.
 * @method void setGroupType(integer $GroupType) Set User group type.
 * @method string getGroupTypeDesc() Obtain User group type description.
 * @method void setGroupTypeDesc(string $GroupTypeDesc) Set User group type description.
 */
class GroupInfos extends AbstractModel
{
    /**
     * @var string User group name.
     */
    public $GroupName;

    /**
     * @var array User name list.
     */
    public $Users;

    /**
     * @var string Remarks.
     */
    public $Description;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer User group type.
     */
    public $GroupType;

    /**
     * @var string User group type description.
     */
    public $GroupTypeDesc;

    /**
     * @param string $GroupName User group name.
     * @param array $Users User name list.
     * @param string $Description Remarks.
     * @param string $CreateTime Creation time.
     * @param integer $GroupType User group type.
     * @param string $GroupTypeDesc User group type description.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupTypeDesc",$param) and $param["GroupTypeDesc"] !== null) {
            $this->GroupTypeDesc = $param["GroupTypeDesc"];
        }
    }
}
