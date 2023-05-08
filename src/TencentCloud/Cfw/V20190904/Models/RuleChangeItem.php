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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Changes of the rule sequence number.
 *
 * @method integer getOrderIndex() Obtain Original sequence number
 * @method void setOrderIndex(integer $OrderIndex) Set Original sequence number
 * @method integer getNewOrderIndex() Obtain New sequence number
 * @method void setNewOrderIndex(integer $NewOrderIndex) Set New sequence number
 */
class RuleChangeItem extends AbstractModel
{
    /**
     * @var integer Original sequence number
     */
    public $OrderIndex;

    /**
     * @var integer New sequence number
     */
    public $NewOrderIndex;

    /**
     * @param integer $OrderIndex Original sequence number
     * @param integer $NewOrderIndex New sequence number
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("NewOrderIndex",$param) and $param["NewOrderIndex"] !== null) {
            $this->NewOrderIndex = $param["NewOrderIndex"];
        }
    }
}
