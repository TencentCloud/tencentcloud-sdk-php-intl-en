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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced filtering for cost analysis
 *
 * @method array getBusiness() Obtain <p>Product key-value pair.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusiness(array $Business) Set <p>Product key-value pair.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRegion() Obtain <p>Region key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(array $Region) Set <p>Region key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZone() Obtain <p>Availability zone key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(array $Zone) Set <p>Availability zone key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActionType() Obtain <p>Transaction type key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(array $ActionType) Set <p>Transaction type key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayMode() Obtain <p>Key-value pair of payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(array $PayMode) Set <p>Key-value pair of payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProject() Obtain <p>Project key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProject(array $Project) Set <p>Project key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayerUin() Obtain <p>Payer uin information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerUin(array $PayerUin) Set <p>Payer uin information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOwnerUin() Obtain <p>Sub-account uin information</p>
 * @method void setOwnerUin(array $OwnerUin) Set <p>Sub-account uin information</p>
 */
class CostAnalyzeFilterDetail extends AbstractModel
{
    /**
     * @var array <p>Product key-value pair.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @var array <p>Region key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var array <p>Availability zone key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var array <p>Transaction type key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var array <p>Key-value pair of payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var array <p>Project key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Project;

    /**
     * @var array <p>Payer uin information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerUin;

    /**
     * @var array <p>Sub-account uin information</p>
     */
    public $OwnerUin;

    /**
     * @param array $Business <p>Product key-value pair.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Region <p>Region key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Zone <p>Availability zone key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ActionType <p>Transaction type key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayMode <p>Key-value pair of payment mode</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Project <p>Project key-value pair</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayerUin <p>Payer uin information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OwnerUin <p>Sub-account uin information</p>
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = [];
            foreach ($param["Zone"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->Zone, $obj);
            }
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = [];
            foreach ($param["ActionType"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->ActionType, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = [];
            foreach ($param["PayerUin"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->PayerUin, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = [];
            foreach ($param["OwnerUin"] as $key => $value){
                $obj = new BillQueryFilterMsg();
                $obj->deserialize($value);
                array_push($this->OwnerUin, $obj);
            }
        }
    }
}
