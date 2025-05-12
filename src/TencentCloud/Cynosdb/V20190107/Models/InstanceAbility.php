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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getIsSupportForceRestart() Obtain Specifies whether the instance supports forced reboot. valid values: yes (supported), no (unsupported).
 * @method void setIsSupportForceRestart(string $IsSupportForceRestart) Set Specifies whether the instance supports forced reboot. valid values: yes (supported), no (unsupported).
 * @method string getNonsupportForceRestartReason() Obtain Specifies the causes for not supporting forced reboot.
 * @method void setNonsupportForceRestartReason(string $NonsupportForceRestartReason) Set Specifies the causes for not supporting forced reboot.
 */
class InstanceAbility extends AbstractModel
{
    /**
     * @var string Specifies whether the instance supports forced reboot. valid values: yes (supported), no (unsupported).
     */
    public $IsSupportForceRestart;

    /**
     * @var string Specifies the causes for not supporting forced reboot.
     */
    public $NonsupportForceRestartReason;

    /**
     * @param string $IsSupportForceRestart Specifies whether the instance supports forced reboot. valid values: yes (supported), no (unsupported).
     * @param string $NonsupportForceRestartReason Specifies the causes for not supporting forced reboot.
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
        if (array_key_exists("IsSupportForceRestart",$param) and $param["IsSupportForceRestart"] !== null) {
            $this->IsSupportForceRestart = $param["IsSupportForceRestart"];
        }

        if (array_key_exists("NonsupportForceRestartReason",$param) and $param["NonsupportForceRestartReason"] !== null) {
            $this->NonsupportForceRestartReason = $param["NonsupportForceRestartReason"];
        }
    }
}
