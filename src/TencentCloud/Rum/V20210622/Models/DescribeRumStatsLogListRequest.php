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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumStatsLogList request structure.
 *
 * @method string getStartTime() Obtain Start time (required)
 * @method void setStartTime(string $StartTime) Set Start time (required)
 * @method integer getLimit() Obtain The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
 * @method string getQuery() Obtain Query statement, which is required and can contain up to 4,096 characters.
 * @method void setQuery(string $Query) Set Query statement, which is required and can contain up to 4,096 characters.
 * @method string getEndTime() Obtain End time (required)
 * @method void setEndTime(string $EndTime) Set End time (required)
 * @method integer getID() Obtain Project ID (required)
 * @method void setID(integer $ID) Set Project ID (required)
 */
class DescribeRumStatsLogListRequest extends AbstractModel
{
    /**
     * @var string Start time (required)
     */
    public $StartTime;

    /**
     * @var integer The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
     */
    public $Limit;

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
     * @param string $StartTime Start time (required)
     * @param integer $Limit The number of raw logs returned for a single query. This parameter is required. Maximum value: `100`.
     * @param string $Query Query statement, which is required and can contain up to 4,096 characters.
     * @param string $EndTime End time (required)
     * @param integer $ID Project ID (required)
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
    }
}
