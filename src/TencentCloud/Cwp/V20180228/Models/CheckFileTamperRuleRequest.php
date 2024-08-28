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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFileTamperRule request structure.
 *
 * @method string getName() Obtain Name of rule to be entered
 * @method void setName(string $Name) Set Name of rule to be entered
 * @method integer getId() Obtain Rule ID passed during editing
 * @method void setId(integer $Id) Set Rule ID passed during editing
 */
class CheckFileTamperRuleRequest extends AbstractModel
{
    /**
     * @var string Name of rule to be entered
     */
    public $Name;

    /**
     * @var integer Rule ID passed during editing
     */
    public $Id;

    /**
     * @param string $Name Name of rule to be entered
     * @param integer $Id Rule ID passed during editing
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
