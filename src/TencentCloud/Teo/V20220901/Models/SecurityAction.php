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
 * @method string getName() Obtain Safe execution actions. valid values:.
<Li>Deny: block request to access site resource;</li>.
<Li>`Monitor`: observe; only record logs</li>.
<li>`Redirect`: Redirect to URL</li>.
<Li>Disabled: disabled; specify rule is not enabled.</li>.
<Li>Allow: allow access but delay processing the request.</li>.
<Li>Challenge: challenge, respond to challenge content;</li>.
<Li>BlockIP: to be deprecated, ip block;</li>.
<Li>`ReturnCustomPage`: to be deprecated, use specified page block;</li>.
<li>JSChallenge: to be deprecated, JavaScript challenge;</li>.
<Li>ManagedChallenge: to be deprecated. managed challenge.</li>.
 * @method void setName(string $Name) Set Safe execution actions. valid values:.
<Li>Deny: block request to access site resource;</li>.
<Li>`Monitor`: observe; only record logs</li>.
<li>`Redirect`: Redirect to URL</li>.
<Li>Disabled: disabled; specify rule is not enabled.</li>.
<Li>Allow: allow access but delay processing the request.</li>.
<Li>Challenge: challenge, respond to challenge content;</li>.
<Li>BlockIP: to be deprecated, ip block;</li>.
<Li>`ReturnCustomPage`: to be deprecated, use specified page block;</li>.
<li>JSChallenge: to be deprecated, JavaScript challenge;</li>.
<Li>ManagedChallenge: to be deprecated. managed challenge.</li>.
 * @method DenyActionParameters getDenyActionParameters() Obtain Additional parameters when Name is Deny.
 * @method void setDenyActionParameters(DenyActionParameters $DenyActionParameters) Set Additional parameters when Name is Deny.
 * @method RedirectActionParameters getRedirectActionParameters() Obtain Additional parameter when Name is Redirect.
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) Set Additional parameter when Name is Redirect.
 * @method AllowActionParameters getAllowActionParameters() Obtain Additional parameters when Name is Allow.
 * @method void setAllowActionParameters(AllowActionParameters $AllowActionParameters) Set Additional parameters when Name is Allow.
 * @method ChallengeActionParameters getChallengeActionParameters() Obtain Additional parameter when Name is Challenge.
 * @method void setChallengeActionParameters(ChallengeActionParameters $ChallengeActionParameters) Set Additional parameter when Name is Challenge.
 * @method BlockIPActionParameters getBlockIPActionParameters() Obtain To be deprecated, additional parameter when Name is BlockIP.
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) Set To be deprecated, additional parameter when Name is BlockIP.
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() Obtain To be deprecated, additional parameter when Name is ReturnCustomPage.
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) Set To be deprecated, additional parameter when Name is ReturnCustomPage.
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string Safe execution actions. valid values:.
<Li>Deny: block request to access site resource;</li>.
<Li>`Monitor`: observe; only record logs</li>.
<li>`Redirect`: Redirect to URL</li>.
<Li>Disabled: disabled; specify rule is not enabled.</li>.
<Li>Allow: allow access but delay processing the request.</li>.
<Li>Challenge: challenge, respond to challenge content;</li>.
<Li>BlockIP: to be deprecated, ip block;</li>.
<Li>`ReturnCustomPage`: to be deprecated, use specified page block;</li>.
<li>JSChallenge: to be deprecated, JavaScript challenge;</li>.
<Li>ManagedChallenge: to be deprecated. managed challenge.</li>.
     */
    public $Name;

    /**
     * @var DenyActionParameters Additional parameters when Name is Deny.
     */
    public $DenyActionParameters;

    /**
     * @var RedirectActionParameters Additional parameter when Name is Redirect.
     */
    public $RedirectActionParameters;

    /**
     * @var AllowActionParameters Additional parameters when Name is Allow.
     */
    public $AllowActionParameters;

    /**
     * @var ChallengeActionParameters Additional parameter when Name is Challenge.
     */
    public $ChallengeActionParameters;

    /**
     * @var BlockIPActionParameters To be deprecated, additional parameter when Name is BlockIP.
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters To be deprecated, additional parameter when Name is ReturnCustomPage.
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @param string $Name Safe execution actions. valid values:.
<Li>Deny: block request to access site resource;</li>.
<Li>`Monitor`: observe; only record logs</li>.
<li>`Redirect`: Redirect to URL</li>.
<Li>Disabled: disabled; specify rule is not enabled.</li>.
<Li>Allow: allow access but delay processing the request.</li>.
<Li>Challenge: challenge, respond to challenge content;</li>.
<Li>BlockIP: to be deprecated, ip block;</li>.
<Li>`ReturnCustomPage`: to be deprecated, use specified page block;</li>.
<li>JSChallenge: to be deprecated, JavaScript challenge;</li>.
<Li>ManagedChallenge: to be deprecated. managed challenge.</li>.
     * @param DenyActionParameters $DenyActionParameters Additional parameters when Name is Deny.
     * @param RedirectActionParameters $RedirectActionParameters Additional parameter when Name is Redirect.
     * @param AllowActionParameters $AllowActionParameters Additional parameters when Name is Allow.
     * @param ChallengeActionParameters $ChallengeActionParameters Additional parameter when Name is Challenge.
     * @param BlockIPActionParameters $BlockIPActionParameters To be deprecated, additional parameter when Name is BlockIP.
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters To be deprecated, additional parameter when Name is ReturnCustomPage.
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
