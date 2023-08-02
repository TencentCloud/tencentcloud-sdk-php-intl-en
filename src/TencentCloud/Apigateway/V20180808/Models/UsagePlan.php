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
 * `usagePlan` details
 *
 * @method string getEnvironment() Obtain Environment name.
 * @method void setEnvironment(string $Environment) Set Environment name.
 * @method string getUsagePlanId() Obtain Unique usage plan ID.
 * @method void setUsagePlanId(string $UsagePlanId) Set Unique usage plan ID.
 * @method string getUsagePlanName() Obtain Usage plan name.
 * @method void setUsagePlanName(string $UsagePlanName) Set Usage plan name.
 * @method string getUsagePlanDesc() Obtain Usage plan description. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanDesc(string $UsagePlanDesc) Set Usage plan description. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNumPreSec() Obtain Usage plan QPS. `-1` indicates no limit.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Usage plan QPS. `-1` indicates no limit.
 * @method string getCreatedTime() Obtain Usage plan time.
 * @method void setCreatedTime(string $CreatedTime) Set Usage plan time.
 * @method string getModifiedTime() Obtain Usage plan modification time.
 * @method void setModifiedTime(string $ModifiedTime) Set Usage plan modification time.
 */
class UsagePlan extends AbstractModel
{
    /**
     * @var string Environment name.
     */
    public $Environment;

    /**
     * @var string Unique usage plan ID.
     */
    public $UsagePlanId;

    /**
     * @var string Usage plan name.
     */
    public $UsagePlanName;

    /**
     * @var string Usage plan description. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanDesc;

    /**
     * @var integer Usage plan QPS. `-1` indicates no limit.
     */
    public $MaxRequestNumPreSec;

    /**
     * @var string Usage plan time.
     */
    public $CreatedTime;

    /**
     * @var string Usage plan modification time.
     */
    public $ModifiedTime;

    /**
     * @param string $Environment Environment name.
     * @param string $UsagePlanId Unique usage plan ID.
     * @param string $UsagePlanName Usage plan name.
     * @param string $UsagePlanDesc Usage plan description. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNumPreSec Usage plan QPS. `-1` indicates no limit.
     * @param string $CreatedTime Usage plan time.
     * @param string $ModifiedTime Usage plan modification time.
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
        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
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

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
