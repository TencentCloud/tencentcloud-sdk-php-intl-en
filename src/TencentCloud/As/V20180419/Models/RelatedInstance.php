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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the instances related to the current scaling activity.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceStatus() Obtain Status of the instance in the scaling activity. Valid values:
`INIT`: Initializing
`RUNNING`: Processing the instance
`SUCCESSFUL`: Task succeeded on the instance
`FAILED`: Task failed on the instance
 * @method void setInstanceStatus(string $InstanceStatus) Set Status of the instance in the scaling activity. Valid values:
`INIT`: Initializing
`RUNNING`: Processing the instance
`SUCCESSFUL`: Task succeeded on the instance
`FAILED`: Task failed on the instance
 */
class RelatedInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Status of the instance in the scaling activity. Valid values:
`INIT`: Initializing
`RUNNING`: Processing the instance
`SUCCESSFUL`: Task succeeded on the instance
`FAILED`: Task failed on the instance
     */
    public $InstanceStatus;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceStatus Status of the instance in the scaling activity. Valid values:
`INIT`: Initializing
`RUNNING`: Processing the instance
`SUCCESSFUL`: Task succeeded on the instance
`FAILED`: Task failed on the instance
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
