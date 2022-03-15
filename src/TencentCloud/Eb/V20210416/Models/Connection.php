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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Connection information
 *
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getModTime() Obtain Update time
 * @method void setModTime(string $ModTime) Set Update time
 * @method boolean getEnable() Obtain Switch
 * @method void setEnable(boolean $Enable) Set Switch
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getConnectionId() Obtain Connector ID
 * @method void setConnectionId(string $ConnectionId) Set Connector ID
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method ConnectionDescription getConnectionDescription() Obtain Connector description
 * @method void setConnectionDescription(ConnectionDescription $ConnectionDescription) Set Connector description
 * @method string getConnectionName() Obtain Connector name
 * @method void setConnectionName(string $ConnectionName) Set Connector name
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 */
class Connection extends AbstractModel
{
    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Update time
     */
    public $ModTime;

    /**
     * @var boolean Switch
     */
    public $Enable;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Connector ID
     */
    public $ConnectionId;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var ConnectionDescription Connector description
     */
    public $ConnectionDescription;

    /**
     * @var string Connector name
     */
    public $ConnectionName;

    /**
     * @var string Type
     */
    public $Type;

    /**
     * @param string $Status Status
     * @param string $ModTime Update time
     * @param boolean $Enable Switch
     * @param string $Description Description
     * @param string $AddTime Creation time
     * @param string $ConnectionId Connector ID
     * @param string $EventBusId Event bus ID
     * @param ConnectionDescription $ConnectionDescription Connector description
     * @param string $ConnectionName Connector name
     * @param string $Type Type
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("ConnectionDescription",$param) and $param["ConnectionDescription"] !== null) {
            $this->ConnectionDescription = new ConnectionDescription();
            $this->ConnectionDescription->deserialize($param["ConnectionDescription"]);
        }

        if (array_key_exists("ConnectionName",$param) and $param["ConnectionName"] !== null) {
            $this->ConnectionName = $param["ConnectionName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
