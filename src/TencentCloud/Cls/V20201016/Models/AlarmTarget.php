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
 * Monitoring object
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getQuery() Obtain Query statement
 * @method void setQuery(string $Query) Set Query statement
 * @method integer getNumber() Obtain Monitoring object number, which is incremental from 1.
 * @method void setNumber(integer $Number) Set Monitoring object number, which is incremental from 1.
 * @method integer getStartTimeOffset() Obtain Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
 * @method void setStartTimeOffset(integer $StartTimeOffset) Set Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
 * @method integer getEndTimeOffset() Obtain Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
 * @method void setEndTimeOffset(integer $EndTimeOffset) Set Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method integer getSyntaxRule() Obtain Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
 */
class AlarmTarget extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Query statement
     */
    public $Query;

    /**
     * @var integer Monitoring object number, which is incremental from 1.
     */
    public $Number;

    /**
     * @var integer Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
     */
    public $StartTimeOffset;

    /**
     * @var integer Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
     */
    public $EndTimeOffset;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var integer Search syntax. Valid values:
`0` (default): Lucene; `1`: CQL
For more information, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Syntax</a>.
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId Log topic ID
     * @param string $Query Query statement
     * @param integer $Number Monitoring object number, which is incremental from 1.
     * @param integer $StartTimeOffset Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
     * @param integer $EndTimeOffset Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
     * @param string $LogsetId Logset ID
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
