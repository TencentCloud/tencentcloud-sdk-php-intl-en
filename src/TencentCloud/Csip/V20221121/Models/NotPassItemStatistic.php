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
 * Statistics of detection failed items by policy group.
 *
 * @method string getPolicyType() Obtain Policy type. Valid values: SYSTEM (system policy), SELF (custom policy).
 * @method void setPolicyType(string $PolicyType) Set Policy type. Valid values: SYSTEM (system policy), SELF (custom policy).
 * @method integer getPolicyID() Obtain Policy ID. 0 for a SYSTEM policy.
 * @method void setPolicyID(integer $PolicyID) Set Policy ID. 0 for a SYSTEM policy.
 * @method integer getParentCategoryID() Obtain Parent category ID. 0 for SELF policies.
 * @method void setParentCategoryID(integer $ParentCategoryID) Set Parent category ID. 0 for SELF policies.
 * @method integer getNotPassCount() Obtain Number of failed check items under this policy.
 * @method void setNotPassCount(integer $NotPassCount) Set Number of failed check items under this policy.
 * @method string getName() Obtain Policy or category name. SYSTEM takes the parent category name, and SELF takes the policy name.
 * @method void setName(string $Name) Set Policy or category name. SYSTEM takes the parent category name, and SELF takes the policy name.
 */
class NotPassItemStatistic extends AbstractModel
{
    /**
     * @var string Policy type. Valid values: SYSTEM (system policy), SELF (custom policy).
     */
    public $PolicyType;

    /**
     * @var integer Policy ID. 0 for a SYSTEM policy.
     */
    public $PolicyID;

    /**
     * @var integer Parent category ID. 0 for SELF policies.
     */
    public $ParentCategoryID;

    /**
     * @var integer Number of failed check items under this policy.
     */
    public $NotPassCount;

    /**
     * @var string Policy or category name. SYSTEM takes the parent category name, and SELF takes the policy name.
     */
    public $Name;

    /**
     * @param string $PolicyType Policy type. Valid values: SYSTEM (system policy), SELF (custom policy).
     * @param integer $PolicyID Policy ID. 0 for a SYSTEM policy.
     * @param integer $ParentCategoryID Parent category ID. 0 for SELF policies.
     * @param integer $NotPassCount Number of failed check items under this policy.
     * @param string $Name Policy or category name. SYSTEM takes the parent category name, and SELF takes the policy name.
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

        if (array_key_exists("NotPassCount",$param) and $param["NotPassCount"] !== null) {
            $this->NotPassCount = $param["NotPassCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
