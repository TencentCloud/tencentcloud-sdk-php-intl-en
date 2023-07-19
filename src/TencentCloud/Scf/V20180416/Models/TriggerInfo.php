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
 * Trigger information
 *
 * @method integer getEnable() Obtain Whether to enable
 * @method void setEnable(integer $Enable) Set Whether to enable
 * @method string getQualifier() Obtain Function version or alias
 * @method void setQualifier(string $Qualifier) Set Function version or alias
 * @method string getTriggerName() Obtain Trigger name
 * @method void setTriggerName(string $TriggerName) Set Trigger name
 * @method string getType() Obtain Trigger type
 * @method void setType(string $Type) Set Trigger type
 * @method string getTriggerDesc() Obtain Detailed configuration of trigger
 * @method void setTriggerDesc(string $TriggerDesc) Set Detailed configuration of trigger
 * @method string getAvailableStatus() Obtain Whether the trigger is available
 * @method void setAvailableStatus(string $AvailableStatus) Set Whether the trigger is available
 * @method string getCustomArgument() Obtain Custom parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCustomArgument(string $CustomArgument) Set Custom parameter
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddTime() Obtain Trigger creation time
 * @method void setAddTime(string $AddTime) Set Trigger creation time
 * @method string getModTime() Obtain Trigger last modified time
 * @method void setModTime(string $ModTime) Set Trigger last modified time
 * @method string getResourceId() Obtain Minimum resource ID of trigger
 * @method void setResourceId(string $ResourceId) Set Minimum resource ID of trigger
 * @method string getBindStatus() Obtain Trigger-Function binding status
 * @method void setBindStatus(string $BindStatus) Set Trigger-Function binding status
 * @method string getTriggerAttribute() Obtain Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
 * @method void setTriggerAttribute(string $TriggerAttribute) Set Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
 * @method string getDescription() Obtain Description of a custom trigger 
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description of a custom trigger 
Note: This parameter may return null, indicating that no valid values can be obtained.
 */
class TriggerInfo extends AbstractModel
{
    /**
     * @var integer Whether to enable
     */
    public $Enable;

    /**
     * @var string Function version or alias
     */
    public $Qualifier;

    /**
     * @var string Trigger name
     */
    public $TriggerName;

    /**
     * @var string Trigger type
     */
    public $Type;

    /**
     * @var string Detailed configuration of trigger
     */
    public $TriggerDesc;

    /**
     * @var string Whether the trigger is available
     */
    public $AvailableStatus;

    /**
     * @var string Custom parameter
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CustomArgument;

    /**
     * @var string Trigger creation time
     */
    public $AddTime;

    /**
     * @var string Trigger last modified time
     */
    public $ModTime;

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
     * @var string Description of a custom trigger 
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param integer $Enable Whether to enable
     * @param string $Qualifier Function version or alias
     * @param string $TriggerName Trigger name
     * @param string $Type Trigger type
     * @param string $TriggerDesc Detailed configuration of trigger
     * @param string $AvailableStatus Whether the trigger is available
     * @param string $CustomArgument Custom parameter
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddTime Trigger creation time
     * @param string $ModTime Trigger last modified time
     * @param string $ResourceId Minimum resource ID of trigger
     * @param string $BindStatus Trigger-Function binding status
     * @param string $TriggerAttribute Trigger type. Two-way means that the trigger can be manipulated in both consoles, while one-way means that the trigger can be created only in the SCF Console
     * @param string $Description Description of a custom trigger 
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("AvailableStatus",$param) and $param["AvailableStatus"] !== null) {
            $this->AvailableStatus = $param["AvailableStatus"];
        }

        if (array_key_exists("CustomArgument",$param) and $param["CustomArgument"] !== null) {
            $this->CustomArgument = $param["CustomArgument"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
