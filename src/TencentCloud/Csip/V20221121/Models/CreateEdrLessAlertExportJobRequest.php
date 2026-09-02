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
 * CreateEdrLessAlertExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>MachineName  Host nameInstanceID  Instance ID  IP   Private IP address or public IP address - Required: No - Filter by host IP or aliasHostId - String - Required: No - Host IdAgentId - String - Required: No - Client IdPolicyType - String - Required: No - Policy type, 0: system policy 1: user-defined policyDomain - String - Required: No - Domain name (URL-encode the Domain name first, then base64-encode it)HandleStatus - String - Required: No - Status filtering 0: pending; 2: trust; 3: untrustedBeginTime - String - Required: No - Start time of last accessEndTime - String - Required: No - End time of last access</p>
 * @method void setFilters(array $Filters) Set <p>MachineName  Host nameInstanceID  Instance ID  IP   Private IP address or public IP address - Required: No - Filter by host IP or aliasHostId - String - Required: No - Host IdAgentId - String - Required: No - Client IdPolicyType - String - Required: No - Policy type, 0: system policy 1: user-defined policyDomain - String - Required: No - Domain name (URL-encode the Domain name first, then base64-encode it)HandleStatus - String - Required: No - Status filtering 0: pending; 2: trust; 3: untrustedBeginTime - String - Required: No - Start time of last accessEndTime - String - Required: No - End time of last access</p>
 * @method string getOrder() Obtain <p>Sorting method: [ASC: ascending order|DESC: descending order]</p>
 * @method void setOrder(string $Order) Set <p>Sorting method: [ASC: ascending order|DESC: descending order]</p>
 * @method string getBy() Obtain <p>Sorting field: [LatestDetectTime: Latest request time]</p>
 * @method void setBy(string $By) Set <p>Sorting field: [LatestDetectTime: Latest request time]</p>
 */
class CreateEdrLessAlertExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>MachineName  Host nameInstanceID  Instance ID  IP   Private IP address or public IP address - Required: No - Filter by host IP or aliasHostId - String - Required: No - Host IdAgentId - String - Required: No - Client IdPolicyType - String - Required: No - Policy type, 0: system policy 1: user-defined policyDomain - String - Required: No - Domain name (URL-encode the Domain name first, then base64-encode it)HandleStatus - String - Required: No - Status filtering 0: pending; 2: trust; 3: untrustedBeginTime - String - Required: No - Start time of last accessEndTime - String - Required: No - End time of last access</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting method: [ASC: ascending order|DESC: descending order]</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field: [LatestDetectTime: Latest request time]</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>MachineName  Host nameInstanceID  Instance ID  IP   Private IP address or public IP address - Required: No - Filter by host IP or aliasHostId - String - Required: No - Host IdAgentId - String - Required: No - Client IdPolicyType - String - Required: No - Policy type, 0: system policy 1: user-defined policyDomain - String - Required: No - Domain name (URL-encode the Domain name first, then base64-encode it)HandleStatus - String - Required: No - Status filtering 0: pending; 2: trust; 3: untrustedBeginTime - String - Required: No - Start time of last accessEndTime - String - Required: No - End time of last access</p>
     * @param string $Order <p>Sorting method: [ASC: ascending order|DESC: descending order]</p>
     * @param string $By <p>Sorting field: [LatestDetectTime: Latest request time]</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
