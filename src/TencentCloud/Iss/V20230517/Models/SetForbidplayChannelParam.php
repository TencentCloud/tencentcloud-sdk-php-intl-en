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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Set the channel to forbid stream publishing. It has the Channel Id and enable fields.
 *
 * @method string getChannelId() Obtain Channel Id
 * @method void setChannelId(string $ChannelId) Set Channel Id
 * @method boolean getEnable() Obtain Whether to forbid stream pushing over the channel
 * @method void setEnable(boolean $Enable) Set Whether to forbid stream pushing over the channel
 */
class SetForbidplayChannelParam extends AbstractModel
{
    /**
     * @var string Channel Id
     */
    public $ChannelId;

    /**
     * @var boolean Whether to forbid stream pushing over the channel
     */
    public $Enable;

    /**
     * @param string $ChannelId Channel Id
     * @param boolean $Enable Whether to forbid stream pushing over the channel
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
