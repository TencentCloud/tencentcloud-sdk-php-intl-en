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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetCustomizedConfigForLoadBalancer request structure.
 *
 * @method string getOperationType() Obtain Operation type: `ADD`, `DELETE`, `UPDATE`, `BIND`, `UNBIND`
 * @method void setOperationType(string $OperationType) Set Operation type: `ADD`, `DELETE`, `UPDATE`, `BIND`, `UNBIND`
 * @method string getUconfigId() Obtain This field is required except for creating custom configurations, such as "pz-1234abcd".
 * @method void setUconfigId(string $UconfigId) Set This field is required except for creating custom configurations, such as "pz-1234abcd".
 * @method string getConfigContent() Obtain This field is required when creating or modifying custom configurations.
 * @method void setConfigContent(string $ConfigContent) Set This field is required when creating or modifying custom configurations.
 * @method string getConfigName() Obtain This field is required when creating or renaming custom configurations.
 * @method void setConfigName(string $ConfigName) Set This field is required when creating or renaming custom configurations.
 * @method array getLoadBalancerIds() Obtain This field is required when binding/unbinding resources.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set This field is required when binding/unbinding resources.
 */
class SetCustomizedConfigForLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Operation type: `ADD`, `DELETE`, `UPDATE`, `BIND`, `UNBIND`
     */
    public $OperationType;

    /**
     * @var string This field is required except for creating custom configurations, such as "pz-1234abcd".
     */
    public $UconfigId;

    /**
     * @var string This field is required when creating or modifying custom configurations.
     */
    public $ConfigContent;

    /**
     * @var string This field is required when creating or renaming custom configurations.
     */
    public $ConfigName;

    /**
     * @var array This field is required when binding/unbinding resources.
     */
    public $LoadBalancerIds;

    /**
     * @param string $OperationType Operation type: `ADD`, `DELETE`, `UPDATE`, `BIND`, `UNBIND`
     * @param string $UconfigId This field is required except for creating custom configurations, such as "pz-1234abcd".
     * @param string $ConfigContent This field is required when creating or modifying custom configurations.
     * @param string $ConfigName This field is required when creating or renaming custom configurations.
     * @param array $LoadBalancerIds This field is required when binding/unbinding resources.
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
