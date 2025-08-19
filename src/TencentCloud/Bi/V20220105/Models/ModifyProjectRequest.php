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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProject request structure.
 *
 * @method integer getId() Obtain Project ID.

 * @method void setId(integer $Id) Set Project ID.

 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getColorCode() Obtain Color value.
 * @method void setColorCode(string $ColorCode) Set Color value.
 * @method string getLogo() Obtain Icon.
 * @method void setLogo(string $Logo) Set Icon.
 * @method string getMark() Obtain Remarks.
 * @method void setMark(string $Mark) Set Remarks.
 * @method boolean getIsApply() Obtain Available upon request.
 * @method void setIsApply(boolean $IsApply) Set Available upon request.
 * @method string getSeed() Obtain Seed.
 * @method void setSeed(string $Seed) Set Seed.
 * @method integer getDefaultPanelType() Obtain Default dashboard.
 * @method void setDefaultPanelType(integer $DefaultPanelType) Set Default dashboard.
 * @method string getPanelScope() Obtain 2
 * @method void setPanelScope(string $PanelScope) Set 2
 * @method string getManagePlatform() Obtain Project management platform.
 * @method void setManagePlatform(string $ManagePlatform) Set Project management platform.
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var integer Project ID.

     */
    public $Id;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Color value.
     */
    public $ColorCode;

    /**
     * @var string Icon.
     */
    public $Logo;

    /**
     * @var string Remarks.
     */
    public $Mark;

    /**
     * @var boolean Available upon request.
     */
    public $IsApply;

    /**
     * @var string Seed.
     */
    public $Seed;

    /**
     * @var integer Default dashboard.
     */
    public $DefaultPanelType;

    /**
     * @var string 2
     */
    public $PanelScope;

    /**
     * @var string Project management platform.
     */
    public $ManagePlatform;

    /**
     * @param integer $Id Project ID.

     * @param string $Name Name.
     * @param string $ColorCode Color value.
     * @param string $Logo Icon.
     * @param string $Mark Remarks.
     * @param boolean $IsApply Available upon request.
     * @param string $Seed Seed.
     * @param integer $DefaultPanelType Default dashboard.
     * @param string $PanelScope 2
     * @param string $ManagePlatform Project management platform.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ColorCode",$param) and $param["ColorCode"] !== null) {
            $this->ColorCode = $param["ColorCode"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("IsApply",$param) and $param["IsApply"] !== null) {
            $this->IsApply = $param["IsApply"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }

        if (array_key_exists("PanelScope",$param) and $param["PanelScope"] !== null) {
            $this->PanelScope = $param["PanelScope"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }
    }
}
