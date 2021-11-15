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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteStreamLivePlan request structure.
 *
 * @method string getChannelId() Obtain ID of the channel whose event is to be deleted
 * @method void setChannelId(string $ChannelId) Set ID of the channel whose event is to be deleted
 * @method string getEventName() Obtain Name of the event to delete
 * @method void setEventName(string $EventName) Set Name of the event to delete
 */
class DeleteStreamLivePlanRequest extends AbstractModel
{
    /**
     * @var string ID of the channel whose event is to be deleted
     */
    public $ChannelId;

    /**
     * @var string Name of the event to delete
     */
    public $EventName;

    /**
     * @param string $ChannelId ID of the channel whose event is to be deleted
     * @param string $EventName Name of the event to delete
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }
    }
}
