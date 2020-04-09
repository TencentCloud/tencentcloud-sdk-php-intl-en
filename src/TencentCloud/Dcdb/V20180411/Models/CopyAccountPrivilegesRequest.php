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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyAccountPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc.
 * @method string getSrcUserName() Obtain Source username
 * @method void setSrcUserName(string $SrcUserName) Set Source username
 * @method string getSrcHost() Obtain Access host allowed for a source user
 * @method void setSrcHost(string $SrcHost) Set Access host allowed for a source user
 * @method string getDstUserName() Obtain Target username
 * @method void setDstUserName(string $DstUserName) Set Target username
 * @method string getDstHost() Obtain Access host allowed for a target user
 * @method void setDstHost(string $DstHost) Set Access host allowed for a target user
 * @method string getSrcReadOnly() Obtain `ReadOnly` attribute of a source account
 * @method void setSrcReadOnly(string $SrcReadOnly) Set `ReadOnly` attribute of a source account
 * @method string getDstReadOnly() Obtain `ReadOnly` attribute of a target account
 * @method void setDstReadOnly(string $DstReadOnly) Set `ReadOnly` attribute of a target account
 */
class CopyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var string Source username
     */
    public $SrcUserName;

    /**
     * @var string Access host allowed for a source user
     */
    public $SrcHost;

    /**
     * @var string Target username
     */
    public $DstUserName;

    /**
     * @var string Access host allowed for a target user
     */
    public $DstHost;

    /**
     * @var string `ReadOnly` attribute of a source account
     */
    public $SrcReadOnly;

    /**
     * @var string `ReadOnly` attribute of a target account
     */
    public $DstReadOnly;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc.
     * @param string $SrcUserName Source username
     * @param string $SrcHost Access host allowed for a source user
     * @param string $DstUserName Target username
     * @param string $DstHost Access host allowed for a target user
     * @param string $SrcReadOnly `ReadOnly` attribute of a source account
     * @param string $DstReadOnly `ReadOnly` attribute of a target account
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

        if (array_key_exists("SrcUserName",$param) and $param["SrcUserName"] !== null) {
            $this->SrcUserName = $param["SrcUserName"];
        }

        if (array_key_exists("SrcHost",$param) and $param["SrcHost"] !== null) {
            $this->SrcHost = $param["SrcHost"];
        }

        if (array_key_exists("DstUserName",$param) and $param["DstUserName"] !== null) {
            $this->DstUserName = $param["DstUserName"];
        }

        if (array_key_exists("DstHost",$param) and $param["DstHost"] !== null) {
            $this->DstHost = $param["DstHost"];
        }

        if (array_key_exists("SrcReadOnly",$param) and $param["SrcReadOnly"] !== null) {
            $this->SrcReadOnly = $param["SrcReadOnly"];
        }

        if (array_key_exists("DstReadOnly",$param) and $param["DstReadOnly"] !== null) {
            $this->DstReadOnly = $param["DstReadOnly"];
        }
    }
}
