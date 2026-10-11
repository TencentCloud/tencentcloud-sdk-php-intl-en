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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless HBase prepaid settings.
 *
 * @method Period getPeriod() Obtain Time.
 * @method void setPeriod(Period $Period) Set Time.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: 0 (notifies before expiration but does not trigger auto-renewal), 1 (notifies before expiration and triggers auto-renewal), and 2 (does not notify before expiration and does not trigger auto-renewal).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: 0 (notifies before expiration but does not trigger auto-renewal), 1 (notifies before expiration and triggers auto-renewal), and 2 (does not notify before expiration and does not trigger auto-renewal).
 */
class PrePaySetting extends AbstractModel
{
    /**
     * @var Period Time.
     */
    public $Period;

    /**
     * @var integer Auto-renewal flag. Valid values: 0 (notifies before expiration but does not trigger auto-renewal), 1 (notifies before expiration and triggers auto-renewal), and 2 (does not notify before expiration and does not trigger auto-renewal).
     */
    public $AutoRenewFlag;

    /**
     * @param Period $Period Time.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: 0 (notifies before expiration but does not trigger auto-renewal), 1 (notifies before expiration and triggers auto-renewal), and 2 (does not notify before expiration and does not trigger auto-renewal).
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = new Period();
            $this->Period->deserialize($param["Period"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
