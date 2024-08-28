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
 * CreateBanWhiteList request structure.
 *
 * @method BanWhiteList getRules() Obtain Block rules
 * @method void setRules(BanWhiteList $Rules) Set Block rules
 * @method integer getEventId() Obtain Event list ID, which is passed when the event list is allowlisted. After it is successfully allowlisted, the events in the list will be marked as whitelisted.
 * @method void setEventId(integer $EventId) Set Event list ID, which is passed when the event list is allowlisted. After it is successfully allowlisted, the events in the list will be marked as whitelisted.
 */
class CreateBanWhiteListRequest extends AbstractModel
{
    /**
     * @var BanWhiteList Block rules
     */
    public $Rules;

    /**
     * @var integer Event list ID, which is passed when the event list is allowlisted. After it is successfully allowlisted, the events in the list will be marked as whitelisted.
     */
    public $EventId;

    /**
     * @param BanWhiteList $Rules Block rules
     * @param integer $EventId Event list ID, which is passed when the event list is allowlisted. After it is successfully allowlisted, the events in the list will be marked as whitelisted.
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new BanWhiteList();
            $this->Rules->deserialize($param["Rules"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
