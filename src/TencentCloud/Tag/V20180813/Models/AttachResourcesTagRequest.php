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
 * AttachResourcesTag request structure.
 *
 * @method string getServiceType() Obtain Service short name, which is the third segment of the six-segment resource format. For more information on the format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
 * @method void setServiceType(string $ServiceType) Set Service short name, which is the third segment of the six-segment resource format. For more information on the format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
 * @method array getResourceIds() Obtain Resource ID array, which can contain up to 50 resources
 * @method void setResourceIds(array $ResourceIds) Set Resource ID array, which can contain up to 50 resources
 * @method string getTagKey() Obtain The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method void setTagKey(string $TagKey) Set The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method string getTagValue() Obtain The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method void setTagValue(string $TagValue) Set The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method string getResourceRegion() Obtain Region of the resource. This parameter can be left blank if region is not involved. The region must correspond to resources specified by ResourceIds.N. Once the region is specified, all resources specified by ResourceIds.N must locate in this region. Example: ap-beijing.
 * @method void setResourceRegion(string $ResourceRegion) Set Region of the resource. This parameter can be left blank if region is not involved. The region must correspond to resources specified by ResourceIds.N. Once the region is specified, all resources specified by ResourceIds.N must locate in this region. Example: ap-beijing.
 * @method string getResourcePrefix() Obtain Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
 */
class AttachResourcesTagRequest extends AbstractModel
{
    /**
     * @var string Service short name, which is the third segment of the six-segment resource format. For more information on the format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
     */
    public $ServiceType;

    /**
     * @var array Resource ID array, which can contain up to 50 resources
     */
    public $ResourceIds;

    /**
     * @var string The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     */
    public $TagKey;

    /**
     * @var string The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     */
    public $TagValue;

    /**
     * @var string Region of the resource. This parameter can be left blank if region is not involved. The region must correspond to resources specified by ResourceIds.N. Once the region is specified, all resources specified by ResourceIds.N must locate in this region. Example: ap-beijing.
     */
    public $ResourceRegion;

    /**
     * @var string Resource prefix (the part before "/" in the last segment in the six-segment resource description), which is optional for COS buckets but required for other Tencent Cloud resources.
     */
    public $ResourcePrefix;

    /**
     * @param string $ServiceType Service short name, which is the third segment of the six-segment resource format. For more information on the format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
     * @param array $ResourceIds Resource ID array, which can contain up to 50 resources
     * @param string $TagKey The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     * @param string $TagValue The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     * @param string $ResourceRegion Region of the resource. This parameter can be left blank if region is not involved. The region must correspond to resources specified by ResourceIds.N. Once the region is specified, all resources specified by ResourceIds.N must locate in this region. Example: ap-beijing.
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
