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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sales information of Standard Edition
 *
 * @method boolean getFlag() Obtain Manually set flag.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFlag(boolean $Flag) Set Manually set flag.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain CKafka version (v1.1.1/2.4.2/0.10.2）
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set CKafka version (v1.1.1/2.4.2/0.10.2）
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPlatform() Obtain Whether it is Pro Edition or Standard Edition.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPlatform(string $Platform) Set Whether it is Pro Edition or Standard Edition.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getSoldOut() Obtain Whether it has been sold out. `true`: sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSoldOut(boolean $SoldOut) Set Whether it has been sold out. `true`: sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class SaleInfo extends AbstractModel
{
    /**
     * @var boolean Manually set flag.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Flag;

    /**
     * @var string CKafka version (v1.1.1/2.4.2/0.10.2）
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Whether it is Pro Edition or Standard Edition.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Platform;

    /**
     * @var boolean Whether it has been sold out. `true`: sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SoldOut;

    /**
     * @param boolean $Flag Manually set flag.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Version CKafka version (v1.1.1/2.4.2/0.10.2）
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Platform Whether it is Pro Edition or Standard Edition.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $SoldOut Whether it has been sold out. `true`: sold out.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
