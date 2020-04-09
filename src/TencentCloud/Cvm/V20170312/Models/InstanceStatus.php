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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes instance states. For state types, see [here](/document/api/213/15753#InstanceStatus).
 *
 * @method string getInstanceId() Obtain Instance `ID`.
 * @method void setInstanceId(string $InstanceId) Set Instance `ID`.
 * @method string getInstanceState() Obtain The instance state. Valid values: <br><li>PENDING: creating<br></li><li>LAUNCH_FAILED: creation failed<br></li><li>RUNNING: running<br></li><li>STOPPED: shut down<br></li><li>STARTING: starting<br></li><li>STOPPING: shutting down<br></li><li>REBOOTING: rebooting<br></li><li>SHUTDOWN: shut down and to be terminated<br></li><li>TERMINATING: terminating.<br></li>
 * @method void setInstanceState(string $InstanceState) Set The instance state. Valid values: <br><li>PENDING: creating<br></li><li>LAUNCH_FAILED: creation failed<br></li><li>RUNNING: running<br></li><li>STOPPED: shut down<br></li><li>STARTING: starting<br></li><li>STOPPING: shutting down<br></li><li>REBOOTING: rebooting<br></li><li>SHUTDOWN: shut down and to be terminated<br></li><li>TERMINATING: terminating.<br></li>
 */
class InstanceStatus extends AbstractModel
{
    /**
     * @var string Instance `ID`.
     */
    public $InstanceId;

    /**
     * @var string The instance state. Valid values: <br><li>PENDING: creating<br></li><li>LAUNCH_FAILED: creation failed<br></li><li>RUNNING: running<br></li><li>STOPPED: shut down<br></li><li>STARTING: starting<br></li><li>STOPPING: shutting down<br></li><li>REBOOTING: rebooting<br></li><li>SHUTDOWN: shut down and to be terminated<br></li><li>TERMINATING: terminating.<br></li>
     */
    public $InstanceState;

    /**
     * @param string $InstanceId Instance `ID`.
     * @param string $InstanceState The instance state. Valid values: <br><li>PENDING: creating<br></li><li>LAUNCH_FAILED: creation failed<br></li><li>RUNNING: running<br></li><li>STOPPED: shut down<br></li><li>STARTING: starting<br></li><li>STOPPING: shutting down<br></li><li>REBOOTING: rebooting<br></li><li>SHUTDOWN: shut down and to be terminated<br></li><li>TERMINATING: terminating.<br></li>
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

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
