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
 * QueryRangeMetric request structure.
 *
 * @method string getTopicId() Obtain Metric Topic ID
 * @method void setTopicId(string $TopicId) Set Metric Topic ID
 * @method string getQuery() Obtain Queries statements; using PromQL syntax
 * @method void setQuery(string $Query) Set Queries statements; using PromQL syntax
 * @method integer getStart() Obtain Queries start time; unix timestamp in seconds
 * @method void setStart(integer $Start) Set Queries start time; unix timestamp in seconds
 * @method integer getEnd() Obtain Queries end time; unix timestamp in seconds
 * @method void setEnd(integer $End) Set Queries end time; unix timestamp in seconds
 * @method integer getStep() Obtain Queries time interval, in seconds
 * @method void setStep(integer $Step) Set Queries time interval, in seconds
 */
class QueryRangeMetricRequest extends AbstractModel
{
    /**
     * @var string Metric Topic ID
     */
    public $TopicId;

    /**
     * @var string Queries statements; using PromQL syntax
     */
    public $Query;

    /**
     * @var integer Queries start time; unix timestamp in seconds
     */
    public $Start;

    /**
     * @var integer Queries end time; unix timestamp in seconds
     */
    public $End;

    /**
     * @var integer Queries time interval, in seconds
     */
    public $Step;

    /**
     * @param string $TopicId Metric Topic ID
     * @param string $Query Queries statements; using PromQL syntax
     * @param integer $Start Queries start time; unix timestamp in seconds
     * @param integer $End Queries end time; unix timestamp in seconds
     * @param integer $Step Queries time interval, in seconds
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
