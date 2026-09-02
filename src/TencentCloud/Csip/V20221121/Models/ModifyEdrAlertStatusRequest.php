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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdrAlertStatus request structure.
 *
 * @method array getTargets() Obtain <p>Target alarm information</p>
 * @method void setTargets(array $Targets) Set <p>Target alarm information</p>
 * @method string getStatus() Obtain <p>Target alarm status enumeration values: PROCESSED: processedWHITELISTED: whitelistedIGNORED: ignoredDELETED: deleted-soft deletion</p>
 * @method void setStatus(string $Status) Set <p>Target alarm status enumeration values: PROCESSED: processedWHITELISTED: whitelistedIGNORED: ignoredDELETED: deleted-soft deletion</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyEdrAlertStatusRequest extends AbstractModel
{
    /**
     * @var array <p>Target alarm information</p>
     */
    public $Targets;

    /**
     * @var string <p>Target alarm status enumeration values: PROCESSED: processedWHITELISTED: whitelistedIGNORED: ignoredDELETED: deleted-soft deletion</p>
     */
    public $Status;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param array $Targets <p>Target alarm information</p>
     * @param string $Status <p>Target alarm status enumeration values: PROCESSED: processedWHITELISTED: whitelistedIGNORED: ignoredDELETED: deleted-soft deletion</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new EdrAlertTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
