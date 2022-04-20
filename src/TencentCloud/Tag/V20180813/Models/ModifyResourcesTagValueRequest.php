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
 * @method string getServiceType() Obtain Resource service name (the third segment in the six-segment resource description)
 * @method void setServiceType(string $ServiceType) Set Resource service name (the third segment in the six-segment resource description)
 * @method array getResourceIds() Obtain Resource ID array, which can contain up to 50 resources
 * @method void setResourceIds(array $ResourceIds) Set Resource ID array, which can contain up to 50 resources
 * @method string getTagKey() Obtain Tag key
 * @method void setTagKey(string $TagKey) Set Tag key
 * @method string getTagValue() Obtain Tag value
 * @method void setTagValue(string $TagValue) Set Tag value
 * @method string getResourceRegion() Obtain Resource region. If resources have the region attribute, this field is required; otherwise, it is optional.
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region. If resources have the region attribute, this field is required; otherwise, it is optional.
 * @method string getResourcePrefix() Obtain Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
 */
class ModifyResourcesTagValueRequest extends AbstractModel
{
    /**
     * @var string Resource service name (the third segment in the six-segment resource description)
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
     * @var string Resource region. If resources have the region attribute, this field is required; otherwise, it is optional.
     */
    public $ResourceRegion;

    /**
     * @var string Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
     */
    public $ResourcePrefix;

    /**
     * @param string $ServiceType Resource service name (the third segment in the six-segment resource description)
     * @param array $ResourceIds Resource ID array, which can contain up to 50 resources
     * @param string $TagKey Tag key
     * @param string $TagValue Tag value
     * @param string $ResourceRegion Resource region. If resources have the region attribute, this field is required; otherwise, it is optional.
     * @param string $ResourcePrefix Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
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
