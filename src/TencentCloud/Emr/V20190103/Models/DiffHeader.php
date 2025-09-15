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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamically generated change details.
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getId() Obtain ID, which is used by the front end.
 * @method void setId(string $Id) Set ID, which is used by the front end.
 */
class DiffHeader extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string ID, which is used by the front end.
     */
    public $Id;

    /**
     * @param string $Name Name
     * @param string $Id ID, which is used by the front end.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
