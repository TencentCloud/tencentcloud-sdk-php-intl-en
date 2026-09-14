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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateForwardingRule request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID.</p>
 * @method string getForwardingPolicyId() Obtain <p>Policy ID.</p>
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) Set <p>Policy ID.</p>
 * @method array getRuleConditions() Obtain <p>Layer 7 forwarding rule conditional information.</p><p>Array length cannot exceed 1.</p>
 * @method void setRuleConditions(array $RuleConditions) Set <p>Layer 7 forwarding rule conditional information.</p><p>Array length cannot exceed 1.</p>
 * @method array getRuleActions() Obtain <p>Layer 7 forwarding rule behavior information.</p><p>The length of the array cannot exceed 1.</p>
 * @method void setRuleActions(array $RuleActions) Set <p>Layer 7 forwarding rule behavior information.</p><p>The length of the array cannot exceed 1.</p>
 * @method array getOriginHeaders() Obtain <p>Origin-pull Header information.</p><p>The maximum length of the array cannot exceed 5. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method void setOriginHeaders(array $OriginHeaders) Set <p>Origin-pull Header information.</p><p>The maximum length of the array cannot exceed 5. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method boolean getEnableOriginSni() Obtain <p>Whether origin-pull sni is enabled.</p><p>Default value: False</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method void setEnableOriginSni(boolean $EnableOriginSni) Set <p>Whether origin-pull sni is enabled.</p><p>Default value: False</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method string getOriginSni() Obtain <p>Origin sni.</p><p>Input parameter limit: length cannot exceed 80.</p><p>This field is required when EnableOriginSni is True. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method void setOriginSni(string $OriginSni) Set <p>Origin sni.</p><p>Input parameter limit: length cannot exceed 80.</p><p>This field is required when EnableOriginSni is True. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method string getOriginHost() Obtain <p>Origin-pull host.</p><p>Input parameter limit: length not exceeding 80.</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method void setOriginHost(string $OriginHost) Set <p>Origin-pull host.</p><p>Input parameter limit: length not exceeding 80.</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
 * @method array getResponseHeaders() Obtain <p>Origin response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
 * @method void setResponseHeaders(array $ResponseHeaders) Set <p>Origin response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
 * @method array getHideResponseHeaders() Obtain <p>Delete origin server response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
 * @method void setHideResponseHeaders(array $HideResponseHeaders) Set <p>Delete origin server response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
 */
class CreateForwardingRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Policy ID.</p>
     */
    public $ForwardingPolicyId;

    /**
     * @var array <p>Layer 7 forwarding rule conditional information.</p><p>Array length cannot exceed 1.</p>
     */
    public $RuleConditions;

    /**
     * @var array <p>Layer 7 forwarding rule behavior information.</p><p>The length of the array cannot exceed 1.</p>
     */
    public $RuleActions;

    /**
     * @var array <p>Origin-pull Header information.</p><p>The maximum length of the array cannot exceed 5. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     */
    public $OriginHeaders;

    /**
     * @var boolean <p>Whether origin-pull sni is enabled.</p><p>Default value: False</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     */
    public $EnableOriginSni;

    /**
     * @var string <p>Origin sni.</p><p>Input parameter limit: length cannot exceed 80.</p><p>This field is required when EnableOriginSni is True. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     */
    public $OriginSni;

    /**
     * @var string <p>Origin-pull host.</p><p>Input parameter limit: length not exceeding 80.</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     */
    public $OriginHost;

    /**
     * @var array <p>Origin response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
     */
    public $ResponseHeaders;

    /**
     * @var array <p>Delete origin server response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
     */
    public $HideResponseHeaders;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener ID.</p>
     * @param string $ForwardingPolicyId <p>Policy ID.</p>
     * @param array $RuleConditions <p>Layer 7 forwarding rule conditional information.</p><p>Array length cannot exceed 1.</p>
     * @param array $RuleActions <p>Layer 7 forwarding rule behavior information.</p><p>The length of the array cannot exceed 1.</p>
     * @param array $OriginHeaders <p>Origin-pull Header information.</p><p>The maximum length of the array cannot exceed 5. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     * @param boolean $EnableOriginSni <p>Whether origin-pull sni is enabled.</p><p>Default value: False</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     * @param string $OriginSni <p>Origin sni.</p><p>Input parameter limit: length cannot exceed 80.</p><p>This field is required when EnableOriginSni is True. This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     * @param string $OriginHost <p>Origin-pull host.</p><p>Input parameter limit: length not exceeding 80.</p><p>This field is required when RuleActions.RuleActionType is ForwardGroup.</p>
     * @param array $ResponseHeaders <p>Origin response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
     * @param array $HideResponseHeaders <p>Delete origin server response headers</p><p>Array length not exceeding 5. An empty array can be passed, representing configuration clearing.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ForwardingPolicyId",$param) and $param["ForwardingPolicyId"] !== null) {
            $this->ForwardingPolicyId = $param["ForwardingPolicyId"];
        }

        if (array_key_exists("RuleConditions",$param) and $param["RuleConditions"] !== null) {
            $this->RuleConditions = [];
            foreach ($param["RuleConditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->RuleConditions, $obj);
            }
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = [];
            foreach ($param["RuleActions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->RuleActions, $obj);
            }
        }

        if (array_key_exists("OriginHeaders",$param) and $param["OriginHeaders"] !== null) {
            $this->OriginHeaders = [];
            foreach ($param["OriginHeaders"] as $key => $value){
                $obj = new OriginHeader();
                $obj->deserialize($value);
                array_push($this->OriginHeaders, $obj);
            }
        }

        if (array_key_exists("EnableOriginSni",$param) and $param["EnableOriginSni"] !== null) {
            $this->EnableOriginSni = $param["EnableOriginSni"];
        }

        if (array_key_exists("OriginSni",$param) and $param["OriginSni"] !== null) {
            $this->OriginSni = $param["OriginSni"];
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("ResponseHeaders",$param) and $param["ResponseHeaders"] !== null) {
            $this->ResponseHeaders = [];
            foreach ($param["ResponseHeaders"] as $key => $value){
                $obj = new ResponseHeaders();
                $obj->deserialize($value);
                array_push($this->ResponseHeaders, $obj);
            }
        }

        if (array_key_exists("HideResponseHeaders",$param) and $param["HideResponseHeaders"] !== null) {
            $this->HideResponseHeaders = [];
            foreach ($param["HideResponseHeaders"] as $key => $value){
                $obj = new HideResponseHeaders();
                $obj->deserialize($value);
                array_push($this->HideResponseHeaders, $obj);
            }
        }
    }
}
