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
 * List of rules for determining brute force cracking
 *
 * @method integer getTimeRange() Obtain <p>Time range of the brute force cracking event (unit: second)</p>
 * @method void setTimeRange(integer $TimeRange) Set <p>Time range of the brute force cracking event (unit: second)</p>
 * @method integer getLoginFailTimes() Obtain <p>Number of failed blasting incidents</p>
 * @method void setLoginFailTimes(integer $LoginFailTimes) Set <p>Number of failed blasting incidents</p>
 * @method boolean getEnable() Obtain <p>Whether the rule is empty. If yes, fill in the default rule.</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether the rule is empty. If yes, fill in the default rule.</p>
 * @method integer getTimeRangeDefault() Obtain <p>Occurrence time range of brute force cracking events, in seconds (default rule)</p>
 * @method void setTimeRangeDefault(integer $TimeRangeDefault) Set <p>Occurrence time range of brute force cracking events, in seconds (default rule)</p>
 * @method integer getLoginFailTimesDefault() Obtain <p>Number of failed blasting incidents (default rule)</p>
 * @method void setLoginFailTimesDefault(integer $LoginFailTimesDefault) Set <p>Number of failed blasting incidents (default rule)</p>
 */
class BruteAttackRuleList extends AbstractModel
{
    /**
     * @var integer <p>Time range of the brute force cracking event (unit: second)</p>
     */
    public $TimeRange;

    /**
     * @var integer <p>Number of failed blasting incidents</p>
     */
    public $LoginFailTimes;

    /**
     * @var boolean <p>Whether the rule is empty. If yes, fill in the default rule.</p>
     */
    public $Enable;

    /**
     * @var integer <p>Occurrence time range of brute force cracking events, in seconds (default rule)</p>
     */
    public $TimeRangeDefault;

    /**
     * @var integer <p>Number of failed blasting incidents (default rule)</p>
     */
    public $LoginFailTimesDefault;

    /**
     * @param integer $TimeRange <p>Time range of the brute force cracking event (unit: second)</p>
     * @param integer $LoginFailTimes <p>Number of failed blasting incidents</p>
     * @param boolean $Enable <p>Whether the rule is empty. If yes, fill in the default rule.</p>
     * @param integer $TimeRangeDefault <p>Occurrence time range of brute force cracking events, in seconds (default rule)</p>
     * @param integer $LoginFailTimesDefault <p>Number of failed blasting incidents (default rule)</p>
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("LoginFailTimes",$param) and $param["LoginFailTimes"] !== null) {
            $this->LoginFailTimes = $param["LoginFailTimes"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TimeRangeDefault",$param) and $param["TimeRangeDefault"] !== null) {
            $this->TimeRangeDefault = $param["TimeRangeDefault"];
        }

        if (array_key_exists("LoginFailTimesDefault",$param) and $param["LoginFailTimesDefault"] !== null) {
            $this->LoginFailTimesDefault = $param["LoginFailTimesDefault"];
        }
    }
}
