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
 * CreateFlowLog request structure.
 *
 * @method string getFlowLogName() Obtain The name of the flow log instance.
 * @method void setFlowLogName(string $FlowLogName) Set The name of the flow log instance.
 * @method string getResourceType() Obtain The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
 * @method void setResourceType(string $ResourceType) Set The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
 * @method string getResourceId() Obtain The unique ID of the resource.
 * @method void setResourceId(string $ResourceId) Set The unique ID of the resource.
 * @method string getTrafficType() Obtain Type of the flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
 * @method void setTrafficType(string $TrafficType) Set Type of the flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
 * @method string getVpcId() Obtain The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless the `ResourceType` is set to `CCN`.
 * @method void setVpcId(string $VpcId) Set The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless the `ResourceType` is set to `CCN`.
 * @method string getFlowLogDescription() Obtain The description of the flow log.
 * @method void setFlowLogDescription(string $FlowLogDescription) Set The description of the flow log.
 * @method string getCloudLogId() Obtain The storage ID of the flow log.
 * @method void setCloudLogId(string $CloudLogId) Set The storage ID of the flow log.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method string getStorageType() Obtain Consumer types: `cls` and `ckafka`
 * @method void setStorageType(string $StorageType) Set Consumer types: `cls` and `ckafka`
 * @method FlowLogStorage getFlowLogStorage() Obtain Information of the flow log consumer, which is required when the consumer type is `ckafka`.
 * @method void setFlowLogStorage(FlowLogStorage $FlowLogStorage) Set Information of the flow log consumer, which is required when the consumer type is `ckafka`.
 * @method string getCloudLogRegion() Obtain The region corresponding to the flow log storage ID. If not passed in, this field defaults to the current region.
 * @method void setCloudLogRegion(string $CloudLogRegion) Set The region corresponding to the flow log storage ID. If not passed in, this field defaults to the current region.
 */
class CreateFlowLogRequest extends AbstractModel
{
    /**
     * @var string The name of the flow log instance.
     */
    public $FlowLogName;

    /**
     * @var string The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
     */
    public $ResourceType;

    /**
     * @var string The unique ID of the resource.
     */
    public $ResourceId;

    /**
     * @var string Type of the flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
     */
    public $TrafficType;

    /**
     * @var string The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless the `ResourceType` is set to `CCN`.
     */
    public $VpcId;

    /**
     * @var string The description of the flow log.
     */
    public $FlowLogDescription;

    /**
     * @var string The storage ID of the flow log.
     */
    public $CloudLogId;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var string Consumer types: `cls` and `ckafka`
     */
    public $StorageType;

    /**
     * @var FlowLogStorage Information of the flow log consumer, which is required when the consumer type is `ckafka`.
     */
    public $FlowLogStorage;

    /**
     * @var string The region corresponding to the flow log storage ID. If not passed in, this field defaults to the current region.
     */
    public $CloudLogRegion;

    /**
     * @param string $FlowLogName The name of the flow log instance.
     * @param string $ResourceType The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
     * @param string $ResourceId The unique ID of the resource.
     * @param string $TrafficType Type of the flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
     * @param string $VpcId The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless the `ResourceType` is set to `CCN`.
     * @param string $FlowLogDescription The description of the flow log.
     * @param string $CloudLogId The storage ID of the flow log.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     * @param string $StorageType Consumer types: `cls` and `ckafka`
     * @param FlowLogStorage $FlowLogStorage Information of the flow log consumer, which is required when the consumer type is `ckafka`.
     * @param string $CloudLogRegion The region corresponding to the flow log storage ID. If not passed in, this field defaults to the current region.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("FlowLogStorage",$param) and $param["FlowLogStorage"] !== null) {
            $this->FlowLogStorage = new FlowLogStorage();
            $this->FlowLogStorage->deserialize($param["FlowLogStorage"]);
        }

        if (array_key_exists("CloudLogRegion",$param) and $param["CloudLogRegion"] !== null) {
            $this->CloudLogRegion = $param["CloudLogRegion"];
        }
    }
}
