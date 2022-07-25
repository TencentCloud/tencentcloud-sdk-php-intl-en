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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcesByTag request structure.
 *
 * @method string getTagKey() Obtain Tag key.
 * @method void setTagKey(string $TagKey) Set Tag key.
 * @method string getTagValue() Obtain Tag value.
 * @method void setTagValue(string $TagValue) Set Tag value.
 * @method string getResourceType() Obtain Resource types:
Proxy (connection);
ProxyGroup (connection group);
RealServer (origin server).
If this field is not specified, all resources with the tag will be queried.
 * @method void setResourceType(string $ResourceType) Set Resource types:
Proxy (connection);
ProxyGroup (connection group);
RealServer (origin server).
If this field is not specified, all resources with the tag will be queried.
 */
class DescribeResourcesByTagRequest extends AbstractModel
{
    /**
     * @var string Tag key.
     */
    public $TagKey;

    /**
     * @var string Tag value.
     */
    public $TagValue;

    /**
     * @var string Resource types:
Proxy (connection);
ProxyGroup (connection group);
RealServer (origin server).
If this field is not specified, all resources with the tag will be queried.
     */
    public $ResourceType;

    /**
     * @param string $TagKey Tag key.
     * @param string $TagValue Tag value.
     * @param string $ResourceType Resource types:
Proxy (connection);
ProxyGroup (connection group);
RealServer (origin server).
If this field is not specified, all resources with the tag will be queried.
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
