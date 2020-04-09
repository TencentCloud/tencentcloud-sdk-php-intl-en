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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the IK plugin dictionary
 *
 * @method string getKey() Obtain Dictionary key value
 * @method void setKey(string $Key) Set Dictionary key value
 * @method string getName() Obtain Dictionary name
 * @method void setName(string $Name) Set Dictionary name
 * @method integer getSize() Obtain Dictionary size in B
 * @method void setSize(integer $Size) Set Dictionary size in B
 */
class DictInfo extends AbstractModel
{
    /**
     * @var string Dictionary key value
     */
    public $Key;

    /**
     * @var string Dictionary name
     */
    public $Name;

    /**
     * @var integer Dictionary size in B
     */
    public $Size;

    /**
     * @param string $Key Dictionary key value
     * @param string $Name Dictionary name
     * @param integer $Size Dictionary size in B
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
