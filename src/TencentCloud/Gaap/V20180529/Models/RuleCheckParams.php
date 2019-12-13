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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getDelayLoop() 获取Time interval of health check
 * @method void setDelayLoop(integer $DelayLoop) 设置Time interval of health check
 * @method integer getConnectTimeout() 获取Response timeout of health check
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置Response timeout of health check
 * @method string getPath() 获取Check path of health check
 * @method void setPath(string $Path) 设置Check path of health check
 * @method string getMethod() 获取Health check method: GET/HEAD
 * @method void setMethod(string $Method) 设置Health check method: GET/HEAD
 * @method array getStatusCode() 获取Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
 * @method void setStatusCode(array $StatusCode) 设置Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
 * @method string getDomain() 获取Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
 * @method void setDomain(string $Domain) 设置Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
 */

/**
 *Health check parameters of the layer-7 listeners’ forwarding rules
 */
class RuleCheckParams extends AbstractModel
{
    /**
     * @var integer Time interval of health check
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of health check
     */
    public $ConnectTimeout;

    /**
     * @var string Check path of health check
     */
    public $Path;

    /**
     * @var string Health check method: GET/HEAD
     */
    public $Method;

    /**
     * @var array Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
     */
    public $StatusCode;

    /**
     * @var string Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
     */
    public $Domain;
    /**
     * @param integer $DelayLoop Time interval of health check
     * @param integer $ConnectTimeout Response timeout of health check
     * @param string $Path Check path of health check
     * @param string $Method Health check method: GET/HEAD
     * @param array $StatusCode Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
     * @param string $Domain Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
