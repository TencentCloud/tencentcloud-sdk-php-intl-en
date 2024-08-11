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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional compilation task info
 *
 * @method string getTCMPPErrMsg() Obtain TCMPP error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTCMPPErrMsg(string $TCMPPErrMsg) Set TCMPP error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWXErrMsg() Obtain WX Error Message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWXErrMsg(string $WXErrMsg) Set WX Error Message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWXQrCode() Obtain WeChat QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWXQrCode(string $WXQrCode) Set WeChat QR code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSizeInfo() Obtain Compile size Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSizeInfo(string $SizeInfo) Set Compile size Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPVersionCompileTaskExtInfo extends AbstractModel
{
    /**
     * @var string TCMPP error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TCMPPErrMsg;

    /**
     * @var string WX Error Message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WXErrMsg;

    /**
     * @var string WeChat QR code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WXQrCode;

    /**
     * @var string Compile size Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SizeInfo;

    /**
     * @param string $TCMPPErrMsg TCMPP error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WXErrMsg WX Error Message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WXQrCode WeChat QR code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SizeInfo Compile size Information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TCMPPErrMsg",$param) and $param["TCMPPErrMsg"] !== null) {
            $this->TCMPPErrMsg = $param["TCMPPErrMsg"];
        }

        if (array_key_exists("WXErrMsg",$param) and $param["WXErrMsg"] !== null) {
            $this->WXErrMsg = $param["WXErrMsg"];
        }

        if (array_key_exists("WXQrCode",$param) and $param["WXQrCode"] !== null) {
            $this->WXQrCode = $param["WXQrCode"];
        }

        if (array_key_exists("SizeInfo",$param) and $param["SizeInfo"] !== null) {
            $this->SizeInfo = $param["SizeInfo"];
        }
    }
}
