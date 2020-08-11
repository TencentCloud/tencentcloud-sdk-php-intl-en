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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcesTagValue request structure.
 *
 * @method string getServiceType() Obtain Resource service name
 * @method void setServiceType(string $ServiceType) Set Resource service name
 * @method array getResourceIds() Obtain Resource ID array, which can contain up to 50 resources
 * @method void setResourceIds(array $ResourceIds) Set Resource ID array, which can contain up to 50 resources
 * @method string getTagKey() Obtain Tag key
 * @method void setTagKey(string $TagKey) Set Tag key
 * @method string getTagValue() Obtain Tag value
 * @method void setTagValue(string $TagValue) Set Tag value
 * @method string getResourceRegion() Obtain Resource region. This field is not required for resources that do not have the region attribute
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region. This field is not required for resources that do not have the region attribute
 * @method string getResourcePrefix() Obtain Resource prefix, which is not required for COS buckets
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix, which is not required for COS buckets
 */
class ModifyResourcesTagValueRequest extends AbstractModel
{
    /**
     * @var string Resource service name
     */
    public $ServiceType;

    /**
     * @var array Resource ID array, which can contain up to 50 resources
     */
    public $ResourceIds;

    /**
     * @var string Tag key
     */
    public $TagKey;

    /**
     * @var string Tag value
     */
    public $TagValue;

    /**
     * @var string Resource region. This field is not required for resources that do not have the region attribute
     */
    public $ResourceRegion;

    /**
     * @var string Resource prefix, which is not required for COS buckets
     */
    public $ResourcePrefix;

    /**
     * @param string $ServiceType Resource service name
     * @param array $ResourceIds Resource ID array, which can contain up to 50 resources
     * @param string $TagKey Tag key
     * @param string $TagValue Tag value
     * @param string $ResourceRegion Resource region. This field is not required for resources that do not have the region attribute
     * @param string $ResourcePrefix Resource prefix, which is not required for COS buckets
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }
    }
}
