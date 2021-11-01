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
 * @method string getTopicId() Obtain Log topic ID to be queried
 * @method void setTopicId(string $TopicId) Set Log topic ID to be queried
 * @method integer getFrom() Obtain Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method string getQuery() Obtain Query statement. Maximum length: 4096
 * @method void setQuery(string $Query) Set Query statement. Maximum length: 4096
 * @method integer getLimit() Obtain Number of raw logs returned in a single query. Maximum value: 100. If the query statement (Query) contains an SQL query, you need to specify the number of SQL query results in `Query`. For more information, please visit https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1
 * @method void setLimit(integer $Limit) Set Number of raw logs returned in a single query. Maximum value: 100. If the query statement (Query) contains an SQL query, you need to specify the number of SQL query results in `Query`. For more information, please visit https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1
 * @method string getContext() Obtain This field is used to load more logs. Pass through the last `Context` value returned to get more log content. It will expire after 1 hour.
 * @method void setContext(string $Context) Set This field is used to load more logs. Pass through the last `Context` value returned to get more log content. It will expire after 1 hour.
 * @method string getSort() Obtain Order of the logs sorted by time returned by the log API. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
 * @method void setSort(string $Sort) Set Order of the logs sorted by time returned by the log API. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
 * @method boolean getUseNewAnalysis() Obtain If the value is `true`, the new search method will be used, and the response parameters `AnalysisRecords` and `Columns` will be valid. If the value is `false`, the old search method will be used, and `AnalysisResults` and `ColNames` will be valid.
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set If the value is `true`, the new search method will be used, and the response parameters `AnalysisRecords` and `Columns` will be valid. If the value is `false`, the old search method will be used, and `AnalysisResults` and `ColNames` will be valid.
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var string Log topic ID to be queried
     */
    public $TopicId;

    /**
     * @var integer Start time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Query statement. Maximum length: 4096
     */
    public $Query;

    /**
     * @var integer Number of raw logs returned in a single query. Maximum value: 100. If the query statement (Query) contains an SQL query, you need to specify the number of SQL query results in `Query`. For more information, please visit https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1
     */
    public $Limit;

    /**
     * @var string This field is used to load more logs. Pass through the last `Context` value returned to get more log content. It will expire after 1 hour.
     */
    public $Context;

    /**
     * @var string Order of the logs sorted by time returned by the log API. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
     */
    public $Sort;

    /**
     * @var boolean If the value is `true`, the new search method will be used, and the response parameters `AnalysisRecords` and `Columns` will be valid. If the value is `false`, the old search method will be used, and `AnalysisResults` and `ColNames` will be valid.
     */
    public $UseNewAnalysis;

    /**
     * @param string $TopicId Log topic ID to be queried
     * @param integer $From Start time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param integer $To End time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param string $Query Query statement. Maximum length: 4096
     * @param integer $Limit Number of raw logs returned in a single query. Maximum value: 100. If the query statement (Query) contains an SQL query, you need to specify the number of SQL query results in `Query`. For more information, please visit https://intl.cloud.tencent.com/document/product/614/58977?from_cn_redirect=1
     * @param string $Context This field is used to load more logs. Pass through the last `Context` value returned to get more log content. It will expire after 1 hour.
     * @param string $Sort Order of the logs sorted by time returned by the log API. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
     * @param boolean $UseNewAnalysis If the value is `true`, the new search method will be used, and the response parameters `AnalysisRecords` and `Columns` will be valid. If the value is `false`, the old search method will be used, and `AnalysisResults` and `ColNames` will be valid.
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
