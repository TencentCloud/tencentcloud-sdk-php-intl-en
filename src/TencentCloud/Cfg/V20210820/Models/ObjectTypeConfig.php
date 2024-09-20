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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object type configuration
 *
 * @method string getKey() Obtain Primary key
 * @method void setKey(string $Key) Set Primary key
 * @method array getFields() Obtain List of object type configuration fields
 * @method void setFields(array $Fields) Set List of object type configuration fields
 */
class ObjectTypeConfig extends AbstractModel
{
    /**
     * @var string Primary key
     */
    public $Key;

    /**
     * @var array List of object type configuration fields
     */
    public $Fields;

    /**
     * @param string $Key Primary key
     * @param array $Fields List of object type configuration fields
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ObjectTypeConfigFields();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
