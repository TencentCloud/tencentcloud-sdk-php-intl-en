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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The users whose streams are mixed.
 *
 * @method MixUserInfo getUserInfo() Obtain The user information.
 * @method void setUserInfo(MixUserInfo $UserInfo) Set The user information.
 * @method integer getSoundLevel() Obtain Audio mix volume adjustment. value ranges from 0 to 100. 100 indicates the original uplink volume. the default value is 100 if left blank. a lower value results in a lower volume.
Note: this parameter takes effect only when configured in the volume allowlist and is unavailable in other scenarios.
 * @method void setSoundLevel(integer $SoundLevel) Set Audio mix volume adjustment. value ranges from 0 to 100. 100 indicates the original uplink volume. the default value is 100 if left blank. a lower value results in a lower volume.
Note: this parameter takes effect only when configured in the volume allowlist and is unavailable in other scenarios.
 */
class McuUserInfoParams extends AbstractModel
{
    /**
     * @var MixUserInfo The user information.
     */
    public $UserInfo;

    /**
     * @var integer Audio mix volume adjustment. value ranges from 0 to 100. 100 indicates the original uplink volume. the default value is 100 if left blank. a lower value results in a lower volume.
Note: this parameter takes effect only when configured in the volume allowlist and is unavailable in other scenarios.
     */
    public $SoundLevel;

    /**
     * @param MixUserInfo $UserInfo The user information.
     * @param integer $SoundLevel Audio mix volume adjustment. value ranges from 0 to 100. 100 indicates the original uplink volume. the default value is 100 if left blank. a lower value results in a lower volume.
Note: this parameter takes effect only when configured in the volume allowlist and is unavailable in other scenarios.
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

        if (array_key_exists("SoundLevel",$param) and $param["SoundLevel"] !== null) {
            $this->SoundLevel = $param["SoundLevel"];
        }
    }
}
