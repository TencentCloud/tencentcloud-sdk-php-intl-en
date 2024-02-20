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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billable resource
 *
 * @method string getId() Obtain The resource ID.
 * @method void setId(string $Id) Set The resource ID.
 * @method integer getPayMode() Obtain Billing mode
`0`: Pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Billing mode
`0`: Pay-as-you-go
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getEnableTime() Obtain The effective time.
 * @method void setEnableTime(string $EnableTime) Set The effective time.
 * @method string getExpireTime() Obtain The expiration time.
 * @method void setExpireTime(string $ExpireTime) Set The expiration time.
 * @method string getStatus() Obtain The plan status. Values:
<li>`normal`: Normal</li>
<li>`isolated`: Isolated</li>
<li>`destroyed`: Terminated</li>
 * @method void setStatus(string $Status) Set The plan status. Values:
<li>`normal`: Normal</li>
<li>`isolated`: Isolated</li>
<li>`destroyed`: Terminated</li>
 * @method array getSv() Obtain Pricing query parameter
 * @method void setSv(array $Sv) Set Pricing query parameter
 * @method integer getAutoRenewFlag() Obtain Whether to enable auto-renewal. Values:
<li>`0`: Default status.</li>
<li>`1`: Enable auto-renewal.</li>
<li>`2`: Disable auto-renewal.</li>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to enable auto-renewal. Values:
<li>`0`: Default status.</li>
<li>`1`: Enable auto-renewal.</li>
<li>`2`: Disable auto-renewal.</li>
 * @method string getPlanId() Obtain ID of the resource associated with the plan.
 * @method void setPlanId(string $PlanId) Set ID of the resource associated with the plan.
 * @method string getArea() Obtain Applicable area. Values:
<li>`mainland`: Chinese mainland</li>
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`global`: Global</li>
 * @method void setArea(string $Area) Set Applicable area. Values:
<li>`mainland`: Chinese mainland</li>
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`global`: Global</li>
 * @method string getGroup() Obtain The resource type. Values:
<li>`plan`: Plan resources</li>
<li>`pay-as-you-go`: Pay-as-you-go resources </li>
<li>`value-added`: Value-added resources </li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroup(string $Group) Set The resource type. Values:
<li>`plan`: Plan resources</li>
<li>`pay-as-you-go`: Pay-as-you-go resources </li>
<li>`value-added`: Value-added resources </li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneNumber() Obtain The sites that are associated with the current resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneNumber(integer $ZoneNumber) Set The sites that are associated with the current resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Resource tag type. Valid values:
<li>vodeo: vodeo resource.</li>
 * @method void setType(string $Type) Set Resource tag type. Valid values:
<li>vodeo: vodeo resource.</li>
 */
class Resource extends AbstractModel
{
    /**
     * @var string The resource ID.
     */
    public $Id;

    /**
     * @var integer Billing mode
`0`: Pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The effective time.
     */
    public $EnableTime;

    /**
     * @var string The expiration time.
     */
    public $ExpireTime;

    /**
     * @var string The plan status. Values:
<li>`normal`: Normal</li>
<li>`isolated`: Isolated</li>
<li>`destroyed`: Terminated</li>
     */
    public $Status;

    /**
     * @var array Pricing query parameter
     */
    public $Sv;

    /**
     * @var integer Whether to enable auto-renewal. Values:
<li>`0`: Default status.</li>
<li>`1`: Enable auto-renewal.</li>
<li>`2`: Disable auto-renewal.</li>
     */
    public $AutoRenewFlag;

    /**
     * @var string ID of the resource associated with the plan.
     */
    public $PlanId;

    /**
     * @var string Applicable area. Values:
<li>`mainland`: Chinese mainland</li>
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`global`: Global</li>
     */
    public $Area;

    /**
     * @var string The resource type. Values:
<li>`plan`: Plan resources</li>
<li>`pay-as-you-go`: Pay-as-you-go resources </li>
<li>`value-added`: Value-added resources </li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Group;

    /**
     * @var integer The sites that are associated with the current resources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneNumber;

    /**
     * @var string Resource tag type. Valid values:
<li>vodeo: vodeo resource.</li>
     */
    public $Type;

    /**
     * @param string $Id The resource ID.
     * @param integer $PayMode Billing mode
`0`: Pay-as-you-go
     * @param string $CreateTime The creation time.
     * @param string $EnableTime The effective time.
     * @param string $ExpireTime The expiration time.
     * @param string $Status The plan status. Values:
<li>`normal`: Normal</li>
<li>`isolated`: Isolated</li>
<li>`destroyed`: Terminated</li>
     * @param array $Sv Pricing query parameter
     * @param integer $AutoRenewFlag Whether to enable auto-renewal. Values:
<li>`0`: Default status.</li>
<li>`1`: Enable auto-renewal.</li>
<li>`2`: Disable auto-renewal.</li>
     * @param string $PlanId ID of the resource associated with the plan.
     * @param string $Area Applicable area. Values:
<li>`mainland`: Chinese mainland</li>
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`global`: Global</li>
     * @param string $Group The resource type. Values:
<li>`plan`: Plan resources</li>
<li>`pay-as-you-go`: Pay-as-you-go resources </li>
<li>`value-added`: Value-added resources </li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneNumber The sites that are associated with the current resources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Resource tag type. Valid values:
<li>vodeo: vodeo resource.</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Sv",$param) and $param["Sv"] !== null) {
            $this->Sv = [];
            foreach ($param["Sv"] as $key => $value){
                $obj = new Sv();
                $obj->deserialize($value);
                array_push($this->Sv, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("ZoneNumber",$param) and $param["ZoneNumber"] !== null) {
            $this->ZoneNumber = $param["ZoneNumber"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
