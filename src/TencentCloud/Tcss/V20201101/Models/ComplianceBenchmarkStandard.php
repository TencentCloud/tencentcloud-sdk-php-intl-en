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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a compliance standard
 *
 * @method integer getStandardId() Obtain Compliance standard ID
 * @method void setStandardId(integer $StandardId) Set Compliance standard ID
 * @method string getName() Obtain Compliance standard name
 * @method void setName(string $Name) Set Compliance standard name
 * @method integer getPolicyItemCount() Obtain Number of items contained in the compliance standard
 * @method void setPolicyItemCount(integer $PolicyItemCount) Set Number of items contained in the compliance standard
 * @method boolean getEnabled() Obtain Whether to enable the standard
 * @method void setEnabled(boolean $Enabled) Set Whether to enable the standard
 * @method string getDescription() Obtain Description of the standard
 * @method void setDescription(string $Description) Set Description of the standard
 */
class ComplianceBenchmarkStandard extends AbstractModel
{
    /**
     * @var integer Compliance standard ID
     */
    public $StandardId;

    /**
     * @var string Compliance standard name
     */
    public $Name;

    /**
     * @var integer Number of items contained in the compliance standard
     */
    public $PolicyItemCount;

    /**
     * @var boolean Whether to enable the standard
     */
    public $Enabled;

    /**
     * @var string Description of the standard
     */
    public $Description;

    /**
     * @param integer $StandardId Compliance standard ID
     * @param string $Name Compliance standard name
     * @param integer $PolicyItemCount Number of items contained in the compliance standard
     * @param boolean $Enabled Whether to enable the standard
     * @param string $Description Description of the standard
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
        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PolicyItemCount",$param) and $param["PolicyItemCount"] !== null) {
            $this->PolicyItemCount = $param["PolicyItemCount"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
