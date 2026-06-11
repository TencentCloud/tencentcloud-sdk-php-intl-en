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
 * CreateMetricSubscribe request structure.
 *
 * @method string getName() Obtain Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
 * @method void setName(string $Name) Set Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getNamespace() Obtain Cloud product namespace.
 * @method void setNamespace(string $Namespace) Set Cloud product namespace.
 * @method array getMetrics() Obtain Database configuration information.
 * @method void setMetrics(array $Metrics) Set Database configuration information.
 * @method InstanceConfig getInstanceInfo() Obtain Instance configuration.
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) Set Instance configuration.
 */
class CreateMetricSubscribeRequest extends AbstractModel
{
    /**
     * @var string Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
     */
    public $Name;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Cloud product namespace.
     */
    public $Namespace;

    /**
     * @var array Database configuration information.
     */
    public $Metrics;

    /**
     * @var InstanceConfig Instance configuration.
     */
    public $InstanceInfo;

    /**
     * @param string $Name Name. It can contain a maximum of 64 characters and should start with a letter. Digits (0-9), uppercase letters (A-Z), lowercase letters (a-z), underscores (_), and Chinese characters are allowed.
     * @param string $TopicId Log topic ID.
     * @param string $Namespace Cloud product namespace.
     * @param array $Metrics Database configuration information.
     * @param InstanceConfig $InstanceInfo Instance configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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
    }
}
