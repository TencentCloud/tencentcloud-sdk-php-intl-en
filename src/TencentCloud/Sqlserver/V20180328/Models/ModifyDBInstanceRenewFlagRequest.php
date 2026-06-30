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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceRenewFlag request structure.
 *
 * @method array getRenewFlags() Obtain Instance renewal flag information.
 * @method void setRenewFlags(array $RenewFlags) Set Instance renewal flag information.
 */
class ModifyDBInstanceRenewFlagRequest extends AbstractModel
{
    /**
     * @var array Instance renewal flag information.
     */
    public $RenewFlags;

    /**
     * @param array $RenewFlags Instance renewal flag information.
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
        if (array_key_exists("RenewFlags",$param) and $param["RenewFlags"] !== null) {
            $this->RenewFlags = [];
            foreach ($param["RenewFlags"] as $key => $value){
                $obj = new InstanceRenewInfo();
                $obj->deserialize($value);
                array_push($this->RenewFlags, $obj);
            }
        }
    }
}
