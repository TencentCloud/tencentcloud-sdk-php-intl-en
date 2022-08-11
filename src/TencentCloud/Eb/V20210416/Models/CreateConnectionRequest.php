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
 * CreateConnection request structure.
 *
 * @method ConnectionDescription getConnectionDescription() Obtain Connector description
 * @method void setConnectionDescription(ConnectionDescription $ConnectionDescription) Set Connector description
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getConnectionName() Obtain Connector name
 * @method void setConnectionName(string $ConnectionName) Set Connector name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method boolean getEnable() Obtain Whether to enable
 * @method void setEnable(boolean $Enable) Set Whether to enable
 * @method string getType() Obtain Type of the connector
 * @method void setType(string $Type) Set Type of the connector
 */
class CreateConnectionRequest extends AbstractModel
{
    /**
     * @var ConnectionDescription Connector description
     */
    public $ConnectionDescription;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Connector name
     */
    public $ConnectionName;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var boolean Whether to enable
     */
    public $Enable;

    /**
     * @var string Type of the connector
     */
    public $Type;

    /**
     * @param ConnectionDescription $ConnectionDescription Connector description
     * @param string $EventBusId Event bus ID
     * @param string $ConnectionName Connector name
     * @param string $Description Description
     * @param boolean $Enable Whether to enable
     * @param string $Type Type of the connector
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
        if (array_key_exists("ConnectionDescription",$param) and $param["ConnectionDescription"] !== null) {
            $this->ConnectionDescription = new ConnectionDescription();
            $this->ConnectionDescription->deserialize($param["ConnectionDescription"]);
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("ConnectionName",$param) and $param["ConnectionName"] !== null) {
            $this->ConnectionName = $param["ConnectionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
