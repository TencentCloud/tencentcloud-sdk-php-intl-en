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
 * Health check information.
Note: Custom check parameters are currently supported only in certain beta test regions.
 *
 * @method integer getHealthSwitch() Obtain Whether to enable health check. 1: enable; 0: disable.
 * @method void setHealthSwitch(integer $HealthSwitch) Set Whether to enable health check. 1: enable; 0: disable.
 * @method integer getTimeOut() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOut(integer $TimeOut) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTime() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTime(integer $IntervalTime) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHealthNum() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthNum(integer $HealthNum) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnHealthNum() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnHealthNum(integer $UnHealthNum) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHttpCode() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCode(integer $HttpCode) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckPath() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckPath(string $HttpCheckPath) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckDomain() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckDomain(string $HttpCheckDomain) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckMethod() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckMethod(string $HttpCheckMethod) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCheckPort() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPort(integer $CheckPort) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContextType() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContextType(string $ContextType) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSendContext() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendContext(string $SendContext) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecvContext() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckType() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckType(string $CheckType) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpVersion() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpVersion(string $HttpVersion) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceIpType() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceIpType(integer $SourceIpType) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtendedCode() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtendedCode(string $ExtendedCode) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class HealthCheck extends AbstractModel
{
    /**
     * @var integer Whether to enable health check. 1: enable; 0: disable.
     */
    public $HealthSwitch;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOut;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTime;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthNum;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnHealthNum;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCode;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckPath;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckDomain;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckMethod;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPort;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContextType;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendContext;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckType;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpVersion;

    /**
     * @var integer Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceIpType;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtendedCode;

    /**
     * @param integer $HealthSwitch Whether to enable health check. 1: enable; 0: disable.
     * @param integer $TimeOut Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTime Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HealthNum Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnHealthNum Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HttpCode Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckPath Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckDomain Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckMethod Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CheckPort Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContextType Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SendContext Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecvContext Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckType Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpVersion Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceIpType Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtendedCode Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnHealthNum",$param) and $param["UnHealthNum"] !== null) {
            $this->UnHealthNum = $param["UnHealthNum"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("SourceIpType",$param) and $param["SourceIpType"] !== null) {
            $this->SourceIpType = $param["SourceIpType"];
        }

        if (array_key_exists("ExtendedCode",$param) and $param["ExtendedCode"] !== null) {
            $this->ExtendedCode = $param["ExtendedCode"];
        }
    }
}
