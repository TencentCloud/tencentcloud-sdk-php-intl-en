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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability defense trend page, which includes plugin status and attack defense trends. Trends are stored in three arrays of equal length, with elements corresponding one-to-one. If a certain day is missed, there will be missing data.
 *
 * @method integer getEnable() Obtain Defense switch: 0 - disable; 1 - enable
 * @method void setEnable(integer $Enable) Set Defense switch: 0 - disable; 1 - enable
 * @method integer getDefendHostCount() Obtain Number of hosts with defense enabled
 * @method void setDefendHostCount(integer $DefendHostCount) Set Number of hosts with defense enabled
 * @method integer getExceptionCount() Obtain Number of plugin exceptions
 * @method void setExceptionCount(integer $ExceptionCount) Set Number of plugin exceptions
 * @method array getAttackCounts() Obtain Daily attack trends
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackCounts(array $AttackCounts) Set Daily attack trends
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDefendCounts() Obtain Daily defense trends
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefendCounts(array $DefendCounts) Set Daily defense trends
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDate() Obtain Date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDate(array $Date) Set Date
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulDefenceOverview extends AbstractModel
{
    /**
     * @var integer Defense switch: 0 - disable; 1 - enable
     */
    public $Enable;

    /**
     * @var integer Number of hosts with defense enabled
     */
    public $DefendHostCount;

    /**
     * @var integer Number of plugin exceptions
     */
    public $ExceptionCount;

    /**
     * @var array Daily attack trends
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackCounts;

    /**
     * @var array Daily defense trends
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefendCounts;

    /**
     * @var array Date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Date;

    /**
     * @param integer $Enable Defense switch: 0 - disable; 1 - enable
     * @param integer $DefendHostCount Number of hosts with defense enabled
     * @param integer $ExceptionCount Number of plugin exceptions
     * @param array $AttackCounts Daily attack trends
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DefendCounts Daily defense trends
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Date Date
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("ExceptionCount",$param) and $param["ExceptionCount"] !== null) {
            $this->ExceptionCount = $param["ExceptionCount"];
        }

        if (array_key_exists("AttackCounts",$param) and $param["AttackCounts"] !== null) {
            $this->AttackCounts = $param["AttackCounts"];
        }

        if (array_key_exists("DefendCounts",$param) and $param["DefendCounts"] !== null) {
            $this->DefendCounts = $param["DefendCounts"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
