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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUsagePlan request structure.
 *
 * @method string getUsagePlanName() Obtain Custom usage plan name.
 * @method void setUsagePlanName(string $UsagePlanName) Set Custom usage plan name.
 * @method string getUsagePlanDesc() Obtain Custom usage plan description.
 * @method void setUsagePlanDesc(string $UsagePlanDesc) Set Custom usage plan description.
 * @method integer getMaxRequestNum() Obtain Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
 * @method void setMaxRequestNum(integer $MaxRequestNum) Set Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
 * @method integer getMaxRequestNumPreSec() Obtain Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
 */
class CreateUsagePlanRequest extends AbstractModel
{
    /**
     * @var string Custom usage plan name.
     */
    public $UsagePlanName;

    /**
     * @var string Custom usage plan description.
     */
    public $UsagePlanDesc;

    /**
     * @var integer Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
     */
    public $MaxRequestNum;

    /**
     * @var integer Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
     */
    public $MaxRequestNumPreSec;

    /**
     * @param string $UsagePlanName Custom usage plan name.
     * @param string $UsagePlanDesc Custom usage plan description.
     * @param integer $MaxRequestNum Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
     * @param integer $MaxRequestNumPreSec Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
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
        if (array_key_exists("UsagePlanName",$param) and $param["UsagePlanName"] !== null) {
            $this->UsagePlanName = $param["UsagePlanName"];
        }

        if (array_key_exists("UsagePlanDesc",$param) and $param["UsagePlanDesc"] !== null) {
            $this->UsagePlanDesc = $param["UsagePlanDesc"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }
    }
}
