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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supplementary Plan Date Range
 *
 * @method string getStartDate() Obtain Start date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartDate(string $StartDate) Set Start date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndDate() Obtain End date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndDate(string $EndDate) Set End date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 */
class CreateMakeDatetimeInfo extends AbstractModel
{
    /**
     * @var string Start date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartDate;

    /**
     * @var string End date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndDate;

    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param string $StartDate Start date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndDate End date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
