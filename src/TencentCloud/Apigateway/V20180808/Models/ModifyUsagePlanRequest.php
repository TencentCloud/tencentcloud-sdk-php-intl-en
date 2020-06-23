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
 * ModifyUsagePlan request structure.
 *
 * @method string getUsagePlanId() Obtain Unique usage plan ID.
 * @method void setUsagePlanId(string $UsagePlanId) Set Unique usage plan ID.
 * @method string getUsagePlanName() Obtain Custom usage plan name after modification.
 * @method void setUsagePlanName(string $UsagePlanName) Set Custom usage plan name after modification.
 * @method string getUsagePlanDesc() Obtain Custom usage plan description after modification.
 * @method void setUsagePlanDesc(string $UsagePlanDesc) Set Custom usage plan description after modification.
 * @method integer getMaxRequestNum() Obtain Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
 * @method void setMaxRequestNum(integer $MaxRequestNum) Set Total number of requests allowed. Valid values: -1, [1,99999999]. The default value is `-1`, which indicates no limit.
 * @method integer getMaxRequestNumPreSec() Obtain Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Limit of requests per second. Valid values: -1, [1,2000]. The default value is `-1`, which indicates no limit.
 */
class ModifyUsagePlanRequest extends AbstractModel
{
    /**
     * @var string Unique usage plan ID.
     */
    public $UsagePlanId;

    /**
     * @var string Custom usage plan name after modification.
     */
    public $UsagePlanName;

    /**
     * @var string Custom usage plan description after modification.
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
     * @param string $UsagePlanId Unique usage plan ID.
     * @param string $UsagePlanName Custom usage plan name after modification.
     * @param string $UsagePlanDesc Custom usage plan description after modification.
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
        if (array_key_exists("UsagePlanId",$param) and $param["UsagePlanId"] !== null) {
            $this->UsagePlanId = $param["UsagePlanId"];
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
