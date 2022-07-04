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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The stream information.
 *
 * @method MixUserInfo getUserInfo() Obtain The user information.
 * @method void setUserInfo(MixUserInfo $UserInfo) Set The user information.
 * @method integer getStreamType() Obtain The stream type. 0: Camera; 1: Screen sharing. If you do not pass this parameter, 0 will be used.
 * @method void setStreamType(integer $StreamType) Set The stream type. 0: Camera; 1: Screen sharing. If you do not pass this parameter, 0 will be used.
 */
class UserMediaStream extends AbstractModel
{
    /**
     * @var MixUserInfo The user information.
     */
    public $UserInfo;

    /**
     * @var integer The stream type. 0: Camera; 1: Screen sharing. If you do not pass this parameter, 0 will be used.
     */
    public $StreamType;

    /**
     * @param MixUserInfo $UserInfo The user information.
     * @param integer $StreamType The stream type. 0: Camera; 1: Screen sharing. If you do not pass this parameter, 0 will be used.
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new MixUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }
    }
}
