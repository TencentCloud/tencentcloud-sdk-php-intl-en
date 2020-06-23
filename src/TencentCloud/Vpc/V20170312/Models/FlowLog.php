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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Flow Log
 *
 * @method string getVpcId() Obtain The VPC ID or the unified ID. We recommend you use the unified ID
 * @method void setVpcId(string $VpcId) Set The VPC ID or the unified ID. We recommend you use the unified ID
 * @method string getFlowLogId() Obtain The unique ID of the flow log
 * @method void setFlowLogId(string $FlowLogId) Set The unique ID of the flow log
 * @method string getFlowLogName() Obtain The name of the flow log instance
 * @method void setFlowLogName(string $FlowLogName) Set The name of the flow log instance
 * @method string getResourceType() Obtain The type of resource to which the flow log belongs. VPC|SUBNET|NETWORKINTERFACE
 * @method void setResourceType(string $ResourceType) Set The type of resource to which the flow log belongs. VPC|SUBNET|NETWORKINTERFACE
 * @method string getResourceId() Obtain The unique ID of the resource
 * @method void setResourceId(string $ResourceId) Set The unique ID of the resource
 * @method string getTrafficType() Obtain The collection type of the flow log. ACCEPT|REJECT|ALL
 * @method void setTrafficType(string $TrafficType) Set The collection type of the flow log. ACCEPT|REJECT|ALL
 * @method string getCloudLogId() Obtain The storage ID of the flow log
 * @method void setCloudLogId(string $CloudLogId) Set The storage ID of the flow log
 * @method string getCloudLogState() Obtain Flow log storage ID status
 * @method void setCloudLogState(string $CloudLogState) Set Flow log storage ID status
 * @method string getFlowLogDescription() Obtain Flow log description
 * @method void setFlowLogDescription(string $FlowLogDescription) Set Flow log description
 * @method string getCreatedTime() Obtain Flow log creation time
 * @method void setCreatedTime(string $CreatedTime) Set Flow log creation time
 */
class FlowLog extends AbstractModel
{
    /**
     * @var string The VPC ID or the unified ID. We recommend you use the unified ID
     */
    public $VpcId;

    /**
     * @var string The unique ID of the flow log
     */
    public $FlowLogId;

    /**
     * @var string The name of the flow log instance
     */
    public $FlowLogName;

    /**
     * @var string The type of resource to which the flow log belongs. VPC|SUBNET|NETWORKINTERFACE
     */
    public $ResourceType;

    /**
     * @var string The unique ID of the resource
     */
    public $ResourceId;

    /**
     * @var string The collection type of the flow log. ACCEPT|REJECT|ALL
     */
    public $TrafficType;

    /**
     * @var string The storage ID of the flow log
     */
    public $CloudLogId;

    /**
     * @var string Flow log storage ID status
     */
    public $CloudLogState;

    /**
     * @var string Flow log description
     */
    public $FlowLogDescription;

    /**
     * @var string Flow log creation time
     */
    public $CreatedTime;

    /**
     * @param string $VpcId The VPC ID or the unified ID. We recommend you use the unified ID
     * @param string $FlowLogId The unique ID of the flow log
     * @param string $FlowLogName The name of the flow log instance
     * @param string $ResourceType The type of resource to which the flow log belongs. VPC|SUBNET|NETWORKINTERFACE
     * @param string $ResourceId The unique ID of the resource
     * @param string $TrafficType The collection type of the flow log. ACCEPT|REJECT|ALL
     * @param string $CloudLogId The storage ID of the flow log
     * @param string $CloudLogState Flow log storage ID status
     * @param string $FlowLogDescription Flow log description
     * @param string $CreatedTime Flow log creation time
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogState",$param) and $param["CloudLogState"] !== null) {
            $this->CloudLogState = $param["CloudLogState"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
