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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Action for security operation.
 *
 * @method string getName() Obtain <p>Specific actions for safe execution. Valid values:</p><ul><li>Deny: block, prevent requests from accessing site resources;</li><li>Monitor: observe, only record logs;</li><li>Redirect: redirect to URL;</li><li>Disabled: not enabled, do not enable the specified rule;</li><li>Allow: pass, skip the remaining rules of the current security module. Delay response when the AllowActionParameters parameter is configured;</li><li>Challenge: challenge, respond with challenge content;</li><li>BlockIP: to be deprecated, IP blocking;</li><li>ReturnCustomPage: to be deprecated, use a specified page for interception;</li><li>JSChallenge: to be deprecated, JavaScript challenge;</li><li>ManagedChallenge: to be deprecated, managed challenge.</li></ul>
 * @method void setName(string $Name) Set <p>Specific actions for safe execution. Valid values:</p><ul><li>Deny: block, prevent requests from accessing site resources;</li><li>Monitor: observe, only record logs;</li><li>Redirect: redirect to URL;</li><li>Disabled: not enabled, do not enable the specified rule;</li><li>Allow: pass, skip the remaining rules of the current security module. Delay response when the AllowActionParameters parameter is configured;</li><li>Challenge: challenge, respond with challenge content;</li><li>BlockIP: to be deprecated, IP blocking;</li><li>ReturnCustomPage: to be deprecated, use a specified page for interception;</li><li>JSChallenge: to be deprecated, JavaScript challenge;</li><li>ManagedChallenge: to be deprecated, managed challenge.</li></ul>
 * @method DenyActionParameters getDenyActionParameters() Obtain <p>Additional parameter when Name is Deny.</p>
 * @method void setDenyActionParameters(DenyActionParameters $DenyActionParameters) Set <p>Additional parameter when Name is Deny.</p>
 * @method RedirectActionParameters getRedirectActionParameters() Obtain <p>Additional parameter when Name is Redirect.</p>
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) Set <p>Additional parameter when Name is Redirect.</p>
 * @method AllowActionParameters getAllowActionParameters() Obtain <p>Additional parameter when Name is Allow.</p>
 * @method void setAllowActionParameters(AllowActionParameters $AllowActionParameters) Set <p>Additional parameter when Name is Allow.</p>
 * @method ChallengeActionParameters getChallengeActionParameters() Obtain <p>Additional parameter when Name is Challenge.</p>
 * @method void setChallengeActionParameters(ChallengeActionParameters $ChallengeActionParameters) Set <p>Additional parameter when Name is Challenge.</p>
 * @method BlockIPActionParameters getBlockIPActionParameters() Obtain <p>To be deprecated. Additional parameter when Name is BlockIP.</p>
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) Set <p>To be deprecated. Additional parameter when Name is BlockIP.</p>
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() Obtain <p>To be deprecated. An additional parameter when Name is ReturnCustomPage.</p>
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) Set <p>To be deprecated. An additional parameter when Name is ReturnCustomPage.</p>
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string <p>Specific actions for safe execution. Valid values:</p><ul><li>Deny: block, prevent requests from accessing site resources;</li><li>Monitor: observe, only record logs;</li><li>Redirect: redirect to URL;</li><li>Disabled: not enabled, do not enable the specified rule;</li><li>Allow: pass, skip the remaining rules of the current security module. Delay response when the AllowActionParameters parameter is configured;</li><li>Challenge: challenge, respond with challenge content;</li><li>BlockIP: to be deprecated, IP blocking;</li><li>ReturnCustomPage: to be deprecated, use a specified page for interception;</li><li>JSChallenge: to be deprecated, JavaScript challenge;</li><li>ManagedChallenge: to be deprecated, managed challenge.</li></ul>
     */
    public $Name;

    /**
     * @var DenyActionParameters <p>Additional parameter when Name is Deny.</p>
     */
    public $DenyActionParameters;

    /**
     * @var RedirectActionParameters <p>Additional parameter when Name is Redirect.</p>
     */
    public $RedirectActionParameters;

    /**
     * @var AllowActionParameters <p>Additional parameter when Name is Allow.</p>
     */
    public $AllowActionParameters;

    /**
     * @var ChallengeActionParameters <p>Additional parameter when Name is Challenge.</p>
     */
    public $ChallengeActionParameters;

    /**
     * @var BlockIPActionParameters <p>To be deprecated. Additional parameter when Name is BlockIP.</p>
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters <p>To be deprecated. An additional parameter when Name is ReturnCustomPage.</p>
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @param string $Name <p>Specific actions for safe execution. Valid values:</p><ul><li>Deny: block, prevent requests from accessing site resources;</li><li>Monitor: observe, only record logs;</li><li>Redirect: redirect to URL;</li><li>Disabled: not enabled, do not enable the specified rule;</li><li>Allow: pass, skip the remaining rules of the current security module. Delay response when the AllowActionParameters parameter is configured;</li><li>Challenge: challenge, respond with challenge content;</li><li>BlockIP: to be deprecated, IP blocking;</li><li>ReturnCustomPage: to be deprecated, use a specified page for interception;</li><li>JSChallenge: to be deprecated, JavaScript challenge;</li><li>ManagedChallenge: to be deprecated, managed challenge.</li></ul>
     * @param DenyActionParameters $DenyActionParameters <p>Additional parameter when Name is Deny.</p>
     * @param RedirectActionParameters $RedirectActionParameters <p>Additional parameter when Name is Redirect.</p>
     * @param AllowActionParameters $AllowActionParameters <p>Additional parameter when Name is Allow.</p>
     * @param ChallengeActionParameters $ChallengeActionParameters <p>Additional parameter when Name is Challenge.</p>
     * @param BlockIPActionParameters $BlockIPActionParameters <p>To be deprecated. Additional parameter when Name is BlockIP.</p>
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters <p>To be deprecated. An additional parameter when Name is ReturnCustomPage.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DenyActionParameters",$param) and $param["DenyActionParameters"] !== null) {
            $this->DenyActionParameters = new DenyActionParameters();
            $this->DenyActionParameters->deserialize($param["DenyActionParameters"]);
        }

        if (array_key_exists("RedirectActionParameters",$param) and $param["RedirectActionParameters"] !== null) {
            $this->RedirectActionParameters = new RedirectActionParameters();
            $this->RedirectActionParameters->deserialize($param["RedirectActionParameters"]);
        }

        if (array_key_exists("AllowActionParameters",$param) and $param["AllowActionParameters"] !== null) {
            $this->AllowActionParameters = new AllowActionParameters();
            $this->AllowActionParameters->deserialize($param["AllowActionParameters"]);
        }

        if (array_key_exists("ChallengeActionParameters",$param) and $param["ChallengeActionParameters"] !== null) {
            $this->ChallengeActionParameters = new ChallengeActionParameters();
            $this->ChallengeActionParameters->deserialize($param["ChallengeActionParameters"]);
        }

        if (array_key_exists("BlockIPActionParameters",$param) and $param["BlockIPActionParameters"] !== null) {
            $this->BlockIPActionParameters = new BlockIPActionParameters();
            $this->BlockIPActionParameters->deserialize($param["BlockIPActionParameters"]);
        }

        if (array_key_exists("ReturnCustomPageActionParameters",$param) and $param["ReturnCustomPageActionParameters"] !== null) {
            $this->ReturnCustomPageActionParameters = new ReturnCustomPageActionParameters();
            $this->ReturnCustomPageActionParameters->deserialize($param["ReturnCustomPageActionParameters"]);
        }
    }
}
