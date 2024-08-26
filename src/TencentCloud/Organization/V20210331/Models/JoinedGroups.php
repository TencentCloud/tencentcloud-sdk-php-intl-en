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
 * User group joined by the user.
 *
 * @method string getGroupName() Obtain User group name.
 * @method void setGroupName(string $GroupName) Set User group name.
 * @method string getDescription() Obtain User group description.
 * @method void setDescription(string $Description) Set User group description.
 * @method string getGroupId() Obtain User group ID.
 * @method void setGroupId(string $GroupId) Set User group ID.
 * @method string getGroupType() Obtain User group type. Valid values:

Manual: manually created.
Synchronized: externally synchronized.
 * @method void setGroupType(string $GroupType) Set User group type. Valid values:

Manual: manually created.
Synchronized: externally synchronized.
 * @method string getJoinTime() Obtain Time of joining the user group.
 * @method void setJoinTime(string $JoinTime) Set Time of joining the user group.
 */
class JoinedGroups extends AbstractModel
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
     * @var string User group ID.
     */
    public $GroupId;

    /**
     * @var string User group type. Valid values:

Manual: manually created.
Synchronized: externally synchronized.
     */
    public $GroupType;

    /**
     * @var string Time of joining the user group.
     */
    public $JoinTime;

    /**
     * @param string $GroupName User group name.
     * @param string $Description User group description.
     * @param string $GroupId User group ID.
     * @param string $GroupType User group type. Valid values:

Manual: manually created.
Synchronized: externally synchronized.
     * @param string $JoinTime Time of joining the user group.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }
    }
}
