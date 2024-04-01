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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getData() Obtain Custom message data.
 * @method void setData(string $Data) Set Custom message data.
 * @method string getDesc() Obtain Customize the message description information.
 * @method void setDesc(string $Desc) Set Customize the message description information.
 * @method string getExt() Obtain Extended Fields
 * @method void setExt(string $Ext) Set Extended Fields
 */
class CustomMsgContent extends AbstractModel
{
    /**
     * @var string Custom message data.
     */
    public $Data;

    /**
     * @var string Customize the message description information.
     */
    public $Desc;

    /**
     * @var string Extended Fields
     */
    public $Ext;

    /**
     * @param string $Data Custom message data.
     * @param string $Desc Customize the message description information.
     * @param string $Ext Extended Fields
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }
    }
}
