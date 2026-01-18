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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Line chart data
 *
 * @method integer getDataTime() Obtain Year-month date data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataTime(integer $DataTime) Set Year-month date data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMAUCount() Obtain MAU data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMAUCount(string $MAUCount) Set MAU data
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MAULineChartData extends AbstractModel
{
    /**
     * @var integer Year-month date data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataTime;

    /**
     * @var string MAU data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MAUCount;

    /**
     * @param integer $DataTime Year-month date data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MAUCount MAU data
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("MAUCount",$param) and $param["MAUCount"] !== null) {
            $this->MAUCount = $param["MAUCount"];
        }
    }
}
