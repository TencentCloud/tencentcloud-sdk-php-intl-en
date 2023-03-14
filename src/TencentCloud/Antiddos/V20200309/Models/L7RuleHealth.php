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
 * Health check parameters of layer-7 forwarding rules
 *
 * @method integer getStatus() Obtain Configuration status. Values: `0` (normal), `1` (configuration in progress) and `2` (configuration failed).
 * @method void setStatus(integer $Status) Set Configuration status. Values: `0` (normal), `1` (configuration in progress) and `2` (configuration failed).
 * @method integer getEnable() Obtain Switch. Values: `1`: Enable; `0`: Disable.
 * @method void setEnable(integer $Enable) Set Switch. Values: `1`: Enable; `0`: Disable.
 * @method string getRuleId() Obtain ID of the rule
 * @method void setRuleId(string $RuleId) Set ID of the rule
 * @method string getUrl() Obtain HTTP request path. The default value is /.
 * @method void setUrl(string $Url) Set HTTP request path. The default value is /.
 * @method integer getInterval() Obtain Health check interval. Unit: second.
 * @method void setInterval(integer $Interval) Set Health check interval. Unit: second.
 * @method integer getAliveNum() Obtain Healthy threshold, which specifies the number of consecutive successful health checks.
 * @method void setAliveNum(integer $AliveNum) Set Healthy threshold, which specifies the number of consecutive successful health checks.
 * @method integer getKickNum() Obtain Unhealthy threshold, which specifies the number of consecutive failed health checks.
 * @method void setKickNum(integer $KickNum) Set Unhealthy threshold, which specifies the number of consecutive failed health checks.
 * @method string getMethod() Obtain HTTP request method. Values: `HEAD` and `GET`.
 * @method void setMethod(string $Method) Set HTTP request method. Values: `HEAD` and `GET`.
 * @method integer getStatusCode() Obtain Status code that signifies a normal state. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
 * @method void setStatusCode(integer $StatusCode) Set Status code that signifies a normal state. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
 * @method integer getProtocolFlag() Obtain Whether to deploy both HTTP and HTTPS health check rules
 * @method void setProtocolFlag(integer $ProtocolFlag) Set Whether to deploy both HTTP and HTTPS health check rules
 * @method integer getPassiveEnable() Obtain Enables passive detection. Values: `1` (enable) and `0` (disable).
 * @method void setPassiveEnable(integer $PassiveEnable) Set Enables passive detection. Values: `1` (enable) and `0` (disable).
 * @method integer getBlockInter() Obtain Blocking period in the passive detection configuration
 * @method void setBlockInter(integer $BlockInter) Set Blocking period in the passive detection configuration
 * @method integer getFailedCountInter() Obtain Time interval between passive detections
 * @method void setFailedCountInter(integer $FailedCountInter) Set Time interval between passive detections
 * @method integer getFailedThreshold() Obtain Unhealthy threshold in the passive detection configuration
 * @method void setFailedThreshold(integer $FailedThreshold) Set Unhealthy threshold in the passive detection configuration
 * @method integer getPassiveStatusCode() Obtain Status code that signals that the passive detection considers the status normal. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
 * @method void setPassiveStatusCode(integer $PassiveStatusCode) Set Status code that signals that the passive detection considers the status normal. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
 * @method integer getPassiveStatus() Obtain Configuration status of the passive health check. Values: `0` (Normal), `1` (configuration in progress) and `2` (configuration failed).
 * @method void setPassiveStatus(integer $PassiveStatus) Set Configuration status of the passive health check. Values: `0` (Normal), `1` (configuration in progress) and `2` (configuration failed).
 */
class L7RuleHealth extends AbstractModel
{
    /**
     * @var integer Configuration status. Values: `0` (normal), `1` (configuration in progress) and `2` (configuration failed).
     */
    public $Status;

    /**
     * @var integer Switch. Values: `1`: Enable; `0`: Disable.
     */
    public $Enable;

    /**
     * @var string ID of the rule
     */
    public $RuleId;

    /**
     * @var string HTTP request path. The default value is /.
     */
    public $Url;

