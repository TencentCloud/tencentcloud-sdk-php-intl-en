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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Secondary Industry Information
 *
 * @method string getId() Obtain Secondary industry id.
 * @method void setId(string $Id) Set Secondary industry id.
 * @method string getName() Obtain Secondary industry name.
 * @method void setName(string $Name) Set Secondary industry name.
 * @method string getTradeInfo() Obtain Industry information.
 * @method void setTradeInfo(string $TradeInfo) Set Industry information.
 */
class TradeTwoNode extends AbstractModel
{
    /**
     * @var string Secondary industry id.
     */
    public $Id;

    /**
     * @var string Secondary industry name.
     */
    public $Name;

    /**
     * @var string Industry information.
     */
    public $TradeInfo;

    /**
     * @param string $Id Secondary industry id.
     * @param string $Name Secondary industry name.
     * @param string $TradeInfo Industry information.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TradeInfo",$param) and $param["TradeInfo"] !== null) {
            $this->TradeInfo = $param["TradeInfo"];
        }
    }
}
