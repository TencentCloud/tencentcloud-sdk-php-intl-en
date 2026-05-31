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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method boolean getIsVipSwitchable() Obtain Is it possible to switch vip.
 * @method void setIsVipSwitchable(boolean $IsVipSwitchable) Set Is it possible to switch vip.
 * @method string getVipSwitchableTime() Obtain The exchangeable time of vip.
 * @method void setVipSwitchableTime(string $VipSwitchableTime) Set The exchangeable time of vip.
 * @method array getExchangeInstanceInfoList() Obtain 
 * @method void setExchangeInstanceInfoList(array $ExchangeInstanceInfoList) Set 
 * @method array getExchangeRoGroupInfoList() Obtain 
 * @method void setExchangeRoGroupInfoList(array $ExchangeRoGroupInfoList) Set 
 * @method string getCurrentStep() Obtain Current step.
 * @method void setCurrentStep(string $CurrentStep) Set Current step.
 * @method integer getCurrentStepProgress() Obtain Current step progress.
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) Set Current step progress.
 * @method string getCurrentStepRemainingTime() Obtain Remaining time of the current step.
 * @method void setCurrentStepRemainingTime(string $CurrentStepRemainingTime) Set Remaining time of the current step.
 */
class RollbackProcessInfo extends AbstractModel
{
    /**
     * @var boolean Is it possible to switch vip.
     */
    public $IsVipSwitchable;

    /**
     * @var string The exchangeable time of vip.
     */
    public $VipSwitchableTime;

    /**
     * @var array 
     */
    public $ExchangeInstanceInfoList;

    /**
     * @var array 
     */
    public $ExchangeRoGroupInfoList;

    /**
     * @var string Current step.
     */
    public $CurrentStep;

    /**
     * @var integer Current step progress.
     */
    public $CurrentStepProgress;

    /**
     * @var string Remaining time of the current step.
     */
    public $CurrentStepRemainingTime;

    /**
     * @param boolean $IsVipSwitchable Is it possible to switch vip.
     * @param string $VipSwitchableTime The exchangeable time of vip.
     * @param array $ExchangeInstanceInfoList 
     * @param array $ExchangeRoGroupInfoList 
     * @param string $CurrentStep Current step.
     * @param integer $CurrentStepProgress Current step progress.
     * @param string $CurrentStepRemainingTime Remaining time of the current step.
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
        if (array_key_exists("IsVipSwitchable",$param) and $param["IsVipSwitchable"] !== null) {
            $this->IsVipSwitchable = $param["IsVipSwitchable"];
        }

        if (array_key_exists("VipSwitchableTime",$param) and $param["VipSwitchableTime"] !== null) {
            $this->VipSwitchableTime = $param["VipSwitchableTime"];
        }

        if (array_key_exists("ExchangeInstanceInfoList",$param) and $param["ExchangeInstanceInfoList"] !== null) {
            $this->ExchangeInstanceInfoList = [];
            foreach ($param["ExchangeInstanceInfoList"] as $key => $value){
                $obj = new ExchangeInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ExchangeInstanceInfoList, $obj);
            }
        }

        if (array_key_exists("ExchangeRoGroupInfoList",$param) and $param["ExchangeRoGroupInfoList"] !== null) {
            $this->ExchangeRoGroupInfoList = [];
            foreach ($param["ExchangeRoGroupInfoList"] as $key => $value){
                $obj = new ExchangeRoGroupInfo();
                $obj->deserialize($value);
                array_push($this->ExchangeRoGroupInfoList, $obj);
            }
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("CurrentStepRemainingTime",$param) and $param["CurrentStepRemainingTime"] !== null) {
            $this->CurrentStepRemainingTime = $param["CurrentStepRemainingTime"];
        }
    }
}
