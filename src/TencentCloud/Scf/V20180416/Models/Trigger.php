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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trigger type
 *
 * @method string getModTime() Obtain Last modification time of the trigger
 * @method void setModTime(string $ModTime) Set Last modification time of the trigger
 * @method string getType() Obtain Trigger type
 * @method void setType(string $Type) Set Trigger type
 * @method string getTriggerDesc() Obtain Trigger detailed configuration
 * @method void setTriggerDesc(string $TriggerDesc) Set Trigger detailed configuration
 * @method string getTriggerName() Obtain Trigger name.
 * @method void setTriggerName(string $TriggerName) Set Trigger name.
 * @method string getAddTime() Obtain Trigger creation time
 * @method void setAddTime(string $AddTime) Set Trigger creation time
 * @method integer getEnable() Obtain Enable switch
 * @method void setEnable(integer $Enable) Set Enable switch
 * @method string getCustomArgument() Obtain Customer custom parameter
 * @method void setCustomArgument(string $CustomArgument) Set Customer custom parameter
 * @method string getAvailableStatus() Obtain Trigger status
 * @method void setAvailableStatus(string $AvailableStatus) Set Trigger status
 * @method string getResourceId() Obtain Minimum resource ID of the trigger
 * @method void setResourceId(string $ResourceId) Set Minimum resource ID of the trigger
 * @method string getBindStatus() Obtain Binding status of the trigger and SCF
 * @method void setBindStatus(string $BindStatus) Set Binding status of the trigger and SCF
 * @method string getTriggerAttribute() Obtain Trigger type. Two-way means both the left and right consoles can operate. One-way means only the SCF console can create.
 * @method void setTriggerAttribute(string $TriggerAttribute) Set Trigger type. Two-way means both the left and right consoles can operate. One-way means only the SCF console can create.
 * @method string getQualifier() Obtain Alias name or version bound to the trigger
 * @method void setQualifier(string $Qualifier) Set Alias name or version bound to the trigger
 * @method string getDescription() Obtain Trigger description.
 * @method void setDescription(string $Description) Set Trigger description.
 */
class Trigger extends AbstractModel
{
    /**
     * @var string Last modification time of the trigger
     */
    public $ModTime;

    /**
     * @var string Trigger type
     */
    public $Type;

    /**
     * @var string Trigger detailed configuration
     */
    public $TriggerDesc;

    /**
     * @var string Trigger name.
     */
    public $TriggerName;

    /**
     * @var string Trigger creation time
     */
    public $AddTime;

    /**
     * @var integer Enable switch
     */
    public $Enable;

    /**
     * @var string Customer custom parameter
     */
    public $CustomArgument;

    /**
     * @var string Trigger status
     */
    public $AvailableStatus;

    /**
     * @var string Minimum resource ID of the trigger
     * @deprecated
     */
    public $ResourceId;

    /**
     * @var string Binding status of the trigger and SCF
     * @deprecated
     */
    public $BindStatus;

    /**
     * @var string Trigger type. Two-way means both the left and right consoles can operate. One-way means only the SCF console can create.
     * @deprecated
     */
    public $TriggerAttribute;

    /**
     * @var string Alias name or version bound to the trigger
     */
    public $Qualifier;

    /**
     * @var string Trigger description.
     */
    public $Description;

    /**
     * @param string $ModTime Last modification time of the trigger
     * @param string $Type Trigger type
     * @param string $TriggerDesc Trigger detailed configuration
     * @param string $TriggerName Trigger name.
     * @param string $AddTime Trigger creation time
     * @param integer $Enable Enable switch
     * @param string $CustomArgument Customer custom parameter
     * @param string $AvailableStatus Trigger status
     * @param string $ResourceId Minimum resource ID of the trigger
     * @param string $BindStatus Binding status of the trigger and SCF
     * @param string $TriggerAttribute Trigger type. Two-way means both the left and right consoles can operate. One-way means only the SCF console can create.
     * @param string $Qualifier Alias name or version bound to the trigger
     * @param string $Description Trigger description.
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
