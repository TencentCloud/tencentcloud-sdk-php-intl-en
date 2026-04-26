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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis filter box complex type
 *
 * @method array getBusiness() Obtain product
 * @method void setBusiness(array $Business) Set product
 * @method array getProject() Obtain Project
 * @method void setProject(array $Project) Set Project
 * @method array getRegion() Obtain Region.
 * @method void setRegion(array $Region) Set Region.
 * @method array getPayMode() Obtain Billing mode.
 * @method void setPayMode(array $PayMode) Set Billing mode.
 * @method array getActionType() Obtain Transaction type
 * @method void setActionType(array $ActionType) Set Transaction type
 * @method array getZone() Obtain Availability zone
 * @method void setZone(array $Zone) Set Availability zone
 * @method array getOwnerUin() Obtain Resource owner Uin
 * @method void setOwnerUin(array $OwnerUin) Set Resource owner Uin
 * @method array getAmount() Obtain Fee type
 * @method void setAmount(array $Amount) Set Fee type
 */
class AnalyseConditionDetail extends AbstractModel
{
    /**
     * @var array product
     */
    public $Business;

    /**
     * @var array Project
     */
    public $Project;

    /**
     * @var array Region.
     */
    public $Region;

    /**
     * @var array Billing mode.
     */
    public $PayMode;

    /**
     * @var array Transaction type
     */
    public $ActionType;

    /**
     * @var array Availability zone
     */
    public $Zone;

    /**
     * @var array Resource owner Uin
     */
    public $OwnerUin;

    /**
     * @var array Fee type
     */
    public $Amount;

    /**
     * @param array $Business product
     * @param array $Project Project
     * @param array $Region Region.
     * @param array $PayMode Billing mode.
     * @param array $ActionType Transaction type
     * @param array $Zone Availability zone
     * @param array $OwnerUin Resource owner Uin
     * @param array $Amount Fee type
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
                $obj = new AnalyseBusinessDetail();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new AnalyseProjectDetail();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new AnalyseRegionDetail();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new AnalysePayModeDetail();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = [];
            foreach ($param["ActionType"] as $key => $value){
                $obj = new AnalyseActionTypeDetail();
                $obj->deserialize($value);
                array_push($this->ActionType, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = [];
            foreach ($param["Zone"] as $key => $value){
                $obj = new AnalyseZoneDetail();
                $obj->deserialize($value);
                array_push($this->Zone, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = [];
            foreach ($param["OwnerUin"] as $key => $value){
                $obj = new AnalyseOwnerUinDetail();
                $obj->deserialize($value);
                array_push($this->OwnerUin, $obj);
            }
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = [];
            foreach ($param["Amount"] as $key => $value){
                $obj = new AnalyseAmountDetail();
                $obj->deserialize($value);
                array_push($this->Amount, $obj);
            }
        }
    }
}
