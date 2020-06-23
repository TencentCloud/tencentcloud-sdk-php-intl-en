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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error code input parameter
 *
 * @method integer getCode() Obtain Custom response configuration error code.
 * @method void setCode(integer $Code) Set Custom response configuration error code.
 * @method string getMsg() Obtain Custom response configuration error message.
 * @method void setMsg(string $Msg) Set Custom response configuration error message.
 * @method string getDesc() Obtain Custom response configuration error code remarks.
 * @method void setDesc(string $Desc) Set Custom response configuration error code remarks.
 * @method integer getConvertedCode() Obtain Custom error code conversion.
 * @method void setConvertedCode(integer $ConvertedCode) Set Custom error code conversion.
 * @method boolean getNeedConvert() Obtain Whether to enable error code conversion.
 * @method void setNeedConvert(boolean $NeedConvert) Set Whether to enable error code conversion.
 */
class ResponseErrorCodeReq extends AbstractModel
{
    /**
     * @var integer Custom response configuration error code.
     */
    public $Code;

    /**
     * @var string Custom response configuration error message.
     */
    public $Msg;

    /**
     * @var string Custom response configuration error code remarks.
     */
    public $Desc;

    /**
     * @var integer Custom error code conversion.
     */
    public $ConvertedCode;

    /**
     * @var boolean Whether to enable error code conversion.
     */
    public $NeedConvert;

    /**
     * @param integer $Code Custom response configuration error code.
     * @param string $Msg Custom response configuration error message.
     * @param string $Desc Custom response configuration error code remarks.
     * @param integer $ConvertedCode Custom error code conversion.
     * @param boolean $NeedConvert Whether to enable error code conversion.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ConvertedCode",$param) and $param["ConvertedCode"] !== null) {
            $this->ConvertedCode = $param["ConvertedCode"];
        }

        if (array_key_exists("NeedConvert",$param) and $param["NeedConvert"] !== null) {
            $this->NeedConvert = $param["NeedConvert"];
        }
    }
}
