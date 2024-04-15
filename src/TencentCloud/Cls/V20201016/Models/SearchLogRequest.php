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
 * SearchLog request structure.
 *
 * @method integer getFrom() Obtain Start time of the log to be searched, which is a Unix timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be searched, which is a Unix timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be searched, which is a Unix timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be searched, which is a Unix timestamp in milliseconds
 * @method string getQuery() Obtain Search and analysis statement. Maximum length: 12 KB
A statement is in the format of <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[search criteria]</a> | <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. You can omit the pipe symbol <code> | </code> and SQL statement when log analysis is not required.
Queries all logs using * or an empty string
 * @method void setQuery(string $Query) Set Search and analysis statement. Maximum length: 12 KB
A statement is in the format of <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[search criteria]</a> | <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. You can omit the pipe symbol <code> | </code> and SQL statement when log analysis is not required.
Queries all logs using * or an empty string
 * @method integer getSyntaxRule() Obtain Retrieval syntax rule, default is 0, recommended to use 1 (CQL syntax).0: Lucene syntax, 1: CQL syntax.
For detailed explanation, refer to <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
 * @method void setSyntaxRule(integer $SyntaxRule) Set Retrieval syntax rule, default is 0, recommended to use 1 (CQL syntax).0: Lucene syntax, 1: CQL syntax.
For detailed explanation, refer to <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
 * @method string getTopicId() Obtain - The ID of the log topic to be searched for. Only one log topic can be specified.
- To search for multiple log topics at a time, use the `Topics` parameter.
 * @method void setTopicId(string $TopicId) Set - The ID of the log topic to be searched for. Only one log topic can be specified.
- To search for multiple log topics at a time, use the `Topics` parameter.
 * @method array getTopics() Obtain - The IDs of the log topics (up to 20) to be searched for.
- To search for a single log topic, use the `TopicId` parameter.
- You cannot use both `TopicId` and `Topics`.
 * @method void setTopics(array $Topics) Set - The IDs of the log topics (up to 20) to be searched for.
- To search for a single log topic, use the `TopicId` parameter.
- You cannot use both `TopicId` and `Topics`.
 * @method integer getLimit() Obtain Specifies the number of raw logs returned in a single query, default is 100, maximum is 1000. To obtain subsequent logs, use the Context parameter.Note:* This is only valid when the search and analysis statement (Query) does not contain SQL* Method for specifying SQL result count refers to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method void setLimit(integer $Limit) Set Specifies the number of raw logs returned in a single query, default is 100, maximum is 1000. To obtain subsequent logs, use the Context parameter.Note:* This is only valid when the search and analysis statement (Query) does not contain SQL* Method for specifying SQL result count refers to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method string getSort() Obtain Time order of the logs returned. Valid values: `asc` (ascending); `desc`: (descending). Default value: `desc`
Notes:
* This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
* To sort the analysis results, see <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>.
 * @method void setSort(string $Sort) Set Time order of the logs returned. Valid values: `asc` (ascending); `desc`: (descending). Default value: `desc`
Notes:
* This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
* To sort the analysis results, see <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>.
 * @method string getContext() Obtain Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* Only applicable for single log topic retrieval. When retrieving multiple log topics, use the Context in Topics.* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method void setContext(string $Context) Set Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* Only applicable for single log topic retrieval. When retrieving multiple log topics, use the Context in Topics.* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
 * @method float getSamplingRate() Obtain Indicates whether to sample raw logs before statistical analysis (`Query` includes SQL statements).
`0`: Auto-sample.
`0-1`: Sample by the specified sample rate, such as `0.02`.
`1`: Precise analysis without sampling.
Default value: `1`
 * @method void setSamplingRate(float $SamplingRate) Set Indicates whether to sample raw logs before statistical analysis (`Query` includes SQL statements).
`0`: Auto-sample.
`0-1`: Sample by the specified sample rate, such as `0.02`.
`1`: Precise analysis without sampling.
Default value: `1`
 * @method boolean getUseNewAnalysis() Obtain If the value is `true`, the new response method will be used, and the output parameters `AnalysisRecords` and `Columns` will be valid.
