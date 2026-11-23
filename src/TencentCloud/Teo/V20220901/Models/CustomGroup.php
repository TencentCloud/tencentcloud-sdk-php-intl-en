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
 * A security custom group is used to centrally manage a set of reusable security matching entries. For example, you can save multiple JA3/JA4 TLS fingerprints as a TLS fingerprint group and directly reference the group in security rules, avoiding the need to maintain the same fingerprint list in multiple rules.
 *
 * @method string getGroupId() Obtain <p>The unique ID of the custom group.</p>
 * @method void setGroupId(string $GroupId) Set <p>The unique ID of the custom group.</p>
 * @method string getGroupName() Obtain <p>Custom group name.</p>
 * @method void setGroupName(string $GroupName) Set <p>Custom group name.</p>
 * @method string getGroupType() Obtain <p>Custom group type.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group</li><li>UA: UA group</li><li>Referer: Referer group</li></ul>
 * @method void setGroupType(string $GroupType) Set <p>Custom group type.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group</li><li>UA: UA group</li><li>Referer: Referer group</li></ul>
 * @method array getGroupItems() Obtain <p>List of custom group entries.</p>
 * @method void setGroupItems(array $GroupItems) Set <p>List of custom group entries.</p>
 * @method integer getGroupItemTotalCount() Obtain <p>Total number of custom group entries.</p>
 * @method void setGroupItemTotalCount(integer $GroupItemTotalCount) Set <p>Total number of custom group entries.</p>
 * @method integer getRefCount() Obtain <p>Number of times the custom group is referenced.</p>
 * @method void setRefCount(integer $RefCount) Set <p>Number of times the custom group is referenced.</p>
 */
class CustomGroup extends AbstractModel
{
    /**
     * @var string <p>The unique ID of the custom group.</p>
     */
    public $GroupId;

    /**
     * @var string <p>Custom group name.</p>
     */
    public $GroupName;

    /**
     * @var string <p>Custom group type.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group</li><li>UA: UA group</li><li>Referer: Referer group</li></ul>
     */
    public $GroupType;

    /**
     * @var array <p>List of custom group entries.</p>
     */
    public $GroupItems;

    /**
     * @var integer <p>Total number of custom group entries.</p>
     */
    public $GroupItemTotalCount;

    /**
     * @var integer <p>Number of times the custom group is referenced.</p>
     */
    public $RefCount;

    /**
     * @param string $GroupId <p>The unique ID of the custom group.</p>
     * @param string $GroupName <p>Custom group name.</p>
     * @param string $GroupType <p>Custom group type.</p><p>Valid values:</p><ul><li>TLSFingerprint: TLS fingerprint group</li><li>UA: UA group</li><li>Referer: Referer group</li></ul>
     * @param array $GroupItems <p>List of custom group entries.</p>
     * @param integer $GroupItemTotalCount <p>Total number of custom group entries.</p>
     * @param integer $RefCount <p>Number of times the custom group is referenced.</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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

        if (array_key_exists("GroupItemTotalCount",$param) and $param["GroupItemTotalCount"] !== null) {
            $this->GroupItemTotalCount = $param["GroupItemTotalCount"];
        }

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }
    }
}
