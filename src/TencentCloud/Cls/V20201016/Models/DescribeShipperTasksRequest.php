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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShipperTasks request structure.
 *
 * @method string getShipperId() Obtain Shipping rule ID
 * @method void setShipperId(string $ShipperId) Set Shipping rule ID
 * @method integer getStartTime() Obtain Query start timestamp in milliseconds, which can be within the last three days
 * @method void setStartTime(integer $StartTime) Set Query start timestamp in milliseconds, which can be within the last three days
 * @method integer getEndTime() Obtain Query end timestamp in milliseconds
 * @method void setEndTime(integer $EndTime) Set Query end timestamp in milliseconds
 */
class DescribeShipperTasksRequest extends AbstractModel
{
    /**
     * @var string Shipping rule ID
     */
    public $ShipperId;

    /**
     * @var integer Query start timestamp in milliseconds, which can be within the last three days
     */
    public $StartTime;

    /**
     * @var integer Query end timestamp in milliseconds
     */
    public $EndTime;

    /**
     * @param string $ShipperId Shipping rule ID
     * @param integer $StartTime Query start timestamp in milliseconds, which can be within the last three days
     * @param integer $EndTime Query end timestamp in milliseconds
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
