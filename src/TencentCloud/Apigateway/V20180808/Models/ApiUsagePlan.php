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
 * Details of usage plans bound to API or service
 *
 * @method string getServiceId() Obtain Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiId() Obtain Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiId(string $ApiId) Set Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiName() Obtain API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain API path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set API path.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain API method.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set API method.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsagePlanId() Obtain Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanId(string $UsagePlanId) Set Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsagePlanName() Obtain Usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanName(string $UsagePlanName) Set Usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUsagePlanDesc() Obtain Usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanDesc(string $UsagePlanDesc) Set Usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironment() Obtain Service environment bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironment(string $Environment) Set Service environment bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInUseRequestNum() Obtain Used quota.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInUseRequestNum(integer $InUseRequestNum) Set Used quota.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNum() Obtain Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNum(integer $MaxRequestNum) Set Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNumPreSec() Obtain Request QPS upper limit. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Request QPS upper limit. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Usage plan creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Usage plan creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modified time of usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time of usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Service name.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiUsagePlan extends AbstractModel
{
    /**
     * @var string Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiId;

    /**
     * @var string API name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @var string API path.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string API method.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var string Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanId;

    /**
     * @var string Usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanName;

    /**
     * @var string Usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanDesc;

    /**
     * @var string Service environment bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Environment;

    /**
     * @var integer Used quota.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InUseRequestNum;

    /**
     * @var integer Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNum;

    /**
     * @var integer Request QPS upper limit. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNumPreSec;

    /**
     * @var string Usage plan creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Last modified time of usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string Service name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @param string $ServiceId Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiId Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiName API name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Path API path.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Method API method.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanId Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanName Usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanDesc Usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Environment Service environment bound to usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InUseRequestNum Used quota.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNum Total number of requests allowed. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNumPreSec Request QPS upper limit. `-1` indicates no limit.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Usage plan creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modified time of usage plan.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Service name.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
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

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("InUseRequestNum",$param) and $param["InUseRequestNum"] !== null) {
            $this->InUseRequestNum = $param["InUseRequestNum"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
