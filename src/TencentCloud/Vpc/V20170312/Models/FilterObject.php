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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter key-value pair
 *
 * @method string getName() Obtain The attribute name. If more than one Filter exists, the logical relation between these Filters is `AND`.
 * @method void setName(string $Name) Set The attribute name. If more than one Filter exists, the logical relation between these Filters is `AND`.
 * @method array getValues() Obtain The attribute value. If there are multiple Values for one Filter, the logical relation between these Values under the same Filter is `OR`.
 * @method void setValues(array $Values) Set The attribute value. If there are multiple Values for one Filter, the logical relation between these Values under the same Filter is `OR`.
 */
class FilterObject extends AbstractModel
{
    /**
     * @var string The attribute name. If more than one Filter exists, the logical relation between these Filters is `AND`.
     */
    public $Name;

    /**
     * @var array The attribute value. If there are multiple Values for one Filter, the logical relation between these Values under the same Filter is `OR`.
     */
    public $Values;

    /**
     * @param string $Name The attribute name. If more than one Filter exists, the logical relation between these Filters is `AND`.
     * @param array $Values The attribute value. If there are multiple Values for one Filter, the logical relation between these Values under the same Filter is `OR`.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
