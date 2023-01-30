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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trojan trend details
 *
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method integer getPendingEventCount() Obtain Total number of pending events
 * @method void setPendingEventCount(integer $PendingEventCount) Set Total number of pending events
 * @method integer getRiskContainerCount() Obtain Total number of containers at risk
 * @method void setRiskContainerCount(integer $RiskContainerCount) Set Total number of containers at risk
 * @method integer getEventCount() Obtain Total number of events
 * @method void setEventCount(integer $EventCount) Set Total number of events
 * @method integer getIsolateEventCount() Obtain Total number of isolated events
 * @method void setIsolateEventCount(integer $IsolateEventCount) Set Total number of isolated events
 */
class VirusTendencyInfo extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var integer Total number of pending events
     */
    public $PendingEventCount;

    /**
     * @var integer Total number of containers at risk
     */
    public $RiskContainerCount;

    /**
     * @var integer Total number of events
     */
    public $EventCount;

    /**
     * @var integer Total number of isolated events
     */
    public $IsolateEventCount;

    /**
     * @param string $Date Date
     * @param integer $PendingEventCount Total number of pending events
     * @param integer $RiskContainerCount Total number of containers at risk
     * @param integer $EventCount Total number of events
     * @param integer $IsolateEventCount Total number of isolated events
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PendingEventCount",$param) and $param["PendingEventCount"] !== null) {
            $this->PendingEventCount = $param["PendingEventCount"];
        }

        if (array_key_exists("RiskContainerCount",$param) and $param["RiskContainerCount"] !== null) {
            $this->RiskContainerCount = $param["RiskContainerCount"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("IsolateEventCount",$param) and $param["IsolateEventCount"] !== null) {
            $this->IsolateEventCount = $param["IsolateEventCount"];
        }
    }
}
