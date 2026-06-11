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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric subscription configuration information.
 *
 * @method string getTaskId() Obtain Subscription task ID.
 * @method void setTaskId(string $TaskId) Set Subscription task ID.
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getName() Obtain Subscription task name.
 * @method void setName(string $Name) Set Subscription task name.
 * @method string getNamespace() Obtain Cloud product namespace.
 * @method void setNamespace(string $Namespace) Set Cloud product namespace.
 * @method array getMetrics() Obtain Metric configuration information.
 * @method void setMetrics(array $Metrics) Set Metric configuration information.
 * @method InstanceConfig getInstanceInfo() Obtain Instance configuration information.
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) Set Instance configuration information.
 * @method integer getEnable() Obtain Subscription task switch. Valid values: 1: paused; 2: enabled.
 * @method void setEnable(integer $Enable) Set Subscription task switch. Valid values: 1: paused; 2: enabled.
 * @method integer getStatus() Obtain Subscription task running status. Valid values: 0 creating; 1: paused; 2: running; 3: abnormal.
 * @method void setStatus(integer $Status) Set Subscription task running status. Valid values: 0 creating; 1: paused; 2: running; 3: abnormal.
 * @method string getErrMsg() Obtain Error information occurred when a subscription task runs abnormally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrMsg(string $ErrMsg) Set Error information occurred when a subscription task runs abnormally.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time (timestamp in seconds)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time (timestamp in seconds)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Update time (second-level timestamp)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time (second-level timestamp)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricSubscribeInfo extends AbstractModel
{
    /**
     * @var string Subscription task ID.
     */
    public $TaskId;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Subscription task name.
     */
    public $Name;

    /**
     * @var string Cloud product namespace.
     */
    public $Namespace;

    /**
     * @var array Metric configuration information.
     */
    public $Metrics;

    /**
     * @var InstanceConfig Instance configuration information.
     */
    public $InstanceInfo;

    /**
     * @var integer Subscription task switch. Valid values: 1: paused; 2: enabled.
     */
    public $Enable;

    /**
     * @var integer Subscription task running status. Valid values: 0 creating; 1: paused; 2: running; 3: abnormal.
     */
    public $Status;

    /**
     * @var string Error information occurred when a subscription task runs abnormally.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrMsg;

    /**
     * @var integer Creation time (timestamp in seconds)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Update time (second-level timestamp)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId Subscription task ID.
     * @param string $TopicId Log topic ID.
     * @param string $Name Subscription task name.
     * @param string $Namespace Cloud product namespace.
     * @param array $Metrics Metric configuration information.
     * @param InstanceConfig $InstanceInfo Instance configuration information.
     * @param integer $Enable Subscription task switch. Valid values: 1: paused; 2: enabled.
     * @param integer $Status Subscription task running status. Valid values: 0 creating; 1: paused; 2: running; 3: abnormal.
     * @param string $ErrMsg Error information occurred when a subscription task runs abnormally.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time (timestamp in seconds)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Update time (second-level timestamp)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricConfig();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceConfig();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
