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
 * DescribeLogHistogram request structure.
 *
 * @method integer getFrom() Obtain Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method string getQuery() Obtain Retrieval analysis statement.
The statement consists of [retrieval condition] | [SQL statement]. When there is no need to perform statistical analysis on logs, the pipe character | and SQL statement can be omitted.
Use * or an empty string to search all logs.
 * @method void setQuery(string $Query) Set Retrieval analysis statement.
The statement consists of [retrieval condition] | [SQL statement]. When there is no need to perform statistical analysis on logs, the pipe character | and SQL statement can be omitted.
Use * or an empty string to search all logs.
 * @method string getTopicId() Obtain Log topic ID to query
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic ID to query
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method integer getInterval() Obtain Interval in milliseconds. Condition: (To-From) / Interval <= 200
 * @method void setInterval(integer $Interval) Set Interval in milliseconds. Condition: (To-From) / Interval <= 200
 * @method integer getSyntaxRule() Obtain Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
 */
class DescribeLogHistogramRequest extends AbstractModel
{
    /**
     * @var integer Start time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Retrieval analysis statement.
The statement consists of [retrieval condition] | [SQL statement]. When there is no need to perform statistical analysis on logs, the pipe character | and SQL statement can be omitted.
Use * or an empty string to search all logs.
     */
    public $Query;

    /**
     * @var string Log topic ID to query
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var integer Interval in milliseconds. Condition: (To-From) / Interval <= 200
     */
    public $Interval;

    /**
     * @var integer Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
     */
    public $SyntaxRule;

    /**
     * @param integer $From Start time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param integer $To End time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param string $Query Retrieval analysis statement.
The statement consists of [retrieval condition] | [SQL statement]. When there is no need to perform statistical analysis on logs, the pipe character | and SQL statement can be omitted.
Use * or an empty string to search all logs.
     * @param string $TopicId Log topic ID to query
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param integer $Interval Interval in milliseconds. Condition: (To-From) / Interval <= 200
     * @param integer $SyntaxRule Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
