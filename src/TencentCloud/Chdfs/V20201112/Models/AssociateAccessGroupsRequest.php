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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateAccessGroups request structure.
 *
 * @method string getMountPointId() Obtain Mount point ID
 * @method void setMountPointId(string $MountPointId) Set Mount point ID
 * @method array getAccessGroupIds() Obtain List of permission group IDs
 * @method void setAccessGroupIds(array $AccessGroupIds) Set List of permission group IDs
 */
class AssociateAccessGroupsRequest extends AbstractModel
{
    /**
     * @var string Mount point ID
     */
    public $MountPointId;

    /**
     * @var array List of permission group IDs
     */
    public $AccessGroupIds;

    /**
     * @param string $MountPointId Mount point ID
     * @param array $AccessGroupIds List of permission group IDs
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
        if (array_key_exists("MountPointId",$param) and $param["MountPointId"] !== null) {
            $this->MountPointId = $param["MountPointId"];
        }

        if (array_key_exists("AccessGroupIds",$param) and $param["AccessGroupIds"] !== null) {
            $this->AccessGroupIds = $param["AccessGroupIds"];
        }
    }
}
