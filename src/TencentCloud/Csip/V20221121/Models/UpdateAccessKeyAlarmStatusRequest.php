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
 * UpdateAccessKeyAlarmStatus request structure.
 *
 * @method integer getStatus() Obtain Status. 0: unprocessed; 1: processed; 2: ignored
 * @method void setStatus(integer $Status) Set Status. 0: unprocessed; 1: processed; 2: ignored
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getAlarmIDList() Obtain List of alarm IDs
 * @method void setAlarmIDList(array $AlarmIDList) Set List of alarm IDs
 * @method array getRiskIDList() Obtain Risk ID list
 * @method void setRiskIDList(array $RiskIDList) Set Risk ID list
 */
class UpdateAccessKeyAlarmStatusRequest extends AbstractModel
{
    /**
     * @var integer Status. 0: unprocessed; 1: processed; 2: ignored
     */
    public $Status;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array List of alarm IDs
     */
    public $AlarmIDList;

    /**
     * @var array Risk ID list
     */
    public $RiskIDList;

    /**
     * @param integer $Status Status. 0: unprocessed; 1: processed; 2: ignored
     * @param array $MemberId Group Account Member ID
     * @param array $AlarmIDList List of alarm IDs
     * @param array $RiskIDList Risk ID list
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AlarmIDList",$param) and $param["AlarmIDList"] !== null) {
            $this->AlarmIDList = $param["AlarmIDList"];
        }

        if (array_key_exists("RiskIDList",$param) and $param["RiskIDList"] !== null) {
            $this->RiskIDList = $param["RiskIDList"];
        }
    }
}
