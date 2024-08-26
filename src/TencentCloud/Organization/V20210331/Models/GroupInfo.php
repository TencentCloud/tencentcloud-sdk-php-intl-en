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
 * User group information.
 *
 * @method string getGroupName() Obtain User group name.
 * @method void setGroupName(string $GroupName) Set User group name.
 * @method string getDescription() Obtain User group description.
 * @method void setDescription(string $Description) Set User group description.
 * @method string getCreateTime() Obtain Creation time of the user group.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the user group.
 * @method string getGroupType() Obtain User group type. Manual: manually created; Synchronized: externally imported.
 * @method void setGroupType(string $GroupType) Set User group type. Manual: manually created; Synchronized: externally imported.
 * @method string getUpdateTime() Obtain Modification time of the user group.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time of the user group.
 * @method string getGroupId() Obtain User group ID.
 * @method void setGroupId(string $GroupId) Set User group ID.
 * @method integer getMemberCount() Obtain Number of group members.
 * @method void setMemberCount(integer $MemberCount) Set Number of group members.
 * @method boolean getIsSelected() Obtain If the input parameter FilterUsers is provided, return true when the user is in the user group; otherwise, return false.
 * @method void setIsSelected(boolean $IsSelected) Set If the input parameter FilterUsers is provided, return true when the user is in the user group; otherwise, return false.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string User group name.
     */
    public $GroupName;

    /**
     * @var string User group description.
     */
    public $Description;

    /**
     * @var string Creation time of the user group.
     */
    public $CreateTime;

    /**
     * @var string User group type. Manual: manually created; Synchronized: externally imported.
     */
    public $GroupType;

    /**
     * @var string Modification time of the user group.
     */
    public $UpdateTime;

    /**
     * @var string User group ID.
     */
    public $GroupId;

    /**
     * @var integer Number of group members.
     */
    public $MemberCount;

    /**
     * @var boolean If the input parameter FilterUsers is provided, return true when the user is in the user group; otherwise, return false.
     */
    public $IsSelected;

    /**
     * @param string $GroupName User group name.
     * @param string $Description User group description.
     * @param string $CreateTime Creation time of the user group.
     * @param string $GroupType User group type. Manual: manually created; Synchronized: externally imported.
     * @param string $UpdateTime Modification time of the user group.
     * @param string $GroupId User group ID.
     * @param integer $MemberCount Number of group members.
     * @param boolean $IsSelected If the input parameter FilterUsers is provided, return true when the user is in the user group; otherwise, return false.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }
    }
}
