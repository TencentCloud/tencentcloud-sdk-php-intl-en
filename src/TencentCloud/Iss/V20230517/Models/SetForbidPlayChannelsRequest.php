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
 * SetForbidPlayChannels request structure.
 *
 * @method array getChannels() Obtain Channel parameters to be disabled. Up to 200 channels can be set at a time.
 * @method void setChannels(array $Channels) Set Channel parameters to be disabled. Up to 200 channels can be set at a time.
 * @method string getUserId() Obtain User uin, which can be the uin of a sub-user or a root user
 * @method void setUserId(string $UserId) Set User uin, which can be the uin of a sub-user or a root user
 */
class SetForbidPlayChannelsRequest extends AbstractModel
{
    /**
     * @var array Channel parameters to be disabled. Up to 200 channels can be set at a time.
     */
    public $Channels;

    /**
     * @var string User uin, which can be the uin of a sub-user or a root user
     */
    public $UserId;

    /**
     * @param array $Channels Channel parameters to be disabled. Up to 200 channels can be set at a time.
     * @param string $UserId User uin, which can be the uin of a sub-user or a root user
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
        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new SetForbidplayChannelParam();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
