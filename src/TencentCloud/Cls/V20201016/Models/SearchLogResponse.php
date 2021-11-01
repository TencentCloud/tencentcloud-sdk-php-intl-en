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
 * @method string getContext() Obtain `Context` for loading subsequent content. It will expire after 1 hour.
 * @method void setContext(string $Context) Set `Context` for loading subsequent content. It will expire after 1 hour.
 * @method boolean getListOver() Obtain Whether to return all raw log query results. This parameter is meaningless if the query statement (Query) contains an SQL query.
 * @method void setListOver(boolean $ListOver) Set Whether to return all raw log query results. This parameter is meaningless if the query statement (Query) contains an SQL query.
 * @method boolean getAnalysis() Obtain Whether the return is the analysis result
 * @method void setAnalysis(boolean $Analysis) Set Whether the return is the analysis result
 * @method array getColNames() Obtain If `Analysis` is `true`, column name of the analysis result will be returned; otherwise, empty content will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setColNames(array $ColNames) Set If `Analysis` is `true`, column name of the analysis result will be returned; otherwise, empty content will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getResults() Obtain Log query result. If `Analysis` is `True`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResults(array $Results) Set Log query result. If `Analysis` is `True`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getAnalysisResults() Obtain Log analysis result. If `Analysis` is `False`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAnalysisResults(array $AnalysisResults) Set Log analysis result. If `Analysis` is `False`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getAnalysisRecords() Obtain New log analysis result, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAnalysisRecords(array $AnalysisRecords) Set New log analysis result, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain Column attribute of log analysis, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Column attribute of log analysis, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var string `Context` for loading subsequent content. It will expire after 1 hour.
     */
    public $Context;

    /**
     * @var boolean Whether to return all raw log query results. This parameter is meaningless if the query statement (Query) contains an SQL query.
     */
    public $ListOver;

    /**
     * @var boolean Whether the return is the analysis result
     */
    public $Analysis;

    /**
     * @var array If `Analysis` is `true`, column name of the analysis result will be returned; otherwise, empty content will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ColNames;

    /**
     * @var array Log query result. If `Analysis` is `True`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Results;

    /**
     * @var array Log analysis result. If `Analysis` is `False`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AnalysisResults;

    /**
     * @var array New log analysis result, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AnalysisRecords;

    /**
     * @var array Column attribute of log analysis, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Context `Context` for loading subsequent content. It will expire after 1 hour.
     * @param boolean $ListOver Whether to return all raw log query results. This parameter is meaningless if the query statement (Query) contains an SQL query.
     * @param boolean $Analysis Whether the return is the analysis result
     * @param array $ColNames If `Analysis` is `true`, column name of the analysis result will be returned; otherwise, empty content will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Results Log query result. If `Analysis` is `True`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $AnalysisResults Log analysis result. If `Analysis` is `False`, `null` may be returned
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $AnalysisRecords New log analysis result, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Columns Column attribute of log analysis, which will be valid if `UseNewAnalysis` is `true`
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("ColNames",$param) and $param["ColNames"] !== null) {
            $this->ColNames = $param["ColNames"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
