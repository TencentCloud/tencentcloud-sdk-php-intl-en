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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Action for security operation.
 *
 * @method string getName() Obtain Specific action name for security operation. Values:
<li>`Deny`: block</li> <li>`Monitor`: monitor</li> <li>`ReturnCustomPage`: block with customized page</li> <li>`Redirect`: Redirect to URL</li> <li>`BlockIP`: IP block</li> <li>`JSChallenge`: javaScript challenge</li> <li>`ManagedChallenge`: managed challenge</li> <li>`Disabled`: disabled</li> <li>`Allow`: allow</li>.
 * @method void setName(string $Name) Set Specific action name for security operation. Values:
<li>`Deny`: block</li> <li>`Monitor`: monitor</li> <li>`ReturnCustomPage`: block with customized page</li> <li>`Redirect`: Redirect to URL</li> <li>`BlockIP`: IP block</li> <li>`JSChallenge`: javaScript challenge</li> <li>`ManagedChallenge`: managed challenge</li> <li>`Disabled`: disabled</li> <li>`Allow`: allow</li>.
 * @method BlockIPActionParameters getBlockIPActionParameters() Obtain Additional parameter when Name is BlockIP.
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) Set Additional parameter when Name is BlockIP.
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() Obtain Additional parameter when Name is ReturnCustomPage.
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) Set Additional parameter when Name is ReturnCustomPage.
 * @method RedirectActionParameters getRedirectActionParameters() Obtain Additional parameter when Name is Redirect.
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) Set Additional parameter when Name is Redirect.
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string Specific action name for security operation. Values:
<li>`Deny`: block</li> <li>`Monitor`: monitor</li> <li>`ReturnCustomPage`: block with customized page</li> <li>`Redirect`: Redirect to URL</li> <li>`BlockIP`: IP block</li> <li>`JSChallenge`: javaScript challenge</li> <li>`ManagedChallenge`: managed challenge</li> <li>`Disabled`: disabled</li> <li>`Allow`: allow</li>.
     */
    public $Name;

    /**
     * @var BlockIPActionParameters Additional parameter when Name is BlockIP.
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters Additional parameter when Name is ReturnCustomPage.
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @var RedirectActionParameters Additional parameter when Name is Redirect.
     */
    public $RedirectActionParameters;

    /**
     * @param string $Name Specific action name for security operation. Values:
<li>`Deny`: block</li> <li>`Monitor`: monitor</li> <li>`ReturnCustomPage`: block with customized page</li> <li>`Redirect`: Redirect to URL</li> <li>`BlockIP`: IP block</li> <li>`JSChallenge`: javaScript challenge</li> <li>`ManagedChallenge`: managed challenge</li> <li>`Disabled`: disabled</li> <li>`Allow`: allow</li>.
     * @param BlockIPActionParameters $BlockIPActionParameters Additional parameter when Name is BlockIP.
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters Additional parameter when Name is ReturnCustomPage.
     * @param RedirectActionParameters $RedirectActionParameters Additional parameter when Name is Redirect.
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

        if (array_key_exists("BlockIPActionParameters",$param) and $param["BlockIPActionParameters"] !== null) {
            $this->BlockIPActionParameters = new BlockIPActionParameters();
            $this->BlockIPActionParameters->deserialize($param["BlockIPActionParameters"]);
        }

        if (array_key_exists("ReturnCustomPageActionParameters",$param) and $param["ReturnCustomPageActionParameters"] !== null) {
            $this->ReturnCustomPageActionParameters = new ReturnCustomPageActionParameters();
            $this->ReturnCustomPageActionParameters->deserialize($param["ReturnCustomPageActionParameters"]);
        }

        if (array_key_exists("RedirectActionParameters",$param) and $param["RedirectActionParameters"] !== null) {
            $this->RedirectActionParameters = new RedirectActionParameters();
            $this->RedirectActionParameters->deserialize($param["RedirectActionParameters"]);
        }
    }
}
