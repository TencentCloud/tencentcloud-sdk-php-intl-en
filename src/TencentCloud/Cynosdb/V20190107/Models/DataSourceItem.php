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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data source item
 *
 * @method string getInstanceId() Obtain Source instance ID
 * @method void setInstanceId(string $InstanceId) Set Source instance ID
 * @method string getClusterId() Obtain Source cluster ID
 * @method void setClusterId(string $ClusterId) Set Source cluster ID
 * @method string getDBType() Obtain Source database type
 * @method void setDBType(string $DBType) Set Source database type
 * @method string getIP() Obtain Source database IP
 * @method void setIP(string $IP) Set Source database IP
 * @method integer getPort() Obtain Source database port
 * @method void setPort(integer $Port) Set Source database port
 * @method string getRegion() Obtain Source instance region
 * @method void setRegion(string $Region) Set Source instance region
 * @method string getZone() Obtain Source instance availability zone
 * @method void setZone(string $Zone) Set Source instance availability zone
 * @method string getSrcUin() Obtain Source main account uin
 * @method void setSrcUin(string $SrcUin) Set Source main account uin
 * @method string getAccountMode() Obtain Account type
 * @method void setAccountMode(string $AccountMode) Set Account type
 * @method string getReplicationJobStatus() Obtain sync task status
 * @method void setReplicationJobStatus(string $ReplicationJobStatus) Set sync task status
 */
class DataSourceItem extends AbstractModel
{
    /**
     * @var string Source instance ID
     */
    public $InstanceId;

    /**
     * @var string Source cluster ID
     */
    public $ClusterId;

    /**
     * @var string Source database type
     */
    public $DBType;

    /**
     * @var string Source database IP
     */
    public $IP;

    /**
     * @var integer Source database port
     */
    public $Port;

    /**
     * @var string Source instance region
     */
    public $Region;

    /**
     * @var string Source instance availability zone
     */
    public $Zone;

    /**
     * @var string Source main account uin
     */
    public $SrcUin;

    /**
     * @var string Account type
     */
    public $AccountMode;

    /**
     * @var string sync task status
     */
    public $ReplicationJobStatus;

    /**
     * @param string $InstanceId Source instance ID
     * @param string $ClusterId Source cluster ID
     * @param string $DBType Source database type
     * @param string $IP Source database IP
     * @param integer $Port Source database port
     * @param string $Region Source instance region
     * @param string $Zone Source instance availability zone
     * @param string $SrcUin Source main account uin
     * @param string $AccountMode Account type
     * @param string $ReplicationJobStatus sync task status
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SrcUin",$param) and $param["SrcUin"] !== null) {
            $this->SrcUin = $param["SrcUin"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("ReplicationJobStatus",$param) and $param["ReplicationJobStatus"] !== null) {
            $this->ReplicationJobStatus = $param["ReplicationJobStatus"];
        }
    }
}
