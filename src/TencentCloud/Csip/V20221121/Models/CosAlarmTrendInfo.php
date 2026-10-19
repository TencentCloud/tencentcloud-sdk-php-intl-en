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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos daily alerts/risk information
 *
 * @method string getCurrentDateStr() Obtain Current date in string format
 * @method void setCurrentDateStr(string $CurrentDateStr) Set Current date in string format
 * @method integer getCurrentDayCount() Obtain Total count for the current date
 * @method void setCurrentDayCount(integer $CurrentDayCount) Set Total count for the current date
 * @method array getCurrentDayOverView() Obtain Alarm category details on the day
 * @method void setCurrentDayOverView(array $CurrentDayOverView) Set Alarm category details on the day
 */
class CosAlarmTrendInfo extends AbstractModel
{
    /**
     * @var string Current date in string format
     */
    public $CurrentDateStr;

    /**
     * @var integer Total count for the current date
     */
    public $CurrentDayCount;

    /**
     * @var array Alarm category details on the day
     */
    public $CurrentDayOverView;

    /**
     * @param string $CurrentDateStr Current date in string format
     * @param integer $CurrentDayCount Total count for the current date
     * @param array $CurrentDayOverView Alarm category details on the day
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
        if (array_key_exists("CurrentDateStr",$param) and $param["CurrentDateStr"] !== null) {
            $this->CurrentDateStr = $param["CurrentDateStr"];
        }

        if (array_key_exists("CurrentDayCount",$param) and $param["CurrentDayCount"] !== null) {
            $this->CurrentDayCount = $param["CurrentDayCount"];
        }

        if (array_key_exists("CurrentDayOverView",$param) and $param["CurrentDayOverView"] !== null) {
            $this->CurrentDayOverView = [];
            foreach ($param["CurrentDayOverView"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->CurrentDayOverView, $obj);
            }
        }
    }
}
