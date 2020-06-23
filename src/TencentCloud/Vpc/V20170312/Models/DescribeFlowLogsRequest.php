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
 * DescribeFlowLogs request structure.
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
 * @method string getOrderField() Obtain Order by field. Supported fields: flowLogName, createTime. The default value is createTime.
 * @method void setOrderField(string $OrderField) Set Order by field. Supported fields: flowLogName, createTime. The default value is createTime.
 * @method string getOrderDirection() Obtain Ascending (asc) and descending (desc). The default value is desc.
 * @method void setOrderDirection(string $OrderDirection) Set Ascending (asc) and descending (desc). The default value is desc.
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain The number of rows per page. The default value is 10.
 * @method void setLimit(integer $Limit) Set The number of rows per page. The default value is 10.
 */
class DescribeFlowLogsRequest extends AbstractModel
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
     * @var string Order by field. Supported fields: flowLogName, createTime. The default value is createTime.
     */
    public $OrderField;

    /**
     * @var string Ascending (asc) and descending (desc). The default value is desc.
     */
    public $OrderDirection;

    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer The number of rows per page. The default value is 10.
     */
    public $Limit;

    /**
     * @param string $VpcId The VPC ID or the unified ID. We recommend you use the unified ID
     * @param string $FlowLogId The unique ID of the flow log
     * @param string $FlowLogName The name of the flow log instance
     * @param string $ResourceType The type of resource to which the flow log belongs. VPC|SUBNET|NETWORKINTERFACE
     * @param string $ResourceId The unique ID of the resource
     * @param string $TrafficType The collection type of the flow log. ACCEPT|REJECT|ALL
     * @param string $CloudLogId The storage ID of the flow log
     * @param string $CloudLogState Flow log storage ID status
     * @param string $OrderField Order by field. Supported fields: flowLogName, createTime. The default value is createTime.
     * @param string $OrderDirection Ascending (asc) and descending (desc). The default value is desc.
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit The number of rows per page. The default value is 10.
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
