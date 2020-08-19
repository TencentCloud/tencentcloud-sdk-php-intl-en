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
 * IP policy
 *
 * @method string getStrategyId() Obtain Unique policy ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(string $StrategyId) Set Unique policy ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyName() Obtain Custom policy name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyName(string $StrategyName) Set Custom policy name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyType() Obtain Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyType(string $StrategyType) Set Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyData() Obtain IP list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyData(string $StrategyData) Set IP list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Modification time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Modification time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceId() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBindApiTotalCount() Obtain Number of APIs bound to policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindApiTotalCount(integer $BindApiTotalCount) Set Number of APIs bound to policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBindApis() Obtain Bound API details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindApis(array $BindApis) Set Bound API details.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class IPStrategy extends AbstractModel
{
    /**
     * @var string Unique policy ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var string Custom policy name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyName;

    /**
     * @var string Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyType;

    /**
     * @var string IP list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyData;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Modification time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var integer Number of APIs bound to policy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindApiTotalCount;

    /**
     * @var array Bound API details.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindApis;

    /**
     * @param string $StrategyId Unique policy ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyName Custom policy name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyType Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyData IP list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Modification time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceId Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $BindApiTotalCount Number of APIs bound to policy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BindApis Bound API details.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("BindApiTotalCount",$param) and $param["BindApiTotalCount"] !== null) {
            $this->BindApiTotalCount = $param["BindApiTotalCount"];
        }

        if (array_key_exists("BindApis",$param) and $param["BindApis"] !== null) {
            $this->BindApis = [];
            foreach ($param["BindApis"] as $key => $value){
                $obj = new DesApisStatus();
                $obj->deserialize($value);
                array_push($this->BindApis, $obj);
            }
        }
    }
}
