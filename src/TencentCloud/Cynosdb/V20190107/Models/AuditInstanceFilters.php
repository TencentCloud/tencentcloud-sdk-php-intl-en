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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method boolean getExactMatch() Obtain 
 * @method void setExactMatch(boolean $ExactMatch) Set 
 * @method array getValues() Obtain 
 * @method void setValues(array $Values) Set 
 */
class AuditInstanceFilters extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var boolean 
     */
    public $ExactMatch;

    /**
     * @var array 
     */
    public $Values;

    /**
     * @param string $Name 
     * @param boolean $ExactMatch 
     * @param array $Values 
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

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
