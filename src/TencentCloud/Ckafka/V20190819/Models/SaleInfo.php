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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sales information of versions.
 *
 * @method boolean getFlag() Obtain The manually configured flag. valid values: true (sold-out), false (available).
 * @method void setFlag(boolean $Flag) Set The manually configured flag. valid values: true (sold-out), false (available).
 * @method string getVersion() Obtain Specifies the ckafka version number (1.1.1/2.4.2/0.10.2).
 * @method void setVersion(string $Version) Set Specifies the ckafka version number (1.1.1/2.4.2/0.10.2).
 * @method string getPlatform() Obtain Pro edition, standard version flag.
 * @method void setPlatform(string $Platform) Set Pro edition, standard version flag.
 * @method boolean getSoldOut() Obtain Specifies whether the item is sold-out. valid values: true (sold-out).
 * @method void setSoldOut(boolean $SoldOut) Set Specifies whether the item is sold-out. valid values: true (sold-out).
 */
class SaleInfo extends AbstractModel
{
    /**
     * @var boolean The manually configured flag. valid values: true (sold-out), false (available).
     */
    public $Flag;

    /**
     * @var string Specifies the ckafka version number (1.1.1/2.4.2/0.10.2).
     */
    public $Version;

    /**
     * @var string Pro edition, standard version flag.
     */
    public $Platform;

    /**
     * @var boolean Specifies whether the item is sold-out. valid values: true (sold-out).
     */
    public $SoldOut;

    /**
     * @param boolean $Flag The manually configured flag. valid values: true (sold-out), false (available).
     * @param string $Version Specifies the ckafka version number (1.1.1/2.4.2/0.10.2).
     * @param string $Platform Pro edition, standard version flag.
     * @param boolean $SoldOut Specifies whether the item is sold-out. valid values: true (sold-out).
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
        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SoldOut",$param) and $param["SoldOut"] !== null) {
            $this->SoldOut = $param["SoldOut"];
        }
    }
}
