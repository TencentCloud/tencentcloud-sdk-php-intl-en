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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCallOutSession request structure.
 *
 * @method integer getSdkAppId() Obtain Application id.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id.
 * @method string getUserId() Obtain Customer service user id usually refers to the customer service email.
 * @method void setUserId(string $UserId) Set Customer service user id usually refers to the customer service email.
 * @method string getCallee() Obtain Called number must be preceded by 0086.
 * @method void setCallee(string $Callee) Set Called number must be preceded by 0086.
 * @method string getCaller() Obtain Caller number (obsolete one and use callers) must be preceded by 0086.
 * @method void setCaller(string $Caller) Set Caller number (obsolete one and use callers) must be preceded by 0086.
 * @method array getCallers() Obtain Designated caller number list. if the prior number fails, it will automatically switch to the next number that must be preceded by 0086.
 * @method void setCallers(array $Callers) Set Designated caller number list. if the prior number fails, it will automatically switch to the next number that must be preceded by 0086.
 * @method boolean getIsForceUseMobile() Obtain Whether to force the use of cell phone outbound call or not, currently only supports true, if true, please ensure that the allowlist has been configured.
 * @method void setIsForceUseMobile(boolean $IsForceUseMobile) Set Whether to force the use of cell phone outbound call or not, currently only supports true, if true, please ensure that the allowlist has been configured.
 * @method string getUui() Obtain Custom data, length limited to 1024 bytes.
 * @method void setUui(string $Uui) Set Custom data, length limited to 1024 bytes.
 * @method string getUUI() Obtain Custom data, length limited to 1024 bytes.
 * @method void setUUI(string $UUI) Set Custom data, length limited to 1024 bytes.
 */
class CreateCallOutSessionRequest extends AbstractModel
{
    /**
     * @var integer Application id.
     */
    public $SdkAppId;

    /**
     * @var string Customer service user id usually refers to the customer service email.
     */
    public $UserId;

    /**
     * @var string Called number must be preceded by 0086.
     */
    public $Callee;

    /**
     * @var string Caller number (obsolete one and use callers) must be preceded by 0086.
     */
    public $Caller;

    /**
     * @var array Designated caller number list. if the prior number fails, it will automatically switch to the next number that must be preceded by 0086.
     */
    public $Callers;

    /**
     * @var boolean Whether to force the use of cell phone outbound call or not, currently only supports true, if true, please ensure that the allowlist has been configured.
     */
    public $IsForceUseMobile;

    /**
     * @var string Custom data, length limited to 1024 bytes.
     * @deprecated
     */
    public $Uui;

    /**
     * @var string Custom data, length limited to 1024 bytes.
     */
    public $UUI;

    /**
     * @param integer $SdkAppId Application id.
     * @param string $UserId Customer service user id usually refers to the customer service email.
     * @param string $Callee Called number must be preceded by 0086.
     * @param string $Caller Caller number (obsolete one and use callers) must be preceded by 0086.
     * @param array $Callers Designated caller number list. if the prior number fails, it will automatically switch to the next number that must be preceded by 0086.
     * @param boolean $IsForceUseMobile Whether to force the use of cell phone outbound call or not, currently only supports true, if true, please ensure that the allowlist has been configured.
     * @param string $Uui Custom data, length limited to 1024 bytes.
     * @param string $UUI Custom data, length limited to 1024 bytes.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("IsForceUseMobile",$param) and $param["IsForceUseMobile"] !== null) {
            $this->IsForceUseMobile = $param["IsForceUseMobile"];
        }

        if (array_key_exists("Uui",$param) and $param["Uui"] !== null) {
            $this->Uui = $param["Uui"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }
    }
}
