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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transaction overview information display.
 *
 * @method string getTxId() Obtain Transaction ID
 * @method void setTxId(string $TxId) Set Transaction ID
 * @method string getChaincodeName() Obtain Contract name.
 * @method void setChaincodeName(string $ChaincodeName) Set Contract name.
 * @method string getSender() Obtain Transaction sender.
 * @method void setSender(string $Sender) Set Transaction sender.
 * @method string getCreateTime() Obtain Transaction creation time.
 * @method void setCreateTime(string $CreateTime) Set Transaction creation time.
 * @method integer getBlockHeight() Obtain The block height where the trading platform is located.
 * @method void setBlockHeight(integer $BlockHeight) Set The block height where the trading platform is located.
 * @method integer getTxIndex() Obtain The serial number of a transaction in a block.
 * @method void setTxIndex(integer $TxIndex) Set The serial number of a transaction in a block.
 */
class Transaction extends AbstractModel
{
    /**
     * @var string Transaction ID
     */
    public $TxId;

    /**
     * @var string Contract name.
     */
    public $ChaincodeName;

    /**
     * @var string Transaction sender.
     */
    public $Sender;

    /**
     * @var string Transaction creation time.
     */
    public $CreateTime;

    /**
     * @var integer The block height where the trading platform is located.
     */
    public $BlockHeight;

    /**
     * @var integer The serial number of a transaction in a block.
     */
    public $TxIndex;

    /**
     * @param string $TxId Transaction ID
     * @param string $ChaincodeName Contract name.
     * @param string $Sender Transaction sender.
     * @param string $CreateTime Transaction creation time.
     * @param integer $BlockHeight The block height where the trading platform is located.
     * @param integer $TxIndex The serial number of a transaction in a block.
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
        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("Sender",$param) and $param["Sender"] !== null) {
            $this->Sender = $param["Sender"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("TxIndex",$param) and $param["TxIndex"] !== null) {
            $this->TxIndex = $param["TxIndex"];
        }
    }
}
