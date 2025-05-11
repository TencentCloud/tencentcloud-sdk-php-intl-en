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
 * Custom metadata.
 *
 * @method array getItems() Obtain A list of custom metadata key-value pairs.
 * @method void setItems(array $Items) Set A list of custom metadata key-value pairs.
 */
class Metadata extends AbstractModel
{
    /**
     * @var array A list of custom metadata key-value pairs.
     */
    public $Items;

    /**
     * @param array $Items A list of custom metadata key-value pairs.
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new MetadataItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
