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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trigger log
 *
 * @method integer getId() Obtain Log ID
 * @method void setId(integer $Id) Set Log ID
 * @method integer getTriggerId() Obtain Trigger ID
 * @method void setTriggerId(integer $TriggerId) Set Trigger ID
 * @method string getEventType() Obtain Event type
 * @method void setEventType(string $EventType) Set Event type
 * @method string getNotifyType() Obtain Notification type
 * @method void setNotifyType(string $NotifyType) Set Notification type
 * @method string getDetail() Obtain Details
 * @method void setDetail(string $Detail) Set Details
 * @method string getCreationTime() Obtain Creation time
 * @method void setCreationTime(string $CreationTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 */
class WebhookTriggerLog extends AbstractModel
{
    /**
     * @var integer Log ID
     */
    public $Id;

    /**
     * @var integer Trigger ID
     */
    public $TriggerId;

    /**
     * @var string Event type
     */
    public $EventType;

    /**
     * @var string Notification type
     */
    public $NotifyType;

    /**
     * @var string Details
     */
    public $Detail;

    /**
     * @var string Creation time
     */
    public $CreationTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @param integer $Id Log ID
     * @param integer $TriggerId Trigger ID
     * @param string $EventType Event type
     * @param string $NotifyType Notification type
     * @param string $Detail Details
     * @param string $CreationTime Creation time
     * @param string $UpdateTime Update time
     * @param string $Status Status
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
