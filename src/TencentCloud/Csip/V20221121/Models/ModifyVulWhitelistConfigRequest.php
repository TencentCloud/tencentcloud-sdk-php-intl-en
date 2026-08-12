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
 * ModifyVulWhitelistConfig request structure.
 *
 * @method integer getId() Obtain <p>id list</
 * @method void setId(integer $Id) Set <p>id list</
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method integer getAssetRange() Obtain <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Select all remove asset</li></ul>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Select all remove asset</li></ul>
 * @method array getAssetList() Obtain <p>Asset list (Quuid list)</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list (Quuid list)</p>
 */
class ModifyVulWhitelistConfigRequest extends AbstractModel
{
    /**
     * @var integer <p>id list</
     */
    public $Id;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Select all remove asset</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>Asset list (Quuid list)</p>
     */
    public $AssetList;

    /**
     * @param integer $Id <p>id list</
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Remark <p>Remarks.</p>
     * @param integer $AssetRange <p>Asset scope</p><p>Enumeration value:</p><ul><li>0: All assets</li><li>1: Custom assets</li><li>2: Select all remove asset</li></ul>
     * @param array $AssetList <p>Asset list (Quuid list)</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }
    }
}
