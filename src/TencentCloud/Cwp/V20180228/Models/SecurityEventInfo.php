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
 * List of security event statistics
 *
 * @method integer getEventCnt() Obtain Number of security events
 * @method void setEventCnt(integer $EventCnt) Set Number of security events
 * @method integer getUuidCnt() Obtain Number of affected machines
 * @method void setUuidCnt(integer $UuidCnt) Set Number of affected machines
 */
class SecurityEventInfo extends AbstractModel
{
    /**
     * @var integer Number of security events
     */
    public $EventCnt;

    /**
     * @var integer Number of affected machines
     */
    public $UuidCnt;

    /**
     * @param integer $EventCnt Number of security events
     * @param integer $UuidCnt Number of affected machines
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
        if (array_key_exists("EventCnt",$param) and $param["EventCnt"] !== null) {
            $this->EventCnt = $param["EventCnt"];
        }

        if (array_key_exists("UuidCnt",$param) and $param["UuidCnt"] !== null) {
            $this->UuidCnt = $param["UuidCnt"];
        }
    }
}
