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
 * Alarm or risk id information
 *
 * @method integer getAlarmRiskId() Obtain Alarm id
 * @method void setAlarmRiskId(integer $AlarmRiskId) Set Alarm id
 * @method integer getAppId() Obtain Tenant ID
 * @method void setAppId(integer $AppId) Set Tenant ID
 */
class CosAlarmRiskIdInfo extends AbstractModel
{
    /**
     * @var integer Alarm id
     */
    public $AlarmRiskId;

    /**
     * @var integer Tenant ID
     */
    public $AppId;

    /**
     * @param integer $AlarmRiskId Alarm id
     * @param integer $AppId Tenant ID
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
        if (array_key_exists("AlarmRiskId",$param) and $param["AlarmRiskId"] !== null) {
            $this->AlarmRiskId = $param["AlarmRiskId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
