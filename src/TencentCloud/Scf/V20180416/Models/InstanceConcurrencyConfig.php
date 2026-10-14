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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration description for multiple concurrent executions
 *
 * @method string getDynamicEnabled() Obtain Whether intelligent dynamic concurrency is enabled. If set to `FALSE`, static concurrency is used. If set to `''`, the multi-concurrency configuration is canceled.
 * @method void setDynamicEnabled(string $DynamicEnabled) Set Whether intelligent dynamic concurrency is enabled. If set to `FALSE`, static concurrency is used. If set to `''`, the multi-concurrency configuration is canceled.
 * @method integer getMaxConcurrency() Obtain Maximum number of concurrent requests per instance. Value range: [1,100]
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set Maximum number of concurrent requests per instance. Value range: [1,100]
 * @method string getInstanceIsolationEnabled() Obtain Safety isolation switch
 * @method void setInstanceIsolationEnabled(string $InstanceIsolationEnabled) Set Safety isolation switch
 * @method string getType() Obtain Session-Based or Request-Based. Choose one.
 * @method void setType(string $Type) Set Session-Based or Request-Based. Choose one.
 * @method array getMixNodeConfig() Obtain Dynamic concurrency parameter
 * @method void setMixNodeConfig(array $MixNodeConfig) Set Dynamic concurrency parameter
 * @method SessionConfig getSessionConfig() Obtain Session configuration parameters
 * @method void setSessionConfig(SessionConfig $SessionConfig) Set Session configuration parameters
 */
class InstanceConcurrencyConfig extends AbstractModel
{
    /**
     * @var string Whether intelligent dynamic concurrency is enabled. If set to `FALSE`, static concurrency is used. If set to `''`, the multi-concurrency configuration is canceled.
     */
    public $DynamicEnabled;

    /**
     * @var integer Maximum number of concurrent requests per instance. Value range: [1,100]
     */
    public $MaxConcurrency;

    /**
     * @var string Safety isolation switch
     */
    public $InstanceIsolationEnabled;

    /**
     * @var string Session-Based or Request-Based. Choose one.
     */
    public $Type;

    /**
     * @var array Dynamic concurrency parameter
     */
    public $MixNodeConfig;

    /**
     * @var SessionConfig Session configuration parameters
     */
    public $SessionConfig;

    /**
     * @param string $DynamicEnabled Whether intelligent dynamic concurrency is enabled. If set to `FALSE`, static concurrency is used. If set to `''`, the multi-concurrency configuration is canceled.
     * @param integer $MaxConcurrency Maximum number of concurrent requests per instance. Value range: [1,100]
     * @param string $InstanceIsolationEnabled Safety isolation switch
     * @param string $Type Session-Based or Request-Based. Choose one.
     * @param array $MixNodeConfig Dynamic concurrency parameter
     * @param SessionConfig $SessionConfig Session configuration parameters
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
        if (array_key_exists("DynamicEnabled",$param) and $param["DynamicEnabled"] !== null) {
            $this->DynamicEnabled = $param["DynamicEnabled"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("InstanceIsolationEnabled",$param) and $param["InstanceIsolationEnabled"] !== null) {
            $this->InstanceIsolationEnabled = $param["InstanceIsolationEnabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MixNodeConfig",$param) and $param["MixNodeConfig"] !== null) {
            $this->MixNodeConfig = [];
            foreach ($param["MixNodeConfig"] as $key => $value){
                $obj = new MixNodeConfig();
                $obj->deserialize($value);
                array_push($this->MixNodeConfig, $obj);
            }
        }

        if (array_key_exists("SessionConfig",$param) and $param["SessionConfig"] !== null) {
            $this->SessionConfig = new SessionConfig();
            $this->SessionConfig->deserialize($param["SessionConfig"]);
        }
    }
}
