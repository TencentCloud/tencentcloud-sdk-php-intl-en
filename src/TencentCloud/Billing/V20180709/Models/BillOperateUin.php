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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operator UIN filter list
 *
 * @method string getOperateUin() Obtain Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 * @method void setOperateUin(string $OperateUin) Set Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 */
class BillOperateUin extends AbstractModel
{
    /**
     * @var string Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
     */
    public $OperateUin;

    /**
     * @param string $OperateUin Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
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
        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
