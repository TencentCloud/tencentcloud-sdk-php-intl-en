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
 * ScanBaselineRiskList request structure.
 *
 * @method string getPolicyType() Obtain <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
 * @method integer getPolicyID() Obtain <p>Target baseline policy ID. It must be greater than 0.</p>
 * @method void setPolicyID(integer $PolicyID) Set <p>Target baseline policy ID. It must be greater than 0.</p>
 * @method integer getParentCategoryID() Obtain <p>Baseline system parent category ID.</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>Baseline system parent category ID.</p>
 * @method array getRiskIDList() Obtain <p>List of RiskIDs of risk records pending rescan. It cannot be empty and elements cannot be empty strings.</p>
 * @method void setRiskIDList(array $RiskIDList) Set <p>List of RiskIDs of risk records pending rescan. It cannot be empty and elements cannot be empty strings.</p>
 * @method integer getItemID() Obtain <p>Check item ID</p>
 * @method void setItemID(integer $ItemID) Set <p>Check item ID</p>
 * @method integer getCategoryID() Obtain <p>Baseline subcategory ID.</p>
 * @method void setCategoryID(integer $CategoryID) Set <p>Baseline subcategory ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ScanBaselineRiskListRequest extends AbstractModel
{
    /**
     * @var string <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var integer <p>Target baseline policy ID. It must be greater than 0.</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>Baseline system parent category ID.</p>
     */
    public $ParentCategoryID;

    /**
     * @var array <p>List of RiskIDs of risk records pending rescan. It cannot be empty and elements cannot be empty strings.</p>
     */
    public $RiskIDList;

    /**
     * @var integer <p>Check item ID</p>
     */
    public $ItemID;

    /**
     * @var integer <p>Baseline subcategory ID.</p>
     */
    public $CategoryID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param string $PolicyType <p>Baseline policy type. Valid values:</p><ul><li>SYSTEM: system policy (built-in in CSIP)</li><li>SELF: user-defined policy</li></ul>
     * @param integer $PolicyID <p>Target baseline policy ID. It must be greater than 0.</p>
     * @param integer $ParentCategoryID <p>Baseline system parent category ID.</p>
     * @param array $RiskIDList <p>List of RiskIDs of risk records pending rescan. It cannot be empty and elements cannot be empty strings.</p>
     * @param integer $ItemID <p>Check item ID</p>
     * @param integer $CategoryID <p>Baseline subcategory ID.</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("RiskIDList",$param) and $param["RiskIDList"] !== null) {
            $this->RiskIDList = $param["RiskIDList"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
