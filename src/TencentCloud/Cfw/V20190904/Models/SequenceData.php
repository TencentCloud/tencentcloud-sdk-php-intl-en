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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Priority
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method integer getOrderIndex() Obtain Rule priority before change
 * @method void setOrderIndex(integer $OrderIndex) Set Rule priority before change
 * @method integer getNewOrderIndex() Obtain Rule priority after change
 * @method void setNewOrderIndex(integer $NewOrderIndex) Set Rule priority after change
 */
class SequenceData extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var integer Rule priority before change
     */
    public $OrderIndex;

    /**
     * @var integer Rule priority after change
     */
    public $NewOrderIndex;

    /**
     * @param integer $Id Rule ID
     * @param integer $OrderIndex Rule priority before change
     * @param integer $NewOrderIndex Rule priority after change
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

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("NewOrderIndex",$param) and $param["NewOrderIndex"] !== null) {
            $this->NewOrderIndex = $param["NewOrderIndex"];
        }
    }
}
