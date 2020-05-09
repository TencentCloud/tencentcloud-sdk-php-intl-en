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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstanceGroup in Alarms returned by the DescribeBasicAlarmList API
 *
 * @method integer getInstanceGroupId() Obtain Instance group ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceGroupName() Obtain Instance group name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceGroupName(string $InstanceGroupName) Set Instance group name.
Note: This field may return null, indicating that no valid value was found.
 */
class InstanceGroup extends AbstractModel
{
    /**
     * @var integer Instance group ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceGroupId;

    /**
     * @var string Instance group name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceGroupName;

    /**
     * @param integer $InstanceGroupId Instance group ID.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceGroupName Instance group name.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceGroupName",$param) and $param["InstanceGroupName"] !== null) {
            $this->InstanceGroupName = $param["InstanceGroupName"];
        }
    }
}
