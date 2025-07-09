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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySLInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance unique identifier (string).
 * @method void setInstanceId(string $InstanceId) Set Instance unique identifier (string).
 * @method string getZone() Obtain Region name to be changed.
 * @method void setZone(string $Zone) Set Region name to be changed.
 * @method integer getNodeNum() Obtain Target node count after configuration change in this region. The total number of nodes across all regions should be greater than or equal to 3 and less than or equal to 50.
 * @method void setNodeNum(integer $NodeNum) Set Target node count after configuration change in this region. The total number of nodes across all regions should be greater than or equal to 3 and less than or equal to 50.
 * @method string getClientToken() Obtain The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
 * @method void setClientToken(string $ClientToken) Set The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
 */
class ModifySLInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance unique identifier (string).
     */
    public $InstanceId;

    /**
     * @var string Region name to be changed.
     */
    public $Zone;

    /**
     * @var integer Target node count after configuration change in this region. The total number of nodes across all regions should be greater than or equal to 3 and less than or equal to 50.
     */
    public $NodeNum;

    /**
     * @var string The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
     */
    public $ClientToken;

    /**
     * @param string $InstanceId Instance unique identifier (string).
     * @param string $Zone Region name to be changed.
     * @param integer $NodeNum Target node count after configuration change in this region. The total number of nodes across all regions should be greater than or equal to 3 and less than or equal to 50.
     * @param string $ClientToken The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
