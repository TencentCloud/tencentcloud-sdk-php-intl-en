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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP SSL configuration message
 *
 * @method string getOperation() Obtain Operation type, values as follows: <li>bind: bind</li> <li>unbind: unbind</li>
 * @method void setOperation(string $Operation) Set Operation type, values as follows: <li>bind: bind</li> <li>unbind: unbind</li>
 * @method string getAssociatedDomain() Obtain Domain name of the IP SSL that should be bound.
 * @method void setAssociatedDomain(string $AssociatedDomain) Set Domain name of the IP SSL that should be bound.
 */
class IPSSLSetting extends AbstractModel
{
    /**
     * @var string Operation type, values as follows: <li>bind: bind</li> <li>unbind: unbind</li>
     */
    public $Operation;

    /**
     * @var string Domain name of the IP SSL that should be bound.
     */
    public $AssociatedDomain;

    /**
     * @param string $Operation Operation type, values as follows: <li>bind: bind</li> <li>unbind: unbind</li>
     * @param string $AssociatedDomain Domain name of the IP SSL that should be bound.
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AssociatedDomain",$param) and $param["AssociatedDomain"] !== null) {
            $this->AssociatedDomain = $param["AssociatedDomain"];
        }
    }
}
