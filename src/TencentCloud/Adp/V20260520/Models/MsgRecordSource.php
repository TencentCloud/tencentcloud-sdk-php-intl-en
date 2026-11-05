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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MsgRecordSource
 *
 * @method integer getChannelType() Obtain Channel type for dialogue message access: 0=not specified, 1=agent, 2=experience page (Tencent Cloud), 3=evaluation dialogue, 4=experience page (phone number), 5=dialogue API connection, 6=evaluation task dialogue, 10=workflow debugging, 10000=WeChat official account, 10001=WeChat service account, 10002=WeCom app, 10003=web components, 10004=WeChat Customer Service, 10005=WeChat mini program, 10006=Yuanqi, 10007=App Treasure, 10008=Yuanbao, 10009=WeCom intelligent bot, 10010=Yuanqi API, 10011=LINE, 10012=Telegram, 10100=PC manager, 20001=honor Intelligent Agent platform, 20002=Xiaomi app store; user_id (string) is the unique ID of the visitor under this channel.
 * @method void setChannelType(integer $ChannelType) Set Channel type for dialogue message access: 0=not specified, 1=agent, 2=experience page (Tencent Cloud), 3=evaluation dialogue, 4=experience page (phone number), 5=dialogue API connection, 6=evaluation task dialogue, 10=workflow debugging, 10000=WeChat official account, 10001=WeChat service account, 10002=WeCom app, 10003=web components, 10004=WeChat Customer Service, 10005=WeChat mini program, 10006=Yuanqi, 10007=App Treasure, 10008=Yuanbao, 10009=WeCom intelligent bot, 10010=Yuanqi API, 10011=LINE, 10012=Telegram, 10100=PC manager, 20001=honor Intelligent Agent platform, 20002=Xiaomi app store; user_id (string) is the unique ID of the visitor under this channel.
 * @method string getFromId() Obtain User ID.
 * @method void setFromId(string $FromId) Set User ID.
 * @method integer getFromType() Obtain User source type of the message sender: 1=user (visitor/C-end user), 2=robot (AI reply), 3=agent (human customer service); from_id (string) is the unique user ID under this source type.
 * @method void setFromType(integer $FromType) Set User source type of the message sender: 1=user (visitor/C-end user), 2=robot (AI reply), 3=agent (human customer service); from_id (string) is the unique user ID under this source type.
 * @method string getUserAvatar() Obtain User profile photo
 * @method void setUserAvatar(string $UserAvatar) Set User profile photo
 * @method string getUserId() Obtain Visitor ID.
 * @method void setUserId(string $UserId) Set Visitor ID.
 * @method string getUserNickname() Obtain Visitor name
 * @method void setUserNickname(string $UserNickname) Set Visitor name
 */
class MsgRecordSource extends AbstractModel
{
    /**
     * @var integer Channel type for dialogue message access: 0=not specified, 1=agent, 2=experience page (Tencent Cloud), 3=evaluation dialogue, 4=experience page (phone number), 5=dialogue API connection, 6=evaluation task dialogue, 10=workflow debugging, 10000=WeChat official account, 10001=WeChat service account, 10002=WeCom app, 10003=web components, 10004=WeChat Customer Service, 10005=WeChat mini program, 10006=Yuanqi, 10007=App Treasure, 10008=Yuanbao, 10009=WeCom intelligent bot, 10010=Yuanqi API, 10011=LINE, 10012=Telegram, 10100=PC manager, 20001=honor Intelligent Agent platform, 20002=Xiaomi app store; user_id (string) is the unique ID of the visitor under this channel.
     */
    public $ChannelType;

    /**
     * @var string User ID.
     */
    public $FromId;

    /**
     * @var integer User source type of the message sender: 1=user (visitor/C-end user), 2=robot (AI reply), 3=agent (human customer service); from_id (string) is the unique user ID under this source type.
     */
    public $FromType;

    /**
     * @var string User profile photo
     */
    public $UserAvatar;

    /**
     * @var string Visitor ID.
     */
    public $UserId;

    /**
     * @var string Visitor name
     */
    public $UserNickname;

    /**
     * @param integer $ChannelType Channel type for dialogue message access: 0=not specified, 1=agent, 2=experience page (Tencent Cloud), 3=evaluation dialogue, 4=experience page (phone number), 5=dialogue API connection, 6=evaluation task dialogue, 10=workflow debugging, 10000=WeChat official account, 10001=WeChat service account, 10002=WeCom app, 10003=web components, 10004=WeChat Customer Service, 10005=WeChat mini program, 10006=Yuanqi, 10007=App Treasure, 10008=Yuanbao, 10009=WeCom intelligent bot, 10010=Yuanqi API, 10011=LINE, 10012=Telegram, 10100=PC manager, 20001=honor Intelligent Agent platform, 20002=Xiaomi app store; user_id (string) is the unique ID of the visitor under this channel.
     * @param string $FromId User ID.
     * @param integer $FromType User source type of the message sender: 1=user (visitor/C-end user), 2=robot (AI reply), 3=agent (human customer service); from_id (string) is the unique user ID under this source type.
     * @param string $UserAvatar User profile photo
     * @param string $UserId Visitor ID.
     * @param string $UserNickname Visitor name
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
        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("FromId",$param) and $param["FromId"] !== null) {
            $this->FromId = $param["FromId"];
        }

        if (array_key_exists("FromType",$param) and $param["FromType"] !== null) {
            $this->FromType = $param["FromType"];
        }

        if (array_key_exists("UserAvatar",$param) and $param["UserAvatar"] !== null) {
            $this->UserAvatar = $param["UserAvatar"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserNickname",$param) and $param["UserNickname"] !== null) {
            $this->UserNickname = $param["UserNickname"];
        }
    }
}
