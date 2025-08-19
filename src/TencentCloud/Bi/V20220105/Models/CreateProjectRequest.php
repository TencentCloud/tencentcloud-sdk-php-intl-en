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
 * CreateProject request structure.
 *
 * @method string getName() Obtain Project name.
 * @method void setName(string $Name) Set Project name.
 * @method string getColorCode() Obtain Background color of the logo.
 * @method void setColorCode(string $ColorCode) Set Background color of the logo.
 * @method string getLogo() Obtain Project logo.
 * @method void setLogo(string $Logo) Set Project logo.
 * @method string getMark() Obtain Remarks.
 * @method void setMark(string $Mark) Set Remarks.
 * @method boolean getIsApply() Obtain Whether to allow user requests.
 * @method void setIsApply(boolean $IsApply) Set Whether to allow user requests.
 * @method integer getDefaultPanelType() Obtain Default dashboard.
 * @method void setDefaultPanelType(integer $DefaultPanelType) Set Default dashboard.
 * @method string getManagePlatform() Obtain Management platform.
 * @method void setManagePlatform(string $ManagePlatform) Set Management platform.
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string Project name.
     */
    public $Name;

    /**
     * @var string Background color of the logo.
     */
    public $ColorCode;

    /**
     * @var string Project logo.
     */
    public $Logo;

    /**
     * @var string Remarks.
     */
    public $Mark;

    /**
     * @var boolean Whether to allow user requests.
     */
    public $IsApply;

    /**
     * @var integer Default dashboard.
     */
    public $DefaultPanelType;

    /**
     * @var string Management platform.
     */
    public $ManagePlatform;

    /**
     * @param string $Name Project name.
     * @param string $ColorCode Background color of the logo.
     * @param string $Logo Project logo.
     * @param string $Mark Remarks.
     * @param boolean $IsApply Whether to allow user requests.
     * @param integer $DefaultPanelType Default dashboard.
     * @param string $ManagePlatform Management platform.
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

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }
    }
}
