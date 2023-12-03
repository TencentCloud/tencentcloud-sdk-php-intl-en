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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog request structure.
 *
 * @method integer getStartTime() Obtain Query start time (UNIX in ms)
 * @method void setStartTime(integer $StartTime) Set Query start time (UNIX in ms)
 * @method integer getEndTime() Obtain Query end time (UNIX in ms)
 * @method void setEndTime(integer $EndTime) Set Query end time (UNIX in ms)
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method integer getPage() Obtain Page number
 * @method void setPage(integer $Page) Set Page number
 * @method integer getLimit() Obtain Logs returned per page
 * @method void setLimit(integer $Limit) Set Logs returned per page
 * @method array getFilter() Obtain Filter conditions
 * @method void setFilter(array $Filter) Set Filter conditions
 * @method array getOrderFields() Obtain Sorting array
 * @method void setOrderFields(array $OrderFields) Set Sorting array
 * @method string getOrderBy() Obtain Sorting order. Values: `asc` (earliest first); `desc` (latest first)
 * @method void setOrderBy(string $OrderBy) Set Sorting order. Values: `asc` (earliest first); `desc` (latest first)
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer Query start time (UNIX in ms)
     */
    public $StartTime;

    /**
     * @var integer Query end time (UNIX in ms)
     */
    public $EndTime;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var integer Page number
     */
    public $Page;

    /**
     * @var integer Logs returned per page
     */
    public $Limit;

    /**
     * @var array Filter conditions
     */
    public $Filter;

    /**
     * @var array Sorting array
     */
    public $OrderFields;

    /**
     * @var string Sorting order. Values: `asc` (earliest first); `desc` (latest first)
     */
    public $OrderBy;

    /**
     * @param integer $StartTime Query start time (UNIX in ms)
     * @param integer $EndTime Query end time (UNIX in ms)
     * @param string $EventBusId Event bus ID
     * @param integer $Page Page number
     * @param integer $Limit Logs returned per page
     * @param array $Filter Filter conditions
     * @param array $OrderFields Sorting array
     * @param string $OrderBy Sorting order. Values: `asc` (earliest first); `desc` (latest first)
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = $param["OrderFields"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
