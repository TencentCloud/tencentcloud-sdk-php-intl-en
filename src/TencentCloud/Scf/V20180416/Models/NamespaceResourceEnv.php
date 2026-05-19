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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method NamespaceResourceEnvTKE getTKE() Obtain 
 * @method void setTKE(NamespaceResourceEnvTKE $TKE) Set 
 * @method boolean getOFFLINE() Obtain 
 * @method void setOFFLINE(boolean $OFFLINE) Set 
 */
class NamespaceResourceEnv extends AbstractModel
{
    /**
     * @var NamespaceResourceEnvTKE 
     */
    public $TKE;

    /**
     * @var boolean 
     */
    public $OFFLINE;

    /**
     * @param NamespaceResourceEnvTKE $TKE 
     * @param boolean $OFFLINE 
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
        if (array_key_exists("TKE",$param) and $param["TKE"] !== null) {
            $this->TKE = new NamespaceResourceEnvTKE();
            $this->TKE->deserialize($param["TKE"]);
        }

        if (array_key_exists("OFFLINE",$param) and $param["OFFLINE"] !== null) {
            $this->OFFLINE = $param["OFFLINE"];
        }
    }
}
