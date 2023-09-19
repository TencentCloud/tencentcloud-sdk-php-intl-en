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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster model adjustment history
 *
 * @method string getID() Obtain Record ID
 * @method void setID(string $ID) Set Record ID
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getStatus() Obtain Status (valid values: `trading`, `upgrading`, `success`, `failed`)
 * @method void setStatus(string $Status) Set Status (valid values: `trading`, `upgrading`, `success`, `failed`)
 * @method string getMessage() Obtain Status description
 * @method void setMessage(string $Message) Set Status description
 * @method string getOldLevel() Obtain Original model
 * @method void setOldLevel(string $OldLevel) Set Original model
 * @method string getNewLevel() Obtain New model
 * @method void setNewLevel(string $NewLevel) Set New model
 * @method string getTriggerType() Obtain Trigger type (valid values: `manual`, `auto`)
 * @method void setTriggerType(string $TriggerType) Set Trigger type (valid values: `manual`, `auto`)
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method string getStartedAt() Obtain Start time
 * @method void setStartedAt(string $StartedAt) Set Start time
 * @method string getEndedAt() Obtain End time
 * @method void setEndedAt(string $EndedAt) Set End time
 */
class ClusterLevelChangeRecord extends AbstractModel
{
    /**
     * @var string Record ID
     */
    public $ID;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Status (valid values: `trading`, `upgrading`, `success`, `failed`)
     */
    public $Status;

    /**
     * @var string Status description
     */
    public $Message;

    /**
     * @var string Original model
     */
    public $OldLevel;

    /**
     * @var string New model
     */
    public $NewLevel;

    /**
     * @var string Trigger type (valid values: `manual`, `auto`)
     */
    public $TriggerType;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var string Start time
     */
    public $StartedAt;

    /**
     * @var string End time
     */
    public $EndedAt;

    /**
     * @param string $ID Record ID
     * @param string $ClusterID Cluster ID
     * @param string $Status Status (valid values: `trading`, `upgrading`, `success`, `failed`)
     * @param string $Message Status description
     * @param string $OldLevel Original model
     * @param string $NewLevel New model
     * @param string $TriggerType Trigger type (valid values: `manual`, `auto`)
     * @param string $CreatedAt Creation time
     * @param string $StartedAt Start time
     * @param string $EndedAt End time
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("OldLevel",$param) and $param["OldLevel"] !== null) {
            $this->OldLevel = $param["OldLevel"];
        }

        if (array_key_exists("NewLevel",$param) and $param["NewLevel"] !== null) {
            $this->NewLevel = $param["NewLevel"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("EndedAt",$param) and $param["EndedAt"] !== null) {
            $this->EndedAt = $param["EndedAt"];
        }
    }
}
