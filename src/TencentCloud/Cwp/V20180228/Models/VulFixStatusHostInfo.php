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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * View the fixing status of each vulnerability on each host.
 *
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getStatus() Obtain Status. 0: initial status; 1: task issued (fixing); 2: completed (successful); 3: fixing failed (failed); 4: fixing failed due to snapshot creation failure (unfixed).
 * @method void setStatus(integer $Status) Set Status. 0: initial status; 1: task issued (fixing); 2: completed (successful); 3: fixing failed (failed); 4: fixing failed due to snapshot creation failure (unfixed).
 * @method string getModifyTime() Obtain Fixing time
 * @method void setModifyTime(string $ModifyTime) Set Fixing time
 * @method string getFailReason() Obtain Fixing failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailReason(string $FailReason) Set Fixing failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulFixStatusHostInfo extends AbstractModel
{
    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer Status. 0: initial status; 1: task issued (fixing); 2: completed (successful); 3: fixing failed (failed); 4: fixing failed due to snapshot creation failure (unfixed).
     */
    public $Status;

    /**
     * @var string Fixing time
     */
    public $ModifyTime;

    /**
     * @var string Fixing failure cause
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailReason;

    /**
     * @param string $HostName Host name
     * @param string $HostIp Host IP
     * @param string $Quuid Host QUUID
     * @param integer $Status Status. 0: initial status; 1: task issued (fixing); 2: completed (successful); 3: fixing failed (failed); 4: fixing failed due to snapshot creation failure (unfixed).
     * @param string $ModifyTime Fixing time
     * @param string $FailReason Fixing failure cause
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
