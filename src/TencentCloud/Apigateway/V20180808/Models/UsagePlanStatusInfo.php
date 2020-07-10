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
 * Usage plan list display.
 *
 * @method string getUsagePlanId() Obtain Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanId(string $UsagePlanId) Set Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsagePlanName() Obtain Custom usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanName(string $UsagePlanName) Set Custom usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsagePlanDesc() Obtain Custom usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanDesc(string $UsagePlanDesc) Set Custom usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNumPreSec() Obtain Maximum number of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Maximum number of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNum() Obtain Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNum(integer $MaxRequestNum) Set Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanStatusInfo extends AbstractModel
{
    /**
     * @var string Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanId;

    /**
     * @var string Custom usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanName;

    /**
     * @var string Custom usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanDesc;

    /**
     * @var integer Maximum number of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNumPreSec;

    /**
     * @var integer Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNum;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @param string $UsagePlanId Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanName Custom usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanDesc Custom usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNumPreSec Maximum number of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNum Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
