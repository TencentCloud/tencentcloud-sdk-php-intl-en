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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getSrcUser() Obtain Source user account name
 * @method void setSrcUser(string $SrcUser) Set Source user account name
 * @method string getSrcHost() Obtain Source user host
 * @method void setSrcHost(string $SrcHost) Set Source user host
 * @method string getDstUser() Obtain Target user account name
 * @method void setDstUser(string $DstUser) Set Target user account name
 * @method string getDstHost() Obtain Target user host
 * @method void setDstHost(string $DstHost) Set Target user host
 * @method string getDstDesc() Obtain Target account description
 * @method void setDstDesc(string $DstDesc) Set Target account description
 */
class CloneAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Source user account name
     */
    public $SrcUser;

    /**
     * @var string Source user host
     */
    public $SrcHost;

    /**
     * @var string Target user account name
     */
    public $DstUser;

    /**
     * @var string Target user host
     */
    public $DstHost;

    /**
     * @var string Target account description
     */
    public $DstDesc;

    /**
     * @param string $InstanceId Instance ID
     * @param string $SrcUser Source user account name
     * @param string $SrcHost Source user host
     * @param string $DstUser Target user account name
     * @param string $DstHost Target user host
     * @param string $DstDesc Target account description
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

        if (array_key_exists("SrcUser",$param) and $param["SrcUser"] !== null) {
            $this->SrcUser = $param["SrcUser"];
        }

        if (array_key_exists("SrcHost",$param) and $param["SrcHost"] !== null) {
            $this->SrcHost = $param["SrcHost"];
        }

        if (array_key_exists("DstUser",$param) and $param["DstUser"] !== null) {
            $this->DstUser = $param["DstUser"];
        }

        if (array_key_exists("DstHost",$param) and $param["DstHost"] !== null) {
            $this->DstHost = $param["DstHost"];
        }

        if (array_key_exists("DstDesc",$param) and $param["DstDesc"] !== null) {
            $this->DstDesc = $param["DstDesc"];
        }
    }
}
