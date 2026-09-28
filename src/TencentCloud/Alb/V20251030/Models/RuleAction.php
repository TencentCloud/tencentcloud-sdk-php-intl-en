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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule action for forwarding
 *
 * @method integer getOrder() Obtain Forward action execution sequence. Must be unique and in ascending order. Value range: 1-50000.
 * @method void setOrder(integer $Order) Set Forward action execution sequence. Must be unique and in ascending order. Value range: 1-50000.
 * @method string getType() Obtain Forwarding action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to HTTP Header.
RemoveHeader: Delete HTTP Header.
The forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order must be placed last.
 * @method void setType(string $Type) Set Forwarding action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to HTTP Header.
RemoveHeader: Delete HTTP Header.
The forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order must be placed last.
 * @method FixedResponseInfo getFixedResponseConfig() Obtain Fixed response content configuration.
 * @method void setFixedResponseConfig(FixedResponseInfo $FixedResponseConfig) Set Fixed response content configuration.
 * @method InsertHTTPHeaderInfo getInsertHeaderConfig() Obtain Insert HTTP Header configuration.
 * @method void setInsertHeaderConfig(InsertHTTPHeaderInfo $InsertHeaderConfig) Set Insert HTTP Header configuration.
 * @method HTTPRedirectInfo getRedirectConfig() Obtain Redirection configuration. Except for HttpCode, other configuration cannot all use default values.
 * @method void setRedirectConfig(HTTPRedirectInfo $RedirectConfig) Set Redirection configuration. Except for HttpCode, other configuration cannot all use default values.
 * @method RemoveHTTPHeaderInfo getRemoveHeaderConfig() Obtain Delete HTTP Header configuration.
 * @method void setRemoveHeaderConfig(RemoveHTTPHeaderInfo $RemoveHeaderConfig) Set Delete HTTP Header configuration.
 * @method HTTPRewriteInfo getRewriteConfig() Obtain Rewrite the configuration.
 * @method void setRewriteConfig(HTTPRewriteInfo $RewriteConfig) Set Rewrite the configuration.
 * @method TargetGroupConfig getTargetGroupConfig() Obtain Forwarding target group configuration.
 * @method void setTargetGroupConfig(TargetGroupConfig $TargetGroupConfig) Set Forwarding target group configuration.
 */
class RuleAction extends AbstractModel
{
    /**
     * @var integer Forward action execution sequence. Must be unique and in ascending order. Value range: 1-50000.
     */
    public $Order;

    /**
     * @var string Forwarding action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to HTTP Header.
RemoveHeader: Delete HTTP Header.
The forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order must be placed last.
     */
    public $Type;

    /**
     * @var FixedResponseInfo Fixed response content configuration.
     */
    public $FixedResponseConfig;

    /**
     * @var InsertHTTPHeaderInfo Insert HTTP Header configuration.
     */
    public $InsertHeaderConfig;

    /**
     * @var HTTPRedirectInfo Redirection configuration. Except for HttpCode, other configuration cannot all use default values.
     */
    public $RedirectConfig;

    /**
     * @var RemoveHTTPHeaderInfo Delete HTTP Header configuration.
     */
    public $RemoveHeaderConfig;

    /**
     * @var HTTPRewriteInfo Rewrite the configuration.
     */
    public $RewriteConfig;

    /**
     * @var TargetGroupConfig Forwarding target group configuration.
     */
    public $TargetGroupConfig;

    /**
     * @param integer $Order Forward action execution sequence. Must be unique and in ascending order. Value range: 1-50000.
     * @param string $Type Forwarding action type. Valid values:
TargetGroup: Forward to a target group.
Redirect: Redirection.
FixedResponse: returns fixed content.
Rewrite: Rewrite.
InsertHeader: Write to HTTP Header.
RemoveHeader: Delete HTTP Header.
The forward action must include one of TargetGroup, Redirect, or FixedResponse, and the execution order must be placed last.
     * @param FixedResponseInfo $FixedResponseConfig Fixed response content configuration.
     * @param InsertHTTPHeaderInfo $InsertHeaderConfig Insert HTTP Header configuration.
     * @param HTTPRedirectInfo $RedirectConfig Redirection configuration. Except for HttpCode, other configuration cannot all use default values.
     * @param RemoveHTTPHeaderInfo $RemoveHeaderConfig Delete HTTP Header configuration.
     * @param HTTPRewriteInfo $RewriteConfig Rewrite the configuration.
     * @param TargetGroupConfig $TargetGroupConfig Forwarding target group configuration.
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
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FixedResponseConfig",$param) and $param["FixedResponseConfig"] !== null) {
            $this->FixedResponseConfig = new FixedResponseInfo();
            $this->FixedResponseConfig->deserialize($param["FixedResponseConfig"]);
        }

        if (array_key_exists("InsertHeaderConfig",$param) and $param["InsertHeaderConfig"] !== null) {
            $this->InsertHeaderConfig = new InsertHTTPHeaderInfo();
            $this->InsertHeaderConfig->deserialize($param["InsertHeaderConfig"]);
        }

        if (array_key_exists("RedirectConfig",$param) and $param["RedirectConfig"] !== null) {
            $this->RedirectConfig = new HTTPRedirectInfo();
            $this->RedirectConfig->deserialize($param["RedirectConfig"]);
        }

        if (array_key_exists("RemoveHeaderConfig",$param) and $param["RemoveHeaderConfig"] !== null) {
            $this->RemoveHeaderConfig = new RemoveHTTPHeaderInfo();
            $this->RemoveHeaderConfig->deserialize($param["RemoveHeaderConfig"]);
        }

        if (array_key_exists("RewriteConfig",$param) and $param["RewriteConfig"] !== null) {
            $this->RewriteConfig = new HTTPRewriteInfo();
            $this->RewriteConfig->deserialize($param["RewriteConfig"]);
        }

        if (array_key_exists("TargetGroupConfig",$param) and $param["TargetGroupConfig"] !== null) {
            $this->TargetGroupConfig = new TargetGroupConfig();
            $this->TargetGroupConfig->deserialize($param["TargetGroupConfig"]);
        }
    }
}
