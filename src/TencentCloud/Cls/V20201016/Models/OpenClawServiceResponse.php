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
 * OpenClawService response structure.
 *
 * @method string getLogsetId() Obtain <p>Logset id</p><p><a href="https://www.tencentcloud.com/document/product/614/41034?from_cn_redirect=1">Logset document</a></p>
 * @method void setLogsetId(string $LogsetId) Set <p>Logset id</p><p><a href="https://www.tencentcloud.com/document/product/614/41034?from_cn_redirect=1">Logset document</a></p>
 * @method string getLogsetName() Obtain <p>Logset name</p>
 * @method void setLogsetName(string $LogsetName) Set <p>Logset name</p>
 * @method string getTopicId() Obtain <p>Log topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">Log topic document</a></p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">Log topic document</a></p>
 * @method string getTopicName() Obtain <p>Log topic name</p>
 * @method void setTopicName(string $TopicName) Set <p>Log topic name</p>
 * @method string getMetricTopicId() Obtain <p>Metric topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/90328?from_cn_redirect=1">Metric topic document</a></p>
 * @method void setMetricTopicId(string $MetricTopicId) Set <p>Metric topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/90328?from_cn_redirect=1">Metric topic document</a></p>
 * @method string getMetricTopicName() Obtain <p>Metric topic name</p>
 * @method void setMetricTopicName(string $MetricTopicName) Set <p>Metric topic name</p>
 * @method string getMachineGroupId() Obtain <p>Bound machine group id</p><p><a href="https://www.tencentcloud.com/document/product/614/17412?from_cn_redirect=1">Machine group document</a></p>
 * @method void setMachineGroupId(string $MachineGroupId) Set <p>Bound machine group id</p><p><a href="https://www.tencentcloud.com/document/product/614/17412?from_cn_redirect=1">Machine group document</a></p>
 * @method string getMachineGroupName() Obtain <p>Machine group name</p>
 * @method void setMachineGroupName(string $MachineGroupName) Set <p>Machine group name</p>
 * @method string getAppLogConfigId() Obtain <p>Collection configuration id. Application log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
 * @method void setAppLogConfigId(string $AppLogConfigId) Set <p>Collection configuration id. Application log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
 * @method string getAppLogConfigName() Obtain <p>Collection configuration name. Application log</p>
 * @method void setAppLogConfigName(string $AppLogConfigName) Set <p>Collection configuration name. Application log</p>
 * @method string getSessionLogConfigId() Obtain <p>Collection configuration id. Session log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
 * @method void setSessionLogConfigId(string $SessionLogConfigId) Set <p>Collection configuration id. Session log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
 * @method string getSessionLogConfigName() Obtain <p>Collection configuration name. Session log</p>
 * @method void setSessionLogConfigName(string $SessionLogConfigName) Set <p>Collection configuration name. Session log</p>
 * @method string getTraceTopicId() Obtain <p>trace topic ID</p>
 * @method void setTraceTopicId(string $TraceTopicId) Set <p>trace topic ID</p>
 * @method string getTraceTopicName() Obtain <p>trace topic name</p>
 * @method void setTraceTopicName(string $TraceTopicName) Set <p>trace topic name</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class OpenClawServiceResponse extends AbstractModel
{
    /**
     * @var string <p>Logset id</p><p><a href="https://www.tencentcloud.com/document/product/614/41034?from_cn_redirect=1">Logset document</a></p>
     */
    public $LogsetId;

    /**
     * @var string <p>Logset name</p>
     */
    public $LogsetName;

    /**
     * @var string <p>Log topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">Log topic document</a></p>
     */
    public $TopicId;

    /**
     * @var string <p>Log topic name</p>
     */
    public $TopicName;

    /**
     * @var string <p>Metric topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/90328?from_cn_redirect=1">Metric topic document</a></p>
     */
    public $MetricTopicId;

    /**
     * @var string <p>Metric topic name</p>
     */
    public $MetricTopicName;

    /**
     * @var string <p>Bound machine group id</p><p><a href="https://www.tencentcloud.com/document/product/614/17412?from_cn_redirect=1">Machine group document</a></p>
     */
    public $MachineGroupId;

    /**
     * @var string <p>Machine group name</p>
     */
    public $MachineGroupName;

    /**
     * @var string <p>Collection configuration id. Application log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
     */
    public $AppLogConfigId;

    /**
     * @var string <p>Collection configuration name. Application log</p>
     */
    public $AppLogConfigName;

    /**
     * @var string <p>Collection configuration id. Session log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
     */
    public $SessionLogConfigId;

    /**
     * @var string <p>Collection configuration name. Session log</p>
     */
    public $SessionLogConfigName;

    /**
     * @var string <p>trace topic ID</p>
     */
    public $TraceTopicId;

    /**
     * @var string <p>trace topic name</p>
     */
    public $TraceTopicName;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $LogsetId <p>Logset id</p><p><a href="https://www.tencentcloud.com/document/product/614/41034?from_cn_redirect=1">Logset document</a></p>
     * @param string $LogsetName <p>Logset name</p>
     * @param string $TopicId <p>Log topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">Log topic document</a></p>
     * @param string $TopicName <p>Log topic name</p>
     * @param string $MetricTopicId <p>Metric topic id</p><p><a href="https://www.tencentcloud.com/document/product/614/90328?from_cn_redirect=1">Metric topic document</a></p>
     * @param string $MetricTopicName <p>Metric topic name</p>
     * @param string $MachineGroupId <p>Bound machine group id</p><p><a href="https://www.tencentcloud.com/document/product/614/17412?from_cn_redirect=1">Machine group document</a></p>
     * @param string $MachineGroupName <p>Machine group name</p>
     * @param string $AppLogConfigId <p>Collection configuration id. Application log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
     * @param string $AppLogConfigName <p>Collection configuration name. Application log</p>
     * @param string $SessionLogConfigId <p>Collection configuration id. Session log</p><p><a href="https://www.tencentcloud.com/document/product/614/33494?from_cn_redirect=1">Collection overview document</a> - <a href="https://www.tencentcloud.com/document/product/614/57497?from_cn_redirect=1">LogListener collection configuration import</a></p>
     * @param string $SessionLogConfigName <p>Collection configuration name. Session log</p>
     * @param string $TraceTopicId <p>trace topic ID</p>
     * @param string $TraceTopicName <p>trace topic name</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MetricTopicId",$param) and $param["MetricTopicId"] !== null) {
            $this->MetricTopicId = $param["MetricTopicId"];
        }

        if (array_key_exists("MetricTopicName",$param) and $param["MetricTopicName"] !== null) {
            $this->MetricTopicName = $param["MetricTopicName"];
        }

        if (array_key_exists("MachineGroupId",$param) and $param["MachineGroupId"] !== null) {
            $this->MachineGroupId = $param["MachineGroupId"];
        }

        if (array_key_exists("MachineGroupName",$param) and $param["MachineGroupName"] !== null) {
            $this->MachineGroupName = $param["MachineGroupName"];
        }

        if (array_key_exists("AppLogConfigId",$param) and $param["AppLogConfigId"] !== null) {
            $this->AppLogConfigId = $param["AppLogConfigId"];
        }

        if (array_key_exists("AppLogConfigName",$param) and $param["AppLogConfigName"] !== null) {
            $this->AppLogConfigName = $param["AppLogConfigName"];
        }

        if (array_key_exists("SessionLogConfigId",$param) and $param["SessionLogConfigId"] !== null) {
            $this->SessionLogConfigId = $param["SessionLogConfigId"];
        }

        if (array_key_exists("SessionLogConfigName",$param) and $param["SessionLogConfigName"] !== null) {
            $this->SessionLogConfigName = $param["SessionLogConfigName"];
        }

        if (array_key_exists("TraceTopicId",$param) and $param["TraceTopicId"] !== null) {
            $this->TraceTopicId = $param["TraceTopicId"];
        }

        if (array_key_exists("TraceTopicName",$param) and $param["TraceTopicName"] !== null) {
            $this->TraceTopicName = $param["TraceTopicName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
