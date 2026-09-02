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
 * ScanBaselineItemList request structure.
 *
 * @method string getPolicyType() Obtain <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method integer getPolicyID() Obtain <p>Target baseline policy ID, must be greater than 0.</p>
 * @method void setPolicyID(integer $PolicyID) Set <p>Target baseline policy ID, must be greater than 0.</p>
 * @method integer getParentCategoryID() Obtain <p>ID of the parent category in the baseline system.</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>ID of the parent category in the baseline system.</p>
 * @method array getItemIDList() Obtain <p>List of detection item IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
 * @method void setItemIDList(array $ItemIDList) Set <p>List of detection item IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
 * @method integer getCategoryID() Obtain <p>Baseline subcategory ID.</p>
 * @method void setCategoryID(integer $CategoryID) Set <p>Baseline subcategory ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ScanBaselineItemListRequest extends AbstractModel
{
    /**
     * @var string <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var integer <p>Target baseline policy ID, must be greater than 0.</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>ID of the parent category in the baseline system.</p>
     */
    public $ParentCategoryID;

    /**
     * @var array <p>List of detection item IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
     */
    public $ItemIDList;

    /**
     * @var integer <p>Baseline subcategory ID.</p>
     */
    public $CategoryID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param string $PolicyType <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     * @param integer $PolicyID <p>Target baseline policy ID, must be greater than 0.</p>
     * @param integer $ParentCategoryID <p>ID of the parent category in the baseline system.</p>
     * @param array $ItemIDList <p>List of detection item IDs to rescan. It cannot be empty and 0 is not allowed as an element.</p>
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

        if (array_key_exists("ItemIDList",$param) and $param["ItemIDList"] !== null) {
            $this->ItemIDList = $param["ItemIDList"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
