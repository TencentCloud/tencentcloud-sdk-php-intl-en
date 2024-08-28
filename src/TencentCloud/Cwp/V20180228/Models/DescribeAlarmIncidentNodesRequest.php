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
 * DescribeAlarmIncidentNodes request structure.
 *
 * @method string getUuid() Obtain Machine UUID
 * @method void setUuid(string $Uuid) Set Machine UUID
 * @method string getAlarmVid() Obtain Alarm VID
 * @method void setAlarmVid(string $AlarmVid) Set Alarm VID
 * @method integer getAlarmTime() Obtain Alarm time
 * @method void setAlarmTime(integer $AlarmTime) Set Alarm time
 * @method integer getTableId() Obtain Alarm source table ID
 * @method void setTableId(integer $TableId) Set Alarm source table ID
 */
class DescribeAlarmIncidentNodesRequest extends AbstractModel
{
    /**
     * @var string Machine UUID
     */
    public $Uuid;

    /**
     * @var string Alarm VID
     */
    public $AlarmVid;

    /**
     * @var integer Alarm time
     */
    public $AlarmTime;

    /**
     * @var integer Alarm source table ID
     */
    public $TableId;

    /**
     * @param string $Uuid Machine UUID
     * @param string $AlarmVid Alarm VID
     * @param integer $AlarmTime Alarm time
     * @param integer $TableId Alarm source table ID
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("AlarmVid",$param) and $param["AlarmVid"] !== null) {
            $this->AlarmVid = $param["AlarmVid"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }
    }
}
