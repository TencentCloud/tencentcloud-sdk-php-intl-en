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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Advanced Configuration
 *
 * @method array getPortRisk() Obtain Port Risk Advanced Configuration
 * @method void setPortRisk(array $PortRisk) Set Port Risk Advanced Configuration
 * @method array getVulRisk() Obtain Vulnerability Risk Advanced Configuration
 * @method void setVulRisk(array $VulRisk) Set Vulnerability Risk Advanced Configuration
 * @method array getWeakPwdRisk() Obtain Weak Password Risk Advanced Configuration
 * @method void setWeakPwdRisk(array $WeakPwdRisk) Set Weak Password Risk Advanced Configuration
 * @method array getCFGRisk() Obtain Advanced Configuration of Configuration Risk
 * @method void setCFGRisk(array $CFGRisk) Set Advanced Configuration of Configuration Risk
 */
class TaskAdvanceCFG extends AbstractModel
{
    /**
     * @var array Port Risk Advanced Configuration
     */
    public $PortRisk;

    /**
     * @var array Vulnerability Risk Advanced Configuration
     */
    public $VulRisk;

    /**
     * @var array Weak Password Risk Advanced Configuration
     */
    public $WeakPwdRisk;

    /**
     * @var array Advanced Configuration of Configuration Risk
     */
    public $CFGRisk;

    /**
     * @param array $PortRisk Port Risk Advanced Configuration
     * @param array $VulRisk Vulnerability Risk Advanced Configuration
     * @param array $WeakPwdRisk Weak Password Risk Advanced Configuration
     * @param array $CFGRisk Advanced Configuration of Configuration Risk
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
        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = [];
            foreach ($param["PortRisk"] as $key => $value){
                $obj = new PortRiskAdvanceCFGParamItem();
                $obj->deserialize($value);
                array_push($this->PortRisk, $obj);
            }
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
