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
 * Allowed item
 *
 * @method integer getWhitelistItemId() Obtain Allowed item ID
 * @method void setWhitelistItemId(integer $WhitelistItemId) Set Allowed item ID
 * @method integer getCustomerPolicyItemId() Obtain ID of the customer check item
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) Set ID of the customer check item
 * @method string getName() Obtain Check item name
 * @method void setName(string $Name) Set Check item name
 * @method string getStandardName() Obtain Compliance standard name
 * @method void setStandardName(string $StandardName) Set Compliance standard name
 * @method integer getStandardId() Obtain Compliance standard ID
 * @method void setStandardId(integer $StandardId) Set Compliance standard ID
 * @method integer getAffectedAssetCount() Obtain Number of assets affected by the check item
 * @method void setAffectedAssetCount(integer $AffectedAssetCount) Set Number of assets affected by the check item
 * @method string getLastUpdateTime() Obtain Last update time
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time
 * @method string getInsertTime() Obtain Allowed time
 * @method void setInsertTime(string $InsertTime) Set Allowed time
 */
class ComplianceWhitelistItem extends AbstractModel
{
    /**
     * @var integer Allowed item ID
     */
    public $WhitelistItemId;

    /**
     * @var integer ID of the customer check item
     */
    public $CustomerPolicyItemId;

    /**
     * @var string Check item name
     */
    public $Name;

    /**
     * @var string Compliance standard name
     */
    public $StandardName;

    /**
     * @var integer Compliance standard ID
     */
    public $StandardId;

    /**
     * @var integer Number of assets affected by the check item
     */
    public $AffectedAssetCount;

    /**
     * @var string Last update time
     */
    public $LastUpdateTime;

    /**
     * @var string Allowed time
     */
    public $InsertTime;

    /**
     * @param integer $WhitelistItemId Allowed item ID
     * @param integer $CustomerPolicyItemId ID of the customer check item
     * @param string $Name Check item name
     * @param string $StandardName Compliance standard name
     * @param integer $StandardId Compliance standard ID
     * @param integer $AffectedAssetCount Number of assets affected by the check item
     * @param string $LastUpdateTime Last update time
     * @param string $InsertTime Allowed time
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
        if (array_key_exists("WhitelistItemId",$param) and $param["WhitelistItemId"] !== null) {
            $this->WhitelistItemId = $param["WhitelistItemId"];
        }

        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StandardName",$param) and $param["StandardName"] !== null) {
            $this->StandardName = $param["StandardName"];
        }

        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("AffectedAssetCount",$param) and $param["AffectedAssetCount"] !== null) {
            $this->AffectedAssetCount = $param["AffectedAssetCount"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
