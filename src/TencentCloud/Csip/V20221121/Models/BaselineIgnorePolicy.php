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
 * Baseline ignore policy
 *
 * @method integer getID() Obtain <p>Ignore policy record ID.</p>
 * @method void setID(integer $ID) Set <p>Ignore policy record ID.</p>
 * @method string getItemName() Obtain <p>Detection item name.</p>
 * @method void setItemName(string $ItemName) Set <p>Detection item name.</p>
 * @method string getCategoryName() Obtain <p>Category name of the detection item.</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Category name of the detection item.</p>
 * @method integer getAppID() Obtain <p>User AppID.</p>
 * @method void setAppID(integer $AppID) Set <p>User AppID.</p>
 * @method string getScopeType() Obtain <p>Ignorable range type</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
 * @method void setScopeType(string $ScopeType) Set <p>Ignorable range type</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
 * @method array getScopeIncludeList() Obtain <p>Custom asset ID list. This parameter is valid only when PICK is selected. Store instance-id or cluster ID.</p>
 * @method void setScopeIncludeList(array $ScopeIncludeList) Set <p>Custom asset ID list. This parameter is valid only when PICK is selected. Store instance-id or cluster ID.</p>
 * @method array getScopeExcludeList() Obtain <p>Remove asset ID list. This parameter is valid only when set to ALL. Store instance-id or cluster ID.</p>
 * @method void setScopeExcludeList(array $ScopeExcludeList) Set <p>Remove asset ID list. This parameter is valid only when set to ALL. Store instance-id or cluster ID.</p>
 * @method string getRemark() Obtain <p>Remark information.</p>
 * @method void setRemark(string $Remark) Set <p>Remark information.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getModifyTime() Obtain <p>Last modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last modification time.</p>
 * @method string getAssetType() Obtain <p>Corresponding asset type</p><p>Enumeration values:</p><ul><li>HOST: host</li><li>CLUSTER: cluster-related assets</li></ul>
 * @method void setAssetType(string $AssetType) Set <p>Corresponding asset type</p><p>Enumeration values:</p><ul><li>HOST: host</li><li>CLUSTER: cluster-related assets</li></ul>
 * @method integer getItemID() Obtain <p>Check item ID</p>
 * @method void setItemID(integer $ItemID) Set <p>Check item ID</p>
 */
class BaselineIgnorePolicy extends AbstractModel
{
    /**
     * @var integer <p>Ignore policy record ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Detection item name.</p>
     */
    public $ItemName;

    /**
     * @var string <p>Category name of the detection item.</p>
     */
    public $CategoryName;

    /**
     * @var integer <p>User AppID.</p>
     */
    public $AppID;

    /**
     * @var string <p>Ignorable range type</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
     */
    public $ScopeType;

    /**
     * @var array <p>Custom asset ID list. This parameter is valid only when PICK is selected. Store instance-id or cluster ID.</p>
     */
    public $ScopeIncludeList;

    /**
     * @var array <p>Remove asset ID list. This parameter is valid only when set to ALL. Store instance-id or cluster ID.</p>
     */
    public $ScopeExcludeList;

    /**
     * @var string <p>Remark information.</p>
     */
    public $Remark;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modification time.</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>Corresponding asset type</p><p>Enumeration values:</p><ul><li>HOST: host</li><li>CLUSTER: cluster-related assets</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>Check item ID</p>
     */
    public $ItemID;

    /**
     * @param integer $ID <p>Ignore policy record ID.</p>
     * @param string $ItemName <p>Detection item name.</p>
     * @param string $CategoryName <p>Category name of the detection item.</p>
     * @param integer $AppID <p>User AppID.</p>
     * @param string $ScopeType <p>Ignorable range type</p><p>Enumeration values:</p><ul><li>ALL: all assets</li><li>PICK: specified asset</li></ul>
     * @param array $ScopeIncludeList <p>Custom asset ID list. This parameter is valid only when PICK is selected. Store instance-id or cluster ID.</p>
     * @param array $ScopeExcludeList <p>Remove asset ID list. This parameter is valid only when set to ALL. Store instance-id or cluster ID.</p>
     * @param string $Remark <p>Remark information.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ModifyTime <p>Last modification time.</p>
     * @param string $AssetType <p>Corresponding asset type</p><p>Enumeration values:</p><ul><li>HOST: host</li><li>CLUSTER: cluster-related assets</li></ul>
     * @param integer $ItemID <p>Check item ID</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ScopeIncludeList",$param) and $param["ScopeIncludeList"] !== null) {
            $this->ScopeIncludeList = $param["ScopeIncludeList"];
        }

        if (array_key_exists("ScopeExcludeList",$param) and $param["ScopeExcludeList"] !== null) {
            $this->ScopeExcludeList = $param["ScopeExcludeList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }
    }
}
