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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getRequestURI() Obtain 
 * @method void setRequestURI(string $RequestURI) Set 
 * @method string getVerb() Obtain 
 * @method void setVerb(string $Verb) Set 
 * @method string getRequestUser() Obtain 
 * @method void setRequestUser(string $RequestUser) Set 
 * @method string getUserAgent() Obtain 
 * @method void setUserAgent(string $UserAgent) Set 
 * @method string getSourceIPS() Obtain 
 * @method void setSourceIPS(string $SourceIPS) Set 
 * @method string getResponseStatusCode() Obtain 
 * @method void setResponseStatusCode(string $ResponseStatusCode) Set 
 * @method string getRequestObject() Obtain 
 * @method void setRequestObject(string $RequestObject) Set 
 * @method string getResponseObject() Obtain 
 * @method void setResponseObject(string $ResponseObject) Set 
 * @method string getMountHostDir() Obtain 
 * @method void setMountHostDir(string $MountHostDir) Set 
 * @method string getPodNameIP() Obtain 
 * @method void setPodNameIP(string $PodNameIP) Set 
 * @method string getAuditID() Obtain 
 * @method void setAuditID(string $AuditID) Set 
 */
class RuleContentK8sAPI extends AbstractModel
{
    /**
     * @var string 
     */
    public $RequestURI;

    /**
     * @var string 
     */
    public $Verb;

    /**
     * @var string 
     */
    public $RequestUser;

    /**
     * @var string 
     */
    public $UserAgent;

    /**
     * @var string 
     */
    public $SourceIPS;

    /**
     * @var string 
     */
    public $ResponseStatusCode;

    /**
     * @var string 
     */
    public $RequestObject;

    /**
     * @var string 
     */
    public $ResponseObject;

    /**
     * @var string 
     */
    public $MountHostDir;

    /**
     * @var string 
     */
    public $PodNameIP;

    /**
     * @var string 
     */
    public $AuditID;

    /**
     * @param string $RequestURI 
     * @param string $Verb 
     * @param string $RequestUser 
     * @param string $UserAgent 
     * @param string $SourceIPS 
     * @param string $ResponseStatusCode 
     * @param string $RequestObject 
     * @param string $ResponseObject 
     * @param string $MountHostDir 
     * @param string $PodNameIP 
     * @param string $AuditID 
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
        if (array_key_exists("RequestURI",$param) and $param["RequestURI"] !== null) {
            $this->RequestURI = $param["RequestURI"];
        }

        if (array_key_exists("Verb",$param) and $param["Verb"] !== null) {
            $this->Verb = $param["Verb"];
        }

        if (array_key_exists("RequestUser",$param) and $param["RequestUser"] !== null) {
            $this->RequestUser = $param["RequestUser"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("SourceIPS",$param) and $param["SourceIPS"] !== null) {
            $this->SourceIPS = $param["SourceIPS"];
        }

        if (array_key_exists("ResponseStatusCode",$param) and $param["ResponseStatusCode"] !== null) {
            $this->ResponseStatusCode = $param["ResponseStatusCode"];
        }

        if (array_key_exists("RequestObject",$param) and $param["RequestObject"] !== null) {
            $this->RequestObject = $param["RequestObject"];
        }

        if (array_key_exists("ResponseObject",$param) and $param["ResponseObject"] !== null) {
            $this->ResponseObject = $param["ResponseObject"];
        }

        if (array_key_exists("MountHostDir",$param) and $param["MountHostDir"] !== null) {
            $this->MountHostDir = $param["MountHostDir"];
        }

        if (array_key_exists("PodNameIP",$param) and $param["PodNameIP"] !== null) {
            $this->PodNameIP = $param["PodNameIP"];
        }

        if (array_key_exists("AuditID",$param) and $param["AuditID"] !== null) {
            $this->AuditID = $param["AuditID"];
        }
    }
}
