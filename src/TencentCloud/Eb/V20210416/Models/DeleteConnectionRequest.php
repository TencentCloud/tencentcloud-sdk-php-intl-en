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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteConnection request structure.
 *
 * @method string getConnectionId() Obtain Connector ID
 * @method void setConnectionId(string $ConnectionId) Set Connector ID
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 */
class DeleteConnectionRequest extends AbstractModel
{
    /**
     * @var string Connector ID
     */
    public $ConnectionId;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @param string $ConnectionId Connector ID
     * @param string $EventBusId Event bus ID
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
        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }
    }
}
