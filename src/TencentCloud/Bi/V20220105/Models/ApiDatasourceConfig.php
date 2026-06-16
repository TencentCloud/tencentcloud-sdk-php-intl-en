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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API data source connection configuration
 *
 * @method string getFieldsJsonData() Obtain API data source parsing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFieldsJsonData(string $FieldsJsonData) Set API data source parsing result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConnectionType() Obtain Connection Type 1: Direct Connection 2: Extraction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectionType(integer $ConnectionType) Set Connection Type 1: Direct Connection 2: Extraction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method FrequencyConfig getFrequencyConfig() Obtain Extraction frequency configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrequencyConfig(FrequencyConfig $FrequencyConfig) Set Extraction frequency configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Request URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Request URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRequestMethod() Obtain 1:GET 2:POST
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestMethod(integer $RequestMethod) Set 1:GET 2:POST
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestHeader() Obtain Request headers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestHeader(string $RequestHeader) Set Request headers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestParams() Obtain Request parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestParams(string $RequestParams) Set Request parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestBody() Obtain request body
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestBody(string $RequestBody) Set request body
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Password.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuthorizationType() Obtain Valid values: 1: no authentication; 2: BASIC_AUTH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizationType(integer $AuthorizationType) Set Valid values: 1: no authentication; 2: BASIC_AUTH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTableId() Obtain Table ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableId(integer $TableId) Set Table ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJsonPathDbNameMap() Obtain Mapping path DbName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonPathDbNameMap(string $JsonPathDbNameMap) Set Mapping path DbName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthApi() Obtain Authentication API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthApi(string $AuthApi) Set Authentication API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppKey() Obtain Application Key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppKey(string $AppKey) Set Application Key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppSecret() Obtain application key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppSecret(string $AppSecret) Set application key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain Data Key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set Data Key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretIv() Obtain Data key initialization vector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretIv(string $SecretIv) Set Data key initialization vector
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApiDatasourceConfig extends AbstractModel
{
    /**
     * @var string API data source parsing result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FieldsJsonData;

    /**
     * @var integer Connection Type 1: Direct Connection 2: Extraction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectionType;

    /**
     * @var FrequencyConfig Extraction frequency configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FrequencyConfig;

    /**
     * @var string Request URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var integer 1:GET 2:POST
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestMethod;

    /**
     * @var string Request headers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestHeader;

    /**
     * @var string Request parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestParams;

    /**
     * @var string request body
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestBody;

    /**
     * @var string Username.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Password.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var integer Valid values: 1: no authentication; 2: BASIC_AUTH.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizationType;

    /**
     * @var integer Table ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableId;

    /**
     * @var string Mapping path DbName
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonPathDbNameMap;

    /**
     * @var string Authentication API
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthApi;

    /**
     * @var string Application Key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppKey;

    /**
     * @var string application key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppSecret;

    /**
     * @var string Data Key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string Data key initialization vector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretIv;

    /**
     * @param string $FieldsJsonData API data source parsing result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConnectionType Connection Type 1: Direct Connection 2: Extraction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param FrequencyConfig $FrequencyConfig Extraction frequency configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Request URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RequestMethod 1:GET 2:POST
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestHeader Request headers
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestParams Request parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestBody request body
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password Password.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuthorizationType Valid values: 1: no authentication; 2: BASIC_AUTH.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TableId Table ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JsonPathDbNameMap Mapping path DbName
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthApi Authentication API
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppKey Application Key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppSecret application key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey Data Key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretIv Data key initialization vector
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FieldsJsonData",$param) and $param["FieldsJsonData"] !== null) {
            $this->FieldsJsonData = $param["FieldsJsonData"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("FrequencyConfig",$param) and $param["FrequencyConfig"] !== null) {
            $this->FrequencyConfig = new FrequencyConfig();
            $this->FrequencyConfig->deserialize($param["FrequencyConfig"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }

        if (array_key_exists("RequestParams",$param) and $param["RequestParams"] !== null) {
            $this->RequestParams = $param["RequestParams"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AuthorizationType",$param) and $param["AuthorizationType"] !== null) {
            $this->AuthorizationType = $param["AuthorizationType"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("JsonPathDbNameMap",$param) and $param["JsonPathDbNameMap"] !== null) {
            $this->JsonPathDbNameMap = $param["JsonPathDbNameMap"];
        }

        if (array_key_exists("AuthApi",$param) and $param["AuthApi"] !== null) {
            $this->AuthApi = $param["AuthApi"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppSecret",$param) and $param["AppSecret"] !== null) {
            $this->AppSecret = $param["AppSecret"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SecretIv",$param) and $param["SecretIv"] !== null) {
            $this->SecretIv = $param["SecretIv"];
        }
    }
}
