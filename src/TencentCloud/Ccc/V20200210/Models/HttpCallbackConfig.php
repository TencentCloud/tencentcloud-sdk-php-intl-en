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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method array getHeaderParams() Obtain 
 * @method void setHeaderParams(array $HeaderParams) Set 
 * @method array getParams() Obtain 
 * @method void setParams(array $Params) Set 
 * @method array getReturns() Obtain 
 * @method void setReturns(array $Returns) Set 
 * @method boolean getAsync() Obtain 
 * @method void setAsync(boolean $Async) Set 
 * @method integer getAuthType() Obtain 
 * @method void setAuthType(integer $AuthType) Set 
 * @method BasicAuth getBasicAuth() Obtain 
 * @method void setBasicAuth(BasicAuth $BasicAuth) Set 
 * @method BearerAuth getBearerAuth() Obtain 
 * @method void setBearerAuth(BearerAuth $BearerAuth) Set 
 * @method HttpParams getCustomAuth() Obtain 
 * @method void setCustomAuth(HttpParams $CustomAuth) Set 
 * @method OauthConfig getOauth2Auth() Obtain 
 * @method void setOauth2Auth(OauthConfig $Oauth2Auth) Set 
 */
class HttpCallbackConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Url;

    /**
     * @var array 
     */
    public $HeaderParams;

    /**
     * @var array 
     */
    public $Params;

    /**
     * @var array 
     */
    public $Returns;

    /**
     * @var boolean 
     */
    public $Async;

    /**
     * @var integer 
     */
    public $AuthType;

    /**
     * @var BasicAuth 
     */
    public $BasicAuth;

    /**
     * @var BearerAuth 
     */
    public $BearerAuth;

    /**
     * @var HttpParams 
     */
    public $CustomAuth;

    /**
     * @var OauthConfig 
     */
    public $Oauth2Auth;

    /**
     * @param string $Url 
     * @param array $HeaderParams 
     * @param array $Params 
     * @param array $Returns 
     * @param boolean $Async 
     * @param integer $AuthType 
     * @param BasicAuth $BasicAuth 
     * @param BearerAuth $BearerAuth 
     * @param HttpParams $CustomAuth 
     * @param OauthConfig $Oauth2Auth 
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("HeaderParams",$param) and $param["HeaderParams"] !== null) {
            $this->HeaderParams = [];
            foreach ($param["HeaderParams"] as $key => $value){
                $obj = new HeaderParams();
                $obj->deserialize($value);
                array_push($this->HeaderParams, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new HttpParams();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("Returns",$param) and $param["Returns"] !== null) {
            $this->Returns = [];
            foreach ($param["Returns"] as $key => $value){
                $obj = new ReturnKey();
                $obj->deserialize($value);
                array_push($this->Returns, $obj);
            }
        }

        if (array_key_exists("Async",$param) and $param["Async"] !== null) {
            $this->Async = $param["Async"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = new BasicAuth();
            $this->BasicAuth->deserialize($param["BasicAuth"]);
        }

        if (array_key_exists("BearerAuth",$param) and $param["BearerAuth"] !== null) {
            $this->BearerAuth = new BearerAuth();
            $this->BearerAuth->deserialize($param["BearerAuth"]);
        }

        if (array_key_exists("CustomAuth",$param) and $param["CustomAuth"] !== null) {
            $this->CustomAuth = new HttpParams();
            $this->CustomAuth->deserialize($param["CustomAuth"]);
        }

        if (array_key_exists("Oauth2Auth",$param) and $param["Oauth2Auth"] !== null) {
            $this->Oauth2Auth = new OauthConfig();
            $this->Oauth2Auth->deserialize($param["Oauth2Auth"]);
        }
    }
}
