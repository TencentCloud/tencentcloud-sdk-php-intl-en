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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing resource
 *
 * @method string getId() Obtain Resource ID.
 * @method void setId(string $Id) Set Resource ID.
 * @method integer getPayMode() Obtain Payment mode. Valid values:
<li>0: postpaid.</li>
 * @method void setPayMode(integer $PayMode) Set Payment mode. Valid values:
<li>0: postpaid.</li>
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getEnableTime() Obtain Effective time.
 * @method void setEnableTime(string $EnableTime) Set Effective time.
 * @method string getExpireTime() Obtain Expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time.
 * @method string getStatus() Obtain Package status. Valid values:
<li>normal: Normal;</li>
<li>isolated: Isolated;</li>
<li>destroyed: Terminated.</li>
 * @method void setStatus(string $Status) Set Package status. Valid values:
<li>normal: Normal;</li>
<li>isolated: Isolated;</li>
<li>destroyed: Terminated.</li>
 * @method array getSv() Obtain Price inquiry parameters.
 * @method void setSv(array $Sv) Set Price inquiry parameters.
 * @method integer getAutoRenewFlag() Obtain Whether it is automatically renewed. Valid values:
<li>0: default state</li>
<li>`1`: auto-renewal;</li>
<li>`2`: no auto-renewal.</li>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether it is automatically renewed. Valid values:
<li>0: default state</li>
<li>`1`: auto-renewal;</li>
<li>`2`: no auto-renewal.</li>
 * @method string getPlanId() Obtain ID of the associated resource in the package.
 * @method void setPlanId(string $PlanId) Set ID of the associated resource in the package.
 * @method string getArea() Obtain Region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: outside the Chinese mainland.</li>
<li>global: global.</li>
 * @method void setArea(string $Area) Set Region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: outside the Chinese mainland.</li>
<li>global: global.</li>
 * @method string getGroup() Obtain Resource type. Valid values:
<li>plan: package type;</li>
<li>pay-as-you-go: postpaid mode.</li>
<li>value-added: value-added service type.</li>
 * @method void setGroup(string $Group) Set Resource type. Valid values:
<li>plan: package type;</li>
<li>pay-as-you-go: postpaid mode.</li>
<li>value-added: value-added service type.</li>
 * @method integer getZoneNumber() Obtain Number of sites bound to the current resource.
 * @method void setZoneNumber(integer $ZoneNumber) Set Number of sites bound to the current resource.
 * @method string getType() Obtain Resource tag type, with values:
<li>vodeo: vodeo resource.</li>
 * @method void setType(string $Type) Set Resource tag type, with values:
<li>vodeo: vodeo resource.</li>
 */
class Resource extends AbstractModel
{
    /**
     * @var string Resource ID.
     */
    public $Id;

    /**
     * @var integer Payment mode. Valid values:
<li>0: postpaid.</li>
     */
    public $PayMode;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Effective time.
     */
    public $EnableTime;

    /**
     * @var string Expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Package status. Valid values:
<li>normal: Normal;</li>
<li>isolated: Isolated;</li>
<li>destroyed: Terminated.</li>
     */
    public $Status;

    /**
     * @var array Price inquiry parameters.
     */
    public $Sv;

    /**
     * @var integer Whether it is automatically renewed. Valid values:
<li>0: default state</li>
<li>`1`: auto-renewal;</li>
<li>`2`: no auto-renewal.</li>
     */
    public $AutoRenewFlag;

    /**
     * @var string ID of the associated resource in the package.
     */
    public $PlanId;

    /**
     * @var string Region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: outside the Chinese mainland.</li>
<li>global: global.</li>
     */
    public $Area;

    /**
     * @var string Resource type. Valid values:
<li>plan: package type;</li>
<li>pay-as-you-go: postpaid mode.</li>
<li>value-added: value-added service type.</li>
     */
    public $Group;

    /**
     * @var integer Number of sites bound to the current resource.
     */
    public $ZoneNumber;

    /**
     * @var string Resource tag type, with values:
<li>vodeo: vodeo resource.</li>
     */
    public $Type;

    /**
     * @param string $Id Resource ID.
     * @param integer $PayMode Payment mode. Valid values:
<li>0: postpaid.</li>
     * @param string $CreateTime Creation time.
     * @param string $EnableTime Effective time.
     * @param string $ExpireTime Expiration time.
     * @param string $Status Package status. Valid values:
<li>normal: Normal;</li>
<li>isolated: Isolated;</li>
<li>destroyed: Terminated.</li>
     * @param array $Sv Price inquiry parameters.
     * @param integer $AutoRenewFlag Whether it is automatically renewed. Valid values:
<li>0: default state</li>
<li>`1`: auto-renewal;</li>
<li>`2`: no auto-renewal.</li>
     * @param string $PlanId ID of the associated resource in the package.
     * @param string $Area Region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: outside the Chinese mainland.</li>
<li>global: global.</li>
     * @param string $Group Resource type. Valid values:
<li>plan: package type;</li>
<li>pay-as-you-go: postpaid mode.</li>
<li>value-added: value-added service type.</li>
     * @param integer $ZoneNumber Number of sites bound to the current resource.
     * @param string $Type Resource tag type, with values:
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
