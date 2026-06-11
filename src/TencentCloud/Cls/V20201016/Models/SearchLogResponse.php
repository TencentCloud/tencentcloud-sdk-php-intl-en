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
 * SearchLog response structure.
 *
 * @method string getContext() Obtain <p>Pass through the Context value returned by this API to obtain more logs later. The expiration time is 1 hour.<br>Note:</p><ul><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li></ul>
 * @method void setContext(string $Context) Set <p>Pass through the Context value returned by this API to obtain more logs later. The expiration time is 1 hour.<br>Note:</p><ul><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li></ul>
 * @method boolean getListOver() Obtain <p>Whether all logs meeting the retrieval criteria have been returned. If not, use Context parameter to retrieve more logs.<br>Note: This is only valid when the search and analysis statement (Query) does not contain SQL.</p>
 * @method void setListOver(boolean $ListOver) Set <p>Whether all logs meeting the retrieval criteria have been returned. If not, use Context parameter to retrieve more logs.<br>Note: This is only valid when the search and analysis statement (Query) does not contain SQL.</p>
 * @method boolean getAnalysis() Obtain <p>Whether the returned data is the SQL analysis result</p>
 * @method void setAnalysis(boolean $Analysis) Set <p>Whether the returned data is the SQL analysis result</p>
 * @method array getResults() Obtain <p>Raw logs matching the retrieval criteria</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResults(array $Results) Set <p>Raw logs matching the retrieval criteria</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColNames() Obtain <p>Column names of log statistics analysis results<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColNames(array $ColNames) Set <p>Column names of log statistics analysis results<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAnalysisResults() Obtain <p>Statistical analysis results of logs<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisResults(array $AnalysisResults) Set <p>Statistical analysis results of logs<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAnalysisRecords() Obtain <p>Log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnalysisRecords(array $AnalysisRecords) Set <p>Log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain <p>Column attribute of log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set <p>Column attribute of log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSamplingRate() Obtain <p>Sampling rate used in this analysis</p>
 * @method void setSamplingRate(float $SamplingRate) Set <p>Sampling rate used in this analysis</p>
 * @method SearchLogTopics getTopics() Obtain <p>When multiple log topics are used for retrieval, basic information of each log topic, such as error message.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopics(SearchLogTopics $Topics) Set <p>When multiple log topics are used for retrieval, basic information of each log topic, such as error message.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var string <p>Pass through the Context value returned by this API to obtain more logs later. The expiration time is 1 hour.<br>Note:</p><ul><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li></ul>
     */
    public $Context;

    /**
     * @var boolean <p>Whether all logs meeting the retrieval criteria have been returned. If not, use Context parameter to retrieve more logs.<br>Note: This is only valid when the search and analysis statement (Query) does not contain SQL.</p>
     */
    public $ListOver;

    /**
     * @var boolean <p>Whether the returned data is the SQL analysis result</p>
     */
    public $Analysis;

    /**
     * @var array <p>Raw logs matching the retrieval criteria</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Results;

    /**
     * @var array <p>Column names of log statistics analysis results<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColNames;

    /**
     * @var array <p>Statistical analysis results of logs<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisResults;

    /**
     * @var array <p>Log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnalysisRecords;

    /**
     * @var array <p>Column attribute of log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var float <p>Sampling rate used in this analysis</p>
     */
    public $SamplingRate;

    /**
     * @var SearchLogTopics <p>When multiple log topics are used for retrieval, basic information of each log topic, such as error message.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Topics;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Context <p>Pass through the Context value returned by this API to obtain more logs later. The expiration time is 1 hour.<br>Note:</p><ul><li>Applicable only for single log topic retrieval. To retrieve multiple log topics, use the Context in Topics.</li></ul>
     * @param boolean $ListOver <p>Whether all logs meeting the retrieval criteria have been returned. If not, use Context parameter to retrieve more logs.<br>Note: This is only valid when the search and analysis statement (Query) does not contain SQL.</p>
     * @param boolean $Analysis <p>Whether the returned data is the SQL analysis result</p>
     * @param array $Results <p>Raw logs matching the retrieval criteria</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ColNames <p>Column names of log statistics analysis results<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AnalysisResults <p>Statistical analysis results of logs<br>This parameter is valid only when UseNewAnalysis is false</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AnalysisRecords <p>Log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns <p>Column attribute of log statistics and analysis results<br>This parameter is valid only when UseNewAnalysis is true</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SamplingRate <p>Sampling rate used in this analysis</p>
     * @param SearchLogTopics $Topics <p>When multiple log topics are used for retrieval, basic information of each log topic, such as error message.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = $param["Analysis"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("ColNames",$param) and $param["ColNames"] !== null) {
            $this->ColNames = $param["ColNames"];
        }

        if (array_key_exists("AnalysisResults",$param) and $param["AnalysisResults"] !== null) {
            $this->AnalysisResults = [];
            foreach ($param["AnalysisResults"] as $key => $value){
                $obj = new LogItems();
                $obj->deserialize($value);
                array_push($this->AnalysisResults, $obj);
            }
        }

        if (array_key_exists("AnalysisRecords",$param) and $param["AnalysisRecords"] !== null) {
            $this->AnalysisRecords = $param["AnalysisRecords"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = new SearchLogTopics();
            $this->Topics->deserialize($param["Topics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
