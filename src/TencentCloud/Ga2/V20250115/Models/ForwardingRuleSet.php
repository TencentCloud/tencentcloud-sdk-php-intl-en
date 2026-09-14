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
 * Layer-7 forwarding rule information
 *
 * @method array getRuleCondition() Obtain <p>Conditional information of Layer 7 forwarding rules.</p>
 * @method void setRuleCondition(array $RuleCondition) Set <p>Conditional information of Layer 7 forwarding rules.</p>
 * @method array getRuleAction() Obtain <p>Behavior information of the Layer 7 forwarding rule.</p>
 * @method void setRuleAction(array $RuleAction) Set <p>Behavior information of the Layer 7 forwarding rule.</p>
 * @method boolean getEnableOriginSni() Obtain <p>Whether to enable origin-pull Sni.</p>
 * @method void setEnableOriginSni(boolean $EnableOriginSni) Set <p>Whether to enable origin-pull Sni.</p>
 * @method string getOriginSni() Obtain <p>Origin-pull Sni.</p>
 * @method void setOriginSni(string $OriginSni) Set <p>Origin-pull Sni.</p>
 * @method array getOriginHeaders() Obtain <p>Origin-pull Header information.</p>
 * @method void setOriginHeaders(array $OriginHeaders) Set <p>Origin-pull Header information.</p>
 * @method string getOriginHost() Obtain <p>Origin-pull Host.</p>
 * @method void setOriginHost(string $OriginHost) Set <p>Origin-pull Host.</p>
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID.</p>
 * @method string getForwardingPolicyId() Obtain <p>Layer-7 forwarding policy ID.</p>
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) Set <p>Layer-7 forwarding policy ID.</p>
 * @method string getForwardingRuleId() Obtain <p>Layer 7 forwarding rule ID.</p>
 * @method void setForwardingRuleId(string $ForwardingRuleId) Set <p>Layer 7 forwarding rule ID.</p>
 * @method array getHideResponseHeaders() Obtain <p>Origin server response header</p>
 * @method void setHideResponseHeaders(array $HideResponseHeaders) Set <p>Origin server response header</p>
 * @method array getResponseHeaders() Obtain <p>Delete origin server response headers</p>
 * @method void setResponseHeaders(array $ResponseHeaders) Set <p>Delete origin server response headers</p>
 */
class ForwardingRuleSet extends AbstractModel
{
    /**
     * @var array <p>Conditional information of Layer 7 forwarding rules.</p>
     */
    public $RuleCondition;

    /**
     * @var array <p>Behavior information of the Layer 7 forwarding rule.</p>
     */
    public $RuleAction;

    /**
     * @var boolean <p>Whether to enable origin-pull Sni.</p>
     */
    public $EnableOriginSni;

    /**
     * @var string <p>Origin-pull Sni.</p>
     */
    public $OriginSni;

    /**
     * @var array <p>Origin-pull Header information.</p>
     */
    public $OriginHeaders;

    /**
     * @var string <p>Origin-pull Host.</p>
     */
    public $OriginHost;

    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Layer-7 forwarding policy ID.</p>
     */
    public $ForwardingPolicyId;

    /**
     * @var string <p>Layer 7 forwarding rule ID.</p>
     */
    public $ForwardingRuleId;

    /**
     * @var array <p>Origin server response header</p>
     */
    public $HideResponseHeaders;

    /**
     * @var array <p>Delete origin server response headers</p>
     */
    public $ResponseHeaders;

    /**
     * @param array $RuleCondition <p>Conditional information of Layer 7 forwarding rules.</p>
     * @param array $RuleAction <p>Behavior information of the Layer 7 forwarding rule.</p>
     * @param boolean $EnableOriginSni <p>Whether to enable origin-pull Sni.</p>
     * @param string $OriginSni <p>Origin-pull Sni.</p>
     * @param array $OriginHeaders <p>Origin-pull Header information.</p>
     * @param string $OriginHost <p>Origin-pull Host.</p>
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener ID.</p>
     * @param string $ForwardingPolicyId <p>Layer-7 forwarding policy ID.</p>
     * @param string $ForwardingRuleId <p>Layer 7 forwarding rule ID.</p>
     * @param array $HideResponseHeaders <p>Origin server response header</p>
     * @param array $ResponseHeaders <p>Delete origin server response headers</p>
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
        if (array_key_exists("RuleCondition",$param) and $param["RuleCondition"] !== null) {
            $this->RuleCondition = [];
            foreach ($param["RuleCondition"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->RuleCondition, $obj);
            }
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = [];
            foreach ($param["RuleAction"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->RuleAction, $obj);
            }
        }

        if (array_key_exists("EnableOriginSni",$param) and $param["EnableOriginSni"] !== null) {
            $this->EnableOriginSni = $param["EnableOriginSni"];
        }

        if (array_key_exists("OriginSni",$param) and $param["OriginSni"] !== null) {
            $this->OriginSni = $param["OriginSni"];
        }

        if (array_key_exists("OriginHeaders",$param) and $param["OriginHeaders"] !== null) {
            $this->OriginHeaders = [];
            foreach ($param["OriginHeaders"] as $key => $value){
                $obj = new OriginHeader();
                $obj->deserialize($value);
                array_push($this->OriginHeaders, $obj);
            }
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
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

        if (array_key_exists("ForwardingRuleId",$param) and $param["ForwardingRuleId"] !== null) {
            $this->ForwardingRuleId = $param["ForwardingRuleId"];
        }

        if (array_key_exists("HideResponseHeaders",$param) and $param["HideResponseHeaders"] !== null) {
            $this->HideResponseHeaders = [];
            foreach ($param["HideResponseHeaders"] as $key => $value){
                $obj = new HideResponseHeaders();
                $obj->deserialize($value);
                array_push($this->HideResponseHeaders, $obj);
            }
        }

        if (array_key_exists("ResponseHeaders",$param) and $param["ResponseHeaders"] !== null) {
            $this->ResponseHeaders = [];
            foreach ($param["ResponseHeaders"] as $key => $value){
                $obj = new ResponseHeaders();
                $obj->deserialize($value);
                array_push($this->ResponseHeaders, $obj);
            }
        }
    }
}
