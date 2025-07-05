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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Column sorting object
 *
 * @method string getCol() Obtain Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCol(string $Col) Set Column name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrder() Obtain Sort
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrder(integer $Order) Set Sort
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DMSColumnOrder extends AbstractModel
{
    /**
     * @var string Column name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Col;

    /**
     * @var integer Sort
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Order;

    /**
     * @param string $Col Column name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Order Sort
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Col",$param) and $param["Col"] !== null) {
            $this->Col = $param["Col"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
