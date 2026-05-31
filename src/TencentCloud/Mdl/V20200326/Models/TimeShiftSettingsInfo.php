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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time-shift configuration. This parameter is valid only for HLS_ARCHIVE and DASH_ARCHIVE output groups.
 *
 * @method string getState() Obtain Whether to enable time shifting. Option [OPEN|CLOSE].
 * @method void setState(string $State) Set Whether to enable time shifting. Option [OPEN|CLOSE].
 * @method string getPlayDomain() Obtain Enable time-shift bound domain name.
 * @method void setPlayDomain(string $PlayDomain) Set Enable time-shift bound domain name.
 * @method integer getStartoverWindow() Obtain The time when time-shift replay starts, in seconds, range [300, 1209600], default value 300.
 * @method void setStartoverWindow(integer $StartoverWindow) Set The time when time-shift replay starts, in seconds, range [300, 1209600], default value 300.
 */
class TimeShiftSettingsInfo extends AbstractModel
{
    /**
     * @var string Whether to enable time shifting. Option [OPEN|CLOSE].
     */
    public $State;

    /**
     * @var string Enable time-shift bound domain name.
     */
    public $PlayDomain;

    /**
     * @var integer The time when time-shift replay starts, in seconds, range [300, 1209600], default value 300.
     */
    public $StartoverWindow;

    /**
     * @param string $State Whether to enable time shifting. Option [OPEN|CLOSE].
     * @param string $PlayDomain Enable time-shift bound domain name.
     * @param integer $StartoverWindow The time when time-shift replay starts, in seconds, range [300, 1209600], default value 300.
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StartoverWindow",$param) and $param["StartoverWindow"] !== null) {
            $this->StartoverWindow = $param["StartoverWindow"];
        }
    }
}
