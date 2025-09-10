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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule execution time structure
 *
 * @method array getTimed() Obtain Time parameter for scheduled execution.
 * @method void setTimed(array $Timed) Set Time parameter for scheduled execution.
 * @method array getCron() Obtain Time parameter for periodic execution.
 * @method void setCron(array $Cron) Set Time parameter for periodic execution.
 * @method string getTimeTZone() Obtain Specifies the time zone.
 * @method void setTimeTZone(string $TimeTZone) Set Specifies the time zone.
 */
class JobDateTime extends AbstractModel
{
    /**
     * @var array Time parameter for scheduled execution.
     */
    public $Timed;

    /**
     * @var array Time parameter for periodic execution.
     */
    public $Cron;

    /**
     * @var string Specifies the time zone.
     */
    public $TimeTZone;

    /**
     * @param array $Timed Time parameter for scheduled execution.
     * @param array $Cron Time parameter for periodic execution.
     * @param string $TimeTZone Specifies the time zone.
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
        if (array_key_exists("Timed",$param) and $param["Timed"] !== null) {
            $this->Timed = [];
            foreach ($param["Timed"] as $key => $value){
                $obj = new TimedJob();
                $obj->deserialize($value);
                array_push($this->Timed, $obj);
            }
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = [];
            foreach ($param["Cron"] as $key => $value){
                $obj = new CronJob();
                $obj->deserialize($value);
                array_push($this->Cron, $obj);
            }
        }

        if (array_key_exists("TimeTZone",$param) and $param["TimeTZone"] !== null) {
            $this->TimeTZone = $param["TimeTZone"];
        }
    }
}
