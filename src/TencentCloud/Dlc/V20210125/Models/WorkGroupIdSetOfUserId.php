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
 * Collections of the working groups bound to the same user
 *
 * @method string getUserId() Obtain User ID, which matches Uin on the CAM side.
 * @method void setUserId(string $UserId) Set User ID, which matches Uin on the CAM side.
 * @method array getWorkGroupIds() Obtain Collections of IDs of working groups
 * @method void setWorkGroupIds(array $WorkGroupIds) Set Collections of IDs of working groups
 */
class WorkGroupIdSetOfUserId extends AbstractModel
{
    /**
     * @var string User ID, which matches Uin on the CAM side.
     */
    public $UserId;

    /**
     * @var array Collections of IDs of working groups
     */
    public $WorkGroupIds;

    /**
     * @param string $UserId User ID, which matches Uin on the CAM side.
     * @param array $WorkGroupIds Collections of IDs of working groups
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkGroupIds",$param) and $param["WorkGroupIds"] !== null) {
            $this->WorkGroupIds = $param["WorkGroupIds"];
        }
    }
}
