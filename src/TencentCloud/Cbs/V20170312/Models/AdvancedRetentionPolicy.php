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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retention policy for scheduled snapshots. All four parameters are required.
 *
 * @method integer getDays() Obtain Retains one latest snapshot each day within `Days` days. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDays(integer $Days) Set Retains one latest snapshot each day within `Days` days. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWeeks() Obtain Retains one latest snapshot each week within `Weeks` weeks. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeeks(integer $Weeks) Set Retains one latest snapshot each week within `Weeks` weeks. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMonths() Obtain Retains one latest snapshot each month within `Months` months. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonths(integer $Months) Set Retains one latest snapshot each month within `Months` months. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getYears() Obtain Retains one latest snapshot each year within `Years` years. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setYears(integer $Years) Set Retains one latest snapshot each year within `Years` years. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdvancedRetentionPolicy extends AbstractModel
{
    /**
     * @var integer Retains one latest snapshot each day within `Days` days. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Days;

    /**
     * @var integer Retains one latest snapshot each week within `Weeks` weeks. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weeks;

    /**
     * @var integer Retains one latest snapshot each month within `Months` months. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Months;

    /**
     * @var integer Retains one latest snapshot each year within `Years` years. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Years;

    /**
     * @param integer $Days Retains one latest snapshot each day within `Days` days. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Weeks Retains one latest snapshot each week within `Weeks` weeks. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Months Retains one latest snapshot each month within `Months` months. Value range: [0, 100].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Years Retains one latest snapshot each year within `Years` years. Value range: [0, 100].
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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Weeks",$param) and $param["Weeks"] !== null) {
            $this->Weeks = $param["Weeks"];
        }

        if (array_key_exists("Months",$param) and $param["Months"] !== null) {
            $this->Months = $param["Months"];
        }

        if (array_key_exists("Years",$param) and $param["Years"] !== null) {
            $this->Years = $param["Years"];
        }
    }
}
