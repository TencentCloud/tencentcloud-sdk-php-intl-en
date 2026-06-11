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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportPatchEffectHostList request structure.
 *
 * @method integer getKbId() Obtain Patch ID
 * @method void setKbId(integer $KbId) Set Patch ID
 * @method array getFilters() Obtain Filter criteria:  
<li>ProtectType : uint64 data type optional Version type 0 means BASIC_VERSION, 1 means Flagship </li>
<li>InstanceState: string type (optional) Host status: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client)</li>
<li>Status - uint64 - optional - processing Status: 0 - pending; 1 - ignored; 3 - fixed</li>
<li>HostName : string type optional host name</li>
<li>InstanceID : string type optional host id</li>
<li>IpAddress: string type optional The ip address of the host</li>
<li>Uuid : string type, optional, host uuid</li>
 * @method void setFilters(array $Filters) Set Filter criteria:  
<li>ProtectType : uint64 data type optional Version type 0 means BASIC_VERSION, 1 means Flagship </li>
<li>InstanceState: string type (optional) Host status: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client)</li>
<li>Status - uint64 - optional - processing Status: 0 - pending; 1 - ignored; 3 - fixed</li>
<li>HostName : string type optional host name</li>
<li>InstanceID : string type optional host id</li>
<li>IpAddress: string type optional The ip address of the host</li>
<li>Uuid : string type, optional, host uuid</li>
 */
class ExportPatchEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer Patch ID
     */
    public $KbId;

    /**
     * @var array Filter criteria:  
<li>ProtectType : uint64 data type optional Version type 0 means BASIC_VERSION, 1 means Flagship </li>
<li>InstanceState: string type (optional) Host status: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client)</li>
<li>Status - uint64 - optional - processing Status: 0 - pending; 1 - ignored; 3 - fixed</li>
<li>HostName : string type optional host name</li>
<li>InstanceID : string type optional host id</li>
<li>IpAddress: string type optional The ip address of the host</li>
<li>Uuid : string type, optional, host uuid</li>
     */
    public $Filters;

    /**
     * @param integer $KbId Patch ID
     * @param array $Filters Filter criteria:  
<li>ProtectType : uint64 data type optional Version type 0 means BASIC_VERSION, 1 means Flagship </li>
<li>InstanceState: string type (optional) Host status: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client)</li>
<li>Status - uint64 - optional - processing Status: 0 - pending; 1 - ignored; 3 - fixed</li>
<li>HostName : string type optional host name</li>
<li>InstanceID : string type optional host id</li>
<li>IpAddress: string type optional The ip address of the host</li>
<li>Uuid : string type, optional, host uuid</li>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
