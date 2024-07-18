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
 * Audio codec configuration.
 *
 * @method string getChannelMode() Obtain Channel configuration, optional values: MONO (mono), STEREO (two-channel), 5.1 (surround).
 * @method void setChannelMode(string $ChannelMode) Set Channel configuration, optional values: MONO (mono), STEREO (two-channel), 5.1 (surround).
 * @method string getProfile() Obtain Level in aac case, optional values: "LC" "HE-AAC" "HE-AACV2".
 * @method void setProfile(string $Profile) Set Level in aac case, optional values: "LC" "HE-AAC" "HE-AACV2".
 */
class AudioCodecDetail extends AbstractModel
{
    /**
     * @var string Channel configuration, optional values: MONO (mono), STEREO (two-channel), 5.1 (surround).
     */
    public $ChannelMode;

    /**
     * @var string Level in aac case, optional values: "LC" "HE-AAC" "HE-AACV2".
     */
    public $Profile;

    /**
     * @param string $ChannelMode Channel configuration, optional values: MONO (mono), STEREO (two-channel), 5.1 (surround).
     * @param string $Profile Level in aac case, optional values: "LC" "HE-AAC" "HE-AACV2".
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
        if (array_key_exists("ChannelMode",$param) and $param["ChannelMode"] !== null) {
            $this->ChannelMode = $param["ChannelMode"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
