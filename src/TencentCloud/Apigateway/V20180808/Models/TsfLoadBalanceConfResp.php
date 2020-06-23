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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `TsfLoadBalanceConf` output parameter usage
 *
 * @method boolean getIsLoadBalance() Obtain Whether load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsLoadBalance(boolean $IsLoadBalance) Set Whether load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain Load balancing method.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set Load balancing method.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getSessionStickRequired() Obtain Whether session persistence is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionStickRequired(boolean $SessionStickRequired) Set Whether session persistence is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionStickTimeout() Obtain Session persistence timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionStickTimeout(integer $SessionStickTimeout) Set Session persistence timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TsfLoadBalanceConfResp extends AbstractModel
{
    /**
     * @var boolean Whether load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsLoadBalance;

    /**
     * @var string Load balancing method.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var boolean Whether session persistence is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionStickRequired;

    /**
     * @var integer Session persistence timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionStickTimeout;

    /**
     * @param boolean $IsLoadBalance Whether load balancing is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Method Load balancing method.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $SessionStickRequired Whether session persistence is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionStickTimeout Session persistence timeout period.
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
        if (array_key_exists("IsLoadBalance",$param) and $param["IsLoadBalance"] !== null) {
            $this->IsLoadBalance = $param["IsLoadBalance"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("SessionStickRequired",$param) and $param["SessionStickRequired"] !== null) {
            $this->SessionStickRequired = $param["SessionStickRequired"];
        }

        if (array_key_exists("SessionStickTimeout",$param) and $param["SessionStickTimeout"] !== null) {
            $this->SessionStickTimeout = $param["SessionStickTimeout"];
        }
    }
}
