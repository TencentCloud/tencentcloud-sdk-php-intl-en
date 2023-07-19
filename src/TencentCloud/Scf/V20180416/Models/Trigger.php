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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trigger type
 *
 * @method string getModTime() Obtain Latest modification time of the trigger
 * @method void setModTime(string $ModTime) Set Latest modification time of the trigger
 * @method string getType() Obtain Trigger type
 * @method void setType(string $Type) Set Trigger type
 * @method string getTriggerDesc() Obtain Detailed trigger configuration
 * @method void setTriggerDesc(string $TriggerDesc) Set Detailed trigger configuration
 * @method string getTriggerName() Obtain Trigger name
 * @method void setTriggerName(string $TriggerName) Set Trigger name
 * @method string getAddTime() Obtain Creation time of the trigger
 * @method void setAddTime(string $AddTime) Set Creation time of the trigger
 * @method integer getEnable() Obtain Enabling switch
 * @method void setEnable(integer $Enable) Set Enabling switch
 * @method string getCustomArgument() Obtain Custom parameter
 * @method void setCustomArgument(string $CustomArgument) Set Custom parameter
 * @method string getAvailableStatus() Obtain Trigger status
 * @method void setAvailableStatus(string $AvailableStatus) Set Trigger status
 * @method string getResourceId() Obtain Minimum resource ID of trigger
 * @method void setResourceId(string $ResourceId) Set Minimum resource ID of trigger
 * @method string getBindStatus() Obtain Trigger-Function binding status
 * @method void setBindStatus(string $BindStatus) Set Trigger-Function binding status
 * @method string getTriggerAttribute() Obtain Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
 * @method void setTriggerAttribute(string $TriggerAttribute) Set Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
 * @method string getQualifier() Obtain The alias or version bound with the trigger
 * @method void setQualifier(string $Qualifier) Set The alias or version bound with the trigger
 * @method string getDescription() Obtain Trigger description
 * @method void setDescription(string $Description) Set Trigger description
 */
class Trigger extends AbstractModel
{
    /**
     * @var string Latest modification time of the trigger
     */
    public $ModTime;

    /**
     * @var string Trigger type
     */
    public $Type;

    /**
     * @var string Detailed trigger configuration
     */
    public $TriggerDesc;

    /**
     * @var string Trigger name
     */
    public $TriggerName;

    /**
     * @var string Creation time of the trigger
     */
    public $AddTime;

    /**
     * @var integer Enabling switch
     */
    public $Enable;

    /**
     * @var string Custom parameter
     */
    public $CustomArgument;

    /**
     * @var string Trigger status
     */
    public $AvailableStatus;

    /**
     * @var string Minimum resource ID of trigger
     * @deprecated
     */
    public $ResourceId;

    /**
     * @var string Trigger-Function binding status
     * @deprecated
     */
    public $BindStatus;

    /**
     * @var string Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
     * @deprecated
     */
    public $TriggerAttribute;

    /**
     * @var string The alias or version bound with the trigger
     */
    public $Qualifier;

    /**
     * @var string Trigger description
     */
    public $Description;

    /**
     * @param string $ModTime Latest modification time of the trigger
     * @param string $Type Trigger type
     * @param string $TriggerDesc Detailed trigger configuration
     * @param string $TriggerName Trigger name
     * @param string $AddTime Creation time of the trigger
     * @param integer $Enable Enabling switch
     * @param string $CustomArgument Custom parameter
     * @param string $AvailableStatus Trigger status
     * @param string $ResourceId Minimum resource ID of trigger
     * @param string $BindStatus Trigger-Function binding status
     * @param string $TriggerAttribute Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
     * @param string $Qualifier The alias or version bound with the trigger
     * @param string $Description Trigger description
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CustomArgument",$param) and $param["CustomArgument"] !== null) {
            $this->CustomArgument = $param["CustomArgument"];
        }

        if (array_key_exists("AvailableStatus",$param) and $param["AvailableStatus"] !== null) {
            $this->AvailableStatus = $param["AvailableStatus"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("TriggerAttribute",$param) and $param["TriggerAttribute"] !== null) {
            $this->TriggerAttribute = $param["TriggerAttribute"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
