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
 * Notification asset scope
 *
 * @method integer getAssetRange() Obtain Asset scope type (aligned with NotifyAssetRange)
Enumeration values:
1: All hosts (removable)
2: Specified hosts
3: Select by tag
 * @method void setAssetRange(integer $AssetRange) Set Asset scope type (aligned with NotifyAssetRange)
Enumeration values:
1: All hosts (removable)
2: Specified hosts
3: Select by tag
 * @method array getInstanceIds() Obtain quuid list of selected hosts. It takes effect only when AssetRange=2.
 * @method void setInstanceIds(array $InstanceIds) Set quuid list of selected hosts. It takes effect only when AssetRange=2.
 * @method array getExcludedInstanceIds() Obtain Excluded host quuid list. This parameter takes effect only when AssetRange is 1.
 * @method void setExcludedInstanceIds(array $ExcludedInstanceIds) Set Excluded host quuid list. This parameter takes effect only when AssetRange is 1.
 * @method array getTagIds() Obtain Security center tag ID list. It takes effect only when AssetRange is 3.
 * @method void setTagIds(array $TagIds) Set Security center tag ID list. It takes effect only when AssetRange is 3.
 * @method array getCloudTags() Obtain List of Tencent Cloud tags. It takes effect only when AssetRange is set to 3.
Input parameter limitation: when AssetRange=3, TagIds and CloudTags cannot be empty at the same time.
 * @method void setCloudTags(array $CloudTags) Set List of Tencent Cloud tags. It takes effect only when AssetRange is set to 3.
Input parameter limitation: when AssetRange=3, TagIds and CloudTags cannot be empty at the same time.
 */
class WebhookAssetScope extends AbstractModel
{
    /**
     * @var integer Asset scope type (aligned with NotifyAssetRange)
Enumeration values:
1: All hosts (removable)
2: Specified hosts
3: Select by tag
     */
    public $AssetRange;

    /**
     * @var array quuid list of selected hosts. It takes effect only when AssetRange=2.
     */
    public $InstanceIds;

    /**
     * @var array Excluded host quuid list. This parameter takes effect only when AssetRange is 1.
     */
    public $ExcludedInstanceIds;

    /**
     * @var array Security center tag ID list. It takes effect only when AssetRange is 3.
     */
    public $TagIds;

    /**
     * @var array List of Tencent Cloud tags. It takes effect only when AssetRange is set to 3.
Input parameter limitation: when AssetRange=3, TagIds and CloudTags cannot be empty at the same time.
     */
    public $CloudTags;

    /**
     * @param integer $AssetRange Asset scope type (aligned with NotifyAssetRange)
Enumeration values:
1: All hosts (removable)
2: Specified hosts
3: Select by tag
     * @param array $InstanceIds quuid list of selected hosts. It takes effect only when AssetRange=2.
     * @param array $ExcludedInstanceIds Excluded host quuid list. This parameter takes effect only when AssetRange is 1.
     * @param array $TagIds Security center tag ID list. It takes effect only when AssetRange is 3.
     * @param array $CloudTags List of Tencent Cloud tags. It takes effect only when AssetRange is set to 3.
Input parameter limitation: when AssetRange=3, TagIds and CloudTags cannot be empty at the same time.
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
    }
}
