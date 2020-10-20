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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of tag descriptions. By specifying this parameter, you can bind tags to corresponding resource instances at the same time. Currently, only tags are bound to cloud host instances.
 *
 * @method string getResourceType() Obtain The type of resource that the tag is bound to. The type currently supported is `cluster`.
 * @method void setResourceType(string $ResourceType) Set The type of resource that the tag is bound to. The type currently supported is `cluster`.
 * @method array getTags() Obtain List of tag pairs
 * @method void setTags(array $Tags) Set List of tag pairs
 */
class TagSpecification extends AbstractModel
{
    /**
     * @var string The type of resource that the tag is bound to. The type currently supported is `cluster`.
     */
    public $ResourceType;

    /**
     * @var array List of tag pairs
     */
    public $Tags;

    /**
     * @param string $ResourceType The type of resource that the tag is bound to. The type currently supported is `cluster`.
     * @param array $Tags List of tag pairs
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
