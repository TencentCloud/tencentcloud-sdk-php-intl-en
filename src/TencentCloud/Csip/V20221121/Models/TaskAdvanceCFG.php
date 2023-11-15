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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced task configuration
 *
 * @method array getVulRisk() Obtain Advanced vulnerability scan configuration
 * @method void setVulRisk(array $VulRisk) Set Advanced vulnerability scan configuration
 * @method array getWeakPwdRisk() Obtain Advanced weak password check configuration
 * @method void setWeakPwdRisk(array $WeakPwdRisk) Set Advanced weak password check configuration
 * @method array getCFGRisk() Obtain Advanced configuration risk scan configuration
 * @method void setCFGRisk(array $CFGRisk) Set Advanced configuration risk scan configuration
 */
class TaskAdvanceCFG extends AbstractModel
{
    /**
     * @var array Advanced vulnerability scan configuration
     */
    public $VulRisk;

    /**
     * @var array Advanced weak password check configuration
     */
    public $WeakPwdRisk;

    /**
     * @var array Advanced configuration risk scan configuration
     */
    public $CFGRisk;

    /**
     * @param array $VulRisk Advanced vulnerability scan configuration
     * @param array $WeakPwdRisk Advanced weak password check configuration
     * @param array $CFGRisk Advanced configuration risk scan configuration
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
        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = [];
            foreach ($param["VulRisk"] as $key => $value){
                $obj = new TaskCenterVulRiskInputParam();
                $obj->deserialize($value);
                array_push($this->VulRisk, $obj);
            }
        }

        if (array_key_exists("WeakPwdRisk",$param) and $param["WeakPwdRisk"] !== null) {
            $this->WeakPwdRisk = [];
            foreach ($param["WeakPwdRisk"] as $key => $value){
                $obj = new TaskCenterWeakPwdRiskInputParam();
                $obj->deserialize($value);
                array_push($this->WeakPwdRisk, $obj);
            }
        }

        if (array_key_exists("CFGRisk",$param) and $param["CFGRisk"] !== null) {
            $this->CFGRisk = [];
            foreach ($param["CFGRisk"] as $key => $value){
                $obj = new TaskCenterCFGRiskInputParam();
                $obj->deserialize($value);
                array_push($this->CFGRisk, $obj);
            }
        }
    }
}
