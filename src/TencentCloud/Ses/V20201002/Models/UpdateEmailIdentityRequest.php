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
 * @method string getEmailIdentity() Obtain Domain to be verified.
 * @method void setEmailIdentity(string $EmailIdentity) Set Domain to be verified.
 * @method boolean getNewAPI() Obtain The  DKIMOption parameter is effective or not
 * @method void setNewAPI(boolean $NewAPI) Set The  DKIMOption parameter is effective or not
 * @method integer getDKIMOption() Obtain dkim option, 0: 1024, 1: 2048, 2: both
 * @method void setDKIMOption(integer $DKIMOption) Set dkim option, 0: 1024, 1: 2048, 2: both
 */
class UpdateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string Domain to be verified.
     */
    public $EmailIdentity;

    /**
     * @var boolean The  DKIMOption parameter is effective or not
     */
    public $NewAPI;

    /**
     * @var integer dkim option, 0: 1024, 1: 2048, 2: both
     */
    public $DKIMOption;

    /**
     * @param string $EmailIdentity Domain to be verified.
     * @param boolean $NewAPI The  DKIMOption parameter is effective or not
     * @param integer $DKIMOption dkim option, 0: 1024, 1: 2048, 2: both
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
