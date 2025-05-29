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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application model configuration.
 *
 * @method string getName() Obtain Model name.
 * @method void setName(string $Name) Set Model name.
 * @method string getDesc() Obtain Model description.
 * @method void setDesc(string $Desc) Set Model description.
 * @method integer getContextLimit() Obtain The round referenced by the context.
 * @method void setContextLimit(integer $ContextLimit) Set The round referenced by the context.
 * @method string getAliasName() Obtain Model alias.
 * @method void setAliasName(string $AliasName) Set Model alias.
 * @method float getTokenBalance() Obtain Remaining token quota.
 * @method void setTokenBalance(float $TokenBalance) Set Remaining token quota.
 * @method boolean getIsUseContext() Obtain Whether to use the round referenced by the context.
 * @method void setIsUseContext(boolean $IsUseContext) Set Whether to use the round referenced by the context.
 * @method integer getHistoryLimit() Obtain The number of context memory rounds.
 * @method void setHistoryLimit(integer $HistoryLimit) Set The number of context memory rounds.
 * @method string getUsageType() Obtain Usage type.
 * @method void setUsageType(string $UsageType) Set Usage type.
 * @method string getTemperature() Obtain Model temperature.
 * @method void setTemperature(string $Temperature) Set Model temperature.
 * @method string getTopP() Obtain Model TopP.
 * @method void setTopP(string $TopP) Set Model TopP.
 * @method integer getResourceStatus() Obtain Model resource status: 1: available; 2: exhausted.
 * @method void setResourceStatus(integer $ResourceStatus) Set Model resource status: 1: available; 2: exhausted.
 */
class AppModel extends AbstractModel
{
    /**
     * @var string Model name.
     */
    public $Name;

    /**
     * @var string Model description.
     */
    public $Desc;

    /**
     * @var integer The round referenced by the context.
     */
    public $ContextLimit;

    /**
     * @var string Model alias.
     */
    public $AliasName;

    /**
     * @var float Remaining token quota.
     */
    public $TokenBalance;

    /**
     * @var boolean Whether to use the round referenced by the context.
     */
    public $IsUseContext;

    /**
     * @var integer The number of context memory rounds.
     */
    public $HistoryLimit;

    /**
     * @var string Usage type.
     */
    public $UsageType;

    /**
     * @var string Model temperature.
     */
    public $Temperature;

    /**
     * @var string Model TopP.
     */
    public $TopP;

    /**
     * @var integer Model resource status: 1: available; 2: exhausted.
     */
    public $ResourceStatus;

    /**
     * @param string $Name Model name.
     * @param string $Desc Model description.
     * @param integer $ContextLimit The round referenced by the context.
     * @param string $AliasName Model alias.
     * @param float $TokenBalance Remaining token quota.
     * @param boolean $IsUseContext Whether to use the round referenced by the context.
     * @param integer $HistoryLimit The number of context memory rounds.
     * @param string $UsageType Usage type.
     * @param string $Temperature Model temperature.
     * @param string $TopP Model TopP.
     * @param integer $ResourceStatus Model resource status: 1: available; 2: exhausted.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ContextLimit",$param) and $param["ContextLimit"] !== null) {
            $this->ContextLimit = $param["ContextLimit"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("TokenBalance",$param) and $param["TokenBalance"] !== null) {
            $this->TokenBalance = $param["TokenBalance"];
        }

        if (array_key_exists("IsUseContext",$param) and $param["IsUseContext"] !== null) {
            $this->IsUseContext = $param["IsUseContext"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("UsageType",$param) and $param["UsageType"] !== null) {
            $this->UsageType = $param["UsageType"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
