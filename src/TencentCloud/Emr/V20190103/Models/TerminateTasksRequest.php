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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateTasks request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getResourceIds() Obtain List of resource IDs of the node to be terminated. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
 * @method void setResourceIds(array $ResourceIds) Set List of resource IDs of the node to be terminated. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
 */
class TerminateTasksRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array List of resource IDs of the node to be terminated. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
     */
    public $ResourceIds;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $ResourceIds List of resource IDs of the node to be terminated. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
