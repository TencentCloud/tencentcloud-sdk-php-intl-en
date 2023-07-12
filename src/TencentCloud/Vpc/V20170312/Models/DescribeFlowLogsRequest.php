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
 * @method string getVpcId() Obtain ID of the VPC instance
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance
 * @method string getFlowLogId() Obtain The unique ID of the flow log.
 * @method void setFlowLogId(string $FlowLogId) Set The unique ID of the flow log.
 * @method string getFlowLogName() Obtain The name of the flow log instance.
 * @method void setFlowLogName(string $FlowLogName) Set The name of the flow log instance.
 * @method string getResourceType() Obtain The resource type of the flow log. Valid values: 'VPC', 'SUBNET', and 'NETWORKINTERFACE'.
 * @method void setResourceType(string $ResourceType) Set The resource type of the flow log. Valid values: 'VPC', 'SUBNET', and 'NETWORKINTERFACE'.
 * @method string getResourceId() Obtain The unique ID of the resource.
 * @method void setResourceId(string $ResourceId) Set The unique ID of the resource.
 * @method string getTrafficType() Obtain Type of flow logs to be collected. Valid values: 'ACCEPT', 'REJECT' and 'ALL'.
 * @method void setTrafficType(string $TrafficType) Set Type of flow logs to be collected. Valid values: 'ACCEPT', 'REJECT' and 'ALL'.
 * @method string getCloudLogId() Obtain The storage ID of the flow log.
 * @method void setCloudLogId(string $CloudLogId) Set The storage ID of the flow log.
 * @method string getCloudLogState() Obtain The storage ID status of the flow log.
 * @method void setCloudLogState(string $CloudLogState) Set The storage ID status of the flow log.
 * @method string getOrderField() Obtain Order by field. Valid values: 'flowLogName' and 'createTime'. Default value: 'createTime'.
 * @method void setOrderField(string $OrderField) Set Order by field. Valid values: 'flowLogName' and 'createTime'. Default value: 'createTime'.
 * @method string getOrderDirection() Obtain In ascending (`asc`) or descending (`desc`) order. Default value: 'desc'.
 * @method void setOrderDirection(string $OrderDirection) Set In ascending (`asc`) or descending (`desc`) order. Default value: 'desc'.
 * @method integer getOffset() Obtain The offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset. Default value: 0.
 * @method integer getLimit() Obtain The number of rows per page. Default value: 10.
 * @method void setLimit(integer $Limit) Set The number of rows per page. Default value: 10.
 * @method Filter getFilters() Obtain Filter condition. `FlowLogId` and `Filters` cannot be specified at the same time.
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced with a specified tag key.</li>
 * @method void setFilters(Filter $Filters) Set Filter condition. `FlowLogId` and `Filters` cannot be specified at the same time.
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced with a specified tag key.</li>
 * @method string getCloudLogRegion() Obtain The region corresponding to the flow log storage ID.
 * @method void setCloudLogRegion(string $CloudLogRegion) Set The region corresponding to the flow log storage ID.
 */
class DescribeFlowLogsRequest extends AbstractModel
{
    /**
     * @var string ID of the VPC instance
     */
    public $VpcId;

    /**
     * @var string The unique ID of the flow log.
     */
    public $FlowLogId;

    /**
     * @var string The name of the flow log instance.
     */
    public $FlowLogName;

    /**
     * @var string The resource type of the flow log. Valid values: 'VPC', 'SUBNET', and 'NETWORKINTERFACE'.
     */
    public $ResourceType;

    /**
     * @var string The unique ID of the resource.
     */
    public $ResourceId;

    /**
     * @var string Type of flow logs to be collected. Valid values: 'ACCEPT', 'REJECT' and 'ALL'.
     */
    public $TrafficType;

    /**
     * @var string The storage ID of the flow log.
     */
    public $CloudLogId;

    /**
     * @var string The storage ID status of the flow log.
     */
    public $CloudLogState;

    /**
     * @var string Order by field. Valid values: 'flowLogName' and 'createTime'. Default value: 'createTime'.
     */
    public $OrderField;

    /**
     * @var string In ascending (`asc`) or descending (`desc`) order. Default value: 'desc'.
     */
    public $OrderDirection;

    /**
     * @var integer The offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The number of rows per page. Default value: 10.
     */
    public $Limit;

    /**
     * @var Filter Filter condition. `FlowLogId` and `Filters` cannot be specified at the same time.
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced with a specified tag key.</li>
     */
    public $Filters;

    /**
     * @var string The region corresponding to the flow log storage ID.
     */
    public $CloudLogRegion;

    /**
     * @param string $VpcId ID of the VPC instance
     * @param string $FlowLogId The unique ID of the flow log.
     * @param string $FlowLogName The name of the flow log instance.
     * @param string $ResourceType The resource type of the flow log. Valid values: 'VPC', 'SUBNET', and 'NETWORKINTERFACE'.
     * @param string $ResourceId The unique ID of the resource.
     * @param string $TrafficType Type of flow logs to be collected. Valid values: 'ACCEPT', 'REJECT' and 'ALL'.
     * @param string $CloudLogId The storage ID of the flow log.
     * @param string $CloudLogState The storage ID status of the flow log.
     * @param string $OrderField Order by field. Valid values: 'flowLogName' and 'createTime'. Default value: 'createTime'.
     * @param string $OrderDirection In ascending (`asc`) or descending (`desc`) order. Default value: 'desc'.
     * @param integer $Offset The offset. Default value: 0.
     * @param integer $Limit The number of rows per page. Default value: 10.
     * @param Filter $Filters Filter condition. `FlowLogId` and `Filters` cannot be specified at the same time.
<li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced with a specified tag key.</li>
     * @param string $CloudLogRegion The region corresponding to the flow log storage ID.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("CloudLogRegion",$param) and $param["CloudLogRegion"] !== null) {
            $this->CloudLogRegion = $param["CloudLogRegion"];
        }
    }
}
