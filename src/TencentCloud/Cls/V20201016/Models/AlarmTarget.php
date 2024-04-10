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
 * @method string getTopicId() Obtain Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuery() Obtain Query statementNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuery(string $Query) Set Query statementNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNumber() Obtain Serial number of alarm object, which is incremental from 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumber(integer $Number) Set Serial number of alarm object, which is incremental from 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTimeOffset() Obtain Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimeOffset(integer $StartTimeOffset) Set Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTimeOffset() Obtain Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTimeOffset(integer $EndTimeOffset) Set Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogsetId() Obtain Logset IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogsetId(string $LogsetId) Set Logset IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSyntaxRule() Obtain Search syntax rules; default value: 0.0: Lucene syntax; 1: CQL syntax.For detailed instructions, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Condition Syntax Rules</a>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Search syntax rules; default value: 0.0: Lucene syntax; 1: CQL syntax.For detailed instructions, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Condition Syntax Rules</a>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmTarget extends AbstractModel
{
    /**
     * @var string Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Query statementNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Query;

    /**
     * @var integer Serial number of alarm object, which is incremental from 1.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Number;

    /**
     * @var integer Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimeOffset;

    /**
     * @var integer Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTimeOffset;

    /**
     * @var string Logset IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogsetId;

    /**
     * @var integer Search syntax rules; default value: 0.0: Lucene syntax; 1: CQL syntax.For detailed instructions, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Condition Syntax Rules</a>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId Log topic IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Query Query statementNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Number Serial number of alarm object, which is incremental from 1.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTimeOffset Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTimeOffset Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than StartTimeOffset. Maximum value: 0. Minimum value: -1440.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogsetId Logset IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SyntaxRule Search syntax rules; default value: 0.0: Lucene syntax; 1: CQL syntax.For detailed instructions, see <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Search Condition Syntax Rules</a>
Note: This field may return null, indicating that no valid values can be obtained.
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
