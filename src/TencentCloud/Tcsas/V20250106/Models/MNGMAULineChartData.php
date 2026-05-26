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
 * Mini game MAU line chart data.
 *
 * @method integer getDataTime() Obtain Date in YYYYMM format. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataTime(integer $DataTime) Set Date in YYYYMM format. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMAUCount() Obtain MAU count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMAUCount(integer $MAUCount) Set MAU count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Last modified time.
 * @method void setUpdateTime(integer $UpdateTime) Set Last modified time.
 */
class MNGMAULineChartData extends AbstractModel
{
    /**
     * @var integer Date in YYYYMM format. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataTime;

    /**
     * @var integer MAU count.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MAUCount;

    /**
     * @var integer Last modified time.
     */
    public $UpdateTime;

    /**
     * @param integer $DataTime Date in YYYYMM format. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MAUCount MAU count.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Last modified time.
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
