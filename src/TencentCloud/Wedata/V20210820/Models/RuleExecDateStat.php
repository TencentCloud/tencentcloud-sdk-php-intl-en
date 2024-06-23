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
 * Overview Trend Results
 *
 * @method string getStatDate() Obtain Statistics Date
 * @method void setStatDate(string $StatDate) Set Statistics Date
 * @method integer getAlarmCnt() Obtain Number of Alerts
 * @method void setAlarmCnt(integer $AlarmCnt) Set Number of Alerts
 * @method integer getPipelineCnt() Obtain Number of blocked processes
 * @method void setPipelineCnt(integer $PipelineCnt) Set Number of blocked processes
 */
class RuleExecDateStat extends AbstractModel
{
    /**
     * @var string Statistics Date
     */
    public $StatDate;

    /**
     * @var integer Number of Alerts
     */
    public $AlarmCnt;

    /**
     * @var integer Number of blocked processes
     */
    public $PipelineCnt;

    /**
     * @param string $StatDate Statistics Date
     * @param integer $AlarmCnt Number of Alerts
     * @param integer $PipelineCnt Number of blocked processes
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
        if (array_key_exists("StatDate",$param) and $param["StatDate"] !== null) {
            $this->StatDate = $param["StatDate"];
        }

        if (array_key_exists("AlarmCnt",$param) and $param["AlarmCnt"] !== null) {
            $this->AlarmCnt = $param["AlarmCnt"];
        }

        if (array_key_exists("PipelineCnt",$param) and $param["PipelineCnt"] !== null) {
            $this->PipelineCnt = $param["PipelineCnt"];
        }
    }
}
