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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version release record details for the configuration group.
 *
 * @method array getConfigGroupVersionInfos() Obtain Details about the released version.
 * @method void setConfigGroupVersionInfos(array $ConfigGroupVersionInfos) Set Details about the released version.
 * @method string getDeployTime() Obtain Release time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method void setDeployTime(string $DeployTime) Set Release time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method string getStatus() Obtain Release status. Valid values: 
<li>deploying: Being released.</li>
<li>failure: Release failed.</li>
<li>success: Released successfully. </li>
 * @method void setStatus(string $Status) Set Release status. Valid values: 
<li>deploying: Being released.</li>
<li>failure: Release failed.</li>
<li>success: Released successfully. </li>
 * @method string getMessage() Obtain Release result information.
 * @method void setMessage(string $Message) Set Release result information.
 * @method string getRecordId() Obtain Release record ID. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRecordId(string $RecordId) Set Release record ID. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Change description.
 * @method void setDescription(string $Description) Set Change description.
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var array Details about the released version.
     */
    public $ConfigGroupVersionInfos;

    /**
     * @var string Release time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     */
    public $DeployTime;

    /**
     * @var string Release status. Valid values: 
<li>deploying: Being released.</li>
<li>failure: Release failed.</li>
<li>success: Released successfully. </li>
     */
    public $Status;

    /**
     * @var string Release result information.
     */
    public $Message;

    /**
     * @var string Release record ID. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RecordId;

    /**
     * @var string Change description.
     */
    public $Description;

    /**
     * @param array $ConfigGroupVersionInfos Details about the released version.
     * @param string $DeployTime Release time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     * @param string $Status Release status. Valid values: 
<li>deploying: Being released.</li>
<li>failure: Release failed.</li>
<li>success: Released successfully. </li>
     * @param string $Message Release result information.
     * @param string $RecordId Release record ID. 
Note: this field may return null, indicating that no valid values can be obtained.
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
