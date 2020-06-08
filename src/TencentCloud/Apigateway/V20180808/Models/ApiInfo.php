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
 * API information
 *
 * @method string getServiceId() Obtain Unique ID of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Unique ID of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Name of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Name of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceDesc() Obtain Description of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDesc(string $ServiceDesc) Set Description of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiId() Obtain Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiId(string $ApiId) Set Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiDesc() Obtain API description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set API description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiName() Obtain API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiType() Obtain API type. Valid values: NORMAL (general API), TSF (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiType(string $ApiType) Set API type. Valid values: NORMAL (general API), TSF (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain API frontend request type, such as HTTP, HTTPS, or HTTP and HTTPS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set API frontend request type, such as HTTP, HTTPS, or HTTP and HTTPS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthType() Obtain API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthType(string $AuthType) Set API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiBusinessType() Obtain OAuth API type. Valid values: NORMAL (business API), OAUTH (authorization API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiBusinessType(string $ApiBusinessType) Set OAuth API type. Valid values: NORMAL (business API), OAUTH (authorization API).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthRelationApiId() Obtain Unique ID of the authorization API associated with OAuth business API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthRelationApiId(string $AuthRelationApiId) Set Unique ID of the authorization API associated with OAuth business API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method OauthConfig getOauthConfig() Obtain OAuth configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOauthConfig(OauthConfig $OauthConfig) Set OAuth configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDebugAfterCharge() Obtain Whether to enable debugging on purchase (reserved for the marketplace).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDebugAfterCharge(boolean $IsDebugAfterCharge) Set Whether to enable debugging on purchase (reserved for the marketplace).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method RequestConfig getRequestConfig() Obtain Request frontend configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRequestConfig(RequestConfig $RequestConfig) Set Request frontend configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResponseType() Obtain Return type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseType(string $ResponseType) Set Return type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResponseSuccessExample() Obtain Successful response sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseSuccessExample(string $ResponseSuccessExample) Set Successful response sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getResponseFailExample() Obtain Response failure sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseFailExample(string $ResponseFailExample) Set Response failure sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getResponseErrorCodes() Obtain Custom error code configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseErrorCodes(array $ResponseErrorCodes) Set Custom error code configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRequestParameters() Obtain Frontend request parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRequestParameters(array $RequestParameters) Set Frontend request parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getServiceTimeout() Obtain API backend service timeout period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceTimeout(integer $ServiceTimeout) Set API backend service timeout period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceType() Obtain API backend service type. Valid values: HTTP, MOCK, TSF, CLB, SCF, WEBSOCKET, TARGET (in beta test).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceType(string $ServiceType) Set API backend service type. Valid values: HTTP, MOCK, TSF, CLB, SCF, WEBSOCKET, TARGET (in beta test).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ServiceConfig getServiceConfig() Obtain API backend service configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceConfig(ServiceConfig $ServiceConfig) Set API backend service configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getServiceParameters() Obtain API backend service parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceParameters(array $ServiceParameters) Set API backend service parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getConstantParameters() Obtain Constant parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConstantParameters(array $ConstantParameters) Set Constant parameters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceMockReturnMessage() Obtain Returned information of API backend mocking. This parameter is required when `ServiceType` is `Mock`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceMockReturnMessage(string $ServiceMockReturnMessage) Set Returned information of API backend mocking. This parameter is required when `ServiceType` is `Mock`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceScfFunctionName() Obtain SCF function name. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceScfFunctionName(string $ServiceScfFunctionName) Set SCF function name. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceScfFunctionNamespace() Obtain SCF function namespace. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceScfFunctionNamespace(string $ServiceScfFunctionNamespace) Set SCF function namespace. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceScfFunctionQualifier() Obtain SCF function version. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceScfFunctionQualifier(string $ServiceScfFunctionQualifier) Set SCF function version. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getServiceScfIsIntegratedResponse() Obtain Whether to enable integrated response.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceScfIsIntegratedResponse(boolean $ServiceScfIsIntegratedResponse) Set Whether to enable integrated response.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketRegisterFunctionName() Obtain SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketRegisterFunctionName(string $ServiceWebsocketRegisterFunctionName) Set SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketRegisterFunctionNamespace() Obtain SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketRegisterFunctionNamespace(string $ServiceWebsocketRegisterFunctionNamespace) Set SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketRegisterFunctionQualifier() Obtain SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketRegisterFunctionQualifier(string $ServiceWebsocketRegisterFunctionQualifier) Set SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketCleanupFunctionName() Obtain SCF WebSocket cleanup function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketCleanupFunctionName(string $ServiceWebsocketCleanupFunctionName) Set SCF WebSocket cleanup function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketCleanupFunctionNamespace() Obtain SCF WebSocket cleanup function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketCleanupFunctionNamespace(string $ServiceWebsocketCleanupFunctionNamespace) Set SCF WebSocket cleanup function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketCleanupFunctionQualifier() Obtain SCF WebSocket cleanup function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketCleanupFunctionQualifier(string $ServiceWebsocketCleanupFunctionQualifier) Set SCF WebSocket cleanup function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInternalDomain() Obtain WebSocket pushback address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInternalDomain(string $InternalDomain) Set WebSocket pushback address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketTransportFunctionName() Obtain SCF WebSocket transfer function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketTransportFunctionName(string $ServiceWebsocketTransportFunctionName) Set SCF WebSocket transfer function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketTransportFunctionNamespace() Obtain SCF WebSocket transfer function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketTransportFunctionNamespace(string $ServiceWebsocketTransportFunctionNamespace) Set SCF WebSocket transfer function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceWebsocketTransportFunctionQualifier() Obtain SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceWebsocketTransportFunctionQualifier(string $ServiceWebsocketTransportFunctionQualifier) Set SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMicroServices() Obtain List of microservices bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMicroServices(array $MicroServices) Set List of microservices bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMicroServicesInfo() Obtain Microservice detailed information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMicroServicesInfo(array $MicroServicesInfo) Set Microservice detailed information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TsfLoadBalanceConfResp getServiceTsfLoadBalanceConf() Obtain Microservice load balancing configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceTsfLoadBalanceConf(TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf) Set Microservice load balancing configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method HealthCheckConf getServiceTsfHealthCheckConf() Obtain Microservice health check configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceTsfHealthCheckConf(HealthCheckConf $ServiceTsfHealthCheckConf) Set Microservice health check configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableCORS() Obtain Whether to enable CORS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnableCORS(boolean $EnableCORS) Set Whether to enable CORS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Information of tags bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Information of tags bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiInfo extends AbstractModel
{
    /**
     * @var string Unique ID of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string Name of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string Description of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDesc;

    /**
     * @var string Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiId;

    /**
     * @var string API description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string API name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @var string API type. Valid values: NORMAL (general API), TSF (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiType;

    /**
     * @var string API frontend request type, such as HTTP, HTTPS, or HTTP and HTTPS.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthType;

    /**
     * @var string OAuth API type. Valid values: NORMAL (business API), OAUTH (authorization API).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiBusinessType;

    /**
     * @var string Unique ID of the authorization API associated with OAuth business API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthRelationApiId;

    /**
     * @var OauthConfig OAuth configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OauthConfig;

    /**
     * @var boolean Whether to enable debugging on purchase (reserved for the marketplace).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDebugAfterCharge;

    /**
     * @var RequestConfig Request frontend configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RequestConfig;

    /**
     * @var string Return type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseType;

    /**
     * @var string Successful response sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseSuccessExample;

    /**
     * @var string Response failure sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseFailExample;

    /**
     * @var array Custom error code configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseErrorCodes;

    /**
     * @var array Frontend request parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RequestParameters;

    /**
     * @var integer API backend service timeout period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceTimeout;

    /**
     * @var string API backend service type. Valid values: HTTP, MOCK, TSF, CLB, SCF, WEBSOCKET, TARGET (in beta test).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceType;

    /**
     * @var ServiceConfig API backend service configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceConfig;

    /**
     * @var array API backend service parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceParameters;

    /**
     * @var array Constant parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConstantParameters;

    /**
     * @var string Returned information of API backend mocking. This parameter is required when `ServiceType` is `Mock`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceMockReturnMessage;

    /**
     * @var string SCF function name. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceScfFunctionName;

    /**
     * @var string SCF function namespace. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceScfFunctionNamespace;

    /**
     * @var string SCF function version. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceScfFunctionQualifier;

    /**
     * @var boolean Whether to enable integrated response.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceScfIsIntegratedResponse;

    /**
     * @var string SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketRegisterFunctionName;

    /**
     * @var string SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketRegisterFunctionNamespace;

    /**
     * @var string SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketRegisterFunctionQualifier;

    /**
     * @var string SCF WebSocket cleanup function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketCleanupFunctionName;

    /**
     * @var string SCF WebSocket cleanup function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketCleanupFunctionNamespace;

    /**
     * @var string SCF WebSocket cleanup function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketCleanupFunctionQualifier;

    /**
     * @var string WebSocket pushback address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InternalDomain;

    /**
     * @var string SCF WebSocket transfer function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketTransportFunctionName;

    /**
     * @var string SCF WebSocket transfer function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketTransportFunctionNamespace;

    /**
     * @var string SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceWebsocketTransportFunctionQualifier;

    /**
     * @var array List of microservices bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MicroServices;

    /**
     * @var array Microservice detailed information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MicroServicesInfo;

    /**
     * @var TsfLoadBalanceConfResp Microservice load balancing configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceTsfLoadBalanceConf;

    /**
     * @var HealthCheckConf Microservice health check configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceTsfHealthCheckConf;

    /**
     * @var boolean Whether to enable CORS.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnableCORS;

    /**
     * @var array Information of tags bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $ServiceId Unique ID of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Name of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceDesc Description of API's service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiId Unique API ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiDesc API description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiName API name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiType API type. Valid values: NORMAL (general API), TSF (microservice API).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol API frontend request type, such as HTTP, HTTPS, or HTTP and HTTPS.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthType API authentication type. Valid values: SECRET (key pair authentication), NONE (no authentication), OAUTH.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiBusinessType OAuth API type. Valid values: NORMAL (business API), OAUTH (authorization API).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthRelationApiId Unique ID of the authorization API associated with OAuth business API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param OauthConfig $OauthConfig OAuth configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDebugAfterCharge Whether to enable debugging on purchase (reserved for the marketplace).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param RequestConfig $RequestConfig Request frontend configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResponseType Return type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResponseSuccessExample Successful response sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ResponseFailExample Response failure sample of custom response configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ResponseErrorCodes Custom error code configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $RequestParameters Frontend request parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ServiceTimeout API backend service timeout period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceType API backend service type. Valid values: HTTP, MOCK, TSF, CLB, SCF, WEBSOCKET, TARGET (in beta test).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ServiceConfig $ServiceConfig API backend service configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ServiceParameters API backend service parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ConstantParameters Constant parameters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceMockReturnMessage Returned information of API backend mocking. This parameter is required when `ServiceType` is `Mock`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceScfFunctionName SCF function name. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceScfFunctionNamespace SCF function namespace. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceScfFunctionQualifier SCF function version. This parameter takes effect when the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $ServiceScfIsIntegratedResponse Whether to enable integrated response.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketRegisterFunctionName SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketRegisterFunctionNamespace SCF WebSocket registration function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketRegisterFunctionQualifier SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketCleanupFunctionName SCF WebSocket cleanup function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketCleanupFunctionNamespace SCF WebSocket cleanup function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketCleanupFunctionQualifier SCF WebSocket cleanup function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InternalDomain WebSocket pushback address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketTransportFunctionName SCF WebSocket transfer function. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketTransportFunctionNamespace SCF WebSocket transfer function namespace. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceWebsocketTransportFunctionQualifier SCF WebSocket transfer function version. This parameter takes effect when the frontend type is `WEBSOCKET` and the backend type is `SCF`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MicroServices List of microservices bound to API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MicroServicesInfo Microservice detailed information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TsfLoadBalanceConfResp $ServiceTsfLoadBalanceConf Microservice load balancing configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param HealthCheckConf $ServiceTsfHealthCheckConf Microservice health check configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableCORS Whether to enable CORS.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Information of tags bound to API.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiBusinessType",$param) and $param["ApiBusinessType"] !== null) {
            $this->ApiBusinessType = $param["ApiBusinessType"];
        }

        if (array_key_exists("AuthRelationApiId",$param) and $param["AuthRelationApiId"] !== null) {
            $this->AuthRelationApiId = $param["AuthRelationApiId"];
        }

        if (array_key_exists("OauthConfig",$param) and $param["OauthConfig"] !== null) {
            $this->OauthConfig = new OauthConfig();
            $this->OauthConfig->deserialize($param["OauthConfig"]);
        }

        if (array_key_exists("IsDebugAfterCharge",$param) and $param["IsDebugAfterCharge"] !== null) {
            $this->IsDebugAfterCharge = $param["IsDebugAfterCharge"];
        }

        if (array_key_exists("RequestConfig",$param) and $param["RequestConfig"] !== null) {
            $this->RequestConfig = new RequestConfig();
            $this->RequestConfig->deserialize($param["RequestConfig"]);
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

        if (array_key_exists("ResponseErrorCodes",$param) and $param["ResponseErrorCodes"] !== null) {
            $this->ResponseErrorCodes = [];
            foreach ($param["ResponseErrorCodes"] as $key => $value){
                $obj = new ErrorCodes();
                $obj->deserialize($value);
                array_push($this->ResponseErrorCodes, $obj);
            }
        }

        if (array_key_exists("RequestParameters",$param) and $param["RequestParameters"] !== null) {
            $this->RequestParameters = [];
            foreach ($param["RequestParameters"] as $key => $value){
                $obj = new ReqParameter();
                $obj->deserialize($value);
                array_push($this->RequestParameters, $obj);
            }
        }

        if (array_key_exists("ServiceTimeout",$param) and $param["ServiceTimeout"] !== null) {
            $this->ServiceTimeout = $param["ServiceTimeout"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new ServiceConfig();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("ServiceParameters",$param) and $param["ServiceParameters"] !== null) {
            $this->ServiceParameters = [];
            foreach ($param["ServiceParameters"] as $key => $value){
                $obj = new ServiceParameter();
                $obj->deserialize($value);
                array_push($this->ServiceParameters, $obj);
            }
        }

        if (array_key_exists("ConstantParameters",$param) and $param["ConstantParameters"] !== null) {
            $this->ConstantParameters = [];
            foreach ($param["ConstantParameters"] as $key => $value){
                $obj = new ConstantParameter();
                $obj->deserialize($value);
                array_push($this->ConstantParameters, $obj);
            }
        }

        if (array_key_exists("ServiceMockReturnMessage",$param) and $param["ServiceMockReturnMessage"] !== null) {
            $this->ServiceMockReturnMessage = $param["ServiceMockReturnMessage"];
        }

        if (array_key_exists("ServiceScfFunctionName",$param) and $param["ServiceScfFunctionName"] !== null) {
            $this->ServiceScfFunctionName = $param["ServiceScfFunctionName"];
        }

        if (array_key_exists("ServiceScfFunctionNamespace",$param) and $param["ServiceScfFunctionNamespace"] !== null) {
            $this->ServiceScfFunctionNamespace = $param["ServiceScfFunctionNamespace"];
        }

        if (array_key_exists("ServiceScfFunctionQualifier",$param) and $param["ServiceScfFunctionQualifier"] !== null) {
            $this->ServiceScfFunctionQualifier = $param["ServiceScfFunctionQualifier"];
        }

        if (array_key_exists("ServiceScfIsIntegratedResponse",$param) and $param["ServiceScfIsIntegratedResponse"] !== null) {
            $this->ServiceScfIsIntegratedResponse = $param["ServiceScfIsIntegratedResponse"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionName",$param) and $param["ServiceWebsocketRegisterFunctionName"] !== null) {
            $this->ServiceWebsocketRegisterFunctionName = $param["ServiceWebsocketRegisterFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionNamespace",$param) and $param["ServiceWebsocketRegisterFunctionNamespace"] !== null) {
            $this->ServiceWebsocketRegisterFunctionNamespace = $param["ServiceWebsocketRegisterFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketRegisterFunctionQualifier",$param) and $param["ServiceWebsocketRegisterFunctionQualifier"] !== null) {
            $this->ServiceWebsocketRegisterFunctionQualifier = $param["ServiceWebsocketRegisterFunctionQualifier"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionName",$param) and $param["ServiceWebsocketCleanupFunctionName"] !== null) {
            $this->ServiceWebsocketCleanupFunctionName = $param["ServiceWebsocketCleanupFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionNamespace",$param) and $param["ServiceWebsocketCleanupFunctionNamespace"] !== null) {
            $this->ServiceWebsocketCleanupFunctionNamespace = $param["ServiceWebsocketCleanupFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketCleanupFunctionQualifier",$param) and $param["ServiceWebsocketCleanupFunctionQualifier"] !== null) {
            $this->ServiceWebsocketCleanupFunctionQualifier = $param["ServiceWebsocketCleanupFunctionQualifier"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionName",$param) and $param["ServiceWebsocketTransportFunctionName"] !== null) {
            $this->ServiceWebsocketTransportFunctionName = $param["ServiceWebsocketTransportFunctionName"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionNamespace",$param) and $param["ServiceWebsocketTransportFunctionNamespace"] !== null) {
            $this->ServiceWebsocketTransportFunctionNamespace = $param["ServiceWebsocketTransportFunctionNamespace"];
        }

        if (array_key_exists("ServiceWebsocketTransportFunctionQualifier",$param) and $param["ServiceWebsocketTransportFunctionQualifier"] !== null) {
            $this->ServiceWebsocketTransportFunctionQualifier = $param["ServiceWebsocketTransportFunctionQualifier"];
        }

        if (array_key_exists("MicroServices",$param) and $param["MicroServices"] !== null) {
            $this->MicroServices = [];
            foreach ($param["MicroServices"] as $key => $value){
                $obj = new MicroService();
                $obj->deserialize($value);
                array_push($this->MicroServices, $obj);
            }
        }

        if (array_key_exists("MicroServicesInfo",$param) and $param["MicroServicesInfo"] !== null) {
            $this->MicroServicesInfo = $param["MicroServicesInfo"];
        }

        if (array_key_exists("ServiceTsfLoadBalanceConf",$param) and $param["ServiceTsfLoadBalanceConf"] !== null) {
            $this->ServiceTsfLoadBalanceConf = new TsfLoadBalanceConfResp();
            $this->ServiceTsfLoadBalanceConf->deserialize($param["ServiceTsfLoadBalanceConf"]);
        }

        if (array_key_exists("ServiceTsfHealthCheckConf",$param) and $param["ServiceTsfHealthCheckConf"] !== null) {
            $this->ServiceTsfHealthCheckConf = new HealthCheckConf();
            $this->ServiceTsfHealthCheckConf->deserialize($param["ServiceTsfHealthCheckConf"]);
        }

        if (array_key_exists("EnableCORS",$param) and $param["EnableCORS"] !== null) {
            $this->EnableCORS = $param["EnableCORS"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
