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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchClsLog request structure.
 *
 * @method string getLogsetId() Obtain ID of logset to be queried
 * @method void setLogsetId(string $LogsetId) Set ID of logset to be queried
 * @method string getTopicIds() Obtain List of IDs of log topics to be queried, separated by commas
 * @method void setTopicIds(string $TopicIds) Set List of IDs of log topics to be queried, separated by commas
 * @method string getStartTime() Obtain Query start time in the format of YYYY-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) Set Query start time in the format of YYYY-mm-dd HH:MM:SS
 * @method string getEndTime() Obtain Query end time in the format of YYYY-mm-dd HH:MM:SS
 * @method void setEndTime(string $EndTime) Set Query end time in the format of YYYY-mm-dd HH:MM:SS
 * @method integer getLimit() Obtain Number of logs to be returned at a time. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of logs to be returned at a time. Maximum value: 100
 * @method string getChannel() Obtain Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
 * @method void setChannel(string $Channel) Set Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
 * @method string getQuery() Obtain Query statement. For more details, see [https://intl.cloud.tencent.com/document/product/614/16982?from_cn_redirect=1].
 * @method void setQuery(string $Query) Set Query statement. For more details, see [https://intl.cloud.tencent.com/document/product/614/16982?from_cn_redirect=1].
 * @method string getContext() Obtain This field is used when loading more results. Pass through the last `context` value returned to get more log content. Up to 10,000 logs can be obtained through the cursor. Please narrow down the time range as much as possible.
 * @method void setContext(string $Context) Set This field is used when loading more results. Pass through the last `context` value returned to get more log content. Up to 10,000 logs can be obtained through the cursor. Please narrow down the time range as much as possible.
 * @method string getSort() Obtain Sorting by log time. Valid values: asc (ascending), desc (descending). Default value: desc
 * @method void setSort(string $Sort) Set Sorting by log time. Valid values: asc (ascending), desc (descending). Default value: desc
 */
class SearchClsLogRequest extends AbstractModel
{
    /**
     * @var string ID of logset to be queried
     */
    public $LogsetId;

    /**
     * @var string List of IDs of log topics to be queried, separated by commas
     */
    public $TopicIds;

    /**
     * @var string Query start time in the format of YYYY-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string Query end time in the format of YYYY-mm-dd HH:MM:SS
     */
    public $EndTime;

    /**
     * @var integer Number of logs to be returned at a time. Maximum value: 100
     */
    public $Limit;

    /**
     * @var string Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
     */
    public $Channel;

    /**
     * @var string Query statement. For more details, see [https://intl.cloud.tencent.com/document/product/614/16982?from_cn_redirect=1].
     */
    public $Query;

    /**
     * @var string This field is used when loading more results. Pass through the last `context` value returned to get more log content. Up to 10,000 logs can be obtained through the cursor. Please narrow down the time range as much as possible.
     */
    public $Context;

    /**
     * @var string Sorting by log time. Valid values: asc (ascending), desc (descending). Default value: desc
     */
    public $Sort;

    /**
     * @param string $LogsetId ID of logset to be queried
     * @param string $TopicIds List of IDs of log topics to be queried, separated by commas
     * @param string $StartTime Query start time in the format of YYYY-mm-dd HH:MM:SS
     * @param string $EndTime Query end time in the format of YYYY-mm-dd HH:MM:SS
     * @param integer $Limit Number of logs to be returned at a time. Maximum value: 100
     * @param string $Channel Specifies whether to access CDN or ECDN. Valid values: `cdn` (default) and `ecdn`.
     * @param string $Query Query statement. For more details, see [https://intl.cloud.tencent.com/document/product/614/16982?from_cn_redirect=1].
     * @param string $Context This field is used when loading more results. Pass through the last `context` value returned to get more log content. Up to 10,000 logs can be obtained through the cursor. Please narrow down the time range as much as possible.
     * @param string $Sort Sorting by log time. Valid values: asc (ascending), desc (descending). Default value: desc
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
