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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchWaterPrintConfig request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID
 * @method integer getOpenStatus() Obtain Watermark status. `1`: enabled; `0`: disabled.
 * @method void setOpenStatus(integer $OpenStatus) Set Watermark status. `1`: enabled; `0`: disabled.
 * @method integer getCloudSdkProxy() Obtain Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
 * @method void setCloudSdkProxy(integer $CloudSdkProxy) Set Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
 */
class SwitchWaterPrintConfigRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID
     */
    public $InstanceId;

    /**
     * @var integer Watermark status. `1`: enabled; `0`: disabled.
     */
    public $OpenStatus;

    /**
     * @var integer Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
     */
    public $CloudSdkProxy;

    /**
     * @param string $InstanceId Anti-DDoS instance ID
     * @param integer $OpenStatus Watermark status. `1`: enabled; `0`: disabled.
     * @param integer $CloudSdkProxy Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
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

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("CloudSdkProxy",$param) and $param["CloudSdkProxy"] !== null) {
            $this->CloudSdkProxy = $param["CloudSdkProxy"];
        }
    }
}
