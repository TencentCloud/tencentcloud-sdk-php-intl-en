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
 * Monitoring object
 *
 * @method string getTopicId() Obtain Log topic ID. Obtain the log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic ID. Obtain the log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getQuery() Obtain Query statement.
 * @method void setQuery(string $Query) Set Query statement.
 * @method integer getNumber() Obtain Alarm object SN. It starts from 1 and increments.
 * @method void setNumber(integer $Number) Set Alarm object SN. It starts from 1 and increments.
 * @method integer getStartTimeOffset() Obtain Offset of the start time of the query time range from alarm execution time, in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1,440.
 * @method void setStartTimeOffset(integer $StartTimeOffset) Set Offset of the start time of the query time range from alarm execution time, in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1,440.
 * @method integer getEndTimeOffset() Obtain Offset of the end time of the query time range from alarm execution time, in minutes. The value cannot be positive and should be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.
 * @method void setEndTimeOffset(integer $EndTimeOffset) Set Offset of the end time of the query time range from alarm execution time, in minutes. The value cannot be positive and should be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.
 * @method string getLogsetId() Obtain Logset ID. Obtain the logset ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setLogsetId(string $LogsetId) Set Logset ID. Obtain the logset ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method integer getSyntaxRule() Obtain Search syntax rules. Default value is 0.
0: Lucene syntax; 1: CQL syntax.
For detailed explanation, refer to <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
 * @method void setSyntaxRule(integer $SyntaxRule) Set Search syntax rules. Default value is 0.
0: Lucene syntax; 1: CQL syntax.
For detailed explanation, refer to <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
 */
class AlarmTarget extends AbstractModel
{
    /**
     * @var string Log topic ID. Obtain the log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Query statement.
     */
    public $Query;

    /**
     * @var integer Alarm object SN. It starts from 1 and increments.
     */
    public $Number;

    /**
     * @var integer Offset of the start time of the query time range from alarm execution time, in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1,440.
     */
    public $StartTimeOffset;

    /**
     * @var integer Offset of the end time of the query time range from alarm execution time, in minutes. The value cannot be positive and should be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.
     */
    public $EndTimeOffset;

    /**
     * @var string Logset ID. Obtain the logset ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $LogsetId;

    /**
     * @var integer Search syntax rules. Default value is 0.
0: Lucene syntax; 1: CQL syntax.
For detailed explanation, refer to <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId Log topic ID. Obtain the log topic ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $Query Query statement.
     * @param integer $Number Alarm object SN. It starts from 1 and increments.
     * @param integer $StartTimeOffset Offset of the start time of the query time range from alarm execution time, in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1,440.
     * @param integer $EndTimeOffset Offset of the end time of the query time range from alarm execution time, in minutes. The value cannot be positive and should be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.
     * @param string $LogsetId Logset ID. Obtain the logset ID through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param integer $SyntaxRule Search syntax rules. Default value is 0.
0: Lucene syntax; 1: CQL syntax.
For detailed explanation, refer to <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
