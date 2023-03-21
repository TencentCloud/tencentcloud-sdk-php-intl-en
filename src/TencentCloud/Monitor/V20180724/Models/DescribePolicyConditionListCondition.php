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
 * Policy conditions returned by the DescribePolicyConditionList API
 *
 * @method string getPolicyViewName() Obtain Policy view name.
 * @method void setPolicyViewName(string $PolicyViewName) Set Policy view name.
 * @method array getEventMetrics() Obtain Event alarm conditions.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventMetrics(array $EventMetrics) Set Event alarm conditions.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getIsSupportMultiRegion() Obtain Whether to support multiple regions.
 * @method void setIsSupportMultiRegion(boolean $IsSupportMultiRegion) Set Whether to support multiple regions.
 * @method array getMetrics() Obtain Metric alarm conditions.
Note: This field may return null, indicating that no valid value was found.
 * @method void setMetrics(array $Metrics) Set Metric alarm conditions.
Note: This field may return null, indicating that no valid value was found.
 * @method string getName() Obtain Policy type name.
 * @method void setName(string $Name) Set Policy type name.
 * @method integer getSortId() Obtain Sorting ID.
 * @method void setSortId(integer $SortId) Set Sorting ID.
 * @method boolean getSupportDefault() Obtain Whether to support default policies.
 * @method void setSupportDefault(boolean $SupportDefault) Set Whether to support default policies.
 * @method array getSupportRegions() Obtain List of regions that support this policy type.
Note: This field may return null, indicating that no valid value was found.
 * @method void setSupportRegions(array $SupportRegions) Set List of regions that support this policy type.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListResponseDeprecatingInfo getDeprecatingInfo() Obtain Deprecated information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeprecatingInfo(DescribePolicyConditionListResponseDeprecatingInfo $DeprecatingInfo) Set Deprecated information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribePolicyConditionListCondition extends AbstractModel
{
    /**
     * @var string Policy view name.
     */
    public $PolicyViewName;

    /**
     * @var array Event alarm conditions.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventMetrics;

    /**
     * @var boolean Whether to support multiple regions.
     */
    public $IsSupportMultiRegion;

    /**
     * @var array Metric alarm conditions.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Metrics;

    /**
     * @var string Policy type name.
     */
    public $Name;

    /**
     * @var integer Sorting ID.
     */
    public $SortId;

    /**
     * @var boolean Whether to support default policies.
     */
    public $SupportDefault;

    /**
     * @var array List of regions that support this policy type.
Note: This field may return null, indicating that no valid value was found.
     */
    public $SupportRegions;

    /**
     * @var DescribePolicyConditionListResponseDeprecatingInfo Deprecated information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeprecatingInfo;

    /**
     * @param string $PolicyViewName Policy view name.
     * @param array $EventMetrics Event alarm conditions.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $IsSupportMultiRegion Whether to support multiple regions.
     * @param array $Metrics Metric alarm conditions.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Name Policy type name.
     * @param integer $SortId Sorting ID.
     * @param boolean $SupportDefault Whether to support default policies.
     * @param array $SupportRegions List of regions that support this policy type.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListResponseDeprecatingInfo $DeprecatingInfo Deprecated information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PolicyViewName",$param) and $param["PolicyViewName"] !== null) {
            $this->PolicyViewName = $param["PolicyViewName"];
        }

        if (array_key_exists("EventMetrics",$param) and $param["EventMetrics"] !== null) {
            $this->EventMetrics = [];
            foreach ($param["EventMetrics"] as $key => $value){
                $obj = new DescribePolicyConditionListEventMetric();
                $obj->deserialize($value);
                array_push($this->EventMetrics, $obj);
            }
        }

        if (array_key_exists("IsSupportMultiRegion",$param) and $param["IsSupportMultiRegion"] !== null) {
            $this->IsSupportMultiRegion = $param["IsSupportMultiRegion"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new DescribePolicyConditionListMetric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("SupportDefault",$param) and $param["SupportDefault"] !== null) {
            $this->SupportDefault = $param["SupportDefault"];
        }

        if (array_key_exists("SupportRegions",$param) and $param["SupportRegions"] !== null) {
            $this->SupportRegions = $param["SupportRegions"];
        }

        if (array_key_exists("DeprecatingInfo",$param) and $param["DeprecatingInfo"] !== null) {
            $this->DeprecatingInfo = new DescribePolicyConditionListResponseDeprecatingInfo();
            $this->DeprecatingInfo->deserialize($param["DeprecatingInfo"]);
        }
    }
}
