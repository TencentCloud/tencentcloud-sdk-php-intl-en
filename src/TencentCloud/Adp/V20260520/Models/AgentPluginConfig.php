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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic plug-in configuration of the Agent
 *
 * @method string getPluginId() Obtain <p>plugin_id</p>
 * @method void setPluginId(string $PluginId) Set <p>plugin_id</p>
 * @method array getHeaderParameterList() Obtain <p>Plug-in Header parameter</p>
 * @method void setHeaderParameterList(array $HeaderParameterList) Set <p>Plug-in Header parameter</p>
 * @method array getQueryParameterList() Obtain <p>Plug-in Query parameter</p>
 * @method void setQueryParameterList(array $QueryParameterList) Set <p>Plug-in Query parameter</p>
 * @method boolean getEnableCamRoleAuth() Obtain <p>Whether to use CAM one-click authorization. This parameter is valid only when auth_type=2</p>
 * @method void setEnableCamRoleAuth(boolean $EnableCamRoleAuth) Set <p>Whether to use CAM one-click authorization. This parameter is valid only when auth_type=2</p>
 * @method integer getAuthType() Obtain <p>Authorization type</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key</li><li>2: CAM authorization</li><li>3: OAuth2.0 authorization</li></ul>
 * @method void setAuthType(integer $AuthType) Set <p>Authorization type</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key</li><li>2: CAM authorization</li><li>3: OAuth2.0 authorization</li></ul>
 * @method integer getOAuthConsent() Obtain <p>OAuth authorization and consent mode; 0 - developer authorization; 1 - user authorization (valid only when auth_type=3)</p>
 * @method void setOAuthConsent(integer $OAuthConsent) Set <p>OAuth authorization and consent mode; 0 - developer authorization; 1 - user authorization (valid only when auth_type=3)</p>
 * @method AgentPluginCredentialConfig getCredentialConfig() Obtain <p>Credential configuration</p>
 * @method void setCredentialConfig(AgentPluginCredentialConfig $CredentialConfig) Set <p>Credential configuration</p>
 */
class AgentPluginConfig extends AbstractModel
{
    /**
     * @var string <p>plugin_id</p>
     */
    public $PluginId;

    /**
     * @var array <p>Plug-in Header parameter</p>
     */
    public $HeaderParameterList;

    /**
     * @var array <p>Plug-in Query parameter</p>
     */
    public $QueryParameterList;

    /**
     * @var boolean <p>Whether to use CAM one-click authorization. This parameter is valid only when auth_type=2</p>
     */
    public $EnableCamRoleAuth;

    /**
     * @var integer <p>Authorization type</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key</li><li>2: CAM authorization</li><li>3: OAuth2.0 authorization</li></ul>
     */
    public $AuthType;

    /**
     * @var integer <p>OAuth authorization and consent mode; 0 - developer authorization; 1 - user authorization (valid only when auth_type=3)</p>
     */
    public $OAuthConsent;

    /**
     * @var AgentPluginCredentialConfig <p>Credential configuration</p>
     */
    public $CredentialConfig;

    /**
     * @param string $PluginId <p>plugin_id</p>
     * @param array $HeaderParameterList <p>Plug-in Header parameter</p>
     * @param array $QueryParameterList <p>Plug-in Query parameter</p>
     * @param boolean $EnableCamRoleAuth <p>Whether to use CAM one-click authorization. This parameter is valid only when auth_type=2</p>
     * @param integer $AuthType <p>Authorization type</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key</li><li>2: CAM authorization</li><li>3: OAuth2.0 authorization</li></ul>
     * @param integer $OAuthConsent <p>OAuth authorization and consent mode; 0 - developer authorization; 1 - user authorization (valid only when auth_type=3)</p>
     * @param AgentPluginCredentialConfig $CredentialConfig <p>Credential configuration</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("HeaderParameterList",$param) and $param["HeaderParameterList"] !== null) {
            $this->HeaderParameterList = [];
            foreach ($param["HeaderParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->HeaderParameterList, $obj);
            }
        }

        if (array_key_exists("QueryParameterList",$param) and $param["QueryParameterList"] !== null) {
            $this->QueryParameterList = [];
            foreach ($param["QueryParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->QueryParameterList, $obj);
            }
        }

        if (array_key_exists("EnableCamRoleAuth",$param) and $param["EnableCamRoleAuth"] !== null) {
            $this->EnableCamRoleAuth = $param["EnableCamRoleAuth"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("OAuthConsent",$param) and $param["OAuthConsent"] !== null) {
            $this->OAuthConsent = $param["OAuthConsent"];
        }

        if (array_key_exists("CredentialConfig",$param) and $param["CredentialConfig"] !== null) {
            $this->CredentialConfig = new AgentPluginCredentialConfig();
            $this->CredentialConfig->deserialize($param["CredentialConfig"]);
        }
    }
}
