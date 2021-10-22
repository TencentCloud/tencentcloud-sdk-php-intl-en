<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search criterion
 *
 * @method string getAttributeKey() Obtain Valid values: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, and EventId
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAttributeKey(string $AttributeKey) Set Valid values: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, and EventId
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getAttributeValue() Obtain Value of `AttributeValue`
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAttributeValue(string $AttributeValue) Set Value of `AttributeValue`
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class LookupAttribute extends AbstractModel
{
    /**
     * @var string Valid values: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, and EventId
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AttributeKey;

    /**
     * @var string Value of `AttributeValue`
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AttributeValue;

    /**
     * @param string $AttributeKey Valid values: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, and EventId
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $AttributeValue Value of `AttributeValue`
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("AttributeKey",$param) and $param["AttributeKey"] !== null) {
            $this->AttributeKey = $param["AttributeKey"];
        }

        if (array_key_exists("AttributeValue",$param) and $param["AttributeValue"] !== null) {
            $this->AttributeValue = $param["AttributeValue"];
        }
    }
}
