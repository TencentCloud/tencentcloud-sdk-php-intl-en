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
 * QueryMetric request structure.
 *
 * @method string getQuery() Obtain Queries statements; using PromQL syntax	
-Refer to the [Syntax Rules](https://www.tencentcloud.com/document/product/614/90334?from_cn_redirect=1) document
 * @method void setQuery(string $Query) Set Queries statements; using PromQL syntax	
-Refer to the [Syntax Rules](https://www.tencentcloud.com/document/product/614/90334?from_cn_redirect=1) document
 * @method string getTopicId() Obtain Metric Topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Metric Topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method integer getTime() Obtain Query time, Unix timestamp in seconds. When empty, it represents the current timestamp.

 * @method void setTime(integer $Time) Set Query time, Unix timestamp in seconds. When empty, it represents the current timestamp.
 */
class QueryMetricRequest extends AbstractModel
{
    /**
     * @var string Queries statements; using PromQL syntax	
-Refer to the [Syntax Rules](https://www.tencentcloud.com/document/product/614/90334?from_cn_redirect=1) document
     */
    public $Query;

    /**
     * @var string Metric Topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var integer Query time, Unix timestamp in seconds. When empty, it represents the current timestamp.

     */
    public $Time;

    /**
     * @param string $Query Queries statements; using PromQL syntax	
-Refer to the [Syntax Rules](https://www.tencentcloud.com/document/product/614/90334?from_cn_redirect=1) document
     * @param string $TopicId Metric Topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param integer $Time Query time, Unix timestamp in seconds. When empty, it represents the current timestamp.
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
