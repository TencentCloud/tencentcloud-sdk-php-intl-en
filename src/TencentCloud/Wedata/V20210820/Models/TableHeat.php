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
 * Heat value of the table in the past seven days (excluding today)
 *
 * @method string getTableId() Obtain Table IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDayTime() Obtain Statistics DateNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDayTime(string $DayTime) Set Statistics DateNote: This field may return null, indicating that no valid value can be obtained.
 * @method float getHeat() Obtain Popularity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHeat(float $Heat) Set Popularity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getMaxHeat() Obtain Maximum Popularity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMaxHeat(float $MaxHeat) Set Maximum Popularity
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableHeat extends AbstractModel
{
    /**
     * @var string Table IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Statistics DateNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DayTime;

    /**
     * @var float Popularity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Heat;

    /**
     * @var float Maximum Popularity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MaxHeat;

    /**
     * @param string $TableId Table IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DayTime Statistics DateNote: This field may return null, indicating that no valid value can be obtained.
     * @param float $Heat Popularity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $MaxHeat Maximum Popularity
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("Heat",$param) and $param["Heat"] !== null) {
            $this->Heat = $param["Heat"];
        }

        if (array_key_exists("MaxHeat",$param) and $param["MaxHeat"] !== null) {
            $this->MaxHeat = $param["MaxHeat"];
        }
    }
}
