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
 * List of rules for determining brute force cracking
 *
 * @method integer getTimeRange() Obtain Timeframe of the brute force cracking event (unit: second)
 * @method void setTimeRange(integer $TimeRange) Set Timeframe of the brute force cracking event (unit: second)
 * @method integer getLoginFailTimes() Obtain Number of failed attempts during the brute force cracking event
 * @method void setLoginFailTimes(integer $LoginFailTimes) Set Number of failed attempts during the brute force cracking event
 * @method boolean getEnable() Obtain Whether the rule is empty. If yes, fill in the default rule.
 * @method void setEnable(boolean $Enable) Set Whether the rule is empty. If yes, fill in the default rule.
 * @method integer getTimeRangeDefault() Obtain Occurrence time range of brute force cracking events, in seconds (default rule)
 * @method void setTimeRangeDefault(integer $TimeRangeDefault) Set Occurrence time range of brute force cracking events, in seconds (default rule)
 * @method integer getLoginFailTimesDefault() Obtain Number of failed brute force cracking events (default rule)
 * @method void setLoginFailTimesDefault(integer $LoginFailTimesDefault) Set Number of failed brute force cracking events (default rule)
 */
class BruteAttackRuleList extends AbstractModel
{
    /**
     * @var integer Timeframe of the brute force cracking event (unit: second)
     */
    public $TimeRange;

    /**
     * @var integer Number of failed attempts during the brute force cracking event
     */
    public $LoginFailTimes;

    /**
     * @var boolean Whether the rule is empty. If yes, fill in the default rule.
     */
    public $Enable;

    /**
     * @var integer Occurrence time range of brute force cracking events, in seconds (default rule)
     */
    public $TimeRangeDefault;

    /**
     * @var integer Number of failed brute force cracking events (default rule)
     */
    public $LoginFailTimesDefault;

    /**
     * @param integer $TimeRange Timeframe of the brute force cracking event (unit: second)
     * @param integer $LoginFailTimes Number of failed attempts during the brute force cracking event
     * @param boolean $Enable Whether the rule is empty. If yes, fill in the default rule.
     * @param integer $TimeRangeDefault Occurrence time range of brute force cracking events, in seconds (default rule)
     * @param integer $LoginFailTimesDefault Number of failed brute force cracking events (default rule)
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
