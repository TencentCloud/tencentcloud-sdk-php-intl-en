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
 * ModifyMetricSubscribe request structure.
 *
 * @method string getTopicId() Obtain Log topic ID of a metric collection task. This parameter is required.
 * @method void setTopicId(string $TopicId) Set Log topic ID of a metric collection task. This parameter is required.
 * @method string getTaskId() Obtain Metric collection task ID. This parameter is required.
 * @method void setTaskId(string $TaskId) Set Metric collection task ID. This parameter is required.
 * @method string getName() Obtain Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
 * @method void setName(string $Name) Set Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
 * @method string getNamespace() Obtain Cloud product namespace.
 * @method void setNamespace(string $Namespace) Set Cloud product namespace.
 * @method array getMetrics() Obtain Metric configuration information.
 * @method void setMetrics(array $Metrics) Set Metric configuration information.
 * @method InstanceConfig getInstanceInfo() Obtain Instance configuration information.
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) Set Instance configuration information.
 * @method integer getEnable() Obtain Task status.

1: disabled

2: Enable
 * @method void setEnable(integer $Enable) Set Task status.

1: disabled

2: Enable
 */
class ModifyMetricSubscribeRequest extends AbstractModel
{
    /**
     * @var string Log topic ID of a metric collection task. This parameter is required.
     */
    public $TopicId;

    /**
     * @var string Metric collection task ID. This parameter is required.
     */
    public $TaskId;

    /**
     * @var string Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
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
     * @var integer Task status.

1: disabled

2: Enable
     */
    public $Enable;

    /**
     * @param string $TopicId Log topic ID of a metric collection task. This parameter is required.
     * @param string $TaskId Metric collection task ID. This parameter is required.
     * @param string $Name Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
     * @param string $Namespace Cloud product namespace.
     * @param array $Metrics Metric configuration information.
     * @param InstanceConfig $InstanceInfo Instance configuration information.
     * @param integer $Enable Task status.

1: disabled

2: Enable
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
    }
}
