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
 * Change priority of enterprise security group rules
 *
 * @method integer getOrderIndex() Obtain Current priority of enterprise security group rules
 * @method void setOrderIndex(integer $OrderIndex) Set Current priority of enterprise security group rules
 * @method integer getNewOrderIndex() Obtain New priority of enterprise security group rules
 * @method void setNewOrderIndex(integer $NewOrderIndex) Set New priority of enterprise security group rules
 */
class SecurityGroupOrderIndexData extends AbstractModel
{
    /**
     * @var integer Current priority of enterprise security group rules
     */
    public $OrderIndex;

    /**
     * @var integer New priority of enterprise security group rules
     */
    public $NewOrderIndex;

    /**
     * @param integer $OrderIndex Current priority of enterprise security group rules
     * @param integer $NewOrderIndex New priority of enterprise security group rules
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
