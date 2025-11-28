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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLoadBalancerClsLog request structure.
 *
 * @method string getLoadBalancerId() Obtain ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
 * @method string getLogSetId() Obtain Log set ID of cloud log service (CLS).
<li>Specifies the logset ID that can be obtained by calling the [DescribeLogsets](https://www.tencentcloud.comom/document/product/614/58624?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
 * @method void setLogSetId(string $LogSetId) Set Log set ID of cloud log service (CLS).
<li>Specifies the logset ID that can be obtained by calling the [DescribeLogsets](https://www.tencentcloud.comom/document/product/614/58624?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
 * @method string getLogTopicId() Obtain Specifies the log topic ID of cloud log service (CLS).
<li>Specifies the log topic ID can be obtained by calling the [DescribeTopics](https://www.tencentcloud.comom/document/product/614/56454?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
 * @method void setLogTopicId(string $LogTopicId) Set Specifies the log topic ID of cloud log service (CLS).
<li>Specifies the log topic ID can be obtained by calling the [DescribeTopics](https://www.tencentcloud.comom/document/product/614/56454?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
 * @method string getLogType() Obtain Log type:
<li>`ACCESS`: access logs</li>
<li>`HEALTH`: health check logs</li>
Default: `ACCESS`
 * @method void setLogType(string $LogType) Set Log type:
<li>`ACCESS`: access logs</li>
<li>`HEALTH`: health check logs</li>
Default: `ACCESS`
 */
class SetLoadBalancerClsLogRequest extends AbstractModel
{
    /**
     * @var string ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
     */
    public $LoadBalancerId;

    /**
     * @var string Log set ID of cloud log service (CLS).
<li>Specifies the logset ID that can be obtained by calling the [DescribeLogsets](https://www.tencentcloud.comom/document/product/614/58624?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
     */
    public $LogSetId;

    /**
     * @var string Specifies the log topic ID of cloud log service (CLS).
<li>Specifies the log topic ID can be obtained by calling the [DescribeTopics](https://www.tencentcloud.comom/document/product/614/56454?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
     */
    public $LogTopicId;

    /**
     * @var string Log type:
<li>`ACCESS`: access logs</li>
<li>`HEALTH`: health check logs</li>
Default: `ACCESS`
     */
    public $LogType;

    /**
     * @param string $LoadBalancerId ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
     * @param string $LogSetId Log set ID of cloud log service (CLS).
<li>Specifies the logset ID that can be obtained by calling the [DescribeLogsets](https://www.tencentcloud.comom/document/product/614/58624?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
     * @param string $LogTopicId Specifies the log topic ID of cloud log service (CLS).
<li>Specifies the log topic ID can be obtained by calling the [DescribeTopics](https://www.tencentcloud.comom/document/product/614/56454?from_cn_redirect=1) API when adding or updating a log topic.</li>.
<Li>When deleting a log topic, set this parameter to an empty string.</li>.
     * @param string $LogType Log type:
<li>`ACCESS`: access logs</li>
<li>`HEALTH`: health check logs</li>
Default: `ACCESS`
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
