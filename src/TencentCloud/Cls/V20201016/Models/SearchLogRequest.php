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
 * SearchLog request structure.
 *
 * @method integer getFrom() Obtain <p>Start time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
 * @method void setFrom(integer $From) Set <p>Start time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
 * @method integer getTo() Obtain <p>End time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
 * @method void setTo(integer $To) Set <p>End time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
 * @method string getQueryString() Obtain <p>The retrieval analysis statement has a maximum length of 12KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p><p>Default value: empty string</p>
 * @method void setQueryString(string $QueryString) Set <p>The retrieval analysis statement has a maximum length of 12KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p><p>Default value: empty string</p>
 * @method integer getQuerySyntax() Obtain <p>Search syntax rules. Default value is 1. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, dedicated retrieval syntax for log service)</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">retrieval condition syntax rules</a>.</p><p>Default value: 1</p>
 * @method void setQuerySyntax(integer $QuerySyntax) Set <p>Search syntax rules. Default value is 1. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, dedicated retrieval syntax for log service)</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">retrieval condition syntax rules</a>.</p><p>Default value: 1</p>
 * @method string getTopicId() Obtain <ul><li>Log topic ID to be retrieved and analyzed. Only one can be specified.</li><li>If needed to retrieve multiple log topics at the same time, please use the Topics parameter.</li><li>TopicId and Topics cannot include both. Only select one in a single request.</li></ul>
 * @method void setTopicId(string $TopicId) Set <ul><li>Log topic ID to be retrieved and analyzed. Only one can be specified.</li><li>If needed to retrieve multiple log topics at the same time, please use the Topics parameter.</li><li>TopicId and Topics cannot include both. Only select one in a single request.</li></ul>
 * @method array getTopics() Obtain <ul><li>Log topic list for retrieval and analysis supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
 * @method void setTopics(array $Topics) Set <ul><li>Log topic list for retrieval and analysis supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
 * @method string getSort() Obtain <p>Whether raw logs are returned in time sequence. Value range: asc (ascending), desc (descending). Default is desc.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For SQL result sorting, see <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a>.</li></ul>
 * @method void setSort(string $Sort) Set <p>Whether raw logs are returned in time sequence. Value range: asc (ascending), desc (descending). Default is desc.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For SQL result sorting, see <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a>.</li></ul>
 * @method integer getLimit() Obtain <p>Number of raw logs returned in a single query. Default is 100, maximum value is 1000.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>There are two methods to retrieve more logs:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. The total number of raw logs that can be obtained is up to 10,000 entries.</li><li>Offset: The offset refers to the line number from which raw logs start to return. There is no log entry limit.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>Number of raw logs returned in a single query. Default is 100, maximum value is 1000.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>There are two methods to retrieve more logs:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. The total number of raw logs that can be obtained is up to 10,000 entries.</li><li>Offset: The offset refers to the line number from which raw logs start to return. There is no log entry limit.</li></ul>
 * @method integer getOffset() Obtain <p>Offset of the raw log Query, indicating the line number from which the raw log starts to return, defaults to 0.<br>Note:</p><ul><li>Valid only when the retrieval statement (Query) does not contain SQL</li><li>Cannot be used with Context parameter simultaneously</li><li>Applicable only for single log topic retrieval</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Offset of the raw log Query, indicating the line number from which the raw log starts to return, defaults to 0.<br>Note:</p><ul><li>Valid only when the retrieval statement (Query) does not contain SQL</li><li>Cannot be used with Context parameter simultaneously</li><li>Applicable only for single log topic retrieval</li></ul>
 * @method string getContext() Obtain <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be retrieved is up to 10,000 entries, with an expiration time of 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters except this one.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>Valid only when the search and analysis statement (Query) does not contain SQL. For SQL to obtain follow-up results, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
 * @method void setContext(string $Context) Set <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be retrieved is up to 10,000 entries, with an expiration time of 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters except this one.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>Valid only when the search and analysis statement (Query) does not contain SQL. For SQL to obtain follow-up results, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
 * @method float getSamplingRate() Obtain <p>Whether to sample raw logs first and then perform statistical analysis when executing statistical analysis (SQL included in Query).<br>0: auto-sample;<br>0–1: sample at the specified sampling rate, such as 0.02;<br>1: indicates no sampling, that is, precise analysis.<br>The default value is 1.</p>
 * @method void setSamplingRate(float $SamplingRate) Set <p>Whether to sample raw logs first and then perform statistical analysis when executing statistical analysis (SQL included in Query).<br>0: auto-sample;<br>0–1: sample at the specified sampling rate, such as 0.02;<br>1: indicates no sampling, that is, precise analysis.<br>The default value is 1.</p>
 * @method boolean getUseNewAnalysis() Obtain <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output AnalysisResults and ColNames are valid.<br>There is a slight difference in encoding format between the two return methods. Recommend using true.</p>
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output AnalysisResults and ColNames are valid.<br>There is a slight difference in encoding format between the two return methods. Recommend using true.</p>
 * @method boolean getHighLight() Obtain <p>Whether to highlight keywords that meet retrieval criteria, generally used for highlighting. Only key-value retrieval is supported, full-text retrieval is not supported.</p>
 * @method void setHighLight(boolean $HighLight) Set <p>Whether to highlight keywords that meet retrieval criteria, generally used for highlighting. Only key-value retrieval is supported, full-text retrieval is not supported.</p>
 * @method string getQuery() Obtain <p><strong>The Query field is deprecated. Please use the QueryString field.</strong><br>Field differences: When the syntax rule is not specified, Query uses Lucene syntax by default, while QueryString uses CQL syntax. For syntax differences, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules">Syntax Rule</a>.</p>
 * @method void setQuery(string $Query) Set <p><strong>The Query field is deprecated. Please use the QueryString field.</strong><br>Field differences: When the syntax rule is not specified, Query uses Lucene syntax by default, while QueryString uses CQL syntax. For syntax differences, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules">Syntax Rule</a>.</p>
 * @method integer getSyntaxRule() Obtain <p><strong>The SyntaxRule field is deprecated. Please use the QuerySyntax field.</strong></p><p>Field differences:</p><ul><li>SyntaxRule is used in conjunction with the Query field and uses Lucene syntax by default.</li><li>QuerySyntax is used in conjunction with the QueryString field and uses CQL syntax by default.</li></ul><p>SyntaxRule parameter description:</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, a dedicated retrieval syntax for log service)</li></ul>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p><strong>The SyntaxRule field is deprecated. Please use the QuerySyntax field.</strong></p><p>Field differences:</p><ul><li>SyntaxRule is used in conjunction with the Query field and uses Lucene syntax by default.</li><li>QuerySyntax is used in conjunction with the QueryString field and uses CQL syntax by default.</li></ul><p>SyntaxRule parameter description:</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, a dedicated retrieval syntax for log service)</li></ul>
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer <p>Start time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
     */
    public $From;

    /**
     * @var integer <p>End time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
     */
    public $To;

    /**
     * @var string <p>The retrieval analysis statement has a maximum length of 12KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p><p>Default value: empty string</p>
     */
    public $QueryString;

    /**
     * @var integer <p>Search syntax rules. Default value is 1. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, dedicated retrieval syntax for log service)</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">retrieval condition syntax rules</a>.</p><p>Default value: 1</p>
     */
    public $QuerySyntax;

    /**
     * @var string <ul><li>Log topic ID to be retrieved and analyzed. Only one can be specified.</li><li>If needed to retrieve multiple log topics at the same time, please use the Topics parameter.</li><li>TopicId and Topics cannot include both. Only select one in a single request.</li></ul>
     */
    public $TopicId;

    /**
     * @var array <ul><li>Log topic list for retrieval and analysis supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
     */
    public $Topics;

    /**
     * @var string <p>Whether raw logs are returned in time sequence. Value range: asc (ascending), desc (descending). Default is desc.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For SQL result sorting, see <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a>.</li></ul>
     */
    public $Sort;

    /**
     * @var integer <p>Number of raw logs returned in a single query. Default is 100, maximum value is 1000.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>There are two methods to retrieve more logs:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. The total number of raw logs that can be obtained is up to 10,000 entries.</li><li>Offset: The offset refers to the line number from which raw logs start to return. There is no log entry limit.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Offset of the raw log Query, indicating the line number from which the raw log starts to return, defaults to 0.<br>Note:</p><ul><li>Valid only when the retrieval statement (Query) does not contain SQL</li><li>Cannot be used with Context parameter simultaneously</li><li>Applicable only for single log topic retrieval</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be retrieved is up to 10,000 entries, with an expiration time of 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters except this one.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>Valid only when the search and analysis statement (Query) does not contain SQL. For SQL to obtain follow-up results, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
     */
    public $Context;

    /**
     * @var float <p>Whether to sample raw logs first and then perform statistical analysis when executing statistical analysis (SQL included in Query).<br>0: auto-sample;<br>0–1: sample at the specified sampling rate, such as 0.02;<br>1: indicates no sampling, that is, precise analysis.<br>The default value is 1.</p>
     */
    public $SamplingRate;

    /**
     * @var boolean <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output AnalysisResults and ColNames are valid.<br>There is a slight difference in encoding format between the two return methods. Recommend using true.</p>
     */
    public $UseNewAnalysis;

    /**
     * @var boolean <p>Whether to highlight keywords that meet retrieval criteria, generally used for highlighting. Only key-value retrieval is supported, full-text retrieval is not supported.</p>
     */
    public $HighLight;

    /**
     * @var string <p><strong>The Query field is deprecated. Please use the QueryString field.</strong><br>Field differences: When the syntax rule is not specified, Query uses Lucene syntax by default, while QueryString uses CQL syntax. For syntax differences, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules">Syntax Rule</a>.</p>
     * @deprecated
     */
    public $Query;

    /**
     * @var integer <p><strong>The SyntaxRule field is deprecated. Please use the QuerySyntax field.</strong></p><p>Field differences:</p><ul><li>SyntaxRule is used in conjunction with the Query field and uses Lucene syntax by default.</li><li>QuerySyntax is used in conjunction with the QueryString field and uses CQL syntax by default.</li></ul><p>SyntaxRule parameter description:</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, a dedicated retrieval syntax for log service)</li></ul>
     * @deprecated
     */
    public $SyntaxRule;

    /**
     * @param integer $From <p>Start time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
     * @param integer $To <p>End time for logs to be searched and analyzed, <strong>Unix timestamp (ms)</strong></p>
     * @param string $QueryString <p>The retrieval analysis statement has a maximum length of 12KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p><p>Default value: empty string</p>
     * @param integer $QuerySyntax <p>Search syntax rules. Default value is 1. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, dedicated retrieval syntax for log service)</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">retrieval condition syntax rules</a>.</p><p>Default value: 1</p>
     * @param string $TopicId <ul><li>Log topic ID to be retrieved and analyzed. Only one can be specified.</li><li>If needed to retrieve multiple log topics at the same time, please use the Topics parameter.</li><li>TopicId and Topics cannot include both. Only select one in a single request.</li></ul>
     * @param array $Topics <ul><li>Log topic list for retrieval and analysis supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
     * @param string $Sort <p>Whether raw logs are returned in time sequence. Value range: asc (ascending), desc (descending). Default is desc.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For SQL result sorting, see <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a>.</li></ul>
     * @param integer $Limit <p>Number of raw logs returned in a single query. Default is 100, maximum value is 1000.<br>Note:</p><ul><li>Only valid when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>There are two methods to retrieve more logs:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. The total number of raw logs that can be obtained is up to 10,000 entries.</li><li>Offset: The offset refers to the line number from which raw logs start to return. There is no log entry limit.</li></ul>
     * @param integer $Offset <p>Offset of the raw log Query, indicating the line number from which the raw log starts to return, defaults to 0.<br>Note:</p><ul><li>Valid only when the retrieval statement (Query) does not contain SQL</li><li>Cannot be used with Context parameter simultaneously</li><li>Applicable only for single log topic retrieval</li></ul>
     * @param string $Context <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be retrieved is up to 10,000 entries, with an expiration time of 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters except this one.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>Valid only when the search and analysis statement (Query) does not contain SQL. For SQL to obtain follow-up results, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
     * @param float $SamplingRate <p>Whether to sample raw logs first and then perform statistical analysis when executing statistical analysis (SQL included in Query).<br>0: auto-sample;<br>0–1: sample at the specified sampling rate, such as 0.02;<br>1: indicates no sampling, that is, precise analysis.<br>The default value is 1.</p>
     * @param boolean $UseNewAnalysis <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output AnalysisResults and ColNames are valid.<br>There is a slight difference in encoding format between the two return methods. Recommend using true.</p>
     * @param boolean $HighLight <p>Whether to highlight keywords that meet retrieval criteria, generally used for highlighting. Only key-value retrieval is supported, full-text retrieval is not supported.</p>
     * @param string $Query <p><strong>The Query field is deprecated. Please use the QueryString field.</strong><br>Field differences: When the syntax rule is not specified, Query uses Lucene syntax by default, while QueryString uses CQL syntax. For syntax differences, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules">Syntax Rule</a>.</p>
     * @param integer $SyntaxRule <p><strong>The SyntaxRule field is deprecated. Please use the QuerySyntax field.</strong></p><p>Field differences:</p><ul><li>SyntaxRule is used in conjunction with the Query field and uses Lucene syntax by default.</li><li>QuerySyntax is used in conjunction with the QueryString field and uses CQL syntax by default.</li></ul><p>SyntaxRule parameter description:</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (CLS Query Language, a dedicated retrieval syntax for log service)</li></ul>
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

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("QuerySyntax",$param) and $param["QuerySyntax"] !== null) {
            $this->QuerySyntax = $param["QuerySyntax"];
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

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("HighLight",$param) and $param["HighLight"] !== null) {
            $this->HighLight = $param["HighLight"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
