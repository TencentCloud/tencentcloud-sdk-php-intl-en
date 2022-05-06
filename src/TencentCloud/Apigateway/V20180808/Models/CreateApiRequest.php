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
 * CreateApi request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of API.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of API.
 * @method string getServiceType() Obtain API backend service type. Valid values: HTTP, MOCK, TSF, SCF, WEBSOCKET, TARGET (in beta test).
 * @method void setServiceType(string $ServiceType) Set API backend service type. Valid values: HTTP, MOCK, TSF, SCF, WEBSOCKET, TARGET (in beta test).
 * @method integer getServiceTimeout() Obtain API backend service timeout period in seconds.
 * @method void setServiceTimeout(integer $ServiceTimeout) Set API backend service timeout period in seconds.
 * @method string getProtocol() Obtain API frontend request protocol. Valid values: HTTPS, WEBSOCKET.
 * @method void setProtocol(string $Protocol) Set API frontend request protocol. Valid values: HTTPS, WEBSOCKET.
 * @method ApiRequestConfig getRequestConfig() Obtain Request frontend configuration.
 * @method void setRequestConfig(ApiRequestConfig $RequestConfig) Set Request frontend configuration.
 * @method string getApiName() Obtain Custom API name.
 * @method void setApiName(string $ApiName) Set Custom API name.
 * @method string getApiDesc() Obtain Custom API description.
 * @method void setApiDesc(string $ApiDesc) Set Custom API description.
 * @method string getApiType() Obtain API type. Valid values: NORMAL (general API), TSF (microservice API). Default value: NORMAL.
 * @method void setApiType(string $ApiType) Set API type. Valid values: NORMAL (general API), TSF (microservice API). Default value: NORMAL.
 * @method string getAuthType() Obtain API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH, APP (application authentication). Default value: NONE.
 * @method void setAuthType(string $AuthType) Set API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH, APP (application authentication). Default value: NONE.
 * @method boolean getEnableCORS() Obtain Whether to enable CORS.
 * @method void setEnableCORS(boolean $EnableCORS) Set Whether to enable CORS.
 * @method array getConstantParameters() Obtain Constant parameter.
 * @method void setConstantParameters(array $ConstantParameters) Set Constant parameter.
 * @method array getRequestParameters() Obtain Frontend request parameter.
 * @method void setRequestParameters(array $RequestParameters) Set Frontend request parameter.
 * @method string getApiBusinessType() Obtain This field is valid if `AuthType` is `OAUTH`. NORMAL: business API; OAUTH: authorization API.
 * @method void setApiBusinessType(string $ApiBusinessType) Set This field is valid if `AuthType` is `OAUTH`. NORMAL: business API; OAUTH: authorization API.
 * @method string getServiceMockReturnMessage() Obtain Returned message of API backend Mock, which is required if `ServiceType` is `Mock`.
 * @method void setServiceMockReturnMessage(string $ServiceMockReturnMessage) Set Returned message of API backend Mock, which is required if `ServiceType` is `Mock`.
 * @method array getMicroServices() Obtain List of microservices bound to API.
 * @method void setMicroServices(array $MicroServices) Set List of microservices bound to API.
 * @method TsfLoadBalanceConfResp getServiceTsfLoadBalanceConf() Obtain Load balancing configuration of microservice.
 * @method void setServiceTsfLoadBalanceConf(TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf) Set Load balancing configuration of microservice.
 * @method HealthCheckConf getServiceTsfHealthCheckConf() Obtain Health check configuration of microservice.
 * @method void setServiceTsfHealthCheckConf(HealthCheckConf $ServiceTsfHealthCheckConf) Set Health check configuration of microservice.
 * @method array getTargetServices() Obtain `target` type backend resource information (in beta test).
 * @method void setTargetServices(array $TargetServices) Set `target` type backend resource information (in beta test).
 * @method integer getTargetServicesLoadBalanceConf() Obtain `target` type load balancing configuration (in beta test).
 * @method void setTargetServicesLoadBalanceConf(integer $TargetServicesLoadBalanceConf) Set `target` type load balancing configuration (in beta test).
 * @method HealthCheckConf getTargetServicesHealthCheckConf() Obtain `target` health check configuration (in beta test).
 * @method void setTargetServicesHealthCheckConf(HealthCheckConf $TargetServicesHealthCheckConf) Set `target` health check configuration (in beta test).
 * @method string getServiceScfFunctionName() Obtain SCF function name, which takes effect if the backend type is `SCF`.
 * @method void setServiceScfFunctionName(string $ServiceScfFunctionName) Set SCF function name, which takes effect if the backend type is `SCF`.
 * @method string getServiceWebsocketRegisterFunctionName() Obtain SCF WebSocket registration function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketRegisterFunctionName(string $ServiceWebsocketRegisterFunctionName) Set SCF WebSocket registration function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketCleanupFunctionName() Obtain SCF WebSocket cleanup function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketCleanupFunctionName(string $ServiceWebsocketCleanupFunctionName) Set SCF WebSocket cleanup function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketTransportFunctionName() Obtain SCF WebSocket transfer function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketTransportFunctionName(string $ServiceWebsocketTransportFunctionName) Set SCF WebSocket transfer function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceScfFunctionNamespace() Obtain SCF function namespace, which takes effect if the backend type is `SCF`.
 * @method void setServiceScfFunctionNamespace(string $ServiceScfFunctionNamespace) Set SCF function namespace, which takes effect if the backend type is `SCF`.
 * @method string getServiceScfFunctionQualifier() Obtain SCF function version, which takes effect if the backend type is `SCF`.
 * @method void setServiceScfFunctionQualifier(string $ServiceScfFunctionQualifier) Set SCF function version, which takes effect if the backend type is `SCF`.
 * @method string getServiceWebsocketRegisterFunctionNamespace() Obtain SCF WebSocket registration function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketRegisterFunctionNamespace(string $ServiceWebsocketRegisterFunctionNamespace) Set SCF WebSocket registration function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketRegisterFunctionQualifier() Obtain SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketRegisterFunctionQualifier(string $ServiceWebsocketRegisterFunctionQualifier) Set SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketTransportFunctionNamespace() Obtain SCF WebSocket transfer function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketTransportFunctionNamespace(string $ServiceWebsocketTransportFunctionNamespace) Set SCF WebSocket transfer function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketTransportFunctionQualifier() Obtain SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketTransportFunctionQualifier(string $ServiceWebsocketTransportFunctionQualifier) Set SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketCleanupFunctionNamespace() Obtain SCF WebSocket cleanup function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketCleanupFunctionNamespace(string $ServiceWebsocketCleanupFunctionNamespace) Set SCF WebSocket cleanup function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method string getServiceWebsocketCleanupFunctionQualifier() Obtain SCF WebSocket cleanup function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method void setServiceWebsocketCleanupFunctionQualifier(string $ServiceWebsocketCleanupFunctionQualifier) Set SCF WebSocket cleanup function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
 * @method boolean getServiceScfIsIntegratedResponse() Obtain Whether to enable response integration, which takes effect if the backend type is `SCF`.
 * @method void setServiceScfIsIntegratedResponse(boolean $ServiceScfIsIntegratedResponse) Set Whether to enable response integration, which takes effect if the backend type is `SCF`.
 * @method boolean getIsDebugAfterCharge() Obtain Billing after debugging starts (reserved field for marketplace).
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) Set Billing after debugging starts (reserved field for marketplace).
 * @method boolean getIsDeleteResponseErrorCodes() Obtain Whether to delete the error codes for custom response configuration. If the value is left empty or `False`, the error codes will not be deleted. If the value is `True`, all custom response configuration error codes of the API will be deleted.
 * @method void setIsDeleteResponseErrorCodes(boolean $IsDeleteResponseErrorCodes) Set Whether to delete the error codes for custom response configuration. If the value is left empty or `False`, the error codes will not be deleted. If the value is `True`, all custom response configuration error codes of the API will be deleted.
 * @method string getResponseType() Obtain Return type.
 * @method void setResponseType(string $ResponseType) Set Return type.
 * @method string getResponseSuccessExample() Obtain Sample response for successful custom response configuration.
 * @method void setResponseSuccessExample(string $ResponseSuccessExample) Set Sample response for successful custom response configuration.
 * @method string getResponseFailExample() Obtain Sample response for failed custom response configuration.
 * @method void setResponseFailExample(string $ResponseFailExample) Set Sample response for failed custom response configuration.
 * @method ServiceConfig getServiceConfig() Obtain API backend service configuration.
 * @method void setServiceConfig(ServiceConfig $ServiceConfig) Set API backend service configuration.
 * @method string getAuthRelationApiId() Obtain Unique ID of associated authorization API, which takes effect only if `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the business API.
 * @method void setAuthRelationApiId(string $AuthRelationApiId) Set Unique ID of associated authorization API, which takes effect only if `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the business API.
 * @method array getServiceParameters() Obtain API backend service parameter.
 * @method void setServiceParameters(array $ServiceParameters) Set API backend service parameter.
 * @method OauthConfig getOauthConfig() Obtain OAuth configuration, which takes effect if `AuthType` is `OAUTH`.
 * @method void setOauthConfig(OauthConfig $OauthConfig) Set OAuth configuration, which takes effect if `AuthType` is `OAUTH`.
 * @method array getResponseErrorCodes() Obtain Custom error code configuration.
 * @method void setResponseErrorCodes(array $ResponseErrorCodes) Set Custom error code configuration.
 * @method string getTargetNamespaceId() Obtain TSF Serverless namespace ID (in beta test).
 * @method void setTargetNamespaceId(string $TargetNamespaceId) Set TSF Serverless namespace ID (in beta test).
 * @method string getUserType() Obtain User type.
 * @method void setUserType(string $UserType) Set User type.
 * @method boolean getIsBase64Encoded() Obtain Whether to enable Base64 encoding. This parameter takes effect only when the backend is SCF.
 * @method void setIsBase64Encoded(boolean $IsBase64Encoded) Set Whether to enable Base64 encoding. This parameter takes effect only when the backend is SCF.
 * @method string getEventBusId() Obtain Event bus ID.
 * @method void setEventBusId(string $EventBusId) Set Event bus ID.
 * @method string getServiceScfFunctionType() Obtain SCF function type, which takes effect if the backend type is `SCF`. Valid values: `EVENT` and `HTTP`.
 * @method void setServiceScfFunctionType(string $ServiceScfFunctionType) Set SCF function type, which takes effect if the backend type is `SCF`. Valid values: `EVENT` and `HTTP`.
 * @method string getEIAMAppType() Obtain EIAM application type.
 * @method void setEIAMAppType(string $EIAMAppType) Set EIAM application type.
 * @method string getEIAMAuthType() Obtain EIAM application authentication type. Valid values: `AuthenticationOnly`, `Authentication`, `Authorization`.
 * @method void setEIAMAuthType(string $EIAMAuthType) Set EIAM application authentication type. Valid values: `AuthenticationOnly`, `Authentication`, `Authorization`.
 * @method integer getTokenTimeout() Obtain Validity of the EIAM application token. Unit: second. Default value: `7200`.
 * @method void setTokenTimeout(integer $TokenTimeout) Set Validity of the EIAM application token. Unit: second. Default value: `7200`.
 * @method string getEIAMAppId() Obtain EIAM application ID.
 * @method void setEIAMAppId(string $EIAMAppId) Set EIAM application ID.
 * @method string getOwner() Obtain Owner of the resource
 * @method void setOwner(string $Owner) Set Owner of the resource
 */
class CreateApiRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of API.
     */
    public $ServiceId;

    /**
     * @var string API backend service type. Valid values: HTTP, MOCK, TSF, SCF, WEBSOCKET, TARGET (in beta test).
     */
    public $ServiceType;

    /**
     * @var integer API backend service timeout period in seconds.
     */
    public $ServiceTimeout;

    /**
     * @var string API frontend request protocol. Valid values: HTTPS, WEBSOCKET.
     */
    public $Protocol;

    /**
     * @var ApiRequestConfig Request frontend configuration.
     */
    public $RequestConfig;

    /**
     * @var string Custom API name.
     */
    public $ApiName;

    /**
     * @var string Custom API description.
     */
    public $ApiDesc;

    /**
     * @var string API type. Valid values: NORMAL (general API), TSF (microservice API). Default value: NORMAL.
     */
    public $ApiType;

    /**
     * @var string API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH, APP (application authentication). Default value: NONE.
     */
    public $AuthType;

    /**
     * @var boolean Whether to enable CORS.
     */
    public $EnableCORS;

    /**
     * @var array Constant parameter.
     */
    public $ConstantParameters;

    /**
     * @var array Frontend request parameter.
     */
    public $RequestParameters;

    /**
     * @var string This field is valid if `AuthType` is `OAUTH`. NORMAL: business API; OAUTH: authorization API.
     */
    public $ApiBusinessType;

    /**
     * @var string Returned message of API backend Mock, which is required if `ServiceType` is `Mock`.
     */
    public $ServiceMockReturnMessage;

    /**
     * @var array List of microservices bound to API.
     */
    public $MicroServices;

    /**
     * @var TsfLoadBalanceConfResp Load balancing configuration of microservice.
     */
    public $ServiceTsfLoadBalanceConf;

    /**
     * @var HealthCheckConf Health check configuration of microservice.
     */
    public $ServiceTsfHealthCheckConf;

    /**
     * @var array `target` type backend resource information (in beta test).
     */
    public $TargetServices;

    /**
     * @var integer `target` type load balancing configuration (in beta test).
     */
    public $TargetServicesLoadBalanceConf;

    /**
     * @var HealthCheckConf `target` health check configuration (in beta test).
     */
    public $TargetServicesHealthCheckConf;

    /**
     * @var string SCF function name, which takes effect if the backend type is `SCF`.
     */
    public $ServiceScfFunctionName;

    /**
     * @var string SCF WebSocket registration function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketRegisterFunctionName;

    /**
     * @var string SCF WebSocket cleanup function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketCleanupFunctionName;

    /**
     * @var string SCF WebSocket transfer function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketTransportFunctionName;

    /**
     * @var string SCF function namespace, which takes effect if the backend type is `SCF`.
     */
    public $ServiceScfFunctionNamespace;

    /**
     * @var string SCF function version, which takes effect if the backend type is `SCF`.
     */
    public $ServiceScfFunctionQualifier;

    /**
     * @var string SCF WebSocket registration function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketRegisterFunctionNamespace;

    /**
     * @var string SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketRegisterFunctionQualifier;

    /**
     * @var string SCF WebSocket transfer function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketTransportFunctionNamespace;

    /**
     * @var string SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketTransportFunctionQualifier;

    /**
     * @var string SCF WebSocket cleanup function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketCleanupFunctionNamespace;

    /**
     * @var string SCF WebSocket cleanup function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     */
    public $ServiceWebsocketCleanupFunctionQualifier;

    /**
     * @var boolean Whether to enable response integration, which takes effect if the backend type is `SCF`.
     */
    public $ServiceScfIsIntegratedResponse;

    /**
     * @var boolean Billing after debugging starts (reserved field for marketplace).
     */
    public $IsDebugAfterCharge;

    /**
     * @var boolean Whether to delete the error codes for custom response configuration. If the value is left empty or `False`, the error codes will not be deleted. If the value is `True`, all custom response configuration error codes of the API will be deleted.
     */
    public $IsDeleteResponseErrorCodes;

    /**
     * @var string Return type.
     */
    public $ResponseType;

    /**
     * @var string Sample response for successful custom response configuration.
     */
    public $ResponseSuccessExample;

    /**
     * @var string Sample response for failed custom response configuration.
     */
    public $ResponseFailExample;

    /**
     * @var ServiceConfig API backend service configuration.
     */
    public $ServiceConfig;

    /**
     * @var string Unique ID of associated authorization API, which takes effect only if `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the business API.
     */
    public $AuthRelationApiId;

    /**
     * @var array API backend service parameter.
     */
    public $ServiceParameters;

    /**
     * @var OauthConfig OAuth configuration, which takes effect if `AuthType` is `OAUTH`.
     */
    public $OauthConfig;

    /**
     * @var array Custom error code configuration.
     */
    public $ResponseErrorCodes;

    /**
     * @var string TSF Serverless namespace ID (in beta test).
     */
    public $TargetNamespaceId;

    /**
     * @var string User type.
     */
    public $UserType;

    /**
     * @var boolean Whether to enable Base64 encoding. This parameter takes effect only when the backend is SCF.
     */
    public $IsBase64Encoded;

    /**
     * @var string Event bus ID.
     */
    public $EventBusId;

    /**
     * @var string SCF function type, which takes effect if the backend type is `SCF`. Valid values: `EVENT` and `HTTP`.
     */
    public $ServiceScfFunctionType;

    /**
     * @var string EIAM application type.
     */
    public $EIAMAppType;

    /**
     * @var string EIAM application authentication type. Valid values: `AuthenticationOnly`, `Authentication`, `Authorization`.
     */
    public $EIAMAuthType;

    /**
     * @var integer Validity of the EIAM application token. Unit: second. Default value: `7200`.
     */
    public $TokenTimeout;

    /**
     * @var string EIAM application ID.
     */
    public $EIAMAppId;

    /**
     * @var string Owner of the resource
     */
    public $Owner;

    /**
     * @param string $ServiceId Unique service ID of API.
     * @param string $ServiceType API backend service type. Valid values: HTTP, MOCK, TSF, SCF, WEBSOCKET, TARGET (in beta test).
     * @param integer $ServiceTimeout API backend service timeout period in seconds.
     * @param string $Protocol API frontend request protocol. Valid values: HTTPS, WEBSOCKET.
     * @param ApiRequestConfig $RequestConfig Request frontend configuration.
     * @param string $ApiName Custom API name.
     * @param string $ApiDesc Custom API description.
     * @param string $ApiType API type. Valid values: NORMAL (general API), TSF (microservice API). Default value: NORMAL.
     * @param string $AuthType API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH, APP (application authentication). Default value: NONE.
     * @param boolean $EnableCORS Whether to enable CORS.
     * @param array $ConstantParameters Constant parameter.
     * @param array $RequestParameters Frontend request parameter.
     * @param string $ApiBusinessType This field is valid if `AuthType` is `OAUTH`. NORMAL: business API; OAUTH: authorization API.
     * @param string $ServiceMockReturnMessage Returned message of API backend Mock, which is required if `ServiceType` is `Mock`.
     * @param array $MicroServices List of microservices bound to API.
     * @param TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf Load balancing configuration of microservice.
     * @param HealthCheckConf $ServiceTsfHealthCheckConf Health check configuration of microservice.
     * @param array $TargetServices `target` type backend resource information (in beta test).
     * @param integer $TargetServicesLoadBalanceConf `target` type load balancing configuration (in beta test).
     * @param HealthCheckConf $TargetServicesHealthCheckConf `target` health check configuration (in beta test).
     * @param string $ServiceScfFunctionName SCF function name, which takes effect if the backend type is `SCF`.
     * @param string $ServiceWebsocketRegisterFunctionName SCF WebSocket registration function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketCleanupFunctionName SCF WebSocket cleanup function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketTransportFunctionName SCF WebSocket transfer function, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceScfFunctionNamespace SCF function namespace, which takes effect if the backend type is `SCF`.
     * @param string $ServiceScfFunctionQualifier SCF function version, which takes effect if the backend type is `SCF`.
     * @param string $ServiceWebsocketRegisterFunctionNamespace SCF WebSocket registration function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketRegisterFunctionQualifier SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketTransportFunctionNamespace SCF WebSocket transfer function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketTransportFunctionQualifier SCF WebSocket transfer function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketCleanupFunctionNamespace SCF WebSocket cleanup function namespace, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param string $ServiceWebsocketCleanupFunctionQualifier SCF WebSocket cleanup function version, which takes effect if the frontend type is `WEBSOCKET` and the backend type is `SCF`.
     * @param boolean $ServiceScfIsIntegratedResponse Whether to enable response integration, which takes effect if the backend type is `SCF`.
     * @param boolean $IsDebugAfterCharge Billing after debugging starts (reserved field for marketplace).
     * @param boolean $IsDeleteResponseErrorCodes Whether to delete the error codes for custom response configuration. If the value is left empty or `False`, the error codes will not be deleted. If the value is `True`, all custom response configuration error codes of the API will be deleted.
     * @param string $ResponseType Return type.
     * @param string $ResponseSuccessExample Sample response for successful custom response configuration.
     * @param string $ResponseFailExample Sample response for failed custom response configuration.
     * @param ServiceConfig $ServiceConfig API backend service configuration.
     * @param string $AuthRelationApiId Unique ID of associated authorization API, which takes effect only if `AuthType` is `OAUTH` and `ApiBusinessType` is `NORMAL`. It is the unique ID of the OAuth 2.0 authorization API bound to the business API.
     * @param array $ServiceParameters API backend service parameter.
     * @param OauthConfig $OauthConfig OAuth configuration, which takes effect if `AuthType` is `OAUTH`.
     * @param array $ResponseErrorCodes Custom error code configuration.
     * @param string $TargetNamespaceId TSF Serverless namespace ID (in beta test).
     * @param string $UserType User type.
     * @param boolean $IsBase64Encoded Whether to enable Base64 encoding. This parameter takes effect only when the backend is SCF.
     * @param string $EventBusId Event bus ID.
     * @param string $ServiceScfFunctionType SCF function type, which takes effect if the backend type is `SCF`. Valid values: `EVENT` and `HTTP`.
     * @param string $EIAMAppType EIAM application type.
     * @param string $EIAMAuthType EIAM application authentication type. Valid values: `AuthenticationOnly`, `Authentication`, `Authorization`.
     * @param integer $TokenTimeout Validity of the EIAM application token. Unit: second. Default value: `7200`.
     * @param string $EIAMAppId EIAM application ID.
     * @param string $Owner Owner of the resource
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTimeout",$param) and $param["ServiceTimeout"] !== null) {
            $this->ServiceTimeout = $param["ServiceTimeout"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RequestConfig",$param) and $param["RequestConfig"] !== null) {
            $this->RequestConfig = new ApiRequestConfig();
            $this->RequestConfig->deserialize($param["RequestConfig"]);
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("EnableCORS",$param) and $param["EnableCORS"] !== null) {
            $this->EnableCORS = $param["EnableCORS"];
        }

        if (array_key_exists("ConstantParameters",$param) and $param["ConstantParameters"] !== null) {
            $this->ConstantParameters = [];
            foreach ($param["ConstantParameters"] as $key => $value){
                $obj = new ConstantParameter();
                $obj->deserialize($value);
                array_push($this->ConstantParameters, $obj);
            }
        }

        if (array_key_exists("RequestParameters",$param) and $param["RequestParameters"] !== null) {
            $this->RequestParameters = [];
            foreach ($param["RequestParameters"] as $key => $value){
                $obj = new RequestParameter();
                $obj->deserialize($value);
                array_push($this->RequestParameters, $obj);
            }
        }

        if (array_key_exists("ApiBusinessType",$param) and $param["ApiBusinessType"] !== null) {
            $this->ApiBusinessType = $param["ApiBusinessType"];
        }

        if (array_key_exists("ServiceMockReturnMessage",$param) and $param["ServiceMockReturnMessage"] !== null) {
            $this->ServiceMockReturnMessage = $param["ServiceMockReturnMessage"];
        }

        if (array_key_exists("MicroServices",$param) and $param["MicroServices"] !== null) {
            $this->MicroServices = [];
            foreach ($param["MicroServices"] as $key => $value){
                $obj = new MicroServiceReq();
                $obj->deserialize($value);
                array_push($this->MicroServices, $obj);
            }
        }

        if (array_key_exists("ServiceTsfLoadBalanceConf",$param) and $param["ServiceTsfLoadBalanceConf"] !== null) {
            $this->ServiceTsfLoadBalanceConf = new TsfLoadBalanceConfResp();
            $this->ServiceTsfLoadBalanceConf->deserialize($param["ServiceTsfLoadBalanceConf"]);
        }

        if (array_key_exists("ServiceTsfHealthCheckConf",$param) and $param["ServiceTsfHealthCheckConf"] !== null) {
            $this->ServiceTsfHealthCheckConf = new HealthCheckConf();
            $this->ServiceTsfHealthCheckConf->deserialize($param["ServiceTsfHealthCheckConf"]);
        }

        if (array_key_exists("TargetServices",$param) and $param["TargetServices"] !== null) {
            $this->TargetServices = [];
            foreach ($param["TargetServices"] as $key => $value){
                $obj = new TargetServicesReq();
                $obj->deserialize($value);
                array_push($this->TargetServices, $obj);
            }
        }

        if (array_key_exists("TargetServicesLoadBalanceConf",$param) and $param["TargetServicesLoadBalanceConf"] !== null) {
            $this->TargetServicesLoadBalanceConf = $param["TargetServicesLoadBalanceConf"];
        }

        if (array_key_exists("TargetServicesHealthCheckConf",$param) and $param["TargetServicesHealthCheckConf"] !== null) {
            $this->TargetServicesHealthCheckConf = new HealthCheckConf();
            $this->TargetServicesHealthCheckConf->deserialize($param["TargetServicesHealthCheckConf"]);
        }

        if (array_key_exists("ServiceScfFunctionName",$param) and $param["ServiceScfFunctionName"] !== null) {
            $this->ServiceScfFunctionName = $param["ServiceScfFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionName",$param) and $param["ServiceWebsocketRegisterFunctionName"] !== null) {
            $this->ServiceWebsocketRegisterFunctionName = $param["ServiceWebsocketRegisterFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionName",$param) and $param["ServiceWebsocketCleanupFunctionName"] !== null) {
            $this->ServiceWebsocketCleanupFunctionName = $param["ServiceWebsocketCleanupFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionName",$param) and $param["ServiceWebsocketTransportFunctionName"] !== null) {
            $this->ServiceWebsocketTransportFunctionName = $param["ServiceWebsocketTransportFunctionName"];
        }

        if (array_key_exists("ServiceScfFunctionNamespace",$param) and $param["ServiceScfFunctionNamespace"] !== null) {
            $this->ServiceScfFunctionNamespace = $param["ServiceScfFunctionNamespace"];
        }

        if (array_key_exists("ServiceScfFunctionQualifier",$param) and $param["ServiceScfFunctionQualifier"] !== null) {
            $this->ServiceScfFunctionQualifier = $param["ServiceScfFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionNamespace",$param) and $param["ServiceWebsocketRegisterFunctionNamespace"] !== null) {
            $this->ServiceWebsocketRegisterFunctionNamespace = $param["ServiceWebsocketRegisterFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionQualifier",$param) and $param["ServiceWebsocketRegisterFunctionQualifier"] !== null) {
            $this->ServiceWebsocketRegisterFunctionQualifier = $param["ServiceWebsocketRegisterFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionNamespace",$param) and $param["ServiceWebsocketTransportFunctionNamespace"] !== null) {
            $this->ServiceWebsocketTransportFunctionNamespace = $param["ServiceWebsocketTransportFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionQualifier",$param) and $param["ServiceWebsocketTransportFunctionQualifier"] !== null) {
            $this->ServiceWebsocketTransportFunctionQualifier = $param["ServiceWebsocketTransportFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionNamespace",$param) and $param["ServiceWebsocketCleanupFunctionNamespace"] !== null) {
            $this->ServiceWebsocketCleanupFunctionNamespace = $param["ServiceWebsocketCleanupFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionQualifier",$param) and $param["ServiceWebsocketCleanupFunctionQualifier"] !== null) {
            $this->ServiceWebsocketCleanupFunctionQualifier = $param["ServiceWebsocketCleanupFunctionQualifier"];
        }

        if (array_key_exists("ServiceScfIsIntegratedResponse",$param) and $param["ServiceScfIsIntegratedResponse"] !== null) {
            $this->ServiceScfIsIntegratedResponse = $param["ServiceScfIsIntegratedResponse"];
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
        }

        if (array_key_exists("IsDeleteResponseErrorCodes",$param) and $param["IsDeleteResponseErrorCodes"] !== null) {
            $this->IsDeleteResponseErrorCodes = $param["IsDeleteResponseErrorCodes"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("ResponseSuccessExample",$param) and $param["ResponseSuccessExample"] !== null) {
            $this->ResponseSuccessExample = $param["ResponseSuccessExample"];
        }

        if (array_key_exists("ResponseFailExample",$param) and $param["ResponseFailExample"] !== null) {
            $this->ResponseFailExample = $param["ResponseFailExample"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new ServiceConfig();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("AuthRelationApiId",$param) and $param["AuthRelationApiId"] !== null) {
            $this->AuthRelationApiId = $param["AuthRelationApiId"];
        }

        if (array_key_exists("ServiceParameters",$param) and $param["ServiceParameters"] !== null) {
            $this->ServiceParameters = [];
            foreach ($param["ServiceParameters"] as $key => $value){
                $obj = new ServiceParameter();
                $obj->deserialize($value);
                array_push($this->ServiceParameters, $obj);
            }
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("ResponseErrorCodes",$param) and $param["ResponseErrorCodes"] !== null) {
            $this->ResponseErrorCodes = [];
            foreach ($param["ResponseErrorCodes"] as $key => $value){
                $obj = new ResponseErrorCodeReq();
                $obj->deserialize($value);
                array_push($this->ResponseErrorCodes, $obj);
            }
        }

        if (array_key_exists("TargetNamespaceId",$param) and $param["TargetNamespaceId"] !== null) {
            $this->TargetNamespaceId = $param["TargetNamespaceId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IsBase64Encoded",$param) and $param["IsBase64Encoded"] !== null) {
            $this->IsBase64Encoded = $param["IsBase64Encoded"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("ServiceScfFunctionType",$param) and $param["ServiceScfFunctionType"] !== null) {
            $this->ServiceScfFunctionType = $param["ServiceScfFunctionType"];
        }

        if (array_key_exists("EIAMAppType",$param) and $param["EIAMAppType"] !== null) {
            $this->EIAMAppType = $param["EIAMAppType"];
        }

        if (array_key_exists("EIAMAuthType",$param) and $param["EIAMAuthType"] !== null) {
            $this->EIAMAuthType = $param["EIAMAuthType"];
        }

        if (array_key_exists("TokenTimeout",$param) and $param["TokenTimeout"] !== null) {
            $this->TokenTimeout = $param["TokenTimeout"];
        }

        if (array_key_exists("EIAMAppId",$param) and $param["EIAMAppId"] !== null) {
            $this->EIAMAppId = $param["EIAMAppId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
