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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom group entry.
 *
 * @method string getContent() Obtain <p>Entry content.</p>
 * @method void setContent(string $Content) Set <p>Entry content.</p>
 * @method string getItemType() Obtain <p>Entry type.</p><p>Valid values:</p><ul><li>JA3: JA3 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>JA4: JA4 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>UA: UA value, available only when the GroupType of the group is UA</li><li>Referer: Referer value, available only when the GroupType of the group is Referer</li></ul>
 * @method void setItemType(string $ItemType) Set <p>Entry type.</p><p>Valid values:</p><ul><li>JA3: JA3 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>JA4: JA4 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>UA: UA value, available only when the GroupType of the group is UA</li><li>Referer: Referer value, available only when the GroupType of the group is Referer</li></ul>
 */
class CustomGroupItem extends AbstractModel
{
    /**
     * @var string <p>Entry content.</p>
     */
    public $Content;

    /**
     * @var string <p>Entry type.</p><p>Valid values:</p><ul><li>JA3: JA3 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>JA4: JA4 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>UA: UA value, available only when the GroupType of the group is UA</li><li>Referer: Referer value, available only when the GroupType of the group is Referer</li></ul>
     */
    public $ItemType;

    /**
     * @param string $Content <p>Entry content.</p>
     * @param string $ItemType <p>Entry type.</p><p>Valid values:</p><ul><li>JA3: JA3 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>JA4: JA4 fingerprint, available only when the GroupType of the group is TLSFingerprint</li><li>UA: UA value, available only when the GroupType of the group is UA</li><li>Referer: Referer value, available only when the GroupType of the group is Referer</li></ul>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }
    }
}
