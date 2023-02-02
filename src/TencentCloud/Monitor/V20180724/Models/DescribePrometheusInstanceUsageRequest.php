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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstanceUsage request structure.
 *
 * @method array getInstanceIds() Obtain Query by one or more instance IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
 * @method void setInstanceIds(array $InstanceIds) Set Query by one or more instance IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
 * @method string getStartCalcDate() Obtain Start time
 * @method void setStartCalcDate(string $StartCalcDate) Set Start time
 * @method string getEndCalcDate() Obtain End time
 * @method void setEndCalcDate(string $EndCalcDate) Set End time
 */
class DescribePrometheusInstanceUsageRequest extends AbstractModel
{
    /**
     * @var array Query by one or more instance IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
     */
    public $InstanceIds;

    /**
     * @var string Start time
     */
    public $StartCalcDate;

    /**
     * @var string End time
     */
    public $EndCalcDate;

    /**
     * @param array $InstanceIds Query by one or more instance IDs. Instance ID is in the format of `prom-xxxxxxxx`. Up to 100 instances can be queried in one request.
     * @param string $StartCalcDate Start time
     * @param string $EndCalcDate End time
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StartCalcDate",$param) and $param["StartCalcDate"] !== null) {
            $this->StartCalcDate = $param["StartCalcDate"];
        }

        if (array_key_exists("EndCalcDate",$param) and $param["EndCalcDate"] !== null) {
            $this->EndCalcDate = $param["EndCalcDate"];
        }
    }
}
