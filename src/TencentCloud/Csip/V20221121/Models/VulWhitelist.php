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
 * Vulnerability allowlist
 *
 * @method integer getId() Obtain <p>id</p>
 * @method void setId(integer $Id) Set <p>id</p>
 * @method string getName() Obtain <p>Vulnerability name</p>
 * @method void setName(string $Name) Set <p>Vulnerability name</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method integer getAppId() Obtain <p>Account</p>
 * @method void setAppId(integer $AppId) Set <p>Account</p>
 * @method array getAssetList() Obtain <p>Asset list</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method integer getSwitch() Obtain <p>Policy switch (0-off, 1-on)</p>
 * @method void setSwitch(integer $Switch) Set <p>Policy switch (0-off, 1-on)</p>
 * @method integer getAssetRange() Obtain <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Self-selected Assets</li><li>2: Select all excluded asset</li></ul>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Self-selected Assets</li><li>2: Select all excluded asset</li></ul>
 * @method integer getKBId() Obtain <p>Patch KB id</p>
 * @method void setKBId(integer $KBId) Set <p>Patch KB id</p>
 * @method integer getVulId() Obtain <p>Vulnerability Id</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability Id</p>
 */
class VulWhitelist extends AbstractModel
{
    /**
     * @var integer <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $Name;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Account</p>
     */
    public $AppId;

    /**
     * @var array <p>Asset list</p>
     */
    public $AssetList;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Policy switch (0-off, 1-on)</p>
     */
    public $Switch;

    /**
     * @var integer <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Self-selected Assets</li><li>2: Select all excluded asset</li></ul>
     */
    public $AssetRange;

    /**
     * @var integer <p>Patch KB id</p>
     */
    public $KBId;

    /**
     * @var integer <p>Vulnerability Id</p>
     */
    public $VulId;

    /**
     * @param integer $Id <p>id</p>
     * @param string $Name <p>Vulnerability name</p>
     * @param string $Remark <p>Remarks.</p>
     * @param integer $AppId <p>Account</p>
     * @param array $AssetList <p>Asset list</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param integer $Switch <p>Policy switch (0-off, 1-on)</p>
     * @param integer $AssetRange <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Self-selected Assets</li><li>2: Select all excluded asset</li></ul>
     * @param integer $KBId <p>Patch KB id</p>
     * @param integer $VulId <p>Vulnerability Id</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }
    }
}
