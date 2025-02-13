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
 * CreateIVRSession request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getCallee() Obtain Called.
 * @method void setCallee(string $Callee) Set Called.
 * @method integer getIVRId() Obtain Specified ivr id. currently, it supports inbound and automatic outbound types.
 * @method void setIVRId(integer $IVRId) Set Specified ivr id. currently, it supports inbound and automatic outbound types.
 * @method array getCallers() Obtain List of calling numbers.
 * @method void setCallers(array $Callers) Set List of calling numbers.
 * @method array getVariables() Obtain Custom variable.
 * @method void setVariables(array $Variables) Set Custom variable.
 * @method string getUUI() Obtain User data.
 * @method void setUUI(string $UUI) Set User data.
 */
class CreateIVRSessionRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Called.
     */
    public $Callee;

    /**
     * @var integer Specified ivr id. currently, it supports inbound and automatic outbound types.
     */
    public $IVRId;

    /**
     * @var array List of calling numbers.
     */
    public $Callers;

    /**
     * @var array Custom variable.
     */
    public $Variables;

    /**
     * @var string User data.
     */
    public $UUI;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $Callee Called.
     * @param integer $IVRId Specified ivr id. currently, it supports inbound and automatic outbound types.
     * @param array $Callers List of calling numbers.
     * @param array $Variables Custom variable.
     * @param string $UUI User data.
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

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("IVRId",$param) and $param["IVRId"] !== null) {
            $this->IVRId = $param["IVRId"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }
    }
}
