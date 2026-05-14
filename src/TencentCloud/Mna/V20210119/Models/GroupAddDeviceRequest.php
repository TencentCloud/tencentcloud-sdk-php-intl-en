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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GroupAddDevice request structure.
 *
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 * @method array getDeviceList() Obtain Device list to be added
 * @method void setDeviceList(array $DeviceList) Set Device list to be added
 */
class GroupAddDeviceRequest extends AbstractModel
{
    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @var array Device list to be added
     */
    public $DeviceList;

    /**
     * @param string $GroupId group ID
     * @param array $DeviceList Device list to be added
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }
    }
}
