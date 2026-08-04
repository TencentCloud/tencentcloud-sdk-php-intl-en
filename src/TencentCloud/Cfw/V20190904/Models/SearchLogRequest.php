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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog request structure.
 *
 * @method integer getFrom() Obtain <p>Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
 * @method void setFrom(integer $From) Set <p>Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
 * @method integer getTo() Obtain <p>End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
 * @method void setTo(integer $To) Set <p>End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
 * @method string getQuery() Obtain <p>The retrieval and analysis statement has a maximum length of 12 KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and the SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p>
 * @method void setQuery(string $Query) Set <p>The retrieval and analysis statement has a maximum length of 12 KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and the SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p>
 * @method integer getSyntaxRule() Obtain <p>Search syntax rules. Default value is 0. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (dedicated retrieval syntax for CLS, also the default syntax rule used in the console).</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieval condition syntax rules</a></p>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p>Search syntax rules. Default value is 0. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (dedicated retrieval syntax for CLS, also the default syntax rule used in the console).</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieval condition syntax rules</a></p>
 * @method string getTopicId() Obtain <ul><li>Log topic ID to be retrieved and analyzed. Only one log topic can be specified.</li><li>If needed, use the Topics parameter to retrieve multiple log topics.</li><li>The TopicId and Topics parameters cannot be used simultaneously. Only one can be selected in a single request.<br>The log topic IDs are as follows:<br>Access control - Internet boundary: cfw_rule_acl<br>Access control - NAT boundary: cfw_rule_nat_acl<br>Access control - VPC boundary: cfw_rule_vpc_acl<br>Access control - DNS switch: cfw_rule_dns_acl<br>Intrusion defense: cfw_rule_threatinfo<br>Full traffic detection and response logs - Traffic analysis: cfw_netflow_nta<br>Full traffic detection and response logs - Traffic alarm: cfw_rule_ndr_threatinfo<br>Zero trust operations and maintenance - Database logon: cfw_operate_db<br>Zero trust operations and maintenance - Server access: operate_remote_om<br>Zero trust operations and maintenance - Web service access: operate_web_access<br>Zero trust operations and maintenance - Behavioral audit: remoteom_commands<br>Traffic log - Internet boundary: cfw_netflow_border<br>Traffic log - NAT boundary: cfw_netflow_nat<br>Traffic log - VPC boundary: cfw_netflow_vpc<br>Traffic log - DNS switch: cfw_netflow_dns<br>Traffic log - Private network traffic: cfw_netflow_fl<br>Operation log: operate_log_all</li></ul>
 * @method void setTopicId(string $TopicId) Set <ul><li>Log topic ID to be retrieved and analyzed. Only one log topic can be specified.</li><li>If needed, use the Topics parameter to retrieve multiple log topics.</li><li>The TopicId and Topics parameters cannot be used simultaneously. Only one can be selected in a single request.<br>The log topic IDs are as follows:<br>Access control - Internet boundary: cfw_rule_acl<br>Access control - NAT boundary: cfw_rule_nat_acl<br>Access control - VPC boundary: cfw_rule_vpc_acl<br>Access control - DNS switch: cfw_rule_dns_acl<br>Intrusion defense: cfw_rule_threatinfo<br>Full traffic detection and response logs - Traffic analysis: cfw_netflow_nta<br>Full traffic detection and response logs - Traffic alarm: cfw_rule_ndr_threatinfo<br>Zero trust operations and maintenance - Database logon: cfw_operate_db<br>Zero trust operations and maintenance - Server access: operate_remote_om<br>Zero trust operations and maintenance - Web service access: operate_web_access<br>Zero trust operations and maintenance - Behavioral audit: remoteom_commands<br>Traffic log - Internet boundary: cfw_netflow_border<br>Traffic log - NAT boundary: cfw_netflow_nat<br>Traffic log - VPC boundary: cfw_netflow_vpc<br>Traffic log - DNS switch: cfw_netflow_dns<br>Traffic log - Private network traffic: cfw_netflow_fl<br>Operation log: operate_log_all</li></ul>
 * @method array getTopics() Obtain <ul><li>Log topic list for retrieval and analysis, supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
 * @method void setTopics(array $Topics) Set <ul><li>Log topic list for retrieval and analysis, supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
 * @method string getSort() Obtain <p>Whether raw logs are returned in time sequence; value range: asc (ascending), desc (descending), default is desc<br>Note:</p><ul><li>Valid only when the search and analysis statement (Query) does not contain SQL</li><li>For SQL result sorting, refer to <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a></li></ul>
 * @method void setSort(string $Sort) Set <p>Whether raw logs are returned in time sequence; value range: asc (ascending), desc (descending), default is desc<br>Note:</p><ul><li>Valid only when the search and analysis statement (Query) does not contain SQL</li><li>For SQL result sorting, refer to <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a></li></ul>
 * @method integer getLimit() Obtain <p>Number of raw logs returned in a single query. Default value: 100. Maximum value: 1000.<br>Note:</p><ul><li>This parameter is valid only when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>You can retrieve more logs in two ways:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. You can retrieve up to 10,000 entries of raw logs in total.</li><li>Offset: The offset indicates the line number from which to start returning raw logs. There is no log entry limit.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>Number of raw logs returned in a single query. Default value: 100. Maximum value: 1000.<br>Note:</p><ul><li>This parameter is valid only when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>You can retrieve more logs in two ways:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. You can retrieve up to 10,000 entries of raw logs in total.</li><li>Offset: The offset indicates the line number from which to start returning raw logs. There is no log entry limit.</li></ul>
 * @method integer getOffset() Obtain <p>Query the offset of raw logs, indicating the line number from which to start returning raw logs. Default value is 0.<br>Note:</p><ul><li>Applicable only when the retrieval and analysis statement (Query) does not contain SQL.</li><li>Cannot be used with the Context parameter.</li><li>Applicable only for single log topic retrieval.</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Query the offset of raw logs, indicating the line number from which to start returning raw logs. Default value is 0.<br>Note:</p><ul><li>Applicable only when the retrieval and analysis statement (Query) does not contain SQL.</li><li>Cannot be used with the Context parameter.</li><li>Applicable only for single log topic retrieval.</li></ul>
 * @method string getContext() Obtain <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be obtained is up to 10,000 entries. The expiration time is 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>This is valid only when the search and analysis statement (Query) does not contain SQL. For obtaining subsequent results with SQL, refer to <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
 * @method void setContext(string $Context) Set <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be obtained is up to 10,000 entries. The expiration time is 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>This is valid only when the search and analysis statement (Query) does not contain SQL. For obtaining subsequent results with SQL, refer to <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
 * @method float getSamplingRate() Obtain <p>When performing statistical analysis (SQL included in Query), whether to sample raw logs first and then perform statistical analysis.<br>0: Automatic sampling;<br>0–1: Sample at the specified sampling rate, for example 0.02;<br>1: Indicates no sampling, that is, precision analysis.<br>Default value: 1</p>
 * @method void setSamplingRate(float $SamplingRate) Set <p>When performing statistical analysis (SQL included in Query), whether to sample raw logs first and then perform statistical analysis.<br>0: Automatic sampling;<br>0–1: Sample at the specified sampling rate, for example 0.02;<br>1: Indicates no sampling, that is, precision analysis.<br>Default value: 1</p>
 * @method boolean getUseNewAnalysis() Obtain <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output parameters AnalysisResults and ColNames are valid.<br>The two return methods have a slight difference in encoding format. It is recommended to use true.</p>
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output parameters AnalysisResults and ColNames are valid.<br>The two return methods have a slight difference in encoding format. It is recommended to use true.</p>
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer <p>Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
     */
    public $From;

    /**
     * @var integer <p>End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
     */
    public $To;

    /**
     * @var string <p>The retrieval and analysis statement has a maximum length of 12 KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and the SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p>
     */
    public $Query;

    /**
     * @var integer <p>Search syntax rules. Default value is 0. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (dedicated retrieval syntax for CLS, also the default syntax rule used in the console).</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieval condition syntax rules</a></p>
     */
    public $SyntaxRule;

    /**
     * @var string <ul><li>Log topic ID to be retrieved and analyzed. Only one log topic can be specified.</li><li>If needed, use the Topics parameter to retrieve multiple log topics.</li><li>The TopicId and Topics parameters cannot be used simultaneously. Only one can be selected in a single request.<br>The log topic IDs are as follows:<br>Access control - Internet boundary: cfw_rule_acl<br>Access control - NAT boundary: cfw_rule_nat_acl<br>Access control - VPC boundary: cfw_rule_vpc_acl<br>Access control - DNS switch: cfw_rule_dns_acl<br>Intrusion defense: cfw_rule_threatinfo<br>Full traffic detection and response logs - Traffic analysis: cfw_netflow_nta<br>Full traffic detection and response logs - Traffic alarm: cfw_rule_ndr_threatinfo<br>Zero trust operations and maintenance - Database logon: cfw_operate_db<br>Zero trust operations and maintenance - Server access: operate_remote_om<br>Zero trust operations and maintenance - Web service access: operate_web_access<br>Zero trust operations and maintenance - Behavioral audit: remoteom_commands<br>Traffic log - Internet boundary: cfw_netflow_border<br>Traffic log - NAT boundary: cfw_netflow_nat<br>Traffic log - VPC boundary: cfw_netflow_vpc<br>Traffic log - DNS switch: cfw_netflow_dns<br>Traffic log - Private network traffic: cfw_netflow_fl<br>Operation log: operate_log_all</li></ul>
     */
    public $TopicId;

    /**
     * @var array <ul><li>Log topic list for retrieval and analysis, supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
     */
    public $Topics;

    /**
     * @var string <p>Whether raw logs are returned in time sequence; value range: asc (ascending), desc (descending), default is desc<br>Note:</p><ul><li>Valid only when the search and analysis statement (Query) does not contain SQL</li><li>For SQL result sorting, refer to <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a></li></ul>
     */
    public $Sort;

    /**
     * @var integer <p>Number of raw logs returned in a single query. Default value: 100. Maximum value: 1000.<br>Note:</p><ul><li>This parameter is valid only when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>You can retrieve more logs in two ways:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. You can retrieve up to 10,000 entries of raw logs in total.</li><li>Offset: The offset indicates the line number from which to start returning raw logs. There is no log entry limit.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Query the offset of raw logs, indicating the line number from which to start returning raw logs. Default value is 0.<br>Note:</p><ul><li>Applicable only when the retrieval and analysis statement (Query) does not contain SQL.</li><li>Cannot be used with the Context parameter.</li><li>Applicable only for single log topic retrieval.</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be obtained is up to 10,000 entries. The expiration time is 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>This is valid only when the search and analysis statement (Query) does not contain SQL. For obtaining subsequent results with SQL, refer to <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
     */
    public $Context;

    /**
     * @var float <p>When performing statistical analysis (SQL included in Query), whether to sample raw logs first and then perform statistical analysis.<br>0: Automatic sampling;<br>0–1: Sample at the specified sampling rate, for example 0.02;<br>1: Indicates no sampling, that is, precision analysis.<br>Default value: 1</p>
     */
    public $SamplingRate;

    /**
     * @var boolean <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output parameters AnalysisResults and ColNames are valid.<br>The two return methods have a slight difference in encoding format. It is recommended to use true.</p>
     */
    public $UseNewAnalysis;

    /**
     * @param integer $From <p>Start time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
     * @param integer $To <p>End time for logs to be searched and analyzed, which is a Unix timestamp in milliseconds</p>
     * @param string $Query <p>The retrieval and analysis statement has a maximum length of 12 KB.<br>The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval condition]</a> | <a href="https://www.tencentcloud.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statement]</a>. When there is no need to perform statistical analysis on logs, the pipe character <code> | </code> and the SQL statement can be omitted.<br>Use * or an empty string to search all logs.</p>
     * @param integer $SyntaxRule <p>Search syntax rules. Default value is 0. Recommended for use is 1.</p><ul><li>0: Lucene syntax</li><li>1: CQL syntax (dedicated retrieval syntax for CLS, also the default syntax rule used in the console).</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1#RetrievesConditionalRules" target="_blank">Retrieval condition syntax rules</a></p>
     * @param string $TopicId <ul><li>Log topic ID to be retrieved and analyzed. Only one log topic can be specified.</li><li>If needed, use the Topics parameter to retrieve multiple log topics.</li><li>The TopicId and Topics parameters cannot be used simultaneously. Only one can be selected in a single request.<br>The log topic IDs are as follows:<br>Access control - Internet boundary: cfw_rule_acl<br>Access control - NAT boundary: cfw_rule_nat_acl<br>Access control - VPC boundary: cfw_rule_vpc_acl<br>Access control - DNS switch: cfw_rule_dns_acl<br>Intrusion defense: cfw_rule_threatinfo<br>Full traffic detection and response logs - Traffic analysis: cfw_netflow_nta<br>Full traffic detection and response logs - Traffic alarm: cfw_rule_ndr_threatinfo<br>Zero trust operations and maintenance - Database logon: cfw_operate_db<br>Zero trust operations and maintenance - Server access: operate_remote_om<br>Zero trust operations and maintenance - Web service access: operate_web_access<br>Zero trust operations and maintenance - Behavioral audit: remoteom_commands<br>Traffic log - Internet boundary: cfw_netflow_border<br>Traffic log - NAT boundary: cfw_netflow_nat<br>Traffic log - VPC boundary: cfw_netflow_vpc<br>Traffic log - DNS switch: cfw_netflow_dns<br>Traffic log - Private network traffic: cfw_netflow_fl<br>Operation log: operate_log_all</li></ul>
     * @param array $Topics <ul><li>Log topic list for retrieval and analysis, supports a maximum of 50 log topics.</li><li>Use TopicId to retrieve a single log topic.</li><li>TopicId and Topics cannot be used simultaneously. Only select one in a single request.</li></ul>
     * @param string $Sort <p>Whether raw logs are returned in time sequence; value range: asc (ascending), desc (descending), default is desc<br>Note:</p><ul><li>Valid only when the search and analysis statement (Query) does not contain SQL</li><li>For SQL result sorting, refer to <a href="https://www.tencentcloud.com/document/product/614/58978?from_cn_redirect=1" target="_blank">SQL ORDER BY syntax</a></li></ul>
     * @param integer $Limit <p>Number of raw logs returned in a single query. Default value: 100. Maximum value: 1000.<br>Note:</p><ul><li>This parameter is valid only when the search and analysis statement (Query) does not contain SQL.</li><li>For the method for specifying SQL result count, see <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul><p>You can retrieve more logs in two ways:</p><ul><li>Context: Pass the Context value returned by the last API call to retrieve more logs. You can retrieve up to 10,000 entries of raw logs in total.</li><li>Offset: The offset indicates the line number from which to start returning raw logs. There is no log entry limit.</li></ul>
     * @param integer $Offset <p>Query the offset of raw logs, indicating the line number from which to start returning raw logs. Default value is 0.<br>Note:</p><ul><li>Applicable only when the retrieval and analysis statement (Query) does not contain SQL.</li><li>Cannot be used with the Context parameter.</li><li>Applicable only for single log topic retrieval.</li></ul>
     * @param string $Context <p>Pass the Context value returned by the last API call to obtain more logs later. The total number of raw logs that can be obtained is up to 10,000 entries. The expiration time is 1 hour.<br>Note:</p><ul><li>When passing this parameter, do not modify other parameters.</li><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li><li>This is valid only when the search and analysis statement (Query) does not contain SQL. For obtaining subsequent results with SQL, refer to <a href="https://www.tencentcloud.com/document/product/614/58977?from_cn_redirect=1" target="_blank">SQL LIMIT syntax</a>.</li></ul>
     * @param float $SamplingRate <p>When performing statistical analysis (SQL included in Query), whether to sample raw logs first and then perform statistical analysis.<br>0: Automatic sampling;<br>0–1: Sample at the specified sampling rate, for example 0.02;<br>1: Indicates no sampling, that is, precision analysis.<br>Default value: 1</p>
     * @param boolean $UseNewAnalysis <p>true means using the new retrieval result return method, and output parameters AnalysisRecords and Columns are valid.<br>false means using the old retrieval result return method, and output parameters AnalysisResults and ColNames are valid.<br>The two return methods have a slight difference in encoding format. It is recommended to use true.</p>
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
    }
}
