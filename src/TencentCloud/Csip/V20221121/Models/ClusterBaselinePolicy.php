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
 * Baseline policy for a cluster
 *
 * @method integer getPolicyID() Obtain <p>Baseline policy ID.</p>
 * @method void setPolicyID(integer $PolicyID) Set <p>Baseline policy ID.</p>
 * @method string getPolicyName() Obtain <p>Baseline policy name.</p>
 * @method void setPolicyName(string $PolicyName) Set <p>Baseline policy name.</p>
 * @method string getCheckAssetType() Obtain <p>Asset type to detect.<br>Enumeration values:<br>HOST: host<br>CLUSTER: container cluster</p>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Asset type to detect.<br>Enumeration values:<br>HOST: host<br>CLUSTER: container cluster</p>
 * @method integer getParentCategoryID() Obtain <p>Baseline system parent category ID.</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>Baseline system parent category ID.</p>
 * @method boolean getIsSystem() Obtain <p>Whether it is a system baseline policy. true means system policy, false means custom policy.</p>
 * @method void setIsSystem(boolean $IsSystem) Set <p>Whether it is a system baseline policy. true means system policy, false means custom policy.</p>
 */
class ClusterBaselinePolicy extends AbstractModel
{
    /**
     * @var integer <p>Baseline policy ID.</p>
     */
    public $PolicyID;

    /**
     * @var string <p>Baseline policy name.</p>
     */
    public $PolicyName;

    /**
     * @var string <p>Asset type to detect.<br>Enumeration values:<br>HOST: host<br>CLUSTER: container cluster</p>
     */
    public $CheckAssetType;

    /**
     * @var integer <p>Baseline system parent category ID.</p>
     */
    public $ParentCategoryID;

    /**
     * @var boolean <p>Whether it is a system baseline policy. true means system policy, false means custom policy.</p>
     */
    public $IsSystem;

    /**
     * @param integer $PolicyID <p>Baseline policy ID.</p>
     * @param string $PolicyName <p>Baseline policy name.</p>
     * @param string $CheckAssetType <p>Asset type to detect.<br>Enumeration values:<br>HOST: host<br>CLUSTER: container cluster</p>
     * @param integer $ParentCategoryID <p>Baseline system parent category ID.</p>
     * @param boolean $IsSystem <p>Whether it is a system baseline policy. true means system policy, false means custom policy.</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
