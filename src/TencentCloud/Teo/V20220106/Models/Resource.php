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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billable resource
 *
 * @method string getId() Obtain Resource ID
 * @method void setId(string $Id) Set Resource ID
 * @method integer getPayMode() Obtain Billing mode
`0`: Pay-as-you-go
 * @method void setPayMode(integer $PayMode) Set Billing mode
`0`: Pay-as-you-go
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getEnableTime() Obtain Effective time
 * @method void setEnableTime(string $EnableTime) Set Effective time
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method string getStatus() Obtain Status of the plan
 * @method void setStatus(string $Status) Set Status of the plan
 * @method array getSv() Obtain Pricing query parameter
 * @method void setSv(array $Sv) Set Pricing query parameter
 * @method integer getAutoRenewFlag() Obtain Specifies whether to enable auto-renewal
`0`: Default
`1`: Enable auto-renewal
`2`: Disable auto-renewal
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Specifies whether to enable auto-renewal
`0`: Default
`1`: Enable auto-renewal
`2`: Disable auto-renewal
 * @method string getPlanId() Obtain ID of the plan
 * @method void setPlanId(string $PlanId) Set ID of the plan
 * @method string getArea() Obtain 
 * @method void setArea(string $Area) Set 
 */
class Resource extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $Id;

    /**
     * @var integer Billing mode
`0`: Pay-as-you-go
     */
    public $PayMode;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Effective time
     */
    public $EnableTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var string Status of the plan
     */
    public $Status;

    /**
     * @var array Pricing query parameter
     */
    public $Sv;

    /**
     * @var integer Specifies whether to enable auto-renewal
`0`: Default
`1`: Enable auto-renewal
`2`: Disable auto-renewal
     */
    public $AutoRenewFlag;

    /**
     * @var string ID of the plan
     */
    public $PlanId;

    /**
     * @var string 
     */
    public $Area;

    /**
     * @param string $Id Resource ID
     * @param integer $PayMode Billing mode
`0`: Pay-as-you-go
     * @param string $CreateTime Creation time
     * @param string $EnableTime Effective time
     * @param string $ExpireTime Expiration time
     * @param string $Status Status of the plan
     * @param array $Sv Pricing query parameter
     * @param integer $AutoRenewFlag Specifies whether to enable auto-renewal
`0`: Default
`1`: Enable auto-renewal
`2`: Disable auto-renewal
     * @param string $PlanId ID of the plan
     * @param string $Area 
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
    }
}
