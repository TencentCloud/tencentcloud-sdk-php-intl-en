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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLoadBalancerClsLog request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getLogSetId() Obtain CLS logset ID
<li>Enter the ID of logset you need to add or update. You can acquire the ID by invoking [DescribeLogsets](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
 * @method void setLogSetId(string $LogSetId) Set CLS logset ID
<li>Enter the ID of logset you need to add or update. You can acquire the ID by invoking [DescribeLogsets](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
 * @method string getLogTopicId() Obtain CLS log topic ID
<li>Enter the ID of log topic you need to add or update. You can acquire the ID by invoking [DescribeTopics](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
 * @method void setLogTopicId(string $LogTopicId) Set CLS log topic ID
<li>Enter the ID of log topic you need to add or update. You can acquire the ID by invoking [DescribeTopics](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
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
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLS logset ID
<li>Enter the ID of logset you need to add or update. You can acquire the ID by invoking [DescribeLogsets](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
     */
    public $LogSetId;

    /**
     * @var string CLS log topic ID
<li>Enter the ID of log topic you need to add or update. You can acquire the ID by invoking [DescribeTopics](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
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
     * @param string $LoadBalancerId CLB instance ID
     * @param string $LogSetId CLS logset ID
<li>Enter the ID of logset you need to add or update. You can acquire the ID by invoking [DescribeLogsets](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
     * @param string $LogTopicId CLS log topic ID
<li>Enter the ID of log topic you need to add or update. You can acquire the ID by invoking [DescribeTopics](https://intl.cloud.tencent.com/document/product/614/56454?from_cn_redirect=1).</li>
<li>To delete the log set, set this parameter to `null`.</li>
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
