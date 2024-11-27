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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterHostStatistics request structure.
 *
 * @method string getDedicatedClusterId() Obtain Queried CDC id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Queried CDC id
 * @method string getHostId() Obtain Host id
 * @method void setHostId(string $HostId) Set Host id
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getPeriod() Obtain Time range accuracy, 1 min/5 min
 * @method void setPeriod(string $Period) Set Time range accuracy, 1 min/5 min
 */
class DescribeDedicatedClusterHostStatisticsRequest extends AbstractModel
{
    /**
     * @var string Queried CDC id
     */
    public $DedicatedClusterId;

    /**
     * @var string Host id
     */
    public $HostId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Time range accuracy, 1 min/5 min
     */
    public $Period;

    /**
     * @param string $DedicatedClusterId Queried CDC id
     * @param string $HostId Host id
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $Period Time range accuracy, 1 min/5 min
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
