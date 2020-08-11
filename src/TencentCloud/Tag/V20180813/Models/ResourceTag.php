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
 * Resource tag.
 *
 * @method string getResourceRegion() Obtain The resource's region.
Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceRegion(string $ResourceRegion) Set The resource's region.
Note: This field may return null, indicating that no valid value is found.
 * @method string getServiceType() Obtain Service type.
Note: This field may return null, indicating that no valid value is found.
 * @method void setServiceType(string $ServiceType) Set Service type.
Note: This field may return null, indicating that no valid value is found.
 * @method string getResourcePrefix() Obtain Resource prefix.
Note: This field may return null, indicating that no valid value is found.
 * @method void setResourcePrefix(string $ResourcePrefix) Set Resource prefix.
Note: This field may return null, indicating that no valid value is found.
 * @method string getResourceId() Obtain Unique resource ID.
Note: This field may return null, indicating that no valid value is found.
 * @method void setResourceId(string $ResourceId) Set Unique resource ID.
Note: This field may return null, indicating that no valid value is found.
 * @method array getTags() Obtain Resource tag.
Note: This field may return null, indicating that no valid value is found.
 * @method void setTags(array $Tags) Set Resource tag.
Note: This field may return null, indicating that no valid value is found.
 */
class ResourceTag extends AbstractModel
{
    /**
     * @var string The resource's region.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceRegion;

    /**
     * @var string Service type.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ServiceType;

    /**
     * @var string Resource prefix.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourcePrefix;

    /**
     * @var string Unique resource ID.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ResourceId;

    /**
     * @var array Resource tag.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Tags;

    /**
     * @param string $ResourceRegion The resource's region.
Note: This field may return null, indicating that no valid value is found.
     * @param string $ServiceType Service type.
Note: This field may return null, indicating that no valid value is found.
     * @param string $ResourcePrefix Resource prefix.
Note: This field may return null, indicating that no valid value is found.
     * @param string $ResourceId Unique resource ID.
Note: This field may return null, indicating that no valid value is found.
     * @param array $Tags Resource tag.
Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
