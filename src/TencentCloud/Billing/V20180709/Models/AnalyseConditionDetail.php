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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis filter box complex type
 *
 * @method array getBusiness() Obtain ProductNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusiness(array $Business) Set ProductNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getProject() Obtain ItemNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setProject(array $Project) Set ItemNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getRegion() Obtain RegionNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(array $Region) Set RegionNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getPayMode() Obtain Billing modeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(array $PayMode) Set Billing modeNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getActionType() Obtain Transaction typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(array $ActionType) Set Transaction typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getZone() Obtain Availability zoneNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(array $Zone) Set Availability zoneNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getOwnerUin() Obtain Resource owner UINNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(array $OwnerUin) Set Resource owner UINNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getAmount() Obtain Fee typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setAmount(array $Amount) Set Fee typeNote: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseConditionDetail extends AbstractModel
{
    /**
     * @var array ProductNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @var array ItemNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Project;

    /**
     * @var array RegionNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var array Billing modeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var array Transaction typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var array Availability zoneNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var array Resource owner UINNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var array Fee typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Amount;

    /**
     * @param array $Business ProductNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Project ItemNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Region RegionNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $PayMode Billing modeNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $ActionType Transaction typeNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Zone Availability zoneNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $OwnerUin Resource owner UINNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Amount Fee typeNote: This field may return null, indicating that no valid values can be obtained.
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
