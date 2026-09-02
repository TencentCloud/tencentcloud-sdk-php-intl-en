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
 * Notification asset scope configuration item
 *
 * @method string getModule() Obtain <p>Module name</p>
 * @method void setModule(string $Module) Set <p>Module name</p>
 * @method string getSubModule() Obtain <p>Submodule</p>
 * @method void setSubModule(string $SubModule) Set <p>Submodule</p>
 * @method integer getAssetRange() Obtain <p>Asset scope</p><p>Enumeration values:</p><ul><li>0: meaningless</li><li>1: all</li><li>2: selected</li><li>3: by tag</li></ul>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope</p><p>Enumeration values:</p><ul><li>0: meaningless</li><li>1: all</li><li>2: selected</li><li>3: by tag</li></ul>
 * @method array getInstanceIds() Obtain <p>ID of selected instances</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>ID of selected instances</p>
 * @method array getExcludedInstanceIds() Obtain <p>Removed instance ID</p>
 * @method void setExcludedInstanceIds(array $ExcludedInstanceIds) Set <p>Removed instance ID</p>
 * @method array getTagIds() Obtain <p>Tag ID</p>
 * @method void setTagIds(array $TagIds) Set <p>Tag ID</p>
 * @method array getCloudTags() Obtain <p>Cloud tag</p>
 * @method void setCloudTags(array $CloudTags) Set <p>Cloud tag</p>
 * @method integer getTotalCount() Obtain <p>Total.</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total.</p>
 */
class NotifyAssetConfigItem extends AbstractModel
{
    /**
     * @var string <p>Module name</p>
     */
    public $Module;

    /**
     * @var string <p>Submodule</p>
     */
    public $SubModule;

    /**
     * @var integer <p>Asset scope</p><p>Enumeration values:</p><ul><li>0: meaningless</li><li>1: all</li><li>2: selected</li><li>3: by tag</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>ID of selected instances</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Removed instance ID</p>
     */
    public $ExcludedInstanceIds;

    /**
     * @var array <p>Tag ID</p>
     */
    public $TagIds;

    /**
     * @var array <p>Cloud tag</p>
     */
    public $CloudTags;

    /**
     * @var integer <p>Total.</p>
     */
    public $TotalCount;

    /**
     * @param string $Module <p>Module name</p>
     * @param string $SubModule <p>Submodule</p>
     * @param integer $AssetRange <p>Asset scope</p><p>Enumeration values:</p><ul><li>0: meaningless</li><li>1: all</li><li>2: selected</li><li>3: by tag</li></ul>
     * @param array $InstanceIds <p>ID of selected instances</p>
     * @param array $ExcludedInstanceIds <p>Removed instance ID</p>
     * @param array $TagIds <p>Tag ID</p>
     * @param array $CloudTags <p>Cloud tag</p>
     * @param integer $TotalCount <p>Total.</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("SubModule",$param) and $param["SubModule"] !== null) {
            $this->SubModule = $param["SubModule"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludedInstanceIds",$param) and $param["ExcludedInstanceIds"] !== null) {
            $this->ExcludedInstanceIds = $param["ExcludedInstanceIds"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = $param["CloudTags"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
