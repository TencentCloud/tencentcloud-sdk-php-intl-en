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
 * ModifyAlarmRiskStatus request structure.
 *
 * @method array getAlarmRiskIdSet() Obtain Alarm or risk id
 * @method void setAlarmRiskIdSet(array $AlarmRiskIdSet) Set Alarm or risk id
 * @method integer getAlarmRiskType() Obtain Risk or alarm status. 1: alarm, 2: risk
 * @method void setAlarmRiskType(integer $AlarmRiskType) Set Risk or alarm status. 1: alarm, 2: risk
 * @method integer getHandleStatus() Obtain Handling status
 * @method void setHandleStatus(integer $HandleStatus) Set Handling status
 */
class ModifyAlarmRiskStatusRequest extends AbstractModel
{
    /**
     * @var array Alarm or risk id
     */
    public $AlarmRiskIdSet;

    /**
     * @var integer Risk or alarm status. 1: alarm, 2: risk
     */
    public $AlarmRiskType;

    /**
     * @var integer Handling status
     */
    public $HandleStatus;

    /**
     * @param array $AlarmRiskIdSet Alarm or risk id
     * @param integer $AlarmRiskType Risk or alarm status. 1: alarm, 2: risk
     * @param integer $HandleStatus Handling status
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
        if (array_key_exists("AlarmRiskIdSet",$param) and $param["AlarmRiskIdSet"] !== null) {
            $this->AlarmRiskIdSet = [];
            foreach ($param["AlarmRiskIdSet"] as $key => $value){
                $obj = new CosAlarmRiskIdInfo();
                $obj->deserialize($value);
                array_push($this->AlarmRiskIdSet, $obj);
            }
        }

        if (array_key_exists("AlarmRiskType",$param) and $param["AlarmRiskType"] !== null) {
            $this->AlarmRiskType = $param["AlarmRiskType"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }
    }
}
