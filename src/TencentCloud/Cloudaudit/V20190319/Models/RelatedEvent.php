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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of associated events
 *
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method string getEventTime() Obtain Operation time
 * @method void setEventTime(string $EventTime) Set Operation time
 * @method integer getOperateUin() Obtain ID of the operator account
 * @method void setOperateUin(integer $OperateUin) Set ID of the operator account
 * @method string getEventReqId() Obtain CloudAudit event ID
 * @method void setEventReqId(string $EventReqId) Set CloudAudit event ID
 */
class RelatedEvent extends AbstractModel
{
    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var string Operation time
     */
    public $EventTime;

    /**
     * @var integer ID of the operator account
     */
    public $OperateUin;

    /**
     * @var string CloudAudit event ID
     */
    public $EventReqId;

    /**
     * @param string $EventName Event name
     * @param string $EventTime Operation time
     * @param integer $OperateUin ID of the operator account
     * @param string $EventReqId CloudAudit event ID
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("EventReqId",$param) and $param["EventReqId"] !== null) {
            $this->EventReqId = $param["EventReqId"];
        }
    }
}
