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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogList request structure.
 *
 * @method string getSort() Obtain Sorting order (required). Valid values: `desc`, `asc`.
 * @method void setSort(string $Sort) Set Sorting order (required). Valid values: `desc`, `asc`.
 * @method string getActionType() Obtain This parameter is required. Valid values: `searchlog`, `histogram`.
 * @method void setActionType(string $ActionType) Set This parameter is required. Valid values: `searchlog`, `histogram`.
 * @method integer getID() Obtain Project ID (required)
 * @method void setID(integer $ID) Set Project ID (required)
 * @method string getStartTime() Obtain Start time (required)
 * @method void setStartTime(string $StartTime) Set Start time (required)
 * @method integer getLimit() Obtain The number of raw logs returned for a single query. This parameter is required. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of raw logs returned for a single query. This parameter is required. Maximum value: 100.
 * @method string getContext() Obtain Context, which is used to load more logs. Pass through the last `Context` value returned to get more log content (up to 10,000 raw logs). It will expire after 1 hour
 * @method void setContext(string $Context) Set Context, which is used to load more logs. Pass through the last `Context` value returned to get more log content (up to 10,000 raw logs). It will expire after 1 hour
 * @method string getQuery() Obtain Query statement, which is required and can contain up to 4,096 characters, such as "id:120001 AND type:\"log\"".
 * @method void setQuery(string $Query) Set Query statement, which is required and can contain up to 4,096 characters, such as "id:120001 AND type:\"log\"".
 * @method string getEndTime() Obtain End time (required)
 * @method void setEndTime(string $EndTime) Set End time (required)
 */
class DescribeLogListRequest extends AbstractModel
{
    /**
     * @var string Sorting order (required). Valid values: `desc`, `asc`.
     */
    public $Sort;

    /**
     * @var string This parameter is required. Valid values: `searchlog`, `histogram`.
     */
    public $ActionType;

    /**
     * @var integer Project ID (required)
     */
    public $ID;

    /**
     * @var string Start time (required)
     */
    public $StartTime;

    /**
     * @var integer The number of raw logs returned for a single query. This parameter is required. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Context, which is used to load more logs. Pass through the last `Context` value returned to get more log content (up to 10,000 raw logs). It will expire after 1 hour
     */
    public $Context;

    /**
     * @var string Query statement, which is required and can contain up to 4,096 characters, such as "id:120001 AND type:\"log\"".
     */
    public $Query;

    /**
     * @var string End time (required)
     */
    public $EndTime;

    /**
     * @param string $Sort Sorting order (required). Valid values: `desc`, `asc`.
     * @param string $ActionType This parameter is required. Valid values: `searchlog`, `histogram`.
     * @param integer $ID Project ID (required)
     * @param string $StartTime Start time (required)
     * @param integer $Limit The number of raw logs returned for a single query. This parameter is required. Maximum value: 100.
     * @param string $Context Context, which is used to load more logs. Pass through the last `Context` value returned to get more log content (up to 10,000 raw logs). It will expire after 1 hour
     * @param string $Query Query statement, which is required and can contain up to 4,096 characters, such as "id:120001 AND type:\"log\"".
     * @param string $EndTime End time (required)
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
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
