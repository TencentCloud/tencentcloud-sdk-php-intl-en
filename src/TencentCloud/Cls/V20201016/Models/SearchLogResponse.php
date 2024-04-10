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
 * SearchLog response structure.
 *
 * @method string getContext() Obtain Pass through the Context value returned by this API, which can access more logs later, with an expiration time of 1 hour.Note:* Applicable only for single log topic searches. When searching multiple log topics, please use the Context in Topics.
 * @method void setContext(string $Context) Set Pass through the Context value returned by this API, which can access more logs later, with an expiration time of 1 hour.Note:* Applicable only for single log topic searches. When searching multiple log topics, please use the Context in Topics.
 * @method boolean getListOver() Obtain Whether to return all raw log query results. If not, you can use `Context` to continue to get logs.
Note: This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
 * @method void setListOver(boolean $ListOver) Set Whether to return all raw log query results. If not, you can use `Context` to continue to get logs.
Note: This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
 * @method boolean getAnalysis() Obtain Whether the returned data is the analysis (SQL) result
 * @method void setAnalysis(boolean $Analysis) Set Whether the returned data is the analysis (SQL) result
 * @method array getResults() Obtain Raw logs that meet the search conditions
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setResults(array $Results) Set Raw logs that meet the search conditions
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getColNames() Obtain Column names of log analysis
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColNames(array $ColNames) Set Column names of log analysis
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getAnalysisResults() Obtain Log analysis result
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAnalysisResults(array $AnalysisResults) Set Log analysis result
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getAnalysisRecords() Obtain Log analysis result
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAnalysisRecords(array $AnalysisRecords) Set Log analysis result
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getColumns() Obtain Column attributes of log analysis
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setColumns(array $Columns) Set Column attributes of log analysis
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method float getSamplingRate() Obtain Sample rate used in this statistical analysis
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSamplingRate(float $SamplingRate) Set Sample rate used in this statistical analysis
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SearchLogTopics getTopics() Obtain Refers to the basic information of each log topic when multiple log topics are used for search, such as error messages.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopics(SearchLogTopics $Topics) Set Refers to the basic information of each log topic when multiple log topics are used for search, such as error messages.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var string Pass through the Context value returned by this API, which can access more logs later, with an expiration time of 1 hour.Note:* Applicable only for single log topic searches. When searching multiple log topics, please use the Context in Topics.
     */
    public $Context;

    /**
     * @var boolean Whether to return all raw log query results. If not, you can use `Context` to continue to get logs.
Note: This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
     */
    public $ListOver;

    /**
     * @var boolean Whether the returned data is the analysis (SQL) result
     */
    public $Analysis;

    /**
     * @var array Raw logs that meet the search conditions
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Results;

    /**
     * @var array Column names of log analysis
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ColNames;

    /**
     * @var array Log analysis result
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AnalysisResults;

    /**
     * @var array Log analysis result
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AnalysisRecords;

    /**
     * @var array Column attributes of log analysis
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Columns;

    /**
     * @var float Sample rate used in this statistical analysis
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SamplingRate;

    /**
     * @var SearchLogTopics Refers to the basic information of each log topic when multiple log topics are used for search, such as error messages.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Topics;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Context Pass through the Context value returned by this API, which can access more logs later, with an expiration time of 1 hour.Note:* Applicable only for single log topic searches. When searching multiple log topics, please use the Context in Topics.
     * @param boolean $ListOver Whether to return all raw log query results. If not, you can use `Context` to continue to get logs.
Note: This parameter is valid only when the query statement (`Query`) does not contain an SQL statement.
     * @param boolean $Analysis Whether the returned data is the analysis (SQL) result
     * @param array $Results Raw logs that meet the search conditions
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $ColNames Column names of log analysis
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $AnalysisResults Log analysis result
This parameter is valid only when `UseNewAnalysis` is `false`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $AnalysisRecords Log analysis result
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Columns Column attributes of log analysis
This parameter is valid only when `UseNewAnalysis` is `true`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param float $SamplingRate Sample rate used in this statistical analysis
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SearchLogTopics $Topics Refers to the basic information of each log topic when multiple log topics are used for search, such as error messages.Note: This field may return null, indicating that no valid values can be obtained.
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
