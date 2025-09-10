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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindNumberCallInInterface request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method string getNumber() Obtain Number to be bound.
 * @method void setNumber(string $Number) Set Number to be bound.
 * @method Interface getCallInInterface() Obtain Specifies the callback url to be bound.
 * @method void setCallInInterface(Interface $CallInInterface) Set Specifies the callback url to be bound.
 */
class BindNumberCallInInterfaceRequest extends AbstractModel
{
    /**
     * @var integer App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Number to be bound.
     */
    public $Number;

    /**
     * @var Interface Specifies the callback url to be bound.
     */
    public $CallInInterface;

    /**
     * @param integer $SdkAppId App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     * @param string $Number Number to be bound.
     * @param Interface $CallInInterface Specifies the callback url to be bound.
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CallInInterface",$param) and $param["CallInInterface"] !== null) {
            $this->CallInInterface = new Interface();
            $this->CallInInterface->deserialize($param["CallInInterface"]);
        }
    }
}
