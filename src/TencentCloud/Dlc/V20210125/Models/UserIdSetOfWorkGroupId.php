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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection of IDs of users bound to the same working group
 *
 * @method integer getWorkGroupId() Obtain Working group IDs
 * @method void setWorkGroupId(integer $WorkGroupId) Set Working group IDs
 * @method array getUserIds() Obtain User ID which matches the Uin on the CAM side
 * @method void setUserIds(array $UserIds) Set User ID which matches the Uin on the CAM side
 */
class UserIdSetOfWorkGroupId extends AbstractModel
{
    /**
     * @var integer Working group IDs
     */
    public $WorkGroupId;

    /**
     * @var array User ID which matches the Uin on the CAM side
     */
    public $UserIds;

    /**
     * @param integer $WorkGroupId Working group IDs
     * @param array $UserIds User ID which matches the Uin on the CAM side
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
