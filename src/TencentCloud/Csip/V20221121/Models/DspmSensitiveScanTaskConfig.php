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
 * dspm sensitive data scan task configuration
 *
 * @method boolean getIsScheduled() Obtain Whether it is a scheduled task
 * @method void setIsScheduled(boolean $IsScheduled) Set Whether it is a scheduled task
 * @method DspmScheduleConfig getScheduleConfig() Obtain Scheduling cycle configuration
 * @method void setScheduleConfig(DspmScheduleConfig $ScheduleConfig) Set Scheduling cycle configuration
 * @method boolean getIsRunAtOnce() Obtain Whether to scan now
 * @method void setIsRunAtOnce(boolean $IsRunAtOnce) Set Whether to scan now
 */
class DspmSensitiveScanTaskConfig extends AbstractModel
{
    /**
     * @var boolean Whether it is a scheduled task
     */
    public $IsScheduled;

    /**
     * @var DspmScheduleConfig Scheduling cycle configuration
     */
    public $ScheduleConfig;

    /**
     * @var boolean Whether to scan now
     */
    public $IsRunAtOnce;

    /**
     * @param boolean $IsScheduled Whether it is a scheduled task
     * @param DspmScheduleConfig $ScheduleConfig Scheduling cycle configuration
     * @param boolean $IsRunAtOnce Whether to scan now
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
        if (array_key_exists("IsScheduled",$param) and $param["IsScheduled"] !== null) {
            $this->IsScheduled = $param["IsScheduled"];
        }

        if (array_key_exists("ScheduleConfig",$param) and $param["ScheduleConfig"] !== null) {
            $this->ScheduleConfig = new DspmScheduleConfig();
            $this->ScheduleConfig->deserialize($param["ScheduleConfig"]);
        }

        if (array_key_exists("IsRunAtOnce",$param) and $param["IsRunAtOnce"] !== null) {
            $this->IsRunAtOnce = $param["IsRunAtOnce"];
        }
    }
}
