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
 * Usage plan details.
 *
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
 * @method integer getInitQuota() Obtain Number of initialization calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInitQuota(integer $InitQuota) Set Number of initialization calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNumPreSec() Obtain Limit of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) Set Limit of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRequestNum() Obtain Maximum number of calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRequestNum(integer $MaxRequestNum) Set Maximum number of calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsHide() Obtain Whether to hide.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsHide(integer $IsHide) Set Whether to hide.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBindSecretIdTotalCount() Obtain Number of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindSecretIdTotalCount(integer $BindSecretIdTotalCount) Set Number of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBindSecretIds() Obtain Details of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindSecretIds(array $BindSecretIds) Set Details of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBindEnvironmentTotalCount() Obtain Number of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindEnvironmentTotalCount(integer $BindEnvironmentTotalCount) Set Number of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBindEnvironments() Obtain Details of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindEnvironments(array $BindEnvironments) Set Details of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UsagePlanInfo extends AbstractModel
{
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
     * @var integer Number of initialization calls.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InitQuota;

    /**
     * @var integer Limit of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNumPreSec;

    /**
     * @var integer Maximum number of calls.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRequestNum;

    /**
     * @var integer Whether to hide.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsHide;

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
     * @var integer Number of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindSecretIdTotalCount;

    /**
     * @var array Details of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindSecretIds;

    /**
     * @var integer Number of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindEnvironmentTotalCount;

    /**
     * @var array Details of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindEnvironments;

    /**
     * @param string $UsagePlanId Unique usage plan ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanName Usage plan name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UsagePlanDesc Usage plan description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InitQuota Number of initialization calls.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNumPreSec Limit of requests per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRequestNum Maximum number of calls.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsHide Whether to hide.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $BindSecretIdTotalCount Number of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BindSecretIds Details of bound keys.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $BindEnvironmentTotalCount Number of bound environments.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BindEnvironments Details of bound environments.
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

        if (array_key_exists("InitQuota",$param) and $param["InitQuota"] !== null) {
            $this->InitQuota = $param["InitQuota"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("IsHide",$param) and $param["IsHide"] !== null) {
            $this->IsHide = $param["IsHide"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("BindSecretIdTotalCount",$param) and $param["BindSecretIdTotalCount"] !== null) {
            $this->BindSecretIdTotalCount = $param["BindSecretIdTotalCount"];
        }

        if (array_key_exists("BindSecretIds",$param) and $param["BindSecretIds"] !== null) {
            $this->BindSecretIds = $param["BindSecretIds"];
        }

        if (array_key_exists("BindEnvironmentTotalCount",$param) and $param["BindEnvironmentTotalCount"] !== null) {
            $this->BindEnvironmentTotalCount = $param["BindEnvironmentTotalCount"];
        }

        if (array_key_exists("BindEnvironments",$param) and $param["BindEnvironments"] !== null) {
            $this->BindEnvironments = [];
            foreach ($param["BindEnvironments"] as $key => $value){
                $obj = new UsagePlanBindEnvironment();
                $obj->deserialize($value);
                array_push($this->BindEnvironments, $obj);
            }
        }
    }
}
