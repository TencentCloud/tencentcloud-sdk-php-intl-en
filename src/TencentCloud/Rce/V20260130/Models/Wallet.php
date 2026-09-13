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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of the digital wallet
 *
 * @method string getWalletType() Obtain <p>Wallet type</p><p>Enumeration value:</p><ul><li>crypto: Crypto currency</li><li>digital: Digital currency</li><li>fiat: Fiat currency</li></ul>
 * @method void setWalletType(string $WalletType) Set <p>Wallet type</p><p>Enumeration value:</p><ul><li>crypto: Crypto currency</li><li>digital: Digital currency</li><li>fiat: Fiat currency</li></ul>
 * @method string getWalletAddress() Obtain <p>The address of the wallet.Usually it is the ID of the wallet.</p>
 * @method void setWalletAddress(string $WalletAddress) Set <p>The address of the wallet.Usually it is the ID of the wallet.</p>
 * @method string getWalletHolderName() Obtain <p>The full name of the person who holds  the wallet</p>
 * @method void setWalletHolderName(string $WalletHolderName) Set <p>The full name of the person who holds  the wallet</p>
 * @method string getWalletProvider() Obtain <p>The provider of the wallet, such as wechat, alipay, paypal</p>
 * @method void setWalletProvider(string $WalletProvider) Set <p>The provider of the wallet, such as wechat, alipay, paypal</p>
 */
class Wallet extends AbstractModel
{
    /**
     * @var string <p>Wallet type</p><p>Enumeration value:</p><ul><li>crypto: Crypto currency</li><li>digital: Digital currency</li><li>fiat: Fiat currency</li></ul>
     */
    public $WalletType;

    /**
     * @var string <p>The address of the wallet.Usually it is the ID of the wallet.</p>
     */
    public $WalletAddress;

    /**
     * @var string <p>The full name of the person who holds  the wallet</p>
     */
    public $WalletHolderName;

    /**
     * @var string <p>The provider of the wallet, such as wechat, alipay, paypal</p>
     */
    public $WalletProvider;

    /**
     * @param string $WalletType <p>Wallet type</p><p>Enumeration value:</p><ul><li>crypto: Crypto currency</li><li>digital: Digital currency</li><li>fiat: Fiat currency</li></ul>
     * @param string $WalletAddress <p>The address of the wallet.Usually it is the ID of the wallet.</p>
     * @param string $WalletHolderName <p>The full name of the person who holds  the wallet</p>
     * @param string $WalletProvider <p>The provider of the wallet, such as wechat, alipay, paypal</p>
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
        if (array_key_exists("WalletType",$param) and $param["WalletType"] !== null) {
            $this->WalletType = $param["WalletType"];
        }

        if (array_key_exists("WalletAddress",$param) and $param["WalletAddress"] !== null) {
            $this->WalletAddress = $param["WalletAddress"];
        }

        if (array_key_exists("WalletHolderName",$param) and $param["WalletHolderName"] !== null) {
            $this->WalletHolderName = $param["WalletHolderName"];
        }

        if (array_key_exists("WalletProvider",$param) and $param["WalletProvider"] !== null) {
            $this->WalletProvider = $param["WalletProvider"];
        }
    }
}
