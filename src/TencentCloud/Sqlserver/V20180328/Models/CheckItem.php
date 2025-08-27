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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCheckName() Obtain 
 * @method void setCheckName(string $CheckName) Set 
 * @method string getCurrentValue() Obtain 
 * @method void setCurrentValue(string $CurrentValue) Set 
 * @method integer getPassed() Obtain 
 * @method void setPassed(integer $Passed) Set 
 * @method integer getIsAffect() Obtain 
 * @method void setIsAffect(integer $IsAffect) Set 
 * @method string getMsg() Obtain 
 * @method void setMsg(string $Msg) Set 
 * @method integer getMsgCode() Obtain 
 * @method void setMsgCode(integer $MsgCode) Set 
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $CheckName;

    /**
     * @var string 
     */
    public $CurrentValue;

    /**
     * @var integer 
     */
    public $Passed;

    /**
     * @var integer 
     */
    public $IsAffect;

    /**
     * @var string 
     */
    public $Msg;

    /**
     * @var integer 
     */
    public $MsgCode;

    /**
     * @param string $CheckName 
     * @param string $CurrentValue 
     * @param integer $Passed 
     * @param integer $IsAffect 
     * @param string $Msg 
     * @param integer $MsgCode 
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
        if (array_key_exists("CheckName",$param) and $param["CheckName"] !== null) {
            $this->CheckName = $param["CheckName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("IsAffect",$param) and $param["IsAffect"] !== null) {
            $this->IsAffect = $param["IsAffect"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("MsgCode",$param) and $param["MsgCode"] !== null) {
            $this->MsgCode = $param["MsgCode"];
        }
    }
}
