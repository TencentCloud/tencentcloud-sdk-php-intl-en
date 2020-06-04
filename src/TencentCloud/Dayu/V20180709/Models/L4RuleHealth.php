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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule health check parameter
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getEnable() Obtain 1: enabled, 0: disabled
 * @method void setEnable(integer $Enable) Set 1: enabled, 0: disabled
 * @method integer getTimeOut() Obtain Response timeout period in seconds
 * @method void setTimeOut(integer $TimeOut) Set Response timeout period in seconds
 * @method integer getInterval() Obtain Detection interval in seconds, which must be greater than the response timeout period
 * @method void setInterval(integer $Interval) Set Detection interval in seconds, which must be greater than the response timeout period
 * @method integer getKickNum() Obtain Unhealthy threshold in times
 * @method void setKickNum(integer $KickNum) Set Unhealthy threshold in times
 * @method integer getAliveNum() Obtain Healthy threshold in times.
 * @method void setAliveNum(integer $AliveNum) Set Healthy threshold in times.
 */
class L4RuleHealth extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer 1: enabled, 0: disabled
     */
    public $Enable;

    /**
     * @var integer Response timeout period in seconds
     */
    public $TimeOut;

    /**
     * @var integer Detection interval in seconds, which must be greater than the response timeout period
     */
    public $Interval;

    /**
     * @var integer Unhealthy threshold in times
     */
    public $KickNum;

    /**
     * @var integer Healthy threshold in times.
     */
    public $AliveNum;

    /**
     * @param string $RuleId Rule ID
     * @param integer $Enable 1: enabled, 0: disabled
     * @param integer $TimeOut Response timeout period in seconds
     * @param integer $Interval Detection interval in seconds, which must be greater than the response timeout period
     * @param integer $KickNum Unhealthy threshold in times
     * @param integer $AliveNum Healthy threshold in times.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }
    }
}
