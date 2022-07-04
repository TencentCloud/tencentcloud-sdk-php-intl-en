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
 * @method string getVpcId() Obtain ID of the VPC instance.
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance.
 * @method string getFlowLogId() Obtain The unique ID of the flow log.
 * @method void setFlowLogId(string $FlowLogId) Set The unique ID of the flow log.
 * @method string getFlowLogName() Obtain The name of the flow log instance.
 * @method void setFlowLogName(string $FlowLogName) Set The name of the flow log instance.
 * @method string getResourceType() Obtain The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
 * @method void setResourceType(string $ResourceType) Set The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
 * @method string getResourceId() Obtain The unique ID of the resource
 * @method void setResourceId(string $ResourceId) Set The unique ID of the resource
 * @method string getTrafficType() Obtain Type of flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
 * @method void setTrafficType(string $TrafficType) Set Type of flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
 * @method string getCloudLogId() Obtain The storage ID of the flow log
 * @method void setCloudLogId(string $CloudLogId) Set The storage ID of the flow log
 * @method string getCloudLogState() Obtain Flow log storage ID status.
 * @method void setCloudLogState(string $CloudLogState) Set Flow log storage ID status.
 * @method string getFlowLogDescription() Obtain The flow log description.
 * @method void setFlowLogDescription(string $FlowLogDescription) Set The flow log description.
 * @method string getCreatedTime() Obtain The creation time of the flow log.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the flow log.
 * @method array getTagSet() Obtain Tag list, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTagSet(array $TagSet) Set Tag list, such as [{"Key": "city", "Value": "shanghai"}].
 * @method boolean getEnable() Obtain Whether to enable. `true`: yes; `false`: no.
 * @method void setEnable(boolean $Enable) Set Whether to enable. `true`: yes; `false`: no.
 * @method string getStorageType() Obtain Consumer end types: cls and ckafka
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setStorageType(string $StorageType) Set Consumer end types: cls and ckafka
Note: this field may return `null`, indicating that no valid value can be found.
 * @method FlowLogStorage getFlowLogStorage() Obtain Information of the consumer, which is returned when the consumer type is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setFlowLogStorage(FlowLogStorage $FlowLogStorage) Set Information of the consumer, which is returned when the consumer type is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getCloudLogRegion() Obtain The region corresponding to the flow log storage ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCloudLogRegion(string $CloudLogRegion) Set The region corresponding to the flow log storage ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class FlowLog extends AbstractModel
{
    /**
     * @var string ID of the VPC instance.
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
     * @var string The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
     */
    public $ResourceType;

    /**
     * @var string The unique ID of the resource
     */
    public $ResourceId;

    /**
     * @var string Type of flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
     */
    public $TrafficType;

    /**
     * @var string The storage ID of the flow log
     */
    public $CloudLogId;

    /**
     * @var string Flow log storage ID status.
     */
    public $CloudLogState;

    /**
     * @var string The flow log description.
     */
    public $FlowLogDescription;

    /**
     * @var string The creation time of the flow log.
     */
    public $CreatedTime;

    /**
     * @var array Tag list, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $TagSet;

    /**
     * @var boolean Whether to enable. `true`: yes; `false`: no.
     */
    public $Enable;

    /**
     * @var string Consumer end types: cls and ckafka
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $StorageType;

    /**
     * @var FlowLogStorage Information of the consumer, which is returned when the consumer type is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $FlowLogStorage;

    /**
     * @var string The region corresponding to the flow log storage ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CloudLogRegion;

    /**
     * @param string $VpcId ID of the VPC instance.
     * @param string $FlowLogId The unique ID of the flow log.
     * @param string $FlowLogName The name of the flow log instance.
     * @param string $ResourceType The type of resource associated with the flow log. Valid values: `VPC`, `SUBNET`, `NETWORKINTERFACE`, `CCN`, `NAT`, and `DCG`.
     * @param string $ResourceId The unique ID of the resource
     * @param string $TrafficType Type of flow logs to be collected. Valid values: `ACCEPT`, `REJECT` and `ALL`.
     * @param string $CloudLogId The storage ID of the flow log
     * @param string $CloudLogState Flow log storage ID status.
     * @param string $FlowLogDescription The flow log description.
     * @param string $CreatedTime The creation time of the flow log.
     * @param array $TagSet Tag list, such as [{"Key": "city", "Value": "shanghai"}].
     * @param boolean $Enable Whether to enable. `true`: yes; `false`: no.
     * @param string $StorageType Consumer end types: cls and ckafka
Note: this field may return `null`, indicating that no valid value can be found.
     * @param FlowLogStorage $FlowLogStorage Information of the consumer, which is returned when the consumer type is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $CloudLogRegion The region corresponding to the flow log storage ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
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
