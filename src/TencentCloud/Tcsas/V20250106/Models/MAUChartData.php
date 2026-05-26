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
 * MAU line chart data.
 *
 * @method integer getDataTime() Obtain Date in YYYYMM format.
 * @method void setDataTime(integer $DataTime) Set Date in YYYYMM format.
 * @method integer getMAUCount() Obtain MAU count.
 * @method void setMAUCount(integer $MAUCount) Set MAU count.
 * @method integer getUpdateTime() Obtain Data update time. Only has a value when MAUCount is greater than 0.
 * @method void setUpdateTime(integer $UpdateTime) Set Data update time. Only has a value when MAUCount is greater than 0.
 */
class MAUChartData extends AbstractModel
{
    /**
     * @var integer Date in YYYYMM format.
     */
    public $DataTime;

    /**
     * @var integer MAU count.
     */
    public $MAUCount;

    /**
     * @var integer Data update time. Only has a value when MAUCount is greater than 0.
     */
    public $UpdateTime;

    /**
     * @param integer $DataTime Date in YYYYMM format.
     * @param integer $MAUCount MAU count.
     * @param integer $UpdateTime Data update time. Only has a value when MAUCount is greater than 0.
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
