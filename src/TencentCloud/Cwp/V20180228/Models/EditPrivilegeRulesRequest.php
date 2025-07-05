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
 * EditPrivilegeRules request structure.
 *
 * @method integer getId() Obtain Rule ID (Leave it blank when adding rules.)
 * @method void setId(integer $Id) Set Rule ID (Leave it blank when adding rules.)
 * @method array getUuids() Obtain Client ID array
 * @method void setUuids(array $Uuids) Set Client ID array
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method integer getSMode() Obtain Whether it is a S permission process
 * @method void setSMode(integer $SMode) Set Whether it is a S permission process
 * @method integer getIsGlobal() Obtain Whether the rule is global (not global by default)
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the rule is global (not global by default)
 * @method integer getEventId() Obtain ID of the associated event when the user clicks Add to Allowlist on the event list and details page (leave this parameter blank for rule addition)
 * @method void setEventId(integer $EventId) Set ID of the associated event when the user clicks Add to Allowlist on the event list and details page (leave this parameter blank for rule addition)
 */
class EditPrivilegeRulesRequest extends AbstractModel
{
    /**
     * @var integer Rule ID (Leave it blank when adding rules.)
     */
    public $Id;

    /**
     * @var array Client ID array
     */
    public $Uuids;

    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var integer Whether it is a S permission process
     */
    public $SMode;

    /**
     * @var integer Whether the rule is global (not global by default)
     */
    public $IsGlobal;

    /**
     * @var integer ID of the associated event when the user clicks Add to Allowlist on the event list and details page (leave this parameter blank for rule addition)
     */
    public $EventId;

    /**
     * @param integer $Id Rule ID (Leave it blank when adding rules.)
     * @param array $Uuids Client ID array
     * @param string $HostIp Host IP
     * @param string $ProcessName Process name
     * @param integer $SMode Whether it is a S permission process
     * @param integer $IsGlobal Whether the rule is global (not global by default)
     * @param integer $EventId ID of the associated event when the user clicks Add to Allowlist on the event list and details page (leave this parameter blank for rule addition)
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

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("SMode",$param) and $param["SMode"] !== null) {
            $this->SMode = $param["SMode"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
