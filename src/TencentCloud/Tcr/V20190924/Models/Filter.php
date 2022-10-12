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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter
 *
 * @method string getName() Obtain Attribute name. If more than one filter exists, the logical relationship between these filters is `AND`.
 * @method void setName(string $Name) Set Attribute name. If more than one filter exists, the logical relationship between these filters is `AND`.
 * @method array getValues() Obtain Attribute value. If multiple values exist in one filter, the logical relationship between these values is `OR`.
 * @method void setValues(array $Values) Set Attribute value. If multiple values exist in one filter, the logical relationship between these values is `OR`.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Attribute name. If more than one filter exists, the logical relationship between these filters is `AND`.
     */
    public $Name;

    /**
     * @var array Attribute value. If multiple values exist in one filter, the logical relationship between these values is `OR`.
     */
    public $Values;

    /**
     * @param string $Name Attribute name. If more than one filter exists, the logical relationship between these filters is `AND`.
     * @param array $Values Attribute value. If multiple values exist in one filter, the logical relationship between these values is `OR`.
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
