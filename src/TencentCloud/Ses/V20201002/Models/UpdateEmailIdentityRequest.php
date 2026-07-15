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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEmailIdentity request structure.
 *
 * @method string getEmailIdentity() Obtain <p>Domain name for request verification</p>
 * @method void setEmailIdentity(string $EmailIdentity) Set <p>Domain name for request verification</p>
 * @method boolean getNewAPI() Obtain <p>Match the new and old APIs in the console</p>
 * @method void setNewAPI(boolean $NewAPI) Set <p>Match the new and old APIs in the console</p>
 * @method integer getDKIMOption() Obtain <p>dkim digits</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul>
 * @method void setDKIMOption(integer $DKIMOption) Set <p>dkim digits</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul>
 */
class UpdateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string <p>Domain name for request verification</p>
     */
    public $EmailIdentity;

    /**
     * @var boolean <p>Match the new and old APIs in the console</p>
     */
    public $NewAPI;

    /**
     * @var integer <p>dkim digits</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul>
     */
    public $DKIMOption;

    /**
     * @param string $EmailIdentity <p>Domain name for request verification</p>
     * @param boolean $NewAPI <p>Match the new and old APIs in the console</p>
     * @param integer $DKIMOption <p>dkim digits</p><p>Enumeration value:</p><ul><li>0: 1024</li><li>1: 2048</li><li>2: Dual signature</li></ul>
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
        if (array_key_exists("EmailIdentity",$param) and $param["EmailIdentity"] !== null) {
            $this->EmailIdentity = $param["EmailIdentity"];
        }

        if (array_key_exists("NewAPI",$param) and $param["NewAPI"] !== null) {
            $this->NewAPI = $param["NewAPI"];
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }
    }
}
