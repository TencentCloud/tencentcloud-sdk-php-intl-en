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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWatermarkDetections request structure.
 *
 * @method string getStartTime() Obtain Start time, 2022-12-04T16:50:00+08:00
 * @method void setStartTime(string $StartTime) Set Start time, 2022-12-04T16:50:00+08:00
 * @method string getEndTime() Obtain End time, 2022-12-04T17:50:00+08:00, maximum supported query range of 7 days
 * @method void setEndTime(string $EndTime) Set End time, 2022-12-04T17:50:00+08:00, maximum supported query range of 7 days
 * @method integer getPageNum() Obtain Number of pages queried
 * @method void setPageNum(integer $PageNum) Set Number of pages queried
 * @method integer getPageSize() Obtain Single page quantity, 1-100
 * @method void setPageSize(integer $PageSize) Set Single page quantity, 1-100
 */
class DescribeWatermarkDetectionsRequest extends AbstractModel
{
    /**
     * @var string Start time, 2022-12-04T16:50:00+08:00
     */
    public $StartTime;

    /**
     * @var string End time, 2022-12-04T17:50:00+08:00, maximum supported query range of 7 days
     */
    public $EndTime;

    /**
     * @var integer Number of pages queried
     */
    public $PageNum;

    /**
     * @var integer Single page quantity, 1-100
     */
    public $PageSize;

    /**
     * @param string $StartTime Start time, 2022-12-04T16:50:00+08:00
     * @param string $EndTime End time, 2022-12-04T17:50:00+08:00, maximum supported query range of 7 days
     * @param integer $PageNum Number of pages queried
     * @param integer $PageSize Single page quantity, 1-100
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

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
