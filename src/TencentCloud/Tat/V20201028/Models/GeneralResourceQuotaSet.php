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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User quota information.
 *
 * @method string getResourceName() Obtain Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
 * @method void setResourceName(string $ResourceName) Set Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
 * @method integer getResourceQuotaUsed() Obtain Used credit limit.
 * @method void setResourceQuotaUsed(integer $ResourceQuotaUsed) Set Used credit limit.
 * @method integer getResourceQuotaTotal() Obtain Total quota.
 * @method void setResourceQuotaTotal(integer $ResourceQuotaTotal) Set Total quota.
 */
class GeneralResourceQuotaSet extends AbstractModel
{
    /**
     * @var string Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
     */
    public $ResourceName;

    /**
     * @var integer Used credit limit.
     */
    public $ResourceQuotaUsed;

    /**
     * @var integer Total quota.
     */
    public $ResourceQuotaTotal;

    /**
     * @param string $ResourceName Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
     * @param integer $ResourceQuotaUsed Used credit limit.
     * @param integer $ResourceQuotaTotal Total quota.
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceQuotaUsed",$param) and $param["ResourceQuotaUsed"] !== null) {
            $this->ResourceQuotaUsed = $param["ResourceQuotaUsed"];
        }

        if (array_key_exists("ResourceQuotaTotal",$param) and $param["ResourceQuotaTotal"] !== null) {
            $this->ResourceQuotaTotal = $param["ResourceQuotaTotal"];
        }
    }
}
