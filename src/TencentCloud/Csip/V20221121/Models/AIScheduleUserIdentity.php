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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User identity information of the AI assistant
 *
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getUin() Obtain <p>Account Uin</p>
 * @method void setUin(string $Uin) Set <p>Account Uin</p>
 * @method string getSubUin() Obtain <p>Sub-account uin</p>
 * @method void setSubUin(string $SubUin) Set <p>Sub-account uin</p>
 * @method string getUserId() Obtain <p>uid</p>
 * @method void setUserId(string $UserId) Set <p>uid</p>
 * @method string getBotId() Obtain <p>Robot ID</p>
 * @method void setBotId(string $BotId) Set <p>Robot ID</p>
 * @method string getChatId() Obtain <p>Chat ID.</p>
 * @method void setChatId(string $ChatId) Set <p>Chat ID.</p>
 * @method string getChannel() Obtain <p>Channel identifier, for example, wecom / qq / wx / feishu / dingtalk / cloud</p>
 * @method void setChannel(string $Channel) Set <p>Channel identifier, for example, wecom / qq / wx / feishu / dingtalk / cloud</p>
 */
class AIScheduleUserIdentity extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>Account Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>Sub-account uin</p>
     */
    public $SubUin;

    /**
     * @var string <p>uid</p>
     */
    public $UserId;

    /**
     * @var string <p>Robot ID</p>
     */
    public $BotId;

    /**
     * @var string <p>Chat ID.</p>
     */
    public $ChatId;

    /**
     * @var string <p>Channel identifier, for example, wecom / qq / wx / feishu / dingtalk / cloud</p>
     */
    public $Channel;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $Uin <p>Account Uin</p>
     * @param string $SubUin <p>Sub-account uin</p>
     * @param string $UserId <p>uid</p>
     * @param string $BotId <p>Robot ID</p>
     * @param string $ChatId <p>Chat ID.</p>
     * @param string $Channel <p>Channel identifier, for example, wecom / qq / wx / feishu / dingtalk / cloud</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
