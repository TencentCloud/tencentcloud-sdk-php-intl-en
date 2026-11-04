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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common operation result item
 *
 * @method string getId() Obtain <p>Resource ID.</p>
 * @method void setId(string $Id) Set <p>Resource ID.</p>
 * @method string getReason() Obtain <p>Failure reason (populated when succeeded=false)</p>
 * @method void setReason(string $Reason) Set <p>Failure reason (populated when succeeded=false)</p>
 * @method boolean getSucceeded() Obtain <p>Whether it is successful</p>
 * @method void setSucceeded(boolean $Succeeded) Set <p>Whether it is successful</p>
 */
class OperationResult extends AbstractModel
{
    /**
     * @var string <p>Resource ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Failure reason (populated when succeeded=false)</p>
     */
    public $Reason;

    /**
     * @var boolean <p>Whether it is successful</p>
     */
    public $Succeeded;

    /**
     * @param string $Id <p>Resource ID.</p>
     * @param string $Reason <p>Failure reason (populated when succeeded=false)</p>
     * @param boolean $Succeeded <p>Whether it is successful</p>
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Succeeded",$param) and $param["Succeeded"] !== null) {
            $this->Succeeded = $param["Succeeded"];
        }
    }
}
