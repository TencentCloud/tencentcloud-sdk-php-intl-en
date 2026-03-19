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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resources and associated Tags.
 *
 * @method string getResource() Obtain Six-Segment resource format. tencent cloud uses the six-segment resource format to describe a resource.
For example: qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
 * @method void setResource(string $Resource) Set Six-Segment resource format. tencent cloud uses the six-segment resource format to describe a resource.
For example: qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
 * @method TagComplianceDetails getComplianceDetails() Obtain Compliance details.
 * @method void setComplianceDetails(TagComplianceDetails $ComplianceDetails) Set Compliance details.
 * @method array getTags() Obtain Resource tag.
 * @method void setTags(array $Tags) Set Resource tag.
 */
class ResourceTagMapping extends AbstractModel
{
    /**
     * @var string Six-Segment resource format. tencent cloud uses the six-segment resource format to describe a resource.
For example: qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
     */
    public $Resource;

    /**
     * @var TagComplianceDetails Compliance details.
     */
    public $ComplianceDetails;

    /**
     * @var array Resource tag.
     */
    public $Tags;

    /**
     * @param string $Resource Six-Segment resource format. tencent cloud uses the six-segment resource format to describe a resource.
For example: qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}.
     * @param TagComplianceDetails $ComplianceDetails Compliance details.
     * @param array $Tags Resource tag.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ComplianceDetails",$param) and $param["ComplianceDetails"] !== null) {
            $this->ComplianceDetails = new TagComplianceDetails();
            $this->ComplianceDetails->deserialize($param["ComplianceDetails"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
