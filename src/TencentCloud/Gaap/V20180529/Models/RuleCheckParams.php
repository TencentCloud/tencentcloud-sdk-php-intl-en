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
 * Health check parameters of the layer-7 listeners' forwarding rules
 *
 * @method integer getDelayLoop() Obtain Time interval of health check
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of health check
 * @method integer getConnectTimeout() Obtain Response timeout of health check
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of health check
 * @method string getPath() Obtain Check path of health check
 * @method void setPath(string $Path) Set Check path of health check
 * @method string getMethod() Obtain Health check method: GET/HEAD
 * @method void setMethod(string $Method) Set Health check method: GET/HEAD
 * @method array getStatusCode() Obtain Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
 * @method void setStatusCode(array $StatusCode) Set Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
 * @method string getDomain() Obtain Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
 * @method void setDomain(string $Domain) Set Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
 * @method integer getFailedCountInter() Obtain Origin server failure check frequency
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFailedCountInter(integer $FailedCountInter) Set Origin server failure check frequency
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getFailedThreshold() Obtain Origin server health check threshold. All requests to the origin server will be blocked once the threshold is exceeded.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFailedThreshold(integer $FailedThreshold) Set Origin server health check threshold. All requests to the origin server will be blocked once the threshold is exceeded.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBlockInter() Obtain Duration to block requests targeting the origin server after a failed health check
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBlockInter(integer $BlockInter) Set Duration to block requests targeting the origin server after a failed health check
Note: this field may return `null`, indicating that no valid values can be obtained.
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
     * @var integer Origin server failure check frequency
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FailedCountInter;

    /**
     * @var integer Origin server health check threshold. All requests to the origin server will be blocked once the threshold is exceeded.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FailedThreshold;

    /**
     * @var integer Duration to block requests targeting the origin server after a failed health check
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BlockInter;

    /**
     * @param integer $DelayLoop Time interval of health check
     * @param integer $ConnectTimeout Response timeout of health check
     * @param string $Path Check path of health check
     * @param string $Method Health check method: GET/HEAD
     * @param array $StatusCode Return code indicting normal origin servers. Value range: [100, 200, 300, 400, 500]
     * @param string $Domain Domain name to be performed health check
You cannot modify this parameter when calling ModifyRuleAttribute API.
     * @param integer $FailedCountInter Origin server failure check frequency
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $FailedThreshold Origin server health check threshold. All requests to the origin server will be blocked once the threshold is exceeded.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $BlockInter Duration to block requests targeting the origin server after a failed health check
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("FailedCountInter",$param) and $param["FailedCountInter"] !== null) {
            $this->FailedCountInter = $param["FailedCountInter"];
        }

        if (array_key_exists("FailedThreshold",$param) and $param["FailedThreshold"] !== null) {
            $this->FailedThreshold = $param["FailedThreshold"];
        }

        if (array_key_exists("BlockInter",$param) and $param["BlockInter"] !== null) {
            $this->BlockInter = $param["BlockInter"];
        }
    }
}
