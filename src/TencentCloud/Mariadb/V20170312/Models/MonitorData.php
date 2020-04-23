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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring data
 *
 * @method string getStartTime() Obtain Start time in the format of `2018-03-24 23:59:59`
 * @method void setStartTime(string $StartTime) Set Start time in the format of `2018-03-24 23:59:59`
 * @method string getEndTime() Obtain End time in the format of `2018-03-24 23:59:59`
 * @method void setEndTime(string $EndTime) Set End time in the format of `2018-03-24 23:59:59`
 * @method array getData() Obtain Monitoring data
 * @method void setData(array $Data) Set Monitoring data
 */
class MonitorData extends AbstractModel
{
    /**
     * @var string Start time in the format of `2018-03-24 23:59:59`
     */
    public $StartTime;

    /**
     * @var string End time in the format of `2018-03-24 23:59:59`
     */
    public $EndTime;

    /**
     * @var array Monitoring data
     */
    public $Data;

    /**
     * @param string $StartTime Start time in the format of `2018-03-24 23:59:59`
     * @param string $EndTime End time in the format of `2018-03-24 23:59:59`
     * @param array $Data Monitoring data
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
