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
 * Unprocessed security event statistics
 *
 * @method integer getEventsNum() Obtain Number of events
 * @method void setEventsNum(integer $EventsNum) Set Number of events
 * @method integer getMachineAffectNum() Obtain Number of affected hosts
 * @method void setMachineAffectNum(integer $MachineAffectNum) Set Number of affected hosts
 */
class EventStat extends AbstractModel
{
    /**
     * @var integer Number of events
     */
    public $EventsNum;

    /**
     * @var integer Number of affected hosts
     */
    public $MachineAffectNum;

    /**
     * @param integer $EventsNum Number of events
     * @param integer $MachineAffectNum Number of affected hosts
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
        if (array_key_exists("EventsNum",$param) and $param["EventsNum"] !== null) {
            $this->EventsNum = $param["EventsNum"];
        }

        if (array_key_exists("MachineAffectNum",$param) and $param["MachineAffectNum"] !== null) {
            $this->MachineAffectNum = $param["MachineAffectNum"];
        }
    }
}
