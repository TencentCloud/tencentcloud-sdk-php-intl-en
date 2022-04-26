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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUserToUserGroup request structure.
 *
 * @method array getUserIds() Obtain List of IDs of the users to be added to the user group.
 * @method void setUserIds(array $UserIds) Set List of IDs of the users to be added to the user group.
 * @method string getUserGroupId() Obtain User group ID, which is globally unique.
 * @method void setUserGroupId(string $UserGroupId) Set User group ID, which is globally unique.
 */
class AddUserToUserGroupRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the users to be added to the user group.
     */
    public $UserIds;

    /**
     * @var string User group ID, which is globally unique.
     */
    public $UserGroupId;

    /**
     * @param array $UserIds List of IDs of the users to be added to the user group.
     * @param string $UserGroupId User group ID, which is globally unique.
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
        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }
    }
}
