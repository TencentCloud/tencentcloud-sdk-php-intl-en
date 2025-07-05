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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a consortium.
 *
 * @method integer getId() Obtain The consortium ID.
 * @method void setId(integer $Id) Set The consortium ID.
 * @method string getName() Obtain The consortium name.
 * @method void setName(string $Name) Set The consortium name.
 */
class ConsortiumItem extends AbstractModel
{
    /**
     * @var integer The consortium ID.
     */
    public $Id;

    /**
     * @var string The consortium name.
     */
    public $Name;

    /**
     * @param integer $Id The consortium ID.
     * @param string $Name The consortium name.
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
    }
}
