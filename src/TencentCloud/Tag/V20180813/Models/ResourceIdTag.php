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
 * Resource tag key value
 *
 * @method string getResourceId() Obtain Unique resource ID
Note: this field may return null, indicating that no valid values can be obtained
 * @method void setResourceId(string $ResourceId) Set Unique resource ID
Note: this field may return null, indicating that no valid values can be obtained
 * @method array getTagKeyValues() Obtain Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained
 * @method void setTagKeyValues(array $TagKeyValues) Set Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained
 */
class ResourceIdTag extends AbstractModel
{
    /**
     * @var string Unique resource ID
Note: this field may return null, indicating that no valid values can be obtained
     */
    public $ResourceId;

    /**
     * @var array Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained
     */
    public $TagKeyValues;

    /**
     * @param string $ResourceId Unique resource ID
Note: this field may return null, indicating that no valid values can be obtained
     * @param array $TagKeyValues Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TagKeyValues",$param) and $param["TagKeyValues"] !== null) {
            $this->TagKeyValues = [];
            foreach ($param["TagKeyValues"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagKeyValues, $obj);
            }
        }
    }
}
