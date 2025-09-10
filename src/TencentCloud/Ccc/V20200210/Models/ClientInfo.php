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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Terminal information of the logged-in agent.
 *
 * @method string getClientType() Obtain Endpoint type for login. "Web" means Web workbench. "WeChatMiniProgram" refers to wechat mini program.
 * @method void setClientType(string $ClientType) Set Endpoint type for login. "Web" means Web workbench. "WeChatMiniProgram" refers to wechat mini program.
 * @method boolean getIsConnected() Obtain Whether the currently logged-in endpoint is in the foreground. if the endpoint is Web, the value is true. if the endpoint is WeChatMiniProgram, true indicates the wechat mini program is open, and false indicates it is in the background.
 * @method void setIsConnected(boolean $IsConnected) Set Whether the currently logged-in endpoint is in the foreground. if the endpoint is Web, the value is true. if the endpoint is WeChatMiniProgram, true indicates the wechat mini program is open, and false indicates it is in the background.
 */
class ClientInfo extends AbstractModel
{
    /**
     * @var string Endpoint type for login. "Web" means Web workbench. "WeChatMiniProgram" refers to wechat mini program.
     */
    public $ClientType;

    /**
     * @var boolean Whether the currently logged-in endpoint is in the foreground. if the endpoint is Web, the value is true. if the endpoint is WeChatMiniProgram, true indicates the wechat mini program is open, and false indicates it is in the background.
     */
    public $IsConnected;

    /**
     * @param string $ClientType Endpoint type for login. "Web" means Web workbench. "WeChatMiniProgram" refers to wechat mini program.
     * @param boolean $IsConnected Whether the currently logged-in endpoint is in the foreground. if the endpoint is Web, the value is true. if the endpoint is WeChatMiniProgram, true indicates the wechat mini program is open, and false indicates it is in the background.
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
        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("IsConnected",$param) and $param["IsConnected"] !== null) {
            $this->IsConnected = $param["IsConnected"];
        }
    }
}
