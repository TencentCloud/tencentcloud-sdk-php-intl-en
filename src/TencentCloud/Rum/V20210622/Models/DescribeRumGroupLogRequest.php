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
 * DescribeRumGroupLog request structure.
 *
 * @method string getOrderBy() Obtain Sorting order (required). Valid values: `desc`, `asc`.
 * @method void setOrderBy(string $OrderBy) Set Sorting order (required). Valid values: `desc`, `asc`.
 * @method string getStartTime() Obtain Start time (required)
 * @method void setStartTime(string $StartTime) Set Start time (required)
 * @method integer getLimit() Obtain The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
 * @method integer getPage() Obtain Page number
 * @method void setPage(integer $Page) Set Page number
 * @method string getQuery() Obtain Query statement, which is required and can contain up to 4,096 characters.
 * @method void setQuery(string $Query) Set Query statement, which is required and can contain up to 4,096 characters.
 * @method string getEndTime() Obtain End time (required)
 * @method void setEndTime(string $EndTime) Set End time (required)
 * @method integer getID() Obtain Project ID (required)
 * @method void setID(integer $ID) Set Project ID (required)
 * @method string getGroupField() Obtain Aggregate field
 * @method void setGroupField(string $GroupField) Set Aggregate field
 */
class DescribeRumGroupLogRequest extends AbstractModel
{
    /**
     * @var string Sorting order (required). Valid values: `desc`, `asc`.
     */
    public $OrderBy;

    /**
     * @var string Start time (required)
     */
    public $StartTime;

    /**
     * @var integer The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Page number
     */
    public $Page;

    /**
     * @var string Query statement, which is required and can contain up to 4,096 characters.
     */
    public $Query;

    /**
     * @var string End time (required)
     */
    public $EndTime;

    /**
     * @var integer Project ID (required)
     */
    public $ID;

    /**
     * @var string Aggregate field
     */
    public $GroupField;

    /**
     * @param string $OrderBy Sorting order (required). Valid values: `desc`, `asc`.
     * @param string $StartTime Start time (required)
     * @param integer $Limit The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
     * @param integer $Page Page number
     * @param string $Query Query statement, which is required and can contain up to 4,096 characters.
     * @param string $EndTime End time (required)
     * @param integer $ID Project ID (required)
     * @param string $GroupField Aggregate field
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("GroupField",$param) and $param["GroupField"] !== null) {
            $this->GroupField = $param["GroupField"];
        }
    }
}
