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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check template rules
 *
 * @method string getName() Obtain Health check item name
 * @method void setName(string $Name) Set Health check item name
 * @method string getDescription() Obtain Description of health check rules
 * @method void setDescription(string $Description) Set Description of health check rules
 * @method string getRepairAction() Obtain Fix action
 * @method void setRepairAction(string $RepairAction) Set Fix action
 * @method string getRepairEffect() Obtain Fix impact
 * @method void setRepairEffect(string $RepairEffect) Set Fix impact
 * @method boolean getShouldEnable() Obtain Whether it is recommended to enable check
 * @method void setShouldEnable(boolean $ShouldEnable) Set Whether it is recommended to enable check
 * @method boolean getShouldRepair() Obtain Whether repair is suggested.
 * @method void setShouldRepair(boolean $ShouldRepair) Set Whether repair is suggested.
 * @method string getSeverity() Obtain Severity
 * @method void setSeverity(string $Severity) Set Severity
 */
class HealthCheckTemplateRule extends AbstractModel
{
    /**
     * @var string Health check item name
     */
    public $Name;

    /**
     * @var string Description of health check rules
     */
    public $Description;

    /**
     * @var string Fix action
     */
    public $RepairAction;

    /**
     * @var string Fix impact
     */
    public $RepairEffect;

    /**
     * @var boolean Whether it is recommended to enable check
     */
    public $ShouldEnable;

    /**
     * @var boolean Whether repair is suggested.
     */
    public $ShouldRepair;

    /**
     * @var string Severity
     */
    public $Severity;

    /**
     * @param string $Name Health check item name
     * @param string $Description Description of health check rules
     * @param string $RepairAction Fix action
     * @param string $RepairEffect Fix impact
     * @param boolean $ShouldEnable Whether it is recommended to enable check
     * @param boolean $ShouldRepair Whether repair is suggested.
     * @param string $Severity Severity
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairAction",$param) and $param["RepairAction"] !== null) {
            $this->RepairAction = $param["RepairAction"];
        }

        if (array_key_exists("RepairEffect",$param) and $param["RepairEffect"] !== null) {
            $this->RepairEffect = $param["RepairEffect"];
        }

        if (array_key_exists("ShouldEnable",$param) and $param["ShouldEnable"] !== null) {
            $this->ShouldEnable = $param["ShouldEnable"];
        }

        if (array_key_exists("ShouldRepair",$param) and $param["ShouldRepair"] !== null) {
            $this->ShouldRepair = $param["ShouldRepair"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }
    }
}
