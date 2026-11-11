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
 * ModifyBaselineIgnorePolicy request structure.
 *
 * @method integer getItemID() Obtain <p>Detection item ID, identifying which detection item to set an ignore policy for.</p>
 * @method void setItemID(integer $ItemID) Set <p>Detection item ID, identifying which detection item to set an ignore policy for.</p>
 * @method string getScopeType() Obtain <p>Ignorable range type.</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
 * @method void setScopeType(string $ScopeType) Set <p>Ignorable range type.</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
 * @method string getRemark() Obtain <p>Remark information.</p>
 * @method void setRemark(string $Remark) Set <p>Remark information.</p>
 * @method integer getID() Obtain <p>Ignore policy record ID. Pass 0 when creating, and pass the corresponding record ID when updating.</p>
 * @method void setID(integer $ID) Set <p>Ignore policy record ID. Pass 0 when creating, and pass the corresponding record ID when updating.</p>
 * @method array getScopeIncludeList() Obtain <p>Custom asset ID list. This parameter is valid only when PICK is selected. Import instance-id or cluster ID.</p>
 * @method void setScopeIncludeList(array $ScopeIncludeList) Set <p>Custom asset ID list. This parameter is valid only when PICK is selected. Import instance-id or cluster ID.</p>
 * @method array getScopeExcludeList() Obtain <p>Remove asset ID list. This parameter is valid only when set to ALL. Input instance-id or cluster ID.</p>
 * @method void setScopeExcludeList(array $ScopeExcludeList) Set <p>Remove asset ID list. This parameter is valid only when set to ALL. Input instance-id or cluster ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyBaselineIgnorePolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>Detection item ID, identifying which detection item to set an ignore policy for.</p>
     */
    public $ItemID;

    /**
     * @var string <p>Ignorable range type.</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
     */
    public $ScopeType;

    /**
     * @var string <p>Remark information.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Ignore policy record ID. Pass 0 when creating, and pass the corresponding record ID when updating.</p>
     */
    public $ID;

    /**
     * @var array <p>Custom asset ID list. This parameter is valid only when PICK is selected. Import instance-id or cluster ID.</p>
     */
    public $ScopeIncludeList;

    /**
     * @var array <p>Remove asset ID list. This parameter is valid only when set to ALL. Input instance-id or cluster ID.</p>
     */
    public $ScopeExcludeList;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param integer $ItemID <p>Detection item ID, identifying which detection item to set an ignore policy for.</p>
     * @param string $ScopeType <p>Ignorable range type.</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
     * @param string $Remark <p>Remark information.</p>
     * @param integer $ID <p>Ignore policy record ID. Pass 0 when creating, and pass the corresponding record ID when updating.</p>
     * @param array $ScopeIncludeList <p>Custom asset ID list. This parameter is valid only when PICK is selected. Import instance-id or cluster ID.</p>
     * @param array $ScopeExcludeList <p>Remove asset ID list. This parameter is valid only when set to ALL. Input instance-id or cluster ID.</p>
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ScopeIncludeList",$param) and $param["ScopeIncludeList"] !== null) {
            $this->ScopeIncludeList = $param["ScopeIncludeList"];
        }

        if (array_key_exists("ScopeExcludeList",$param) and $param["ScopeExcludeList"] !== null) {
            $this->ScopeExcludeList = $param["ScopeExcludeList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
