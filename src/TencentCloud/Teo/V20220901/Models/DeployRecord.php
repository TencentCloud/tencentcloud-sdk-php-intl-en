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
 * Details of configuration group version release notes.
 *
 * @method array getConfigGroupVersionInfos() Obtain Detailed information of the released version.
 * @method void setConfigGroupVersionInfos(array $ConfigGroupVersionInfos) Set Detailed information of the released version.
 * @method string getDeployTime() Obtain Release time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setDeployTime(string $DeployTime) Set Release time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getStatus() Obtain Publishing status. Valid values:
<li> deploying: Releasing;</li>
<li>failure: release failure;</li>
<li>success: Published successfully.</li>
 * @method void setStatus(string $Status) Set Publishing status. Valid values:
<li> deploying: Releasing;</li>
<li>failure: release failure;</li>
<li>success: Published successfully.</li>
 * @method string getMessage() Obtain Publish result information.
 * @method void setMessage(string $Message) Set Publish result information.
 * @method string getRecordId() Obtain Release record ID.
 * @method void setRecordId(string $RecordId) Set Release record ID.
 * @method string getDescription() Obtain Change description.
 * @method void setDescription(string $Description) Set Change description.
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var array Detailed information of the released version.
     */
    public $ConfigGroupVersionInfos;

    /**
     * @var string Release time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $DeployTime;

    /**
     * @var string Publishing status. Valid values:
<li> deploying: Releasing;</li>
<li>failure: release failure;</li>
<li>success: Published successfully.</li>
     */
    public $Status;

    /**
     * @var string Publish result information.
     */
    public $Message;

    /**
     * @var string Release record ID.
     */
    public $RecordId;

    /**
     * @var string Change description.
     */
    public $Description;

    /**
     * @param array $ConfigGroupVersionInfos Detailed information of the released version.
     * @param string $DeployTime Release time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $Status Publishing status. Valid values:
<li> deploying: Releasing;</li>
<li>failure: release failure;</li>
<li>success: Published successfully.</li>
     * @param string $Message Publish result information.
     * @param string $RecordId Release record ID.
     * @param string $Description Change description.
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
        if (array_key_exists("ConfigGroupVersionInfos",$param) and $param["ConfigGroupVersionInfos"] !== null) {
            $this->ConfigGroupVersionInfos = [];
            foreach ($param["ConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->ConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
