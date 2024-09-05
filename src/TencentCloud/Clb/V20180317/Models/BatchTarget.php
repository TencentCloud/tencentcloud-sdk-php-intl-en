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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch binding type
 *
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method integer getPort() Obtain The port to Bind
 * @method void setPort(integer $Port) Set The port to Bind
 * @method string getInstanceId() Obtain CVM instance ID. The primary IP of the primary ENI will be bound.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID. The primary IP of the primary ENI will be bound.
 * @method string getEniIp() Obtain It is required for binding an IP. It supports an ENI IP or any other private IP. To bind an ENI IP, the ENI should be bound to a CVM instance before being bound to a CLB instance.
Note: either `InstanceId` or `EniIp` must be passed in, which is required for binding a dual-stack IPv6 CVM instance.
 * @method void setEniIp(string $EniIp) Set It is required for binding an IP. It supports an ENI IP or any other private IP. To bind an ENI IP, the ENI should be bound to a CVM instance before being bound to a CLB instance.
Note: either `InstanceId` or `EniIp` must be passed in, which is required for binding a dual-stack IPv6 CVM instance.
 * @method integer getWeight() Obtain Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
 * @method void setWeight(integer $Weight) Set Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
 * @method string getLocationId() Obtain Layer-7 rule ID. This parameter is required for Layer-7 CLB.
 * @method void setLocationId(string $LocationId) Set Layer-7 rule ID. This parameter is required for Layer-7 CLB.
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 */
class BatchTarget extends AbstractModel
{
    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var integer The port to Bind
     */
    public $Port;

    /**
     * @var string CVM instance ID. The primary IP of the primary ENI will be bound.
     */
    public $InstanceId;

    /**
     * @var string It is required for binding an IP. It supports an ENI IP or any other private IP. To bind an ENI IP, the ENI should be bound to a CVM instance before being bound to a CLB instance.
Note: either `InstanceId` or `EniIp` must be passed in, which is required for binding a dual-stack IPv6 CVM instance.
     */
    public $EniIp;

    /**
     * @var integer Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
     */
    public $Weight;

    /**
     * @var string Layer-7 rule ID. This parameter is required for Layer-7 CLB.
     */
    public $LocationId;

    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @param string $ListenerId Listener ID.
     * @param integer $Port The port to Bind
     * @param string $InstanceId CVM instance ID. The primary IP of the primary ENI will be bound.
     * @param string $EniIp It is required for binding an IP. It supports an ENI IP or any other private IP. To bind an ENI IP, the ENI should be bound to a CVM instance before being bound to a CLB instance.
Note: either `InstanceId` or `EniIp` must be passed in, which is required for binding a dual-stack IPv6 CVM instance.
     * @param integer $Weight Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
     * @param string $LocationId Layer-7 rule ID. This parameter is required for Layer-7 CLB.
     * @param string $Tag Tag.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
