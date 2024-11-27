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
 * CreateGroup request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getGroupName() Obtain User group name, which contains up to 128 characters, including English letters, digits, and special characters (-).
 * @method void setGroupName(string $GroupName) Set User group name, which contains up to 128 characters, including English letters, digits, and special characters (-).
 * @method string getDescription() Obtain User group description, which contains up to 1024 characters.
 * @method void setDescription(string $Description) Set User group description, which contains up to 1024 characters.
 * @method string getGroupType() Obtain User group type. Manual: manually created, Synchronized: imported from external sources.
 * @method void setGroupType(string $GroupType) Set User group type. Manual: manually created, Synchronized: imported from external sources.
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User group name, which contains up to 128 characters, including English letters, digits, and special characters (-).
     */
    public $GroupName;

    /**
     * @var string User group description, which contains up to 1024 characters.
     */
    public $Description;

    /**
     * @var string User group type. Manual: manually created, Synchronized: imported from external sources.
     */
    public $GroupType;

    /**
     * @param string $ZoneId Space ID.
     * @param string $GroupName User group name, which contains up to 128 characters, including English letters, digits, and special characters (-).
     * @param string $Description User group description, which contains up to 1024 characters.
     * @param string $GroupType User group type. Manual: manually created, Synchronized: imported from external sources.
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
