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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Versioning - array of classes
 *
 * @method array getProtocols() Obtain Protocol and sale details
 * @method void setProtocols(array $Protocols) Set Protocol and sale details
 * @method string getType() Obtain Storage class. Valid values: `SD` (standard storage) and `HP` (high-performance storage)
 * @method void setType(string $Type) Set Storage class. Valid values: `SD` (standard storage) and `HP` (high-performance storage)
 * @method boolean getPrepayment() Obtain Indicates whether prepaid is supported. `true`: yes; `false`: no
 * @method void setPrepayment(boolean $Prepayment) Set Indicates whether prepaid is supported. `true`: yes; `false`: no
 */
class AvailableType extends AbstractModel
{
    /**
     * @var array Protocol and sale details
     */
    public $Protocols;

    /**
     * @var string Storage class. Valid values: `SD` (standard storage) and `HP` (high-performance storage)
     */
    public $Type;

    /**
     * @var boolean Indicates whether prepaid is supported. `true`: yes; `false`: no
     */
    public $Prepayment;

    /**
     * @param array $Protocols Protocol and sale details
     * @param string $Type Storage class. Valid values: `SD` (standard storage) and `HP` (high-performance storage)
     * @param boolean $Prepayment Indicates whether prepaid is supported. `true`: yes; `false`: no
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
        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new AvailableProtoStatus();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Prepayment",$param) and $param["Prepayment"] !== null) {
            $this->Prepayment = $param["Prepayment"];
        }
    }
}
