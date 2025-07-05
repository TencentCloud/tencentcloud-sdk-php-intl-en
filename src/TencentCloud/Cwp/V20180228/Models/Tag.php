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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag information
 *
 * @method integer getId() Obtain Tag ID
 * @method void setId(integer $Id) Set Tag ID
 * @method string getName() Obtain Tag name
 * @method void setName(string $Name) Set Tag name
 * @method integer getCount() Obtain Number of servers
 * @method void setCount(integer $Count) Set Number of servers
 */
class Tag extends AbstractModel
{
    /**
     * @var integer Tag ID
     */
    public $Id;

    /**
     * @var string Tag name
     */
    public $Name;

    /**
     * @var integer Number of servers
     */
    public $Count;

    /**
     * @param integer $Id Tag ID
     * @param string $Name Tag name
     * @param integer $Count Number of servers
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
