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
 * Namespace resource pool configuration
 *
 * @method NamespaceResourceEnvTKE getTKE() Obtain Resource pool based on a TKE cluster
 * @method void setTKE(NamespaceResourceEnvTKE $TKE) Set Resource pool based on a TKE cluster
 * @method boolean getOFFLINE() Obtain Namespace of the near-offline computing type
 * @method void setOFFLINE(boolean $OFFLINE) Set Namespace of the near-offline computing type
 */
class NamespaceResourceEnv extends AbstractModel
{
    /**
     * @var NamespaceResourceEnvTKE Resource pool based on a TKE cluster
     */
    public $TKE;

    /**
     * @var boolean Namespace of the near-offline computing type
     */
    public $OFFLINE;

    /**
     * @param NamespaceResourceEnvTKE $TKE Resource pool based on a TKE cluster
     * @param boolean $OFFLINE Namespace of the near-offline computing type
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
