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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on alarms associated with the node
 *
 * @method string getAlarmId() Obtain Table names of IDs of alarms associated with the node. Separate multiple pairs with commas. Example: t1:id1,t2:id2
 * @method void setAlarmId(string $AlarmId) Set Table names of IDs of alarms associated with the node. Separate multiple pairs with commas. Example: t1:id1,t2:id2
 * @method integer getStatus() Obtain Alarm status. This parameter takes effect when this node is an alarm node.
 * @method void setStatus(integer $Status) Set Alarm status. This parameter takes effect when this node is an alarm node.
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string Table names of IDs of alarms associated with the node. Separate multiple pairs with commas. Example: t1:id1,t2:id2
     */
    public $AlarmId;

    /**
     * @var integer Alarm status. This parameter takes effect when this node is an alarm node.
     */
    public $Status;

    /**
     * @param string $AlarmId Table names of IDs of alarms associated with the node. Separate multiple pairs with commas. Example: t1:id1,t2:id2
     * @param integer $Status Alarm status. This parameter takes effect when this node is an alarm node.
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
