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
 * MAU line chart data
 *
 * @method integer getDataTime() Obtain Year and month: 2024-12
 * @method void setDataTime(integer $DataTime) Set Year and month: 2024-12
 * @method integer getMAUCount() Obtain Value
 * @method void setMAUCount(integer $MAUCount) Set Value
 * @method integer getUpdateTime() Obtain Data update time, only available when MAUCount is greater than 0.
 * @method void setUpdateTime(integer $UpdateTime) Set Data update time, only available when MAUCount is greater than 0.
 */
class MAUChartData extends AbstractModel
{
    /**
     * @var integer Year and month: 2024-12
     */
    public $DataTime;

    /**
     * @var integer Value
     */
    public $MAUCount;

    /**
     * @var integer Data update time, only available when MAUCount is greater than 0.
     */
    public $UpdateTime;

    /**
     * @param integer $DataTime Year and month: 2024-12
     * @param integer $MAUCount Value
     * @param integer $UpdateTime Data update time, only available when MAUCount is greater than 0.
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
