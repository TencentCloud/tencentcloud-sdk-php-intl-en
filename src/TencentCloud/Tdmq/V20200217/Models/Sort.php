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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sort by field
 *
 * @method string getName() Obtain Sorting field.
 * @method void setName(string $Name) Set Sorting field.
 * @method string getOrder() Obtain Ascending order: `ASC`; descending order: `DESC`.
 * @method void setOrder(string $Order) Set Ascending order: `ASC`; descending order: `DESC`.
 */
class Sort extends AbstractModel
{
    /**
     * @var string Sorting field.
     */
    public $Name;

    /**
     * @var string Ascending order: `ASC`; descending order: `DESC`.
     */
    public $Order;

    /**
     * @param string $Name Sorting field.
     * @param string $Order Ascending order: `ASC`; descending order: `DESC`.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