If the value is `false`, the old response method will be used, and the output parameters `AnalysisResults` and `ColNames` will be valid.
The two response methods differ slightly in terms of encoding format. You are advised to use the new method (`true`).
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set If the value is `true`, the new response method will be used, and the output parameters `AnalysisRecords` and `Columns` will be valid.
If the value is `false`, the old response method will be used, and the output parameters `AnalysisResults` and `ColNames` will be valid.
The two response methods differ slightly in terms of encoding format. You are advised to use the new method (`true`).
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer Start time of the log to be searched, which is a Unix timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be searched, which is a Unix timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Search and analysis statement. Maximum length: 12 KB
A statement is in the format of <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[search criteria]</a> | <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. You can omit the pipe symbol <code> | </code> and SQL statement when log analysis is not required.
Queries all logs using * or an empty string
     */
    public $Query;

    /**
     * @var integer Retrieval syntax rule, default is 0, recommended to use 1 (CQL syntax).0: Lucene syntax, 1: CQL syntax.
For detailed explanation, refer to <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
     */
    public $SyntaxRule;

    /**
     * @var string - The ID of the log topic to be searched for. Only one log topic can be specified.
- To search for multiple log topics at a time, use the `Topics` parameter.
     */
    public $TopicId;

    /**
     * @var array - The IDs of the log topics (up to 20) to be searched for.
- To search for a single log topic, use the `TopicId` parameter.
- You cannot use both `TopicId` and `Topics`.
     */
    public $Topics;

    /**
     * @var integer Specifies the number of raw logs returned in a single query, default is 100, maximum is 1000. To obtain subsequent logs, use the Context parameter.Note:* This is only valid when the search and analysis statement (Query) does not contain SQL* Method for specifying SQL result count refers to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     */
    public $Limit;

    /**
     * @var string Time order of the logs returned. Valid values: `asc` (ascending); `desc`: (descending). Default value: `desc`
Notes:
* This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
* To sort the analysis results, see <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>.
     */
    public $Sort;

    /**
     * @var string Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* Only applicable for single log topic retrieval. When retrieving multiple log topics, use the Context in Topics.* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     */
    public $Context;

    /**
     * @var float Indicates whether to sample raw logs before statistical analysis (`Query` includes SQL statements).
`0`: Auto-sample.
`0-1`: Sample by the specified sample rate, such as `0.02`.
`1`: Precise analysis without sampling.
Default value: `1`
     */
    public $SamplingRate;

    /**
     * @var boolean If the value is `true`, the new response method will be used, and the output parameters `AnalysisRecords` and `Columns` will be valid.
If the value is `false`, the old response method will be used, and the output parameters `AnalysisResults` and `ColNames` will be valid.
The two response methods differ slightly in terms of encoding format. You are advised to use the new method (`true`).
     */
    public $UseNewAnalysis;

    /**
     * @param integer $From Start time of the log to be searched, which is a Unix timestamp in milliseconds
     * @param integer $To End time of the log to be searched, which is a Unix timestamp in milliseconds
     * @param string $Query Search and analysis statement. Maximum length: 12 KB
A statement is in the format of <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[search criteria]</a> | <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. You can omit the pipe symbol <code> | </code> and SQL statement when log analysis is not required.
Queries all logs using * or an empty string
     * @param integer $SyntaxRule Retrieval syntax rule, default is 0, recommended to use 1 (CQL syntax).0: Lucene syntax, 1: CQL syntax.
For detailed explanation, refer to <a href="https://intl.cloud.tencent.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieve Syntax Rules</a>
     * @param string $TopicId - The ID of the log topic to be searched for. Only one log topic can be specified.
- To search for multiple log topics at a time, use the `Topics` parameter.
     * @param array $Topics - The IDs of the log topics (up to 20) to be searched for.
- To search for a single log topic, use the `TopicId` parameter.
- You cannot use both `TopicId` and `Topics`.
     * @param integer $Limit Specifies the number of raw logs returned in a single query, default is 100, maximum is 1000. To obtain subsequent logs, use the Context parameter.Note:* This is only valid when the search and analysis statement (Query) does not contain SQL* Method for specifying SQL result count refers to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     * @param string $Sort Time order of the logs returned. Valid values: `asc` (ascending); `desc`: (descending). Default value: `desc`
Notes:
* This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
* To sort the analysis results, see <a href="https://intl.cloud.tencent.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY Syntax</a>.
     * @param string $Context Pass the Context value returned by the last API call to retrieve more subsequent logs. A total of up to 10,000 raw logs can be obtained, with an expiration time of 1 hour.Note:* When passing this parameter, do not modify any other parameters except for this one* Only applicable for single log topic retrieval. When retrieving multiple log topics, use the Context in Topics.* This is only valid when the retrieval analysis statement (Query) does not contain SQL. For obtaining subsequent SQL results, refer to <a href="https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT Syntax</a>
     * @param float $SamplingRate Indicates whether to sample raw logs before statistical analysis (`Query` includes SQL statements).
`0`: Auto-sample.
`0-1`: Sample by the specified sample rate, such as `0.02`.
`1`: Precise analysis without sampling.
Default value: `1`
     * @param boolean $UseNewAnalysis If the value is `true`, the new response method will be used, and the output parameters `AnalysisRecords` and `Columns` will be valid.
If the value is `false`, the old response method will be used, and the output parameters `AnalysisResults` and `ColNames` will be valid.
The two response methods differ slightly in terms of encoding format. You are advised to use the new method (`true`).
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

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new MultiTopicSearchInformation();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
