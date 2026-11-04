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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppSummaryList request structure.
 *
 * @method string getSpaceId() Obtain Space ID (required)
 * @method void setSpaceId(string $SpaceId) Set Space ID (required)
 * @method array getFilterList() Obtain Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - AppStatus: APP STATUS, enumeration value, exact match (APP_STATUS_OFFLINE=1/APP_STATUS_RUNNING=2/APP_STATUS_DISABLED=3) - AppMode: application MODE, enumeration value, exact match (APP_MODE_STANDARD=1/APP_MODE_AGENT=2/APP_MODE_SINGLE_WORKFLOW=3/APP_MODE_CLAW_AGENT=4)
 * @method void setFilterList(array $FilterList) Set Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - AppStatus: APP STATUS, enumeration value, exact match (APP_STATUS_OFFLINE=1/APP_STATUS_RUNNING=2/APP_STATUS_DISABLED=3) - AppMode: application MODE, enumeration value, exact match (APP_MODE_STANDARD=1/APP_MODE_AGENT=2/APP_MODE_SINGLE_WORKFLOW=3/APP_MODE_CLAW_AGENT=4)
 * @method integer getPageNumber() Obtain Page number, starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 0.
 * @method integer getPageSize() Obtain Number of items per page. Maximum: 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Maximum: 100.
 * @method string getQuery() Obtain Fuzzy query
 * @method void setQuery(string $Query) Set Fuzzy query
 */
class DescribeAppSummaryListRequest extends AbstractModel
{
    /**
     * @var string Space ID (required)
     */
    public $SpaceId;

    /**
     * @var array Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - AppStatus: APP STATUS, enumeration value, exact match (APP_STATUS_OFFLINE=1/APP_STATUS_RUNNING=2/APP_STATUS_DISABLED=3) - AppMode: application MODE, enumeration value, exact match (APP_MODE_STANDARD=1/APP_MODE_AGENT=2/APP_MODE_SINGLE_WORKFLOW=3/APP_MODE_CLAW_AGENT=4)
     */
    public $FilterList;

    /**
     * @var integer Page number, starting from 0.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Maximum: 100.
     */
    public $PageSize;

    /**
     * @var string Fuzzy query
     */
    public $Query;

    /**
     * @param string $SpaceId Space ID (required)
     * @param array $FilterList Filter criteria (multiple filters are in an AND relationship with each other, AND multiple Values of the same Filter are in an OR relationship): - AppStatus: APP STATUS, enumeration value, exact match (APP_STATUS_OFFLINE=1/APP_STATUS_RUNNING=2/APP_STATUS_DISABLED=3) - AppMode: application MODE, enumeration value, exact match (APP_MODE_STANDARD=1/APP_MODE_AGENT=2/APP_MODE_SINGLE_WORKFLOW=3/APP_MODE_CLAW_AGENT=4)
     * @param integer $PageNumber Page number, starting from 0.
     * @param integer $PageSize Number of items per page. Maximum: 100.
     * @param string $Query Fuzzy query
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
