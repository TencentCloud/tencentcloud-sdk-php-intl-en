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
 * 
 *
 * @method boolean getHealthSwitch() Obtain 
 * @method void setHealthSwitch(boolean $HealthSwitch) Set 
 * @method string getProtocol() Obtain 
 * @method void setProtocol(string $Protocol) Set 
 * @method integer getPort() Obtain 
 * @method void setPort(integer $Port) Set 
 * @method integer getTimeout() Obtain 
 * @method void setTimeout(integer $Timeout) Set 
 * @method integer getGapTime() Obtain 
 * @method void setGapTime(integer $GapTime) Set 
 * @method integer getGoodLimit() Obtain 
 * @method void setGoodLimit(integer $GoodLimit) Set 
 * @method integer getBadLimit() Obtain 
 * @method void setBadLimit(integer $BadLimit) Set 
 * @method boolean getJumboFrame() Obtain 
 * @method void setJumboFrame(boolean $JumboFrame) Set 
 * @method integer getHttpCode() Obtain 
 * @method void setHttpCode(integer $HttpCode) Set 
 * @method string getHttpCheckDomain() Obtain 
 * @method void setHttpCheckDomain(string $HttpCheckDomain) Set 
 * @method string getHttpCheckPath() Obtain 
 * @method void setHttpCheckPath(string $HttpCheckPath) Set 
 * @method string getHttpCheckMethod() Obtain 
 * @method void setHttpCheckMethod(string $HttpCheckMethod) Set 
 * @method string getContextType() Obtain 
 * @method void setContextType(string $ContextType) Set 
 * @method string getSendContext() Obtain 
 * @method void setSendContext(string $SendContext) Set 
 * @method string getRecvContext() Obtain 
 * @method void setRecvContext(string $RecvContext) Set 
 * @method string getHttpVersion() Obtain 
 * @method void setHttpVersion(string $HttpVersion) Set 
 * @method string getExtendedCode() Obtain 
 * @method void setExtendedCode(string $ExtendedCode) Set 
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean 
     */
    public $HealthSwitch;

    /**
     * @var string 
     */
    public $Protocol;

    /**
     * @var integer 
     */
    public $Port;

    /**
     * @var integer 
     */
    public $Timeout;

    /**
     * @var integer 
     */
    public $GapTime;

    /**
     * @var integer 
     */
    public $GoodLimit;

    /**
     * @var integer 
     */
    public $BadLimit;

    /**
     * @var boolean 
     */
    public $JumboFrame;

    /**
     * @var integer 
     */
    public $HttpCode;

    /**
     * @var string 
     */
    public $HttpCheckDomain;

    /**
     * @var string 
     */
    public $HttpCheckPath;

    /**
     * @var string 
     */
    public $HttpCheckMethod;

    /**
     * @var string 
     */
    public $ContextType;

    /**
     * @var string 
     */
    public $SendContext;

    /**
     * @var string 
     */
    public $RecvContext;

    /**
     * @var string 
     */
    public $HttpVersion;

    /**
     * @var string 
     */
    public $ExtendedCode;

    /**
     * @param boolean $HealthSwitch 
     * @param string $Protocol 
     * @param integer $Port 
     * @param integer $Timeout 
     * @param integer $GapTime 
     * @param integer $GoodLimit 
     * @param integer $BadLimit 
     * @param boolean $JumboFrame 
     * @param integer $HttpCode 
     * @param string $HttpCheckDomain 
     * @param string $HttpCheckPath 
     * @param string $HttpCheckMethod 
     * @param string $ContextType 
     * @param string $SendContext 
     * @param string $RecvContext 
     * @param string $HttpVersion 
     * @param string $ExtendedCode 
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("GapTime",$param) and $param["GapTime"] !== null) {
            $this->GapTime = $param["GapTime"];
        }

        if (array_key_exists("GoodLimit",$param) and $param["GoodLimit"] !== null) {
            $this->GoodLimit = $param["GoodLimit"];
        }

        if (array_key_exists("BadLimit",$param) and $param["BadLimit"] !== null) {
            $this->BadLimit = $param["BadLimit"];
        }

        if (array_key_exists("JumboFrame",$param) and $param["JumboFrame"] !== null) {
            $this->JumboFrame = $param["JumboFrame"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
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

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("ExtendedCode",$param) and $param["ExtendedCode"] !== null) {
            $this->ExtendedCode = $param["ExtendedCode"];
        }
    }
}
