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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GA access log
 *
 * @method string getLogPushTaskId() Obtain <p>Log Unique Id</p>
 * @method void setLogPushTaskId(string $LogPushTaskId) Set <p>Log Unique Id</p>
 * @method string getGlobalAcceleratorId() Obtain <p>Unique Id of the GA instance.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Unique Id of the GA instance.</p>
 * @method string getListenerId() Obtain <p>Unique Id of the listener</p>
 * @method void setListenerId(string $ListenerId) Set <p>Unique Id of the listener</p>
 * @method string getEndpointGroupId() Obtain <p>Unique Id of the terminal node group</p>
 * @method void setEndpointGroupId(string $EndpointGroupId) Set <p>Unique Id of the terminal node group</p>
 * @method string getFlowLogDescription() Obtain <p>Log task description</p>
 * @method void setFlowLogDescription(string $FlowLogDescription) Set <p>Log task description</p>
 * @method string getCloudRegion() Obtain <p>Region where the logs are located.</p>
 * @method void setCloudRegion(string $CloudRegion) Set <p>Region where the logs are located.</p>
 * @method string getCloudLogId() Obtain <p>Log topic Id</p>
 * @method void setCloudLogId(string $CloudLogId) Set <p>Log topic Id</p>
 * @method string getCloudLogSetId() Obtain <p>Log Set Id</p>
 * @method void setCloudLogSetId(string $CloudLogSetId) Set <p>Log Set Id</p>
 * @method array getFieldKeys() Obtain <p>Select log data collection field</p>
 * @method void setFieldKeys(array $FieldKeys) Set <p>Select log data collection field</p>
 * @method string getStatus() Obtain <p>Log task status</p><p>Enumeration values:</p><ul><li>active: Running</li><li>stopped: Suspended</li></ul>
 * @method void setStatus(string $Status) Set <p>Log task status</p><p>Enumeration values:</p><ul><li>active: Running</li><li>stopped: Suspended</li></ul>
 */
class GlobalAcceleratorAccessLog extends AbstractModel
{
    /**
     * @var string <p>Log Unique Id</p>
     */
    public $LogPushTaskId;

    /**
     * @var string <p>Unique Id of the GA instance.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Unique Id of the listener</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Unique Id of the terminal node group</p>
     */
    public $EndpointGroupId;

    /**
     * @var string <p>Log task description</p>
     */
    public $FlowLogDescription;

    /**
     * @var string <p>Region where the logs are located.</p>
     */
    public $CloudRegion;

    /**
     * @var string <p>Log topic Id</p>
     */
    public $CloudLogId;

    /**
     * @var string <p>Log Set Id</p>
     */
    public $CloudLogSetId;

    /**
     * @var array <p>Select log data collection field</p>
     */
    public $FieldKeys;

    /**
     * @var string <p>Log task status</p><p>Enumeration values:</p><ul><li>active: Running</li><li>stopped: Suspended</li></ul>
     */
    public $Status;

    /**
     * @param string $LogPushTaskId <p>Log Unique Id</p>
     * @param string $GlobalAcceleratorId <p>Unique Id of the GA instance.</p>
     * @param string $ListenerId <p>Unique Id of the listener</p>
     * @param string $EndpointGroupId <p>Unique Id of the terminal node group</p>
     * @param string $FlowLogDescription <p>Log task description</p>
     * @param string $CloudRegion <p>Region where the logs are located.</p>
     * @param string $CloudLogId <p>Log topic Id</p>
     * @param string $CloudLogSetId <p>Log Set Id</p>
     * @param array $FieldKeys <p>Select log data collection field</p>
     * @param string $Status <p>Log task status</p><p>Enumeration values:</p><ul><li>active: Running</li><li>stopped: Suspended</li></ul>
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
        if (array_key_exists("LogPushTaskId",$param) and $param["LogPushTaskId"] !== null) {
            $this->LogPushTaskId = $param["LogPushTaskId"];
        }

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("EndpointGroupId",$param) and $param["EndpointGroupId"] !== null) {
            $this->EndpointGroupId = $param["EndpointGroupId"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CloudRegion",$param) and $param["CloudRegion"] !== null) {
            $this->CloudRegion = $param["CloudRegion"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogSetId",$param) and $param["CloudLogSetId"] !== null) {
            $this->CloudLogSetId = $param["CloudLogSetId"];
        }

        if (array_key_exists("FieldKeys",$param) and $param["FieldKeys"] !== null) {
            $this->FieldKeys = $param["FieldKeys"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
