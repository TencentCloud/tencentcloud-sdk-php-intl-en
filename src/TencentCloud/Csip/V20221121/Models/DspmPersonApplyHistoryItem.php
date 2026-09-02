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
 * Visitor application records
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getPersonName() Obtain Name
 * @method void setPersonName(string $PersonName) Set Name
 * @method string getPhone() Obtain Mobile number.
 * @method void setPhone(string $Phone) Set Mobile number.
 * @method string getValidateFrom() Obtain Access permission effective time.
 * @method void setValidateFrom(string $ValidateFrom) Set Access permission effective time.
 * @method string getValidateTo() Obtain Access privilege expiration time.
 * @method void setValidateTo(string $ValidateTo) Set Access privilege expiration time.
 * @method integer getValidatePeriod() Obtain Access permission validity period. In milliseconds.
 * @method void setValidatePeriod(integer $ValidatePeriod) Set Access permission validity period. In milliseconds.
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission information.
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission information.
 * @method integer getValidStatus() Obtain Whether it is valid. 0: invalid; 1: valid.
 * @method void setValidStatus(integer $ValidStatus) Set Whether it is valid. 0: invalid; 1: valid.
 */
class DspmPersonApplyHistoryItem extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Name
     */
    public $PersonName;

    /**
     * @var string Mobile number.
     */
    public $Phone;

    /**
     * @var string Access permission effective time.
     */
    public $ValidateFrom;

    /**
     * @var string Access privilege expiration time.
     */
    public $ValidateTo;

    /**
     * @var integer Access permission validity period. In milliseconds.
     */
    public $ValidatePeriod;

    /**
     * @var DspmDbAccountPrivilege Permission information.
     */
    public $Privilege;

    /**
     * @var integer Whether it is valid. 0: invalid; 1: valid.
     */
    public $ValidStatus;

    /**
     * @param string $AssetId Asset ID
     * @param string $PersonName Name
     * @param string $Phone Mobile number.
     * @param string $ValidateFrom Access permission effective time.
     * @param string $ValidateTo Access privilege expiration time.
     * @param integer $ValidatePeriod Access permission validity period. In milliseconds.
     * @param DspmDbAccountPrivilege $Privilege Permission information.
     * @param integer $ValidStatus Whether it is valid. 0: invalid; 1: valid.
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }
    }
}