    /**
     * @var integer Health check interval. Unit: second.
     */
    public $Interval;

    /**
     * @var integer Healthy threshold, which specifies the number of consecutive successful health checks.
     */
    public $AliveNum;

    /**
     * @var integer Unhealthy threshold, which specifies the number of consecutive failed health checks.
     */
    public $KickNum;

    /**
     * @var string HTTP request method. Values: `HEAD` and `GET`.
     */
    public $Method;

    /**
     * @var integer Status code that signifies a normal state. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
     */
    public $StatusCode;

    /**
     * @var integer Whether to deploy both HTTP and HTTPS health check rules
     */
    public $ProtocolFlag;

    /**
     * @var integer Enables passive detection. Values: `1` (enable) and `0` (disable).
     */
    public $PassiveEnable;

    /**
     * @var integer Blocking period in the passive detection configuration
     */
    public $BlockInter;

    /**
     * @var integer Time interval between passive detections
     */
    public $FailedCountInter;

    /**
     * @var integer Unhealthy threshold in the passive detection configuration
     */
    public $FailedThreshold;

    /**
     * @var integer Status code that signals that the passive detection considers the status normal. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
     */
    public $PassiveStatusCode;

    /**
     * @var integer Configuration status of the passive health check. Values: `0` (Normal), `1` (configuration in progress) and `2` (configuration failed).
     */
    public $PassiveStatus;

    /**
     * @param integer $Status Configuration status. Values: `0` (normal), `1` (configuration in progress) and `2` (configuration failed).
     * @param integer $Enable Switch. Values: `1`: Enable; `0`: Disable.
     * @param string $RuleId ID of the rule
     * @param string $Url HTTP request path. The default value is /.
     * @param integer $Interval Health check interval. Unit: second.
     * @param integer $AliveNum Healthy threshold, which specifies the number of consecutive successful health checks.
     * @param integer $KickNum Unhealthy threshold, which specifies the number of consecutive failed health checks.
     * @param string $Method HTTP request method. Values: `HEAD` and `GET`.
     * @param integer $StatusCode Status code that signifies a normal state. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
     * @param integer $ProtocolFlag Whether to deploy both HTTP and HTTPS health check rules
     * @param integer $PassiveEnable Enables passive detection. Values: `1` (enable) and `0` (disable).
     * @param integer $BlockInter Blocking period in the passive detection configuration
     * @param integer $FailedCountInter Time interval between passive detections
     * @param integer $FailedThreshold Unhealthy threshold in the passive detection configuration
     * @param integer $PassiveStatusCode Status code that signals that the passive detection considers the status normal. Values: `1` (1xx), `2` (2xx), `4` (3xx), `8` (4xx), and `16` (5xx).
     * @param integer $PassiveStatus Configuration status of the passive health check. Values: `0` (Normal), `1` (configuration in progress) and `2` (configuration failed).
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ProtocolFlag",$param) and $param["ProtocolFlag"] !== null) {
            $this->ProtocolFlag = $param["ProtocolFlag"];
        }

        if (array_key_exists("PassiveEnable",$param) and $param["PassiveEnable"] !== null) {
            $this->PassiveEnable = $param["PassiveEnable"];
        }

        if (array_key_exists("BlockInter",$param) and $param["BlockInter"] !== null) {
            $this->BlockInter = $param["BlockInter"];
        }

        if (array_key_exists("FailedCountInter",$param) and $param["FailedCountInter"] !== null) {
            $this->FailedCountInter = $param["FailedCountInter"];
        }

        if (array_key_exists("FailedThreshold",$param) and $param["FailedThreshold"] !== null) {
            $this->FailedThreshold = $param["FailedThreshold"];
        }

        if (array_key_exists("PassiveStatusCode",$param) and $param["PassiveStatusCode"] !== null) {
            $this->PassiveStatusCode = $param["PassiveStatusCode"];
        }

        if (array_key_exists("PassiveStatus",$param) and $param["PassiveStatus"] !== null) {
            $this->PassiveStatus = $param["PassiveStatus"];
        }
    }
}
