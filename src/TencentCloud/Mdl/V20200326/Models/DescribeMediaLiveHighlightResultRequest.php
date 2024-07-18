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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaLiveHighlightResult request structure.
 *
 * @method string getId() Obtain Media live broadcast channel ID.
 * @method void setId(string $Id) Set Media live broadcast channel ID.
 * @method integer getStartTime() Obtain Query start time, unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
 * @method void setStartTime(integer $StartTime) Set Query start time, unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
 * @method integer getEndTime() Obtain Query end time, Unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
 * @method void setEndTime(integer $EndTime) Set Query end time, Unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
 * @method integer getPageNum() Obtain Paging query page number.
 * @method void setPageNum(integer $PageNum) Set Paging query page number.
 * @method integer getPageSize() Obtain Paging query the size of each page.
 * @method void setPageSize(integer $PageSize) Set Paging query the size of each page.
 */
class DescribeMediaLiveHighlightResultRequest extends AbstractModel
{
    /**
     * @var string Media live broadcast channel ID.
     */
    public $Id;

    /**
     * @var integer Query start time, unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
     */
    public $StartTime;

    /**
     * @var integer Query end time, Unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
     */
    public $EndTime;

    /**
     * @var integer Paging query page number.
     */
    public $PageNum;

    /**
     * @var integer Paging query the size of each page.
     */
    public $PageSize;

    /**
     * @param string $Id Media live broadcast channel ID.
     * @param integer $StartTime Query start time, unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
     * @param integer $EndTime Query end time, Unix timestamp, query data within the last 6 hours by default, and the maximum query range supports the last 7 days.
     * @param integer $PageNum Paging query page number.
     * @param integer $PageSize Paging query the size of each page.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
