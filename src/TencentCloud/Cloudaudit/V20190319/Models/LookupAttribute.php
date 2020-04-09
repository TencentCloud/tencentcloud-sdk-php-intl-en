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
 * Search criteria
 *
 * @method string getAttributeKey() Obtain AttributeKey value range: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, EventId
 * @method void setAttributeKey(string $AttributeKey) Set AttributeKey value range: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, EventId
 * @method string getAttributeValue() Obtain AttributeValue
 * @method void setAttributeValue(string $AttributeValue) Set AttributeValue
 */
class LookupAttribute extends AbstractModel
{
    /**
     * @var string AttributeKey value range: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, EventId
     */
    public $AttributeKey;

    /**
     * @var string AttributeValue
     */
    public $AttributeValue;

    /**
     * @param string $AttributeKey AttributeKey value range: RequestId, EventName, ReadOnly, Username, ResourceType, ResourceName, AccessKeyId, EventId
     * @param string $AttributeValue AttributeValue
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
