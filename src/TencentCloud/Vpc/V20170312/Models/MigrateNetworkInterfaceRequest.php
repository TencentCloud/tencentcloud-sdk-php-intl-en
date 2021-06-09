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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MigrateNetworkInterface request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method string getSourceInstanceId() Obtain The ID of the CVM bound to the ENI, such as `ins-r8hr2upy`.
 * @method void setSourceInstanceId(string $SourceInstanceId) Set The ID of the CVM bound to the ENI, such as `ins-r8hr2upy`.
 * @method string getDestinationInstanceId() Obtain ID of the destination CVM instance to be migrated.
 * @method void setDestinationInstanceId(string $DestinationInstanceId) Set ID of the destination CVM instance to be migrated.
 * @method integer getAttachType() Obtain ENI mount method. Valid values: 0: standard; 1: extension; default value: 0
 * @method void setAttachType(integer $AttachType) Set ENI mount method. Valid values: 0: standard; 1: extension; default value: 0
 */
class MigrateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string The ID of the CVM bound to the ENI, such as `ins-r8hr2upy`.
     */
    public $SourceInstanceId;

    /**
     * @var string ID of the destination CVM instance to be migrated.
     */
    public $DestinationInstanceId;

    /**
     * @var integer ENI mount method. Valid values: 0: standard; 1: extension; default value: 0
     */
    public $AttachType;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-m6dyj72l`.
     * @param string $SourceInstanceId The ID of the CVM bound to the ENI, such as `ins-r8hr2upy`.
     * @param string $DestinationInstanceId ID of the destination CVM instance to be migrated.
     * @param integer $AttachType ENI mount method. Valid values: 0: standard; 1: extension; default value: 0
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("DestinationInstanceId",$param) and $param["DestinationInstanceId"] !== null) {
            $this->DestinationInstanceId = $param["DestinationInstanceId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }
    }
}
