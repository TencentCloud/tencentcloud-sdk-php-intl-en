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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled scaling configuration parameter
 *
 * @method string getPeriod() Obtain Scheduled scaling period
 * @method void setPeriod(string $Period) Set Scheduled scaling period
 * @method string getStartAt() Obtain Start time of scheduled scaling
 * @method void setStartAt(string $StartAt) Set Start time of scheduled scaling
 * @method integer getTargetReplicas() Obtain Scheduled scaling target node count, no more than the maximum node count defined in metric scaling
 * @method void setTargetReplicas(integer $TargetReplicas) Set Scheduled scaling target node count, no more than the maximum node count defined in metric scaling
 * @method string getCrontab() Obtain Scheduled scaling cron expression, no need to input
 * @method void setCrontab(string $Crontab) Set Scheduled scaling cron expression, no need to input
 */
class CloudNativeAPIGatewayStrategyCronScalerConfigParam extends AbstractModel
{
    /**
     * @var string Scheduled scaling period
     */
    public $Period;

    /**
     * @var string Start time of scheduled scaling
     */
    public $StartAt;

    /**
     * @var integer Scheduled scaling target node count, no more than the maximum node count defined in metric scaling
     */
    public $TargetReplicas;

    /**
     * @var string Scheduled scaling cron expression, no need to input
     */
    public $Crontab;

    /**
     * @param string $Period Scheduled scaling period
     * @param string $StartAt Start time of scheduled scaling
     * @param integer $TargetReplicas Scheduled scaling target node count, no more than the maximum node count defined in metric scaling
     * @param string $Crontab Scheduled scaling cron expression, no need to input
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
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }
    }
}
