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
 * Filter criteria of consumption details summarized by resource
 *
 * @method array getBusiness() Obtain Product list
 * @method void setBusiness(array $Business) Set Product list
 * @method array getProject() Obtain Project list
 * @method void setProject(array $Project) Set Project list
 * @method array getRegion() Obtain Region list
 * @method void setRegion(array $Region) Set Region list
 * @method array getPayMode() Obtain Payment mode list
 * @method void setPayMode(array $PayMode) Set Payment mode list
 */
class ConsumptionResourceSummaryConditionValue extends AbstractModel
{
    /**
     * @var array Product list
     */
    public $Business;

    /**
     * @var array Project list
     */
    public $Project;

    /**
     * @var array Region list
     */
    public $Region;

    /**
     * @var array Payment mode list
     */
    public $PayMode;

    /**
     * @param array $Business Product list
     * @param array $Project Project list
     * @param array $Region Region list
     * @param array $PayMode Payment mode list
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
                $obj = new ConditionBusiness();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new ConditionProject();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new ConditionRegion();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new ConditionPayMode();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }
    }
}
