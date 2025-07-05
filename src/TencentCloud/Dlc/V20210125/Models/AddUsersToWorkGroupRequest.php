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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUsersToWorkGroup request structure.
 *
 * @method UserIdSetOfWorkGroupId getAddInfo() Obtain Information about working groups and users to be operated
 * @method void setAddInfo(UserIdSetOfWorkGroupId $AddInfo) Set Information about working groups and users to be operated
 */
class AddUsersToWorkGroupRequest extends AbstractModel
{
    /**
     * @var UserIdSetOfWorkGroupId Information about working groups and users to be operated
     */
    public $AddInfo;

    /**
     * @param UserIdSetOfWorkGroupId $AddInfo Information about working groups and users to be operated
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
        if (array_key_exists("AddInfo",$param) and $param["AddInfo"] !== null) {
            $this->AddInfo = new UserIdSetOfWorkGroupId();
            $this->AddInfo->deserialize($param["AddInfo"]);
        }
    }
}
