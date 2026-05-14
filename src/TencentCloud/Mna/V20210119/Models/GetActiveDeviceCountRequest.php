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
 * GetActiveDeviceCount request structure.
 *
 * @method integer getPeriod() Obtain Query granularity. Valid values: 0: day, 1: week, 2: month. Default is day.
 * @method void setPeriod(integer $Period) Set Query granularity. Valid values: 0: day, 1: week, 2: month. Default is day.
 * @method integer getStartTime() Obtain Start time. In seconds.
 * @method void setStartTime(integer $StartTime) Set Start time. In seconds.
 * @method integer getEndTime() Obtain End time. In seconds.
 * @method void setEndTime(integer $EndTime) Set End time. In seconds.
 * @method string getDevGroup() Obtain device group, if not passed, query all
 * @method void setDevGroup(string $DevGroup) Set device group, if not passed, query all
 * @method integer getLicenseType() Obtain License type. If not passed, query all. 1: Tenant monthly payment, 2: Manufacturer monthly payment, 3: Permanent license.
 * @method void setLicenseType(integer $LicenseType) Set License type. If not passed, query all. 1: Tenant monthly payment, 2: Manufacturer monthly payment, 3: Permanent license.
 */
class GetActiveDeviceCountRequest extends AbstractModel
{
    /**
     * @var integer Query granularity. Valid values: 0: day, 1: week, 2: month. Default is day.
     */
    public $Period;

    /**
     * @var integer Start time. In seconds.
     */
    public $StartTime;

    /**
     * @var integer End time. In seconds.
     */
    public $EndTime;

    /**
     * @var string device group, if not passed, query all
     */
    public $DevGroup;

    /**
     * @var integer License type. If not passed, query all. 1: Tenant monthly payment, 2: Manufacturer monthly payment, 3: Permanent license.
     */
    public $LicenseType;

    /**
     * @param integer $Period Query granularity. Valid values: 0: day, 1: week, 2: month. Default is day.
     * @param integer $StartTime Start time. In seconds.
     * @param integer $EndTime End time. In seconds.
     * @param string $DevGroup device group, if not passed, query all
     * @param integer $LicenseType License type. If not passed, query all. 1: Tenant monthly payment, 2: Manufacturer monthly payment, 3: Permanent license.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DevGroup",$param) and $param["DevGroup"] !== null) {
            $this->DevGroup = $param["DevGroup"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
