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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of tags associated with resource instances during instance creation.
 *
 * @method string getResourceType() Obtain Resource type. Valid values: `instance` (CVM), `host` (CDH), `image` (for image), and `keypair` (for key).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type. Valid values: `instance` (CVM), `host` (CDH), `image` (for image), and `keypair` (for key).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag pairs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag pairs
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class TagSpecification extends AbstractModel
{
    /**
     * @var string Resource type. Valid values: `instance` (CVM), `host` (CDH), `image` (for image), and `keypair` (for key).
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var array Tag pairs
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $ResourceType Resource type. Valid values: `instance` (CVM), `host` (CDH), `image` (for image), and `keypair` (for key).
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Tags Tag pairs
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
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
