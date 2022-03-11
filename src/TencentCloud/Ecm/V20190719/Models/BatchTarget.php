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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB batch targets
 *
 * @method string getListenerId() Obtain Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Bound port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Bound port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEniIp() Obtain ENI IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEniIp(string $EniIp) Set ENI IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class BatchTarget extends AbstractModel
{
    /**
     * @var string Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var integer Bound port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string ENI IP
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EniIp;

    /**
     * @var integer Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @param string $ListenerId Listener ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Bound port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EniIp ENI IP
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Weight of the CVM instance. Value range: [0, 100]. If it is not specified for binding the instance, 10 will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
