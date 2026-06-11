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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskDnsEventStatus request structure.
 *
 * @method array getEventIDSet() Obtain Array of malicious request event IDs. It is required for adding to the allowlist. Otherwise, choose Filters or EventIDSet.
 * @method void setEventIDSet(array $EventIDSet) Set Array of malicious request event IDs. It is required for adding to the allowlist. Otherwise, choose Filters or EventIDSet.
 * @method string getEventStatus() Obtain Mark the status of the event.
EVENT_UNDEAL: Unprocessed (unignore)
EVENT_DEALED: Processed
EVENT_IGNORE: Ignore
EVENT_DELETE: Deleted
EVENT_ADD_WHITE: Add to whitelist
EVENT_ISOLATE_CONTAINER: Isolate container
EVENT_RESTORE_CONTAINER: Restore CONTAINER.
 * @method void setEventStatus(string $EventStatus) Set Mark the status of the event.
EVENT_UNDEAL: Unprocessed (unignore)
EVENT_DEALED: Processed
EVENT_IGNORE: Ignore
EVENT_DELETE: Deleted
EVENT_ADD_WHITE: Add to whitelist
EVENT_ISOLATE_CONTAINER: Isolate container
EVENT_RESTORE_CONTAINER: Restore CONTAINER.
 * @method string getAddress() Obtain Allowlist Domain/IP
 * @method void setAddress(string $Address) Set Allowlist Domain/IP
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method boolean getAllSameEventAddWhite() Obtain Adding Identical Request Domain Name/IP Events to Allowlist
 * @method void setAllSameEventAddWhite(boolean $AllSameEventAddWhite) Set Adding Identical Request Domain Name/IP Events to Allowlist
 * @method string getAddWhiteEventType() Obtain Allowlist Adding Event Type. DOMAIN: Malicious Domain Request; IP: Malicious IP Request
 * @method void setAddWhiteEventType(string $AddWhiteEventType) Set Allowlist Adding Event Type. DOMAIN: Malicious Domain Request; IP: Malicious IP Request
 */
class ModifyRiskDnsEventStatusRequest extends AbstractModel
{
    /**
     * @var array Array of malicious request event IDs. It is required for adding to the allowlist. Otherwise, choose Filters or EventIDSet.
     */
    public $EventIDSet;

    /**
     * @var string Mark the status of the event.
EVENT_UNDEAL: Unprocessed (unignore)
EVENT_DEALED: Processed
EVENT_IGNORE: Ignore
EVENT_DELETE: Deleted
EVENT_ADD_WHITE: Add to whitelist
EVENT_ISOLATE_CONTAINER: Isolate container
EVENT_RESTORE_CONTAINER: Restore CONTAINER.
     */
    public $EventStatus;

    /**
     * @var string Allowlist Domain/IP
     */
    public $Address;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var boolean Adding Identical Request Domain Name/IP Events to Allowlist
     */
    public $AllSameEventAddWhite;

    /**
     * @var string Allowlist Adding Event Type. DOMAIN: Malicious Domain Request; IP: Malicious IP Request
     */
    public $AddWhiteEventType;

    /**
     * @param array $EventIDSet Array of malicious request event IDs. It is required for adding to the allowlist. Otherwise, choose Filters or EventIDSet.
     * @param string $EventStatus Mark the status of the event.
EVENT_UNDEAL: Unprocessed (unignore)
EVENT_DEALED: Processed
EVENT_IGNORE: Ignore
EVENT_DELETE: Deleted
EVENT_ADD_WHITE: Add to whitelist
EVENT_ISOLATE_CONTAINER: Isolate container
EVENT_RESTORE_CONTAINER: Restore CONTAINER.
     * @param string $Address Allowlist Domain/IP
     * @param string $Remark Remarks
     * @param boolean $AllSameEventAddWhite Adding Identical Request Domain Name/IP Events to Allowlist
     * @param string $AddWhiteEventType Allowlist Adding Event Type. DOMAIN: Malicious Domain Request; IP: Malicious IP Request
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
        if (array_key_exists("EventIDSet",$param) and $param["EventIDSet"] !== null) {
            $this->EventIDSet = $param["EventIDSet"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AllSameEventAddWhite",$param) and $param["AllSameEventAddWhite"] !== null) {
            $this->AllSameEventAddWhite = $param["AllSameEventAddWhite"];
        }

        if (array_key_exists("AddWhiteEventType",$param) and $param["AddWhiteEventType"] !== null) {
            $this->AddWhiteEventType = $param["AddWhiteEventType"];
        }
    }
}
