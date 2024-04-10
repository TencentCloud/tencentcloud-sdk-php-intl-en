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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryMetric request structure.
 *
 * @method string getQuery() Obtain Query statement, using PromQL syntax	
 * @method void setQuery(string $Query) Set Query statement, using PromQL syntax	
 * @method string getTopicId() Obtain Metric Topic ID
 * @method void setTopicId(string $TopicId) Set Metric Topic ID
 * @method integer getTime() Obtain Query time, Unix Timestamp in seconds	
 * @method void setTime(integer $Time) Set Query time, Unix Timestamp in seconds	
 */
class QueryMetricRequest extends AbstractModel
{
    /**
     * @var string Query statement, using PromQL syntax	
     */
    public $Query;

    /**
     * @var string Metric Topic ID
     */
    public $TopicId;

    /**
     * @var integer Query time, Unix Timestamp in seconds	
     */
    public $Time;

    /**
     * @param string $Query Query statement, using PromQL syntax	
     * @param string $TopicId Metric Topic ID
     * @param integer $Time Query time, Unix Timestamp in seconds	
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
