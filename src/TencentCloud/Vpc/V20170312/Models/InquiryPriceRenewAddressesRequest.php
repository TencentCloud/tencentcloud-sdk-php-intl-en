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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewAddresses request structure.
 *
 * @method array getAddressIds() Obtain Indicates the renewal resource instance ID.
 * @method void setAddressIds(array $AddressIds) Set Indicates the renewal resource instance ID.
 * @method AddressChargePrepaid getAddressChargePrepaid() Obtain A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH", this parameter is required. For other scenarios, it can be ignored.
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) Set A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH", this parameter is required. For other scenarios, it can be ignored.
 */
class InquiryPriceRenewAddressesRequest extends AbstractModel
{
    /**
     * @var array Indicates the renewal resource instance ID.
     */
    public $AddressIds;

    /**
     * @var AddressChargePrepaid A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH", this parameter is required. For other scenarios, it can be ignored.
     */
    public $AddressChargePrepaid;

    /**
     * @param array $AddressIds Indicates the renewal resource instance ID.
     * @param AddressChargePrepaid $AddressChargePrepaid A required billing parameter for an EIP billed by "BANDWIDTH_PREPAID_BY_MONTH". When the EIP is billed by "BANDWIDTH_PREPAID_BY_MONTH", this parameter is required. For other scenarios, it can be ignored.
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }
    }
}
