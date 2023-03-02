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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of batch deleting domains
 *
 * @method integer getDomainId() Obtain The domain ID.
 * @method void setDomainId(integer $DomainId) Set The domain ID.
 * @method string getDomain() Obtain The domain name.
 * @method void setDomain(string $Domain) Set The domain name.
 * @method string getError() Obtain The error message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setError(string $Error) Set The error message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The domain deletion status.
 * @method void setStatus(string $Status) Set The domain deletion status.
 * @method string getOperation() Obtain The operation.
 * @method void setOperation(string $Operation) Set The operation.
 */
class DeleteDomainBatchDetail extends AbstractModel
{
    /**
     * @var integer The domain ID.
     */
    public $DomainId;

    /**
     * @var string The domain name.
     */
    public $Domain;

    /**
     * @var string The error message.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var string The domain deletion status.
     */
    public $Status;

    /**
     * @var string The operation.
     */
    public $Operation;

    /**
     * @param integer $DomainId The domain ID.
     * @param string $Domain The domain name.
     * @param string $Error The error message.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status The domain deletion status.
     * @param string $Operation The operation.
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
