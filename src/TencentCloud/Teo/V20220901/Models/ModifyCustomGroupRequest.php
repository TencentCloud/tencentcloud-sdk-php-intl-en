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
 * ModifyCustomGroup request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getGroupId() Obtain <p>Unique ID of the custom group.</p>
 * @method void setGroupId(string $GroupId) Set <p>Unique ID of the custom group.</p>
 * @method string getGroupName() Obtain <p>Custom group name. If this field is not specified, the original value is retained.</p>
 * @method void setGroupName(string $GroupName) Set <p>Custom group name. If this field is not specified, the original value is retained.</p>
 * @method string getGroupItemOperation() Obtain <p>Specifies how to update GroupItems.</p><p>Valid values:</p><ul><li>Replace: Replaces the entire original entry list with GroupItems.</li><li>Append: Appends GroupItems to the group entry list.</li><li>Remove: Removes entries whose Content and ItemType are the same as those in GroupItems from the original entry list. If a specified entry does not exist, it is ignored.</li></ul><p>Default value: Replace</p>
 * @method void setGroupItemOperation(string $GroupItemOperation) Set <p>Specifies how to update GroupItems.</p><p>Valid values:</p><ul><li>Replace: Replaces the entire original entry list with GroupItems.</li><li>Append: Appends GroupItems to the group entry list.</li><li>Remove: Removes entries whose Content and ItemType are the same as those in GroupItems from the original entry list. If a specified entry does not exist, it is ignored.</li></ul><p>Default value: Replace</p>
 * @method array getGroupItems() Obtain <p>List of custom group entries. If this field is not specified, the original value is retained.</p>
 * @method void setGroupItems(array $GroupItems) Set <p>List of custom group entries. If this field is not specified, the original value is retained.</p>
 */
class ModifyCustomGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Unique ID of the custom group.</p>
     */
    public $GroupId;

    /**
     * @var string <p>Custom group name. If this field is not specified, the original value is retained.</p>
     */
    public $GroupName;

    /**
     * @var string <p>Specifies how to update GroupItems.</p><p>Valid values:</p><ul><li>Replace: Replaces the entire original entry list with GroupItems.</li><li>Append: Appends GroupItems to the group entry list.</li><li>Remove: Removes entries whose Content and ItemType are the same as those in GroupItems from the original entry list. If a specified entry does not exist, it is ignored.</li></ul><p>Default value: Replace</p>
     */
    public $GroupItemOperation;

    /**
     * @var array <p>List of custom group entries. If this field is not specified, the original value is retained.</p>
     */
    public $GroupItems;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $GroupId <p>Unique ID of the custom group.</p>
     * @param string $GroupName <p>Custom group name. If this field is not specified, the original value is retained.</p>
     * @param string $GroupItemOperation <p>Specifies how to update GroupItems.</p><p>Valid values:</p><ul><li>Replace: Replaces the entire original entry list with GroupItems.</li><li>Append: Appends GroupItems to the group entry list.</li><li>Remove: Removes entries whose Content and ItemType are the same as those in GroupItems from the original entry list. If a specified entry does not exist, it is ignored.</li></ul><p>Default value: Replace</p>
     * @param array $GroupItems <p>List of custom group entries. If this field is not specified, the original value is retained.</p>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupItemOperation",$param) and $param["GroupItemOperation"] !== null) {
            $this->GroupItemOperation = $param["GroupItemOperation"];
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
