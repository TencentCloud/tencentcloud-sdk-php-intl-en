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
 * CreateCustomGroup request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getGroupName() Obtain <p>Custom group name.</p>
 * @method void setGroupName(string $GroupName) Set <p>Custom group name.</p>
 * @method string getGroupType() Obtain <p>Custom group type. It cannot be modified after creation. Different types of custom groups support different entry types.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group, supporting JA3 and JA4 entries</li><li>UA: UA group, supporting UA entries</li><li>Referer: Referer group, supporting Referer entries</li></ul>
 * @method void setGroupType(string $GroupType) Set <p>Custom group type. It cannot be modified after creation. Different types of custom groups support different entry types.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group, supporting JA3 and JA4 entries</li><li>UA: UA group, supporting UA entries</li><li>Referer: Referer group, supporting Referer entries</li></ul>
 * @method array getGroupItems() Obtain <p>List of custom group entries.</p>
 * @method void setGroupItems(array $GroupItems) Set <p>List of custom group entries.</p>
 */
class CreateCustomGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Custom group name.</p>
     */
    public $GroupName;

    /**
     * @var string <p>Custom group type. It cannot be modified after creation. Different types of custom groups support different entry types.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group, supporting JA3 and JA4 entries</li><li>UA: UA group, supporting UA entries</li><li>Referer: Referer group, supporting Referer entries</li></ul>
     */
    public $GroupType;

    /**
     * @var array <p>List of custom group entries.</p>
     */
    public $GroupItems;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $GroupName <p>Custom group name.</p>
     * @param string $GroupType <p>Custom group type. It cannot be modified after creation. Different types of custom groups support different entry types.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group, supporting JA3 and JA4 entries</li><li>UA: UA group, supporting UA entries</li><li>Referer: Referer group, supporting Referer entries</li></ul>
     * @param array $GroupItems <p>List of custom group entries.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupItems",$param) and $param["GroupItems"] !== null) {
            $this->GroupItems = [];
            foreach ($param["GroupItems"] as $key => $value){
                $obj = new CustomGroupItem();
                $obj->deserialize($value);
                array_push($this->GroupItems, $obj);
            }
        }
    }
}
