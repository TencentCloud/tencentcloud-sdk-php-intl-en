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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic monitoring metrics
 *
 * @method string getTime() Obtain Time point: s
 * @method void setTime(string $Time) Set Time point: s
 * @method float getBusinessMetrics() Obtain Business Metric (bps/ms/%)
 * @method void setBusinessMetrics(float $BusinessMetrics) Set Business Metric (bps/ms/%)
 * @method array getSlotNetInfo() Obtain Network interface status info
 * @method void setSlotNetInfo(array $SlotNetInfo) Set Network interface status info
 */
class MonitorData extends AbstractModel
{
    /**
     * @var string Time point: s
     */
    public $Time;

    /**
     * @var float Business Metric (bps/ms/%)
     */
    public $BusinessMetrics;

    /**
     * @var array Network interface status info
     */
    public $SlotNetInfo;

    /**
     * @param string $Time Time point: s
     * @param float $BusinessMetrics Business Metric (bps/ms/%)
     * @param array $SlotNetInfo Network interface status info
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("BusinessMetrics",$param) and $param["BusinessMetrics"] !== null) {
            $this->BusinessMetrics = $param["BusinessMetrics"];
        }

        if (array_key_exists("SlotNetInfo",$param) and $param["SlotNetInfo"] !== null) {
            $this->SlotNetInfo = [];
            foreach ($param["SlotNetInfo"] as $key => $value){
                $obj = new SlotNetInfo();
                $obj->deserialize($value);
                array_push($this->SlotNetInfo, $obj);
            }
        }
    }
}
