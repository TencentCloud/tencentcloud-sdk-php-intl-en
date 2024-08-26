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
 * UpdateGroup request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getGroupId() Obtain User group ID.
 * @method void setGroupId(string $GroupId) Set User group ID.
 * @method string getNewGroupName() Obtain New user group name.
 * @method void setNewGroupName(string $NewGroupName) Set New user group name.
 * @method string getNewDescription() Obtain New user group description.
 * @method void setNewDescription(string $NewDescription) Set New user group description.
 */
class UpdateGroupRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User group ID.
     */
    public $GroupId;

    /**
     * @var string New user group name.
     */
    public $NewGroupName;

    /**
     * @var string New user group description.
     */
    public $NewDescription;

    /**
     * @param string $ZoneId Space ID.
     * @param string $GroupId User group ID.
     * @param string $NewGroupName New user group name.
     * @param string $NewDescription New user group description.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NewGroupName",$param) and $param["NewGroupName"] !== null) {
            $this->NewGroupName = $param["NewGroupName"];
        }

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }
    }
}
